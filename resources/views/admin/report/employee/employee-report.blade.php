@extends('admin.layouts.master')
@section('title', 'employee-report')
@section('content')
    <style>
        @media print {
            #printbtn {
                display: none;
            }

            #reloadButton {
                display: none;
            }

            #main-footer {
                display: none;
            }

            #search {
                display: none;
            }

            a[href]:after {
                content: none !important;
            }
        }

        .table {
            width: 100%;
        }

        .table thead,
        .table tbody {
            border: 1px solid #000;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 5px;
            line-height: 1.42857143;
            border: 1px solid #000;
        }
    </style>

    <section class="content-header">
        <h1>
            Employee Report
            <small> Employee Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee Report</a></li>
            <li class="active"> Employee Report</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <div align="right">
                    <button id ="printbtn" type="button" value="Print this page" onclick="window.print();"><i
                            class="fa fa-print"></i> Print</button>
                    <button id ="reloadButton" onclick="myFunction()">Reload page</button>
                </div>
                <script>
                    function myFunction() {
                        location.reload();
                    }
                </script>
                <h4 align="center" class="page-header" style="text-transform:uppercase;">
                    <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px"
                        style="height: 80px;width: 200px;margin-left: %">
                    <span></span><br>
                    <span style="font-size: 15px">
                    </span><br />
                    <span style="font-size: 15px">
                        Employee Report
                    </span>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center">SL</th>
                            <th class="text-center">Employee Type</th>
                            <th class="text-center">Employee Name</th>
                            <th class="text-center">Present Address</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Customer Images</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $item)
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->employeetype->employee_type}}</td>
                            <td>{{$item->employee_name}}</td>
                            <td>{{$item->permanent_address}}</td>
                            <td>{{$item->mobile_number}}</td>
                            <td class="text-center"><img src="{{asset($item->employee_images)}}" alt="Image"
                                    width="50px" height="50px" class='img-circle' /></td>
                            <td class="text-center">
                                <span class="label label-{{$item->status==1?'success':'danger'}}" style="font-size: 14px;">{{$item->status==1?'Active':'Deactive'}}</span>
                            </td>
                        </tr>
                        @empty
                        @endforelse

                </table>
            </div>
            <!-- /.col
            </div>
                <!-- /.row -->
    </section>



@endsection
