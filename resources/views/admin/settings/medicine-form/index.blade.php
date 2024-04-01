@extends('admin.layouts.master')
@section('title', 'medicine-form')
@section('content')

    <section class="content-header">
        <h1>
            Medicine Form
            <small> Medicine Form List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Medicine Form</a></li>
            <li class="active"> Medicine Form List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Medicine Form List</h3>
                        <div class="box-tools pull-right">
                            <button type="button" data-toggle="modal" data-target="#add" class="btn bg-navy btn-flat">Add
                                New</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th>SL</th>
                                        <th class="text-center">Medicine Form Name</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $startSerial = ($data->currentPage() - 1) * $data->perPage() + 1;
                                @endphp
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td style="width: 10px">{{$startSerial++}}</td>
                                        <td class="text-left" >{{$item->medicine_strength}}</td>
                                        <td>
                                            <span class="label label-{{ $item->status == 1 ? 'success' : 'danger' }}"
                                                style="font-size: 14px;">{{ $item->status == 1 ? 'Active' : 'Inactive' }}</span>
                                        </td>
                                        <td class="text-center" style="width: 100px">
                                        <button
                                            onclick="editModal('{{ $item->id }}', '{{ $item->medicine_strength }}','{{ $item->status }}' )"
                                            class="btn red-meadow" style="background-color: #006666">
                                            <i class="fa fa-pencil" style="color: #fff"></i>
                                        </button>
                                        <a href="{{ route('Settings.medicine-form.delete', Crypt::encrypt($item->id)) }}"
                                            onclick="return checkDelete();">
                                            <button class="btn red-meadow" style="background-color: red">
                                                <i class="fa fa-trash-o " style="color: #fff"></i>
                                            </button>
                                        </td>
                                    </tr>
                                    @empty
                                    @endforelse

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
    <!-- /.content -->

    {{-- edit --}}
    <div id="edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Medicine Form</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('Settings.medicine-form.update')}}">
                        @csrf
                        <label>Medicine Form Name</label>
                        <input type="text" name="medicine_strength" class="form-control"
                            />
                        <input type="hidden" name="id" class="form-control"
                             />
                        <br />
                        <label>Select status</label>
                        <select name="status" id="gender" class="form-control">
                            <option value="1"selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <br />
                        <input type="submit" name="edit_cat" value="Update"
                            class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>
    <script>
        function editModal(id, mname, status ) {
            // alert(id);
            $('#edit').modal('show');
            $('#edit').find('input[name="id"]').val(id);
            $('#edit').find('input[name="medicine_strength"]').val(mname);
            $('#edit').find('input[name="status"]').val(status);
        }
    </script>
    <!-- /.content-wrapper -->
    <div id="add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Medicine Form</h4>
                </div>
                @includeIf('errors.error')
                <div class="modal-body">
                    <form method="post" action="{{route('Settings.medicine-form.store')}}">
                        @csrf
                        <label>Medicine Form Name</label>
                        <input type="text" name="medicine_strength" class="form-control" placeholder="Generic Name" />
                        <br />
                        <label>Select status</label>
                        <select name="status" id="gender" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <br />
                        <input type="submit" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>


@endsection
