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
                    <h3><img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px"
                        style="height: 80px;width: 200px;margin-left: %"><br /></h3>
                    <h5>dhana, bangladesh</h5>
                    <h4
                        style="border: 2px solid #000;padding: 5px;width: 220px;border-radius : 5px;margin-left: 35%;font-weight: bold">
                        <i>CASH DEBIT VOUCHER</i></h4>
                </div>

                <div class="row">
                    <div class="col-xs-12">
                        <div class="col-xs-6">
                            <span style="float: left;margin-left: -15px">
                                <h5>Date : {{$data->date}}</h5>

                            </span>
                        </div>
                        <div class="col-xs-6">
                            <span style="float: right;">
                                <h5>Voucher No : {{$data->money_receipt}}</h5>
                            </span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="table-responsive">
                        <table style="width: 100%;border:none !important;">
                            <tr>
                                <td class="noBorder" style="width: 85%"></td>
                                <td style="width: 15%;text-align: center"><b> Taka </b></td>
                            </tr>
                            <tr>
                                <td class="noBorder" style="width: 85%;">
                                    <table style="width: 100%">
                                        <td class="btmBorder" style="width: 20%;font-size: 12px;"><b> Account Head </b>
                                        </td>
                                        <td class="btmBorder" style="width: 80%;font-size: 12px"> {{$data->accounthead->head_name ?? ''}} </td>
                                    </table>
                                </td>
                                <td style="width: 15%;text-align: right"></td>
                            </tr>
                            <tr>
                                <td class="noBorder" style="width: 85%">
                                    <table style="width: 100%;">
                                        <td class="btmBorder" style="width: 20%;font-size: 12px"><b> Sub Head </b></td>
                                        <td class="btmBorder" style="width: 80%;font-size: 12px"> {{$data->subhead->sub_name ?? ''}}
                                            </td>
                                    </table>
                                </td>
                                <td style="width: 15%"></td>
                            </tr>
                            <tr>
                                <td class="noBorder" style="width: 85%">
                                    <table style="width: 100%">
                                        <td class="btmBorder" style="width: 20%;font-size: 12px"><b> Paid To </b></td>
                                        <td class="btmBorder" style="width: 80%;font-size: 12px">{{$data->employee->employee_name ?? ''}}</td>
                                    </table>
                                </td>
                                <td style="width: 15%"></td>
                            </tr>
                            <tr>
                                <td class="noBorder" style="width: 85%">
                                    <table style="width: 100%">
                                        <td style="width: 20%;font-size: 12px"><b> On Account of </b></td>
                                        <td style="width: 80%;font-size: 12px">{{$data->purpose}}</td>
                                    </table>
                                </td>
                                <td style="width: 15%;text-align: right"><b>{{$data->amount}}</b></td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="row" style="margin-bottom: 90px;margin-left: 4px">
                    <div class="col-xs-12"><b>Amount (in Words) : ({{ convertToWords($data->amount) ?? 'zero Taka only ' }})</b>
                        </div>
                </div>
                <div class="pageFooter" id="pageFooter">
                    <div class="row">
                        <div class="col-xs-12">
                            <div class="col-xs-3"><span>------------------</span><br /><b>Received by</b></div>
                            <div class="col-xs-3"><span>-----------------------</span><br /><b>Accountant by</b></div>
                            <div class="col-xs-3"><span>------------------</span><br /><b>Manager</b></div>
                            <div class="col-xs-3" style="text-align: right">
                                <span>---------------------------</span><br /><b>Managing Director</b></div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
