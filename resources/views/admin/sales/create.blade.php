@extends('admin.layouts.master')

@section('title', 'Create-Sales')

@section('content')

    <section class="content-header">
        <h1>
            Sales
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sales</a></li>
            <li class="active">Create Invoice</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Create Invoice</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="" onsubmit="return checkFormReady()" id="addSaleForm">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="customer_id">Customer Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select name="customer_id" id="customer_id"
                                                class="customer_id form-control select2" required="">
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="button" style="padding: 8px;height: 34px" data-toggle="modal"
                                                    data-target="#addContact" class="btn btn-default btn-flat"><i
                                                        style="vertical-align: 0% !important;"
                                                        class="fa fa-plus-circle text-primary fa-lg"
                                                        aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number</label>
                                        <input type="text" name="mobile_number" id="mobile_number" class="form-control"
                                            autocomplete="off" required="" placeholder="Mobile">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="previous_dues">Previous Dues</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                    <input type="text" name="previous_dues" id="previous_due"
                                                        class="form-control" autocomplete="off" required=""
                                                        placeholder="0.00" readonly="">
                                                    <input type="hidden" name="created_by" id="created_by"
                                                        class="form-control" autocomplete="off" required=""
                                                        value="17" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="invoice_number">Invoice Number <span
                                                        style="color: red">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" name="invoice_number" id="invoice_number"
                                                        class="form-control" value="MP17-22" autocomplete="off"
                                                        required="" readonly="">
                                                </div>
                                            </div>
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
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-9">
                                    <div class="form-group">
                                        <label for="lname" class="text-danger"> Product Name <span style="color: red">
                                                *</span></label>
                                        <div align="center">
                                            <input type="text" name="search" id="tags" accesskey="A"
                                                class="form-control" placeholder="Enter Product Name / Product Code"
                                                autofocus="autofocus" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div style="overflow-x:auto;">
                                        <table class="table tbl table-bordered table-striped table-hover">
                                            <thead>
                                                <tr style="background-color:#2E4D62 ;color: #fff;">
                                                    <th class="text-center" style='width: 10px;'>SL</th>
                                                    <th class="text-center" style='width: 150px;'>Medi.Name</th>
                                                    <th class="text-center" style='width: 100px;'>Quantity</th>
                                                    <th class="text-center" style='width: 100px;'>Unit Price</th>
                                                    <th class="text-center" style='width: 100px;'>Discount</th>
                                                    <th class="text-center" style='width: 120px;'>Sub Total</th>
                                                    <th class="text-center" style='width: 100px;'>Cost Price</th>
                                                    <th class="text-center" style='width: 70px;'>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">

                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="5" style="width:460px">Total</td>
                                                    <td class="center" style="width:120px">
                                                        <input type="text" class="form-control totalAmount"
                                                            id="totalAmount" name="total_amount" value="0.00"
                                                            style="width: 100%;color: red;font-weight:bold;text-align: center"
                                                            readonly>
                                                        <input type="hidden" class="form-control hiddenTotalAmount"
                                                            id="hiddenTotalAmount" readonly>
                                                    </td>
                                                    <td style='width: 70px;'></td>
                                                    <td style='width: 70px;'></td>
                                                </tr>
                                            </tfoot>
                                        </table>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <table class="table table-bordered table-striped table-hover">
                                        <thead>
                                            <tr style="background-color: #2E4D62 ">
                                                <th><span style="color:#fff; font-weight: bold">+</span><span
                                                        style="color:#fff;"> Account</span>
                                                </th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Discount</label><br>
                                                    <input type="text" name="discount_amount" class="form-control"
                                                        oninput="discountAmount(this.id)" id="discount"
                                                        autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Less</label><br>
                                                    <input type="text" name="less_amount" class="form-control"
                                                        oninput="lessAmount(this.id)" id="less_amount"
                                                        autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Total Amount<span
                                                            style="color: red">*</span></label><br>
                                                    <input type="text" name="grand_total" id="grand_total"
                                                        class="form-control" readonly=""
                                                        style="color: #14ba32;font-weight: bold;font-size: 20px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Cash Received<span
                                                            style="color: red">*</span></label><br>
                                                    <input type="text" class="form-control" name="cash_paid"
                                                        id="cash_paid" oninput="calculatePayment(this.id);"
                                                        autocomplete="off" style="color: #056e3f;font-weight: bold"
                                                        required="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Due Amount</label><br>
                                                    <input type="text" name="due_amount" class="form-control"
                                                        id="due_amount" readonly=""
                                                        style="color: red;font-weight: bold">
                                                    <input type="hidden" class="form-control" id="hiddenDue"
                                                        readonly="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Change/Refund Amount</label><br>
                                                    <input type="text" name="advance" class="form-control"
                                                        id="change" readonly="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Payment Method</label><br>
                                                    <select name="payment_method" id="payment_method"
                                                        class="form-control" onchange="change()" style="width: 100%;">
                                                        <option value="0">Cash Payment</option>
                                                        <option value="1">Cheque Paid</option>
                                                        <option value="2">Card Payment</option>
                                                        <option value="3">Mobile Banking</option>
                                                    </select>
                                                </td>
                                            </tr>

                                            <tr id="cardNo" style="display: none">
                                                <td>
                                                    <label style="font-size: 14px;">Card Number</label><br>
                                                    <input type="text" name="payment_card_number" class="form-control"
                                                        placeholder="Card Number" autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr id="mobNo" style="display: none">
                                                <td>
                                                    <label style="font-size: 14px;">Mobile Number</label><br>
                                                    <input type="text" name="payment_mobile_number"
                                                        class="form-control" placeholder="Mobile Number"
                                                        autocomplete="off">
                                                </td>
                                            </tr>


                                            <tr id="chequePaid" style="display: none">
                                                <td>
                                                    <label style="font-size: 14px;">Bank Name</label><br>
                                                    <select name="bank_id" id="bank_id" class="form-control select2"
                                                        style="width: 100%;">
                                                        <option value="">Select Bank</option>
                                                    </select>
                                                </td>
                                            </tr>
                                            <tr id="chequePaid2" style="display: none">
                                                <td>
                                                    <label style="font-size: 14px;">Current Balance</label><br>
                                                    <input type="text" id="bankPreviousAmount" class="form-control"
                                                        placeholder="0.00" readonly="">
                                                </td>
                                            </tr>
                                            <tr id="chequePaid3" style="display: none">
                                                <td>
                                                    <label style="font-size: 14px;">Cheque Number</label><br>
                                                    <input type="text" name="cheque_number" class="form-control"
                                                        placeholder="Cheque Number">
                                                </td>
                                            </tr>
                                            <tr id="chequePaid4" style="display: none">
                                                <td>
                                                    <label style="font-size: 14px;">Cheque Approval Date</label><br>
                                                    <div class="input-group date">
                                                        <div class="input-group-addon">
                                                            <i class="fa fa-calendar"></i>
                                                        </div>
                                                        <input type="date" name="chuque_app_date"
                                                            class="form-control pull-right" value="2024-03-21"
                                                            autocomplete="off">
                                                    </div>
                                                </td>
                                            </tr>

                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="button" onclick="makeFormReady()" name="saveBtn"
                                class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->
    </div>

    <div id="addContact" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Customer</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="" id="contactform">
                        <label>Customer Name</label>
                        <input type="text" name="company_name" id="company_name" class="form-control"
                            placeholder="Customer Name" autocomplete="off" />
                        <br />
                        <label>Mobile Number</label>
                        <input type="text" name="contact_num" id="contact_num" class="form-control"
                            placeholder="Mobile Number" autocomplete="off" />
                        <input type="hidden" name="created_by" id="created_by" value="17" class="form-control"
                            placeholder="Company Name" autocomplete="off" />
                        <input type="hidden" name="status" id="status" value="1" class="form-control"
                            placeholder="Company Name" autocomplete="off" />
                        <input type="hidden" name="contact_type" id="contact_type" value="1" class="form-control"
                            autocomplete="off" />
                        <br />
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control" placeholder="Address"
                            autocomplete="off" />
                        <br />
                        <input type="button" value="Submit" id="addCustomer" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

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
                var formReady = false;

                function makeFormReady() {
                    var customer_id = $('#customer_id').val();
                    if (customer_id == "") {
                        alert("Customer name can't be empty.");
                        return false;
                    } else {
                        formReady = true;
                        setTimeout(function() {
                            $('#addSaleForm').submit();
                        }, 50);
                    }
                }

                function checkFormReady() {
                    console.log(formReady)
                    return formReady;
                }

                $(document).ready(function() {
                    $('#addCustomer').click(function(e) {

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
                            url: "addCustomer",
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

                                    $('#customer_id').children().remove();
                                    $('#customer_id').append(option);
                                    $('#previous_due').val(pre_blnc);
                                    $('#addContact').modal('hide');
                                }

                            }
                        });
                    });
                });

                $(document).ready(function() {
                    $('.customer_id').select2({
                        minimumInputLength: 2,
                        allowClear: true,
                        placeholder: 'Please Enter Name',
                        ajax: {
                            url: 'ajax-response',
                            dataType: 'json',
                            delay: 250,
                            data: function(data) {
                                return {
                                    searchCustomer: data.term // search term
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

                    $('#customer_id').change(function() {
                        var id = $(this).val();
                        $.ajax({
                            type: 'POST',
                            url: 'ajax-response',
                            data: {
                                'customer_id': id
                            },
                            success: function(data) {

                                $('#mobile_number').val('');
                                $('#previous_due').val('');

                                var custInfo = data.split('##');

                                var due = custInfo[0];
                                var contact = custInfo[1];

                                $('#previous_due').val(due);
                                $('#mobile_number').val(contact);
                            }
                        });
                    });
                    $('#bank_id').change(function() {
                        var id = $(this).val();
                        $.ajax({
                            type: 'POST',
                            url: 'ajax-response',
                            data: {
                                'bank_id': id
                            },
                            success: function(html) {
                                console.log(html);
                                $('#bankPreviousAmount').val(html);
                            }
                        });
                    });
                });

                function calculatePayment(id) {
                    var grand_total = $('#grand_total').val();
                    var cash_paid = $('#cash_paid').val();

                    $('#due_amount').val(0);
                    var currDues = Number(grand_total) - Number(cash_paid);
                    if (Number(currDues) > 0) {
                        $('#due_amount').val(Math.round(currDues));
                        $('#change').val('0.00');
                    } else {
                        var changeN = Math.abs(currDues);
                        $('#change').val(Math.round(changeN));
                        $('#due_amount').val('0.00');
                    }
                }

                function discountAmount(id) {
                    var hiddenTotalAmount = $('#hiddenTotalAmount').val();
                    var discount = $('#discount').val();
                    var less_amount = $('#less_amount').val();

                    $('#grand_total').val(0);
                    $('#due_amount').val(0);
                    $('#hiddenDue').val(0);

                    var withShip = Number(hiddenTotalAmount) * Number(discount);
                    var percent = Number(withShip) / 100;
                    var totalAmnt = Number(percent) + Number(less_amount);
                    var withDis = Number(hiddenTotalAmount) - Number(totalAmnt);

                    $('#grand_total').val(Math.round(withDis));
                    $('#due_amount').val(Math.round(withDis));
                    $('#hiddenDue').val(Math.round(withDis));
                }

                function lessAmount(id) {
                    var hiddenDue = $('#hiddenTotalAmount').val();
                    var less_amount = $('#less_amount').val();
                    var discount = $('#discount').val();

                    $('#grand_total').val(0);
                    $('#due_amount').val(0);

                    var withShip = Number(hiddenDue) * Number(discount);
                    var percent = Number(withShip) / 100;
                    var totalLess = Number(percent) + Number(less_amount);
                    var currDues = Number(hiddenDue) - Number(totalLess);

                    $('#grand_total').val(Math.round(currDues));
                    $('#due_amount').val(Math.round(currDues));
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
                                    searchQuery: req.term
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
                        if (productName != '') {
                            $.ajax({
                                type: "POST",
                                data: {
                                    request: 'fetchSingleProductData',
                                    salesProductName: productName
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
                        $('#tbody').prepend(`<tr id="R${++rowIdx}">
                <td class="row-index text-center" style="width: 10px"><p>${rowIdx}</p></td>
                <td class="text-left" style="width: 150px;">` + responseObject.medicine_name + ` <br> ` +
                            responseObject.medicine_form + `<br> ` + responseObject.medicine_strength + `<br> ` +
                            responseObject.company_name + `<input type="hidden" name="medicine_id[]" value="` +
                            responseObject.id + `" class="productId"></td>
                <td class="text-center" style="width: 70px;"><input type="text" value="1" name="quantity[]" class="form-control cl_qty" style="width:100%;" autocomplete="off"></td>
                <td class="text-center" style="width: 80px;"><input type="text" value="` + responseObject.sales_price + `" name="unit_price[]" class="form-control unitPrice" style="width:100%;text-align: center" autocomplete="off" readonly></td>
                <td class="text-center" style="width: 80px;">
                  <input type="text" value="0" name="uni_disc[]" class="form-control uni_disc" style="width:100%;text-align: center" autocomplete="off">
                  <input type="hidden" value="` + responseObject.sales_price + `" name="hiddenPrice[]" class="form-control hiddenPrice" style="width:100%;text-align: center" autocomplete="off">
                </td>
                <td class="text-center" style="width: 100px;">
                    <input type="text" value="` + responseObject.sales_price + `" name="sub_total[]" class="form-control sub_total" style="width:100%;text-align: center">
                    <input type="hidden" value="` + responseObject.sales_price + `" name="sell_price[]" class="form-control hiddnUniPrice" style="width:100%;text-align: center">
                </td>
                <td class="text-left" style="width: 80px;">
                            <button type="button" data-toggle="modal" data-target="#costShow` + responseObject.id + `" class="btn btn-default btn-flat"><i class="fa fa-eye text-primary fa-lg" aria-hidden="true"></i></button> 
                            <input type="hidden" value="` + responseObject.cost_price + `" name="cost_price[]" class="form-control cost_price" style="width:100%;text-align: center" autocomplete="off" readonly="">
                 <div id="costShow` + responseObject.id + `" class="modal fade">
                    <div class="modal-dialog">
                        <div class="modal-content">
                            <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                <button type="button" class="close" data-dismiss="modal">&times;</button>
                                <h4 class="modal-title">Show Cost Price</h4>
                            </div>
                            <div class="modal-body">
                                <label>Cost Price</label>
                                <input type="text" class="form-control" value="` + responseObject.cost_price + `" autocomplete="off" readonly=""/>
                                <label>MRP Price</label>
                                <input type="text" class="form-control" value="` + responseObject.mrp_price + `" autocomplete="off" readonly=""/>
                            </div>
                        </div>
                    </div>
                  </div> 
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

                        var currStock = Number(preStock) - Number(cl_qty);
                        var line_total = Number(unit_price) * Number(cl_qty);

                        $('#' + tID + ' .inStock').val(currStock);
                        $('#' + tID + ' .sub_total').val(roundToTwo(line_total));
                        calculateTotalAmount();
                    });
                    //###--Payment Calculation Function Start--###
                    //###--Quantity Toggle Function End--###
                    $(document).on('keyup', '.unitPrice', function() {
                        var tID = $(this).closest('tr').attr('id');
                        var unit_price = $(this).val();

                        var cl_qty = $('#' + tID + ' .cl_qty').val();
                        var salesPrice = Number(unit_price) * 1;

                        var line_total = Number(unit_price) * Number(cl_qty);
                        $('#' + tID + ' .sub_total').val(roundToTwo(line_total));
                        $('#' + tID + ' .hiddenPrice').val(roundToTwo(salesPrice));
                        $('#' + tID + ' .hiddnUniPrice').val(roundToTwo(salesPrice));
                        calculateTotalAmount();
                    });
                    //###--Payment Calculation Function Start--###


                    //###--Quantity Toggle Function End--###
                    $(document).on('keyup', '.uni_disc', function() {
                        var tID = $(this).closest('tr').attr('id');
                        var uni_disc = $(this).val();

                        var cl_qty = $('#' + tID + ' .cl_qty').val();
                        var hiddenPrice = $('#' + tID + ' .hiddenPrice').val();

                        var totSlP = Number(hiddenPrice) * Number(uni_disc);
                        var prcnPrc = Number(totSlP) / 100;

                        var unit_price = Number(hiddenPrice) - Number(prcnPrc);

                        var salesPrice = Number(unit_price) * 1;

                        var line_total = Number(unit_price) * Number(cl_qty);

                        $('#' + tID + ' .sub_total').val(roundToTwo(line_total));
                        $('#' + tID + ' .hiddnUniPrice').val(roundToTwo(salesPrice));
                        $('#' + tID + ' .unitPrice').val(roundToTwo(salesPrice));
                        calculateTotalAmount();
                    });
                    //###--Payment Calculation Function Start--###

                    //###--Payment Calculation Function Start--###    
                    function calculateTotalAmount() {
                        var sum = 0;

                        $('.sub_total').each(function() {
                            sum += parseFloat(this.value);
                        });
                        var less_amount = $('#less_amount').val();
                        sum = sum.toFixed(2);
                        var NetAmount = Number(sum) - Number(less_amount);
                        $('#totalAmount').val(Math.round(NetAmount));
                        $('#hiddenTotalAmount').val(Math.round(NetAmount));
                        $('#grand_total').val(Math.round(NetAmount));
                        $('#due_amount').val(Math.round(NetAmount));
                        $('#hiddenDue').val(Math.round(NetAmount));
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
                        $("#chequePaid").show();
                        $("#chequePaid2").show();
                        $("#chequePaid3").show();
                        $("#chequePaid4").show();
                        $("#cardNo").hide();
                        $("#mobNo").hide();

                    } else if ($(this).val() == "2") {

                        $("#cardNo").show();
                        $("#mobNo").hide();
                        $("#chequePaid").hide();
                        $("#chequePaid2").hide();
                        $("#chequePaid3").hide();
                        $("#chequePaid4").hide();

                    } else if ($(this).val() == "3") {

                        $("#mobNo").show();
                        $("#cardNo").hide();
                        $("#chequePaid").hide();
                        $("#chequePaid2").hide();
                        $("#chequePaid3").hide();
                        $("#chequePaid4").hide();

                    } else {
                        $("#cardNo").hide();
                        $("#mobNo").hide();
                        $("#chequePaid").hide();
                        $("#chequePaid2").hide();
                        $("#chequePaid3").hide();
                        $("#chequePaid4").hide();
                    }
                });
            </script>
        @endpush

    @endsection
