@extends('admin.layouts.master')

@section('title', 'Employee-type')

@section('content')

    <section class="content-header">
        <h1>
            Employee Type
            <small> Employee Type</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee Type</a></li>
            <li class="active"> Employee Type</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Employee Type List</h3>
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
                                        <th>Employee Type</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-left"><a href="{{route('HR.employee.list')}}">Administration
                                                Department</a></td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>

                                            <span class="label label-info" style="font-size: 14px;">1</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit1" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=1" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Employee Type</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Employee Type</label>
                                                        <input type="text" name="employee_type" class="form-control"
                                                            value="Administration Department" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="1" />
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
                                                        <br />
                                                        <input type="submit" name="edit_cat" value="Update"
                                                            class="btn btn-success pull-right" />
                                                    </form>
                                                </div>
                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    

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

    <div id="add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Employee Type</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <label>Employee Type</label>
                        <input type="text" name="employee_type" class="form-control" placeholder="Employee Type" />
                        <br />
                        <label>Select status</label>
                        <select name="status" id="gender" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <br />
                        <input type="submit" name="add_btn" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


@endsection
