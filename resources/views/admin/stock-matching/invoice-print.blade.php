<html>

<head>
    <title>Purchases Invoice</title>
    <meta charset="utf-8">
    <meta http-equiv="Expires" content="-1">
    <meta http-equiv="Cache-control" content="no-cache">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('backend/assets/css/customStyle.css') }}">
    <script src="js/main.js"></script>
    <style type="text/css">
        @media print {
            #printbtn {
                display: none;
            }

            #thd {
                font-size: 12px;
            }

            #reloadButton {
                display: none;
            }
        }
    </style>
    <style>
        .footer {
            position: relative;
            right: 0;
            bottom: 0;
            left: 0;
            padding: 1rem;
            background-color: #efefef;
            text-align: center;
        }

        #footer {
            position: relative;
            bottom: 0;
            width: 100%;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 3px;
            line-height: 1.42857143;
        }

        .table {
            width: 100%;
            border: 1px solid #000;
        }

        th,
        td {
            width: 25%;
            text-align: left;
            vertical-align: top;
            border: 1px solid #000;
        }

        .pageFooter {
            position: relative;
            right: 0;
            bottom: 0px;
            left: 0;
            padding: 1rem;
            background-color: #efefef;
            text-align: center;
        }

        #pageFooter {
            position: relative;
            width: 100%;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div align="right">
                <button id ="printbtn" type="button" value="Print this page" onclick="window.print();"><i
                        class="fa fa-print"></i> Print</button>
                <button id ="reloadButton" onclick="myFunction()">Reload page</button>
            </div>
            <script>
                function myFunction() {
                    location.reload();
                }
            </script>
            <div class="row">
                <div class="col-xs-12">
                    <table style="border: none !important;">
                        <tr style="border: none !important;">
                            <td style="width: 20%;border: none !important;padding: 3px !important">Date </td>
                            <td style="width: 80%;border: none !important;padding: 3px !important"> :
                                {{ $data->date }}</td>
                        </tr>
                        <tr style="border: none !important;">
                            <td style="width: 20%;border: none !important;padding: 3px !important">Invoice Number</td>
                            <td style="width: 80%;border: none !important;padding: 3px !important"> :
                                {{ $data->invoice_number }}</td>
                        </tr>
                        <tr style="border: none !important;">
                            <td style="width: 20%;border: none !important;padding: 3px !important">Remarks</td>
                            <td style="width: 80%;border: none !important;padding: 3px !important"> :
                                {{ $data->remarks ?? '' }}</td>
                        </tr>
                        <tr style="border: none !important;">
                            <td style="width: 20%;border: none !important;padding: 3px !important">Full Name</td>
                            <td style="width: 80%;border: none !important;padding: 3px !important"> : Smart Pharma</td>
                        </tr>
                    </table>
                </div>
            </div>
        </div>
        <div class="row" style="margin-top: 25px">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                    <th class="text-center" style="width: 5px;">Sl</th>
                                    <th class="text-left" style="width: 150px">
                                        Medicine Name </th>
                                    <th class="text-center" style="width: 100px">Add Qty</th>
                                    <th class="text-center" style="width: 100px">Minus Qty</th>
                                    <th class="text-right" style="width: 100px">Cost Price</th>
                                    <th class="text-right" style="width: 100px">Sales Price</th>
                            </thead>
                            <tbody>
                                @forelse ($data->stockmetcingdetails as $item)
                                    <tr>
                                        <td class="text-center" style="width: 5px;">
                                            {{ $loop->index + 1 }}
                                        </td>
                                        <td class="text-center" style="width: 150px;">
                                            {{ $item->medicine->medicine_name }}
                                        </td>
                                        <td class="text-center" style="width: 100px">
                                            {{ $item->add_qty }}
                                        </td>
                                        <td class="text-center" style="width: 100px">
                                            {{ $item->minus_qty }}
                                        </td>
                                        <td class="text-right" style="width: 100px">
                                            {{ $item->cost_price }}
                                        </td>
                                        <td class="text-right" style="width: 100px">
                                            {{ $item->sales_price }}
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="6" class=text-center>No Record Found</td>
                                    </tr>
                                @endforelse

                            </tbody>

                        </table>
                    </div>
                </div>

                <div class="pageFooter" id="pageFooter">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-6" style="text-align: left;">
                                <span>------------------</span><br /><b>Accountant</b>
                            </div>
                            <div class="col-xs-6" style="text-align: right"><span
                                    style="margin-right: -5px;font-weight: bold">Manager</span><br /><span
                                    style="font-weight: bold;font-size :14px">Kpriser</span></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
