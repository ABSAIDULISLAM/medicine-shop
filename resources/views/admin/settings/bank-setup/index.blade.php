
@extends('admin.layouts.master')
@section('title', 'bank-setup')
@section('content')

    <section class="content-header">
        <h1>
            Bank
            <small> Bank List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bank</a></li>
            <li class="active"> Bank List</li>
        </ol>
    </section>
    @includeIf('errors.error')
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Bank List</h3>
                        <div class="box-tools pull-right">
                            <button type="button" data-toggle="modal" data-target="#add" class="btn bg-navy btn-flat">Add New</button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th>SL</th>
                                        <th>Bank Name</th>
                                        <th>Opening Balance</th>
                                        <th>Deposit Balance</th>
                                        <th>Creation Date</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                @php
                                    $startSerial = ($data->currentPage() - 1) * $data->perPage() + 1;
                                @endphp
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td style="width: 10px">{{$startSerial++}}</td>
                                        <td class="text-left" >{{$item->bank_name}}</td>
                                        <td class="text-left" >{{$item->opening_balance}}</td>
                                        <td class="text-left" >{{$item->deposit_balance}}</td>
                                        <td class="text-left" >{{$item->creation_date}}</td>
                                        <td>
                                            <span class="label label-{{ $item->status == 1 ? 'success' : 'danger' }}"
                                                style="font-size: 14px;">{{ $item->status == 1 ? 'Active' : 'Inactive' }}</span>
                                        </td>
                                        <td class="text-center" style="width: 100px">
                                        <button
                                            onclick="editModal( '{{$item->id}}','{{$item->bank_name}}','{{$item->opening_balance}}','{{$item->deposit_balance}}' )"
                                            class="btn red-meadow" style="background-color: #006666">
                                            <i class="fa fa-pencil" style="color: #fff"></i>
                                        </button>
                                        <a href="{{ route('Settings.bank-setup.delete', Crypt::encrypt($item->id)) }}"
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


    {{-- Edit  --}}
    <div id="edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close"
                        data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Bank </h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('Settings.bank-setup.store')}}">
                        @csrf
                        <label>Bank Name</label>
                        <input type="hidden" name="id">
                        <input type="text" name="bank_name" class="form-control" placeholder="Bank Name" autocomplete="off"/>
                        <br />
                        <label>Opening Balance</label>
                        <input type="text" name="opening_balance" class="form-control" placeholder="Opening Balance" autocomplete="off"/>
                        <br />
                        <label>Deposit Balance</label>
                        <input type="text" name="deposit_balance" class="form-control" placeholder="Deposit Balance" autocomplete="off"/>
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
    <script>
        function editModal(id, name, ob, db, status ) {
            // alert(id);
            $('#edit').modal('show');
            $('#edit').find('input[name="id"]').val(id);
            $('#edit').find('input[name="bank_name"]').val(name);
            $('#edit').find('input[name="opening_balance"]').val(ob);
            $('#edit').find('input[name="deposit_balance"]').val(db);
            $('#edit').find('input[name="status"]').val(status);
        }
    </script>

<!-- /.content-wrapper -->
<div id="add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Bank</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('Settings.bank-setup.store')}}">
                    @csrf
                    <label>Bank Name</label>
                    <input type="text" name="bank_name" class="form-control" placeholder="Bank Name" autocomplete="off"/>
                    <br />
                    <label>Opening Balance</label>
                    <input type="text" name="opening_balance" class="form-control" value="0" placeholder="Opening Balance" autocomplete="off"/>
                    <br />
                    <label>Deposit Balance</label>
                    <input type="text" name="deposit_balance" class="form-control" value="0" placeholder="Deposit Balance" autocomplete="off"/>
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
