@extends('admin.layouts.master')

@section('title', 'add-stock')

@section('content')

    <section class="content-header">
        <h1>
            Add Stock Matching
            <small>Add Stock Matching</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Stock Matching</a></li>
            <li class="active">Add Stock Matching</li>
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
                        <h3 class="box-title">Add Stock Matching</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <!-- /.box-header -->
                    <!-- form start -->
                    <form method="POST" action="">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="memo_no">Invoice Number <span style="color: red">*</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="invoice_number" id="invoice_number" class="form-control" value="634895" autocomplete="off" required="" readonly="">
                                            <input type="hidden" name="challan_no" id="challan" class="form-control" value="" autocomplete="off" required="">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="remarks">Remarks</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="remarks" id="remarks" class="form-control" placeholder="Remarks" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="datepicker">Date </label>
                                        <div class="input-group date">
                                            <div class="input-group-addon">
                                                <i class="fa fa-calendar"></i>
                                            </div>
                                            <input type="text" name="date" class="form-control pull-right" id="datepicker" autocomplete="off">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="lname">Product Name<span style="color: red"> *</span></label>
                                        <div align="center">
                                            <input type="text" name="search" id="tags" accesskey="A" class="form-control" placeholder="Enter Product Name / Product Code" autofocus="autofocus" autocomplete="off"/>
                                        </div>
                                    </div>
                                    <div style="overflow-x:auto;">
                                        <table class="table tbl table-bordered table-striped table-hover" style="margin-top: 25px;">
                                            <thead>
                                                <tr style="background-color:#2E4D62 ;color: #fff;">
                                                    <th style='width: 10px;'>SL</th>
                                                    <th style='width: 150px;'>Product Name</th>
                                                    <th style='width: 100px;'>Add Qty</th>
                                                    <th style='width: 100px;'>Minus Qty</th>
                                                    <th style='width: 100px;'>Cost Price</th>
                                                    <th style='width: 100px;'>Sales Price</th>
                                                    <th style='width: 100px;'>inStock</th>
                                                    <th style='width: 70px;'>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody id="tbody">

                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.box-body -->
                        <div class="box-footer text-center">
                            <button type="submit" name="saveBtn" class="btn btn-primary">Submit</button>
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


@push('js')
<script>
    $(document).ready(function () {
        // button type change to 'submit' if data submit
        $("#btnSubmitInvoice").click(function (event) {
            if ($('#tbody').find('tr').length > 0) {
                $('#btnSubmitInvoice').attr("type", "submit");
            }
        });
        // fetch data and show as autocompleter

        $("#tags").autocomplete({
            minLength: 2,
            source: function(req, resp){
                    $.ajax({
                        type: "POST",
                        url: 'ajax-response',
                        data: {request: 'fetchSimilarData', pursearchQuery: req.term},
                        success: function(d){
                            resp(d);
                        }
                    });
                },
            select: function( event, ui ) {
                if (ui.item != undefined)
                {
                    addItemDetailsAsTableRow(ui.item.value);
                }
                return false;
            }
        });

        // append row after select from autoCompleter
        $("#tags").keypress(function (event) {
            if (event.keyCode == 13) {
                var productName = $(this).val();
                addItemDetailsAsTableRow(productName);
            }
        });

        function addItemDetailsAsTableRow(productName) {

            // alert(productName);

            if (productName != '') {
                $.ajax({
                    type: "POST",
                    data: {request: 'fetchSingleProductData', matchingProductName: productName},
                    url: 'ajax-response',
                    dataType: 'text',
                    success: function (response) {
                        console.log(response);
                        if (response != '') {
                            var array = [];
                            var responseObject = JSON.parse(response);
                            if (responseObject != '') {
                                var alreadyListed = 0;
                                $('#tbody .productId').each(function () {
                                    if (this.value == responseObject.id) {
                                        alreadyListed++;
                                    }
                                });
                                if (alreadyListed > 0) {
                                    alert(responseObject.product_name + ' - already listed.');
                                    return flase;
                                } else {
                                    addTableRow(responseObject);
                                    $('#tags').val('');
                                    calculateTotalAmount();
                                    calculateTotalCostAmount();
                                }
                            }
                        }
                    }
                });
            }
        }

        //========= add table row ===================================
        var rowIdx = 0;

        function addTableRow(responseObject) {
            // Adding a row inside the tbody.
            $('#tbody').append(`<tr id="R${++rowIdx}">
                <td class="row-index text-center" style="width: 10px"><p>${rowIdx}</p></td>
                <td class="text-left" style="width: 150px;">` + responseObject.medicine_name + ` <br> ` + responseObject.generic_name + ` <input type="hidden" name="medicine_id[]" value="` + responseObject.id + `" class="productId"></td>
                <td class="text-center" style="width: 70px;"><input type="text" value="0" name="add_qty[]" class="form-control add_qty" style="width:100%;" autocomplete="off"></td>
                <td class="text-center" style="width: 70px;"><input type="text" value="0" name="minus_qty[]" class="form-control minus_qty" style="width:100%;" autocomplete="off"></td>
                <td class="text-right" style="width: 100px;"><input type="text" value="` + responseObject.cost_price + `" name="cost_price[]" class="form-control cost_price" style="width:100%;text-align: center" autocomplete="off" ></td>
                <td class="text-right" style="width: 100px;"><input type="text" value="` + responseObject.sales_price + `" name="sales_price[]" class="form-control sales_price" style="width:100%;text-align: center" autocomplete="off"></td>
                <td class="text-right" style="width: 100px;">
                    <input type="text" value="` + responseObject.preStock + `" name="inStock[]" class="form-control inStock" style="width:100%;text-align: center" autocomplete="off" readonly="">
                    <input type="hidden" value="` + responseObject.preStock + `" name="currStock[]" class="form-control currStock" style="width:100%;text-align: center" autocomplete="off" readonly="">
                </td>
                <td class="text-center" style="width: 50px;">
                    <button class="btn btn-danger remove" tabindex="1" type="button"><i class="fa fa-times" aria-hidden="true"></i></button>
                </td>
            </tr>`);
        }

        // ========= Remove table row ===============
        $('#tbody').on('click', '.remove', function () {
            var child = $(this).closest('tr').nextAll();
            child.each(function () {
                var id = $(this).attr('id');
                var idx = $(this).children('.row-index').children('p');
                var dig = parseInt(id.substring(1));
                idx.html(`${dig - 1}`);
                $(this).attr('id', `R${dig - 1}`);
            });
            $(this).closest('tr').remove();
            rowIdx--;
        });

        // ###--Quantity Toggle Function End--###
        $(document).on('keyup', '.add_qty', function () {
            var tID = $(this).closest('tr').attr('id');
            var add_qty = $(this).val();

            var currStock = $('#' + tID + ' .currStock').val();
            var minus_qty = $('#' + tID + ' .minus_qty').val();

            var stock = Number(currStock) + Number(add_qty);
            var currStock = Number(stock) - Number(minus_qty);

            $('#' + tID + ' .inStock').val(currStock);
        });
        //###--Payment Calculation Function Start--###

        // ###--Quantity Toggle Function End--###
        $(document).on('keyup', '.minus_qty', function () {
            var tID = $(this).closest('tr').attr('id');
            var minus_qty = $(this).val();

            var currStock = $('#' + tID + ' .currStock').val();
            var add_qty = $('#' + tID + ' .add_qty').val();

            var stock = Number(currStock) + Number(add_qty);
            var currStock = Number(stock) - Number(minus_qty);

            $('#' + tID + ' .inStock').val(currStock);
        });
        //###--Payment Calculation Function Start--###


    });
</script>
@endpush

@endsection
