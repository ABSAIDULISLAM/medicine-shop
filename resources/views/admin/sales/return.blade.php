@extends('admin.layouts.master')
@section('title', 'Return-Sales')
@section('content')
    <section class="content-header">
        <h1>
            Return Sales
            <small>Return Invoice</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('Admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('Sales.index')}}">Sales</a></li>
            <li class="active">Return Invoice</li>
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
                        <h3 class="box-title">Return Invoice</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    @includeIf('errors.error')
                    <!-- form start -->
                    <form method="POST" action="{{route('Sales.return.update')}}" >
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="customer_id">Customer Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select name="customer_id" id="customer_id"
                                                class="customer_id form-control select2" required="">
                                                <option value="" disabled selected>Select Or Create Customer </option>
                                                @forelse ($customer as $item)
                                                    <option value="{{ $item->id }}" {{$data->customer_id == $item->id ? 'selected':''}}>{{ $item->company_name }}</option>
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
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number <span style="color: red">*</span></label>
                                        <input type="text" name="mobile_number" id="mobile_number" class="form-control"
                                            autocomplete="off" required="" placeholder="Mobile" value="{{$data->mobile_number}}">
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="previous_dues">Previous Dues <span style="color: red">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                    <input type="text" name="previous_dues" id="previous_dues"
                                                        class="form-control" autocomplete="off" required=""
                                                        placeholder="0.00" readonly="" value="{{$data->previous_dues}}">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="invoice_number">Invoice Number<span
                                                        style="color: red">*</span></label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                                    <input type="text" name="invoice_number" id="invoice_number" value="{{$data->invoice_number}}"
                                                        class="form-control" autocomplete="off"
                                                        required="" readonly="">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="datepicker">Date <span style="color: red">*</span></label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" value="{{ $data->date}}" name="date" class="form-control pull-right"
                                                id="datepicker" autocomplete="off" required>
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
                                            <input type="text" id="tags" accesskey="A"
                                                class="form-control" placeholder="Enter Product Name / Product Code"
                                                autofocus="autofocus" autocomplete="off" />
                                        </div>
                                    </div>
                                    <div style="overflow-x:auto;">
                                        <table class="table tbl table-bordered table-striped table-hover">
                                            <thead>
                                                <tr style="background-color:#2E4D62 ;color: #fff;">
                                                    <th class="text-center" style='width: 10px;'>SL</th>
                                                    <th class="text-center" style='width: 150px;'>Medi.Name <span style="color: red">
                                                        *</span></th>
                                                    <th class="text-center" style='width: 100px;'>Quantity <span style="color: red">
                                                        *</span></th>
                                                    <th class="text-center" style='width: 100px;'>Unit Price <span style="color: red">
                                                        *</span></th>
                                                    <th class="text-center" style='width: 100px;'>Discount %</th>
                                                    <th class="text-center" style='width: 120px;'>Sub Total <span style="color: red">
                                                        *</span></th>
                                                    <th class="text-center" style='width: 100px;'>Cost Price <span style="color: red">
                                                        *</span></th>
                                                    <th class="text-center" style='width: 70px;'>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">
                                                <div id="loadingSpinner" style="display: none;" class="text-center m-auto">
                                                    <img src="{{ asset('backend/assets/spinner.gif') }}" alt="Loading..." height="150px" width="150px">
                                                </div>
                                                @forelse ($data->salesDetails as $item)
                                                    <tr>
                                                        <td class="row-index text-center" style="width: 10px">
                                                            <p>{{$loop->index + 1}}</p>
                                                        </td>
                                                        <td class="text-left" style="width: 150px;">
                                                            {{$item->medicine->medicine_name ?? ''}}<br>
                                                            {{$item->medicine->medicine_form ?? ''}}<br>
                                                            {{$item->medicine_strength}}<br>
                                                            {{$item->medicine->company_name ?? ''}}
                                                            <input type="hidden" name="product_id[]" value="{{ $item->product_id }}" class="productId">
                                                            <input type="hidden" name="salesDetailId[]" value="{{$item->id}}" class="productId">
                                                            <input type="hidden" name="medicine_id[]" value="{{$item->medicine_id}}" class="productId">
                                                            <input type="hidden" name="generic_id[]" value="{{$item->generic_id}}">
                                                            <input type="hidden" name="company_id[]" value="{{$item->company_id}}">
                                                        </td>
                                                        <td class="text-center" style="width: 70px;">
                                                            <input type="number" value="{{$item->quantity}}" name="quantity[]" class="form-control cl_qty" style="width:100%;" autocomplete="off">
                                                        </td>
                                                        <td class="text-center" style="width: 80px;">
                                                            <input type="number" value="{{$item->sell_price}}" name="unit_price[]" class="form-control unitPrice" style="width:100%;text-align: center" autocomplete="off" readonly>
                                                        </td>
                                                        <td class="text-center" style="width: 80px;">
                                                            <input type="number" value="{{$item->product_discount}}" name="uni_disc[]" class="form-control uni_disc" style="width:100%;text-align: center" autocomplete="off">
                                                            <input type="hidden" value="{{$item->hidden_unit_price}}" name="hiddenPrice[]" class="form-control hiddenPrice" style="width:100%;text-align: center" autocomplete="off">
                                                        </td>
                                                        <td class="text-center" style="width: 100px;">
                                                            <input type="number" value="{{$item->sub_total}}" name="sub_total[]" class="form-control sub_total" style="width:100%;text-align: center">
                                                            <input type="hidden" value="{{$item->netCost_price}}" name="sell_price[]" class="form-control hiddnUniPrice" style="width:100%;text-align: center">
                                                        </td>
                                                        <td class="text-left" style="width: 80px;">
                                                            <button type="button" data-toggle="modal" data-target="#costShow{{$loop->index}}" class="btn btn-default btn-flat">
                                                                <i class="fa fa-eye text-primary fa-lg" aria-hidden="true"></i>
                                                            </button>
                                                            <input type="hidden" value="{{$item->hidden_unit_price}}" name="cost_price[]" class="form-control cost_price" style="width:100%;text-align: center" autocomplete="off" readonly>
                                                            <div class="modal fade" id="costShow{{$loop->index}}">
                                                                <div class="modal-dialog">
                                                                    <div class="modal-content">
                                                                        <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                                            <h4 class="modal-title">Show Cost Price</h4>
                                                                        </div>
                                                                        <div class="modal-body">
                                                                            <label>Cost Price</label>
                                                                            <input type="number" class="form-control" value="{{$item->medicine->sale_price}}" autocomplete="off" readonly>
                                                                            <label>MRP Price</label>
                                                                            <input type="number" class="form-control" value="{{$item->medicine->mrp_price}}" autocomplete="off" readonly>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="text-center" style="width: 50px;">
                                                            <button class="btn btn-danger remove" tabindex="1" type="button">
                                                                <i class="fa fa-times" aria-hidden="true"></i>
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @empty
                                                    <tr>
                                                        <td colspan="8" class="text-center">No Record Found</td>
                                                    </tr>
                                                @endforelse
                                            </tbody>

                                            <tfoot>
                                                <tr>
                                                    <td colspan="5" style="width:460px">Total</td>
                                                    <td class="center" style="width:120px">
                                                        <input type="text" class="form-control totalAmount"
                                                            id="totalAmount" name="total_amount" value="{{$data->total_amount}}"
                                                            style="width: 100%;color: red;font-weight:bold;text-align: center"
                                                            readonly>
                                                        <input type="hidden" class="form-control hiddenTotalAmount"
                                                            id="hiddenTotalAmount" readonly required value="{{$data->total_amount}}">
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
                                                    <label style="font-size: 14px;">Discount %</label><br>
                                                    <input type="number" name="discount_amount" class="form-control"
                                                        oninput="discountAmount(this.id)" id="discount" value="{{$data->discount_amount}}"
                                                        autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Less</label><br>
                                                    <input type="number" name="less_amount" class="form-control"
                                                        oninput="lessAmount(this.id)" id="less_amount" value="{{$data->less_amount}}"
                                                        autocomplete="off">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Total Amount<span
                                                            style="color: red">*</span></label><br>
                                                    <input type="number" name="grand_total" id="grand_total"
                                                        class="form-control" readonly="" required value="{{$data->grand_total}}"
                                                        style="color: #14ba32;font-weight: bold;font-size: 20px">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Cash Received<span
                                                            style="color: red">*</span></label><br>
                                                    <input type="text" class="form-control" name="cash_paid"
                                                        id="cash_paid" oninput="calculatePayment(this.id);" value="{{$data->cash_paid}}"
                                                        autocomplete="off" style="color: #056e3f;font-weight: bold"
                                                        required="">
                                                </td>
                                            </tr>

                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Due Amount</label><br>
                                                    <input type="number" name="due_amount" class="form-control" value="{{$data->due_amount}}"
                                                        id="due_amount" readonly=""
                                                        style="color: red;font-weight: bold">
                                                    <input type="hidden" class="form-control" id="hiddenDue"
                                                        readonly="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Change/Refund Amount</label><br>
                                                    <input type="text" name="advance" class="form-control" value="{{$data->advance}}"
                                                        id="change" readonly="">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td>
                                                    <label style="font-size: 14px;">Payment Method</label><br>
                                                    <select name="payment_method" id="payment_method"
                                                        class="form-control" onchange="change()" style="width: 100%;">
                                                        <option value="0" {{$data->payment_method == 0 ? 'selected':''}}>Cash Payment</option>
                                                        <option value="1"{{$data->payment_method == 1 ? 'selected':''}}>Cheque Paid</option>
                                                        <option value="2" {{$data->payment_method == 2 ? 'selected':''}}>Card Payment</option>
                                                        <option value="3" {{$data->payment_method == 3 ? 'selected':''}}>Mobile Banking</option>
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
                            <button type="submit"
                                class="btn btn-primary">Return</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>

    @includeIf('admin.sales.partials.create-customer')
@endsection

@push('js')
        <script>
            $(document).ready(function() {
            // Fetch customer info on selection change
            $('#customer_id').change(function() {
                var id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: '{{ route('Sales.customer.info') }}',
                    data: {
                        'customer_id': id,
                        '_token': '{{ csrf_token() }}'
                    },
                    success: function(response) {
                        $('#mobile_number').val(response.contactNum);
                        $('#previous_dues').val(response.prevdue);
                    }
                });
            });

            // Function to calculate payment details
            function calculatePayment() {
                var grandTotal = parseFloat($('#grand_total').val()) || 0;
                var cashPaid = parseFloat($('#cash_paid').val()) || 0;
                var currDues = grandTotal - cashPaid;

                if (currDues > 0) {
                    $('#due_amount').val(currDues.toFixed(2));
                    $('#change').val('0.00');
                } else {
                    $('#change').val(Math.abs(currDues).toFixed(2));
                    $('#due_amount').val('0.00');
                }
            }

            // Function to calculate total amount
            function calculateTotalAmount() {
                var sum = 0;
                $('.sub_total').each(function() {
                    sum += parseFloat(this.value) || 0;
                });

                var lessAmount = parseFloat($('#less_amount').val()) || 0;
                var netAmount = sum - lessAmount;

                $('#totalAmount, #hiddenTotalAmount, #grand_total, #due_amount, #hiddenDue').val(netAmount.toFixed(2));
                calculatePayment();
            }

            // Function to calculate discount amount
            function discountAmount() {
                var hiddenTotalAmount = parseFloat($('#hiddenTotalAmount').val()) || 0;
                var discount = parseFloat($('#discount').val()) || 0;
                var lessAmount = parseFloat($('#less_amount').val()) || 0;

                var discountAmount = hiddenTotalAmount * (discount / 100);
                var totalAmount = hiddenTotalAmount - discountAmount - lessAmount;

                $('#grand_total, #due_amount, #hiddenDue').val(totalAmount.toFixed(2));
                calculatePayment();
            }

            // Function to add item details as a table row
            function addItemDetailsAsTableRow(productName) {
                if (productName != '') {
                    $.ajax({
                        type: "POST",
                        data: {
                            _token: '{{ csrf_token() }}',
                            purchasesProductName: productName
                        },
                        url: '{{ route('Sales.fetch.single.product') }}',
                        dataType: 'json',
                        success: function(response) {
                            if (response.product.id) {
                                var alreadyListed = false;
                                $('#tbody .productId').each(function() {
                                    if (this.value == response.product.id) {
                                        alreadyListed = true;
                                        return false;
                                    }
                                });
                                if (alreadyListed) {
                                    alert(response.product.medicine_name + ' - already listed.');
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

            // Function to add a new row to the product table
            function addTableRow(responseObject) {
                var rowIdx = $('#tbody tr').length + 1;
                var discount = responseObject.product.discount || 0; // Ensure discount is set properly

                $('#tbody').append(`
                    <tr id="R${rowIdx}">
                        <td class="row-index text-center"><p>${rowIdx}</p></td>
                        <td class="text-left">
                            ${responseObject.product.medicine_name}<br>
                            ${responseObject.product.medicine_form}<br>
                            ${responseObject.product.medicine_strength}<br>
                            ${responseObject.product.company_name}
                            <input type="hidden" name="salesDetailId[]" value="${responseObject.product.id}" class="productId">
                            <input type="hidden" name="medicine_id[]" value="${responseObject.product.medicine_id}" class="productId">
                            <input type="hidden" name="generic_id[]" value="${responseObject.product.generic_id}">
                            <input type="hidden" name="company_id[]" value="${responseObject.product.company_id}">
                        </td>
                        <td class="text-center"><input type="number" value="1" name="quantity[]" class="form-control cl_qty" autocomplete="off"></td>
                        <td class="text-center"><input type="number" value="${responseObject.product.sales_price}" name="unit_price[]" class="form-control unitPrice" autocomplete="off" readonly></td>
                        <td class="text-center">
                            <input type="number" value="${discount}" name="uni_disc[]" class="form-control uni_disc" autocomplete="off">  <!-- Properly handle discount value -->
                            <input type="hidden" value="${responseObject.product.sales_price}" name="hiddenPrice[]" class="form-control hiddenPrice" autocomplete="off">
                        </td>
                        <td class="text-center">
                            <input type="number" value="${responseObject.product.sales_price}" name="sub_total[]" class="form-control sub_total" autocomplete="off" readonly>
                            <input type="hidden" value="${responseObject.product.sales_price}" name="sell_price[]" class="form-control hiddnUniPrice" autocomplete="off">
                        </td>
                        <td class="text-left">
                            <button type="button" data-toggle="modal" data-target="#costShow${responseObject.product.id}" class="btn btn-default btn-flat"><i class="fa fa-eye text-primary fa-lg"></i></button>
                            <input type="hidden" value="${responseObject.product.cost_price}" name="cost_price[]" class="form-control cost_price" autocomplete="off" readonly>
                            <div id="costShow${responseObject.product.id}" class="modal fade">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                                            <h4 class="modal-title">Show Cost Price</h4>
                                        </div>
                                        <div class="modal-body">
                                            <label>Cost Price</label>
                                            <input type="number" class="form-control" value="${responseObject.product.cost_price}" autocomplete="off" readonly>
                                            <label>MRP Price</label>
                                            <input type="number" class="form-control" value="${responseObject.product.mrp_price}" autocomplete="off" readonly>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </td>
                        <td class="text-center"><button class="btn btn-danger remove" type="button"><i class="fa fa-times"></i></button></td>
                    </tr>`);
            }

            // Autocomplete for product search
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
                    if (ui.item) {
                        addItemDetailsAsTableRow(ui.item.value);
                    }
                    return true;
                }
            });

            // Handle enter key press for adding product directly
            $("#tags").keypress(function(event) {
                if (event.keyCode == 13) {
                    addItemDetailsAsTableRow($(this).val());
                }
            });

            // Remove a row from the product table
            $('#tbody').on('click', '.remove', function() {
                $(this).closest('tr').remove();
                calculateTotalAmount();
            });

            // Update calculations when quantity, unit price, or discount changes
            $(document).on('keyup', '.cl_qty, .unitPrice, .uni_disc', function() {
                var row = $(this).closest('tr');
                var quantity = parseFloat(row.find('.cl_qty').val()) || 0;
                var unitPrice = parseFloat(row.find('.unitPrice').val()) || 0;
                var discount = parseFloat(row.find('.uni_disc').val()) || 0;

                var discountedPrice = unitPrice - (unitPrice * (discount / 100));
                var subTotal = quantity * discountedPrice;

                row.find('.unitPrice').val(discountedPrice.toFixed(2));
                row.find('.sub_total').val(subTotal.toFixed(2));

                calculateTotalAmount();
            });

            // Calculate discount and payment on input change
            $('#less_amount, #discount').on('input', function() {
                discountAmount();
                calculatePayment();
            });

            // Calculate payment when cash paid is updated
            $('#cash_paid').on('input', function() {
                calculatePayment();
            });

            // Show/hide payment method specific fields
            $("#payment_method").change(function() {
                var method = $(this).val();
                var chequeFields = ["#chequePaid", "#chequePaid2", "#chequePaid3", "#chequePaid4"];
                var cardFields = ["#cardNo"];
                var mobileFields = ["#mobNo"];

                $(chequeFields.join(', ')).hide();
                $(cardFields.join(', ')).hide();
                $(mobileFields.join(', ')).hide();

                if (method == "1") {
                    $(chequeFields.join(', ')).show();
                } else if (method == "2") {
                    $(cardFields.join(', ')).show();
                } else if (method == "3") {
                    $(mobileFields.join(', ')).show();
                }
            });

            // Initial calculation of total amount
            calculateTotalAmount();
        });

        </script>

@endpush
