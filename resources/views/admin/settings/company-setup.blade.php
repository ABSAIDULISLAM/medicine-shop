
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
<div id="add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Company Setup</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="" enctype="multipart/form-data">
                    <label>Company Name</label>
                    <input type="text" name="company_name" class="form-control" placeholder="Company Name" autocomplete="off" required=""/>
                    <br />
                    <label>Company Address</label>
                    <input type="text" name="company_address" class="form-control" placeholder="Company Address" autocomplete="off" required=""/>
                    <br />
                    <label>Contact Person</label>
                    <input type="text" name="contact_person" class="form-control" placeholder="Contact Person" autocomplete="off" required=""/>
                    <br />
                    <label>Contact Number</label>
                    <input type="text" name="contact_number" class="form-control" placeholder="Contact Number" autocomplete="off" required=""/>
                    <br />
                    <label>Website Link</label>
                    <input type="text" name="web_link" class="form-control" placeholder="Website Link" autocomplete="off" required=""/>
                    <br />
                    <label>Company Logo</label>
                    <input type="file" name="company_logo" class="form-control" title="Company Logo" required=""/>
                    <br />
                    <label>Company Setup Date</label>
                    <input type="date" name="company_setup_date" class="form-control" value="2024-03-21" autocomplete="off" required=""/>
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

@endsection
