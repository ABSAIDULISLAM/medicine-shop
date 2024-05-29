@extends('admin.layouts.master')
@section('title', 'Purchase-Update')

@section('content')
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

    <style>
        .ui-menu {
            margin-right: 21% !important;
        }
    </style>

    <section class="content-header">
        <h1>
            Purchases
            <small>Update Purchases</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('Admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('Purchase.index') }}">Purchases</a></li>
            <li class="active">Update Purchases</li>
        </ol>
    </section>

    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Update Purchases</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    @includeIf('errors.error')
                    <form method="POST" action="{{ route('Purchase.update') }}">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="supplier_id">Supplier Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="hidden" name="purchaseId" value="{{ $data->id }}"
                                                class="form-control">
                                            <select name="supplier_id" id="supplier_id" class="form-control select2"
                                                required required>
                                                <option value="" selected>Select Supplier</option>
                                                @forelse ($suplyer as $item)
                                                    <option
                                                        value="{{ $item->id }}"{{ $data->supplier_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->company_name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="button" style="padding: 8px;height: 34px" data-toggle="modal"
                                                    data-target="#addContact" class="btn btn-default btn-flat"><i
                                                        style="vertical-align: 0% !important;"
                                                        class="fa fa-plus-circle text-primary fa-lg"
                                                        aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                        @error('supplier_id')
                                            <div class="invalid-feedback error text-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="form-group">
                                        <label for="invoice_amount">Total Amount <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="final_amount" id="invoice_amount"
                                                class="form-control" placeholder="0.00" readonly=""
                                                value="{{ $data->final_amount }}">
                                            <input type="hidden" id="hiddenInvoiceAmount" class="form-control" required
                                                placeholder="0.00" readonly="">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Payment <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                                            <input type="text" name="payment"
                                                class="form-control @error('payment') is-invalid border border-danger @enderror"
                                                id="payment" oninput="paymentAmount(this.id)" placeholder="0.00"
                                                autocomplete="off" required value="{{ $data->payment }}">
                                        </div>
                                        @error('payment')
                                            <div class="invalid-feedback error text-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="previous_dues">Previous Dues <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="previous_dues" id="previous_dues" required
                                                class="form-control" autocomplete="off" required="" placeholder="0.00"
                                                readonly="" value="{{ $data->previous_dues }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="discount" class="form-control" id="discount"
                                                oninput="discountAmount(this.id)" placeholder="0.00" autocomplete="off"
                                                value="{{ $data->discount }}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dues">Dues <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" class="form-control" name="dues" id="dues"
                                                required placeholder="0.00" autocomplete="off" readonly=""
                                                value="{{ $data->dues }}">
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
                                                value="{{ $data->invoice_number }}" class="form-control"
                                                autocomplete="off" required="" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="shipping_charge">Shipping Charge</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="shipping_charge" class="form-control"
                                                id="shipping_charge" oninput="shippingAmount(this.id)" placeholder="0.00"
                                                autocomplete="off" value="{{ $data->shipping_charge }}">
                                        </div>
                                    </div>
                                    <div class="form-group" id="bank_name" style="display:none;">
                                        <label for="bank_id">Bank Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                            <select name="bank_id" id="bank_id" class="form-control select2"
                                                style="width: 100%">
                                                <option value="">Select Bank</option>
                                                @forelse ($bank as $item)
                                                    <option value="{{ $item->id }}"
                                                        {{ $data->bank_id == $item->id ? 'selected' : '' }}>
                                                        {{ $item->bank_name }}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $date = date('Y-m-d');
                                @endphp
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="datepicker">Date <span style="color: red">*</span> </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="date" value="{{ $data->date }}"
                                                class="form-control pull-right" id="datepicker" autocomplete="off"
                                                required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment_method">Payment Method</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <select name="payment_method" id="payment_method" class="form-control"
                                                onchange="change()" required="" style="width: 100%;">
                                                <option value="0" {{ $data->payment_method == 0 ? 'selected' : '' }}>
                                                    Cash in Hand</option>
                                                <option value="1" {{ $data->payment_method == 1 ? 'selected' : '' }}>
                                                    Cheque</option>
                                                <option value="2" {{ $data->payment_method == 2 ? 'selected' : '' }}>
                                                    Bkash</option>
                                                <option value="3" {{ $data->payment_method == 3 ? 'selected' : '' }}>
                                                    Rocket</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="cheque_no" style="display:none;">
                                        <label for="cheque_number">Cheque Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" name="cheque_no" class="form-control"
                                                id="cheque_number" placeholder="Cheque Number" autocomplete="off"
                                                value="{{ $data->cheque_no }}">
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
                                        </div>
                                        <div id="products">

                                        </div>
                                    </div>
                                    <div style="overflow-x:auto;">
                                        <table class="table tbl table-bordered table-striped table-hover">
                                            <thead>
                                                <tr style="background-color:#2E4D62 ;color: #fff;">
                                                    <th class="text-center" style='width: 10px;'>SL</th>
                                                    <th class="text-center" style='width: 150px;'>Product Name <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 100px;'>Quantity <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 100px;'>Cost Price <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 100px;'>Sales Price <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 100px;'>Expire Date <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 100px;'>Rack No <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 120px;'>Sub Total <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 80px;'>Stock <span
                                                        style="color: red">*</span></th>
                                                    <th class="text-center" style='width: 70px;'>Action</th>
                                                </tr>
                                            </thead>

                                            <tbody id="tbody">
                                                <div id="loadingSpinner" style="display: none;" class="text-center m-auto">
                                                    <img src="{{ asset('backend/assets/spinner.gif') }}" alt="Loading..." height="100px" width="100px">
                                                </div>
                                                @forelse ($data->purchasedetails as $item)
                                                    <tr>
                                                        <td class="row-index text-center"><p>{{ $loop->index + 1 }}</p></td>
                                                        <td class="text-left">
                                                            {{ $item->product->medicine_name ?? '' }}{{ $item->product->medicine_form ?? '' }}{{ $item->product->medicine_strength ?? '' }}
                                                            {{ $item->product->company_name ?? '' }}
                                                            <input type="hidden" name="medicine_id[]" value="{{ $item->medicine_id }}" class="productId">
                                                            <input type="hidden" name="purchaseetailsId[]" value="{{ $item->id }}" class="productId">
                                                        </td>
                                                        <td class="text-center"><input type="text" id="qty{{$item->id}}" value="{{ $item->quantity }}" name="quantity[]" class="form-control cl_qty" autocomplete="off"></td>
                                                        <td class="text-center"><input type="text" id="unitPrice{{$item->id}}" value="{{ $item->cost_price }}" name="cost_price[]" class="form-control unitPrice" autocomplete="off"></td>
                                                        <td class="text-center"><input type="text" value="{{ $item->sales_price }}" name="sales_price[]" class="form-control sales_price" autocomplete="off"></td>
                                                        <td class="text-center"><input type="date" value="{{ $item->expire_date }}" name="expire_date[]" class="form-control exp_date" autocomplete="off"></td>
                                                        <td class="text-center" style="width: 80px;">
                                                            <select name="rack_id[]" class="form-control rack_id"
                                                                style="width:100%;text-align: center;">
                                                                @forelse ($racks as $rack)
                                                                    <option value="{{ $rack->id }}">
                                                                        {{ $rack->rack_name }}</option>
                                                                @empty
                                                                @endforelse
                                                            </select>
                                                        </td>
                                                        <td class="text-center"><input type="number" id="subTotal{{$item->id}}" value="{{ $item->sub_total }}" name="sub_total[]" class="form-control proPrice" autocomplete="off">
                                                            <input type="hidden" value="{{ $item->sub_total }}" name="hiddnTotal[]" class="form-control hiddnTotal" autocomplete="off">
                                                        </td>
                                                        <td class="text-center"><input type="text" value="{{ $item->inStock }}" name="stock[]" class="form-control inStock" readonly>
                                                            <input type="hidden" value="{{ $item->inStock }}" name="preStock[]" class="form-control preStock" readonly>
                                                            <input type="hidden" value="PHARMA" name="product_code[]" class="form-control product_code" readonly>
                                                        </td>
                                                        <td class="text-center"><button class="btn btn-danger remove" type="button"><i class="fa fa-times"></i></button></td>
                                                    </tr>

                                                @empty
                                                    <tr>
                                                        <td colspan="10" class="text-center">No Record Found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>
                                            <tfoot>
                                                <tr>
                                                    <td colspan="7" style="width:660px">Total</td>
                                                    <td class="center" style="width:120px">
                                                        <input type="text" class="form-control totalAmount"
                                                            id="totalAmount" name="total_amount"
                                                            value="{{ $data->total_amount }}"
                                                            style="width: 100%;color: red;font-weight:bold;text-align: center"
                                                            readonly>
                                                        <input type="hidden" class="form-control hiddenTotalAmount"
                                                            id="hiddenTotalAmount" value="{{ $data->total_amount }}"
                                                            name="total_cost" readonly>
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
                            <button type="submit" name="saveBtn" class="btn btn-primary">Update</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    {{-- link for create supplier  --}}
    @includeIf('admin.purchase.partials.supplier')

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
            $('#supplier_id').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('Purchase.supplier.info') }}',
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
                $("#tags").autocomplete({
                    minLength: 2,
                    source: function(req, resp) {
                        $('#loadingSpinner').show();
                        $.ajax({
                            type: "POST",
                            url: '{{ route('Purchase.product.search') }}',
                            data: {
                                _token: '{{ csrf_token() }}',
                                pursearchQuery: req.term
                            },
                            success: function(data) {
                                if (data.length === 1) {
                                    addItemDetailsAsTableRow(data[0].value);
                                } else {
                                    resp(data);
                                }
                            },
                            complete: function() {
                                $('#loadingSpinner').hide();
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
                                _token: '{{ csrf_token() }}',
                                purchasesProductName: productName
                            },
                            url: '{{ route('Purchase.fetch.single.product') }}',
                            dataType: 'json',
                            success: function(response) {
                                if (response.product.id) {
                                    var alreadyListed = 0;
                                    $('#tbody .productId').each(function() {
                                        if (this.value == response.product.id) {
                                            alreadyListed++;
                                        }
                                    });
                                    if (alreadyListed > 0) {
                                        alert(response.product.medicine_name + ' - already listed.');
                                        return false;
                                    } else {
                                        addTableRow(response);
                                        $('#tags').val('');
                                        calculateTotalAmount();
                                    }
                                } else {
                                    alert('Product not found.');
                                }
                            }
                        });
                    }
                }

                function addTableRow(responseObject) {
                    var rowIdx = $('#tbody tr').length;

                    var rackSelect = $('<select>', {
                        'class': 'form-control rack_id',
                        'name': 'rack_id[]'
                    });
                    $.each(responseObject.racks, function(index, rack) {
                        rackSelect.append($('<option>', {
                            value: rack.id,
                            text: rack.rack_name
                        }));
                    });

                    $('#tbody').append(`<tr id="R${rowIdx + 1}">
                        <td class="row-index text-center"><p>${rowIdx + 1}</p></td>
                        <td class="text-left">${responseObject.product.medicine_name} <br> ${responseObject.product.medicine_form} <br> ${responseObject.product.medicine_strength} <br> ${responseObject.product.generic_name}
                            <input type="hidden" name="product_id[]" value="${responseObject.product.id}" class="productId">
                        </td>
                        <td class="text-center"><input type="text" value="1" name="quantity[]" class="form-control cl_qty" autocomplete="off"></td>
                        <td class="text-center"><input type="text" value="${responseObject.product.cost_price}" name="cost_price[]" class="form-control unitPrice" autocomplete="off"></td>
                        <td class="text-center"><input type="text" value="${responseObject.product.sales_price}" name="sales_price[]" class="form-control sales_price" autocomplete="off"></td>
                        <td class="text-center"><input type="date" value="${responseObject.product.expire_date}" name="expire_date[]" class="form-control exp_date" autocomplete="off"></td>
                        <td class="text-center"></td> <!-- Add an empty cell for rack dropdown -->
                        <td class="text-center"><input type="text" value="${responseObject.product.cost_price}" name="sub_total[]" class="form-control proPrice" autocomplete="off">
                            <input type="hidden" value="${responseObject.product.cost_price}" name="hiddnTotal[]" class="form-control hiddnTotal" autocomplete="off">
                        </td>
                        <td class="text-center"><input type="text" value="${responseObject.product.inStock}" name="stock[]" class="form-control inStock" readonly>
                            <input type="hidden" value="${responseObject.product.preStock}" name="preStock[]" class="form-control preStock" readonly>
                            <input type="hidden" value="${responseObject.product.generic_id}" name="product_code[]" class="form-control product_code" readonly>
                        </td>
                        <td class="text-center"><button class="btn btn-danger remove" type="button"><i class="fa fa-times"></i></button></td>
                    </tr>`);

                    // Append the rack select dropdown to the table row
                    $('#tbody tr:last td:nth-child(7)').html(rackSelect);
                }

                // Remove table row
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
                    calculateTotalAmount();
                });

                // Update stock and price when quantity changes
                $(document).on('keyup', '.cl_qty', function() {
                    var tID = $(this).closest('tr').attr('id');
                    var cl_qty = parseFloat($(this).val()) || 0;

                    var preStock = parseFloat($('#' + tID + ' .preStock').val()) || 0;
                    var unit_price = parseFloat($('#' + tID + ' .unitPrice').val()) || 0;

                    var currStock = Number(preStock) + Number(cl_qty);
                    var line_total = Number(unit_price) * Number(cl_qty);

                    $('#' + tID + ' .inStock').val(currStock);
                    $('#' + tID + ' .proPrice').val(roundToTwo(line_total));
                    $('#' + tID + ' .hiddnTotal').val(roundToTwo(line_total));
                    calculateTotalAmount();
                });

                // Update line total when unit price changes
                $(document).on('keyup', '.unitPrice', function() {
                    var tID = $(this).closest('tr').attr('id');
                    var unit_price = parseFloat($(this).val()) || 0;

                    var cl_qty = parseFloat($('#' + tID + ' .cl_qty').val()) || 0;

                    var line_total = Number(unit_price) * Number(cl_qty);
                    $('#' + tID + ' .proPrice').val(roundToTwo(line_total));
                    $('#' + tID + ' .hiddnTotal').val(roundToTwo(line_total));
                    calculateTotalAmount();
                });

                // Update unit price when line total changes
                $(document).on('keyup', '.proPrice', function() {
                    var tID = $(this).closest('tr').attr('id');
                    var proPrice = parseFloat($(this).val()) || 0;

                    var cl_qty = parseFloat($('#' + tID + ' .cl_qty').val()) || 0;

                    var new_cost = (cl_qty !== 0) ? Number(proPrice) / Number(cl_qty) : 0;
                    var line_total = Number(new_cost) * Number(cl_qty);

                    $('#' + tID + ' .unitPrice').val(roundToTwo(new_cost));
                    $('#' + tID + ' .hiddnTotal').val(roundToTwo(line_total));
                    calculateTotalAmount();
                });

                function calculateTotalAmount() {
                    var sum = 0;
                    $('.hiddnTotal').each(function() {
                        sum += parseFloat(this.value) || 0;
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

        <script>
            function calculatePurchaseDetailsData(){
                $(document).on('keyup', '.cl_qty, .unitPrice', function() {
                    let totalAmount = 0;
                    $('tbody tr').each(function() {
                        const quantity = parseFloat($(this).find('.cl_qty').val()) || 0;
                        const costPrice = parseFloat($(this).find('.unitPrice').val()) || 0;
                        const subTotal = quantity * costPrice;
                        $(this).find('.proPrice').val(subTotal.toFixed(2));
                        $(this).find('.inStock').val(quantity);
                        totalAmount += subTotal;
                    });
                    $('#totalAmount').val(totalAmount.toFixed(2));
                    $('#invoice_amount').val(totalAmount.toFixed(2));
                    $('#hiddenTotalAmount').val(totalAmount.toFixed(2));
                    calculateTotalAmount();
                });
            }
            calculatePurchaseDetailsData()
            // Remove table row
            $(document).on('click', '.remove', function() {
                $(this).closest('tr').remove();
                calculateTotalAmount();
                calculatePurchaseDetailsData()
            });
        </script>
    @endpush


@endsection


