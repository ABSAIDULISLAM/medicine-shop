@extends('admin.layouts.master')
@section('title', 'Stock-report')

@section('content')


    <section class="content-header">
        <h1>
            Stock List
            <small> Stock List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Stock List</a></li>
            <li class="active"> Stock List</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Expire Medicine Report</h3>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="get" action="{{ route('Report.stock.report') }}">
                            @csrf
                            <input type="date" name="from_date" id="from_date" value="{{ $from_date }}"
                                style="width: 200px;">
                            <input type="date" name="to_date" id="to_date" value="{{ $to_date }}"
                                style="width: 200px;">
                            <input type="text" name="mediname" id="mediname" value="{{ $mediname }}"
                                style="width: 200px;" placeholder="Medicine Name">
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
                                            <td><a target="-blank"
                                                    href="{{ route('Report.medicine.statment', ['id' => $item->id]) }}"><i
                                                        class="fa fa-eye"></i></a></td>
                                            <td>{{ $item->medicine_name }}</td>
                                            <td>{{ $item->generic->generic_name ?? 'N/A' }}</td>
                                            <td>{{ $item->company->company_name ?? 'N/A' }}</td>
                                            <td>{{ $item->mediform->medicine_strength ?? 'N/A' }}</td>
                                            <td>{{ $item->medicine_strength ?? 'N/A' }}</td>
                                            <td>{{ $item->purchases_price ?? 'N/A' }}</td>
                                            <td>{{ $item->sale_price ?? 'N/A' }}</td>
                                            <td>{{ $item->stock }}</td>
                                            <td>{{ $total = $item->stock * $item->sale_price }} </td>

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
                                        <td><b>{{ $curStock }} p</b></td>
                                        <td><b>{{ $total }}/-</b></td>
                                    </tr>
                                </tfoot>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    {{-- @push('js')
        <script>
            $(document).ready(function() {

                $('#example').dataTable({
                    "pagingType": "simple_numbers",
                    "responsive": true,
                    "language": {
                        "emptyTable": "<h2 style='text-align:center;color:#ff5b5b;'>No Users found!!!</h2>",
                        "zeroRecords": "<h2 style='text-align:center;color:#ff5b5b;'>No Users records found</h2>"
                    },
                    "xhrFields": {
                        withCredentials: true
                    },
                    "bProcessing": true,
                    "sAjaxSource": "get-medicine-stock",
                    "bPaginate": true,
                    "sPaginationType": "full_numbers",
                    "iDisplayLength": 50,
                    "dom": 'lBfrtip',
                    "buttons": [
                        'excel', 'pdf', 'print'
                    ],
                    "aoColumns": [{
                            mData: 'sl'
                        },
                        {
                            mData: 'medicine_name'
                        },
                        {
                            mData: 'generic_name'
                        },
                        {
                            mData: 'company_name'
                        },
                        {
                            mData: 'medicine_form'
                        },
                        {
                            mData: 'medicine_strength'
                        },
                        {
                            mData: 'purchases_price'
                        },
                        {
                            mData: 'sale_price'
                        },
                        {
                            mData: 'currStock'
                        },
                        {
                            mData: 'stockAmount'
                        }
                    ]
                });
            });

            $(document).ready(function() {
                $('.company_id').select2({
                    minimumInputLength: 2,
                    allowClear: true,
                    placeholder: 'Please Enter Name',
                    ajax: {
                        url: 'ajax-response',
                        dataType: 'json',
                        delay: 250,
                        data: function(data) {
                            return {
                                searchCompany: data.term // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    }
                });
            });


            $(document).ready(function() {
                $('body').on("change", "#company_id", function() {
                    var com_id = $(this).val();

                    $('#example').dataTable({
                        "bDestroy": true,
                        "pagingType": "simple_numbers",
                        "responsive": true,
                        "language": {
                            "emptyTable": "<h2 style='text-align:center;color:#ff5b5b;'>No Users found!!!</h2>",
                            "zeroRecords": "<h2 style='text-align:center;color:#ff5b5b;'>No Users records found</h2>"
                        },
                        "xhrFields": {
                            withCredentials: true
                        },
                        "bProcessing": true,
                        "ajax": {
                            "dataType": 'json',
                            "type": "POST",
                            "url": "get-stock-by-com",
                            "data": {
                                "com_id": com_id
                            }
                        },
                        "bPaginate": true,
                        "sPaginationType": "full_numbers",
                        "iDisplayLength": 50,
                        "lengthMenu": [
                            [50, 75, 100, -1],
                            [50, 75, 100, "All"]
                        ],
                        "dom": 'lBfrtip',
                        "buttons": [
                            'excel', 'pdf', 'print'
                        ],
                        "aoColumns": [{
                                mData: 'sl'
                            },
                            {
                                mData: 'medicine_name'
                            },
                            {
                                mData: 'generic_name'
                            },
                            {
                                mData: 'company_name'
                            },
                            {
                                mData: 'medicine_form'
                            },
                            {
                                mData: 'medicine_strength'
                            },
                            {
                                mData: 'purchases_price'
                            },
                            {
                                mData: 'sale_price'
                            },
                            {
                                mData: 'currStock'
                            },
                            {
                                mData: 'stockAmount'
                            }
                        ]
                    });
                });
            });
        </script>
    @endpush --}}

@endsection
