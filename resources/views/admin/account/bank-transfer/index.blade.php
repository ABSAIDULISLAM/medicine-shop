@extends('admin.layouts.master')
@section('title', 'Bank-transfer')

@section('content')

    <section class="content-header">
        <h1>
            Bank Transfer
            <small> Bank Transfer</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bank Transfer</a></li>
            <li class="active"> Bank Transfer</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Bank Transfer List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('Account.bank.transfer.create') }}"><button type="button"
                                    class="btn bg-navy btn-flat">Add New</button></a>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;display: none">
                        <form method="post" action="bill-list">
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="2024-03-21">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-03-21">
                            <select name="customer_id" id="customer_id" class="form-control select2" style="width: 200px;">
                                <option value="All">ALL</option>
                            </select>

                            <input type="submit" name="search_btn" value="Search">
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">

                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped table-hover">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th>SL</th>
                                        <th>Transfer Date</th>
                                        <th>Transfer Bank Name</th>
                                        <th>Saving Bank Name</th>
                                        <th>Transfer Amount</th>
                                        <th>Cheque Number</th>
                                        <th>Transfer Bank Amount</th>
                                        <th>Saving Bank Amount</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$item->transfer_date}}</td>
                                            <td>{{$item->transfer->bank_name}}</td>
                                            <td>{{$item->savings->bank_name}}</td>
                                            <td>{{$item->transfer_amount}}</td>
                                            <td>{{$item->cheque_number?? 'N/A'}}</td>
                                            <td>{{$item->transfer_bank_amount}}</td>
                                            <td>{{$item->saving_bank_amount}}</td>
                                            <td class="text-center">
                                                <a href="{{ route('Account.bank.transfer.delete', Crypt::encrypt($item->id)) }}"
                                                    onclick="return checkDelete();">
                                                    <button class="btn red-meadow btn-sm" style="background-color: red">
                                                        <i class="fa fa-trash-o" style="color: #fff"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
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
