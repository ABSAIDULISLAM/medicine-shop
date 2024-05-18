@extends('admin.layouts.master')

@section('title', 'edit-Purchase')

@section('content')

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
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Purchases</a></li>
            <li class="active">Update Purchases</li>
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
                    <form method="POST" action="{{route('Purchase.update')}}">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="supplier_id">Supplier Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="hidden" name="purchaseId" value="{{$data->id}}" class="form-control">
                                            <select name="supplier_id" id="supplier_id" class="form-control select2"
                                                required>
                                                <option selected>Select Supplier</option>
                                                @forelse ($suplyer as $item)
                                                    <option value="{{ $item->id }}"{{$data->supplier_id == $item->id ? 'selected' : ''}}>{{ $item->company_name }}</option>
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
                                        <label for="invoice_amount">Total Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="final_amount" id="invoice_amount"
                                                class="form-control" placeholder="0.00" readonly="" value="{{$data->final_amount}}">
                                            <input type="hidden" id="hiddenInvoiceAmount" class="form-control"
                                                placeholder="0.00" readonly="">

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment">Payment</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-handshake-o"></i></span>
                                            <input type="text" name="payment" class="form-control @error('payment') is-invalid border border-danger @enderror" id="payment"
                                                oninput="paymentAmount(this.id)" placeholder="0.00" autocomplete="off"  value="{{$data->payment}}">
                                        </div>
                                        @error('payment')
                                            <div class="invalid-feedback error text-red">{{ $message }}</div>
                                        @enderror
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="previous_dues">Previous Dues</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="previous_dues" id="previous_dues"
                                                class="form-control" autocomplete="off" required="" placeholder="0.00"
                                                readonly=""  value="{{$data->previous_dues}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="discount">Discount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="discount" class="form-control" id="discount"
                                                oninput="discountAmount(this.id)" placeholder="0.00" autocomplete="off"  value="{{$data->discount}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="dues">Dues</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" class="form-control" name="dues" id="dues"
                                                placeholder="0.00" autocomplete="off" readonly="" value="{{$data->dues}}">
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
                                                autocomplete="off" value="{{$data->shipping_charge}}">
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
                                                    <option value="{{ $item->id }}" {{$data->bank_id == $item->id ? 'selected':''}}>{{ $item->bank_name }}</option>
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
                                        <label for="datepicker">Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="date" value="{{ $data->date }}" class="form-control pull-right"
                                                id="datepicker" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="payment_method">Payment Method</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <select name="payment_method" id="payment_method" class="form-control"
                                                onchange="change()" required="" style="width: 100%;">
                                                <option value="0" {{$data->payment_method == 0 ? 'selected':''}}>Cash in Hand</option>
                                                <option value="1" {{$data->payment_method == 1 ? 'selected':''}}>Cheque</option>
                                                <option value="2" {{$data->payment_method == 2 ? 'selected':''}}>Bkash</option>
                                                <option value="3" {{$data->payment_method == 3 ? 'selected':''}}>Rocket</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="cheque_no" style="display:none;">
                                        <label for="cheque_number">Cheque Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" name="cheque_no" class="form-control"
                                                id="cheque_number" placeholder="Cheque Number" autocomplete="off" value="{{$data->cheque_no}}">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row" style="margin-top: 20px;">
                                <div class="col-md-12">
                                    {{-- <div class="form-group">
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
                                        <div id="products">

                                        </div>
                                    </div> --}}
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
                                                    {{-- <th class="text-center" style='width: 100px;'>Rack No</th> --}}
                                                    <th class="text-center" style='width: 120px;'>Sub Total</th>
                                                    <th class="text-center" style='width: 80px;'>Stock</th>
                                                    {{-- <th class="text-center" style='width: 70px;'>Action</th> --}}
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                @forelse ($data->purchasedetails as $item)

                                                <tr>
                                                    <td class="row-index text-center" style="width: 10px"><p>{{$loop->index+1}}</p></td>
                                                    <td class="text-left" style="width: 150px;">
                                                        {{$item->product->medicine_name??''}}{{$item->product->medicine_form??''}}{{$item->product->medicine_strength??''}} {{$item->product->company_name?? ''}}
                                                        <input type="hidden" name="product_id[]" value="{{$item->product_id}}" class="productId"></td>
                                                        <input type="hidden" name="purchaseetailsId[]" value="{{$item->id}}" class="productId"></td>
                                                    <td class="text-center" style="width: 70px;"><input type="text" value="{{$item->quantity}}" name="quantity[]" class="form-control cl_qty" style="width:100%;" autocomplete="off"></td>
                                                    <td class="text-center" style="width: 80px;"><input type="text" value="{{$item->cost_price}}" name="cost_price[]" class="form-control unitPrice" style="width:100%;text-align: center" autocomplete="off"></td>
                                                    <td class="text-center" style="width: 80px;"><input type="text" value="{{$item->sales_price}}" name="sales_price[]" class="form-control sales_price" style="width:100%;text-align: center" autocomplete="off"></td>
                                                    <td class="text-center" style="width: 80px;"><input type="date" value="{{$item->expire_date}}" name="expire_date[]" class="form-control exp_date" style="width:145px;text-align: center;margin-right: -25px"></td>
                                                    {{-- <td class="text-center" style="width: 80px;">
                                                        <select name="rack_id[]" class="form-control rack_id" style="width:100%;text-align: center;color: red;font-weight: bold">
                                                            @forelse ($racks as $rack)
                                                            <option value="{{$rack->id}}" {{$item->rack->id==$rack->id ? 'selected':''}}>{{$rack->rack_name}}</option>
                                                            @empty
                                                            @endforelse
                                                        </select>
                                                    </td> --}}
                                                    <td class="text-center" style="width: 100px;">
                                                        <input type="text" value="{{$item->sub_total}}" name="sub_total[]" class="form-control proPrice" style="width:100%;text-align: center">
                                                            <input type="hidden" value="{{$item->sub_total}}" name="hiddnTotal[]" class="form-control hiddnTotal" style="width:100%;text-align: center">
                                                    </td>
                                                    <td class="text-center" style="width: 70px;">
                                                            <input type="text" value="{{$item->inStock}}" name="stock[]" tabindex="1" class="form-control Stock" style="width:100%;text-align: center" readonly>
                                                        <input type="hidden" value="" name="preStock[]" tabindex="1" class="form-control preStock" style="width:100%;text-align: center" readonly>
                                                        <input type="hidden" value="" name="product_code[]" tabindex="1" class="form-control product_code" style="width:100%;text-align: center" readonly>
                                                    </td>
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
                                                            id="totalAmount" name="total_amount" value="{{$data->total_amount}}"
                                                            style="width: 100%;color: red;font-weight:bold;text-align: center"
                                                            readonly>
                                                        <input type="hidden" class="form-control hiddenTotalAmount"
                                                            id="hiddenTotalAmount" value="{{$data->total_amount}}" name="total_cost" readonly>
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
    <!-- /.content -->

    @push('js')
    <script>
        $(document).ready(function() {
            function roundToTwo(num) {
                return parseFloat(num).toFixed(2);
            }

            // Function to calculate the total amount
            function calculateTotalAmount() {
                var sum = 0;
                $('.hiddnTotal').each(function() {
                    sum += parseFloat($(this).val()) || 0;
                });
                sum = roundToTwo(sum);
                $('#totalAmount').val(sum);
                $('#hiddenTotalAmount').val(sum);
                $('#invoice_amount').val(sum);
                $('#dues').val(sum);
            }

            // Function to calculate dues based on payment amount
            function paymentAmount() {
                var totalAmount = parseFloat($('#invoice_amount').val()) || 0;
                var payment = parseFloat($('#payment').val()) || 0;
                var currDues = totalAmount - payment;
                $('#dues').val(roundToTwo(currDues));
            }

            // Function to calculate total amount with shipping charge
            function shippingAmount() {
                var totalAmount = parseFloat($('#totalAmount').val()) || 0;
                var shipping_charge = parseFloat($('#shipping_charge').val()) || 0;
                var discount = parseFloat($('#discount').val()) || 0;
                var withShip = totalAmount + shipping_charge;
                var withDis = withShip - discount;
                $('#invoice_amount').val(roundToTwo(withDis));
                $('#dues').val(roundToTwo(withDis));
            }

            // Function to calculate total amount with discount
            function discountAmount() {
                var totalAmount = parseFloat($('#totalAmount').val()) || 0;
                var shipping_charge = parseFloat($('#shipping_charge').val()) || 0;
                var discount = parseFloat($('#discount').val()) || 0;
                var withShip = totalAmount + shipping_charge;
                var withDis = withShip - discount;
                $('#invoice_amount').val(roundToTwo(withDis));
                $('#dues').val(roundToTwo(withDis));
            }

            // Update the previous dues when supplier changes
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

            // Update totals and stock when quantity or unit price changes
            $(document).on('keyup change', '.cl_qty, .unitPrice', function() {
                var row = $(this).closest('tr');
                var cl_qty = parseFloat(row.find('.cl_qty').val()) || 0;
                var unit_price = parseFloat(row.find('.unitPrice').val()) || 0;
                var line_total = cl_qty * unit_price;
                row.find('.proPrice').val(roundToTwo(line_total));
                row.find('.hiddnTotal').val(roundToTwo(line_total));

                // Update stock
                updateStock(row, cl_qty);

                calculateTotalAmount();
                shippingAmount();
            });

            // Update totals and stock when product price changes
            $(document).on('keyup change', '.proPrice', function() {
                var row = $(this).closest('tr');
                var proPrice = parseFloat($(this).val()) || 0;
                var cl_qty = parseFloat(row.find('.cl_qty').val()) || 0;
                var new_cost = proPrice / cl_qty;
                row.find('.unitPrice').val(roundToTwo(new_cost));
                row.find('.hiddnTotal').val(roundToTwo(proPrice));

                // Update stock
                updateStock(row, cl_qty);

                calculateTotalAmount();
                shippingAmount();
            });

            // Function to update stock
            function updateStock(row, quantity) {
                var stock = parseFloat(row.find('.stock').val()) || 0;
                var new_stock = stock + quantity; // Update logic as per your requirement
                row.find('.stock').val(roundToTwo(new_stock));
            }

            // Show or hide bank details based on payment method
            $("#payment_method").change(function() {
                if ($(this).val() == "1") { // Assuming "1" is for cheque
                    $("#bank_name").show();
                    $("#cheque_no").show();
                } else {
                    $("#bank_name").hide();
                    $("#cheque_no").hide();
                }
            });

            // Event listeners for payment, shipping, and discount fields
            $('#payment').on('input', paymentAmount);
            $('#shipping_charge').on('input', shippingAmount);
            $('#discount').on('input', discountAmount);

            // Initial calculation on page load
            calculateTotalAmount();
        });
    </script>
    @endpush


@endsection
