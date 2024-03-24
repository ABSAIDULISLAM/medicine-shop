@extends('admin.layouts.master')
@section('title', 'Edit-employee')
@section('content')

    <section class="content-header">
        <h1>
            Employee
            <small>Edit Employee</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Employee</a></li>
            <li class="active">Edit Employee</li>
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
                        <h3 class="box-title">Edit Employee</h3>
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
                                        <label for="employee_name">Employee Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" name="employee_name" id="employee_name" class="form-control" value="Md.ashed hossin" placeholder="Employee Name" autocomplete="off" required="">
                                            <input type="hidden" name="id" class="form-control" value="2" placeholder="Employee Name" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_type">Employee Type</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                            <select name="employee_type" id="employee_type" class="form-control select2" style="width: 100%;">
                                                <option value=" ">Select Employee Type</option>
                                                                                                <option value="1"selected>Administration Department</option>
                                                                                                <option value="3">Sales Department</option>
                                                                                                <option value="4">Legal Admiration Department</option>
                                                                                                <option value="6">Shop Support Department </option>
                                                                                                <option value="7">Delivery Department </option>
                                                                                                <option value="8">Sales manager </option>
                                                                                                <option value="9"></option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="designation_id">Designations</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                            <select name="designation_id" id="designation_id" class="form-control select2" style="width: 100%;">
                                                <option value=" ">Select Designations</option>
                                                                                                    <option value="1">Manager</option>
                                                                                                    <option value="2">Asst. Manager</option>
                                                                                                    <option value="3">Sr. Sales Executive</option>
                                                                                                    <option value="4">Pharmacist</option>
                                                                                                    <option value="5">Sales Executive</option>
                                                                                                    <option value="6">	Shop Assistant</option>
                                                                                                    <option value="7">Delivery Executive</option>
                                                                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" name="mobile_number" id="mobile_number" class="form-control" value="" placeholder="Mother's Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_address">Email Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" name="email_address" id="email_address" class="form-control" value="" placeholder="Email Address" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="mother_name">Mother's Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                            <input type="text" name="mother_name" id="mobile_number" class="form-control" value="" placeholder="Mother's Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="father_name">Father's Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" name="father_name" id="father_name" class="form-control" value="manik" placeholder="Father's Name" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_images">Images</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                                            <input type="file" name="employee_images" id="employee_images" class="form-control" value="" title="employee_images" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="permanent_address">Permanent Address</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                            <input type="text" name="permanent_address" id="permanent_address" class="form-control" value="" placeholder="Permanent Address" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nid_number">NID Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="text" name="nid_number" id="nid_number" class="form-control" value="" placeholder="NID Number" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="basic_salary">Basic Salary</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="basic_salary" id="basic_salary" class="form-control" value="60000.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="washing_cost">Washing Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="washing_cost" id="washing_cost" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="overtime_rate">OverTime Salary Rate</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="overtime_rate" id="overtime_rate" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deposit_amount">provident fund</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="deposit_amount" id="deposit_amount" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                            <input type="hidden" name="loan_amount" id="loan_amount" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker3">Joining Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="joining_date" class="form-control pull-right" value="0000-00-00" autocomplete="off">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="house_rent">House Rent</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="house_rent" id="house_rent" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cng_cost">CNG Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="cng_cost" id="cng_cost" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="perDaySalery">Per Day Salary</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="perDaySalery" id="permanent_address" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile_cost">Medical Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="mobile_cost" id="mobile_cost" class="form-control" value="0.00" placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="status" class="form-control" style="width: 100%;" required="">
                                                <option value="1" selected>Active</option>
                                                <option value="0" >Inactive</option>
                                            </select>
                                        </div>
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


@endsection

