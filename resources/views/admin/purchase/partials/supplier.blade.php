    <div id="addContact" class="modal fade">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" style="background-color: #2E4D62;color: #fff">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title">Add Supplier</h4>
                </div>
                <div class="modal-body">
                    <form method="post" action="" id="contactform">
                        <label>Supplier Name</label>
                        <input type="text" name="company_name" id="company_name" class="form-control"
                            placeholder="Customer Name" autocomplete="off" />
                        <br />
                        <label>Mobile Number</label>
                        <input type="text" name="contact_num" id="contact_num" class="form-control"
                            placeholder="Mobile Number" autocomplete="off" />
                        <input type="hidden" name="created_by" id="created_by" value="{{auth()->user()->id}}"
                            class="form-control" autocomplete="off" />
                        <input type="hidden" name="status" id="status" value="1" class="form-control"
                            autocomplete="off" />
                        <input type="hidden" name="contact_type" id="contact_type" value="2"
                            class="form-control" autocomplete="off" />
                        <br />
                        <label>Address</label>
                        <input type="text" name="address" id="address" class="form-control"
                            placeholder="Address" autocomplete="off" />
                        <br />
                        <input type="button" value="Submit" id="addSupplier" class="btn btn-success pull-right" />
                    </form>
                </div>
                <div class="modal-footer">

                </div>
            </div>
        </div>
    </div>

<script>
    $(document).ready(function() {
        $('#addSupplier').click(function(e) {
            e.preventDefault();

            var company_name = $('#company_name').val();
            var contact_num = $('#contact_num').val();
            var address = $('#address').val();
            var created_by = $('#created_by').val();
            var status = $('#status').val();
            var contact_type = $('#contact_type').val();

            if (created_by == '') {
                alert("Sorry unauthorized access.");
                return false;
            }
            if (company_name == "" || contact_num == "") {
                alert("Sorry Company Name and Contact Number Can't be empty.");
                return false;
            }

            $.ajax({
                type: "POST",
                url: "{{ route('Purchase.supplier.store') }}",
                data: {
                    "_token": "{{ csrf_token() }}",
                    "company_name": company_name,
                    "contact_num": contact_num,
                    "address": address,
                    "created_by": created_by,
                    "status": status,
                    "contact_type": contact_type
                },
                success: function(data) {
                    if (data.success) {
                        alert('Save Successfully.');
                        var option = data.option;
                        var pre_blnc = data.pre_blnc;

                        $('#supplier_id').html(option);
                        $('#previous_dues').val(pre_blnc);
                        $('#addContact').modal('hide');
                    } else {
                        alert('Failed to save data.');
                    }
                },
                error: function(xhr, status, error) {
                    alert('Error occurred while processing the request: ' + error);
                }
            });
        });
    });
</script>

