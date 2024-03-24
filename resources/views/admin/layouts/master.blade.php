<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="refresh" content="10000;signOut=logout" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>@yield('title')- Medical Shop</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.7 -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/bootstrap/dist/css/bootstrap.min.css')}}">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/font-awesome/css/font-awesome.min.css')}}">
  <!-- Ionicons -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/Ionicons/css/ionicons.min.css')}}">
  <!-- jvectormap -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/jvectormap/jquery-jvectormap.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/datatables.net-bs/css/dataTables.bootstrap.min.css')}}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{asset('backend/assets/dist/css/AdminLTE.min.css')}}">
  <link rel="stylesheet" href="{{asset('backend/assets/dist/css/skins/_all-skins.min.css')}}">
  <!-- daterange picker -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/bootstrap-daterangepicker/daterangepicker.css')}}">
  <!-- bootstrap datepicker -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/bootstrap-datepicker/dist/css/bootstrap-datepicker.min.css')}}">
  <!-- iCheck for checkboxes and radio inputs -->
  <link rel="stylesheet" href="{{asset('backend/assets/plugins/iCheck/all.css')}}">
  <!-- Bootstrap Color Picker -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/bootstrap-colorpicker/dist/css/bootstrap-colorpicker.min.css')}}">
  <!-- Bootstrap time Picker -->
  <link rel="stylesheet" href="{{asset('backend/assets/plugins/timepicker/bootstrap-timepicker.min.css')}}">
  <!-- Select2 -->
  <link rel="stylesheet" href="{{asset('backend/assets/bower_components/select2/dist/css/select2.min.css')}}">
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <link rel="stylesheet" href="cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
  <script src="{{asset('backend/assets/bower_components/jquery/dist/jquery.min.js')}}"></script>
  <link rel="shortcut icon" type="image/x-icon" href="{{asset('backend/favicon.ico')}}">
  <link rel="manifest" href="/site.webmanifest">
  <link rel="stylesheet"
    href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">

  <link href="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.12.1/themes/base/jquery-ui.min.css" rel="stylesheet"
    type="text/css" />
  <script src="//code.jquery.com/ui/1.12.1/jquery-ui.js"></script>

  @stack('css')

</head>


<body class="hold-transition skin-blue sidebar-mini" style="background-color: #008548">
  <div class="wrapper">

    {{-- Header  --}}
    @includeIf('admin.layouts.partials.topbar')

    {{-- Side nav  --}}
    @includeIf('admin.layouts.partials.sidenav')

    <div class="content-wrapper">

        @yield('content')

    </div>

    <!-- /.content-wrapper -->
    <script>
      $(document).ready(function () {
        var dash = "1";
        $.ajax({
          type: "POST",
          url: 'get-dash',
          data: { 'dashboard': dash },
          success: function (data) {
            data = JSON.parse(data)
            console.log(data);
            var cash_amount = data.cash_amount;
            var bank_amount = data.bank_amount;
            var total_liabilities = data.total_liabilities;
            var monthly_sales = data.monthly_sales;
            var monthly_collection = data.monthly_collection;
            var daily_sales = data.daily_sales;
            var daily_collection = data.daily_collection;
            var monthly_expense = data.monthly_expense;
            var daily_purchases = data.daily_purchases;
            var monthly_purchases = data.monthly_purchases;
            var monthly_payment = data.monthly_payment;
            var daily_payment = data.daily_payment;
            var daily_expense = data.daily_expense;
            $('#cash_statement').text(cash_amount);
            $('#bank_statement').text(bank_amount);
            $('#total_liabilities').text(total_liabilities);
            $('#monthly_sales').text(monthly_sales);
            $('#monthly_collection').text(monthly_collection);
            $('#daily_sales').text(daily_sales);
            $('#daily_collection').text(daily_collection);
            $('#monthly_expense').text(monthly_expense);
            $('#daily_purchases').text(daily_purchases);
            $('#monthly_purchases').text(monthly_purchases);
            $('#monthly_payment').text(monthly_payment);
            $('#daily_expense').text(daily_expense);
            $('#daily_payment').text(daily_payment);
          }
        });

      });
    </script>

    @includeIf('admin.layouts.partials.footer')
  </div>
  <!-- Bootstrap 3.3.7 -->
  <script src="{{asset('backend/assets/bower_components/bootstrap/dist/js/bootstrap.min.js')}}"></script>
  <!-- FastClick -->
  <script src="{{asset('backend/assets/bower_components/fastclick/lib/fastclick.js')}}"></script>
  <!-- AdminLTE App -->
  <script src="{{asset('backend/assets/dist/js/adminlte.min.js')}}"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <!-- Sparkline -->

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
  <script src="{{asset('backend/assets/bower_components/jquery-sparkline/dist/jquery.sparkline.min.js')}}"></script>
  <!-- jvectormap  -->
  <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset('backend/assets/bower_components/jquery-slimscroll/jquery.slimscroll.min.js')}}"></script>
  <!-- ChartJS -->
  <script src="{{asset('backend/assets/bower_components/chart.js/Chart.js')}}"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="{{asset('backend/assets/dist/js/pages/dashboard2.js')}}"></script>
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>

  <!-- AdminLTE for demo purposes -->
  <script src="{{asset('backend/assets/dist/js/demo.js')}}"></script>

  <script src="{{asset('backend/assets/bower_components/select2/dist/js/select2.full.min.js')}}"></script>
  <!-- InputMask -->
  <script src="{{asset('backend/assets/plugins/input-mask/jquery.inputmask.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/input-mask/jquery.inputmask.date.extensions.js')}}"></script>
  <script src="{{asset('backend/assets/plugins/input-mask/jquery.inputmask.extensions.js')}}"></script>
  <!-- date-range-picker -->
  <script src="{{asset('backend/assets/bower_components/moment/min/moment.min.js')}}"></script>
  <script src="{{asset('backend/assets/bower_components/bootstrap-daterangepicker/daterangepicker.js')}}"></script>
  <!-- bootstrap datepicker -->
  <script src="{{asset('backend/assets/bower_components/bootstrap-datepicker/dist/js/bootstrap-datepicker.min.js')}}"></script>
  <!-- bootstrap color picker -->
  <script src="{{asset('backend/assets/bower_components/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.min.js')}}"></script>
  <!-- bootstrap time picker -->
  <script src="{{asset('backend/assets/plugins/timepicker/bootstrap-timepicker.min.js')}}"></script>
  <!-- SlimScroll -->
  <script src="{{asset('backend/assets/bower_components/datatables.net/js/jquery.dataTables.min.js')}}"></script>
  <script src="{{asset('backend/assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js')}}"></script>
  <!-- iCheck 1.0.1 -->
  <script src="{{asset('backend/assets/plugins/iCheck/icheck.min.js')}}"></script>
  <link rel="stylesheet" type="text/css" href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.css">
  <script src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
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

  @stack('js')
  
</body>

</html>

