
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
                                        <th>Account Head</th>
                                        <th>Sub Head</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                                                            <tr>
                                            <td>1</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Cash </td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit1" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=1" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit1" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Cash "/>
                                                        <input type="hidden" name="id" class="form-control" value="1"/>
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
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Bkash</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit2" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=2" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit2" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Bkash"/>
                                                        <input type="hidden" name="id" class="form-control" value="2"/>
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
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>T-Cash</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit3" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=3" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit3" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="T-Cash"/>
                                                        <input type="hidden" name="id" class="form-control" value="3"/>
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
                                            <td>4</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Nagad</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit4" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=4" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit4" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Nagad"/>
                                                        <input type="hidden" name="id" class="form-control" value="4"/>
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
                                            <td>5</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Rocket</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit5" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=5" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit5" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Rocket"/>
                                                        <input type="hidden" name="id" class="form-control" value="5"/>
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
                                            <td>6</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Islami Bank Ltd A/C-20503910100037818</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit6" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=6" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit6" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Islami Bank Ltd A/C-20503910100037818"/>
                                                        <input type="hidden" name="id" class="form-control" value="6"/>
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
                                            <td>7</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Islami Bank POS</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit7" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=7" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit7" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Islami Bank POS"/>
                                                        <input type="hidden" name="id" class="form-control" value="7"/>
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
                                            <td>8</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>City Bank POS</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit8" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=8" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit8" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="City Bank POS"/>
                                                        <input type="hidden" name="id" class="form-control" value="8"/>
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
                                            <td>9</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>UCB Bank POS</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit9" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=9" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit9" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="UCB Bank POS"/>
                                                        <input type="hidden" name="id" class="form-control" value="9"/>
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
                                            <td>10</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>DBBL POS</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit10" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=10" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit10" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="DBBL POS"/>
                                                        <input type="hidden" name="id" class="form-control" value="10"/>
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
                                            <td>11</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Accounts Receivable</td>
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
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Accounts Receivable"/>
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
                                            <td>12</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Inventory Asset</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit12" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=12" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit12" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Inventory Asset"/>
                                                        <input type="hidden" name="id" class="form-control" value="12"/>
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
                                            <td>13</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Computer Equipment</td>
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
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Computer Equipment"/>
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
                                                                            <tr>
                                            <td>14</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Furniture and Decoration</td>
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
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Furniture and Decoration"/>
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
                                            <td>15</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Electrical Equipment</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit15" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=15" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit15" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Electrical Equipment"/>
                                                        <input type="hidden" name="id" class="form-control" value="15"/>
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
                                            <td>16</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Accounts Payable</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit16" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=16" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit16" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Accounts Payable"/>
                                                        <input type="hidden" name="id" class="form-control" value="16"/>
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
                                            <td>17</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Supplier Payable</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit17" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=17" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit17" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Supplier Payable"/>
                                                        <input type="hidden" name="id" class="form-control" value="17"/>
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
                                            <td>18</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Shop Rent</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit18" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=18" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit18" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Shop Rent"/>
                                                        <input type="hidden" name="id" class="form-control" value="18"/>
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
                                            <td>19</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Staff Salary</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit19" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=19" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit19" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Staff Salary"/>
                                                        <input type="hidden" name="id" class="form-control" value="19"/>
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
                                            <td>20</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Staff Bonus</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit20" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=20" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit20" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Staff Bonus"/>
                                                        <input type="hidden" name="id" class="form-control" value="20"/>
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
                                            <td>21</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Electric Bill</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit21" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=21" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit21" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Electric Bill"/>
                                                        <input type="hidden" name="id" class="form-control" value="21"/>
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
                                            <td>22</td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td class="text-left">
                                                                                            </td>
                                            <td>Internet Bill</td>
                                            <td class="text-center">
                                                                                                    <button data-toggle="modal" data-target="#edit22" class="btn red-meadow" style="background-color : #006666"><i class="fa fa-pencil" style="color : #fff"></i></button>
                                                                                                    <a href="?name=delete&id=22" onclick=" return checkDelete();"><button class="btn red-meadow" style="background-color : red"><i class="fa fa-trash-o " style="color : #fff"></i></button></a>
                                                                                            </td>
                                        </tr>
                                    <div id="edit22" class="modal fade">
                                        <div class="modal-dialog">
                                            <div class="modal-content">
                                                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    <h4 class="modal-title">Edit Sub Head</h4>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="">
                                                        <label>Select Journal</label>
                                                        <select name="account_head" class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="8">Administrative </option>
                                                                                                                                    <option value="7">Projonmo</option>
                                                                                                                            </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Select Account Head</label>
                                                        <select name="sub_head_id"  class="form-control select2" style="width: 100%;">
                                                                                                                            <option value="11"
                                                                >
                                                                    Dan</option>
                                                                                                                            <option value="14"
                                                                >
                                                                    Moh</option>
                                                                                                                            <option value="13"
                                                                >
                                                                    Office & Stationary Exp</option>
                                                                                                                    </select>
                                                        <br />
                                                        <label style="margin-top: 10px">Sub head</label>
                                                        <input type="text" name="second_sub_head" class="form-control" value="Internet Bill"/>
                                                        <input type="hidden" name="id" class="form-control" value="22"/>
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
                <h4 class="modal-title">Add Sub Head</h4>
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
                        <label for="sub_head_id">Account Name</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <select name="sub_head_id" id="sub_head_id" class="form-control select2" style="width: 100%;">
                                <option value="">Select Account Head</option>
                                                                    <option value="11">Dan</option>
                                                                    <option value="14">Moh</option>
                                                                    <option value="13">Office & Stationary Exp</option>
                                                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="second_sub_head">Sub head</label>
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                            <input type="text" name="second_sub_head" id="second_sub_head" class="form-control" placeholder="Sub head" autocomplete="off">
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

@push('js')
<script>
    $(document).ready(function () {
        $('#account_head').change(function () {
            var id = $(this).val();
            $.ajax({
                type: 'POST',
                url: 'ajax-response',
                data: {'account_head': id},
                success: function (html) {
                    $('#sub_head_id').html(html);
                }
            });
        });
    });
</script>
@endpush


@endsection
