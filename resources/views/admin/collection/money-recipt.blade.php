
<html>
    <head>
        <title>Memo Invoice</title>
        <meta charset="utf-8">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-control" content="no-cache">
        <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/css/bootstrap.min.css')}}">
        <link rel="stylesheet" href="{{asset('backend/assets/css/customStyle.css')}}">
        <script src="js/main.js"></script>
        <style type="text/css">
            @media print {
                #printbtn {
                    display :  none;
                }
                #thd{
                    font-size: 12px;
                }
                #reloadButton {
                    display :  none;
                }
            }
        </style>
        <style>

            th, td {
                width: 25%;
                padding-left: 5px;
                vertical-align: midle;
                border: 1px solid #000;
                height: 25px;
            }

            .noBorder {
                border:none !important;
            }
            .btmBorder{
                border-bottom:none !important;
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
                        <button id ="printbtn" type="button" value="Print this page" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        <button id ="reloadButton" onclick="myFunction()">Reload page</button>
                    </div>
                    <script>
                        function myFunction() {
                            location.reload();
                        }
                    </script>
                    <div style="text-align:center;margin-top: 25px">
                        <h3></h3>
                        <h5></h5>
                        <img class="my-3" src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px"
                            style="height: 80px;width: 200px;margin-left: %"><br />
                        <h4 style="border: 2px solid #000;padding: 5px;width: 180px;border-radius : 5px;margin-left: 38%;font-weight: bold"><i>MONEY RECEIPT</i></h4>
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
                                    <h5>Receipt No : {{{$data->money_reset}}}</h5>
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
                                    <td class="noBorder" style="width: 75%"></td>
                                    <td style="width: 25%;text-align: center"><b> Taka </b></td>
                                </tr>
                                <tr>
                                    <td class="noBorder" style="width: 75%;">
                                        <table style="width: 100%">
                                            <td class="btmBorder" style="width: 23%;font-size: 12px;"><b> Received From </b></td>
                                            <td class="btmBorder" style="width: 77%;font-size: 12px"> {{$data->customer->company_name}}</td>
                                        </table>
                                    </td>
                                    <td style="width: 25%;text-align: right"></td>
                                </tr>
                                <tr>
                                    <td class="noBorder" style="width: 75%">
                                        <table style="width: 100%;">
                                            <td class="btmBorder" style="width: 23%;font-size: 12px"><b> Address </b></td>
                                            <td class="btmBorder" style="width: 77%;font-size: 12px"> {{$data->customer->address}}</td>
                                        </table>
                                    </td>
                                    <td style="width: 25%">
                                        <table style="width: 100%;">
                                            <td class="btmBorder" style="width: 50%;font-size: 12px;border-left:none !important;border-top:none !important; "><b> Pre.Balance </b></td>
                                            <td class="btmBorder" style="width: 80%;font-size: 12px;border-top:none !important;border-right:none !important;text-align: right">{{$data->totalDues}}</td>
                                        </table>
                                    </td>
                                </tr>
                                <tr>
                                    <td class="noBorder" style="width: 75%">
                                        <table style="width: 100%">
                                            <td class="btmBorder" style="width: 23%;font-size: 12px"><b> Payment Method </b></td>
                                            <td class="btmBorder" style="width: 77%;font-size: 12px"> {{$data->payment_method == 0 ? 'By Cash' :
                                                ($data->payment_method == 1 ? 'By Check' :
                                                ($data->payment_method == 2 ? 'By Mobile banking' : 'Card'))}}</td>
                                        </table>
                                    </td>
                                    <td style="width: 25%">
                                        <table style="width: 100%;">
                                            <td class="btmBorder" style="width: 50%;font-size: 12px;border-left:none !important;border-top:none !important; "><b> Payment </b></td>
                                            <td class="btmBorder" style="width: 80%;font-size: 12px;border-top:none !important;border-right:none !important;text-align: right">{{$data->paid}}</td>
                                        </table>
                                    </td>
                                </tr>
                                                            </table>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 90px;margin-left: 4px">
                        <div class="col-xs-12"><b>Amount (in Words) : </b> {{convertToWords($data->paid)}}
                        </div>
                    </div>
                    <div class="pageFooter" id="pageFooter">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-xs-3"><span>------------------</span><br/><b>Received by</b></div>
                                <div class="col-xs-3"><span>-----------------------</span><br/><b>Accountant by</b></div>
                                <div class="col-xs-3"><span>----------------------</span><br/><b>F & T Manager</b></div>
                                <div class="col-xs-3" style="text-align: right"><span>-----------------------</span><br/><b>For : </b></div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
