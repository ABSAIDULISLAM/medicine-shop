@extends('admin.layouts.master')

@section('title', 'stock-matching')

@section('content')

    <section class="content-header">
        <h1>
            Stock Matching
            <small> Stock Matching List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Stock Matching</a></li>
            <li class="active"> Stock Matching</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Stock Matching List</h3>
                        <div class="box-tools pull-right">

                            <a href="{{ route('Stock-matching.create') }}"><button type="button"
                                    class="btn bg-navy btn-flat">Add New</button></a>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="bill-list">
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="2024-03-21">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-03-21">
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
                                        <th>Date</th>
                                        <th>Invoice No</th>
                                        <th class="text-center">Remarks</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{$loop->index+1}}</td>
                                            <td>{{$item->date}}</td>
                                            <td>
                                                <a href="{{ route('Stock-matching.invoice.view', ['id' => $item->id]) }}" onclick="return PopWindow(this.href, this.target);">{{ $item->invoice_number }}</a>
                                            </td>
                                            <td class="text-center">{{$item->remarks}}</td>
                                            <td class="text-center">
                                                <a class="btn btn-sm btn-danger" href="{{ route('Stock-matching.delete', ['id' => Crypt::encrypt($item->id)]) }}" onclick="return confirm('Are Your sure to Delete this item ??');">
                                                    <i class="fa fa-trash-o"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                    <tr>
                                        <td colspan="5" class="text-center">No Record Found</td>
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
    <script>
        function PopWindow(url, win) {
                var ptr = window.open(url, win,
                    'width=850,height=500,top=100,left=250');
                return false;
            }
    </script>
@endsection
