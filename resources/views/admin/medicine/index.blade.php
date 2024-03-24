@extends('admin.layouts.master')
@section('title', 'Medicine-list')
@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Medicine List
            <small> Medicine List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Medicine</a></li>
            <li class="active"> Medicine List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Medicine List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('Medicine.create')}}"><button type="button" class="btn bg-navy btn-flat">Add
                                    New</button></a>
                        </div>
                    </div>

                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th  style="width: 10px" class="text-center">SL</th>
                                        <th  style="width: 80px" class="text-center">Medi.Name</th>
                                        <th  style="width: 80px" class="text-center">Generic</th>
                                        <th  style="width: 120px" class="text-center">Company</th>
                                        <th  style="width: 120px" class="text-center">Medicine Form</th>
                                        <th  style="width: 150px" class="text-center">Strength</th>
                                        <th  style="width: 100px" class="text-right">Cost Price</th>
                                        <th  style="width: 80px" class="text-center">Sales Price</th>
                                        <th  style="width: 80px" class="text-center">MRP Price</th>
                                        <th  style="width: 80px" class="text-center">Current Stock</th>
                                        <th  style="width: 100px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>

                                    <tr>
                                        <td style="width: 10px">1</td>
                                        <td style="width: 80px" class="text-center">20-Mar-2024</td>
                                        <td style="width: 80px" class="text-center">20-Mar-2024</td>
                                        <td style="width: 80px" class="text-center">20-Mar-2024</td>
                                        <td style="width: 80px" class="text-center">20-Mar-2024</td>
                                        <td style="width: 120px">
                                            BIO-TRADE INTERNATIONAL </td>
                                        <td class="text-center" style="width: 80px"><a
                                                href="{{route('Purchase.windowPop.invoice')}}"
                                                onclick="return PopWindow(this.href, this.target);">17108847101</a>
                                        </td>

                                        <td style="width: 100px" class="text-center">749.60</td>
                                        <td style="width: 100px" class="text-center">0.00</td>
                                        <td style="width: 100px" class="text-center">749.60</td>
                                        <td class="text-center" style="width: 120px">
                                            <a href="{{route('Medicine.edit')}}"><button class="btn red-meadow"
                                                    style="background-color : #006666"><i class="fa fa-pencil"
                                                        style="color : #fff"></i></button></a>
                                            <a href="?name=delete&id=1073" onclick=" return checkDelete();"><button
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

@endsection
