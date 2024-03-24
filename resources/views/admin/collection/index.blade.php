@extends('admin.layouts.master')

@section('title', 'collection-list')

@section('content')

    <section class="content-header">
        <h1>
            Collection List
            <small> Collection List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Collection</a></li>
            <li class="active"> Collection List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Collection</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('Collection.create')}}"><button type="button" class="btn bg-navy btn-flat">Add
                                    New</button></a>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="collection-list">
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="2024-03-21">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-03-21">
                            &nbsp;<select name="customer_id" id="customer_id" class="form-control select2"
                                style="width: 200px;">
                                <option value="0">ALL</option>
                                <option value="1213"></option>
                                <option value="1209">a</option>

                                <option value="1256">Zaman</option>
                            </select>
                            <input type="submit" name="search_btn" value="Search">
                        </form>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th class="text-center">SL</th>
                                        <th class="text-center">Company Name</th>
                                        <th class="text-center">Address</th>
                                        <th class="text-center">Payment Date</th>
                                        <th class="text-center">Money Receipt</th>
                                        <th class="text-center">Previous Due</th>
                                        <th class="text-center">Paid</th>
                                        <th class="text-center">Current Dues</th>
                                        <th class="text-center">Remarks</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="6">Total</th>
                                        <th>0.00</th>
                                        <th></th>
                                        <th></th>
                                        <th></th>
                                    </tr>
                                </tfoot>
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
