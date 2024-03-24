@extends('admin.layouts.master')
@section('title', 'Expense-list')

@section('content')

    <section class="content-header">
        <h1>
            Expense
            <small>Add Expense</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Expense</a></li>
            <li class="active">Add Expense</li>
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
                        <h3 class="box-title">Add Expense</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="" enctype="multipart/form-data">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="account_head">Account Head</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="account_head" id="account_head" class="form-control select2" style="width: 100%;" required="">
                                                <option value="">Select Account Head</option>
                                                                                                    <option value="8">Administrative </option>
                                                                                                    <option value="7">Projonmo</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_id">Employee</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="employee_id" id="employee_id" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Employee</option>
                                                                                                    <option value="2">Md.ashed hossin</option>
                                                                                                    <option value="1">Md.Hafizulla</option>
                                                                                                    <option value="3">Sakib Al Hasan</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="amount" id="amount" class="form-control" placeholder="0.00" autocomplete="off">
                                            <input type="hidden" name="creator" class="form-control" value="Software Solution Company" required="" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group" id="card_paid" style="display: none">
                                        <label for="bank_id3">Bank</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                            <select name="bank_id" id="bank_id" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Bank</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sub_head_id">Sub Head</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="sub_head_id" id="sub_head_id" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Sub Head</option>
                                                                                                    <option value="11">Dan</option>
                                                                                                    <option value="14">Moh</option>
                                                                                                    <option value="13">Office & Stationary Exp</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="purpose">Purpose</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="remarks" id="purpose" class="form-control" placeholder=" Purpose" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">File Upload</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="file" name="expense_file" id="file" class="form-control" title="File Upload" autocomplete="off">
                                            <div style="margin-top: 5px;" id="preview"></div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="card_paid2" style="display: none">
                                        <label for="bankPreviousAmount">Bank Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="purpose" id="bankPreviousAmount" class="form-control" placeholder=" 0.0" autocomplete="off" readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="account_head">S.Sub Head</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="scnd_head_id" id="scnd_head_id" class="form-control select2" style="width: 100%;">
                                                <option value="1">Select Second Sub Head</option>
                                                                                                    <option value="1">Cash </option>
                                                                                                    <option value="2">Bkash</option>
                                                                                                    <option value="3">T-Cash</option>
                                                                                                    <option value="4">Nagad</option>
                                                                                                    <option value="5">Rocket</option>
                                                                                                    <option value="6">Islami Bank Ltd A/C-20503910100037818</option>
                                                                                                    <option value="7">Islami Bank POS</option>
                                                                                                    <option value="8">City Bank POS</option>
                                                                                                    <option value="9">UCB Bank POS</option>
                                                                                                    <option value="10">DBBL POS</option>
                                                                                                    <option value="11">Accounts Receivable</option>
                                                                                                    <option value="12">Inventory Asset</option>
                                                                                                    <option value="13">Computer Equipment</option>
                                                                                                    <option value="14">Furniture and Decoration</option>
                                                                                                    <option value="15">Electrical Equipment</option>
                                                                                                    <option value="16">Accounts Payable</option>
                                                                                                    <option value="17">Supplier Payable</option>
                                                                                                    <option value="18">Shop Rent</option>
                                                                                                    <option value="19">Staff Salary</option>
                                                                                                    <option value="20">Staff Bonus</option>
                                                                                                    <option value="21">Electric Bill</option>
                                                                                                    <option value="22">Internet Bill</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker">Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="date" class="form-control pull-right" id="datepicker" autocomplete="off" required="">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <label for="cashAmount">Cash Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                            <input type="text" name="cashAmount" id="cashAmount" class="form-control" value="51210360" placeholder="0.00" autocomplete="off" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group" id="card_paid3" style="display: none">
                                        <label for="check_no">Check Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="chequeNum" id="check_no" class="form-control" placeholder=" Check Number" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="voucher_no">Voucher Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" name="voucher_no" id="voucher_no" class="form-control" value="90" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show">Payment Method</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="payment_method" id="show" class="form-control" onchange="change()" style="width: 100%;">
                                                <option value="0">Cash in Hand</option>
                                                <option value="1">Cheque Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <label for="status">Status</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="status" id="status" class="form-control select2" style="width: 100%;">
                                                <option value="1">Active</option>
                                                <option value="0">Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" id="card_paid5" style="display: none">
                                        <label for="datepicker2">check Approval Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="chuque_app_date" class="form-control pull-right" id="datepicker2" autocomplete="off" required="">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
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

        $(document).ready(function () {
            $('#account_head').change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'ajax-response',
                    data: {'account_head': id},
                    success: function (html) {
                        $('#sub_head_id').html(html);
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#sub_head_id').change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'ajax-response',
                    data: {'sub_head_id': id},
                    success: function (html) {
                        $('#scnd_head_id').html(html);
                    }
                });
            });
        });

        $(document).ready(function () {
            $('#bank_id').change(function () {
                var id = $(this).val();
                $.ajax({
                    type: 'POST',
                    url: 'ajax-response',
                    data: {'bank_id': id},
                    success: function (html) {
                        console.log(html);
                        $('#bankPreviousAmount').val(html);
                    }
                });
            });
        });
        ///###--Payment Calculation Function End--###
        $("#show").change(function () {
            if ($(this).val() == "1")
            {
                $('#bank_id').attr('required', 'required');

                $("#card_paid").show();
                $("#card_paid2").show();
                $("#card_paid3").show();
                $("#card_paid5").show();
            } else
            {
                $('#bank_id').attr('required', false);
                $("#card_paid").hide();
                $("#card_paid2").hide();
                $("#card_paid3").hide();
                $("#card_paid5").hide();
            }
        });
        /* image preview */
        $('#file').change(function () {
            var oFReader = new FileReader();
            oFReader.readAsDataURL(this.files[0]);
            console.log(this.files[0]);
            oFReader.onload = function (oFREvent) {
                $('#preview').html('<img src="' + oFREvent.target.result + '">');
            };
        });

    </script>
@endpush

@endsection
