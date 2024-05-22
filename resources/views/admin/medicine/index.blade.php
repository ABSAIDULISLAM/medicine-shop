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
                    <div class="row mx-5" style="margin: 10px 10px 10px 10px;">
                        <div class="col-md-12 my-3">
                            <input type="text" class="form-control"  id="searchInput" placeholder="Search by ID, Name, Strength, ">
                        </div>
                    </div>
                    <!-- /.box-header -->

                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="datatable" class="table table-bordered table-striped">
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
                                    @forelse ($users as $item)
                                    <tr>
                                        <td style="width: 10px">{{ $loop->index+1 }}</td>
                                        <td style="width: 80px" class="text-center">{{ $item->medicine_name ?? ''}}</td>
                                        <td style="width: 80px" class="text-center">{{ $item->generic->generic_name ?? ''}}</td>
                                        <td style="width: 80px" class="text-center">{{ $item->company->company_name ?? ''}}</td>
                                        <td style="width: 80px" class="text-center">{{ $item->mediform->medicine_strength ?? '' }}</td>
                                        <td style="width: 120px">{{$item->medicine_strength ?? ''}}</td>
                                        <td class="text-center" style="width: 80px"><a
                                                href="{{route('Medicine.windowPop.invoice', ['id'=>$item->id])}}"
                                                onclick="return PopWindow(this.href, this.target);">{{$item->purchases_price ?? ''}}</a>
                                        </td>

                                        <td style="width: 100px" class="text-center">{{$item->sale_price ?? ''}}</td>
                                        <td style="width: 100px" class="text-center">{{$item->mrp_price ?? ''}}</td>
                                        <td style="width: 100px" class="text-center">{{$item->stock ?? ''}}</td>
                                        <td class="text-center" style="width: 120px">
                                            <a href="{{route('Medicine.edit', Crypt::encrypt($item->id))}}"><button class="btn red-meadow"
                                                    style="background-color : #006666"><i class="fa fa-pencil"
                                                        style="color : #fff"></i></button></a>
                                            <a href="{{route('Medicine.delete',Crypt::encrypt($item->id))}}" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    @empty
                                    <tr>
                                        <td colspan="11">No matching records found</td>
                                    </tr>
                                    @endforelse
                                </tbody>
                            </table>
                            <div class="d-flex justify-content-center text-right mt-4">
                                <ul class="pagination">
                                    <!-- Previous Page Link -->
                                    @if ($users->onFirstPage())
                                        <li class="page-item disabled">
                                            <span class="page-link">&laquo; Previous</span>
                                        </li>
                                    @else
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $users->previousPageUrl() }}" rel="prev">&laquo; Previous</a>
                                        </li>
                                    @endif

                                    <!-- Pagination Elements -->
                                    @php
                                        $start = max($users->currentPage() - 2, 1);
                                        $end = min($start + 4, $users->lastPage());
                                    @endphp

                                    @if($start > 1)
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $users->url(1) }}">1</a>
                                        </li>
                                        @if($start > 2)
                                            <li class="page-item disabled">
                                                <span class="page-link">...</span>
                                            </li>
                                        @endif
                                    @endif

                                    @for ($i = $start; $i <= $end; $i++)
                                        <li class="page-item {{ $i == $users->currentPage() ? 'active' : '' }}">
                                            <a class="page-link" href="{{ $users->url($i) }}">{{ $i }}</a>
                                        </li>
                                    @endfor

                                    @if($end < $users->lastPage())
                                        @if($end < $users->lastPage() - 1)
                                            <li class="page-item disabled">
                                                <span class="page-link">...</span>
                                            </li>
                                        @endif
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $users->url($users->lastPage()) }}">{{ $users->lastPage() }}</a>
                                        </li>
                                    @endif

                                    <!-- Next Page Link -->
                                    @if ($users->hasMorePages())
                                        <li class="page-item">
                                            <a class="page-link" href="{{ $users->nextPageUrl() }}" rel="next">Next &raquo;</a>
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
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>

@endsection

@push('js')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.4/jquery.min.js"></script>
<script>
    $(document).ready(function(){
        $('#searchInput').on('input', function(){
            var query = $(this).val();
            fetchFilteredData(query);
        });

        function fetchFilteredData(query) {
            $.ajax({
                url: "{{ route('Medicine.search') }}",
                method: 'GET',
                data: {
                    query: query
                },
                success: function(response){
                    $('#datatable').html(response.html);
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        }
    });
</script>
@endpush
