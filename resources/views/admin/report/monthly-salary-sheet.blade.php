@extends('admin.layouts.master')
@section('title', 'monthly-salary-sheet')

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
            Employee Salary Sheet
            <small> Employee Salary Sheet</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee Salary Sheet</a></li>
            <li class="active"> Employee Salary Sheet</li>
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
                    <img src="assets/img/logo.png" alt="logo" height="50px" width="150px" style="height: 50px;width: 150px;margin-left: -16%">
                    <span>KAJALI CNG FILLING STATION</span><br>
                    <span style="font-size: 15px">
                        CHANDARA , KALIKAIR , GAZIPUR
                    </span><br/>
                    <span style="font-size: 15px">
                        Monthly Salary Sheet
                    </span>
                    <br>
                                    </h4>
            </div>
            <div  style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
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
                                <label for="customer_id">Employee Type</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="emp_type" id="emp_type" class="form-control select2" style="width: 100%;">
                                        <option value="0">All</option>
                                                                                    <option value="1">Administration Department</option>
                                                                                    <option value="3">Sales Department</option>
                                                                                    <option value="4">Legal Admiration Department</option>
                                                                                    <option value="6">Shop Support Department </option>
                                                                                    <option value="7">Delivery Department </option>
                                                                                    <option value="8">Sales manager </option>
                                                                                    <option value="9"></option>
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
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 11px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center" style="width: 20px;">SL</th>
                            <th class="text-center" style="width: 120px;">Employee Name</th>
                            <th class="text-center" style="width: 60px;">Previous Balance</th>
                            <th class="text-center" style="width: 60px;">Salary Amount</th>
                            <th class="text-center" style="width: 80px;">Payment Amount</th>
                            <th class="text-center" style="width: 80px;">Current Balance</th>
                        </tr>
                    </thead>
                    <tbody>
                                                    <tr>
                                <td class="text-center" style="width: 20px;">1</td>
                                <td class="text-left" style="width: 120px;"><a href="{{route('Report.employee.statement')}}" target="_blank">Md.Hafizulla</a></td>
                                <td class="text-right" style="width: 60px;">0.00</td>
                                <td class="text-right" style="width: 60px;"></td>
                                <td class="text-right" style="width: 80px;"></td>
                                <td class="text-right" style="width: 80px;">0.00</td>
                            </tr>
                                                        <tr>
                                <td class="text-center" style="width: 20px;">2</td>
                                <td class="text-left" style="width: 120px;"><a href="employee-statement?ledInfo=2024-03-01,2024-03-31,2" target="_blank">Md.ashed hossin</a></td>
                                <td class="text-right" style="width: 60px;">0.00</td>
                                <td class="text-right" style="width: 60px;"></td>
                                <td class="text-right" style="width: 80px;"></td>
                                <td class="text-right" style="width: 80px;">0.00</td>
                            </tr>
                                                        <tr>
                                <td class="text-center" style="width: 20px;">3</td>
                                <td class="text-left" style="width: 120px;"><a href="employee-statement?ledInfo=2024-03-01,2024-03-31,3" target="_blank">Sakib Al Hasan</a></td>
                                <td class="text-right" style="width: 60px;">0.00</td>
                                <td class="text-right" style="width: 60px;"></td>
                                <td class="text-right" style="width: 80px;"></td>
                                <td class="text-right" style="width: 80px;">0.00</td>
                            </tr>
                                                </tbody>
                    <tfoot>
                        <tr id="tftd">
                            <th style="width: 20px;">Total</th>
                            <th class="text-center" style="width: 120px"></th>
                            <th style="width: 60px;font-size: 14px" class="text-right">0.00</th>
                            <th style="width: 60px;font-size: 14px" class="text-right">0.00</th>
                            <th style="width: 80px;font-size: 14px" class="text-right"><strong>0.00</strong></th>
                            <th style="width: 80px;font-size: 14px" class="text-right"><strong>0.00</strong></th>
                        </tr>
                    </tfoot>
                        </tr>
                </table>
            </div>
            <!-- /.col
        </div>
            <!-- /.row -->
    </section>


@endsection

