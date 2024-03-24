@extends('admin.layouts.master')
@section('title', 'Cash-stattement')

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
            Cash Statement
            <small> Cash Statement</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Cash Statement</a></li>
            <li class="active"> Cash Statement</li>
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
                    <img src="company_logo/" alt="logo" style="height: 160px;width: 200px;"><br/>
                    <span style="font-size: 15px">
                                            </span><br/>
                    <span style="font-size: 15px">
                        Cash Statement
                    </span><br>
                    <span style="font-size: 12px;margin-left: 30px">
                                                Date               : 21-03-2024                                               <span style="float: right;">21-03-2024</span>
                    </span>
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
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                 <table class="table table-striped">
                    <thead>
                        <tr style="background-color: #029653;color: #fff">
                            <th style="width: 10px;text-align: center">SL</th>
                            <th style="width: 80px;text-align: center">Date</th>
                            <th style="width: 160px;text-align: center">Particulars</th>
                            <th style="width: 100px;text-align: center">Voucher Type</th>
                            <th style="width: 100px;text-align: center">Debit</th>
                            <th style="width: 100px;text-align: center">Credit</th>
                            <th style="width: 120px;text-align: center">Remarks</th>
                        </tr>
                    </thead>
                    <tbody>

                        <tr>
                            <th colspan="4" style="width: 350px;text-align: left; color: red">Opening Balance</th>
                            <th style="width: 100px;text-align: right;color: red">44476051.33</th>
                            <th style="width: 100px;text-align: right;color: red"></th>
                            <th style="width: 120px;text-align: center"></th>
                        </tr>




                        <tr>
                            <th colspan="4" style="width: 350px;text-align: left; color: red">Total Amount</th>
                            <th style="width: 100px;text-align: right;color: red">44476051.33</th>
                            <th style="width: 100px;text-align: right;color: red">0.00</th>
                            <th style="width: 120px;text-align: left;color: red;font-size: 13px">Closing balance : 44476051.33</th>
                        </tr>
                    </tbody>
                </table>
            </div>

    </section>

@endsection
