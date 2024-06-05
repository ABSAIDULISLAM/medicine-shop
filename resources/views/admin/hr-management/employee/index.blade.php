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
                                        <th class="text-center">Employee Image</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">ACTION</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td><a href="{{route('HR.employee.statement')}}">{{$item->employee_name}}</a></td>
                                        <td>{{optional($item->designation)->designation}}</td>
                                        <td>{{$item->permanent_address}}</td>
                                        <td>{{$item->mobile_number}}</td>
                                        <td>{{$item->joining_date}}</td>
                                        <td class="text-center">

                                            <img src="{{ asset($item->employee_images?: 'backend/assets/employee.jpg') }}" alt="Image" width="50px"
                                                height="50px" class='img-circle' />
                                        </td>
                                        <td class="text-center">
                                            <span class="label label-{{$item->status==1 ? 'success':'danger'}}" style="font-size: 14px;">{{$item->status==1 ? 'Active':'Deactive'}}</span>
                                        </td>
                                        <td class="text-center" style="width: 120px">
                                            <a href="{{route('HR.employee.edit', ['id'=> Crypt::encrypt($item->id) ]) }}"><button class="btn red-meadow"
                                                    style="background-color : #006666"><i class="fa fa-pencil"
                                                        style="color : #fff"></i></button></a>
                                            <a href="{{route('HR.employee.delete', ['id'=> Crypt::encrypt($item->id) ]) }}" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    @empty
                                        <tr>
                                            <td class="text-center" colspan="9">No Record Found</td>
                                        </tr>
                                    @endforelse

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
