@extends('admin.layouts.master')
@section('title', 'sales-details')

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
            Sales Details Report
            <small> Sales Details Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sales Details Report</a></li>
            <li class="active"> Sales Details Report</li>
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
                        Sales Details Report
                    </span><br/>
                    <span style="font-size: 15px">
                        Date : 01-03-2024  To 21-03-2024                    </span>
                </h4>
            </div>
            <div  style="margin-right:10px;margin-top:10px;padding:10px;" id="search">
                <form method="POST" action="sales-details">
                    <div class="row">

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
                                <label for="customer_id">Customer Name</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                    <select name="customer_id" id="customer_id" class="form-control select2" style="width: 100%;">
                                        <option value="0">ALL</option>
                                                                                    <option value="1213"></option>
                                                                                    <option value="1256">Zaman</option>
                                                                            </select>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                         <div class="form-group">
                            <label for="company_id">Supplier Name <span style="color: red"> *</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <select name="company_id" id="company_id" class="company_id form-control">
                                    <option value="S">ALL Supplier</option>
                                </select>
                            </div>
                         </div>
                        </div>
                        <div class="form-group col-md-3">
                         <div class="form-group">
                            <label for="medi_type">Medicine Type<span style="color: red"> *</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <select name="medi_type" id="medi_type" class="form-control select2">
                                    <option value="T">ALL Type</option>
                                                                            <option value="1">Medical </option>
                                                                            <option value="2">Medicine</option>
                                                                            <option value="3">Toiletries</option>
                                                                            <option value="4">Toiletries</option>
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
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586;color: #fff;">
                            <th class="text-center" style="width: 10px">SL</th>
                            <th class="text-center" style="width: 120px">Customer Name</th>
                            <th class="text-center" style="width: 120px">Suuplier Name</th>
                            <th class="text-center" style="width: 120px">Medicine Name</th>
                            <th class="text-center" style="width: 120px">Generic Name</th>
                            <th class="text-center" style="width: 100px">Date</th>
                            <th class="text-center" style="width: 100px">Sales Quantity</th>
                            <th class="text-center" style="width: 100px">Sales Price</th>
                            <th class="text-center" style="width: 100px">Sub Total</th>
                        </tr>
                    </thead>
                    <tbody>
                                                    <tr>
                                <td class="text-center">1</td>
                                <td class="text-left">
                                    Arif                                </td>
                                <td class="text-left">
                                    Beximco Pharmaceuticals Ltd.                                </td>
                                <td class="text-left">
                                    Napa extend                                </td>
                                <td class="text-left">
                                    Paracetamol                                </td>
                                <td class="text-center">2024-03-18</td>
                                <td class="text-right">5.00</td>
                                <td class="text-right">2.00</td>
                                <td class="text-right">10.00</td>

                            </tr>
                                                </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="6">Total</th>
                            <th class="text-right">5.00</th>
                            <th class="text-right">2.00</th>
                            <th class="text-right">10.00</th>
                        </tr>
                    </tfoot>
                </table>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>


@push('js')
<script>

    $(document).ready(function () {
        $('.company_id').select2({
            minimumInputLength: 2,
            allowClear: true,
            placeholder: 'Please Enter Name',
            ajax: {
                url: 'ajax-response',
                dataType: 'json',
                delay: 250,
                data: function (data) {
                    return {
                        searchCompany: data.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });
</script>
@endpush

@endsection
