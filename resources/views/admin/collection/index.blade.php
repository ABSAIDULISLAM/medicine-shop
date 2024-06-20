@extends('admin.layouts.master')

@section('title', 'collection-list')

@section('content')

    <section class="content-header">
        <h1>
            Collection List
            <small> Collection List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Collection</a></li>
            <li class="active"> Collection List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Collection</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('Collection.create')}}"><button type="button" class="btn bg-navy btn-flat">Add
                                    New</button></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="get" action="{{route('Collection.index')}}">
                            @csrf
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="{{$from_date}}">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="{{$to_date}}">
                            &nbsp;<select name="customer_id" id="customer_id" class="form-control select2"
                                style="width: 200px;">
                                <option value="0">ALL</option>
                                @forelse ($customer as $item)
                                    <option value="{{$item->id}}" {{$item->id==$cusId?'selected':''}}>{{$item->company_name}}</option>
                                @empty
                                @endforelse
                            </select>
                            <input type="submit" name="search_btn" value="Search">
                        </form>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th class="text-center">SL</th>
                                        <th class="text-center">Company Name</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Payment Date</th>
                                        <th class="text-center">Money Receipt</th>
                                        <th class="text-center">Previous Due</th>
                                        <th class="text-center">Paid</th>
                                        <th class="text-center">Current Dues</th>
                                        <th class="text-center">Remarks</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                    @php
                                        $total = 0
                                    @endphp
                                <tbody>
                                    @forelse ($data as $item)
                                        @php
                                            $total += $item->paid;
                                        @endphp
                                        <tr>
                                            <td>{{ $loop->index + 1 }}</td>
                                            <td>{{ optional($item->customer)->company_name }}</td>
                                            <td>{{ optional($item->customer)->address }}</td>
                                            <td>{{ $item->collection_date }}</td>
                                            <td>
                                                <a href="{{ route('Collection.money.recipt', ['id' => $item->id]) }}" onclick="return PopWindow(this.href, this.target);">{{ $item->money_reset }}</a>
                                            </td>
                                            <td>{{ $item->totalDues }}</td>
                                            <td>{{ $item->paid }}</td>
                                            <td>{{ $item->currDues }}</td>
                                            <td>{{ $item->remarks }}</td>
                                            <td>
                                                <a class="btn btn-sm btn-danger" href="{{ route('Collection.delete', ['id' => Crypt::encrypt($item->id)]) }}" onclick="return confirm('Are Your sure to Delete this item ??');">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>

                                    @empty
                                        <tr>
                                            <td colspan="10" class="text-center">No Record Found</td>
                                        </tr>
                                    @endforelse

                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <th>{{$total}}</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    <script>
        function PopWindow(url, win) {
                var ptr = window.open(url, win,
                    'width=850,height=500,top=100,left=250');
                return false;
            }
    </script>

@endsection
