@extends('admin.layouts.master')

@section('title', 'Employee-designation')

@section('content')

    <section class="content-header">
        <h1>
            Monthly Salary
            <small> Monthly Salary</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Monthly Salary</a></li>
            <li class="active"> Monthly Salary</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Monthly Salary List</h3>
                        <div class="box-tools pull-right">
                            <button type="button" data-toggle="modal" data-target="#add" class="btn bg-navy btn-flat">Add
                                New</button>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="">
                            &nbsp;From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="2024-03-21">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-03-21">
                            &nbsp;<select name="employee_id" class="form-control select2" style="width: 200px;">
                                <option value="0">ALL</option>
                                <option value="1">Md.Hafizulla</option>
                                <option value="2">Md.ashed hossin</option>
                                <option value="3">Sakib Al Hasan</option>
                            </select>
                            <input type="submit" name="search_btn" value="Search">
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th>SL</th>
                                        <th>Employee Name</th>
                                        <th>Date</th>
                                        <th>Salary Amount</th>
                                        <th>Remakrs</th>
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
                    <h4 class="modal-title">Add Monthly Salary</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <div class="form-group">
                            <label for="employee_id">Employee Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select name="employee_id" id="employee_id" class="form-control select2"
                                    style="width: 100%;">
                                    <option value="">Select Employee</option>
                                    <option value="1">Md.Hafizulla</option>
                                    <option value="2">Md.ashed hossin</option>
                                    <option value="3">Sakib Al Hasan</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datepicker2">Date </label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="text" name="date" class="form-control pull-right" id="datepicker2"
                                    autocomplete="off">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="salary_amount">Salary Amount</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="amount" id="salary_amount" class="form-control"
                                    placeholder="0.00" autocomplete="off">
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="remarks">Remarks</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <input type="text" name="remarks" id="remarks" class="form-control"
                                    placeholder="Remarks" autocomplete="off">
                            </div>
                        </div>
                        <input type="submit" name="add_btn" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

@endsection
