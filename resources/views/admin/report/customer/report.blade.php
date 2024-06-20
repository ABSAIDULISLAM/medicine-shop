@extends('admin.layouts.master')
@section('title', 'customer-details')

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
            Customer Report
            <small> Customer Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Customer Report</a></li>
            <li class="active"> Customer Report</li>
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
                        Customer Report
                    </span>
                </h4>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th>SL</th>
                            <th>Company Name</th>
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th class="text-right">Previous Dues</th>
                        </tr>
                    </thead>
                    @php
                        $due = 0;
                    @endphp
                    <tbody>
                        @forelse ($customers as $index => $item)
                        @php
                            $prevDue = \App\Models\CustomerLedger::where('customer_id', $item->id)->orderBy('id', 'desc')->value('previous_due');
                            $due += $prevDue;
                        @endphp
                        <tr>
                            <td>{{ $index + 1 }}</td>
                            <td class="text-left"><a href="{{ route('Report.customer.statement',['cusId'=>$item->id])}}" target="_blank">{{ $item->company_name }}</a></td>
                            <td>{{ $item->contact_person }}</td>
                            <td>{{ $item->address }}</td>
                            <td>{{ $item->contact_num }}</td>
                            <td class="text-right">{{ $prevDue ??' 0.00' }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="6">No Record Available</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style='color : red'>Total Dues</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th class="text-right" style="color : red">{{ $due }}</th>
                        </tr>
                    </tfoot>
                </table>

            </div>
    </section>


@endsection
