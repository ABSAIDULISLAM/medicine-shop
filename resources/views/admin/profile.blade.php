@extends('admin.layouts.master')

@section('title', 'Profile')

@section('content')

    <section class="content-header">
        <h1>
           Profile
            <small> Profile</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="{{route('Admin.dashboard')}}"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="{{route('profile')}}">Profile</a></li>
            <li class="active"> Profile</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-md-9">
                <div class="card card-primary card-outline">
                    <div class="card-header p-2">
                        <ul class="nav nav-pills">
                            <li class="nav-item"><a class="nav-link active" href="#overView" data-toggle="tab">OverView</a>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="#settings" data-toggle="tab">Update</a></li>
                        </ul>
                    </div>
                    <div class="card-body">
                        <div class="tab-content">
                            <div class="active tab-pane" id="overView">

                                <div class="table-responsive">
                                    <table class="table table-bordered table-striped table-hover">
                                        <tr>
                                            <th>Profile Picture</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Full Name</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>User Name</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Email Address</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Password</th>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <th>Status	</th>
                                            <td></td>
                                        </tr>

                                    </table>
                                </div>
                            </div>

                            <div class="tab-pane" id="settings">

                                <form action="" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">Name</label>
                                        <div class="col-sm-10">
                                            <input type="text" name="name" value=""
                                                class="form-control @error('name') is-invalid border border-danger @enderror"
                                                id="inputName" placeholder="Name">
                                        </div>
                                        @if ($errors->has('name'))
                                            <span class="error text-danger "></span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputName" class="col-sm-2 col-form-label">What's App</label>
                                        <div class="col-sm-10">
                                            <input type="number" name="whats_app" value=""
                                                class="form-control @error('whats_app') is-invalid border border-danger @enderror"
                                                id="inputName" placeholder="What's App number">
                                        </div>
                                        @if ($errors->has('whats_app'))
                                            <span class="error text-danger ">{{ $errors->first('whats_app') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Old Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="old_password"
                                                class="form-control @error('old_password') is-invalid border border-danger @enderror"
                                                id="inputEmail" placeholder="old Password">
                                        </div>
                                        @if ($errors->has('old_password'))
                                            <span class="error text-danger ">{{ $errors->first('old_password') }}</span>
                                        @endif
                                    </div>
                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">New Password</label>
                                        <div class="col-sm-10">
                                            <input type="password" name="password"
                                                class="form-control @error('password') is-invalid border border-danger @enderror"
                                                id="inputEmail" placeholder="New Password">
                                        </div>
                                        @if ($errors->has('password'))
                                            <span class="error text-danger ">{{ $errors->first('password') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row">
                                        <label for="inputExperience" class="col-sm-2 col-form-label">Image</label>
                                        <div class="col-sm-10">
                                            <input type="file" name="image"
                                                class="form-control @error('image') is-invalid border border-danger @enderror"
                                                id="inputEmail">
                                            <img src="" alt="profile-image" height="80px"
                                                width="80px">
                                        </div>
                                        @if ($errors->has('image'))
                                            <span class="error text-danger ">{{ $errors->first('image') }}</span>
                                        @endif
                                    </div>

                                    <div class="form-group row my-3 ml-auto">
                                        <div class="offset-sm-2 col-sm-10 ">
                                            <button type="submit" class="btn btn-success ">Update</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
