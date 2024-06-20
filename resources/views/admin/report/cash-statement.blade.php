@extends('admin.layouts.master')
@section('title', 'Cash-stattement')

@section('content')
<style>
    @media print {
        #printbtn {
            display :  none;
        }
        #reloadButton {
            display :  none;
        }
        #main-footer{
            display :  none;
        }
        #search{
            display :  none;
        }
        a[href]:after {
            content: none !important;
        }
    }
    .table{width:100%;} .table thead, .table tbody{border:1px solid #000;}
    .table > tbody > tr > td, .table > tbody > tr > th, .table > tfoot > tr > td, .table > tfoot > tr > th, .table > thead > tr > td, .table > thead > tr > th {padding:5px;line-height:1.42857143;border:1px solid #000;}
</style>

    <section class="content-header">
        <h1>
            Cash Statement
            <small> Cash Statement</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#"> Cash Statement</a></li>
            <li class="active"> Cash Statement</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
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
                <h4 align="center" class="page-header" style="text-transform:uppercase;">
                    <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px"><br/>
                    <span style="font-size: 15px"></span><br/>
                    <span style="font-size: 15px">
                        Cash Statement
                    </span><br>
                    <span style="font-size: 12px;margin-left: 30px">
                        Date : {{$fromDate}}  <strong> To </strong>  {{$toDate}}
                    </span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="get" action="{{ route('Report.cash.statement') }}">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-5"></div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker4">From Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="{{ $fromDate }}" name="from_date"
                                        class="form-control pull-right" id="datepicker4" autocomplete="off"
                                        required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <div class="form-group">
                                <label for="datepicker2">To Date </label>
                                <div class="input-group date">
                                    <div class="input-group-addon">
                                        <i class="fa fa-calendar"></i>
                                    </div>
                                    <input type="date" value="{{ $toDate }}" name="to_date"
                                        class="form-control pull-right" id="datepicker2" autocomplete="off"
                                        required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <button type="submit" class="btn btn-primary" style="margin-top:25px">Search</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-striped">
                    <thead>
                        <tr style="background-color: #029653;color: #fff">
                            <th style="width: 10px;text-align: center">SL</th>
                            <th style="width: 80px;text-align: center">Date</th>
                            <th style="width: 160px;text-align: center">Particulars</th>
                            <th style="width: 100px;text-align: center">Voucher Type</th>
                            <th style="width: 100px;text-align: center">Debit</th>
                            <th style="width: 100px;text-align: center">Credit</th>
                            <th style="width: 120px;text-align: center">Remarks</th>
                        </tr>
                    </thead>
                    @php
                        $totalDebit = 0;
                        $totalCredit = 0;
                    @endphp
                    <tbody>
                        <tr>
                            <th colspan="4" style="text-align: left; color: red">Opening Balance</th>
                            <th style="text-align: right; color: red">{{$totalDebit}}</th>
                            <th style="text-align: right; color: red"></th>
                            <th style="text-align: center"></th>
                        </tr>
                        @forelse ($cashstatement as $item)
                        @php
                            $totalDebit += $item->debit;
                            $totalCredit += $item->credit;
                            $title = '';
                            $info = '';
                            $contact = App\Models\Contact::find($item->insert_id);
                            switch ($item->insert_status) {
                                case 1:
                                    $title = 'Sale';
                                    $info = $contact ? $contact->company_name : 'N/A';
                                    break;
                                case 2:
                                    $title = 'Collection';
                                    $info = $contact ? $contact->company_name : 'N/A';
                                    break;
                                case 3:
                                    $title = 'Expense';
                                    $info = $contact ? $contact->company_name : 'N/A';
                                    break;
                                case 4:
                                    $title = 'Purchase';
                                    $info = $contact ? $contact->company_name : 'N/A';
                                    break;
                                case 5:
                                    $title = 'Else';
                                    $info = $contact ? $contact->company_name : 'N/A';
                                    break;
                            }
                        @endphp
                        <tr>
                            <td class="text-center">{{$loop->index + 1}}</td>
                            <td class="text-center">{{$item->date}}</td>
                            <td class="text-center">{{ $title }} / {{ $info }}</td>
                            <td class="text-center">{{ $title }}</td>
                            <td class="text-center">{{ number_format($item->debit, 2) }}</td>
                            <td class="text-center">{{ number_format($item->credit, 2) }}</td>
                            <td class="text-center">{{ $item->remarks }}</td>
                        </tr>
                        @empty
                        <tr>
                            <td colspan="7" class="text-center">No Record Found</td>
                        </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="4" style="text-align: left; color: red">Total Amount</th>
                            <th style="text-align: right; color: red">{{ number_format($totalDebit, 2) }}</th>
                            <th style="text-align: right; color: red">{{ number_format($totalCredit, 2) }}</th>
                            <th style="text-align: left; color: red; font-size: 13px">Closing balance: {{ number_format($totalDebit - $totalCredit, 2) }}</th>
                        </tr>
                    </tfoot>
                </table>


            </div>

    </section>

@endsection
