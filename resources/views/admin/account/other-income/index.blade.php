@extends('admin.layouts.master')
@section('title', 'Income-list')

@section('content')

    <!-- Content Header (Page header) -->
    <section class="content-header">
        <h1>
            Income List
            <small> Income List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('Admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('Account.other-income.list')}}"> Income</a></li>
            <li class="active"> Income List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Income List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{route('Account.other-income.create')}}"><button type="button" class="btn bg-navy btn-flat">Add New</button></a>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="get" action="{{route('Account.other-income.list')}}">
                            @csrf
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="{{$from_date}}">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="{{$to_date}}">
                            &nbsp;<select name="account_head" id="account_head" class="form-control select2"
                                style="width: 200PX;">
                                <option value="0">ALL</option>
                                @forelse ($accountheads as $item)
                                <option value="{{$item->id}}" {{$item->id==$accountHead?'selected':''}}>{{$item->head_name}} </option>
                                @empty
                                @endforelse
                            </select>
                            <input style="height: 27px;margin-top: 2px;" type="text" name="voucher_no"
                                placeholder="Voucher Number" value="{{$inv}}">

                            <input type="submit" value="Search">
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
                                    @forelse ($income ?? [] as $item)
                                    <tr>
                                        <td class="text-center">{{$loop->index+1}}</td>
                                        <td class="text-center">{{$item->date}}</td>
                                        <td class="text-center" style="width: 80px"><a href="{{ route('Account.expense.invoice', ['invno' => $item->id]) }}" onclick="return PopWindow(this.href, this.target);">{{$item->money_receipt}}</a></td>
                                        <td class="text-center">{{$item->accounthead->name ?? ''}}</td>
                                        <td class="text-center">{{$item->purpose}}</td>
                                        <td class="text-right">{{$item->amount}}</td>
                                        <td class="text-center"><span class="label label-{{$item->status==1?'success':'danger'}}">{{$item->status==1 ? 'Active':'deactive'}}</span></td>
                                        <td class="text-center" style="width: 120px">
                                            <a href="{{route('Account.other-income.edit', Crypt::encrypt($item->id))}}"><button class="btn red-meadow"
                                                    style="background-color : #1a1d1d"><i class="fa fa-pencil"
                                                        style="color : #fff"></i></button></a>
                                            <a href="{{route('Account.other-income.delete',Crypt::encrypt($item->id))}}" onclick=" return checkDelete();"><button
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

    <script>
        function PopWindow(url, win) {
                var ptr = window.open(url, win,
                    'width=850,height=500,top=100,left=250');
                return false;
            }
    </script>
@endsection
