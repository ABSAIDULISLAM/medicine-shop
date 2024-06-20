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
            @includeIf('errors.error')
            <!-- left column -->
            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Expense</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="{{route('Account.expense.store')}}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="account_head">Account Head <span style="color: red"></span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="account_head" id="account_head" class="form-control select2 @error('account_head') is-invalid @enderror"
                                                style="width: 100%;">
                                                <option value="">Select Account Head</option>
                                                @forelse ($journal as $item)
                                                <option value="{{$item->id}}">{{$item->name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_id">Employee <span style="color: red"></span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="employee_id" id="employee_id" class="form-control select2 @error('employee_id') is-invalid @enderror"
                                                style="width: 100%;">
                                                    <option value="">Select Employee
                                                </option>@forelse ($employee as $item)
                                                    <option value="{{$item->id}}">{{$item->employee_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="amount">Amount <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="amount" id="amount" class="form-control @error('amount') is-invalid @enderror"
                                                placeholder="0.00" autocomplete="off" value="{{old('amount')}}">
                                            <input type="hidden" name="creator" class="form-control"
                                                value="{{auth()->user()->id}}" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group" id="card_paid" style="display: none">
                                        <label for="bank_id3">Bank</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                            <select name="bank_id" id="bank_id" class="form-control select2 @error('bank_id') is-invalid @enderror"
                                                style="width: 100%;">
                                                <option value="">Select Bank</option>
                                            @forelse ($bank as $item)
                                                <option value="{{$item->id}}">{{$item->bank_name}}</option>
                                            @empty
                                            @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="sub_head_id">Sub Head <span style="color: red"></span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="sub_head_id" id="sub_head_id" class="form-control select2 @error('sub_head_id') is-invalid @enderror"
                                                style="width: 100%;">
                                                <option selected disabled>Select Sub Head</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="purpose">Purpose <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="remarks" id="purpose" value="{{old('remarks')}}" class="form-control @error('remarks') is-invalid @enderror" value="{{old('remarks')}}"
                                                placeholder=" Purpose" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="file">File Upload</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="file" name="expense_file" id="file"
                                                class="form-control @error('expense_file') is-invalid @enderror" title="File Upload" autocomplete="off">
                                            <div style="margin-top: 5px;" id="preview"></div>
                                        </div>
                                    </div>
                                    <div class="form-group" id="card_paid2" style="display: none">
                                        <label for="bankPreviousAmount">Bank Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" id="bankPreviousAmount"
                                                class="form-control " placeholder=" 0.0" autocomplete="off"
                                                readonly="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="account_head">S.Sub Head <span style="color: red"></span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="scnd_head_id" id="scnd_head_id" class="form-control select2 @error('scnd_head_id') is-invalid @enderror"
                                                style="width: 100%;">
                                                <option disabled selected>Select Second Sub Head</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker">Date <span style="color: red">*</span></label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="date" class="form-control pull-right  @error('date') is-invalid @enderror"
                                                id="datepicker" autocomplete="off" required="" value="{{date('Y-m-d')}}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <label for="cashAmount">Cash Amount <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                            <input type="text" name="cashAmount" value="{{old('cashAmount')}}" id="cashAmount" class="form-control  @error('cashAmount') is-invalid @enderror"
                                               placeholder="0.00" autocomplete="off" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group" id="card_paid3" style="display: none">
                                        <label for="check_no">Check Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="chequeNum" value="{{old('chequeNum')}}" id="check_no" class="form-control @error('chequeNum') is-invalid @enderror"
                                                placeholder=" Check Number" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                @php
                                    $latesinvoice = App\Models\Income::orderBy('id', 'desc')->first();
                                    $invoiceId = $latesinvoice ? intval($latesinvoice->money_receipt) + 1 : 100001;
                                    $invoiceId = str_pad($invoiceId, 5, '0', STR_PAD_LEFT);
                                @endphp
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="voucher_no">Voucher Number <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" name="voucher_no" id="voucher_no" value="{{$invoiceId}}" class="form-control  @error('voucher_no') is-invalid @enderror"
                                                autocomplete="off" required >
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="show">Payment Method <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="payment_method" id="show" class="form-control @error('payment_method') is-invalid @enderror"
                                                onchange="change()" style="width: 100%;" required>
                                                <option value="0">Cash in Hand</option>
                                                <option value="1">Cheque Paid</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group" style="display: none">
                                        <label for="status">Status <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="status" id="status" class="form-control select2 @error('status') is-invalid @enderror"
                                                style="width: 100%;" required>
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
                                            <input type="date" name="chuque_app_date" class="form-control pull-right  @error('chuque_app_date') is-invalid @enderror"
                                                id="datepicker2" autocomplete="off" >
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
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
            $(document).ready(function() {
                $('#account_head').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        type: 'POST',
                        "_token": "{{ csrf_token() }}",
                        url: '{{route('Account.expense.accounthead')}}',
                        data: {
                            'account_head': id
                        },
                        success: function(html) {
                            $('#sub_head_id').html(html);
                        }
                    });
                });
            });

            $(document).ready(function() {
                $('#sub_head_id').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: '{{route('Account.expense.sub.head')}}',
                        data: {
                            'sub_head_id': id
                        },
                        success: function(html) {
                            $('#scnd_head_id').val('');
                            $('#scnd_head_id').html(html);
                        }
                    });
                });
            });

            $(document).ready(function() {
                $('#bank_id').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        type: 'post',
                        "_token": "{{ csrf_token() }}",
                        url: '{{route('Account.expense.bank.balance')}}',
                        data: {
                            'bank_id': id
                        },
                        success: function(data) {
                            console.log(data);
                            $('#bankPreviousAmount').val(data);
                        }
                    });
                });
            });
            ///###--Payment Calculation Function End--###
            $("#show").change(function() {
                if ($(this).val() == "1") {
                    // $('#bank_id').attr('required', 'required');

                    $("#card_paid").show();
                    $("#card_paid2").show();
                    $("#card_paid3").show();
                    $("#card_paid5").show();
                } else {
                    $('#bank_id').attr('required', false);
                    $("#card_paid").hide();
                    $("#card_paid2").hide();
                    $("#card_paid3").hide();
                    $("#card_paid5").hide();
                }
            });
            /* image preview */
            $('#file').change(function() {
                var oFReader = new FileReader();
                oFReader.readAsDataURL(this.files[0]);
                console.log(this.files[0]);
                oFReader.onload = function(oFREvent) {
                    $('#preview').html('<img src="' + oFREvent.target.result + '" height="50px" width="50px">');
                };
            });
        </script>
    @endpush

@endsection
