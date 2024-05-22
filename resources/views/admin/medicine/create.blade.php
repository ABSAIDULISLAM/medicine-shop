@extends('admin.layouts.master')

@section('title', 'Create-Medicine')

@section('content')

    <section class="content-header">
        <h1>
            Add Medicine
            <small>Add Medicine</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Medicine</a></li>
            <li class="active">Add Medicine</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->
            <div class="col-md-12">
                @includeIf('errors.error')
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Add Medicine</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    @include('errors.error')
                    <!-- form start -->
                    <form method="POST" action="{{route('Medicine.store')}}" >
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medicine_name">Medicine Name <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                                            <input type="text" name="medicine_name" id="medicine_name"
                                                class="form-control" placeholder="Medicine Name" autocomplete="off" value="{{old('medicine_name')}}"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="purchases_price">Purchases Prices <span style="color: red">
                                                *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="purchases_price" id="purchases_price"
                                                class="form-control" placeholder="Purchases Prices" autocomplete="off"  value="{{old('purchases_price')}}"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_id">Company Name <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                          <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                          <select name="company_id" id="company_id" class="select2 form-control" required="">
                                            <option value="" disabled selected>Select Company Name</option>
                                            @forelse ($companies as $item)
                                                <option value="{{$item->id}}">{{$item->company_name}}</option>
                                            @empty
                                            @endforelse
                                          </select>
                                        </div>
                                      </div>

                                    <div class="form-group">
                                        <label for="indication">Indication <span style="color: red"> </span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <textarea name="indication" id="indication" cols="5" rows="5" class="form-control" placeholder="Indication"
                                                autocomplete="off">{{old('indication')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="generic_id">Generic Name <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="generic_id" id="generic_id"
                                                class="select2 form-control" required>
                                                <option value="" disabled selected>Select Generic Name</option>
                                                @forelse ($generics as $item)
                                                    <option value="{{$item->id}}">{{$item->generic_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sale_price">Sales Price <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="number" name="sale_price" id="sale_price" class="form-control"
                                                placeholder=" Sales Price" autocomplete="off" value="{{old('sale_price')}}" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rack_id">Rack Number <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="rack_id" id="rack_id" class="select2 form-control" required>
                                                <option value="" disabled selected>Select Rack Name</option>
                                                @forelse ($racks as $item)
                                                    <option value="{{$item->id}}">{{$item->rack_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="side_effect">Side Effect</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <textarea name="side_effect" id="side_effect" cols="5" rows="5" class="form-control"
                                                placeholder="Side Effect" autocomplete="off">{{old('side_effect')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medicine_form">Medicine Form <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="medicine_form" id="medicine_form"
                                                class="select2 form-control" required>
                                                <option value="" disabled selected>Select Medicine form Name</option>
                                                @forelse ($mediForms as $item)
                                                    <option value="{{$item->id}}">{{$item->medicine_strength}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="medicine_strength">Strength <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="medicine_strength" id="medicine_strength" required
                                                class="form-control" placeholder="Strength" value="{{old('medicine_strength')}}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="min_stock">Minimum Stock <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="number" name="min_stock" id="min_stock" class="form-control"
                                                placeholder="Minimum Stock" value="0" autocomplete="off" required>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="administration">Administration</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <textarea name="administration" id="administration" cols="5" rows="5" class="form-control"
                                                placeholder="Administration" autocomplete="off">{{old('administration')}}</textarea>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" name="btn" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>


    @push('js')


    @endpush


@endsection
