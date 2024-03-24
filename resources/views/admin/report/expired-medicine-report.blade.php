@extends('admin.layouts.master')
@section('title', 'Expired-medicine-report')

@section('content')

    <section class="content-header">
        <h1>
            Expire Medicine Report
            <small> Expire Medicine Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Expire Medicine Report</a></li>
            <li class="active"> Expire Medicine Report</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Expire Medicine Report</h3>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="">
                            <input type="date" name="from_date" id="from_date" value="2024-03-01" style="width: 200px;">
                            <input type="date" name="to_date" id="to_date" value="2024-03-21" style="width: 200px;">
                        </form>
                    </div>
                    <!-- /.box-header -->
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
                                        <th  style="width: 100px" class="text-center">Status</th>
                                        <th  style="width: 100px" class="text-center">Expire Date</th>
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
        var dataTable = $('#example').DataTable({
            "processing": true,
            "serverSide": true,
            "ajax": {
                url: "getMedicineStockExp",
                type: "post"
            },
            dom: 'lBfrtip',
            "lengthMenu": [[50, 75, 100, -1], [50, 75, 100, "All"]],
            buttons: [
                'excel', 'pdf', 'print'
            ]
        });
    });


     $('body').on("change","#to_date", function(){

              var to_date = $(this).val();
              var from_date =  $('#from_date').val();

              $("#example").dataTable().fnDestroy();
              var dataTable = $('#example').DataTable({
                  "processing": true,
                  "serverSide": true,
                  "order" : [],
                  "ajax":{
                      url : "get-expire-medi-date",
                      type: "POST",
                      data: { to_date: to_date,from_date: from_date}
                  },
                   dom: 'lBfrtip',
                   "lengthMenu": [[50, 75, 100, -1], [50, 75, 100, "All"]],
                   buttons: [
                       'excel', 'pdf', 'print'
                   ]
              });
         });

</script>
@endpush

@endsection
