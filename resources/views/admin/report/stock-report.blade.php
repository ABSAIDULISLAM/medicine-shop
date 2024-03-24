@extends('admin.layouts.master')
@section('title', 'Stock-report')

@section('content')


    <section class="content-header">
        <h1>
            Stock List
            <small> Stock List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Stock List</a></li>
            <li class="active"> Stock List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Stock List</h3>
                    </div>
                    <!-- /.box-header -->
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="">
                            <div class="form-group">
                                <label for="company_id">Company Name <span style="color: red"> *</span></label>
                                <select name="company_id" id="company_id" class="company_id form-control" style="width: 200px"></select>
                            </div>
                        </form>
                    </div>
                    <div class="box-body">
                        <div class="table-responsive">
                            <table id="example" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th  style="width: 10px" class="text-center">SL</th>
                                        <th  style="width: 80px" class="text-center">Medi.Name</th>
                                        <th  style="width: 80px" class="text-center">Generic</th>
                                        <th  style="width: 120px" class="text-center">Company</th>
                                        <th  style="width: 120px" class="text-center">Medicine Form</th>
                                        <th  style="width: 150px" class="text-center">Strength</th>
                                        <th  style="width: 100px" class="text-right">Cost Price</th>
                                        <th  style="width: 80px" class="text-center">Sales Price</th>
                                        <th  style="width: 100px" class="text-center">Current Stock</th>
                                        <th  style="width: 100px" class="text-center">Stock Amount</th>
                                    </tr>
                                </thead>
                                <tbody>

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


@push('js')
<script>

    $(document).ready(function () {

        $('#example').dataTable(
            {
                "pagingType": "simple_numbers",
                "responsive": true,
                "language": {
                    "emptyTable": "<h2 style='text-align:center;color:#ff5b5b;'>No Users found!!!</h2>",
                    "zeroRecords": "<h2 style='text-align:center;color:#ff5b5b;'>No Users records found</h2>"
                },
                "xhrFields": {withCredentials: true},
                "bProcessing": true,
                "sAjaxSource": "get-medicine-stock",
                "bPaginate": true,
                "sPaginationType": "full_numbers",
                "iDisplayLength": 50,
                "dom": 'lBfrtip',
                "buttons": [
                      'excel', 'pdf', 'print'
                  ],
                "aoColumns": [
                    {mData: 'sl'},
                    {mData: 'medicine_name'},
                    {mData: 'generic_name'},
                    {mData: 'company_name'},
                    {mData: 'medicine_form'},
                    {mData: 'medicine_strength'},
                    {mData: 'purchases_price'},
                    {mData: 'sale_price'},
                    {mData: 'currStock'},
                    {mData: 'stockAmount'}
                ]
            }
        );
    });

    $(document).ready(function () {
        $('.company_id').select2({
            minimumInputLength: 2,
            allowClear: true,
            placeholder: 'Please Enter Name',
            ajax: {
                url: 'ajax-response',
                dataType: 'json',
                delay: 250,
                data: function (data) {
                    return {
                        searchCompany: data.term // search term
                    };
                },
                processResults: function (response) {
                    return {
                        results: response
                    };
                },
                cache: true
            }
        });
    });


  $(document).ready(function(){
     $('body').on("change","#company_id", function(){
          var com_id = $(this).val();

          $('#example').dataTable(
            {
            "bDestroy": true,
            "pagingType": "simple_numbers",
            "responsive": true,
            "language": {
                "emptyTable": "<h2 style='text-align:center;color:#ff5b5b;'>No Users found!!!</h2>",
                "zeroRecords": "<h2 style='text-align:center;color:#ff5b5b;'>No Users records found</h2>"
            },
            "xhrFields": {withCredentials: true},
            "bProcessing": true,
            "ajax":{
                "dataType": 'json',
                "type": "POST",
                "url": "get-stock-by-com",
                "data": {
                    "com_id": com_id
                }
            },
            "bPaginate": true,
            "sPaginationType": "full_numbers",
            "iDisplayLength": 50,
            "lengthMenu": [[50, 75, 100, -1], [50, 75, 100, "All"]],
            "dom": 'lBfrtip',
            "buttons": [
                  'excel', 'pdf', 'print'
              ],
            "aoColumns": [
                {mData: 'sl'},
                {mData: 'medicine_name'},
                {mData: 'generic_name'},
                {mData: 'company_name'},
                {mData: 'medicine_form'},
                {mData: 'medicine_strength'},
                {mData: 'purchases_price'},
                {mData: 'sale_price'},
                {mData: 'currStock'},
                {mData: 'stockAmount'}
            ]
        }
    );
   });
});


</script>

@endpush

@endsection

