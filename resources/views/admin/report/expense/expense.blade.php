@extends('admin.layouts.master')
@section('title', 'expense-report')

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
            Expense Report
            <small> Expense Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Expense Report</a></li>
            <li class="active"> Expense Report</li>
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
                        style="height: 80px;width: 200px;margin-left: %"><br />
                    <span style="font-size: 15px">
                    </span><br />
                    <span style="font-size: 15px">
                        Expense Report
                    </span><br>
                    <span style="font-size: 12px">
                        Date : {{ $from_date }} To {{ $to_date }} <br /> &nbsp;&nbsp; Prepared By : Admin</span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="get" action="{{ route('Report.expense.report') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker4">From Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="from_date" value="{{ $from_date }}"
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
                                    <input type="date" name="to_date" value="{{ $to_date }}"
                                        class="form-control pull-right" id="datepicker2" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="account_head">Account Head</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="account_head" id="account_head" class="form-control select2"
                                        style="width: 100%;">
                                        <option value="0">ALL</option>
                                        @forelse ($head as $item)
                                            <option value="{{ $item->id }}" {{ $item->id == $role ? 'selected' : '' }}>
                                                {{ $item->head_name }} </option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-2">
                            <div class="form-group">
                                <label for="payment_method">Payment Method</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="payment_method" id="payment_method" class="form-control select2"
                                        style="width: 100%;">
                                        <option value="0">ALL</option>
                                        <option value="1">Cash in Hand</option>
                                        <option value="2">Cheque Paid</option>
                                        <option value="3">Card Paid</option>
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
                            <th class="text-center" style="width: 10px">SL</th>
                            <th class="text-center" style="width: 100px">Date</th>
                            <th class="text-center" style="width: 70px">Vch No</th>
                            <th class="text-center" style="width: 100px">Acnt Head</th>
                            <th class="text-center" style="width: 100px">Sub Head</th>
                            <th class="text-center" style="width: 150px">Purpose</th>
                            <th class="text-center" style="width: 100px">Amount</th>
                        </tr>
                    </thead>
                    @php
                        $total = 0;
                    @endphp
                    <tbody>
                        @forelse ($data as $item)
                            @php
                                $total += $item->amount;
                            @endphp
                            <tr>
                                <td>{{ $loop->index + 1 }}</td>
                                <td>{{ $item->date }}</td>
                                <td><a href="{{ route('Report.expense.debit.vouchar', ['id' => $item->id]) }}"
                                        onclick="return PopWindow(this.href, this.target);">{{ $item->money_receipt }}</a>
                                </td>
                                <td>{{ $item->accounthead->head_name }}</td>
                                <td>{{ $item->subhead->sub_head }}</td>
                                <td>{{ $item->purpose }}</td>
                                <td>{{ $item->amount }}</td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="7">No Record Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <td style="width: 10px" colspan="6"><b>Total</b></td>
                            <td class="text-left" style="width: 100px"><b>{{ $total }}/-</b></td>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </section>

    <script>
        function PopWindow(url, win) {
            var ptr = window.open(url, win,
                'width=850,height=500,top=100,left=250');
            return false;
        }
    </script>
@endsection
