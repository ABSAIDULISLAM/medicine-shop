@extends('admin.layouts.master')

@section('title', 'Sales-list')

@section('content')

    <section class="content-header">
        <h1>
            Sales List
            <small> Sales List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('Admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('Sales.index')}}">Sales List</a></li>
            <li class="active"> Sales List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Sales List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('Sales.create') }}"><button type="button" class="btn bg-navy btn-flat">Add
                                    New</button></a>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="get" action="{{route('Sales.index')}}">
                            @csrf
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="{{$from_date}}">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="{{$to_date}}">
                            &nbsp;<input style="height: 27px;margin-top: 2px;" type="text" name="invoice_number"
                                placeholder=" Invoice Number" value="{{$inv}}" />
                            <input type="submit" value="Search">
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="loadingSpinner" style="display: none;" class="text-center m-auto">
                            <img src="{{ asset('backend/assets/spinner.gif') }}" alt="Loading...">
                        </div>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th class="text-center">SL</th>
                                        <th class="text-left">Customer Name</th>
                                        <th class="text-left">Memo No</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-left">Total Amount</th>
                                        <th class="text-center">Cash Received</th>
                                        <th class="text-center">Due</th>
                                        <th class="text-center" style="width: 120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                        $totalDue = 0;
                                        $totalCash = 0;
                                    @endphp
                                    @forelse ($data as $item)
                                        @php
                                            $total += $item->total_amount;
                                            $totalCash += $item->cash_paid;
                                            $totalDue += $item->due_amount;
                                        @endphp
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$item->customer->company_name}}</td>
                                            <td>
                                                <a href="{{route('Sales.invoice.print', ['id' => Crypt::encrypt($item->id)])}}">
                                                    {{$item->invoice_number}}
                                                </a>
                                            </td>
                                            <td>{{$item->date}}</td>
                                            <td class="text-right">{{$item->total_amount}}</td>
                                            <td class="text-right">{{$item->cash_paid}}</td>
                                            <td class="text-right">{{$item->due_amount}}</td>
                                            <td>
                                                <a href="{{ route('Sales.invoice.print', ['id' => Crypt::encrypt($item->id)]) }}" title="Invoice Print" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-print" style="color: #fff"></i>
                                                </a>
                                                <a href="{{ route('Sales.edit', ['id' => Crypt::encrypt($item->id)]) }}" title="Edit" class="btn btn-success btn-sm">
                                                    <i class="fa fa-pencil" style="color: #fff"></i>
                                                </a>
                                                <a href="{{ route('Sales.delete', ['id' => Crypt::encrypt($item->id)]) }}" title="Delete" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete this item ? before delete this item think one more time again')">
                                                    <i class="fa fa-trash-o" style="color: #fff"></i>
                                                </a>
                                                <a href="{{ route('Sales.return.form', ['id' => Crypt::encrypt($item->id)]) }}" title="Sales Return" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-upload" style="color: #fff"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No Record Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4">Total</th>
                                        <th class="text-right">{{$total}}</th>
                                        <th class="text-right">{{$totalCash}}</th>
                                        <th class="text-right">{{$totalDue}}</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
                            </table>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
