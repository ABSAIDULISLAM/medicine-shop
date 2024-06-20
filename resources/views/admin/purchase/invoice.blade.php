<html>

<head>
    <title>Memo Invoice</title>
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
        th,
        td {
            width: 25%;
            padding-left: 5px;
            vertical-align: midle;
            border: 1px solid #000;
            height: 25px;
        }

        .noBorder {
            border: none !important;
        }

        .btmBorder {
            border-bottom: none !important;
        }

        .pageFooter {
            position: relative;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="col-xs-12">
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
                <div style="text-align:center;margin-top: 25px">
                    <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px"
                            style="height: 80px;width: 200px;margin-left: %"><br />
                    <h5>dhana, bangladesh</h5>
                    <h4
                        style="border: 2px solid #000;padding: 5px;width: 220px;border-radius : 5px;margin-left: 40%;font-weight: bold">
                        <i>Purchase Invoice</i>
                    </h4>
                </div>

                <table style="border: none !important;">
                    <tr style="border: none !important;">
                        <td style="width: 20%;border: none !important;padding: 3px !important">Supplier Name </td>
                        <td style="width: 80%;border: none !important;padding: 3px !important"> : {{$supplier->suplyer->company_name ?? ''}}</td>
                    </tr>
                    <tr style="border: none !important;">
                        <td style="width: 20%;border: none !important;padding: 3px !important">Mobile Number</td>
                        <td style="width: 80%;border: none !important;padding: 3px !important"> : {{$supplier->suplyer->contact_num ?? ''}}</td>
                    </tr>
                    <tr style="border: none !important;">
                        <td style="width: 20%;border: none !important;padding: 3px !important">Address</td>
                        <td style="width: 80%;border: none !important;padding: 3px !important"> : {{$supplier->suplyer->address ?? ''}} </td>
                    </tr>
                    <tr style="border: none !important;">
                        <td style="width: 20%;border: none !important;padding: 3px !important">Date</td>
                        <td style="width: 80%;border: none !important;padding: 3px !important"> : {{$supplier->date ?? ''}}</td>
                    </tr>
                </table>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="table-responsive">
                        <table class="table ">
                            <thead>
                                <tr id="thd">
                                    <td class="text-center" style="width: 5px;"><strong>SL.NO</strong></td>
                                    <td class="text-center" style="width: 150px;"><strong>Product Name</strong></td>
                                    <td class="text-center" style="width: 100px"><strong>Quantity</strong></td>
                                    <td class="text-center" style="width: 100px"><strong>Unit Price</strong></td>
                                    <td class="text-center" style="width: 100px"><strong>Sub Total</strong></td>
                                </tr>
                            </thead>
                            @php
                                $total = 0;
                            @endphp
                            <tbody>
                                @forelse ($data as $item)
                                    <tr style="line-height:5px;font-size:12px">
                                        <td class="text-center" style="width: 5px;">{{ $loop->index + 1 }}</td>
                                        <td class="text-left" style="width: 150px">{{ $item->product->medicine_name }}
                                        </td>
                                        <td class="text-center" style="width: 100px">{{ $item->quantity }}</td>
                                        <td class="text-center" style="width: 100px">{{ $item->cost_price }}</td>
                                        <td class="text-right" style="width: 100px">{{ $item->sub_total }}</td>
                                    </tr>
                                    @php
                                        $total += $item->sub_total;
                                    @endphp
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 90px;margin-left: 4px">
                    <div class="col-xs-12"><b>Amount (in Words) : {{$total}}/-  
                            ({{ convertToWords($total) ?? 'zero Taka only ' }})</b>
                    </div>
                </div>
                <div class="pageFooter" id="pageFooter">
                    <div class="row">
                        <div class="col-xs-12">

                            <div class="col-xs-6"><span>------------------</span><br /><b>Manager</b></div>
                            <div class="col-xs-6" style="text-align: right">
                                <span>---------------------------</span><br /><b>Managing Director</b>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
