@extends('admin.layouts.master')
@section('title', 'employee-report')
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
            Employee Report
            <small> Employee Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee Report</a></li>
            <li class="active"> Employee Report</li>
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
                        Employee Report
                    </span>
                </h4>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center">SL</th>
                            <th class="text-center">Employee Type</th>
                            <th class="text-center">Employee Name</th>
                            <th class="text-center">Present Address</th>
                            <th class="text-center">Mobile Number</th>
                            <th class="text-center">Customer Images</th>
                            <th class="text-center">Status</th>
                        </tr>
                    </thead>
                    <tbody>

                            <tr>
                                <td>1</td>
                                <td>
                                    Administration Department                                </td>
                                <td>Md.ashed hossin</td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><img src="assets/employee_images/" alt="Image"  width="50px" height="50px" class='img-circle'/></td>
                                <td class="text-center">
                                                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                        </td>

                            </tr>

                            <tr>
                                <td>2</td>
                                <td>
                                    Sales Department                                </td>
                                <td>Md.Hafizulla</td>
                                <td></td>
                                <td></td>
                                <td class="text-center"><img src="assets/employee_images/" alt="Image"  width="50px" height="50px" class='img-circle'/></td>
                                <td class="text-center">
                                                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                        </td>

                            </tr>

                            <tr>
                                <td>3</td>
                                <td>
                                    Sales manager                                 </td>
                                <td>Sakib Al Hasan</td>
                                <td>khulna</td>
                                <td>01717999990</td>
                                <td class="text-center"><img src="assets/employee_images/1682303496.jpg" alt="Image"  width="50px" height="50px" class='img-circle'/></td>
                                <td class="text-center">
                                                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                        </td>

                            </tr>
                                            </table>
            </div>
            <!-- /.col
        </div>
            <!-- /.row -->
    </section>



@endsection
