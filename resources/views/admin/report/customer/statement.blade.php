
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
    @includeIf('errors.error')
    <section class="invoice">
        <!-- title row -->
        @if (isset($filterdata))
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
                        <strong>Company Name : {{ $expense->company_name }}</strong><br>
                        Address : {{ $expense->address }}<br>
                        Phone : {{ $expense->contact_num }}<br>
                        Prepared By : {{$expense->creator->user_name}} <br>
                        Date : {{ $fromDate }} <strong>TO</strong> {{ $toDate }}
                    </address>

                </div>
                <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                    <form method="get" action="{{ route('Report.customer.ledger.statement.filter') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-4"></div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    @php
                                        $currentDate = Carbon\Carbon::now();
                                        $date = $currentDate->subDays(30)->format('Y-m-d');
                                    @endphp
                                    <label for="datepicker4">From Date </label>
                                    <input type="hidden" name="employee_id" value="{{ $cusId }}">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" value="{{ isset($fromDate) ? $fromDate : $date }}"
                                            name="from_date" class="form-control pull-right" id="datepicker4"
                                            autocomplete="off" required="">
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
                                        <input type="date" value="{{ isset($toDate) ? $toDate : date('Y-m-d') }}"
                                            name="to_date" class="form-control pull-right" id="datepicker2"
                                            autocomplete="off" required="">
                                        <input type="hidden" name="employee_id" class="form-control"
                                            value="{{ $cusId }}" autocomplete="off" required="">
                                    </div>
                                    <!-- /.input group -->
                                </div>
                            </div>
                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-primary" style="margin-top:25px">Search</button>
                            </div>
                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-primary" style="margin-top:25px" onclick="goBack()"><a
                                        href="{{ route('Report.employee.ledger.statement') }}"></a>Reset</button>
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
                                <th class="text-center" style="width: 70px;">Invoice No</th>
                                <th class="text-center" style="width: 60px;">Total Amount	</th>
                                <th class="text-center" style="width: 60px;">Cash Received	</th>
                                <th class="text-center" style="width: 150px;">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" style="width: 300px;color: red">Opening Balance</td>
                                <td class="text-center" style="width: 80px;color: red">0.00</td>
                                <td style="width: 100px;"></td>
                            </tr>
                            @php
                                $total = 0;
                                $paid = 0;
                            @endphp
                            @forelse ($expense->collection ?? [] as $item)
                                @php
                                    $total += $item->totalDues;
                                    $paid += $item->paid;
                                @endphp
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $item->date }}</td>
                                    <td class="text-center"> {{ $item->money_reset }}</td>
                                    <td class="text-center">{{ $item->totalDues }}</td>
                                    <td class="text-center">{{ $item->paid }}</td>
                                    <td class="text-center">{{ $item->remarks }}</td>
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
                                <th style="width: 370px" colspan="2"></th>
                                <th class="text-center" style="width: 100px">{{ $total }}</th>
                                <th class="text-center" style="width: 100px"><strong>{{ $paid }}</strong></th>
                                <th class="text-left" style="width: 100px">Balance :
                                    @php
                                        $balance = $total - $paid;
                                    @endphp
                                    <strong>{{ $balance }} </strong>
                                </th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
                <!-- /.col -->
            </div>
        @else
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
                            DHANA, BANGLADESH
                        </span><br>
                        <span style="font-size: 15px">
                            CUSTOMER LEDGER
                        </span><br>
                    </h4>
                    <address>
                        <strong>Company Name : {{ $expense->company_name }}</strong><br>
                        Address : {{ $expense->address }}<br>
                        Phone : {{ $expense->contact_num }}<br>
                        Prepared By : {{$expense->creator->user_name}} <br>
                        Date : {{ $fromDate }} <strong>TO</strong> {{ $toDate }}
                    </address>

                </div>
                <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                    <form method="get" action="{{ route('Report.customer.ledger.statement.filter') }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-5"></div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    @php
                                        $currentDate = Carbon\Carbon::now();
                                        $date = $currentDate->subDays(30)->format('Y-m-d');
                                    @endphp
                                    <label for="datepicker4">From Date </label>
                                    <input type="hidden" name="employee_id" value="{{ $cusId }}">
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" value="{{ $date }}" name="from_date"
                                            class="form-control pull-right" id="datepicker4" autocomplete="off"
                                            required="">
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
                                        <input type="date" value="{{ date('Y-m-d') }}" name="to_date"
                                            class="form-control pull-right" id="datepicker2" autocomplete="off"
                                            required="">
                                        <input type="hidden" name="employee_id" class="form-control"
                                            value="{{ $cusId }}" autocomplete="off" required="">
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
                                <th class="text-center" style="width: 70px;">Invoice No</th>
                                <th class="text-center" style="width: 60px;">Total Amount	</th>
                                <th class="text-center" style="width: 60px;">Cash Received	</th>
                                <th class="text-center" style="width: 150px;">Remarks</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td colspan="4" style="width: 300px;color: red">Opening Balance</td>
                                <td class="text-center" style="width: 80px;color: red">0.00</td>
                                <td style="width: 100px;"></td>
                            </tr>
                            @php
                                $total = 0;
                                $paid = 0;
                            @endphp
                            @forelse ($expense->collection ?? [] as $item)
                                @php
                                    $total += $item->totalDues;
                                    $paid += $item->paid;
                                @endphp
                                <tr>
                                    <td>{{ $loop->index + 1 }}</td>
                                    <td class="text-center">{{ $item->date }}</td>
                                    <td class="text-center"> <a href="">{{ $item->money_reset }}</a></td>
                                    <td class="text-center">{{ $item->totalDues }}</td>
                                    <td class="text-center">{{ $item->paid }}</td>
                                    <td class="text-center">{{ $item->remarks }}</td>
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
                                <th style="width: 370px" colspan="2"></th>
                                <th class="text-center" style="width: 100px">{{ $total }}</th>
                                <th class="text-center" style="width: 100px"><strong>{{ $paid }}</strong></th>
                                <th class="text-left" style="width: 100px">Balance :
                                    @php
                                        $balance = $total - $paid;
                                    @endphp
                                    <strong>{{ $balance }} </strong>
                                </th>
                            </tr>

                        </tfoot>
                    </table>
                </div>
                <!-- /.col -->
            </div>

        @endif
        <!-- /.row -->
    </section>

    <script>
        function goBack() {
            window.history.back();
        }
    </script>

@endsection
