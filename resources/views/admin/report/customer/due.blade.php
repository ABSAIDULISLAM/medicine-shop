
@extends('admin.layouts.master')
@section('title', 'customer-due-report')

@section('content')
    <style>
        @media print {
            #printbtn, #reloadButton, #main-footer, #search {
                display: none;
            }

            a[href]:after {
                content: none !important;
            }
        }

        .table {
            width: 100%;
        }

        .table thead, .table tbody, .table>tbody>tr>td, .table>tbody>tr>th, .table>tfoot>tr>td, .table>tfoot>tr>th, .table>thead>tr>td, .table>thead>tr>th {
            border: 1px solid #000;
            padding: 5px;
            line-height: 1.42857143;
        }
    </style>

    <section class="content-header">
        <h1>
            Customer Due Report
            <small>Customer Due Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Customer Due Report</a></li>
            <li class="active">Customer Due Report</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <div align="right">
                    <button id="printbtn" type="button" value="Print this page" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <button id="reloadButton" onclick="myFunction()">Reload page</button>
                </div>
                <script>
                    function myFunction() {
                        location.reload();
                    }
                </script>
                <h4 align="center" class="page-header" style="text-transform:uppercase;">
                    <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px">
                    <span></span><br>
                    <span style="font-size: 15px">Customer Due Report</span><br />
                    <span style="font-size: 15px">Date: {{ $fromDate }} To {{ $toDate }}</span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="GET" action="{{ route('Report.customer.due') }}">
                    <div class="row">
                        <div class="form-group col-md-5"></div>
                        <div class="form-group col-md-3">
                            <label for="datepicker4">From Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input style="height: 29px;width:100%" type="date" name="from_date" value="{{ $fromDate }}">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="datepicker2">To Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input style="height: 29px;width:100%" type="date" name="to_date" value="{{ $toDate }}">
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <button type="submit" class="btn btn-primary" style="margin-top:25px">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center" style="width: 20px;">SL</th>
                            <th class="text-center" style="width: 200px;">Company Name</th>
                            <th class="text-center" style="width: 80px;">Op.Balance</th>
                            <th class="text-center" style="width: 80px;">Sales</th>
                            <th class="text-center" style="width: 80px;">Collection</th>
                            <th class="text-center" style="width: 80px;">Balance</th>
                        </tr>
                    </thead>
                    @php
                        $ob = 0;
                        $sale = 0;
                        $paid = 0;
                    @endphp
                    <tbody>
                        @forelse ($customerLedger ?? [] as $item)
                            @php
                                $ob += $item->customer->opening_balance ?? 0;
                                $sale += $item->sale->final_total ?? 0;
                                $paid += $item->collection->paid ?? 0;
                            @endphp
                            <tr>
                                <td class="text-center" style="width: 20px;">{{ $loop->index + 1 }}</td>
                                <td class="text-left" style="width: 200px;">
                                    <a href="{{ route('Report.customer.statement') }}" target="_blank">
                                        {{ $item->customer->company_name ?? ' ' }}</a>
                                </td>
                                <td class="text-right" style="width: 80px;">{{ $item->customer->opening_balance ?? 0 }}</td>
                                <td class="text-right" style="width: 80px;">{{ $item->sale->final_total ?? 0 }}</td>
                                <td class="text-right" style="width: 80px;">{{ $item->collection->paid ?? 0 }}</td>
                                <td class="text-right" style="width: 80px;">0.00</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No Record Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr id="tftd">
                            <th class="text-center" style="width: 320px;" colspan="2">Total</th>
                            <th class="text-right" style="width: 80px;font-size: 14px">{{ $ob ?? 0 }}</th>
                            <th class="text-right" style="width: 80px;font-size: 14px">{{ $sale ?? 0 }}</th>
                            <th class="text-right" style="width: 80px;font-size: 14px">{{ $paid ?? 0 }}</th>
                            <th class="text-right" style="width: 80px;font-size: 15px">
                                <strong>{{ ($sale ?? 0) - ($paid ?? 0) }}</strong>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>
@endsection
