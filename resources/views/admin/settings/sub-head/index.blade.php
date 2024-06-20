@extends('admin.layouts.master')
@section('title', 'sub-head')
@section('content')

    <section class="content-header">
        <h1>
            Account
            <small> Sub Head List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sub Head</a></li>
            <li class="active"> Sub Head List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Sub Head List</h3>
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
                                        <th>Journal Name</th>
                                        <th>Account Head</th>
                                        <th>Sub Head</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    @if ($item->accounthead && $item->journal)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td class="text-left">{{$item->journal->name}}</td>
                                        <td class="text-left">{{$item->accounthead->head_name}}</td>
                                        <td>{{$item->sub_head}}</td>
                                        <td class="text-center">
                                            <button onclick="editModal('{{ $item->id }}', '{{ $item->accounthead->id }}', '{{ $item->journal->id }}', '{{ $item->sub_head }}', '{{ $item->second_sub_head }}')" class="btn red-meadow" style="background-color: #006666">
                                                <i class="fa fa-pencil" style="color: #fff"></i>
                                            </button>
                                            <a href="{{route('Settings.sub-head.delete',['id'=>Crypt::encrypt($item->id)])}}" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    @endif
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
    @includeIf('errors.error')
    {{-- edit  --}}
    <div id="edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Sub Head</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('Settings.sub-head.update')}}">
                        @csrf
                        <div class="form-group">
                            <label for="jornal_id">Journal Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select name="journal_id" id="journal_id" class="form-control select2"
                                    style="width: 100%;">
                                    <option disabled>Select Journal</option>
                                    @forelse ($journals as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="account_head">Account Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select name="account_head" id="account_head" class="form-control select2"
                                    style="width: 100%;">
                                    <option value="">Select Account Head</option>
                                    @forelse ($accountheads as $item)
                                        <option value="{{$item->id}}">{{$item->head_name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sub_head">Sub head</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="hidden" name="id" id="id">
                                <input type="text" name="sub_head" id="sub_head"
                                    class="form-control" placeholder="Sub head" autocomplete="off">
                            </div>
                        </div>
                        <input type="submit" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <script>
        function editModal(id, accountHeadId, journalId, subHead, secondSubHead) {
            $('#edit').modal('show');
            $('#edit').find('input[name="id"]').val(id);
            $('#edit').find('select[name="account_head"]').val(accountHeadId);
            $('#edit').find('select[name="sub_head_id"]').val(journalId);
            $('#edit').find('input[name="sub_head"]').val(secondSubHead);
        }
    </script>
    <!-- /.content-wrapper -->
    <div id="add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Sub Head</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('Settings.sub-head.store')}}">
                        @csrf
                        <div class="form-group">
                            <label for="jornal_id">Journal Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select name="journal_id" id="journal_id" class="form-control select2"
                                    style="width: 100%;">
                                    <option disabled>Select Journal</option>
                                    @forelse ($journals as $item)
                                        <option value="{{$item->id}}">{{$item->name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="account_head">Account Name</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                <select name="account_head" id="account_head" class="form-control select2"
                                    style="width: 100%;">
                                    <option value="">Select Account Head</option>
                                    @forelse ($accountheads as $item)
                                        <option value="{{$item->id}}">{{$item->head_name}}</option>
                                    @empty
                                    @endforelse
                                </select>
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="sub_head">Sub head</label>
                            <div class="input-group">
                                <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                <input type="text" name="sub_head" id="sub_head"
                                    class="form-control" placeholder="Sub head" autocomplete="off">
                            </div>
                        </div>
                        <input type="submit" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    {{-- @push('js')
        <script>
            $(document).ready(function() {
                $('#account_head').change(function() {
                    var id = $(this).val();
                    $.ajax({
                        type: 'POST',
                        url: 'ajax-response',
                        data: {
                            'account_head': id
                        },
                        success: function(html) {
                            $('#sub_head_id').html(html);
                        }
                    });
                });
            });
        </script>
    @endpush --}}


@endsection
