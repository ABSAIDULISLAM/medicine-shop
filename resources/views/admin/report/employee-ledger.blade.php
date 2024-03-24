
@extends('admin.layouts.master')
@section('title', 'employee-ledger')

@section('content')

    <section class="content-header">
        <h1>
           Employee Ledger
            <small>Employee Ledger</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee Ledger</a></li>
            <li class="active">Employee Ledger</li>
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
                        <h3 class="box-title">Employee Ledger</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="employee-statement" target="_blank">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datepicker4">Date From</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="from_date" class="form-control pull-right" id="datepicker4" autocomplete="off">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datepicker2">Date To</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="to_date" class="form-control pull-right" id="datepicker2" autocomplete="off">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cus_id">Employee Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select name="employee_id" id="employee_id" class="form-control select2" style="width: 100%;">
                                                <option value="">Select Employee</option>
                                                                                                    <option value="2">Md.ashed hossin</option>
                                                                                                    <option value="1">Md.Hafizulla</option>
                                                                                                    <option value="3">Sakib Al Hasan</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" name="search_btn" class="btn btn-primary">Submit</button>
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


@endsection
