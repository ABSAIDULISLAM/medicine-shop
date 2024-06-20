
@extends('admin.layouts.master')
@section('title', 'Expired-medicine-report')
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
@section('content')

<section class="content-header">
    <h1>
        Medicine Ledger
        <small> Medicine Ledger</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Medicine Ledger</a></li>
        <li class="active"> Medicine Ledger</li>
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
                    dhana, bangladesh </span><br />
                <span style="font-size: 15px">
                    Product Ledger
                </span>
            </h4>
            <address>
                <strong>Medicine Name : {{$medicine->medicine_name}}</strong><br>
                Generic Name : {{$medicine->generic->generic_name}}<br>
                Company Name : {{$medicine->company->company_name}}.<br>
                Prepared By : Admin <br>
                Date : {{$from_date}} To {{$to_date}}
            </address>

        </div>
        <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
            <form method="get" action="">
                @csrf
                <div class="row">
                    <div class="form-group col-md-5"></div>
                    <div class="form-group col-md-3">
                        <div class="form-group">
                            <label for="datepicker4">From Date </label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" name="from_date" class="form-control pull-right" id="datepicker4"
                                    autocomplete="off" value="{{$from_date}}">
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
                                <input type="date" name="to_date" class="form-control pull-right" id="datepicker2"
                                    autocomplete="off"  value="{{$to_date}}">
                            </div>
                            <!-- /.input group -->
                        </div>
                    </div>
                    <div class="form-group col-md-1">
                        <button type="submit" class="btn btn-primary"
                            style="margin-top:25px">Search</button>
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
                        <th class="text-center" style="width: 100px;">Date</th>
                        <th class="text-center" style="width: 100px;">Medicine Name</th>
                        <th class="text-center" style="width: 100px;">Generic Name</th>
                        <th class="text-center" style="width: 100px;">Consumner</th>
                        <th class="text-center" style="width: 100px;">Debit Qty</th>
                        <th class="text-center" style="width: 100px;">Credit Qty</th>
                        <th class="text-center" style="width: 100px;">Remakrs</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td colspan="5" style="width: 420px;color: red">Opening Balance</td>
                        <td class="text-center" style="width: 80px;color: red">0.00</td>
                        <td style="width: 100px;"></td>
                        <td style="width: 100px;"></td>
                    </tr>
                    @php
                        $debit = 0;
                        $credit = 0;
                    @endphp
                    @forelse ($medicine->ledger ?? [] as $item)
                    @php
                        $debit += $item->debit_qty;
                        $credit += $item->credit_qty;
                    @endphp
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->date }}</td>
                            <td>{{$item->medicine_id}}</td>
                            <td>{{$item->generic_id}}</td>
                            <td>{{$item->consumer}}</td>
                            <td>{{$item->debit_qty}}</td>
                            <td>{{$item->credit_qty}}</td>
                            <td></td>
                        </tr>
                    @empty
                        <tr>
                            <td class="text-center" colspan="8">No Data Found</td>
                        </tr>
                    @endforelse
                </tbody>
                <tfoot>
                    <tr id="tftd">
                        <th style="width: 20px;">Total</th>
                        <th colspan="4" style="width: 300px;font-size: 12px">
                        </th>
                        <th class="text-center" style="width: 100px;font-size: 12px">{{$debit}}</th>
                        <th class="text-center" style="width: 100px;font-size: 12px">{{$credit}}</th>
                        <th style="width: 100px;font-size: 12px">
                            <strong>Curr. Stock :
                                {{ $credit - $debit}} </strong>
                        </th>
                    </tr>
                </tfoot>
            </table>
        </div>
    </div>
</section>
@endsection

