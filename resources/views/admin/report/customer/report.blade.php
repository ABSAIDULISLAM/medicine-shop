@extends('admin.layouts.master')
@section('title', 'customer-details')

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
            Customer Report
            <small> Customer Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Customer Report</a></li>
            <li class="active"> Customer Report</li>
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
                        Customer Report
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
                            <th>Customer Name</th>
                            <th>Address</th>
                            <th>Contact Number</th>
                            <th class="text-right">Previous Dues</th>
                        </tr>
                    </thead>
                    <tbody>
                                                        <tr>
                                    <td>1</td>
                                    <td class="text-left"><a href="view-customer?id=1111" target="_blank">Aslam </a></td>
                                    <td></td>
                                    <td>Savar</td>
                                    <td></td>
                                    <td class="text-right">32.00</td>
                                </tr>
                                                                <tr>
                                    <td>2</td>
                                    <td class="text-left"><a href="view-customer?id=1243" target="_blank">Athik</a></td>
                                    <td></td>
                                    <td>s</td>
                                    <td></td>
                                    <td class="text-right">-95.00</td>
                                </tr>
                                                                <tr>
                                    <td>3</td>
                                    <td class="text-left"><a href="view-customer?id=1248" target="_blank">Benoy</a></td>
                                    <td>Benoy</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-right">500.00</td>
                                </tr>
                                                                <tr>
                                    <td>4</td>
                                    <td class="text-left"><a href="view-customer?id=1249" target="_blank">boshonto</a></td>
                                    <td>boshonto</td>
                                    <td></td>
                                    <td></td>
                                    <td class="text-right">5,050.00</td>
                                </tr>
                                                                <tr>
                                    <td>5</td>
                                    <td class="text-left"><a href="view-customer?id=1250" target="_blank">fvfvfv</a></td>
                                    <td></td>
                                    <td>yhbgbn</td>
                                    <td></td>
                                    <td class="text-right">1.00</td>
                                </tr>
                                                                <tr>
                                    <td>6</td>
                                    <td class="text-left"><a href="view-customer?id=1253" target="_blank">ghgh</a></td>
                                    <td></td>
                                    <td>Mirpur-1</td>
                                    <td></td>
                                    <td class="text-right">1.00</td>
                                </tr>
                                                                <tr>
                                    <td>7</td>
                                    <td class="text-left"><a href="view-customer?id=1233" target="_blank">Gulzar</a></td>
                                    <td></td>
                                    <td>Chattogram</td>
                                    <td></td>
                                    <td class="text-right">40.00</td>
                                </tr>
                                                                <tr>
                                    <td>8</td>
                                    <td class="text-left"><a href="view-customer?id=1238" target="_blank">Karim</a></td>
                                    <td></td>
                                    <td>Gobtoli Bazar </td>
                                    <td></td>
                                    <td class="text-right">36.00</td>
                                </tr>
                                                                <tr>
                                    <td>9</td>
                                    <td class="text-left"><a href="view-customer?id=1245" target="_blank">Mahfuz Azim</a></td>
                                    <td></td>
                                    <td>Cumilla, Bangladesh</td>
                                    <td></td>
                                    <td class="text-right">200.00</td>
                                </tr>
                                                                <tr>
                                    <td>10</td>
                                    <td class="text-left"><a href="view-customer?id=1143" target="_blank">Mamun (Kidmil)</a></td>
                                    <td></td>
                                    <td>Savar</td>
                                    <td></td>
                                    <td class="text-right">5.00</td>
                                </tr>
                                                                <tr>
                                    <td>11</td>
                                    <td class="text-left"><a href="view-customer?id=1136" target="_blank">Rafique </a></td>
                                    <td></td>
                                    <td>Sahibag , Savar ,Dhaka</td>
                                    <td></td>
                                    <td class="text-right">32.00</td>
                                </tr>
                                                                <tr>
                                    <td>12</td>
                                    <td class="text-left"><a href="view-customer?id=1199" target="_blank">Rincon</a></td>
                                    <td></td>
                                    <td>Landmark Splendid, Shyamoli</td>
                                    <td></td>
                                    <td class="text-right">101.00</td>
                                </tr>
                                                                <tr>
                                    <td>13</td>
                                    <td class="text-left"><a href="view-customer?id=1211" target="_blank">Walk in Coustomar</a></td>
                                    <td></td>
                                    <td>Karmadha</td>
                                    <td></td>
                                    <td class="text-right">50.00</td>
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

