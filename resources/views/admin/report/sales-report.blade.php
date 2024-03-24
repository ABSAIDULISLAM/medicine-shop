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
                    <img src="company_logo/" alt="logo" height="50px" width="150px"
                        style="height: 60px;width: 350px;"><br />
                    <span style="font-size: 15px">
                    </span><br />
                    <span style="font-size: 15px">
                        Sales Details Report
                    </span><br />
                    <span style="font-size: 15px">
                        Date : 01-03-2024 To 21-03-2024 </span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="POST" action="sales-report">
                    <div class="row">
                        <div class="col-md-1"></div>
                        <div class="form-group col-md-2">
                            <div class="form-group">
                                <label for="datepicker4">From Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="from_date" class="form-control pull-right" id="datepicker4"
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
                                    <input type="text" name="to_date" class="form-control pull-right" id="datepicker2"
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
                                        <option value="1213"></option>
                                        <option value="1209">a</option>
                                        <option value="1256">Zaman</option>
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
                            <button type="submit" name="search_btn" class="btn btn-primary"
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
                    <tbody>
                        <tr>
                            <td class="text-center">1</td>
                            <td class="text-left">
                                Arif </td>
                            <td class="text-left"><a href="sales-invoice?inv=21" target="_blank">MP17-21</a></td>
                            <td class="text-right">2024-03-18</td>
                            <td class="text-right">10.00</td>
                            <td class="text-right">10.00</td>
                            <td class="text-right">0.00</td>

                        </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4">Total</th>
                            <th class="text-right">10.00</th>
                            <th class="text-right">10.00</th>
                            <th class="text-right">0.00</th>
                        </tr>
                    </tfoot>
                </table>
            </div>

    </section>


@endsection
