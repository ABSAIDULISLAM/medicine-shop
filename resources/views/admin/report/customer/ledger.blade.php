@extends('admin.layouts.master')
@section('title', 'customer-ledger')

@section('content')

    <section class="content-header">
        <h1>
            Customer Ledger
            <small>Customer Ledger</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Customer Ledger</a></li>
            <li class="active">Customer Ledger</li>
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
                        <h3 class="box-title">Customer Ledger</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    @includeIf('errors.error')
                    <!-- form start -->
                    <form method="get" action="{{route('Report.customer.ledger.statement')}}" target="_blank">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        @php
                                            $currentDate = Carbon\Carbon::now();
                                            $date = $currentDate->subDays(30)->format('Y-m-d');
                                        @endphp
                                        <label for="datepicker4">Date From</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" value="{{$date}}" required name="from_date" class="form-control pull-right"
                                                id="datepicker4" autocomplete="off">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datepicker2">Date To</label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="date" required value="{{ date('Y-m-d') }}" name="to_date"
                                                class="form-control pull-right" id="datepicker2" autocomplete="off">
                                        </div>
                                        <!-- /.input group -->
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="cus_id">Company Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                            <select name="customer_id" id="cus_id" class="form-control select2"
                                                style="width: 100%;" required>
                                                <option value="">Select Company</option>
                                                @forelse ($company as $item)
                                                <option value="{{$item->id}}">{{$item->company_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
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
