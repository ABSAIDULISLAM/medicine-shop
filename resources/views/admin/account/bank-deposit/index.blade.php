@extends('admin.layouts.master')
@section('title', 'Income-create')

@section('content')


    <section class="content-header">
        <h1>
            Bank Deposit
            <small> Bank Deposit</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bank</a></li>
            <li class="active"> Bank Deposit</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Bank Deposit</h3>
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
                                        <th>Bank Name</th>
                                        <th>Date</th>
                                        <th>Amount</th>
                                        <th>Remarks</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                    <tr>
                                        <td style="width: 10px">{{$loop->index+1}}</td>
                                        <td class="text-left" >{{$item->bank->bank_name}}</td>
                                        <td class="text-left" >{{$item->date}}</td>
                                        <td class="text-left" >{{$item->deposit_amount}}</td>
                                        <td class="text-left" >{{$item->remarks}}</td>
                                        <td class="text-center" style="width: 100px">
                                        <button
                                            onclick="editModal( '{{$item->id}}','{{$item->bank_id}}','{{$item->date}}','{{$item->deposit_amount}}','{{$item->remarks}}' )"
                                            class="btn red-meadow" style="background-color: #006666">
                                            <i class="fa fa-pencil" style="color: #fff"></i>
                                        </button>
                                        <a href="{{ route('Account.bank.deposit.delete', Crypt::encrypt($item->id)) }}"
                                            onclick="return checkDelete();">
                                            <button class="btn red-meadow" style="background-color: red">
                                                <i class="fa fa-trash-o" style="color: #fff"></i>
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


    <div id="add" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Deposit</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('Account.bank.deposit.store')}}">
                        @csrf
                        <label>Bank Name  <span style="color: red">*</span></label>
                        <select name="bank_id" id="bank_id" required class="form-control select2" style="width: 100%;">
                            <option value="">Select Bank</option>
                            @forelse ($bank as $item)
                            <option value="{{$item->id}}">{{$item->bank_name}}</option>
                            @empty
                            @endforelse
                        </select>
                        <br />
                        <br />
                        <label>Date <span style="color: red">*</span></label>
                        <input type="date" required name="date" class="form-control" value="{{date('Y-m-d')}}" autocomplete="off" />
                        <br />
                        <label>Deposit Amount <span style="color: red">*</span></label>
                        <input type="text" name="deposit_amount" value="0" class="form-control" placeholder="Deposit Amount"
                            autocomplete="off" />
                        <br />
                        <label>Remakrs </label>
                        <input type="text" name="remarks" class="form-control" placeholder="Remakrs"
                            autocomplete="off" />
                        <br />
                        <input type="submit" value="Insert" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

    <div id="edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Deposit</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="{{route('Account.bank.deposit.update')}}">
                        @csrf
                        <label>Bank Name  <span style="color: red">*</span></label>
                        <input type="hidden" name="id">
                        <select name="bank_id" id="bank_id" required class="form-control select2" style="width: 100%;">
                            <option value="">Select Bank</option>
                            @forelse ($bank as $item)
                            <option value="{{$item->id}}">{{$item->bank_name}}</option>
                            @empty
                            @endforelse
                        </select>
                        <br />
                        <br />
                        <label>Date <span style="color: red">*</span></label>
                        <input type="date" required name="date" class="form-control" value="{{date('Y-m-d')}}" autocomplete="off" />
                        <br />
                        <label>Deposit Amount <span style="color: red">*</span></label>
                        <input type="text" name="deposit_amount" value="0" class="form-control" placeholder="Deposit Amount"
                            autocomplete="off" />
                        <br />
                        <label>Remakrs </label>
                        <input type="text" name="remarks" class="form-control" placeholder="Remakrs"
                            autocomplete="off" />
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
        function editModal(id, bankId, date, depositAmount, remarks) {
            $('#edit').modal('show');
            $('#edit').find('input[name="id"]').val(id);
            $('#edit').find('select[name="bank_id"]').val(bankId).trigger('change');
            $('#edit').find('input[name="date"]').val(date);
            $('#edit').find('input[name="deposit_amount"]').val(depositAmount);
            $('#edit').find('input[name="remarks"]').val(remarks);
        }
        $(document).ready(function() {
            $('.select2').select2();
        });
    </script>
@endsection
