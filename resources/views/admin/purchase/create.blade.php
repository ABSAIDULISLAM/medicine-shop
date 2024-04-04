@extends('admin.layouts.master')

@section('title', 'add-Purchase')

@section('content')
    <style>
        .ui-menu {
            margin-right: 21% !important;
        }
    </style>

    <section class="content-header">
        <h1>
            Purchases
            <small>Add Purchases</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Purchases</a></li>
            <li class="active">Add Purchases</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Purchases</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('Purchase.store')}}">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="supplier_id">Supplier Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select name="supplier_id" id="supplier_id" class="form-control select2"
                                                required="">
                                                <option value="">Select Supplier</option>
                                                <option value="715">Zuellig Pharma Bangladesh LTD.</option>
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="button" style="padding: 8px;height: 34px"
                                                    data-toggle="modal" data-target="#addContact"
                                                    class="btn btn-default btn-flat"><i
                                                        style="vertical-align: 0% !important;"
                                                        class="fa fa-plus-circle text-primary fa-lg"
                                                        aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="invoice_amount">Total Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="final_amount" id="invoice_amount"
                                                class="form-control" placeholder="0.00" readonly="">
                                            <input type="hidden" id="hiddenInvoiceAmount" class="form-control"
                                                placeholder="0.00" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Payment</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                                            <input type="text" name="payment" class="form-control" id="payment"
                                                oninput="paymentAmount(this.id)" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="previous_dues">Previous Dues</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="previous_dues" id="previous_dues"
                                                class="form-control" autocomplete="off" required=""
                                                placeholder="0.00" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="discount" class="form-control" id="discount"
                                                oninput="discountAmount(this.id)" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dues">Dues</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" class="form-control" name="dues" id="dues"
                                                placeholder="0.00" autocomplete="off" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="invoice_number">Invoice Number <span
                                                style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" name="invoice_number" id="invoice_number"
                                                class="form-control" value="17110103191" autocomplete="off"
                                                required="" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="shipping_charge">Shipping Charge</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="shipping_charge" class="form-control"
                                                id="shipping_charge" oninput="shippingAmount(this.id)" placeholder="0.00"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group" id="bank_name" style="display:none;">
                                        <label for="bank_id">Bank Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                            <select name="bank_id" id="bank_id" class="form-control select2"
                                                style="width: 100%">
                                                <option value="">Select Bank</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="datepicker">Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="date" class="form-control pull-right"
                                                id="datepicker" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment_method">Payment Method</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <select name="payment_method" id="payment_method" class="form-control"
                                                onchange="change()" required="" style="width: 100%;">
                                                <option value="0">Cash in Hand</option>
                                                <option value="1">Cheque</option>
                                                <option value="2">Bkash</option>
                                                <option value="3">Rocket</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="cheque_no" style="display:none;">
                                        <label for="cheque_number">Cheque Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" name="cheque_no" class="form-control"
                                                id="cheque_number" placeholder="Cheque Number" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="lname" class="text-danger"> Product Name <span style="color: red">
                                                *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bars"></i></span>
                                            <input type="text" name="search" id="tags" accesskey="A"
                                                class="form-control" placeholder="Enter Product Name / Product Code"
                                                autofocus="autofocus" autocomplete="off" />
                                            <span class="input-group-btn">
                                                <button type="button" style="padding: 8px;height: 34px"
                                                    data-toggle="modal" data-target="#addMedicine"
                                                    class="btn btn-default btn-flat"><i
                                                        style="vertical-align: 0% !important;"
                                                        class="fa fa-plus-circle text-primary fa-lg"
                                                        aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div style="overflow-x:auto;">
                                        <table class="table tbl table-bordered table-striped table-hover">
                                            <thead>
                                                <tr style="background-color:#2E4D62 ;color: #fff;">
                                                    <th class="text-center" style='width: 10px;'>SL</th>
                                                    <th class="text-center" style='width: 150px;'>Product Name</th>
                                                    <th class="text-center" style='width: 100px;'>Quantity</th>
                                                    <th class="text-center" style='width: 100px;'>Cost Price</th>
                                                    <th class="text-center" style='width: 100px;'>Sales Price</th>
                                                    <th class="text-center" style='width: 100px;'>Expire Date</th>
                                                    <th class="text-center" style='width: 100px;'>Rack No</th>
                                                    <th class="text-center" style='width: 120px;'>Sub Total</th>
                                                    <th class="text-center" style='width: 80px;'>Stock</th>
                                                    <th class="text-center" style='width: 70px;'>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="7" style="width:660px">Total</td>
                                                    <td class="center" style="width:120px">
                                                        <input type="text" class="form-control totalAmount"
                                                            id="totalAmount" name="total_amount" value="0.00"
                                                            style="width: 100%;color: red;font-weight:bold;text-align: center"
                                                            readonly>
                                                        <input type="hidden" class="form-control hiddenTotalAmount"
                                                            id="hiddenTotalAmount" readonly>
                                                    </td>
                                                    <td style='width: 80px;'></td>
                                                    <td style='width: 70px;'></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" name="saveBtn" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>

    <div id="addContact" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Supplier</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="" id="contactform">
                        <label>Supplier Name</label>
                        <input type="text" name="company_name" id="company_name" class="form-control"
                            placeholder="Customer Name" autocomplete="off" />
                        <br />
                        <label>Mobile Number</label>
                        <input type="text" name="contact_num" id="contact_num" class="form-control"
                            placeholder="Mobile Number" autocomplete="off" />
                        <input type="hidden" name="created_by" id="created_by" value="17"
                            class="form-control" placeholder="Company Name" autocomplete="off" />
                        <input type="hidden" name="status" id="status" value="1" class="form-control"
                            placeholder="Company Name" autocomplete="off" />
                        <input type="hidden" name="contact_type" id="contact_type" value="2"
                            class="form-control" autocomplete="off" />
                        <br />
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control"
                            placeholder="Address" autocomplete="off" />
                        <br />
                        <input type="button" value="Submit" id="addSupplier" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <div id="addMedicine" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #07855f;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Medicine</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="" id="medicineform">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="medicine_name">Medicine Name <span style="color: red"> *</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                                        <input type="text" id="medicine_name" class="form-control"
                                            placeholder="Medicine Name" autocomplete="off" required="">
                                        <input type="hidden" id="created_by" class="form-control" value="17"
                                            autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="medicine_form">Medicine Form</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                        <select id="medicine_form" class="medicine_form form-control"
                                            style="width: 100%"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="company_id">Company Name <span style="color: red"> *</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                        <select id="company_id" class="company_id form-control"
                                            style="width: 100%"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="purchases_price">Purchases Prices <span style="color: red">
                                            *</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text" id="purchases_price" class="form-control"
                                            placeholder="Purchases Prices" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="min_stock">Minimum Stock</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text" id="min_stock" class="form-control"
                                            placeholder="Minimum Stock" autocomplete="off">
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-group">
                                    <label for="generic_id">Generic Name </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                        <select id="generic_id" class="generic_id form-control"
                                            style="width: 100%"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="medicine_strength">Strength </label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text" id="medicine_strength" class="form-control"
                                            placeholder="Strength" autocomplete="off">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="rack_id">Rack Number</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                        <select id="rack_id" class="rack_id form-control"
                                            style="width: 100%"></select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="sale_price">Sales Price <span style="color: red"> *</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                        <input type="text" id="sale_price" class="form-control"
                                            placeholder=" Sales Price" autocomplete="off" required="">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label for="opening_stock">Opening Stock<span style="color: red"> *</span></label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                        <input type="text" id="opening_stock" class="form-control"
                                            placeholder="Opening Stock" autocomplete="off" required="">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <input type="button" value="Submit" id="saveMedicine" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


    @push('js')
        <script>
            window.onload = function() {

                document.getElementById('loader_container').style.display = 'block';
                setTimeout(function() {
                    document.getElementById('loader_container').style.display = 'none';
                }, 600);

                var chart = new CanvasJS.Chart("chartContainer", {
                    animationEnabled: true,
                    theme: "light2",
                    title: {
                        text: "Monthly collection and Due rate against sales."
                    },
                    axisY: {
                        includeZero: true
                    },
                    legend: {
                        cursor: "pointer",
                        verticalAlign: "center",
                        horizontalAlign: "right",
                        itemclick: toggleDataSeries
                    },
                    data: [{
                        type: "column",
                        name: "Due Amount",
                        indexLabel: "{y}",
                        yValueFormatString: "#0.00'%'##",
                        showInLegend: true,
                        dataPoints: null
                    }, {
                        type: "column",
                        name: "Collection Amount",
                        indexLabel: "{y}",
                        yValueFormatString: "#0.00'%'##",
                        showInLegend: true,
                        dataPoints: null
                    }]
                });
                chart.render();

                function toggleDataSeries(e) {
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
                        e.dataSeries.visible = false;
                    } else {
                        e.dataSeries.visible = true;
                    }
                    chart.render();
                }

            }
        </script>

        <script>
            function checkDelete() {
                var res = confirm("Are you Sure to delete it ? ");
                if (res) {
                    return true;
                } else {
                    return false;
                }
            }

            function checkApproval() {
                var res = confirm("Are you Sure to Approved it ? ");
                if (res) {
                    return true;
                } else {
                    return false;
                }
            }

            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                    'placeholder': 'dd/mm/yyyy'
                })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                    'placeholder': 'mm/dd/yyyy'
                })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                })
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                                'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                            'MMMM D, YYYY'))
                    }
                )

                //Date picker
                $('#datepicker').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    //            daysOfWeekDisabled: '0,6',
                    todayHighlight: true,
                    orientation: 'auto',
                })
                $('#datepicker1').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    //            daysOfWeekDisabled: '0,6',
                    todayHighlight: true,
                    orientation: 'auto'
                })
                $('#datepicker2').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    orientation: 'auto'
                })
                $('#datepicker3').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    orientation: 'auto'
                })

                $('#datepicker4').datepicker({
                    autoclose: true,
                    format: 'yyyy-mm-dd',
                    todayHighlight: true,
                    orientation: 'auto'
                })


                var date = new Date();
                var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);

                $("#datepicker").datepicker("setDate", new Date());
                $("#datepicker1").datepicker("setDate", new Date());
                $("#datepicker2").datepicker("setDate", new Date());
                $("#datepicker3").datepicker("setDate", new Date());
                $("#datepicker4").datepicker("setDate", firstDay);

                //iCheck for checkbox and radio inputs
                $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
                    checkboxClass: 'icheckbox_minimal-blue',
                    radioClass: 'iradio_minimal-blue'
                })
                //Red color scheme for iCheck
                $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
                    checkboxClass: 'icheckbox_minimal-red',
                    radioClass: 'iradio_minimal-red'
                })
                //Flat red color scheme for iCheck
                $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
                    checkboxClass: 'icheckbox_flat-green',
                    radioClass: 'iradio_flat-green'
                })

                //Colorpicker
                $('.my-colorpicker1').colorpicker()
                //color picker with addon
                $('.my-colorpicker2').colorpicker()

                //Timepicker
                $('.timepicker').timepicker({
                    showInputs: false
                })
            })
            $(function() {
                $('#example1').DataTable()
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': false,
                    'searching': false,
                    'ordering': true,
                    'info': true,
                    'autoWidth': false
                })
            })

            $(document).ready(function() {
                ShowTime();
            });

            function ShowTime() {
                var dt = new Date();
                document.getElementById("lblTime").innerHTML = dt.toLocaleTimeString();
                window.setTimeout("ShowTime()", 1000); // Here 1000(milliseconds) means one 1 Sec
            }


            function PopWindow(url, win) {
                var ptr = window.open(url, win,
                    'width=850,height=500,top=100,left=250');
                return false;
            }

            window.onload = function() {






                var chart = new CanvasJS.Chart("chartContainer", {
                    theme: "light1", // "light2", "dark1", "dark2"
                    animationEnabled: false, // change to true
                    title: {
                        text: "Monthly Sales History"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Mar 2024",
                                y: 10.00
                            },
                            {
                                label: "Feb 2024",
                                y: 0.00
                            },
                            {
                                label: "Jan 2024",
                                y: 0.00
                            },
                            {
                                label: "Dec 2023",
                                y: 352.00
                            },
                            {
                                label: "Nov 2023",
                                y: 0.00
                            },
                            {
                                label: "Oct 2023",
                                y: 78.00
                            },
                            {
                                label: "Sep 2023",
                                y: 1221.00
                            },
                            {
                                label: "Aug 2023",
                                y: 0.00
                            },
                            {
                                label: "Jul 2023",
                                y: 890.00
                            },
                            {
                                label: "Jun 2023",
                                y: 0.00
                            },
                            {
                                label: "May 2023",
                                y: 137.00
                            },
                            {
                                label: "Apr 2023",
                                y: 32.00
                            },
                            {
                                label: "Mar 2023",
                                y: 72.00
                            },
                            {
                                label: "Feb 2023",
                                y: 0.00
                            },
                            {
                                label: "Jan 2023",
                                y: 0.00
                            },
                            {
                                label: "Dec 2022",
                                y: 0.00
                            },
                            {
                                label: "Nov 2022",
                                y: 0.00
                            },
                            {
                                label: "Oct 2022",
                                y: 0.00
                            }
                        ]
                    }]
                });
                chart.render();

            }
        </script>

        <script>
            $(document).ready(function() {
                $('#addSupplier').click(function(e) {

                    e.preventDefault();
                    var company_name = $('#company_name').val();
                    var contact_num = $('#contact_num').val();
                    var address = $('#address').val();
                    var created_by = $('#created_by').val();
                    var status = $('#status').val();
                    var contact_type = $('#contact_type').val();

                    if (created_by == '') {
                        alert("Sorry unauthorized access.");
                        return false;
                    }
                    if (company_name == "" || contact_num == "") {
                        alert("Sorry Company Name and Contact Number Can't be empty.");
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "addSupplier",
                        data: {
                            "company_name": company_name,
                            "contact_num": contact_num,
                            "address": address,
                            "created_by": created_by,
                            "status": status,
                            "contact_type": contact_type
                        },
                        success: function(data) {
                            if (data != "") {
                                alert('Save Successfully.');

                                var customerinfo = data.split('##');

                                var option = customerinfo[0];
                                var pre_blnc = customerinfo[1];

                                $('#supplier_id').children().remove();
                                $('#supplier_id').append(option);
                                $('#previous_dues').val(pre_blnc);
                                $('#addContact').modal('hide');
                            }

                        }
                    });
                });
            });


            $(document).ready(function() {
                $('#saveMedicine').click(function(e) {

                    e.preventDefault();
                    var medicine_name = $('#medicine_name').val();
                    var created_by = $('#created_by').val();
                    var medicine_form = $('#medicine_form').val();
                    var company_id = $('#company_id').val();
                    var purchases_price = $('#purchases_price').val();
                    var min_stock = $('#min_stock').val();
                    var generic_id = $('#generic_id').val();
                    var medicine_strength = $('#medicine_strength').val();
                    var rack_id = $('#rack_id').val();
                    var sale_price = $('#sale_price').val();
                    var opening_stock = $('#opening_stock').val();

                    if (created_by == '') {
                        alert("Sorry unauthorized access.");
                        return false;
                    }
                    if (medicine_name == "" || generic_id == "") {
                        alert("Sorry Medicine Name and Generic Number and Box Qty Can not be empty.");
                        return false;
                    }

                    $.ajax({
                        type: "POST",
                        url: "addMedicine",

                        data: {
                            "medicine_name": medicine_name,
                            "created_by": created_by,
                            "medicine_form": medicine_form,
                            "company_id": company_id,
                            "purchases_price": purchases_price,
                            "min_stock": min_stock,
                            "generic_id": generic_id,
                            "medicine_strength": medicine_strength,
                            "rack_id": rack_id,
                            "sale_price": sale_price,
                            "opening_stock": opening_stock
                        },

                        success: function(successData) {
                            if (successData != "") {
                                alert(successData);
                                $('#addMedicine').modal('hide');
                            }
                        }
                    });
                });
            });


            $(document).ready(function() {
                $('.company_id').select2({
                    minimumInputLength: 2,
                    allowClear: true,
                    placeholder: 'Please Enter Name',
                    ajax: {
                        url: 'ajax-response',
                        dataType: 'json',
                        delay: 250,
                        data: function(data) {
                            return {
                                searchCompany: data.term // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    }
                });
            });


            $(document).ready(function() {
                $('.generic_id').select2({
                    minimumInputLength: 2,
                    allowClear: true,
                    placeholder: 'Please Enter Name',
                    ajax: {
                        url: 'ajax-response',
                        dataType: 'json',
                        delay: 250,
                        data: function(data) {
                            return {
                                searchGeneric: data.term // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    }
                });
            });

            $(document).ready(function() {
                $('.rack_id').select2({
                    minimumInputLength: 2,
                    allowClear: true,
                    placeholder: 'Please Enter Name',
                    ajax: {
                        url: 'ajax-response',
                        dataType: 'json',
                        delay: 250,
                        data: function(data) {
                            return {
                                searchRack: data.term // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    }
                });
            });

            $(document).ready(function() {
                $('.medicine_form').select2({
                    minimumInputLength: 2,
                    allowClear: true,
                    placeholder: 'Please Enter Name',
                    ajax: {
                        url: 'ajax-response',
                        dataType: 'json',
                        delay: 250,
                        data: function(data) {
                            return {
                                searchMedicineForm: data.term // search term
                            };
                        },
                        processResults: function(response) {
                            return {
                                results: response
                            };
                        },
                        cache: true
                    }
                });
            });


            $('#supplier_id').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'ajax-response',
                    data: {
                        'supplier_id': id
                    },
                    success: function(value) {
                        $('#previous_dues').val(value);
                    }
                });
            });

            function paymentAmount(id) {
                var totalAmount = $('#invoice_amount').val();
                var payment = $('#payment').val();

                $('#dues').val(0);
                var currDues = Number(totalAmount) - Number(payment);

                $('#dues').val(roundToTwo(currDues));
            }

            function shippingAmount(id) {

                var totalAmount = $('#totalAmount').val();
                var shipping_charge = $('#shipping_charge').val();
                var discount = $('#discount').val();

                $('#invoice_amount').val(0);
                $('#dues').val(0);
                $('#hiddenInvoiceAmount').val(0);

                var withShip = Number(totalAmount) + Number(shipping_charge);
                var withDis = Number(withShip) - Number(discount);

                $('#invoice_amount').val(roundToTwo(withDis));
                $('#dues').val(roundToTwo(withDis));
                $('#hiddenInvoiceAmount').val(roundToTwo(withDis));

            }

            function discountAmount(id) {

                var totalAmount = $('#totalAmount').val();
                var shipping_charge = $('#shipping_charge').val();
                var discount = $('#discount').val();

                $('#invoice_amount').val(0);
                $('#dues').val(0);
                $('#hiddenInvoiceAmount').val(0);

                var withShip = Number(totalAmount) + Number(shipping_charge);
                var withDis = Number(withShip) - Number(discount);

                $('#invoice_amount').val(roundToTwo(withDis));
                $('#dues').val(roundToTwo(withDis));
                $('#hiddenInvoiceAmount').val(roundToTwo(withDis));

            }

            $(document).ready(function() {
                // button type change to 'submit' if data submit
                $("#btnSubmitInvoice").click(function(event) {
                    if ($('#tbody').find('tr').length > 0) {
                        $('#btnSubmitInvoice').attr("type", "submit");
                    }
                });
                // fetch data and show as autocompleter

                $("#tags").autocomplete({
                    minLength: 2,
                    source: function(req, resp) {
                        $.ajax({
                            type: "POST",
                            url: 'ajax-response',
                            data: {
                                request: 'fetchSimilarData',
                                pursearchQuery: req.term
                            },
                            success: function(d) {
                                resp(d);
                            }
                        });
                    },
                    select: function(event, ui) {
                        if (ui.item != undefined) {
                            addItemDetailsAsTableRow(ui.item.value);
                        }
                        return false;
                    }
                });

                // append row after select from autoCompleter
                $("#tags").keypress(function(event) {
                    if (event.keyCode == 13) {
                        var productName = $(this).val();
                        addItemDetailsAsTableRow(productName);
                    }
                });

                function addItemDetailsAsTableRow(productName) {

                    // alert(productName);

                    if (productName != '') {
                        $.ajax({
                            type: "POST",
                            data: {
                                request: 'fetchSingleProductData',
                                purchasesProductName: productName
                            },
                            url: 'ajax-response',
                            dataType: 'text',
                            success: function(response) {
                                console.log(response);
                                if (response != '') {
                                    var array = [];
                                    var responseObject = JSON.parse(response);
                                    if (responseObject != '') {
                                        var alreadyListed = 0;
                                        $('#tbody .productId').each(function() {
                                            if (this.value == responseObject.id) {
                                                alreadyListed++;
                                            }
                                        });
                                        if (alreadyListed > 0) {
                                            alert(responseObject.product_name + ' - already listed.');
                                            return flase;
                                        } else {
                                            addTableRow(responseObject);
                                            $('#tags').val('');
                                            calculateTotalAmount();
                                        }
                                    }
                                }
                            }
                        });
                    }
                }

                //========= add table row ===================================
                var rowIdx = 0;

                function addTableRow(responseObject) {
                    // Adding a row inside the tbody.

                    $('#tbody').append(`<tr id="R${++rowIdx}">
                <td class="row-index text-center" style="width: 10px"><p>${rowIdx}</p></td>
                <td class="text-left" style="width: 150px;">` + responseObject.medicine_name + ` <br> ` +
                        responseObject.medicine_form + `<br> ` + responseObject.medicine_strength + `<br> ` +
                        responseObject.generic_name + `<input type="hidden" name="product_id[]" value="` +
                        responseObject.id + `" class="productId"></td>
                <td class="text-center" style="width: 70px;"><input type="text" value="1" name="quantity[]" class="form-control cl_qty" style="width:100%;" autocomplete="off"></td>
                <td class="text-center" style="width: 80px;"><input type="text" value="` + responseObject.cost_price + `" name="cost_price[]" class="form-control unitPrice" style="width:100%;text-align: center" autocomplete="off"></td>
                <td class="text-center" style="width: 80px;"><input type="text" value="` + responseObject.sales_price + `" name="sales_price[]" class="form-control sales_price" style="width:100%;text-align: center" autocomplete="off"></td>
                <td class="text-center" style="width: 80px;"><input type="date" value="` + responseObject.expire_date +
                        `" name="expire_date[]" class="form-control exp_date" style="width:100%;text-align: center"></td>
                <td class="text-center" style="width: 80px;"><select name="rack_id[]" class="form-control rack_id" style="width:100%;text-align: center;color: red;font-weight: bold"> <option value="` +
                        responseObject.rack_id + `"  >` + responseObject.rack_name + `</option>  <option value="1"  ></option>  <option value="2"  >Rack2</option>  <option value="3"  >Rack3</option>  <option value="4"  >Rack4</option>  <option value="5"  >Rack5</option>  <option value="6"  >Rack6</option>  <option value="7"  >Rack7</option>  <option value="8"  >Rack8</option>  <option value="9"  >Rack9</option>  <option value="13"  >Rack13</option>  <option value="14"  >Rack14</option>  <option value="15"  >Rack15</option>  <option value="16"  >Rack16</option>  <option value="17"  >Rack17</option>  <option value="18"  >Rack18</option>  <option value="19"  >Rack19</option>  <option value="20"  >Rack20</option>  <option value="21"  >Rack21</option>  <option value="22"  >Rack22</option>  <option value="23"  >Rack23</option>  <option value="24"  >Rack24</option>  <option value="25"  >Rack25</option>  <option value="26"  >Rack26</option>  <option value="27"  >Rack27</option>  <option value="28"  >Rack28</option>  <option value="29"  >Rack29</option>  <option value="30"  ></option>  <option value="31"  >Rack1</option> </select></td>
                <td class="text-center" style="width: 100px;">
                    <input type="text" value="` + responseObject.cost_price + `" name="sub_total[]" class="form-control proPrice" style="width:100%;text-align: center">
                    <input type="hidden" value="` + responseObject.cost_price + `" name="hiddnTotal[]" class="form-control hiddnTotal" style="width:100%;text-align: center">
                </td>
                <td class="text-center" style="width: 70px;">
                    <input type="text" value="` + responseObject.inStock + `" name="stock[]" tabindex="1" class="form-control inStock" style="width:100%;text-align: center" readonly>
                    <input type="hidden" value="` + responseObject.preStock + `" name="preStock[]" tabindex="1" class="form-control preStock" style="width:100%;text-align: center" readonly>
                    <input type="hidden" value="` + responseObject.generic_id + `" name="product_code[]" tabindex="1" class="form-control product_code" style="width:100%;text-align: center" readonly>
                </td>
                <td class="text-center" style="width: 50px;">
                    <button class="btn btn-danger remove" tabindex="1" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                </td>
            </tr>`);
                }

                // ========= Remove table row ===============
                $('#tbody').on('click', '.remove', function() {
                    var child = $(this).closest('tr').nextAll();
                    child.each(function() {
                        var id = $(this).attr('id');
                        var idx = $(this).children('.row-index').children('p');
                        var dig = parseInt(id.substring(1));
                        idx.html(`${dig - 1}`);
                        $(this).attr('id', `R${dig - 1}`);
                    });
                    $(this).closest('tr').remove();
                    rowIdx--;
                    calculateTotalAmount();
                });
                // ###--Quantity Toggle Function End--###
                $(document).on('keyup', '.cl_qty', function() {
                    var tID = $(this).closest('tr').attr('id');
                    var cl_qty = $(this).val();

                    var preStock = $('#' + tID + ' .preStock').val();
                    var unit_price = $('#' + tID + ' .unitPrice').val();

                    var currStock = Number(preStock) + Number(cl_qty);
                    var line_total = Number(unit_price) * Number(cl_qty);

                    $('#' + tID + ' .inStock').val(currStock);
                    $('#' + tID + ' .proPrice').val(roundToTwo(line_total));
                    $('#' + tID + ' .hiddnTotal').val(roundToTwo(line_total));
                    calculateTotalAmount();
                });
                //###--Payment Calculation Function Start--###

                //###--Quantity Toggle Function End--###
                $(document).on('keyup', '.unitPrice', function() {
                    var tID = $(this).closest('tr').attr('id');
                    var unit_price = $(this).val();

                    var cl_qty = $('#' + tID + ' .cl_qty').val();

                    var line_total = Number(unit_price) * Number(cl_qty);
                    $('#' + tID + ' .proPrice').val(roundToTwo(line_total));
                    $('#' + tID + ' .hiddnTotal').val(roundToTwo(line_total));
                    calculateTotalAmount();
                });
                //###--Payment Calculation Function Start--###


                //###--Quantity Toggle Function End--###
                $(document).on('keyup', '.proPrice', function() {
                    var tID = $(this).closest('tr').attr('id');
                    var proPrice = $(this).val();

                    var cl_qty = $('#' + tID + ' .cl_qty').val();

                    var new_cost = Number(proPrice) / Number(cl_qty);
                    var line_total = Number(new_cost) * Number(cl_qty);

                    $('#' + tID + ' .unitPrice').val(roundToTwo(new_cost));
                    $('#' + tID + ' .hiddnTotal').val(roundToTwo(line_total));
                    calculateTotalAmount();
                });
                //###--Payment Calculation Function Start--###


                function calculateTotalAmount() {
                    var sum = 0;
                    $('.hiddnTotal').each(function() {
                        sum += parseFloat(this.value);
                    });
                    sum = sum.toFixed(2);
                    $('#totalAmount').val(sum);
                    $('#hiddenTotalAmount').val(sum);
                    $('#invoice_amount').val(sum);
                    $('#dues').val(sum);
                }

                function roundToTwo(num) {
                    return num.toFixed(2);
                }

            });

            function roundToTwo(num) {
                return num.toFixed(2);
            }

            $("#payment_method").change(function() {
                if ($(this).val() == "1") {
                    $("#bank_name").show();
                    $("#cheque_no").show();
                } else {
                    $("#bank_name").hide();
                    $("#cheque_no").hide();
                }
            });
        </script>
    @endpush

@endsection
