<div id="addMedicine" class="modal fade">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background-color: #07855f;color: #fff">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Add Medicine</h4>
            </div>
            <div class="modal-body">
                <form method="post" action="" id="medicineform">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="medicine_name">Medicine Name <span style="color: red"> *</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                                    <input type="text" id="medicine_name" class="form-control"
                                        placeholder="Medicine Name" autocomplete="off" required="">
                                    <input type="hidden" id="created_by" class="form-control" value="{{auth()->user()->id}}"
                                        autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="medicine_form">Medicine Form</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                    <select id="medicine_form" class="select2 form-control"
                                        style="width: 100%">
                                        <option selected disabled>Select Medicine Form</option>
                                        @forelse ($mediForms as $item)
                                            <option value="{{$item->id}}">{{$item->medicine_strength}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="company_id">Company Name <span style="color: red"> *</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                    <select id="company_id" class="select2 form-control"
                                        style="width: 100%">
                                        <option selected disabled>Select Company</option>
                                        @forelse ($companies as $item)
                                            <option value="{{$item->id}}">{{$item->company_name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="purchases_price">Purchases Prices <span style="color: red">
                                        *</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input type="text" id="purchases_price" class="form-control"
                                        placeholder="Purchases Prices" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="min_stock">Minimum Stock</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input type="text" id="min_stock" class="form-control"
                                        placeholder="Minimum Stock" autocomplete="off">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="generic_id">Generic Name </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                    <select id="generic_id" class="select2 form-control"
                                        style="width: 100%">
                                        <option selected disabled>Select Generic</option>
                                        @forelse ($generics as $item)
                                            <option value="{{$item->id}}">{{$item->generic_name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="medicine_strength">Strength </label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input type="text" id="medicine_strength" class="form-control"
                                        placeholder="Strength" autocomplete="off">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="rack_id">Rack Number</label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                    <select id="rack_id" class="select2 form-control" style="width: 100%">
                                        <option selected disabled>Select Rack</option>
                                        @forelse ($racks as $item)
                                            <option value="{{$item->id}}">{{$item->rack_name}}</option>
                                        @empty
                                        @endforelse
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="sale_price">Sales Price <span style="color: red"> *</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                    <input type="text" id="sale_price" class="form-control"
                                        placeholder=" Sales Price" autocomplete="off" required="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="opening_stock">Opening Stock<span style="color: red"> *</span></label>
                                <div class="input-group">
                                    <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                    <input type="text" id="opening_stock" class="form-control"
                                        placeholder="Opening Stock" autocomplete="off" required="">
                                </div>
                            </div>
                        </div>
                    </div>
                    <input type="button" value="Submit" id="saveMedicine" class="btn btn-success pull-right" />
                </form>
            </div>
            <div class="modal-footer">

            </div>
        </div>
    </div>
</div>

<script>
    // $(document).ready(function() {
    //     $('.company_id').select2({
    //         minimumInputLength: 2,
    //         allowClear: true,
    //         placeholder: 'Please Enter Name',
    //         ajax: {
    //             "_token": "{{ csrf_token() }}",
    //             url: '{{route('Purchase.company.search')}}',
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(data) {
    //                 return {
    //                     searchCompany: data.term // search term
    //                 };
    //             },
    //             processResults: function(response) {
    //                 console.log(response);
    //                 return {
    //                     results: response
    //                 };
    //             },
    //             cache: true
    //         }
    //     });
    // });
    // $(document).ready(function() {
    //     $('.generic_id').select2({
    //         minimumInputLength: 2,
    //         allowClear: true,
    //         placeholder: 'Please Enter Name',
    //         ajax: {
    //             url: 'ajax-response',
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(data) {
    //                 return {
    //                     searchGeneric: data.term // search term
    //                 };
    //             },
    //             processResults: function(response) {
    //                 return {
    //                     results: response
    //                 };
    //             },
    //             cache: true
    //         }
    //     });
    // });
    // $(document).ready(function() {
    //     $('.rack_id').select2({
    //         minimumInputLength: 2,
    //         allowClear: true,
    //         placeholder: 'Please Enter Name',
    //         ajax: {
    //             url: 'ajax-response',
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(data) {
    //                 return {
    //                     searchRack: data.term // search term
    //                 };
    //             },
    //             processResults: function(response) {
    //                 return {
    //                     results: response
    //                 };
    //             },
    //             cache: true
    //         }
    //     });
    // });
    // $(document).ready(function() {
    //     $('.medicine_form').select2({
    //         minimumInputLength: 2,
    //         allowClear: true,
    //         placeholder: 'Please Enter Name',
    //         ajax: {
    //             url: 'ajax-response',
    //             dataType: 'json',
    //             delay: 250,
    //             data: function(data) {
    //                 return {
    //                     searchMedicineForm: data.term // search term
    //                 };
    //             },
    //             processResults: function(response) {
    //                 return {
    //                     results: response
    //                 };
    //             },
    //             cache: true
    //         }
    //     });
    // });


    $(document).ready(function() {
        $('#saveMedicine').click(function(e) {
            e.preventDefault();
            var medicine_name = $('#medicine_name').val();
            var created_by = $('#created_by').val();
            var medicine_form = $('#medicine_form').val();
            var company_id = $('#company_id').val();
            var purchases_price = $('#purchases_price').val();
            var min_stock = $('#min_stock').val();
            var generic_id = $('#generic_id').val();
            var medicine_strength = $('#medicine_strength').val();
            var rack_id = $('#rack_id').val();
            var sale_price = $('#sale_price').val();
            var opening_stock = $('#opening_stock').val();

            if (created_by == '') {
                alert("Sorry unauthorized access.");
                return false;
            }
            if (medicine_name == "" || generic_id == "") {
                alert("Sorry Medicine Name and Generic Number and Box Qty Can not be empty.");
                return false;
            }

            $.ajax({
                type: "POST",
                "_token": "{{ csrf_token() }}",
                url: '{{route('Purchase.medicine.store')}}',
                data: {
                    "medicine_name": medicine_name,
                    "created_by": created_by,
                    "medicine_form": medicine_form,
                    "company_id": company_id,
                    "purchases_price": purchases_price,
                    "min_stock": min_stock,
                    "generic_id": generic_id,
                    "medicine_strength": medicine_strength,
                    "rack_id": rack_id,
                    "sale_price": sale_price,
                    "opening_stock": opening_stock
                },

                success: function(successData) {
                    if (successData != "") {
                        alert(successData);
                        $('#addMedicine').modal('hide');
                    }
                }
            });
        });
    });
</script>
