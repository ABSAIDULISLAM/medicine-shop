@extends('admin.layouts.master')
@section('title', 'create-collection')
@section('content')
    <section class="content-header">
        <h1>
            Add Collection
            <small>Add Collection</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Collection</a></li>
            <li class="active">Add Collection</li>
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
                        <h3 class="box-title">Add Collection</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="">
                        <div class="box-body">
                            <div class="row">
                                <!-- Customer Selection -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cus_id">Customer Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select name="customer_id" id="cus_id" class="form-control select2" style="width: 100%;">
                                                <option value="" disabled selected>Select Customer</option>
                                                @forelse ($customer as $item)
                                                <option value="{{$item->id}}">{{$item->company_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Total Dues -->
                                    <div class="form-group">
                                        <label for="totalDuesAmount">Total Dues</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="totalDues" id="totalDuesAmount" class="form-control" readonly="">
                                        </div>
                                    </div>

                                    <!-- Remarks -->
                                    <div class="form-group">
                                        <label for="remarks">Remarks</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <input type="text" name="remarks" id="remarks" class="form-control" placeholder="Remarks" autocomplete="off">
                                        </div>
                                    </div>

                                    <!-- Bank Name (Card Paid) -->
                                    <div class="form-group" id="card_paid" style="display: none">
                                        <label for="bank_id">Bank Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                            <select name="bank_id" id="bank_id" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Bank</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <!-- Address and Date -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="address" id="address" class="form-control" placeholder="Address" readonly="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="datepicker">Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i></div>
                                            <input type="text" name="date" class="form-control pull-right" id="datepicker" autocomplete="off">
                                        </div>
                                    </div>

                                    <!-- Today Paid -->
                                    <div class="form-group">
                                        <label for="paid">Today Paid</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="paid" id="paid" onkeyup="sum();" class="form-control" autocomplete="off">
                                        </div>
                                    </div>

                                    <!-- Cheque Number (Cheque Paid) -->
                                    <div class="form-group" id="card_paid3" style="display: none">
                                        <label for="chequeNum">Cheque Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="chequeNum" id="chequeNum" class="form-control" placeholder="Cheque Number">
                                            <input type="hidden" id="bankPreviousAmount" class="form-control" placeholder="0.00" readonly="">
                                        </div>
                                    </div>
                                </div>

                                <!-- Payment Method and Final Dues -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="money_receipt">Money Receipt</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="money_reset" class="form-control" value="MR-6" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="show">Payment Method</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="payment_method" class="form-control" id="show" onchange="change()" style="width: 100%;">
                                                <option value="0">Cash in Hand</option>
                                                <option value="1">Cheque Paid</option>
                                                <option value="2">Card Paid</option>
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Discount -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <label for="discount">Discount</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                    <input type="text" name="discount" id="discount" oninput="discountAmount(this.id)" class="form-control" autocomplete="off">
                                                </div>
                                            </div>
                                        </div>

                                        <!-- Final Dues -->
                                        <div class="form-group">
                                            <label for="currDues">Final Dues</label>
                                            <div class="input-group">
                                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                                <input type="text" name="currDues" id="currdue" class="form-control" placeholder="0.00" readonly="">
                                                <input type="hidden" id="hiddendue" class="form-control" readonly="">
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Cheque Approval Date (Cheque Paid) -->
                                    <div class="form-group" id="card_paid5" style="display: none">
                                        <label for="datepicker2">Cheque Approval Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i></div>
                                            <input type="text" name="chuque_app_date" class="form-control pull-right" id="datepicker2" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="box-footer text-center">
                            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
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
            function sum() {
                var totaldues = Number($("#totalDuesAmount").val());
                var paid = Number($("#paid").val());
                var discount = Number($("#discount").val());

                var totalLess = parseInt(paid) + parseInt(discount);

                var result = parseInt(totaldues) - parseInt(totalLess);
                if (!isNaN(result)) {
                    document.getElementById('currdue').value = roundToTwo(result);
                    document.getElementById('hiddendue').value = roundToTwo(result);
                }
            }

            function discountAmount(id) {
                var totaldues = $('#totalDuesAmount').val();
                var paid = $('#paid').val();
                var discount = $('#discount').val();

                $('#currdue').val(0);
                $('#hiddendue').val(0);

                var totasLess = Number(paid) + Number(discount);
                var currDues = Number(totaldues) - Number(totasLess);

                $('#currdue').val(roundToTwo(currDues));
                $('#hiddendue').val(roundToTwo(currDues));
            }

            $(document).ready(function() {
                $('#cus_id').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('Collection.customer.info') }}',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            'cus_id': id
                        },
                        success: function(response) {
                            // Clear existing values
                            $('#address').val('');
                            $('#contact_num').val('');
                            $('#totalDuesAmount').val(0);
                            $('#hiddenDue').val(0);

                            // Update values with response data
                            var customerData = response.data;
                            var previousDue = response.previousDue;
                            var address = customerData.address + " ( " + customerData.contact_num + " )";

                            $('#address').val(address);
                            $('#totalDuesAmount').val(previousDue);
                            $('#hiddenDue').val(previousDue);
                        }
                    });
                });

                // Show/hide fields based on payment method selection
                $("#show").change(function() {
                    var method = $(this).val();
                    if (method == "1") {
                        $("#card_paid3").show();
                        $("#card_paid").hide();
                        $("#card_paid5").show();
                    } else if (method == "2") {
                        $("#card_paid").show();
                        $("#card_paid3").hide();
                        $("#card_paid5").hide();
                    } else {
                        $("#card_paid, #card_paid3, #card_paid5").hide();
                    }
                });

                // Calculate final dues when paid amount or discount changes
                function calculateFinalDues() {
                    var totalDues = parseFloat($('#totalDuesAmount').val()) || 0;
                    var paidAmount = parseFloat($('#paid').val()) || 0;
                    var discount = parseFloat($('#discount').val()) || 0;
                    var finalDues = totalDues - paidAmount - discount;

                    $('#currdue').val(finalDues.toFixed(2));
                    $('#hiddendue').val(finalDues.toFixed(2));
                }

                $('#paid, #discount').on('input', function() {
                    calculateFinalDues();
                });
            });


            $(document).ready(function() {
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
            ///###--Payment Calculation Function End--###
            $("#show").change(function() {
                if ($(this).val() == "1") {
                    $("#card_paid").show();
                    $("#card_paid2").show();
                    $("#card_paid3").show();
                    $("#card_paid5").show();
                } else {
                    $("#card_paid").hide();
                    $("#card_paid2").hide();
                    $("#card_paid3").hide();
                    $("#card_paid5").hide();
                }
            });

            function roundToTwo(num) {
                return num.toFixed(2);
            }
        </script>
    @endpush

@endsection
