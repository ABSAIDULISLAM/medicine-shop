@extends('admin.layouts.master')
@section('title', 'single-head-report')

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
</style>

    <section class="content-header">
        <h1>
           Head Wise Report
            <small>Head Wise Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Head Wise Report</a></li>
            <li class="active">Head Wise Report</li>
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
                        Head Wise Report
                    </span><br/>
                    <span style="font-size: 15px">
                       Date : 01-03-2024  To 21-03-2024                    </span>
                </h4>
            </div>
            <div  style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="POST" action="single-head-details">
                    <div class="row">
                        <div class="form-group col-md-2"></div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker4">From Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="text" name="from_date" class="form-control pull-right" id="datepicker4" autocomplete="off" required="">
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
                                    <input type="text" name="to_date" class="form-control pull-right" id="datepicker2" autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="account_head">Account Head</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="account_head" id="account_head" class="form-control select2" style="width: 100%;">
                                        <option value="0">ALL</option>
                                                                                    <option value="8">Administrative </option>
                                                                                    <option value="7">Projonmo</option>
                                                                            </select>
                                </div>
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
                <table class="table table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #cccccc">
                            <th class="text-center" style="width: 10px;">SL</th>
                            <th class="text-left" style="width: 200px;">Expense Head</th>
                            <th class="text-center" style="width: 200px;">Account</th>
                        </tr>
                    </thead>
                    <tbody>
                                           </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total Amount</th>
                            <th style="text-align: right">0.00</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>


@endsection
