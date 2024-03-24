@extends('admin.layouts.master')
@section('title', 'purchase-report')

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
            Purchases Report
            <small> Purchases Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Purchases Report</a></li>
            <li class="active"> Purchases Report</li>
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
                        Purchases Report
                    </span><br />
                    <span style="font-size: 15px">
                        Date : 01-03-2024 To 21-03-2024 </span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="POST" action="">
                    <div class="row">
                        <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-3">
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
                        <div class="form-group col-md-3">
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
                                <label for="datepicker2">Supplier</label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <select name="supplier_id" id="supplier_id" class="form-control select2" required=""
                                        style="width: 200px;">
                                        <option value="0">ALL Supplier</option>
                                        <option value="1038"> BIO-TRADE INTERNATIONAL</option>
                                        <option value="715">Zuellig Pharma Bangladesh LTD.</option>
                                    </select>
                                </div>
                                <!-- /.input group -->
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
                            <th class="text-center">Date</th>
                            <th class="text-center">Supplier Name</th>
                            <th class="text-center">Invoice No</th>
                            <th class="text-center">Total Amount</th>
                            <th class="text-center">Payment</th>
                            <th class="text-center">Due</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                2024-03-20 </td>
                            <td>
                                BIO-TRADE INTERNATIONAL </td>
                            <td>17108847101</td>
                            <td class="text-right">749.60</td>
                            <td class="text-right">0.00</td>
                            <td class="text-right">749.60</td>
                        </tr>
                        <br />
                        <tr>
                            <th colspan="3"><sub id="ft"></sub>Total</th>
                            <th class="text-right">749.6</th>
                            <th class="text-right"></th>
                            <th class="text-right">749.6</th>
                        </tr>
                    </tbody>
                    </tbody>

                </table>
            </div>

    </section>

@endsection
