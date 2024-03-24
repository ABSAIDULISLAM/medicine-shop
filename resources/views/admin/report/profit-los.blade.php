@extends('admin.layouts.master')
@section('title', 'profit-loss')

@section('content')
<style>
    @media print {
        #printbtn {
            display :  none;
        }
        #reloadButton {
            display :  none;
        }
        #main-footer{
            display :  none;
        }
        #search{
            display :  none;
        }
        a[href]:after {
            content: none !important;
        }
    }
    .table{width:100%;} .table thead, .table tbody{border:1px solid #000;}
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {padding:5px;line-height:1.42857143;border:1px solid #000;}
</style>

    <section class="content-header">
        <h1>
            Net Profit & Loss
            <small> Net Profit & Loss</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Net Profit & Loss</a></li>
            <li class="active"> Net Profit & Loss</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
        <div class="row">
            <div class="col-xs-12">
                <div align="right">
                    <button id ="printbtn" type="button" value="Print this page" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                    <button id ="reloadButton" onclick="myFunction()">Reload page</button>
                </div>
                <script>
                    function myFunction() {
                        location.reload();
                    }
                </script>
                <h4 align="center" class="page-header" style="text-transform:uppercase;">
                    <img src="company_logo/" alt="logo" height="50px" width="150px" style="height: 60px;width: 350px;"><br/>
                    <span style="font-size: 15px">
                                            </span><br/>
                    <span style="font-size: 15px">
                        Net Profit & Loss Report
                    </span><br>
                    <span style="font-size: 12px">
                        Date : 21-03-2024                        &nbsp;&nbsp; Prepared By :                      </span>
                </h4>
            </div>
            <div  style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="POST" action="">
                    <div class="row">
                        <div class="form-group col-md-5"></div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker4">From Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" name="from_date" class="form-control pull-right" value="2024-03-01" autocomplete="off" required="">
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
                                    <input type="date" name="to_date" class="form-control pull-right" value="2024-03-21" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>

                        <div class="form-group col-md-1">
                            <button type="submit" name="search_btn" class="btn btn-primary" style="margin-top:25px">Search</button>
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
                        <tr style="background-color: #cccccc;color: #000;">
                            <th class="text-center" style="width: 50%">Income</th>
                            <th class="text-center" style="width: 50%">Expense</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <table class="table table-bordered table-striped table-hover" style="font-size: 12px">
                                    <thead>
                                        <tr style="background-color: #14A586;color: #fff;">
                                            <th style="width: 10px">SL</th>
                                            <th class="text-left" style="width: 100px">Sales Date</th>
                                            <th class="text-center" style="width: 100px">Total Sales Amount</th>
                                            <th class="text-center" style="width: 100px">Total Cost Amount</th>
                                            <th class="text-center" style="width: 100px">Total Profit</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                                   <tr>
                                                <td style="width: 10px">1</td>
                                                <td class="text-left" style="width: 100px">
                                                    18-03-2024 <br/> MP17-21                                                </td>
                                                <td class="text-right" style="width: 100px">
                                                    10.00                                                </td>
                                                <td class="text-right" style="width: 100px">
                                                    10                                                </td>
                                                <td class="text-right" style="width: 100px">
                                                    0                                                </td>
                                            </tr>
                                                                                                                                                                </tbody>
                                    <tfoot>
                                        <tr>
                                            <td colspan="2" style="width: 130px"><strong>Total Income</strong></td>
                                            <td class="text-right" style="width: 100px"><strong>10.00</strong></td>
                                            <td class="text-right" style="width: 100px"><strong>10.00</strong></td>
                                            <td class="text-right" style="width: 100px"><strong>0.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </td>
                            <td>
                                <table class="table table-bordered table-striped table-hover" style="font-size: 12px">
                                    <thead>
                                        <tr style="background-color: #ff6600;color: #fff;">
                                            <th style="width: 10px">SL</th>
                                            <th class="text-center" style="width: 220px">Expense Head</th>
                                            <th class="text-center" style="width: 100px">Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                                                            </tbody>

                                    <tfoot>
                                        <tr>
                                            <td colspan="2" style="width: 330px"><strong>Total Expense</strong></td>
                                            <td class="text-right"><strong>0.00</strong></td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <table class="table table-bordered table-striped table-hover">
                    <thead>
                        <tr style="background-color: #6666ff;color: #fff;">
                            <th class="text-center">Total Income</th>
                            <th class="text-center">Total Expense</th>
                            <th class="text-center">Net Profit</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th class="text-center">0.00</th>
                            <th class="text-center">0.00</th>
                            <th class="text-center">0.00                            </th>
                        </tr>
                    </tbody>
                </table>
            </div>
            <!-- /.col
        </div>
            <!-- /.row -->
    </section>


@endsection
