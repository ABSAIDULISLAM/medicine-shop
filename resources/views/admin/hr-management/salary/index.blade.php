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
    @includeIf('errors.error')
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
                                value="2024-06-03">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-06-03">
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
                                @forelse ($employeeSalary as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>{{$item->employee->employee_name}}</td>
                                        <td>{{$item->date}}</td>
                                        <td>{{$item->amount}}</td>
                                        <td>{{$item->remarks}}</td>
                                        <td class="text-center">
                                            <button
                                                onclick="editModal('{{ $item->id }}', '{{$item->employee_id}}','{{ $item->date }}','{{ $item->amount }}','{{ $item->remarks }}' )"
                                                class="btn red-meadow" style="background-color: #006666">
                                                <i class="fa fa-pencil" style="color: #fff"></i>
                                            </button>
                                            <a href="{{route('HR.employee.salary.delete', ['id'=>$item->id])}}" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                @empty

                                @endforelse
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
    </div>
    <!-- /.content-wrapper -->
    <div id="add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Monthly Salary</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('HR.employee.salary.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="employee_id">Employee Name <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select name="employee_id" id="employee_id" class="form-control select2"
                                    style="width: 100%;" require>
                                    <option value="">Select Employee</option>
                                    @forelse ($employee as $item)
                                    <option value="{{$item->id}}">{{$item->employee_name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datepicker2">Date <span class="text-danger">*</span></label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" require name="date" value="{{date('Y-m-d')}}" class="form-control pull-right" id="datepicker2"
                                    autocomplete="off">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="salary_amount">Salary Amount <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="number" name="amount" id="salary_amount" class="form-control"
                                    placeholder="0.00" autocomplete="off" require>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="remarks">Remarks <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <input type="text" name="remarks" id="remarks" class="form-control"
                                    placeholder="Remarks" autocomplete="off" required>
                            </div>
                        </div>
                        <input type="submit" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <div id="edit1" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Monthly Salary</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('HR.employee.salary.update')}}">
                        @csrf
                        <div class="form-group">
                            <label for="employee_id">Employee Name <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <input type="hidden" name="id">
                                <select name="employee_id" id="employee_id" class="form-control select2"
                                    style="width: 100%;" require>
                                    <option value="">Select Employee</option>
                                    @forelse ($employee as $item)
                                    <option value="{{$item->id}}">{{$item->employee_name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="datepicker2">Date <span class="text-danger">*</span></label>
                            <div class="input-group date">
                                <div class="input-group-addon">
                                    <i class="fa fa-calendar"></i>
                                </div>
                                <input type="date" require name="date" value="{{date('Y-m-d')}}" class="form-control pull-right" id="datepicker2"
                                    autocomplete="off">
                            </div>
                            <!-- /.input group -->
                        </div>
                        <div class="form-group">
                            <label for="salary_amount">Salary Amount <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="number" name="amount" id="salary_amount" class="form-control"
                                    placeholder="0.00" autocomplete="off" require>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="remarks">Remarks <span class="text-danger">*</span></label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                <input type="text" name="remarks" id="remarks" class="form-control"
                                    placeholder="Remarks" autocomplete="off" required>
                            </div>
                        </div>
                        <input type="submit" value="Update" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <script>
        function editModal(id, empid, date, amount, remark) {
            // alert(id);
            $('#edit1').modal('show');
            $('#edit1').find('input[name="id"]').val(id);
            $('#edit1').find('select[name="employee_id"]').val(empid).trigger('change');
            $('#edit1').find('input[name="date"]').val(date);
            $('#edit1').find('input[name="amount"]').val(amount);
            $('#edit1').find('input[name="remarks"]').val(remark);
        }
    </script>
@endsection
