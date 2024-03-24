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
                    <!-- form start -->
                    <form method="POST" action="">
                        <div class="box-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medicine_name">Medicine Name <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-medkit"></i></span>
                                            <input type="text" name="medicine_name" id="medicine_name"
                                                class="form-control" placeholder="Medicine Name" autocomplete="off"
                                                required="">
                                            <input type="hidden" name="created_by" class="form-control" vavalue="17"
                                                autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="purchases_price">Purchases Prices <span style="color: red">
                                                *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="purchases_price" id="purchases_price"
                                                class="form-control" placeholder="Purchases Prices" autocomplete="off"
                                                required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="company_id">Company Name <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="company_id" id="company_id"
                                                class="company_id form-control"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="indication">Indication</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <textarea name="indication" id="indication" cols="5" rows="5" class="form-control" placeholder="Indication"
                                                autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="generic_id">Generic Name <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="generic_id" id="generic_id"
                                                class="generic_id form-control"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="sale_price">Sales Price <span style="color: red"> *</span></label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-address-card"></i></span>
                                            <input type="text" name="sale_price" id="sale_price" class="form-control"
                                                placeholder=" Sales Price" autocomplete="off" required="">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="rack_id">Rack Number</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="rack_id" id="rack_id" class="rack_id form-control"></select>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="side_effect">Side Effect</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <textarea name="side_effect" id="side_effect" cols="5" rows="5" class="form-control"
                                                placeholder="Side Effect" autocomplete="off"></textarea>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="form-group">
                                        <label for="medicine_form">Medicine Form</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <select name="medicine_form" id="medicine_form"
                                                class="medicine_form form-control"></select>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label for="medicine_strength">Strength </label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="medicine_strength" id="medicine_strength"
                                                class="form-control" placeholder="Strength" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="min_stock">Minimum Stock</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-money"></i></span>
                                            <input type="text" name="min_stock" id="min_stock" class="form-control"
                                                placeholder="Minimum Stock" autocomplete="off">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="administration">Administration</label>
                                        <div class="input-group">
                                            <span class="input-group-addon"><i class="fa fa-text-width"></i></span>
                                            <textarea name="administration" id="administration" cols="5" rows="5" class="form-control"
                                                placeholder="Administration" autocomplete="off"></textarea>
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

    <script>
        window.onload = function () {

          document.getElementById('loader_container').style.display = 'block';
          setTimeout(function () {
            document.getElementById('loader_container').style.display = 'none';
          }, 600);

          var chart = new CanvasJS.Chart("chartContainer", {
            animationEnabled: true,
            theme: "light2",
            title: {
              text: "Monthly collection and Due rate against sales."
            },
            axisY: {
              includeZero: true
            },
            legend: {
              cursor: "pointer",
              verticalAlign: "center",
              horizontalAlign: "right",
              itemclick: toggleDataSeries
            },
            data: [{
              type: "column",
              name: "Due Amount",
              indexLabel: "{y}",
              yValueFormatString: "#0.00'%'##",
              showInLegend: true,
              dataPoints: null
            }, {
              type: "column",
              name: "Collection Amount",
              indexLabel: "{y}",
              yValueFormatString: "#0.00'%'##",
              showInLegend: true,
              dataPoints: null
            }]
          });
          chart.render();
          function toggleDataSeries(e) {
            if (typeof (e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
              e.dataSeries.visible = false;
            } else {
              e.dataSeries.visible = true;
            }
            chart.render();
          }

        }
    </script>
    <script>

        function checkDelete() {
          var res = confirm("Are you Sure to delete it ? ");
          if (res) {
            return true;
          } else {
            return false;
          }
        }

        function checkApproval() {
          var res = confirm("Are you Sure to Approved it ? ");
          if (res) {
            return true;
          } else {
            return false;
          }
        }

        $(function () {
          //Initialize Select2 Elements
          $('.select2').select2()

          //Datemask dd/mm/yyyy
          $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
          //Datemask2 mm/dd/yyyy
          $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
          //Money Euro
          $('[data-mask]').inputmask()

          //Date range picker
          $('#reservation').daterangepicker()
          //Date range picker with time picker
          $('#reservationtime').daterangepicker({ timePicker: true, timePickerIncrement: 30, locale: { format: 'MM/DD/YYYY hh:mm A' } })
          //Date range as a button
          $('#daterange-btn').daterangepicker(
            {
              ranges: {
                'Today': [moment(), moment()],
                'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                'This Month': [moment().startOf('month'), moment().endOf('month')],
                'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
              },
              startDate: moment().subtract(29, 'days'),
              endDate: moment()
            },
            function (start, end) {
              $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
            }
          )

          //Date picker
          $('#datepicker').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            //            daysOfWeekDisabled: '0,6',
            todayHighlight: true,
            orientation: 'auto',
          })
          $('#datepicker1').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            //            daysOfWeekDisabled: '0,6',
            todayHighlight: true,
            orientation: 'auto'
          })
          $('#datepicker2').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            orientation: 'auto'
          })
          $('#datepicker3').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            orientation: 'auto'
          })

          $('#datepicker4').datepicker({
            autoclose: true,
            format: 'yyyy-mm-dd',
            todayHighlight: true,
            orientation: 'auto'
          })


          var date = new Date();
          var firstDay = new Date(date.getFullYear(), date.getMonth(), 1);

          $("#datepicker").datepicker("setDate", new Date());
          $("#datepicker1").datepicker("setDate", new Date());
          $("#datepicker2").datepicker("setDate", new Date());
          $("#datepicker3").datepicker("setDate", new Date());
          $("#datepicker4").datepicker("setDate", firstDay);

          //iCheck for checkbox and radio inputs
          $('input[type="checkbox"].minimal, input[type="radio"].minimal').iCheck({
            checkboxClass: 'icheckbox_minimal-blue',
            radioClass: 'iradio_minimal-blue'
          })
          //Red color scheme for iCheck
          $('input[type="checkbox"].minimal-red, input[type="radio"].minimal-red').iCheck({
            checkboxClass: 'icheckbox_minimal-red',
            radioClass: 'iradio_minimal-red'
          })
          //Flat red color scheme for iCheck
          $('input[type="checkbox"].flat-red, input[type="radio"].flat-red').iCheck({
            checkboxClass: 'icheckbox_flat-green',
            radioClass: 'iradio_flat-green'
          })

          //Colorpicker
          $('.my-colorpicker1').colorpicker()
          //color picker with addon
          $('.my-colorpicker2').colorpicker()

          //Timepicker
          $('.timepicker').timepicker({
            showInputs: false
          })
        }
        )
        $(function () {
          $('#example1').DataTable()
          $('#example2').DataTable({
            'paging': true,
            'lengthChange': false,
            'searching': false,
            'ordering': true,
            'info': true,
            'autoWidth': false
          })
        })

        $(document).ready(function () {
          ShowTime();
        });
        function ShowTime() {
          var dt = new Date();
          document.getElementById("lblTime").innerHTML = dt.toLocaleTimeString();
          window.setTimeout("ShowTime()", 1000); // Here 1000(milliseconds) means one 1 Sec
        }

        function PopWindow(url, win) {
          var ptr = window.open(url, win,
            'width=850,height=500,top=100,left=250');
          return false;
        }

        window.onload = function () {
          var chart = new CanvasJS.Chart("chartContainer", {
            theme: "light1", // "light2", "dark1", "dark2"
            animationEnabled: false, // change to true
            title: {
              text: "Monthly Sales History"
            },
            data: [
              {
                // Change type to "bar", "area", "spline", "pie",etc.
                type: "column",
                dataPoints: [
                  { label: "Mar 2024", y: 10.00 },
                  { label: "Feb 2024", y: 0.00 },
                  { label: "Jan 2024", y: 0.00 },
                  { label: "Dec 2023", y: 352.00 },
                  { label: "Nov 2023", y: 0.00 },
                  { label: "Oct 2023", y: 78.00 },
                  { label: "Sep 2023", y: 1221.00 },
                  { label: "Aug 2023", y: 0.00 },
                  { label: "Jul 2023", y: 890.00 },
                  { label: "Jun 2023", y: 0.00 },
                  { label: "May 2023", y: 137.00 },
                  { label: "Apr 2023", y: 32.00 },
                  { label: "Mar 2023", y: 72.00 },
                  { label: "Feb 2023", y: 0.00 },
                  { label: "Jan 2023", y: 0.00 },
                  { label: "Dec 2022", y: 0.00 },
                  { label: "Nov 2022", y: 0.00 },
                  { label: "Oct 2022", y: 0.00 }
                ]
              }
            ]
          });
          chart.render();
        }
    </script>
    <script>
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


        $(document).ready(function () {
          $('.generic_id').select2({
            minimumInputLength: 2,
            allowClear: true,
            placeholder: 'Please Enter Name',
            ajax: {
              url: 'ajax-response',
              dataType: 'json',
              delay: 250,
              data: function (data) {
                return {
                  searchGeneric: data.term // search term
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

        $(document).ready(function () {
          $('.rack_id').select2({
            minimumInputLength: 2,
            allowClear: true,
            placeholder: 'Please Enter Name',
            ajax: {
              url: 'ajax-response',
              dataType: 'json',
              delay: 250,
              data: function (data) {
                return {
                  searchRack: data.term // search term
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

        $(document).ready(function () {
          $('.medicine_form').select2({
            minimumInputLength: 2,
            allowClear: true,
            placeholder: 'Please Enter Name',
            ajax: {
              url: 'ajax-response',
              dataType: 'json',
              delay: 250,
              data: function (data) {
                return {
                  searchMedicineForm: data.term // search term
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
    </script>

    @endpush


@endsection
