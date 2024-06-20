@extends('admin.layouts.master')
@section('title', 'monthly-salary-sheet')

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
        Employee Salary Sheet
        <small> Employee Salary Sheet</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Employee Salary Sheet</a></li>
        <li class="active"> Employee Salary Sheet</li>
    </ol>
</section>
<!-- Main content -->
<section class="invoice">
    <!-- title row -->
    <div class="row">
        <div class="col-xs-12">
            <div align="right">
                <button id="printbtn" type="button" value="Print this page" onclick="window.print();"><i
                        class="fa fa-print"></i> Print</button>
                <button id="reloadButton" onclick="myFunction()">Reload page</button>
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
                    CHANDARA , KALIKAIR , GAZIPUR
                </span><br>
                <span style="font-size: 15px">
                    MONTHLY SALARY SHEET
                </span><br>
            </h4>
        </div>
        <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
            <form method="get" action="{{ route('Report.employee.monthly.salary.sheet') }}">
                @csrf
                <div class="row">
                    <div class="form-group col-md-1"></div>
                    <div class="form-group col-md-3">
                        <div class="form-group">
                            <label for="datepicker4">From Date </label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" value="{{ $from_date }}" name="from_date" class="form-control pull-right" id="datepicker4" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-group">

                            <label for="datepicker2">To Date</label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" value="{{ $to_date }}" name="to_date" class="form-control pull-right" id="datepicker2" autocomplete="off" required>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-3">
                        <div class="form-group">
                            <label for="employee_id">Employee Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select name="employee_id" id="employee_id" class="form-control select2" style="width: 100%;">
                                    <option value="0">ALL</option>
                                    @foreach ($empType as $item)
                                    <option value="{{ $item->id }}" @if ($employee_id == $item->id) selected @endif>{{ $item->employee_type }}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="form-group col-md-1">
                        <button type="submit" class="btn btn-primary" style="margin-top:25px">Search</button>
                    </div>
                </div>
            </form>
        </div>
        <!-- /.col -->
    </div>
    <div class="row">
        <div class="col-xs-12 table-responsive">
            <table class="table table-bordered table-striped">
                <thead style="font-size: 11px">
                    <tr style="background-color: #14A586;color: #fff;">
                        <th class="text-center" style="width: 20px;">SL</th>
                        <th class="text-center" style="width: 120px;">Employee Name</th>
                        <th class="text-center" style="width: 60px;">Previous Balance</th>
                        <th class="text-center" style="width: 60px;">Salary Amount</th>
                        <th class="text-center" style="width: 80px;">Payment Amount</th>
                        <th class="text-center" style="width: 80px;">Current Balance</th>
                    </tr>
                </thead>
                <tbody>
                    @php
                    $total_salary_amount = 0;
                    $total_previous_balance = 0;
                    $total_payment_amount = 0;
                    $total_current_balance = 0;
                    @endphp
                    @foreach($employees as $employee)
                    @php
                    $total_salary_amount += $employee->total_salary;
                    $total_previous_balance += $employee->previous_balance;
                    $total_payment_amount += $employee->payment_amount;
                    $total_current_balance += $employee->current_balance;
                    @endphp
                    <tr>
                        <td class="text-center" style="width: 20px;">{{ $loop->index + 1 }}</td>
                        <td class="text-left" style="width: 120px;"><a href="{{ route('Report.employee.ledger.statement',['employee_id'=>$employee->id]) }}"
                                target="_blank">{{ $employee->employee_name }}</a></td>
                        <td class="text-right" style="width: 60px;">{{ $employee->previous_balance }}</td>
                        <td class="text-right" style="width: 60px;">{{ $employee->total_salary }}</td>
                        <td class="text-right" style="width: 80px;">{{ $employee->payment_amount }}</td>
                        <td class="text-right" style="width: 80px;">{{ $employee->current_balance }}</td>
                    </tr>

                    @endforeach
                </tbody>
                <tfoot>
                    <tr id="tftd">
                        <th style="width: 20px;" class="text-center">Total</th>
                        <th class="text-center" style="width: 120px"></th>
                        <th style="width: 60px;font-size: 14px" class="text-right">{{ $total_previous_balance }}</th>
                        <th style="width: 60px;font-size: 14px" class="text-right">{{ $total_salary_amount }}</th>
                        <th style="width: 80px;font-size: 14px" class="text-right">{{ $total_payment_amount }}</th>
                        <th style="width: 80px;font-size: 14px" class="text-right"><strong>{{ $total_current_balance }}</strong></th>
                    </tr>
                </tfoot>
            </table>
        </div>
</section>
@endsection
