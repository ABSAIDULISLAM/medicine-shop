
@extends('admin.layouts.master')
@section('title', 'employee-statement')

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
            Employee Ledger
            <small> Employee Ledger</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('Admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('Report.employee.ledger') }}">Employee Ledger</a></li>
            <li class="active"> Employee Ledger</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
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
                        style="height: 80px;width: 200px;margin-left: %"><br />
                    <span style="font-size: 15px">
                    </span><br />
                    <span style="font-size: 15px">
                        Employee Salary Ledger
                    </span><br>
                </h4>
                <address>
                    <strong>Employee Name : {{ $employee->employee_name }}</strong><br>
                    Address : {{ $employee->permanent_address }}<br>
                    Phone : {{ $employee->mobile_number }}<br>
                    Prepared By : Admin <br>
                    Date : {{ $from_date }} <strong>TO</strong> {{ $to_date }}
                </address>

            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="get" action="{{ route('Report.employee.ledger.statement') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-4"></div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker4">From Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="{{ $from_date }}" name="from_date"
                                        class="form-control pull-right" id="datepicker4" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker2">To Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="{{ $to_date }}" name="to_date"
                                        class="form-control pull-right" id="datepicker2" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
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
                <table class="table table-bordered table-striped" style="font-size: 12px">
                    <thead>
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center" style="width: 20px;">SL</th>
                            <th class="text-center" style="width: 70px;">Date</th>
                            <th class="text-center" style="width: 70px;">Voucher No</th>
                            <th class="text-center" style="width: 200px;">Description</th>
                            <th class="text-center" style="width: 60px;">Debit Amount</th>
                            <th class="text-center" style="width: 100px;">Credit Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="4" style="width: 300px;color: red">Opening Balance</td>
                            <td class="text-center" style="width: 80px;color: red">0.00</td>
                            <td style="width: 100px;"></td>
                        </tr>
                        @php
                            $debit = 0;
                            $credit = 0;
                        @endphp
                        @forelse ($employee->employeeledger ?? [] as $item)
                            @php
                                $debit += $item->debit;
                                $credit += $item->credit;
                            @endphp
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->date }}</td>
                                <td></td>
                                <td>{{ $item->description }}</td>
                                <td class="text-right">{{ $item->debit }}</td>
                                <td class="text-right">{{ $item->credit }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="6" class="text-center">No data available</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr id="tftd">
                            <th style="width: 20px;">Total</th>
                            <th style="width: 370px" colspan="3"></th>
                            <th class="text-right" style="width: 100px">{{ $debit }}</th>
                            <th class="text-right" style="width: 100px"><strong>{{ $credit }}</strong></th>
                        </tr>
                        <tr>
                            <th colspan="5">Current Balance : </th>
                            @php
                                $balance = $credit - $debit;
                                $balanceClass = $balance >= 0 ? 'text-success' : 'text-danger';
                            @endphp
                            <th class="text-right" style="color: red">
                                <span class="{{ $balanceClass }}">{{ abs($balance) }}</span>
                            </th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

@endsection
