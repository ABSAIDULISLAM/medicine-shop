@extends('admin.layouts.master')

@section('title', 'Sales-return-list')

@section('content')

    <section class="content-header">
        <h1>
            Sales Return List
            <small> Sales List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sales Return List</a></li>
            <li class="active"> Sales Return List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Sales Return List</h3>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="">
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="2024-03-21">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-03-21">
                            &nbsp;<select name="customer_id" id="customer_id" class="form-control select2"
                                style="width: 160px;" required="">
                                <option value="0">ALL</option>
                                
                                <option value="1256">Zaman</option>
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
                                        <th class="text-center">SL</th>
                                        <th class="text-left">Company Name</th>
                                        <th class="text-left">Invoice No</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-left">Total Amount</th>
                                        <th class="text-center">Cash Received</th>
                                        <th class="text-center">Due</th>
                                        <th class="text-center" style="width: 120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4">Total</th>
                                        <th class="text-right">0.00</th>
                                        <th class="text-right">0.00</th>
                                        <th class="text-right">0.00</th>
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
