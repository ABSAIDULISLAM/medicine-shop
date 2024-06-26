@extends('admin.layouts.master')
@section('title', 'Add-payment')
@section('content')
    <section class="content-header">
        <h1>
            Add Payment
            <small>Add Payment</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('Admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('Supliyer-payment.index')}}">Payment</a></li>
            <li class="active">Add Payment</li>
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
                        <h3 class="box-title">Add Payment</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('Supliyer-payment.store')}}" id="paymentForm">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <!-- Customer Selection -->
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cus_id">Supplier Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select required name="supplier_id" id="supplier_id" class="form-control select2" style="width: 100%;">
                                                <option value="" disabled selected>Select Supplier</option>
                                                @forelse ($supplier as $item)
                                                <option value="{{$item->id}}">{{$item->company_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <!-- Total Dues -->
                                    <div class="form-group">
                                        <label for="totalDuesAmount">Total Dues <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <input type="hidden" name="contact_number" id="contact">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="totalDues" requried id="totalDuesAmount" class="form-control" readonly="">
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
                                        <label for="address">Address <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input required type="text" name="address" id="address" class="form-control" placeholder="Address" readonly="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="datepicker">Date <span style="color: red">*</span></label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i></div>
                                            <input type="date" value="{{date('Y-m-d')}}" required name="date" class="form-control pull-right" id="datepicker" autocomplete="off">
                                        </div>
                                    </div>

                                    <!-- Today Paid -->
                                    <div class="form-group">
                                        <label for="paid">Today Paid <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" required name="paid" id="paid" onkeyup="sum();" class="form-control" autocomplete="off">
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
                                    @php
                                        $latesinvoice = App\Models\PaymentInfo::orderBy('id', 'desc')->first();
                                        $invoiceId = $latesinvoice ? intval($latesinvoice->money_reset) + 1 : 100001;
                                        $invoiceId = str_pad($invoiceId, 5, '0', STR_PAD_LEFT);
                                    @endphp
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="money_receipt">Money Receipt <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="money_reset" class="form-control" value="{{$invoiceId}}" required="">
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="show">Payment Method <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="payment_method" class="form-control" required id="show" onchange="change()" style="width: 100%;">
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
                                                <label for="discount">Discount </label>
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
                            <button type="submit" class="btn btn-primary">Submit</button>
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
                $('#supplier_id').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: '{{ route('Supliyer-payment.supplier.info') }}',
                        data: {
                            '_token': '{{ csrf_token() }}',
                            'supplier_id': id
                        },
                        success: function(response) {
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
                            $('#contact').val(response.data.contact_num);
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


            // $(document).ready(function() {
            //     $('#bank_id').change(function() {
            //         var id = $(this).val();
            //         $.ajax({
            //             type: 'POST',
            //             url: 'ajax-response',
            //             data: {
            //                 'bank_id': id
            //             },
            //             success: function(html) {
            //                 console.log(html);
            //                 $('#bankPreviousAmount').val(html);
            //             }
            //         });
            //     });
            // });
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

        <script>
            $(document).ready(function() {
                $('#paymentForm').on('submit', function(event) {
                    var totalDues = parseFloat($('#totalDuesAmount').val()) || 0;
                    var paid = parseFloat($('#paid').val()) || 0;

                    if (paid > totalDues) {
                        alert('The paid amount cannot exceed the total dues.');
                        event.preventDefault(); // Prevent the form from being submitted
                    }
                });

                $('#paid').on('keyup', function() {
                    var totalDues = parseFloat($('#totalDuesAmount').val()) || 0;
                    var paid = parseFloat($(this).val()) || 0;

                    if (paid > totalDues) {
                        $(this).get(0).setCustomValidity('The paid amount cannot gratter then total dues.');
                    } else {
                        $(this).get(0).setCustomValidity('');
                    }
                });
            });

        </script>
    @endpush


@endsection
