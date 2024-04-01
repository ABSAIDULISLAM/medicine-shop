@extends('admin.layouts.master')
@section('title', 'Medicine-list')
@section('content')

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
                                    @php
                                        $startSerial = ($data->currentPage() - 1) * $data->perPage() + 1;
                                    @endphp
                                    @foreach ($data as $item)
                                    <tr>
                                        <td style="width: 10px">{{ $startSerial++ }}</td>
                                        <td style="width: 80px" class="text-center">{{ $item->medicine_name }}</td>
                                        <td style="width: 80px" class="text-center">{{ $item->generic->generic_name }}</td>
                                        <td style="width: 80px" class="text-center">{{ $item->company->company_name }}</td>
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
                                    @endforeach
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center mt-4">
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    @if ($data->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">&laquo; Previous</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $data->previousPageUrl() }}"
                                                rel="prev">&laquo; Previous</a>
                                        </li>
                                    @endif

                                    <!-- Pagination Elements -->
                                    @php
                                        $start = max($data->currentPage() - 2, 1);
                                        $end = min($start + 4, $data->lastPage());
                                    @endphp

                                    @if ($start > 1)
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $data->url(1) }}">1</a>
                                        </li>
                                        @if ($start > 2)
                                            <li class="page-item disabled">
                                                <span class="page-link">...</span>
                                            </li>
                                        @endif
                                    @endif

                                    @for ($i = $start; $i <= $end; $i++)
                                        <li class="page-item {{ $i == $data->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $data->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if ($end < $data->lastPage())
                                        @if ($end < $data->lastPage() - 1)
                                            <li class="page-item disabled">
                                                <span class="page-link">...</span>
                                            </li>
                                        @endif
                                        <li class="page-item">
                                            <a class="page-link"
                                                href="{{ $data->url($data->lastPage()) }}">{{ $data->lastPage() }}</a>
                                        </li>
                                    @endif

                                    <!-- Next Page Link -->
                                    @if ($data->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $data->nextPageUrl() }}" rel="next">Next
                                                &raquo;</a>
                                        </li>
                                    @else
                                        <li class="page-item disabled">
                                            <span class="page-link">Next &raquo;</span>
                                        </li>
                                    @endif
                                </ul>
                            </div>
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
