@extends('admin.layouts.master')
@section('title', 'invoice-profit')

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
            Invoice Wise Profit & Loss
            <small> Invoice Wise Profit & Loss</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Invoice Wise Profit & Loss</a></li>
            <li class="active"> Invoice Wise Profit & Loss</li>
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
                        Invoice Wise Profit & Loss Report
                    </span><br />
                    <span style="font-size: 15px">
                        Date : {{ $from_date }} To {{ $to_date }} </span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="get" action="{{route('Report.invoice.profit')}}">
                    @csrf
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="form-group col-md-2">
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
                        <div class="form-group col-md-2">
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
                                <label for="customer_id">Company Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="customer_id" id="customer_id" class="form-control select2"
                                        style="width: 100%;">
                                        <option value="0">ALL</option>
                                        @forelse ($customer as $item)
                                            <option value="{{$item->id}}" {{$item->id==$cusId ? 'selected':''}}>{{$item->company_name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="created_by">Sales Man</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="created_by" id="created_by" class="form-control select2"
                                        style="width: 100%;">
                                        <option value="S">ALL</option>
                                        <option value="17">Software Solution Company</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <button type="submit" class="btn btn-primary"
                                style="margin-top:25px">Search</button>
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
                            <th class="text-center" style="width: 120px">Company Name</th>
                            <th class="text-center" style="width: 120px">Invoice No</th>
                            <th class="text-center" style="width: 100px">Date</th>
                            <th class="text-center" style="width: 100px">Total Cost Amount</th>
                            <th class="text-center" style="width: 100px">Total Sales Amount</th>
                            <th class="text-center" style="width: 100px">Profit/Loss</th>
                        </tr>
                    </thead>
                    @php
                        $total = 0;
                        $cash = 0;
                        $profitorLoss = 0;
                    @endphp
                    <tbody>
                        @forelse ($data as $item)
                        @php
                            $itemTotalAmount = $item->total_amount ?? 0;
                            $itemCashPaid = $item->cash_paid ?? 0;
                            $profit = $itemTotalAmount - $itemCashPaid;

                            $total += $itemTotalAmount;
                            $cash += $itemCashPaid;
                            $profitorLoss += $profit;
                        @endphp
                        <tr>
                            <td class="text-center">{{ $loop->index + 1 }}</td>
                            <td class="text-left">{{ optional($item->customer)->company_name }}</td>
                            <td class="text-left"><a href="bn/inv.php?inv=21" target="_blank">{{ $item->invoice_number }}</a></td>
                            <td class="text-right">{{ $item->date }}</td>
                            <td class="text-right">{{ $itemTotalAmount }}</td>
                            <td class="text-right">{{ $itemCashPaid }}</td>
                            <td class="text-right">{{ $profit }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="7">No Record Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Total</th>
                            <th class="text-right">{{ $total }}</th>
                            <th class="text-right">{{ $cash }}</th>
                            <th class="text-right">{{ $profitorLoss }}</th>
                        </tr>
                    </tfoot>

                </table>
            </div>
            </div>
    </section>


@endsection
