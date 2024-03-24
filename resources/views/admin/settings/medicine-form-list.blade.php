@extends('admin.layouts.master')
@section('title', 'settings-generic-list')
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
                                        <th class="text-center">Medicine Form Name</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td style="width: 10px">1</td>
                                            <td class="text-left" style="width: 300px">Tablets</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit2" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=2" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit2" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Tablets"/>
                                                        <input type="hidden" name="id" class="form-control" value="2"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">2</td>
                                            <td class="text-left" style="width: 300px">Capsule</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit3" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=3" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit3" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Capsule"/>
                                                        <input type="hidden" name="id" class="form-control" value="3"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">3</td>
                                            <td class="text-left" style="width: 300px">Syrup</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit4" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=4" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit4" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Syrup"/>
                                                        <input type="hidden" name="id" class="form-control" value="4"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">4</td>
                                            <td class="text-left" style="width: 300px">Sachet</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit5" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=5" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit5" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Sachet"/>
                                                        <input type="hidden" name="id" class="form-control" value="5"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">5</td>
                                            <td class="text-left" style="width: 300px"> Drops</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit6" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=6" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit6" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value=" Drops"/>
                                                        <input type="hidden" name="id" class="form-control" value="6"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">6</td>
                                            <td class="text-left" style="width: 300px">Cream</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit7" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=7" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit7" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Cream"/>
                                                        <input type="hidden" name="id" class="form-control" value="7"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">7</td>
                                            <td class="text-left" style="width: 300px">Ointment</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit8" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=8" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit8" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Ointment"/>
                                                        <input type="hidden" name="id" class="form-control" value="8"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">8</td>
                                            <td class="text-left" style="width: 300px">Injection</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit9" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=9" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit9" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Injection"/>
                                                        <input type="hidden" name="id" class="form-control" value="9"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">9</td>
                                            <td class="text-left" style="width: 300px">Strips</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit10" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=10" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit10" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Strips"/>
                                                        <input type="hidden" name="id" class="form-control" value="10"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">10</td>
                                            <td class="text-left" style="width: 300px">Infusion</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit11" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=11" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit11" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Infusion"/>
                                                        <input type="hidden" name="id" class="form-control" value="11"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">11</td>
                                            <td class="text-left" style="width: 300px">Other</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit12" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=12" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit12" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Other"/>
                                                        <input type="hidden" name="id" class="form-control" value="12"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">12</td>
                                            <td class="text-left" style="width: 300px">Capsules</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit13" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=13" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit13" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Capsules"/>
                                                        <input type="hidden" name="id" class="form-control" value="13"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">13</td>
                                            <td class="text-left" style="width: 300px">Nebuliser Solution</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit14" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=14" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit14" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Nebuliser Solution"/>
                                                        <input type="hidden" name="id" class="form-control" value="14"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">14</td>
                                            <td class="text-left" style="width: 300px">Oral Solution</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit15" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=15" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit15" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Oral Solution"/>
                                                        <input type="hidden" name="id" class="form-control" value="15"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">15</td>
                                            <td class="text-left" style="width: 300px">Orang </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit16" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=16" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit16" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Orang "/>
                                                        <input type="hidden" name="id" class="form-control" value="16"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">16</td>
                                            <td class="text-left" style="width: 300px">Unilever Food Solutions</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit17" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=17" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit17" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Unilever Food Solutions"/>
                                                        <input type="hidden" name="id" class="form-control" value="17"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">17</td>
                                            <td class="text-left" style="width: 300px">Glucose </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit18" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=18" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit18" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Glucose "/>
                                                        <input type="hidden" name="id" class="form-control" value="18"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">18</td>
                                            <td class="text-left" style="width: 300px">Hair Removal</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit19" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=19" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit19" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Hair Removal"/>
                                                        <input type="hidden" name="id" class="form-control" value="19"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">19</td>
                                            <td class="text-left" style="width: 300px">Body Milk</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit20" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=20" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit20" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Body Milk"/>
                                                        <input type="hidden" name="id" class="form-control" value="20"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">20</td>
                                            <td class="text-left" style="width: 300px">GREEN TEA & WHITE LILY</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit21" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=21" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit21" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="GREEN TEA & WHITE LILY"/>
                                                        <input type="hidden" name="id" class="form-control" value="21"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">21</td>
                                            <td class="text-left" style="width: 300px">Pitachio cream & magnolia </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit22" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=22" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit22" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pitachio cream & magnolia "/>
                                                        <input type="hidden" name="id" class="form-control" value="22"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">22</td>
                                            <td class="text-left" style="width: 300px">shower gell</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit23" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=23" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit23" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="shower gell"/>
                                                        <input type="hidden" name="id" class="form-control" value="23"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">23</td>
                                            <td class="text-left" style="width: 300px">hair & body baby bath</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit24" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=24" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit24" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="hair & body baby bath"/>
                                                        <input type="hidden" name="id" class="form-control" value="24"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">24</td>
                                            <td class="text-left" style="width: 300px">baby shampoo</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit25" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=25" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit25" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="baby shampoo"/>
                                                        <input type="hidden" name="id" class="form-control" value="25"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">25</td>
                                            <td class="text-left" style="width: 300px">Herbal cooling oil</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit26" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=26" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit26" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Herbal cooling oil"/>
                                                        <input type="hidden" name="id" class="form-control" value="26"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">26</td>
                                            <td class="text-left" style="width: 300px">Olive Oil</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit27" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=27" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit27" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Olive Oil"/>
                                                        <input type="hidden" name="id" class="form-control" value="27"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">27</td>
                                            <td class="text-left" style="width: 300px">AYU</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit28" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=28" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit28" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="AYU"/>
                                                        <input type="hidden" name="id" class="form-control" value="28"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">28</td>
                                            <td class="text-left" style="width: 300px">Ayurvdic Oil</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit29" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=29" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit29" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Ayurvdic Oil"/>
                                                        <input type="hidden" name="id" class="form-control" value="29"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">29</td>
                                            <td class="text-left" style="width: 300px">Acacia Honey</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit30" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=30" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit30" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Acacia Honey"/>
                                                        <input type="hidden" name="id" class="form-control" value="30"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">30</td>
                                            <td class="text-left" style="width: 300px">Honey</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit31" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=31" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit31" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Honey"/>
                                                        <input type="hidden" name="id" class="form-control" value="31"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">31</td>
                                            <td class="text-left" style="width: 300px">OPTIPRO</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit32" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=32" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit32" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="OPTIPRO"/>
                                                        <input type="hidden" name="id" class="form-control" value="32"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">32</td>
                                            <td class="text-left" style="width: 300px">Tooth Past</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit33" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=33" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit33" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Tooth Past"/>
                                                        <input type="hidden" name="id" class="form-control" value="33"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">33</td>
                                            <td class="text-left" style="width: 300px">RAPID RELIEF</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit34" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=34" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit34" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="RAPID RELIEF"/>
                                                        <input type="hidden" name="id" class="form-control" value="34"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">34</td>
                                            <td class="text-left" style="width: 300px">Total Care</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit35" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=35" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit35" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Total Care"/>
                                                        <input type="hidden" name="id" class="form-control" value="35"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">35</td>
                                            <td class="text-left" style="width: 300px">CAVITY FIGHTER</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit36" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=36" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit36" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="CAVITY FIGHTER"/>
                                                        <input type="hidden" name="id" class="form-control" value="36"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">36</td>
                                            <td class="text-left" style="width: 300px">Mothers Smile</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit37" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=37" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit37" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Mothers Smile"/>
                                                        <input type="hidden" name="id" class="form-control" value="37"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">37</td>
                                            <td class="text-left" style="width: 300px">BABY MILK</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit38" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=38" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit38" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="BABY MILK"/>
                                                        <input type="hidden" name="id" class="form-control" value="38"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">38</td>
                                            <td class="text-left" style="width: 300px">Cerealc </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit39" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=39" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit39" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Cerealc "/>
                                                        <input type="hidden" name="id" class="form-control" value="39"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">39</td>
                                            <td class="text-left" style="width: 300px">INFANT CERELAS</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit40" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=40" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit40" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="INFANT CERELAS"/>
                                                        <input type="hidden" name="id" class="form-control" value="40"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">40</td>
                                            <td class="text-left" style="width: 300px">During  The General Diarrhea For Feedig</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit41" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=41" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit41" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="During  The General Diarrhea For Feedig"/>
                                                        <input type="hidden" name="id" class="form-control" value="41"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">41</td>
                                            <td class="text-left" style="width: 300px">Baby Toothpaste</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit42" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=42" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit42" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Baby Toothpaste"/>
                                                        <input type="hidden" name="id" class="form-control" value="42"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">42</td>
                                            <td class="text-left" style="width: 300px">Toothbrush</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit43" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=43" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit43" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Toothbrush"/>
                                                        <input type="hidden" name="id" class="form-control" value="43"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">43</td>
                                            <td class="text-left" style="width: 300px">BABY FOOD</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit44" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=44" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit44" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="BABY FOOD"/>
                                                        <input type="hidden" name="id" class="form-control" value="44"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">44</td>
                                            <td class="text-left" style="width: 300px">MILK POWDER</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit45" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=45" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit45" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="MILK POWDER"/>
                                                        <input type="hidden" name="id" class="form-control" value="45"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">45</td>
                                            <td class="text-left" style="width: 300px">Diapant </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit46" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=46" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit46" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Diapant "/>
                                                        <input type="hidden" name="id" class="form-control" value="46"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">46</td>
                                            <td class="text-left" style="width: 300px">Diapant M 7-12Kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit47" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=47" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit47" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Diapant M 7-12Kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="47"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">47</td>
                                            <td class="text-left" style="width: 300px">Diapant S 4-8kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit48" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=48" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit48" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Diapant S 4-8kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="48"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">48</td>
                                            <td class="text-left" style="width: 300px">Diapant XXL 14-25kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit49" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=49" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit49" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Diapant XXL 14-25kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="49"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">49</td>
                                            <td class="text-left" style="width: 300px">Diapant L 9-14kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit50" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=50" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit50" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Diapant L 9-14kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="50"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">50</td>
                                            <td class="text-left" style="width: 300px">Dipant XL 12-17kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit51" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=51" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit51" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Dipant XL 12-17kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="51"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">51</td>
                                            <td class="text-left" style="width: 300px">Diapant  XL 12-17kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit52" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=52" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit52" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Diapant  XL 12-17kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="52"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">52</td>
                                            <td class="text-left" style="width: 300px">HAND TOWEL TISU</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit53" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=53" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit53" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="HAND TOWEL TISU"/>
                                                        <input type="hidden" name="id" class="form-control" value="53"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">53</td>
                                            <td class="text-left" style="width: 300px">Super Star </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit54" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=54" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit54" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Super Star "/>
                                                        <input type="hidden" name="id" class="form-control" value="54"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">54</td>
                                            <td class="text-left" style="width: 300px">Polo </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit55" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=55" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit55" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Polo "/>
                                                        <input type="hidden" name="id" class="form-control" value="55"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">55</td>
                                            <td class="text-left" style="width: 300px">Dayper</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit56" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=56" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit56" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Dayper"/>
                                                        <input type="hidden" name="id" class="form-control" value="56"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">56</td>
                                            <td class="text-left" style="width: 300px">Adeal Dayper </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit57" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=57" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit57" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Adeal Dayper "/>
                                                        <input type="hidden" name="id" class="form-control" value="57"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">57</td>
                                            <td class="text-left" style="width: 300px">Chips </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit58" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=58" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit58" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Chips "/>
                                                        <input type="hidden" name="id" class="form-control" value="58"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">58</td>
                                            <td class="text-left" style="width: 300px">Facial Tissue</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit59" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=59" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit59" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Facial Tissue"/>
                                                        <input type="hidden" name="id" class="form-control" value="59"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">59</td>
                                            <td class="text-left" style="width: 300px">Dayper S 4-8kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit60" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=60" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit60" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Dayper S 4-8kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="60"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">60</td>
                                            <td class="text-left" style="width: 300px">Dayper M 7-12kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit61" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=61" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit61" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Dayper M 7-12kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="61"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">61</td>
                                            <td class="text-left" style="width: 300px">Dayper L 9-12kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit62" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=62" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit62" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Dayper L 9-12kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="62"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">62</td>
                                            <td class="text-left" style="width: 300px">Dayper kL 12-17kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit63" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=63" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit63" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Dayper kL 12-17kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="63"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">63</td>
                                            <td class="text-left" style="width: 300px">Dayper XL 12-17kg</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit64" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=64" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit64" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Dayper XL 12-17kg"/>
                                                        <input type="hidden" name="id" class="form-control" value="64"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">64</td>
                                            <td class="text-left" style="width: 300px">Adult diaper</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit65" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=65" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit65" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Adult diaper"/>
                                                        <input type="hidden" name="id" class="form-control" value="65"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">65</td>
                                            <td class="text-left" style="width: 300px">HANDWASH</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit66" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=66" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit66" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="HANDWASH"/>
                                                        <input type="hidden" name="id" class="form-control" value="66"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">66</td>
                                            <td class="text-left" style="width: 300px">Air Freshner</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit67" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=67" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit67" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Air Freshner"/>
                                                        <input type="hidden" name="id" class="form-control" value="67"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">67</td>
                                            <td class="text-left" style="width: 300px">CLASSIC</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit68" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=68" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit68" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="CLASSIC"/>
                                                        <input type="hidden" name="id" class="form-control" value="68"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">68</td>
                                            <td class="text-left" style="width: 300px">AIR FRESHENER</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit69" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=69" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit69" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="AIR FRESHENER"/>
                                                        <input type="hidden" name="id" class="form-control" value="69"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">69</td>
                                            <td class="text-left" style="width: 300px">INSECT SPRAY</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit70" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=70" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit70" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="INSECT SPRAY"/>
                                                        <input type="hidden" name="id" class="form-control" value="70"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">70</td>
                                            <td class="text-left" style="width: 300px">SANITARY NAPKIN</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit71" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=71" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit71" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="SANITARY NAPKIN"/>
                                                        <input type="hidden" name="id" class="form-control" value="71"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">71</td>
                                            <td class="text-left" style="width: 300px">Pediatric Drop</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit72" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=72" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit72" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pediatric Drop"/>
                                                        <input type="hidden" name="id" class="form-control" value="72"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">72</td>
                                            <td class="text-left" style="width: 300px">Suspension</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit73" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=73" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit73" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Suspension"/>
                                                        <input type="hidden" name="id" class="form-control" value="73"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">73</td>
                                            <td class="text-left" style="width: 300px">Eye Drop</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit74" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=74" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit74" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Eye Drop"/>
                                                        <input type="hidden" name="id" class="form-control" value="74"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">74</td>
                                            <td class="text-left" style="width: 300px">Suppository</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit75" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=75" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit75" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Suppository"/>
                                                        <input type="hidden" name="id" class="form-control" value="75"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">75</td>
                                            <td class="text-left" style="width: 300px">Hand Rub</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit76" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=76" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit76" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Hand Rub"/>
                                                        <input type="hidden" name="id" class="form-control" value="76"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">76</td>
                                            <td class="text-left" style="width: 300px">food</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit79" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=79" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit79" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="food"/>
                                                        <input type="hidden" name="id" class="form-control" value="79"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">77</td>
                                            <td class="text-left" style="width: 300px">Thermometer</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit80" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=80" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit80" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Thermometer"/>
                                                        <input type="hidden" name="id" class="form-control" value="80"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">78</td>
                                            <td class="text-left" style="width: 300px">Gel</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit81" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=81" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit81" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Gel"/>
                                                        <input type="hidden" name="id" class="form-control" value="81"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">79</td>
                                            <td class="text-left" style="width: 300px">Oral Suspension</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit82" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=82" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit82" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Oral Suspension"/>
                                                        <input type="hidden" name="id" class="form-control" value="82"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">80</td>
                                            <td class="text-left" style="width: 300px">Lotion</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit83" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=83" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit83" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Lotion"/>
                                                        <input type="hidden" name="id" class="form-control" value="83"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">81</td>
                                            <td class="text-left" style="width: 300px">Solution</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit84" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=84" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit84" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Solution"/>
                                                        <input type="hidden" name="id" class="form-control" value="84"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">82</td>
                                            <td class="text-left" style="width: 300px"> Mouthwash</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit85" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=85" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit85" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value=" Mouthwash"/>
                                                        <input type="hidden" name="id" class="form-control" value="85"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">83</td>
                                            <td class="text-left" style="width: 300px">Oral Powder</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit86" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=86" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit86" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Oral Powder"/>
                                                        <input type="hidden" name="id" class="form-control" value="86"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">84</td>
                                            <td class="text-left" style="width: 300px">Mouthwash</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit87" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=87" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit87" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Mouthwash"/>
                                                        <input type="hidden" name="id" class="form-control" value="87"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">85</td>
                                            <td class="text-left" style="width: 300px">silk</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit88" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=88" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit88" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="silk"/>
                                                        <input type="hidden" name="id" class="form-control" value="88"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">86</td>
                                            <td class="text-left" style="width: 300px">saline set</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit89" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=89" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit89" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="saline set"/>
                                                        <input type="hidden" name="id" class="form-control" value="89"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">87</td>
                                            <td class="text-left" style="width: 300px">shop</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit90" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=90" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit90" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="shop"/>
                                                        <input type="hidden" name="id" class="form-control" value="90"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">88</td>
                                            <td class="text-left" style="width: 300px">shampoo</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit91" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=91" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit91" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="shampoo"/>
                                                        <input type="hidden" name="id" class="form-control" value="91"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">89</td>
                                            <td class="text-left" style="width: 300px">Pen</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit92" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=92" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit92" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pen"/>
                                                        <input type="hidden" name="id" class="form-control" value="92"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">90</td>
                                            <td class="text-left" style="width: 300px">Soap</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit93" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=93" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit93" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Soap"/>
                                                        <input type="hidden" name="id" class="form-control" value="93"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">91</td>
                                            <td class="text-left" style="width: 300px">Advanced</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit94" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=94" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit94" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Advanced"/>
                                                        <input type="hidden" name="id" class="form-control" value="94"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">92</td>
                                            <td class="text-left" style="width: 300px">GSK LTD.</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit95" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=95" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit95" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="GSK LTD."/>
                                                        <input type="hidden" name="id" class="form-control" value="95"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">93</td>
                                            <td class="text-left" style="width: 300px">Diaper</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit96" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=96" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit96" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Diaper"/>
                                                        <input type="hidden" name="id" class="form-control" value="96"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">94</td>
                                            <td class="text-left" style="width: 300px">Baby Feeder 1</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit97" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=97" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit97" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Baby Feeder 1"/>
                                                        <input type="hidden" name="id" class="form-control" value="97"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">95</td>
                                            <td class="text-left" style="width: 300px">Baby Wipes</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit98" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=98" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit98" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Baby Wipes"/>
                                                        <input type="hidden" name="id" class="form-control" value="98"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">96</td>
                                            <td class="text-left" style="width: 300px">Pads</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit99" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=99" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit99" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pads"/>
                                                        <input type="hidden" name="id" class="form-control" value="99"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">97</td>
                                            <td class="text-left" style="width: 300px">Condom</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit100" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=100" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit100" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Condom"/>
                                                        <input type="hidden" name="id" class="form-control" value="100"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">98</td>
                                            <td class="text-left" style="width: 300px">Minarel</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit101" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=101" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit101" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Minarel"/>
                                                        <input type="hidden" name="id" class="form-control" value="101"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">99</td>
                                            <td class="text-left" style="width: 300px">Feeder</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit102" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=102" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit102" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Feeder"/>
                                                        <input type="hidden" name="id" class="form-control" value="102"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">100</td>
                                            <td class="text-left" style="width: 300px">Test Strips</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit103" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=103" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit103" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Test Strips"/>
                                                        <input type="hidden" name="id" class="form-control" value="103"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">101</td>
                                            <td class="text-left" style="width: 300px">Meter Set</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit104" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=104" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit104" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Meter Set"/>
                                                        <input type="hidden" name="id" class="form-control" value="104"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">102</td>
                                            <td class="text-left" style="width: 300px">Hand Sanitizer</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit105" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=105" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit105" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Hand Sanitizer"/>
                                                        <input type="hidden" name="id" class="form-control" value="105"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">103</td>
                                            <td class="text-left" style="width: 300px">Room Spray</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit106" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=106" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit106" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Room Spray"/>
                                                        <input type="hidden" name="id" class="form-control" value="106"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">104</td>
                                            <td class="text-left" style="width: 300px">Spray</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit107" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=107" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit107" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Spray"/>
                                                        <input type="hidden" name="id" class="form-control" value="107"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">105</td>
                                            <td class="text-left" style="width: 300px">Nipple</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit108" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=108" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit108" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Nipple"/>
                                                        <input type="hidden" name="id" class="form-control" value="108"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">106</td>
                                            <td class="text-left" style="width: 300px">Syringe</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit109" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=109" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit109" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Syringe"/>
                                                        <input type="hidden" name="id" class="form-control" value="109"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">107</td>
                                            <td class="text-left" style="width: 300px">Horlicks</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit110" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=110" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit110" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Horlicks"/>
                                                        <input type="hidden" name="id" class="form-control" value="110"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">108</td>
                                            <td class="text-left" style="width: 300px">Cotton</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit111" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=111" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit111" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Cotton"/>
                                                        <input type="hidden" name="id" class="form-control" value="111"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">109</td>
                                            <td class="text-left" style="width: 300px">Bandage</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit112" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=112" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit112" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Bandage"/>
                                                        <input type="hidden" name="id" class="form-control" value="112"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">110</td>
                                            <td class="text-left" style="width: 300px">Menthol</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit113" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=113" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit113" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Menthol"/>
                                                        <input type="hidden" name="id" class="form-control" value="113"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">111</td>
                                            <td class="text-left" style="width: 300px">Oil</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit114" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=114" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit114" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Oil"/>
                                                        <input type="hidden" name="id" class="form-control" value="114"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">112</td>
                                            <td class="text-left" style="width: 300px">Liquid</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit115" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=115" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit115" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Liquid"/>
                                                        <input type="hidden" name="id" class="form-control" value="115"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">113</td>
                                            <td class="text-left" style="width: 300px">Calamin</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit116" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=116" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit116" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Calamin"/>
                                                        <input type="hidden" name="id" class="form-control" value="116"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">114</td>
                                            <td class="text-left" style="width: 300px"> Gauge</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit117" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=117" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit117" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value=" Gauge"/>
                                                        <input type="hidden" name="id" class="form-control" value="117"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">115</td>
                                            <td class="text-left" style="width: 300px">Roll</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit118" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=118" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit118" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Roll"/>
                                                        <input type="hidden" name="id" class="form-control" value="118"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">116</td>
                                            <td class="text-left" style="width: 300px">cannula</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit119" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=119" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit119" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="cannula"/>
                                                        <input type="hidden" name="id" class="form-control" value="119"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">117</td>
                                            <td class="text-left" style="width: 300px">Bag</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit120" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=120" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit120" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Bag"/>
                                                        <input type="hidden" name="id" class="form-control" value="120"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">118</td>
                                            <td class="text-left" style="width: 300px">Blood Set</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit121" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=121" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit121" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Blood Set"/>
                                                        <input type="hidden" name="id" class="form-control" value="121"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">119</td>
                                            <td class="text-left" style="width: 300px">Musk</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit122" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=122" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit122" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Musk"/>
                                                        <input type="hidden" name="id" class="form-control" value="122"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">120</td>
                                            <td class="text-left" style="width: 300px">Tube</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit123" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=123" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit123" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Tube"/>
                                                        <input type="hidden" name="id" class="form-control" value="123"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">121</td>
                                            <td class="text-left" style="width: 300px">Catheter </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit124" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=124" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit124" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Catheter "/>
                                                        <input type="hidden" name="id" class="form-control" value="124"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">122</td>
                                            <td class="text-left" style="width: 300px">Needle</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit125" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=125" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit125" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Needle"/>
                                                        <input type="hidden" name="id" class="form-control" value="125"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">123</td>
                                            <td class="text-left" style="width: 300px">Belt</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit126" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=126" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit126" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Belt"/>
                                                        <input type="hidden" name="id" class="form-control" value="126"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">124</td>
                                            <td class="text-left" style="width: 300px">Blade</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit127" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=127" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit127" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Blade"/>
                                                        <input type="hidden" name="id" class="form-control" value="127"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">125</td>
                                            <td class="text-left" style="width: 300px">Tape</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit128" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=128" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit128" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Tape"/>
                                                        <input type="hidden" name="id" class="form-control" value="128"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">126</td>
                                            <td class="text-left" style="width: 300px">Gauze</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit129" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=129" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit129" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Gauze"/>
                                                        <input type="hidden" name="id" class="form-control" value="129"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">127</td>
                                            <td class="text-left" style="width: 300px">Catgut</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit130" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=130" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit130" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Catgut"/>
                                                        <input type="hidden" name="id" class="form-control" value="130"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">128</td>
                                            <td class="text-left" style="width: 300px">Circle</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit131" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=131" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit131" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Circle"/>
                                                        <input type="hidden" name="id" class="form-control" value="131"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">129</td>
                                            <td class="text-left" style="width: 300px">Pulse Oximeter</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit132" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=132" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit132" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pulse Oximeter"/>
                                                        <input type="hidden" name="id" class="form-control" value="132"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">130</td>
                                            <td class="text-left" style="width: 300px">Meshing</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit133" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=133" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit133" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Meshing"/>
                                                        <input type="hidden" name="id" class="form-control" value="133"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">131</td>
                                            <td class="text-left" style="width: 300px">D/S</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit134" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=134" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit134" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="D/S"/>
                                                        <input type="hidden" name="id" class="form-control" value="134"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">132</td>
                                            <td class="text-left" style="width: 300px">Box</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit135" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=135" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit135" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Box"/>
                                                        <input type="hidden" name="id" class="form-control" value="135"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">133</td>
                                            <td class="text-left" style="width: 300px">Pregnancy Test </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit136" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=136" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit136" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pregnancy Test "/>
                                                        <input type="hidden" name="id" class="form-control" value="136"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">134</td>
                                            <td class="text-left" style="width: 300px">Vein Set</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit137" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=137" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit137" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Vein Set"/>
                                                        <input type="hidden" name="id" class="form-control" value="137"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">135</td>
                                            <td class="text-left" style="width: 300px">Cap</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit138" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=138" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit138" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Cap"/>
                                                        <input type="hidden" name="id" class="form-control" value="138"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">136</td>
                                            <td class="text-left" style="width: 300px">Napkin</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit139" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=139" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit139" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Napkin"/>
                                                        <input type="hidden" name="id" class="form-control" value="139"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">137</td>
                                            <td class="text-left" style="width: 300px">Tissue</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit140" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=140" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit140" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Tissue"/>
                                                        <input type="hidden" name="id" class="form-control" value="140"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">138</td>
                                            <td class="text-left" style="width: 300px">Effervescent Powder</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit141" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=141" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit141" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Effervescent Powder"/>
                                                        <input type="hidden" name="id" class="form-control" value="141"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">139</td>
                                            <td class="text-left" style="width: 300px">Gloves</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit142" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=142" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit142" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Gloves"/>
                                                        <input type="hidden" name="id" class="form-control" value="142"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">140</td>
                                            <td class="text-left" style="width: 300px">Cutting</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit143" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=143" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit143" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Cutting"/>
                                                        <input type="hidden" name="id" class="form-control" value="143"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">141</td>
                                            <td class="text-left" style="width: 300px">Glucos</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit144" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=144" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit144" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Glucos"/>
                                                        <input type="hidden" name="id" class="form-control" value="144"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">142</td>
                                            <td class="text-left" style="width: 300px">Pediatric Drops</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit145" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=145" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit145" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pediatric Drops"/>
                                                        <input type="hidden" name="id" class="form-control" value="145"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">143</td>
                                            <td class="text-left" style="width: 300px">Battery </td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit146" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=146" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit146" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Battery "/>
                                                        <input type="hidden" name="id" class="form-control" value="146"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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
                                            <td style="width: 10px">144</td>
                                            <td class="text-left" style="width: 300px">Pumpe</td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit147" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=147" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit147" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Medicine Form</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Generic Name</label>
                                                        <input type="text" name="medicine_strength" class="form-control" value="Pumpe"/>
                                                        <input type="hidden" name="id" class="form-control" value="147"/>
                                                        <br />
                                                        <label>Select status</label>
                                                        <select name="status" id="gender" class="form-control">
                                                            <option value="1"selected>Active</option>
                                                            <option value="0">Inactive</option>
                                                        </select>
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


<div id="add" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Medicine Form</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <label>Form Name</label>
                    <input type="text" name="medicine_strength" class="form-control" placeholder="Form Name"/>
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
