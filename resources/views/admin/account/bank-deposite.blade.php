@extends('admin.layouts.master')
@section('title', 'Income-create')

@section('content')


    <section class="content-header">
        <h1>
            Bank Deposit
            <small> Bank Deposit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bank</a></li>
            <li class="active"> Bank Deposit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Bank Deposit</h3>
                        <div class="box-tools pull-right">
                            <button type="button" data-toggle="modal" data-target="#add" class="btn bg-navy btn-flat">Add
                                New</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th>SL</th>
                                        <th>Bank Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->


    <div id="add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Deposit</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <label>Bank Name</label>
                        <select name="bank_id" id="bank_id" class="form-control select2" style="width: 100%;">
                            <option value="">Select Bank</option>
                        </select>
                        <br />
                        <br />
                        <label>Date</label>
                        <input type="date" name="date" class="form-control" value="2024-03-21" autocomplete="off" />
                        <br />
                        <label>Deposit Amount</label>
                        <input type="text" name="deposit_amount" class="form-control" placeholder="Deposit Amount"
                            autocomplete="off" />
                        <br />
                        <label>Remakrs </label>
                        <input type="text" name="remarks" class="form-control" placeholder="Remakrs"
                            autocomplete="off" />
                        <br />
                        <input type="submit" name="add_deposit" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

@endsection
