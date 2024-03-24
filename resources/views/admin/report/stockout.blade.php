@extends('admin.layouts.master')
@section('title', 'Stockout')

@section('content')

    <section class="content-header">
        <h1>
            Out Of Stock List
            <small> Out Of Stock List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Out Of Stock List</a></li>
            <li class="active"> Out Of Stock List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Out Of Stock List</h3>
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
                url: "get-medicine-out-stock",
                type: "post"
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
