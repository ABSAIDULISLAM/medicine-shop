@extends('admin.layouts.master')

@section('title', 'Supliyer-list')

@section('content')

    <section class="content-header">
      <h1>
        Supplier
        <small> Supplier List</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Supplier</a></li>
        <li class="active"> Supplier List</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Supplier List</h3>
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
                                        <th>Company Name</th>
                                        <th>Contact Person</th>
                                        <th>Mobile Number</th>
                                        <th>Email Address</th>
                                        <th>Address</th>
                                        <th>Opening Balance</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($data as $item)
                                        <tr>
                                            <td>{{ $loop->index+1 }}</td>
                                            <td class="text-left">{{ $item->company_name }}</td>
                                            <td class="text-left">{{ $item->contact_person }}</td>
                                            <td class="text-left">{{ $item->contact_num }}</td>
                                            <td class="text-left">{{ $item->email_address }}</td>
                                            <td class="text-left">{{ $item->address }}</td>
                                            <td class="text-left">{{ $item->opening_balance }}</td>
                                            <td>
                                                <span class="label label-{{ $item->status == 1 ? 'success' : 'danger' }}"
                                                    style="font-size: 14px;">{{ $item->status == 1 ? 'Active' : 'Inactive' }}</span>
                                            </td>
                                            <td class="text-center d-flex">
                                                <button
                                                    onclick="editModal('{{ $item->id }}', '{{ $item->company_name }}','{{ $item->contact_person }}','{{ $item->contact_num }}','{{ $item->email_address }}','{{ $item->address }}','{{ $item->opening_balance }}','{{ $item->status }}' )"
                                                    class="btn red-meadow" style="background-color: #006666">
                                                    <i class="fa fa-pencil" style="color: #fff"></i>
                                                </button>
                                                <a href="{{ route('Customer.delete', Crypt::encrypt($item->id)) }}"
                                                    onclick="return checkDelete();">
                                                    <button class="btn red-meadow" style="background-color: red">
                                                        <i class="fa fa-trash-o " style="color: #fff"></i>
                                                    </button>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="9">No data available</td>
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
    </div>

    {{-- edit  --}}
    <div id="edit" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Edit Suppliyer</h4>
                </div>


                <div class="modal-body">
                    <form method="post" action="{{ route('Supliyer.update') }}" enctype="multipart/form-data">
                        @csrf
                        <label>Company Name</label>
                        <input type="hidden" name="id" id="id">
                        <input type="text" name="company_name" value="Zaman" class="form-control"
                            placeholder="Company Name" autocomplete="off" />
                        <input type="hidden" name="id" value="1256" class="form-control" placeholder="Company Name"
                            autocomplete="off" />
                        <br />
                        <label>Contact Person</label>
                        <input type="text" name="contact_person" value="" class="form-control"
                            placeholder="Contact Name" autocomplete="off" />
                        <br />
                        <label>Mobile Number</label>
                        <input type="text" name="contact_num" value="01727451135" class="form-control"
                            placeholder="Mobile Number" autocomplete="off" />
                        <br />
                        <label>Email Address</label>
                        <input type="text" name="email_address" value="" class="form-control"
                            placeholder="Email Address" />
                        <br />
                        <label>Address</label>
                        <input type="text" name="address" value="" class="form-control" placeholder="Address"
                            autocomplete="off" />
                        <br />
                        <label>Opening Balance</label>
                        <input type="text" name="opening_balance" value="0.00" class="form-control"
                            placeholder="Opening Balance" autocomplete="off" />
                        <br />
                        <label>Status</label>
                        <select name="status" class="form-control select2" style="width: 100%">
                            <option value="1" selected>Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <br />
                        <br />
                        <input type="submit" value="Update" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">
                </div>
            </div>
        </div>
    </div>

    <!-- /.content-wrapper -->
    <div id="add" class="modal fade">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header" style="background-color: #2E4D62;color: #fff">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Add Supplier</h4>
        </div>
        <div class="modal-body">
          <form method="post" action="{{route('Supliyer.store')}}" enctype="multipart/form-data">
            @csrf
            <label>Contact Type</label>
            <select name="contact_type" class="form-control select2" style="width: 100%">
              <option value="2">Supplier</option>
              <option value="3">Supplier/Customer</option>
            </select>
            <br />
            <br />
            <label>Company Name</label>
            <input type="text" name="company_name" class="form-control" placeholder="Company Name"
              autocomplete="off" />
            <input type="hidden" name="created_by" value="17" class="form-control" placeholder="Company Name"
              autocomplete="off" />
            <br />
            <label>Contact Person</label>
            <input type="text" name="contact_person" class="form-control" placeholder="Contact Name"
              autocomplete="off" />
            <br />
            <label>Mobile Number</label>
            <input type="text" name="contact_num" class="form-control" placeholder="Mobile Number"
              autocomplete="off" />
            <br />
            <label>Email Address</label>
            <input type="text" name="email_address" class="form-control" placeholder="Email Address" />
            <br />
            <label>Address</label>
            <input type="text" name="address" class="form-control" placeholder="Address" autocomplete="off" />
            <br />
            <label>Opening Balance</label>
            <input type="text" name="opening_balance" class="form-control" placeholder="Opening Balance"
              autocomplete="off" />
            <br />
            <label>Status</label>
            <select name="status" class="form-control select2" style="width: 100%">
              <option value="1">Active</option>
              <option value="0">Inactive</option>
            </select>
            <br />
            <br />
            <input type="submit" name="add_supplier" value="Insert" class="btn btn-success pull-right" />
          </form>
        </div>
        <div class="modal-footer">

        </div>
      </div>
    </div>

    <script>
        function editModal(id, cname,cp, cn,ea,address,ob,status){
            $('#edit').modal('show');
            $('#edit').find('input[name="id"]').val(id);
            $('#edit').find('input[name="company_name"]').val(cname);
            $('#edit').find('input[name="contact_person"]').val(cp);
            $('#edit').find('input[name="contact_num"]').val(cn);
            $('#edit').find('input[name="email_address"]').val(ea);
            $('#edit').find('input[name="address"]').val(address);
            $('#edit').find('input[name="opening_balance"]').val(ob);
            $('#edit').find('input[name="status"]').val(status);
        }
    </script>
    @endsection
