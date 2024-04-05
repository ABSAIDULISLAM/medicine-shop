@extends('admin.layouts.master')
@section('title', 'Edit-medicine')
@section('content')

    <section class="content-header">
        <h1>
            Edit Medicine
            <small>Edit Medicine</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Medicine</a></li>
            <li class="active">Edit Medicine</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <!-- left column -->

            <div class="col-md-12">
                <!-- general form elements -->
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title">Edit Medicine</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    @includeIf('errors.error')
                    <!-- form start -->
                    <form method="POST" action="{{route('Medicine.update')}}">
                        @csrf
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medicine_name">Medicine Name <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                                            <input type="text" name="medicine_name" id="medicine_name" class="form-control" value="{{$data->medicine_name}}" placeholder="Medicine Name" autocomplete="off" required="">
                                            <input type="hidden" name="created_by" class="form-control" value="17" autocomplete="off">
                                            <input type="hidden" name="id" class="form-control" value="{{$data->id}}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="purchases_price">Purchases Prices</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="purchases_price" id="purchases_price" class="form-control" value="{{$data->purchases_price}}" placeholder="Purchases Prices" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_id">Company Name </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="company_id" id="company_id" class="select2 form-control">
                                                <option disabled selected>Select Company Name</option>
                                                @forelse ($companies as $item)
                                                    <option value="{{$item->id}}" {{$data->company_id == $item->id ? 'selected' : ''}} >{{$item->company_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="box_qty">Pack Size</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="box_qty" id="box_qty" class="form-control" placeholder="Pack Size" value="{{$data->box_qty}}" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="medi_type">Medicine Type<span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="medi_type" class="form-control select2" id="med_type" style="width: 100%">
                                                <option disabled selected>Select Medicine Type</option>
                                                @forelse ($mediType as $item)
                                                    <option value="{{$item->id}}" {{$data->medi_type == $item->id ? 'selected' : ''}} >{{$item->medicine_type}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                            <span class="input-group-btn">
                                                <button type="button" style="padding: 8px;height: 34px" data-toggle="modal" data-target="#add_medi_type" class="btn btn-default btn-flat"><i style="vertical-align: 0% !important;" class="fa fa-plus-circle text-primary fa-lg" aria-hidden="true"></i></button>
                                            </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="expire_date">Expire Date</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="date" name="expire_date" id="expire_date" class="form-control" value="{{$data->expire_date}}"  autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="generic_id">Generic Name</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="generic_id" id="generic_id" class="select2 form-control">
                                                <option disabled selected>Select Generic Name</option>
                                                @forelse ($generics as $item)
                                                    <option value="{{$item->id}}" {{$data->generic_id == $item->id ? 'selected' : ''}} >{{$item->generic_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sale_price">Sales Price</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="sale_price" id="sale_price" class="form-control" value="{{$data->sale_price}}" placeholder=" Sales Price" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rack_id">Rack Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="rack_id" id="rack_id" class="select2 form-control">
                                                <option disabled selected>Select Rack Name</option>
                                                @forelse ($racks as $item)
                                                    <option value="{{$item->id}}" {{$data->rack_id == $item->id ? 'selected' : ''}} >{{$item->rack_name}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="min_stock">Minimum Stock</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="min_stock" class="form-control" value="{{$data->min_stock}}" placeholder="Minimum Stock" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="serial_number">Serial Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="serial_number" id="serial_number" class="form-control" placeholder="Serial Number" value="{{$data->serial_number}}" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medicine_form">Medicine Form</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="medicine_form" id="medicine_form" class="select2 form-control">
                                                <option disabled selected>Select Rack Name</option>
                                                @forelse ($mediForms as $item)
                                                    <option value="{{$item->id}}" {{$data->medicine_form == $item->id ? 'selected' : ''}} >{{$item->medicine_strength}}</option>
                                                @empty
                                                @endforelse
                                            </select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="mrp_price">MRP Price</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="mrp_price" id="mrp_price" class="form-control" value="{{$data->mrp_price}}" placeholder="MRP Price" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="trade_price">Trade Price</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="trade_price" id="trade_price" class="form-control" value="{{$data->trade_price}}" placeholder="Trade Price" autocomplete="off">
                                        </div>
                                    </div>
                                   <div class="form-group">
                                        <label for="medicine_strength">Strength </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="medicine_strength" id="medicine_strength" class="form-control" value="{{$data->medicine_strength}}" placeholder="Strength" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="opening_stock">Opening Stock</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="opening_stock" id="opening_stock" class="form-control" value="{{$data->opening_stock}}" placeholder="Opening Stock" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" class="btn btn-primary">Submit</button>
                            <button type="reset" class="btn btn-danger">Cancel</button>
                        </div>
                    </form>
                </div>
                <!-- /.box -->
            </div>
        </div>
        <!-- /.row -->
    </section>
    <!-- /.content -->

    <div id="add_medi_type" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Medicine Type</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="">
                        <label>Medicine Type</label>
                        <input type="text" id="medicineType" class="form-control" placeholder="Medicine Type"/>
                        <br />
                        <label>Select status</label>
                        <select id="medicineStatus" class="form-control">
                            <option value="1">Active</option>
                            <option value="0">Inactive</option>
                        </select>
                        <br />
                        <input type="button" value="Submit" id="addMedicineType" class="btn btn-success pull-right" />
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
            $('#addMedicineType').click(function (e) {
                e.preventDefault();

                var medicineType = $('#medicineType').val();
                var medicineStatus = $('#medicineStatus').val();

                // Validation
                if (medicineType.trim() == '') {
                    alert("Medicine Type cannot be empty.");
                    return false;
                }
                $.ajax({
                    type: "POST",
                    url: "{{ route('Medicine.addMedicineType') }}",
                    data: {
                        "_token": "{{ csrf_token() }}", // Include CSRF token
                        "medicineType": medicineType,
                        "medicineStatus": medicineStatus
                    },
                    success: function (data) {
                        if (data != "") {
                            alert('Saved Successfully.');
                            // Update select options
                            $('#med_type').append($('<option>', {
                                value: data.id,
                                text: data.medicine_type,
                                selected: true // Select newly added option
                            }));
                            $('#add_medi_type').modal('hide');
                        }
                    }
                });
            });
        });
    </script>
    @endpush

@endsection
