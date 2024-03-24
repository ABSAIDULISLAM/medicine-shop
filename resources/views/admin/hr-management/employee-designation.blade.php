@extends('admin.layouts.master')
@section('title', 'Employee-designation')
@section('content')

    <section class="content-header">
        <h1>
            Designation
            <small> Designation</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Designation</a></li>
            <li class="active"> Designation</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Designation List</h3>
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
                                        <th>Designation</th>
                                        <th>Status</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td class="text-left">Manager</td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit1" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=1" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Designation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            value="Manager" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="1" />
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
                                    <tr>
                                        <td>2</td>
                                        <td class="text-left">Asst. Manager</td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit2" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=2" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit2" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Designation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            value="Asst. Manager" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="2" />
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
                                    <tr>
                                        <td>3</td>
                                        <td class="text-left">Sr. Sales Executive</td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit3" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=3" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit3" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Designation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            value="Sr. Sales Executive" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="3" />
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
                                    <tr>
                                        <td>4</td>
                                        <td class="text-left">Pharmacist</td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit4" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=4" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit4" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Designation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            value="Pharmacist" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="4" />
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
                                    <tr>
                                        <td>5</td>
                                        <td class="text-left">Sales Executive</td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit5" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=5" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit5" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Designation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            value="Sales Executive" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="5" />
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
                                    <tr>
                                        <td>6</td>
                                        <td class="text-left"> Shop Assistant</td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit6" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=6" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit6" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Designation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            value="	Shop Assistant" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="6" />
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
                                    <tr>
                                        <td>7</td>
                                        <td class="text-left">Delivery Executive</td>
                                        <td>

                                            <span class="label label-success" style="font-size: 14px;">Active</span>
                                        </td>
                                        <td class="text-center">
                                            <button data-toggle="modal" data-target="#edit7" class="btn red-meadow"
                                                style="background-color : #006666"><i class="fa fa-pencil"
                                                    style="color : #fff"></i></button>
                                            <a href="?name=delete&id=7" onclick=" return checkDelete();"><button
                                                    class="btn red-meadow" style="background-color : red"><i
                                                        class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                        </td>
                                    </tr>
                                    <div id="edit7" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close"
                                                        data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Designation</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Designation</label>
                                                        <input type="text" name="designation" class="form-control"
                                                            value="Delivery Executive" />
                                                        <input type="hidden" name="id" class="form-control"
                                                            value="7" />
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
                    <h4 class="modal-title">Add Designation</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <label>Designation</label>
                        <input type="text" name="designation" class="form-control" placeholder="Item Name" />
                        <br />
                        <label>Select status</label>
                        <select name="status" id="gender" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
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
