@extends('admin.layouts.master')

@section('title', 'Employee-list')

@section('content')

    <section class="content-header">
        <h1>
            Employee List
            <small> Employee List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee</a></li>
            <li class="active"> Employee List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Employee</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('HR.employee.create')}}"><button type="button" class="btn bg-navy btn-flat">Add New</button></a>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th class="text-center">SL</th>
                                        <th class="text-center">Employee Name</th>
                                        <th class="text-center">Designation</th>
                                        <th class="text-center">Permanent Address</th>
                                        <th class="text-center">Mobile Number</th>
                                        <th class="text-center">Joining Date</th>
                                        <th class="text-center">Customer Images</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td>3</td>
                                        <td><a href="{{route('HR.employee.statement')}}">Sakib Al Hasan</a></td>
                                        <td>
                                            Sales Executive </td>
                                        <td>khulna</td>
                                        <td>01717999990</td>
                                        <td>2022-07-19</td>
                                        <td class="text-center">

                                            <img src="assets/employee_images/1682303496.jpg" alt="Image" width="50px"
                                                height="50px" class='img-circle' />
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center" style="width: 120px">
                                            <a href="{{route('HR.employee.edit')}}"><button class="btn red-meadow"
                                                    style="background-color : #006666"><i class="fa fa-pencil"
                                                        style="color : #fff"></i></button></a>
                                            <a href="?name=delete&id=3" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
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


@endsection
