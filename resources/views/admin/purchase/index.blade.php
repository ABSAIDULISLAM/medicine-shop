@extends('admin.layouts.master')
@section('title', 'Purchase-list')
@section('content')
    <section class="content-header">
        <h1>
            Purchases List
            <small> Purchases List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{ route('Admin.dashboard') }}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{ route('Purchase.index') }}"> Purchases</a></li>
            <li class="active"> Purchases List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Purchases List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('Purchase.create') }}"><button type="button" class="btn bg-navy btn-flat">Add
                                    New</button></a>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="get" action="{{ route('Purchase.index') }}">
                            @csrf
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="{{ $from_date }}">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="{{ $to_date }}">
                            &nbsp;
                            <select name="customer_id" id="supplier_id" class="form-control select2" style="width: 200PX;">
                                <option value="0">ALL</option>
                                @forelse (App\Models\Contact::where('contact_type', 2)->select('id', 'company_name')->get() as $item)
                                    <option value="{{ $item->id }}" {{ $item->id == $cusId ? 'selected' : '' }}>
                                        {{ $item->company_name }}</option>
                                @empty
                                @endforelse
                            </select>
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
                                        <th style="width: 80px" class="text-center">Supplier Name</th>
                                        <th style="width: 120px" class="text-center">Invoice Number</th>
                                        <th style="width: 150px" class="text-center">Total Amount</th>
                                        <th style="width: 100px" class="text-right">Payment</th>
                                        <th style="width: 80px" class="text-center">Dues</th>
                                        <th style="width: 100px" class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $totalAmount = 0;
                                        $payment = 0;
                                        $dues = 0;
                                    @endphp
                                    @forelse ($purchases as $index => $purchase)
                                        <tr>
                                            <td style="width: 10px">{{ $index + 1 }}</td>
                                            <td style="width: 80px" class="text-center">{{ $purchase->date }}</td>
                                            <td style="width: 120px">{{ $purchase->suplyer->company_name }}</td>
                                            <td class="text-center" style="width: 80px"><a
                                                    href="{{ route('Purchase.windowPop.invoice', ['invno' => $purchase->id]) }}"
                                                    onclick="return PopWindow(this.href, this.target);">{{ $purchase->invoice_number }}</a>
                                            </td>
                                            <td style="width: 100px" class="text-center">{{ $purchase->total_amount }}</td>
                                            <td style="width: 100px" class="text-center">{{ $purchase->payment }}</td>
                                            <td style="width: 100px" class="text-center">{{ $purchase->dues }}</td>
                                            <td class="text-center" style="width: 120px">
                                                <a
                                                    href="{{ route('Purchase.edit', ['id' => Crypt::encrypt($purchase->id)]) }}"><button
                                                        class="btn red-meadow" style="background-color: #006666"><i
                                                            class="fa fa-pencil" style="color: #fff"></i></button></a>
                                                <a href="{{ route('Purchase.delete', ['id' => Crypt::encrypt($purchase->id)]) }}"
                                                    onclick="return checkDelete();"><button class="btn red-meadow"
                                                        style="background-color: red"><i class="fa fa-trash-o"
                                                            style="color: #fff"></i></button></a>
                                            </td>
                                        </tr>
                                        @php
                                            $totalAmount += $purchase->total_amount;
                                            $payment += $purchase->payment;
                                            $dues += $purchase->dues;
                                        @endphp
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No data available</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4" style="width: 300px">Total</th>
                                        <th style="width: 100px" class="text-center">{{ $totalAmount }}</th>
                                        <th style="width: 100px" class="text-center">{{ $payment }}</th>
                                        <th style="width: 100px" class="text-center">{{ $dues }}</th>
                                        <th style="width: 120px"></th>
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
