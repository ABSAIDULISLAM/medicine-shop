@extends('admin.layouts.master')
@section('title', 'payment-report')

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

            @page {
                @bottom-center {
                    content: counter(page);
                }
            }

        }

        @page {
            @bottom-center {
                content: counter(page);
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
            Employee Expense Report
            <small> Employee Expense Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee Expense Report</a></li>
            <li class="active"> Employee Expense Report</li>
        </ol>
    </section>
    @includeIf('errors.error')
    <!-- Main content -->
    @if (isset($expense))
        <section class="invoice">
            <div class="row">
                <div class="col-xs-12">
                    <div align="right">
                        <button id="printbtn" type="button" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        <button id="reloadButton" onclick="location.reload();">Reload page</button>
                    </div>
                    <h4 align="center" class="page-header" style="text-transform:uppercase;">
                        <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px">
                        <br>
                        <span style="font-size: 15px">Employee Expense Report</span>
                        <br>
                        <span style="font-size: 15px">Date : {{ $fromDate }} <strong>TO</strong> {{ $toDate }}</span>
                    </h4>
                </div>
                <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                    <form method="get" action="{{ route('Report.employee.expense.filter') }}">
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
                                        <input type="date" value="{{ $fromDate ?? date('Y-m-d') }}" name="from_date" class="form-control pull-right" id="datepicker4" autocomplete="off" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    @php
                                        $currentDate = Carbon\Carbon::now();
                                        $date = $currentDate->subDays(30)->format('Y-m-d');
                                    @endphp
                                    <label for="datepicker2">To Date</label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" name="to_date" class="form-control pull-right" id="datepicker2" autocomplete="off" value="{{ $toDate ?? $date }}" required>
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
                                            @foreach ($employee as $item)
                                                <option value="{{ $item->id }}" {{ (isset($employeeId) && $employeeId == $item->id) ? 'selected' : '' }}>{{ $item->employee_name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-primary" style="margin-top:25px">Search</button>
                            </div>
                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-primary" style="margin-top:25px"><a href="{{route('Report.employee.expense')}}"></a>Reload</button>
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
                                <th class="text-center">SL</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Employee Name</th>
                                <th class="text-center">Voucher No</th>
                                <th class="text-center">Account Head</th>
                                <th class="text-center">Sub Head</th>
                                <th class="text-center">Purpose</th>
                                <th class="text-center">Amount</th>
                            </tr>
                        </thead>
                        @php
                            $total = 0;
                        @endphp
                        <tbody>
                            @forelse ($expense as $item)
                                @php
                                    $total += $item->amount;
                                @endphp
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $item->date }}</td>
                                    <td class="text-center">{{ $item->employee->employee_name }}</td>
                                    <td class="text-center">{{ $item->money_receipt }}</td>
                                    <td class="text-center">{{ $item->accounthead->head_name }}</td>
                                    <td class="text-center">{{ $item->subhead->sub_head }}</td>
                                    <td class="text-center">{{ $item->purpose }}</td>
                                    <td class="text-right">{{ $item->amount }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td colspan="8" class="text-center">No data available</td>
                                </tr>
                            @endforelse
                            <tr>
                                <th>Total</th>
                                <th colspan="6"></th>
                                <th class="text-right">{{ $total }}/-</th>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    @else

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
                            Employee Expense Report
                        </span><br />
                        <span style="font-size: 15px">
                    </h4>
                </div>
                <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                    <form method="get" action="{{ route('Report.employee.expense.filter') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    @php
                                        $currentDate = Carbon\Carbon::now();
                                        $date = $currentDate->subDays(30)->format('Y-m-d');
                                    @endphp
                                    <label for="datepicker4">From Date </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" value="{{ $date }}" name="from_date" class="form-control pull-right" id="datepicker4" autocomplete="off" required>
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
                                        <input type="date" name="to_date" class="form-control pull-right"
                                            id="datepicker2" autocomplete="off" value="{{ date('Y-m-d') }}" required>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="employee_id">Employee Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <select name="employee_id" id="employee_id" class="form-control select2"
                                            style="width: 100%;">
                                            <option value="0">ALL</option>
                                            @forelse ($employee as $item)
                                                <option value="{{ $item->id }}">{{ $item->employee_name }}</option>
                                            @empty
                                            @endforelse
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
                        <thead style="font-size: 10px">
                            <tr style="background-color: #14A586;color: #fff;">
                                <th class="text-center">SL</th>
                                <th class="text-center">Date</th>
                                <th class="text-center">Employee Name</th>
                                <th class="text-center">Voucher No</th>
                                <th class="text-center">Account Head</th>
                                <th class="text-center">Sub Head</th>
                                <th class="text-center">Purpose</th>
                                <th class="text-center">Amount</th>
                            </tr>
                        </thead>
                        @php
                            $total = 0;
                        @endphp

                        <tbody>
                            @forelse ($employeeExpense as $item)
                                @php
                                    $total += $item->amount;
                                @endphp
                                <tr>
                                    <td class="text-center">{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $item->date }}</td>
                                    <td class="text-center">{{ $item->employee->employee_name }}</td>
                                    <td class="text-center">{{ $item->money_receipt }}</td>
                                    <td class="text-center">{{ $item->accounthead->head_name }}</td>
                                    <td class="text-center">{{ $item->subhead->sub_head }}</td>
                                    <td class="text-center">{{ $item->purpose }}</td>
                                    <td class="text-right">{{ $item->amount }}</td>
                                </tr>
                            @empty
                            @endforelse
                            <tr>
                                <th>Total</th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th></th>
                                <th class="text-right">{{ $total }}/-</th>
                            </tr>
                    </table>
                </div>
        </section>

    @endif

@endsection
