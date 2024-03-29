@extends('admin.layouts.master')
@section('title', 'customer-due-report')

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
            Customer Due Report
            <small> Customer Due Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Customer Due Report</a></li>
            <li class="active"> Customer Due Report</li>
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
                    <img src="company_logo/" alt="logo" height="50px" width="150px" style="height: 50px;width: 150px;margin-left: -16%">
                    <span></span><br>
                    <span style="font-size: 15px">
                                            </span><br/>
                    <span style="font-size: 15px">
                        Customer Due Report
                    </span><br/>
                    <span style="font-size: 15px">
                       Date : 01-03-2024  To 21-03-2024                    </span>
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
                                    <input style="height: 29px;width:100%" type="date" name="from_date" value="2024-03-21">
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
                                    <input style="height: 29px;width:100%" type="date" name="to_date" value="2024-03-21">
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
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center" style="width: 20px;">SL</th>
                            <th class="text-center" style="width: 200px;">Company Name</th>
                            <th class="text-center" style="width: 80px;">Op.Balance</th>
                            <th class="text-center" style="width: 80px;">Sales</th>
                            <th class="text-center" style="width: 80px;">Collection</th>
                            <th class="text-center" style="width: 80px;">Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                            <tr >
                                <td class="text-center" style="width: 20px;">1</td>
                                <td class="text-left" style="width: 200px;">
                                   <a href="{{route('Report.customer.statement')}}" target="_blank"> Arif</a>
                                </td>
                                <td class="text-right" style="width: 80px;">0.00</td>
                                <td class="text-right" style="width: 80px;">10.00</td>
                                <td class="text-right" style="width: 80px;">10.00</td>
                                <td class="text-right" style="width: 80px;">0.00</td>
                            </tr>
                    </tbody>
                    <tfoot>
                        <tr id="tftd">
                            <th class="text-center" style="width: 320px;" colspan="2">Total</th>
                            <th class="text-right" style="width: 80px;font-size: 14px">5953.00</th>
                            <th class="text-right" style="width: 80px;font-size: 14px">10.00</th>
                            <th class="text-right" style="width: 80px;font-size: 14px">10.00</th>
                            <th class="text-right" style="width: 80px;font-size: 15px"><strong>5953.00</strong></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.col
        </div>
            <!-- /.row -->
    </section>


@endsection
