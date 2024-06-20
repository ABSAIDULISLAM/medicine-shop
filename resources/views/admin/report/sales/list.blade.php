@extends('admin.layouts.master')
@section('title', 'sales-report')

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
            Sales Report
            <small> Sales Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sales Report</a></li>
            <li class="active"> Sales Report</li>
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
                    <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px"><br/>
                <span style="font-size: 15px">
                    <span style="font-size: 15px">
                    </span><br />
                    <span style="font-size: 15px">
                        Sales Details Report
                    </span><br />
                    <span style="font-size: 15px">
                        Date : {{$from_date}} To {{$to_date}} </span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="get" action="{{route('Report.sales.report')}}">
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
                                    <input type="date" name="from_date" value="{{$from_date}}" class="form-control pull-right" id="datepicker4"
                                        autocomplete="off" required="">
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
                                    <input type="date" name="to_date" value="{{$to_date}}" class="form-control pull-right" id="datepicker2"
                                        autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="customer_id">Customer Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="customer_id" id="customer_id" class="form-control select2"
                                        style="width: 100%;">
                                        <option value="0">ALL</option>
                                        @forelse ($customer as $item)
                                        <option value="{{$item->id}}" {{$item->id == $cusName ? 'selected':''}}>{{$item->company_name}}</option>
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
                                        <option value="0">ALL</option>
                                        @forelse ($users as $item)
                                        <option value="{{$item->id}}" {{$item->id == $sellerName ? 'selected':''}}>{{$item->company_name}}</option>
                                        @empty
                                        @endforelse
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
                            <th class="text-center" style="width: 100px">Total Amount</th>
                            <th class="text-center" style="width: 100px">Cash Received</th>
                            <th class="text-center" style="width: 100px">Due</th>
                        </tr>
                    </thead>
                    @php
                        $total = 0;
                        $paid = 0;
                        $due = 0;
                    @endphp
                    <tbody>
                        @forelse ($data ?? [] as $item)
                        @php
                            $total += $item->final_total;
                            $paid += $item->cash_paid;
                            $due += $item->due_amount;
                        @endphp
                            <tr>
                                <td class="text-center">{{$loop->index+1}}</td>
                                <td class="text-left">{{$item->customer->company_name}}</td>
                                <td class="text-left"><a href="{{route('Sales.invoice.print', ['id' => Crypt::encrypt($item->id)])}}" target="_blank">{{{$item->invoice_number}}}</a></td>
                                <td class="text-right">{{$item->date}}</td>
                                <td class="text-right">{{$item->final_total}}</td>
                                <td class="text-right">{{$item->cash_paid}}</td>
                                <td class="text-right">{{$item->due_amount}}</td>

                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="7">No Data Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Total</th>
                            <th class="text-right">{{$total}}</th>
                            <th class="text-right">{{$paid}}</th>
                            <th class="text-right">{{$due}}</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

    </section>

@endsection
