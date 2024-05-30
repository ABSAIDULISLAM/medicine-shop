@extends('admin.layouts.master')

@section('title', 'Sales-list')

@section('content')

    <section class="content-header">
        <h1>
            Sales List
            <small> Sales List</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Sales List</a></li>
            <li class="active"> Sales List</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Sales List</h3>
                        <div class="box-tools pull-right">
                            <a href="{{ route('Sales.create') }}"><button type="button" class="btn bg-navy btn-flat">Add
                                    New</button></a>
                        </div>
                    </div>
                    <div align="right" style="margin-right: 10px;margin-top: 10px;">
                        <form method="post" action="sales-list">
                            From : <input style="height: 27px;margin-top: 2px;" type="date" name="from_date"
                                value="2024-03-21">
                            &nbsp;To : <input style="height: 27px;margin-top: 2px;" type="date" name="to_date"
                                value="2024-03-21">
                            &nbsp;<input style="height: 27px;margin-top: 2px;" type="text" name="invoice_number"
                                placeholder=" Invoice Number" />
                            <input type="submit" name="search_btn" value="Search">
                        </form>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div id="loadingSpinner" style="display: none;" class="text-center m-auto">
                            <img src="{{ asset('backend/assets/spinner.gif') }}" alt="Loading...">
                        </div>
                        <div class="table-responsive">
                            <table id="example1" class="table table-bordered table-striped">
                                <thead>
                                    <tr style="background-color: #14A586;color: #fff;">
                                        <th class="text-center">SL</th>
                                        <th class="text-left">Customer Name</th>
                                        <th class="text-left">Memo No</th>
                                        <th class="text-center">Date</th>
                                        <th class="text-left">Total Amount</th>
                                        <th class="text-center">Cash Received</th>
                                        <th class="text-center">Due</th>
                                        <th class="text-center" style="width: 120px">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @php
                                        $total = 0;
                                        $totalDue = 0;
                                        $totalCash = 0;
                                    @endphp
                                    @forelse ($data as $item)
                                        @php
                                            $total += $item->total_amount;
                                            $totalCash += $item->cash_paid;
                                            $totalDue += $item->due_amount;
                                        @endphp
                                        <tr>
                                            <td>{{$loop->index + 1}}</td>
                                            <td>{{$item->customer->company_name}}</td>
                                            <td>
                                                <a href="{{route('Sales.invoice.print', ['id' => Crypt::encrypt($item->id)])}}">
                                                    {{$item->invoice_number}}
                                                </a>
                                            </td>
                                            <td>{{$item->date}}</td>
                                            <td class="text-right">{{$item->total_amount}}</td>
                                            <td class="text-right">{{$item->cash_paid}}</td>
                                            <td class="text-right">{{$item->due_amount}}</td>
                                            <td>
                                                <a href="{{ route('Sales.invoice.print', ['id' => Crypt::encrypt($item->id)]) }}" class="btn btn-primary btn-sm">
                                                    <i class="fa fa-print" style="color: #fff"></i>
                                                </a>
                                                <a href="{{ route('Sales.edit', ['id' => Crypt::encrypt($item->id)]) }}" class="btn btn-success btn-sm">
                                                    <i class="fa fa-pencil" style="color: #fff"></i>
                                                </a>
                                                <a href="{{ route('Sales.delete', ['id' => Crypt::encrypt($item->id)]) }}" class="btn btn-danger btn-sm" onclick="return confirm('are you sure to delete this item ? before delete this item think one more time again')">
                                                    <i class="fa fa-trash-o" style="color: #fff"></i>
                                                </a>
                                                <a href="{{ route('Sales.return.form', ['id' => Crypt::encrypt($item->id)]) }}" class="btn btn-warning btn-sm">
                                                    <i class="fa fa-upload" style="color: #fff"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @empty
                                        <tr>
                                            <td colspan="8" class="text-center">No Record Found</td>
                                        </tr>
                                    @endforelse
                                </tbody>
                                <tfoot>
                                    <tr>
                                        <th colspan="4">Total</th>
                                        <th class="text-right">{{$total}}</th>
                                        <th class="text-right">{{$totalCash}}</th>
                                        <th class="text-right">{{$totalDue}}</th>
                                        <th></th>
                                    </tr>
                                </tfoot>
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
            window.onload = function() {

                document.getElementById('loader_container').style.display = 'block';
                setTimeout(function() {
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
                    if (typeof(e.dataSeries.visible) === "undefined" || e.dataSeries.visible) {
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

            $(function() {
                //Initialize Select2 Elements
                $('.select2').select2()

                //Datemask dd/mm/yyyy
                $('#datemask').inputmask('dd/mm/yyyy', {
                    'placeholder': 'dd/mm/yyyy'
                })
                //Datemask2 mm/dd/yyyy
                $('#datemask2').inputmask('mm/dd/yyyy', {
                    'placeholder': 'mm/dd/yyyy'
                })
                //Money Euro
                $('[data-mask]').inputmask()

                //Date range picker
                $('#reservation').daterangepicker()
                //Date range picker with time picker
                $('#reservationtime').daterangepicker({
                    timePicker: true,
                    timePickerIncrement: 30,
                    locale: {
                        format: 'MM/DD/YYYY hh:mm A'
                    }
                })
                //Date range as a button
                $('#daterange-btn').daterangepicker({
                        ranges: {
                            'Today': [moment(), moment()],
                            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
                            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
                            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
                            'This Month': [moment().startOf('month'), moment().endOf('month')],
                            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                                'month').endOf('month')]
                        },
                        startDate: moment().subtract(29, 'days'),
                        endDate: moment()
                    },
                    function(start, end) {
                        $('#daterange-btn span').html(start.format('MMMM D, YYYY') + ' - ' + end.format(
                            'MMMM D, YYYY'))
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
            })
            $(function() {
                $('#example1').DataTable()
                $('#example2').DataTable({
                    'paging': true,
                    'lengthChange': false,
                    'searching': true,
                    'ordering': true,
                    'info': true,
                    'autoWidth': false
                })
            })

            $(document).ready(function() {
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

            window.onload = function() {

                var chart = new CanvasJS.Chart("chartContainer", {
                    theme: "light1", // "light2", "dark1", "dark2"
                    animationEnabled: false, // change to true
                    title: {
                        text: "Monthly Sales History"
                    },
                    data: [{
                        // Change type to "bar", "area", "spline", "pie",etc.
                        type: "column",
                        dataPoints: [{
                                label: "Mar 2024",
                                y: 10.00
                            },
                            {
                                label: "Feb 2024",
                                y: 0.00
                            },
                            {
                                label: "Jan 2024",
                                y: 0.00
                            },
                            {
                                label: "Dec 2023",
                                y: 352.00
                            },
                            {
                                label: "Nov 2023",
                                y: 0.00
                            },
                            {
                                label: "Oct 2023",
                                y: 78.00
                            },
                            {
                                label: "Sep 2023",
                                y: 1221.00
                            },
                            {
                                label: "Aug 2023",
                                y: 0.00
                            },
                            {
                                label: "Jul 2023",
                                y: 890.00
                            },
                            {
                                label: "Jun 2023",
                                y: 0.00
                            },
                            {
                                label: "May 2023",
                                y: 137.00
                            },
                            {
                                label: "Apr 2023",
                                y: 32.00
                            },
                            {
                                label: "Mar 2023",
                                y: 72.00
                            },
                            {
                                label: "Feb 2023",
                                y: 0.00
                            },
                            {
                                label: "Jan 2023",
                                y: 0.00
                            },
                            {
                                label: "Dec 2022",
                                y: 0.00
                            },
                            {
                                label: "Nov 2022",
                                y: 0.00
                            },
                            {
                                label: "Oct 2022",
                                y: 0.00
                            }
                        ]
                    }]
                });
                chart.render();

            }
        </script>
    @endpush

@endsection
