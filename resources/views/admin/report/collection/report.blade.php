@extends('admin.layouts.master')
@section('title', 'collection-report')

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
            Collection Report
            <small> Collection Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Collection Report</a></li>
            <li class="active"> Collection Report</li>
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
                    <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px"
                            width="200px"><br />
                    <span style="font-size: 15px">
                    </span><br />
                    <span style="font-size: 15px">
                        Collection Report
                    </span><br />
                    <span style="font-size: 15px">
                        Date : {{$from_date}} To {{$to_date}} </span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="get" action="{{route('Report.collection.report')}}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-3">
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
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker2">To Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="to_date" value="{{$to_date}}" class="form-control pull-right" id="datepicker2"
                                        autocomplete="off">
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
                                        <option value="{{$item->id}}" {{$item->id == $cusName ? 'selected': ''}}>{{$item->company_name}}</option>
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
                            <th class="text-center">SL</th>
                            <th class="text-center">Payment Date</th>
                            <th class="text-center">Company Name</th>
                            <th class="text-center">Money Receipt</th>
                            <th class="text-center">Installment Paid</th>
                            <th class="text-center">Remarks</th>
                        </tr>
                    </thead>
                    @php
                        $total = 0;
                    @endphp
                    <tbody>
                        @forelse ($data as $item)
                        @php
                            $total += $item->paid;
                        @endphp
                        <tr>
                            <td>{{$loop->index+1}}</td>
                            <td>{{$item->collection_date}}</td>
                            <td>{{$item->customer->company_name}}</td>
                            <td>{{$item->money_reset}}</td>
                            <td>{{$item->paid}}</td>
                            <td>{{$item->remarks}}</td>
                        </tr>
                        @empty
                        <tr>
                            <td class="text-center" colspan="6">No Record Found</td>
                        </tr>
                        @endforelse

                    </tbody>
                    <tfoot>
                        <tr>
                            <th>Total</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th class="text-right">{{$total}}</th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
    </section>

@endsection
