@extends('admin.layouts.master')
@section('title', 'Create-bank-transfer')

@section('content')

    <section class="content-header">
        <h1>
            Add Bank Transder
            <small>Add Bank Transder</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Collection</a></li>
            <li class="active">Add Bank Transder</li>
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
                        <h3 class="box-title">Add Bank Transder</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="bank_id1">Transfer Bank Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                            <select name="transfer_bank_id" id="tranfer_bank_id" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Bank</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="bank_id2">Saving Bank Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-bank"></i></span>
                                            <select name="saving_bank_id" id="saving_bank_id" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Bank</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="row">
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="address">Transfer Amount</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                                    <input type="text" name="transfer_amount"  class="form-control" placeholder="0.00">
                                                </div>
                                            </div>
                                         </div>
                                         <div class="col-md-6">
                                             <div class="form-group">
                                                <label for="address">Cheque Number</label>
                                                <div class="input-group">
                                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                                    <input type="text" name="cheque_number"  class="form-control" placeholder="12345">
                                                </div>
                                            </div>
                                         </div>
                                    </div>

                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="address">Transfer Bank Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="transfer_bank_amount" id="bankAmount" class="form-control" placeholder="0.00" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="address">Saving Bank Amount</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="saving_bank_amount" id="saving_bank_amount" class="form-control" placeholder="0.00" readonly="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker">Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="transfer_date" class="form-control pull-right" id="datepicker" autocomplete="off">
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
        $('#tranfer_bank_id').change(function () {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'ajax-response',
                data: {'tranfer_bank_id': id},
                success: function (html) {

                    $('#bankAmount').val(html);
                }
            });
        });
    });

    $(document).ready(function () {
        $('#saving_bank_id').change(function () {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'ajax-response',
                data: {'saving_bank_id': id},
                success: function (html) {

                    $('#saving_bank_amount').val(html);
                }
            });
        });
    });

</script>
@endpush
@endsection
