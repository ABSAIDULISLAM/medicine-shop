@extends('admin.layouts.master')
@section('title', 'Stockout')

@section('content')

    <section class="content-header">
        <h1>
            Out Of Stock List
            <small> Out Of Stock List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Out Of Stock List</a></li>
            <li class="active"> Out Of Stock List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Stock out Report</h3>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="get" action="{{route('Report.stockout')}}">
                            @csrf
                            <input type="date" name="from_date" id="from_date"  value="{{$from_date}}" style="width: 200px;">
                            <input type="date" name="to_date" id="to_date" value="{{$to_date}}" style="width: 200px;">
                            <input type="text" name="mediname" id="mediname" value="{{$mediname}}" style="width: 200px;" placeholder="Medicine Name">
                            <button type="submit">Search</button>
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th style="width: 10px" class="text-center">SL</th>
                                        <th style="width: 80px" class="text-center">Medi.Name</th>
                                        <th style="width: 80px" class="text-center">Generic</th>
                                        <th style="width: 120px" class="text-center">Company</th>
                                        <th style="width: 120px" class="text-center">Medicine Form</th>
                                        <th style="width: 150px" class="text-center">Strength</th>
                                        <th style="width: 100px" class="text-right">Cost Price</th>
                                        <th style="width: 80px" class="text-center">Sales Price</th>
                                        <th style="width: 100px" class="text-center">Current Stock</th>
                                        <th style="width: 100px" class="text-center">Stock Amount</th>
                                    </tr>
                                </thead>
                                @php
                                    $curStock = 0;
                                    $total = 0;
                                @endphp
                                <tbody>
                                    @forelse ($stockMedicines as $item)
                                    @php
                                        $curStock += $item->stock;
                                        $total += $item->stock;
                                    @endphp
                                        <tr>
                                            <td><a target="-blank" href="{{route('Report.medicine.statment',['id'=>$item->id])}}"><i class="fa fa-eye"></i></a></td>
                                            <td>{{$item->medicine_name}}</td>
                                            <td>{{$item->generic->generic_name ?? 'N/A'}}</td>
                                            <td>{{$item->company->company_name ?? 'N/A'}}</td>
                                            <td>{{$item->mediform->medicine_strength ?? 'N/A'}}</td>
                                            <td>{{$item->medicine_strength ?? 'N/A'}}</td>
                                            <td>{{$item->purchases_price ?? 'N/A'}}</td>
                                            <td>{{$item->sale_price ?? 'N/A'}}</td>
                                            <td>{{$item->stock}}</td>
                                            <td>{{$total = $item->stock * $item->sale_price}} </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="12">No Expired Medicine Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <td><b>Total</b></td>
                                        <td colspan="7"></td>
                                        <td><b>{{$curStock}} p</b></td>
                                        <td><b>{{$total}}/-</b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


@push('js')
<script>

    $(document).ready(function () {
        var dataTable = $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "get-medicine-out-stock",
                type: "post"
            },
            dom: 'lBfrtip',
            "lengthMenu": [[50, 75, 100, -1], [50, 75, 100, "All"]],
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
    });
</script>
@endpush

@endsection
