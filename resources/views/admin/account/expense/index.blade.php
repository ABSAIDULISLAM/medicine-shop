@extends('admin.layouts.master')
@section('title', 'Expense-list')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Expense List
            <small> Expense List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Expense</a></li>
            <li class="active"> Expense List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Expense List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('Account.expense.create')}}"><button type="button" class="btn bg-navy btn-flat">Add New</button></a>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="">
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="2024-03-21">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-03-21">
                            &nbsp;<select name="account_head" id="account_head" class="form-control select2"
                                style="width: 200PX;">
                                <option value="0">ALL</option>
                                <option value="8">Administrative </option>
                                <option value="7">Projonmo</option>
                            </select>
                            <input style="height: 27px;margin-top: 2px;" type="text" name="voucher_no"
                                placeholder="Voucher Number">
                            <input type="submit" name="search_btn" value="Search">
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th style="width: 10px" class="text-center">SL</th>
                                        <th style="width: 80px" class="text-center">Date</th>
                                        <th style="width: 80px" class="text-center">Voucher No</th>
                                        <th style="width: 120px" class="text-center">Account Head</th>
                                        <th style="width: 150px" class="text-center">Purpose</th>
                                        <th style="width: 100px" class="text-right">Amount</th>
                                        <th style="width: 80px" class="text-center">Status</th>
                                        <th style="width: 100px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                    @endphp
                                    @forelse ($expense as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->index+1}}</td>
                                        <td class="text-center">{{$item->date}}</td>
                                        <td class="text-center"> {{$item->money_receipt}}</td>
                                        <td class="text-center">{{$item->accounthead->head_name}}</td>
                                        <td class="text-center">{{$item->purpose}}</td>
                                        <td class="text-right">{{$item->amount}}</td>
                                        <td class="text-center">{{$item->status==1 ? 'Active':'deactive'}}</td>
                                        <td class="text-center" style="width: 120px">
                                            <a href="{{route('Medicine.edit', Crypt::encrypt($item->id))}}"><button class="btn red-meadow"
                                                    style="background-color : #006666"><i class="fa fa-pencil"
                                                        style="color : #fff"></i></button></a>
                                            <a href="{{route('Medicine.delete',Crypt::encrypt($item->id))}}" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    {{$total += $item->amount}}
                                    @empty
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="5" style="width: 440px">Total</th>
                                        <th style="width: 100px" class="text-right">{{$total}}</th>
                                        <th style="width: 80px"></th>
                                        <th style="width: 100px"></th>
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
