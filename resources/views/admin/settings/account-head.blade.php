@extends('admin.layouts.master')
@section('title', 'Account-head')
@section('content')


    <section class="content-header">
        <h1>
            Account
            <small> Account Head List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Account Head</a></li>
            <li class="active"> Account Head List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Account Head List</h3>
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
                                        <th>Journal Name</th>
                                        <th>Head Name</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>1</td>
                                            <td class="text-left">Projonmo</td>
                                            <td>Dan</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit11" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=11" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit11" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Account Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" id="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7"selected>Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label>Account Head</label>
                                                        <input type="text" name="sub_head" class="form-control" value="Dan"/>
                                                        <input type="hidden" name="id" class="form-control" value="11"/>
                                                        <br />
                                                        <input type="submit" name="edit_cat" value="Update" class="btn btn-success pull-right" />
                                                    </form>
                                                </div>
                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                            <tr>
                                            <td>2</td>
                                            <td class="text-left"></td>
                                            <td>Moh</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit14" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=14" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit14" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Account Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" id="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label>Account Head</label>
                                                        <input type="text" name="sub_head" class="form-control" value="Moh"/>
                                                        <input type="hidden" name="id" class="form-control" value="14"/>
                                                        <br />
                                                        <input type="submit" name="edit_cat" value="Update" class="btn btn-success pull-right" />
                                                    </form>
                                                </div>
                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                                                            <tr>
                                            <td>3</td>
                                            <td class="text-left">Administrative </td>
                                            <td>Office & Stationary Exp</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit13" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=13" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit13" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Account Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" id="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8"selected>Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label>Account Head</label>
                                                        <input type="text" name="sub_head" class="form-control" value="Office & Stationary Exp"/>
                                                        <input type="hidden" name="id" class="form-control" value="13"/>
                                                        <br />
                                                        <input type="submit" name="edit_cat" value="Update" class="btn btn-success pull-right" />
                                                    </form>
                                                </div>
                                                <div class="modal-footer">

                                                </div>
                                            </div>
                                        </div>
                                    </div>

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
                <h4 class="modal-title">Add Account Head</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <div class="form-group">
                        <label for="account_head">Journal Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <select name="account_head" id="account_head" class="form-control select2" style="width: 100%;">
                                <option value="">Select Journal</option>
                                                                    <option value="8">Administrative </option>
                                                                    <option value="7">Projonmo</option>
                                                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="sub_head">Account Head</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="text" name="sub_head" id="sub_head" class="form-control" placeholder="Account Head" autocomplete="off">
                        </div>
                    </div>
                    <input type="submit" name="add_btn" value="Insert" class="btn btn-success pull-right" />
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

@endsection
