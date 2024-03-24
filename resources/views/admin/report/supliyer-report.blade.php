@extends('admin.layouts.master')
@section('title', 'supliyer-details')

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
            Supliyer Report
            <small> Supliyer Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Supliyer Report</a></li>
            <li class="active"> Supliyer Report</li>
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
                        Supliyer Report
                    </span>
                </h4>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th>SL</th>
                            <th>Company Name</th>
                            <th>Supliyer Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th class="text-right">Previous Dues</th>
                        </tr>
                    </thead>
                    <tbody>
                                <tr>
                                    <td>1</td>
                                    <td class="text-left"><a href="{{route('Report.supliyer.ledger')}}" target="_blank">Aslam </a></td>
                                    <td></td>
                                    <td>Savar</td>
                                    <td></td>
                                    <td class="text-right">32.00</td>
                                </tr>
                    </tbody>
                    <tfoot>
                        <tr>
                            <th style='color : red'>Total Dues</th>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <th class="text-right" style="color : red">5,953.00</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.col
        </div>
            <!-- /.row -->
    </section>


@endsection

