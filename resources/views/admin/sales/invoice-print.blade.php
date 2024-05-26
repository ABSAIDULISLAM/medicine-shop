@extends('admin.layouts.master')

@section('title', 'Sales-list')

@section('content')

<section class="content-header">
    <h1>
        Sales Invoice
        <small> Sales Invoice</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="{{route('Sales.index')}}">Sales Invoice</a></li>
        <li class="active"> Sales Invoice</li>
    </ol>
</section>
<section class="content">
    <div class="row">
        <div class="col-xs-12">
            <div>
                <div align="right">
                    <button  onclick="window.print();" class="btn btn-danger"><i class="fa fa-print fa-lg"></i>
                            Print</button>
                    {{-- <button class="btn btn-danger" id="printbtn" type="submit" onclick="printDiv('printableArea')">
                        Print </button> --}}
                    <button class="btn btn-primary" id="reloadButton" onclick="myFunction()">Reload page</button>
                </div>
                <script>
                    function myFunction() {
                        location.reload();
                    }
                </script>
            </div>
            <div id="printableArea"
                style="width:300px;margin:auto;height:auto;overflow:hidden;background-color:#FFF;margin-top: -40px">
                <div class="box-body">
                    <div class="col-xs-12">
                        <div align="center">
                            <p style="display:flex;flex-wrap:wrap;justify-content:center;">
                            <h4
                                style="font-size:20px;line-height:32px;font-family:'Poiret One';margin:0;font-weight:700;">
                                <img src="./assets/img/logo.png" alt="logo" style="height: 40px;width: 50px;"></h4>
                            <span style="font-size:11px;font-weight:400;text-align: center"><br /> Contact: <br /> Web:
                            </span>
                            </p>
                            <hr>
                        </div>
                    </div>
                </div>
                <div class="box-body">
                    <div class="col-xs-12" style="float:left;padding-left:0;">
                        <table style="margin:10px 2px 10px;font-size:12px;width:100%;">
                            <tr>
                                <td style="width:80px;">Sold To </td>
                                <td>:{{$data->customer->company_name}}</td>
                            </tr>
                            <tr>
                                <td style="width:80px;">Sold By</td>
                                <td>:Software Solution Company</td>
                            </tr>
                            <tr>
                                <td style="width:80px;">Voucher</td>
                                <td>:{{$data->invoice_number}}</td>
                            </tr>
                            <tr>
                                <td style="width:80px;">Date</td>
                                <td>:{{$data->date}}</td>
                            </tr>
                        </table>
                    </div>

                </div>
                <div class="box-body">
                    <table class="table table-bordered list_table"
                        style="width:100%;border:1px solid #000;font-size: 11px;margin-bottom: 15px" align="center">
                        <thead>
                            <tr style="background-color:#3c8dbc;color:#FFF;height:15px;border:1px solid #000;">
                                <td class="text-center th01"
                                    style="width: 200px;line-height:30px;border:1px solid #000;">Item</td>
                                <td class="text-center th02" style="width:80px;line-height:30px;border:1px solid #000;">
                                    Qty</td>
                                <td class="text-center th03"
                                    style="width:100px;line-height:30px;border:1px solid #000;">Rate</td>
                                <td class="text-center th04"
                                    style="width:100px;line-height:30px;border:1px solid #000;">Taka</td>
                            </tr>
                        </thead>
                        <tbody>
                            @php
                                $total = 0;
                            @endphp
                            @forelse ($data->salesDetails as $item)
                                <tr style="font-size:12px;border:1px solid #000;">
                                    <td class="text-left" style="width: 200px;border:1px solid #000;"> {{$item->medicine_id}} </td>
                                    <td class="text-center qty" style="width:80px;border:1px solid #000;">{{$item->quantity}}</td>
                                    <td class="text-center price" style="width:80px;border:1px solid #000;">{{$item->unit_price}}</td>
                                    <td class="text-right sub_total" style="width:100px;border:1px solid #000;">{{$item->sub_total}}</td>
                                </tr>
                                {{$total += $item->sub_total}}
                            @empty

                            @endforelse

                            <tr style="border:1px solid #000;">
                                <th class="thick-line text-right tf00" colspan="3"
                                    style="font-size:12px;border:1px solid #000;">
                                    <span style="margin-right:10px;">Amount</span>
                                </th>
                                <th class="thick-line text-right tf01"
                                    style="font-size:13px;font-weight:600;border:1px solid #000;">
                                    {{$total}}</th>
                            </tr>
                            <tr style="border:1px solid #000;">
                                <th class="thick-line text-right tf00" colspan="3"
                                    style="font-size:12px;border:1px solid #000;">
                                    <span style="margin-right:10px;">Discount</span>
                                </th>
                                <th class="thick-line text-right tf01"
                                    style="font-size:13px;font-weight:600;border:1px solid #000;">
                                    {{$data->discount_amount}} </th>
                            </tr>
                            <tr style="border:1px solid #000;">
                                <th class="thick-line text-right tf00" colspan="3"
                                    style="font-size:12px;border:1px solid #000;">
                                    <span style="margin-right:10px;">Net Amount</span>
                                </th>
                                <th class="thick-line text-right tf01"
                                    style="font-size:13px;font-weight:600;border:1px solid #000;">
                                    {{$data->total_amount}} </th>
                            </tr>
                            <tr style="border:1px solid #000;">
                                <th class="thick-line text-right tf00" colspan="3"
                                    style="font-size:12px;border:1px solid #000;">
                                    <span style="margin-right:10px;">Due Amount</span>
                                </th>
                                <th class="thick-line text-right tf01"
                                    style="font-size:12px;font-weight:600;border:1px solid #000;">
                                    {{$data->due_amount}} </th>
                            </tr>
                            <tr style="border:1px solid #000;">
                                <th class="thick-line text-right tf00" colspan="3"
                                    style="font-size:12px;border:1px solid #000;">
                                    <span style="margin-right:10px;">Paid Amount</span>
                                </th>
                                <th class="thick-line text-right tf01"
                                    style="font-size:12px;font-weight:600;border:1px solid #000;">
                                    {{$data->cash_paid}} </th>
                            </tr>

                        </tbody>
                    </table>
                    <span style="font-weight: bold;margin-top: 10px;font-size: 11px">In Word : {{ convertToWords($data->cash_paid)}}.</span>
                </div>
                <!-- /.box-body -->
                <div class="box-body">
                    <div class="col-md-11" style="margin-top: 15px">
                        <span style="font-weight: bold;">N.B:</span><br>
                        <span style="font-size: 12px">1. Please Check & verify your items, expire date , & balance cash
                            before leaving the counter. Any later claim will not be acceptable.</span><br>
                        <span style="font-size: 12px">2. Damaged or loose tablet and capsules, fridge & consumer items,
                            Test strips are neighter returnable or exchangeable.</span><br>
                        <span style="font-size: 12px">3. Items can be returned only with orginal invoice, within 7
                            days.</span><br><br>
                    </div>
                    <div align="center">
                        <span style="font-weight: bold;justify-content:center">*** Thanks.wish your good health.
                            ***</span>
                    </div>
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->
</section>
<!-- /.content -->
</div>


@endsection

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
            'searching': false,
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
                        label: "May 2024",
                        y: 5439.00
                    },
                    {
                        label: "Apr 2024",
                        y: 90.00
                    },
                    {
                        label: "Mar 2024",
                        y: 230.00
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
                    }
                ]
            }]
        });
        chart.render();

    }
</script>

<script>
    function printDiv(divName) {
        var divToPrint = document.getElementById(divName);
        var htmlToPrint = '' +
            '<style type="text/css">*{font-family: Arial, Helvetica, sans-serif;}' +
            'table{border-collapse:collapse;} .list_table thead tr{height:30px;}.list_table thead tr td{font-weight:600;line-height:20px;font-size:10px;border:1px solid #000;color:#000;}' +
            '.list_table tbody tr td,.list_table tfoot tr td{font-size:10px;border:1px solid #000;padding:0 3px;color:#000;line-height:22px;}' +
            '.sub_total {text-align:right}' +
            '.qty {text-align:center}' +
            '.price {text-align:center}' +

            '.th00 {text-align:center}' +
            '.th01 {text-align:center}' +
            '.th02 {text-align:center}' +
            '.th03 {text-align:center}' +
            '.th04 {text-align:center}' +

            '.tf00 {text-align:right;line-height:30px;}' +
            '.tf01 {text-align:right;line-height:30px;}' +

            '#extraInfo{position:absolute;bottom:10px;}' +
            '</style>';
        htmlToPrint += divToPrint.outerHTML;
        newWin = window.open("");
        newWin.document.write(htmlToPrint);
        newWin.print();
        newWin.close();
    }
</script>

@endpush

@push('css')
<style>
    @media print {
        body * {
            visibility: hidden;
        }
        #printableArea, #printableArea * {
            visibility: visible;
        }
        #contentToPrint {
            position: absolute;
            top: 0;
            left: 0;
            right: 0;
        }
    }
</style>
@endpush

