@extends('admin.layouts.master')
@section('title', 'Edit-employee')
@section('content')

    <section class="content-header">
        <h1>
            Employee
            <small>Edit Employee</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('Admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('HR.employee.list')}}">Employee</a></li>
            <li class="active">Edit Employee</li>
        </ol>
    </section>
    <!-- Main content -->
    @includeIf('errors.error')
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
                    <form method="POST" action="{{ route('HR.employee.update') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="employee_name">Employee Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <input type="hidden" name="id" value="{{$data->id}}">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" name="employee_name" id="employee_name"
                                                class="form-control" placeholder="Employee Name" autocomplete="off"
                                                required="" value="{{$data->employee_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_type">Employee Type <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                            <select name="employee_type" id="employee_type" class="form-control select2"
                                                style="width: 100%;" required>
                                                <option value="">Select Employee Type</option>
                                                @forelse ($employeetype as $item)
                                                <option value="{{$item->id}}" {{$data->employee_type==$item->id ? 'selected':''}}>{{$item->employee_type}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="designation_id">Designation <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-o"></i></span>
                                            <select name="designation_id" id="designation_id" class="form-control select2"
                                                style="width: 100%;" required>
                                                <option value=" ">Select Designations</option>
                                                @forelse ($degisnations as $item)
                                                <option value="{{$item->id}}"{{$data->designation_id==$item->id ? 'selected':''}}>{{$item->designation}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile_number">Mobile Number <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="number" name="mobile_number" id="mobile_number"
                                                class="form-control" placeholder="Mother's Name" autocomplete="off" required value="{{$data->mobile_number}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="email_address">Email Address <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="email" name="email_address" id="email_address"
                                                class="form-control" placeholder="Email Address" autocomplete="off" required value="{{$data->email_address}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="mother_name">Mother's Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user-circle"></i></span>
                                            <input type="text" name="mother_name" id="mother_name"
                                                class="form-control" placeholder="Mother's Name" autocomplete="off" required value="{{$data->mother_name}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="father_name">Father's Name <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <input type="text" name="father_name" id="father_name"
                                                class="form-control" placeholder="Father's Name" autocomplete="off" value="{{$data->father_name}}"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="employee_images">Images</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-camera"></i></span>
                                            <input type="file" name="employee_images" id="employee_images"
                                                class="form-control" title="employee_images" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="permanent_address">Permanent Address <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-book"></i></span>
                                            <input type="text" name="permanent_address" id="permanent_address"
                                                class="form-control" placeholder="Permanent Address" autocomplete="off" required value="{{$data->permanent_address}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="nid_number">NID Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                                            <input type="number" name="nid_number" id="nid_number" class="form-control"  value="{{$data->nid_number}}"
                                                placeholder="NID Number" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="basic_salary">Basic Salary <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="basic_salary" id="basic_salary"
                                                class="form-control" placeholder="0.00" autocomplete="off" value="{{$data->basic_salary}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="washing_cost">Washing Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="washing_cost" id="washing_cost"
                                                class="form-control" placeholder="0.00" autocomplete="off" value="{{$data->washing_cost}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="overtime_rate">OverTime Salary Rate</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="overtime_rate" id="overtime_rate"
                                                class="form-control" placeholder="0.00" autocomplete="off" value="{{$data->overtime_rate}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="deposit_amount">provident fund</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="deposit_amount" id="deposit_amount"
                                                class="form-control" placeholder="0.00" autocomplete="off">
                                            <input type="hidden" name="loan_amount" class="form-control" value="{{$data->deposit_amount}}"
                                                placeholder="0.00" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="datepicker3">Joining Date <span style="color: red">*</span></label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" name="joining_date" class="form-control pull-right"
                                                id="datepicker3" autocomplete="off"  value="{{$data->joining_date}}">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="form-group">
                                        <label for="house_rent">House Rent</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="house_rent" id="house_rent" class="form-control"
                                                placeholder="0.00" autocomplete="off" value="{{$data->house_rent}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="cng_cost">CNG Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="cng_cost" id="cng_cost" class="form-control"
                                                placeholder="0.00" autocomplete="off" value="{{$data->cng_cost}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="perDaySalery">Per Day Salary</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="perDaySalery" id="permanent_address"
                                                class="form-control" placeholder="0.00" autocomplete="off" value="{{$data->perDaySalery}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="mobile_cost">Medical Cost</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="mobile_cost" id="mobile_cost"
                                                class="form-control" placeholder="0.00" autocomplete="off" value="{{$data->mobile_cost}}">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="status">Status <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="status" class="form-control" style="width: 100%;"
                                                required="">
                                                <option value="1" {{$data->status==1? 'selected':''}}>Active</option>
                                                <option value="0"{{$data->status==0? 'selected':''}}>Inactive</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" name="btn" class="btn btn-primary">Update</button>
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

