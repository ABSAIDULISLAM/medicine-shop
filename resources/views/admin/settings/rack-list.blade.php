@extends('admin.layouts.master')
@section('title', 'Rack-list')
@section('content')

    <section class="content-header">
        <h1>
            Rack
            <small> Rack List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Rack</a></li>
            <li class="active"> Rack List</li>
        </ol>
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Rack List</h3>
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
                                        <th class="text-center">Rack Name</th>
                                        <th class="text-center">Status</th>
                                        <th class="text-center">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td style="width: 10px">1</td>
                                            <td class="text-left" style="width: 300px"></td>
                                            <td class="text-center" style="width: 100px">

                                                    <span class="label label-success" style="font-size: 14px;">Active</span>
                                                                                            </td>
                                            <td class="text-center" style="width: 100px">
                                                                                                    <button data-toggle="modal" data-target="#edit1" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=1" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value=""/>
                                                        <input type="hidden" name="id" class="form-control" value="1"/>
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
                                            <td class="text-left" style="width: 300px">Rack2</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack2"/>
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
                                            <td style="width: 10px">3</td>
                                            <td class="text-left" style="width: 300px">Rack3</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack3"/>
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
                                            <td style="width: 10px">4</td>
                                            <td class="text-left" style="width: 300px">Rack4</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack4"/>
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
                                            <td style="width: 10px">5</td>
                                            <td class="text-left" style="width: 300px">Rack5</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack5"/>
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
                                            <td style="width: 10px">6</td>
                                            <td class="text-left" style="width: 300px">Rack6</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack6"/>
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
                                            <td style="width: 10px">7</td>
                                            <td class="text-left" style="width: 300px">Rack7</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack7"/>
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
                                            <td style="width: 10px">8</td>
                                            <td class="text-left" style="width: 300px">Rack8</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack8"/>
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
                                            <td style="width: 10px">9</td>
                                            <td class="text-left" style="width: 300px">Rack9</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack9"/>
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
                                            <td style="width: 10px">10</td>
                                            <td class="text-left" style="width: 300px">Rack13</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack13"/>
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
                                            <td style="width: 10px">11</td>
                                            <td class="text-left" style="width: 300px">Rack14</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack14"/>
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
                                            <td style="width: 10px">12</td>
                                            <td class="text-left" style="width: 300px">Rack15</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack15"/>
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
                                            <td style="width: 10px">13</td>
                                            <td class="text-left" style="width: 300px">Rack16</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack16"/>
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
                                            <td style="width: 10px">14</td>
                                            <td class="text-left" style="width: 300px">Rack17</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack17"/>
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
                                            <td style="width: 10px">15</td>
                                            <td class="text-left" style="width: 300px">Rack18</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack18"/>
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
                                            <td style="width: 10px">16</td>
                                            <td class="text-left" style="width: 300px">Rack19</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack19"/>
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
                                            <td style="width: 10px">17</td>
                                            <td class="text-left" style="width: 300px">Rack20</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack20"/>
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
                                            <td style="width: 10px">18</td>
                                            <td class="text-left" style="width: 300px">Rack21</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack21"/>
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
                                            <td style="width: 10px">19</td>
                                            <td class="text-left" style="width: 300px">Rack22</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack22"/>
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
                                            <td style="width: 10px">20</td>
                                            <td class="text-left" style="width: 300px">Rack23</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack23"/>
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
                                            <td style="width: 10px">21</td>
                                            <td class="text-left" style="width: 300px">Rack24</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack24"/>
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
                                            <td style="width: 10px">22</td>
                                            <td class="text-left" style="width: 300px">Rack25</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack25"/>
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
                                            <td style="width: 10px">23</td>
                                            <td class="text-left" style="width: 300px">Rack26</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack26"/>
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
                                            <td style="width: 10px">24</td>
                                            <td class="text-left" style="width: 300px">Rack27</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack27"/>
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
                                            <td style="width: 10px">25</td>
                                            <td class="text-left" style="width: 300px">Rack28</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack28"/>
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
                                            <td style="width: 10px">26</td>
                                            <td class="text-left" style="width: 300px">Rack29</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack29"/>
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
                                            <td style="width: 10px">27</td>
                                            <td class="text-left" style="width: 300px"></td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value=""/>
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
                                            <td style="width: 10px">28</td>
                                            <td class="text-left" style="width: 300px">Rack1</td>
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
                                                    <h4 class="modal-title">Edit Rack</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Rack Name</label>
                                                        <input type="text" name="company_name" class="form-control" value="Rack1"/>
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
                <h4 class="modal-title">Add Rack</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="">
                    <label>Rack Name</label>
                    <input type="text" name="rack_name" class="form-control" placeholder="Rack Name"/>
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
