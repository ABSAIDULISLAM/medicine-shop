
@extends('admin.layouts.master')
@section('title', 'company-setup')
@section('content')

    <section class="content-header">
        <h1>
            Company Setup
            <small> Company Setup List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Company Setup</a></li>
            <li class="active"> Company Setup List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Company Setup List</h3>
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
                                        <th>Company Logo</th>
                                        <th>Company Name</th>
                                        <th>Company Address</th>
                                        <th>Contact Person</th>
                                        <th>Contact Number</th>
                                        <th>Web Address</th>
                                        <th>Setup Date</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @forelse ($datas as $item)
                                    <tr>
                                        <td>{{$loop->index+1}}</td>
                                        <td>
                                            <img src="{{asset($item->company_logo)}}" alt="company logo" height="40px" width="30px">
                                        </td>
                                        <td>{{$item->company_name}}</td>
                                        <td>{{$item->company_address}}</td>
                                        <td>{{$item->contact_person}}</td>
                                        <td>{{$item->contact_number}}</td>
                                        <td><a target="_blank" href="{{$item->web_link}}">{{$item->web_link}}   </a></td>
                                        <td>{{$item->company_setup_date}}</td>
                                        <td class="text-center" style="width: 100px">
                                            <button
                                                onclick="editModal('{{ $item->id }}', '{{ $item->company_name }}','{{ $item->company_address }}','{{ $item->contact_person }}','{{ $item->contact_number }}','{{ $item->web_link }}','{{ $item->company_setup_date }}' )"
                                                class="btn red-meadow" style="background-color: #006666">
                                                <i class="fa fa-pencil" style="color: #fff"></i>
                                            </button>
                                            <a href="{{ route('Settings.company-setup.delete', Crypt::encrypt($item->id)) }}"
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

<!-- /.content-wrapper -->
    @include('errors.error')
<div id="add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Company Setup</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('Settings.company-setup.store')}}" enctype="multipart/form-data">
                    @csrf
                    <label>Company Name <span class="text-danger">*</span></label>
                    <input type="text" name="company_name" class="form-control" placeholder="Company Name" autocomplete="off" required=""/>
                    <br />
                    <label>Company Address <span class="text-danger">*</span></label>
                    <input type="text" name="company_address" class="form-control" placeholder="Company Address" autocomplete="off" required=""/>
                    <br />
                    <label>Contact Person <span class="text-danger">*</span></label>
                    <input type="text" name="contact_person" class="form-control" placeholder="Contact Person" autocomplete="off" required=""/>
                    <br />
                    <label>Contact Number <span class="text-danger">*</span></label>
                    <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" autocomplete="off" required=""/>
                    <br />
                    <label>Website Link <span class="text-danger">*</span></label>
                    <input type="text" name="web_link" class="form-control" placeholder="Website Link" autocomplete="off" required=""/>
                    <br />
                    <label>Company Logo</label>
                    <input type="file" name="company_logo" class="form-control" title="Company Logo" />
                    <br />
                    <label>Company Setup Date <span class="text-danger">*</span></label>
                    <input type="date" name="company_setup_date" class="form-control" value="{{date('Y-m-d')}}" autocomplete="off" required=""/>
                    <br />
                    <br />
                    <input type="submit" name="add_btn" value="Insert" class="btn btn-success pull-right" />
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>
{{-- edit modal  --}}
<div id="edit" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Edit Company Setup</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="{{route('Settings.company-setup.update')}}" enctype="multipart/form-data">
                    @csrf
                    <label>Company Name <span class="text-danger">*</span></label>
                    <input type="hidden" id="id" name="id">
                    <input type="text" name="company_name" class="form-control" placeholder="Company Name" autocomplete="off" required=""/>
                    <br />
                    <label>Company Address <span class="text-danger">*</span></label>
                    <input type="text" name="company_address" class="form-control" placeholder="Company Address" autocomplete="off" required=""/>
                    <br />
                    <label>Contact Person <span class="text-danger">*</span></label>
                    <input type="text" name="contact_person" class="form-control" placeholder="Contact Person" autocomplete="off" required=""/>
                    <br />
                    <label>Contact Number <span class="text-danger">*</span></label>
                    <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" autocomplete="off" required=""/>
                    <br />
                    <label>Website Link <span class="text-danger">*</span></label>
                    <input type="text" name="web_link" class="form-control" placeholder="Website Link" autocomplete="off" required=""/>
                    <br />
                    <label>Company Logo</label>
                    <input type="file" name="company_logo" class="form-control" title="Company Logo"/>
                    <br />
                    <label>Company Setup Date <span class="text-danger">*</span></label>
                    <input type="date" name="company_setup_date" class="form-control"  autocomplete="off" required=""/>
                    <br />
                    <br />
                    <input type="submit" name="add_btn" value="Update" class="btn btn-success pull-right" />
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<script>
    function editModal(id, cname,address,cperson,cnumebr,link,date ) {
        $('#edit').modal('show');
        $('#edit').find('input[name="id"]').val(id);
        $('#edit').find('input[name="company_name"]').val(cname);
        $('#edit').find('input[name="company_address"]').val(address);
        $('#edit').find('input[name="contact_person"]').val(cperson);
        $('#edit').find('input[name="contact_number"]').val(cnumebr);
        $('#edit').find('input[name="web_link"]').val(link);
        $('#edit').find('input[name="company_setup_date"]').val(date);
    }
</script>


@endsection
