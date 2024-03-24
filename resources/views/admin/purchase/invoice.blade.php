
<html>
    <head>
        <title>Purchases Invoice</title>
        <meta charset="utf-8">
        <meta http-equiv="Expires" content="-1">
        <meta http-equiv="Cache-control" content="no-cache">
        <link rel="stylesheet" href="css/bootstrap.css">
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/customStyle.css">
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
            .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th { padding: 3px; line-height: 1.42857143;}
            .table {
                width: 100%;
                border: 1px solid #000;
            }

            th, td {
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
                    <button id ="printbtn" type="button" value="Print this page" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
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
                                <td style="width: 20%;border: none !important;padding: 3px !important">Supplier Name </td>
                                <td style="width: 80%;border: none !important;padding: 3px !important"> :  BIO-TRADE INTERNATIONAL</td>
                            </tr>
                            <tr style="border: none !important;">
                                <td style="width: 20%;border: none !important;padding: 3px !important">Mobile Number</td>
                                <td style="width: 80%;border: none !important;padding: 3px !important"> : </td>
                            </tr>
                            <tr style="border: none !important;">
                                <td style="width: 20%;border: none !important;padding: 3px !important">Address</td>
                                <td style="width: 80%;border: none !important;padding: 3px !important"> : DHAKA </td>
                            </tr>
                            <tr style="border: none !important;">
                                <td style="width: 20%;border: none !important;padding: 3px !important">Date</td>
                                <td style="width: 80%;border: none !important;padding: 3px !important"> : 20-March-2024</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
            <div class="row" style="margin-top: 25px">
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
                                <tbody>
                                                                          <tr style="line-height:5px;font-size:12px">
                                        <td class="text-center" style="width: 5px;">1</td>
                                        <td class="text-left" style="width: 150px">
                                            Napa extend |  |                                         </td>
                                        <td class="text-center" style="width: 100px">300.00</td>
                                        <td class="text-center" style="width: 100px">2.00</td>
                                        <td class="text-right" style="width: 100px">600.00</td>
                                      </tr>
                                                                            <tr style="line-height:5px;font-size:12px">
                                        <td class="text-center" style="width: 5px;">2</td>
                                        <td class="text-left" style="width: 150px">
                                            Tuscof | 100 ml | Syrup                                        </td>
                                        <td class="text-center" style="width: 100px">2.00</td>
                                        <td class="text-center" style="width: 100px">74.80</td>
                                        <td class="text-right" style="width: 100px">149.60</td>
                                      </tr>
                                                                         <tr>
                                        <td class="no-line text-right" colspan="4" style="width: 355px"><strong>Total Amount</strong></td>
                                        <td class="no-line text-right" style="width: 100px">749.60</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="row" style="margin-bottom: 30px">
                        <div class="col-xs-12"><b>Amount (in Words) : </b> 
                            Seven Hundred and Fourty-Nine Taka only                        </div>    
                    </div>
                    <div class="pageFooter" id="pageFooter">
                        <div class="row">
                            <div class="col-xs-12">
                                <div class="col-xs-6" style="text-align: left;"><span>------------------</span><br/><b>Accountant</b></div>
                                <div class="col-xs-6" style="text-align: right"><span style="margin-right: 0px;font-weight: bold">Manager</span><br/><span style="font-weight: bold;font-size :14px">Projonmo</span></div>
                            </div>

                        </div>   
                    </div> 
                </div>
            </div>
        </div>
    </body>
</html>
