@extends('admin.layouts.master')
@section('title', 'Expense-head-report')

@section('content')

    <style>
        @media print {
            #printbtn {
                display: none;
            }

            #reloadButton {
                display: none;
            }

            #main-footer {
                display: none;
            }

            #search {
                display: none;
            }

            a[href]:after {
                content: none !important;
            }
        }

        .table {
            width: 100%;
        }

        .table thead,
        .table tbody {
            border: 1px solid #000;
        }

        .table>tbody>tr>td,
        .table>tbody>tr>th,
        .table>tfoot>tr>td,
        .table>tfoot>tr>th,
        .table>thead>tr>td,
        .table>thead>tr>th {
            padding: 5px;
            line-height: 1.42857143;
            border: 1px solid #000;
        }
    </style>
    <section class="content-header">
        <h1>
            Expense Head Report
            <small>Expense Head Report</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Expense Head Report</a></li>
            <li class="active">Expense Head Report</li>
        </ol>
    </section>
    <!-- Main content -->
    <section class="invoice">
        <!-- title row -->
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
                <h4 align="center" class="page-header" style="text-transform:uppercase;">
                    <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px" width="200px"><br />

                    <span style="font-size: 15px">
                        dhaka, bangladesh </span><br />
                    <span style="font-size: 15px">
                        Expense Head Report
                    </span><br />
                    <span style="font-size: 15px">
                        Date : 01-06-2024 To 10-06-2024 </span>
                </h4>
            </div>
            <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                <form method="get" action="{{route('Report.expense.head.report')}}">
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
                                    <input type="date" name="from_date" value="{{$from_date}}" class="form-control pull-right" id="datepicker4"
                                        autocomplete="off" required="">
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
                                    <input type="date" name="to_date" value="{{$to_date}}" class="form-control pull-right" id="datepicker2"
                                        autocomplete="off" required="">
                                </div>
                                <!-- /.input group -->
                            </div>
                        </div>
                        <div class="form-group col-md-1">
                            <button type="submit" class="btn btn-primary"
                                style="margin-top:25px">Search</button>
                        </div>
                    </div>
                </form>
            </div>
            <!-- /.col -->
        </div>
        <div class="row">
            <div class="col-xs-12 table-responsive">
                <table class="table table-bordered table-striped">
                    <thead style="font-size: 10px">
                        <tr style="background-color: #14A586; color: #fff;">
                            <th class="text-center" style="width: 10px;">SL</th>
                            <th class="text-left" style="width: 200px;">Expense Head</th>
                            <th class="text-center" style="width: 200px;">Account</th>
                        </tr>
                    </thead>
                    <tbody>
                        @forelse ($data as $journalIndex => $journal)
                            <tr>
                                <td class="text-center" style="width: 10px;">{{ $journalIndex + 1 }}</td>
                                <td class="text-left" style="width: 200px;">
                                    <a href='expense-report?state={{ $journal->id }},2024-06-01,2024-06-30' target='_blank'>
                                        <span style='margin-left: 20px'>{{ $journal->name }}</span>
                                    </a>
                                    @foreach ($journal->accounthead as $accountHeadIndex => $accountHead)
                                        <br />
                                        <span style='margin-left: 40px'>
                                            <a href='expense-report?state={{ $journal->id }},2024-06-01,2024-06-30' target='_blank'>
                                                {{ $accountHead->head_name }}
                                            </a>
                                        </span>
                                        @foreach ($accountHead->subhead as $subHeadIndex => $subHead)
                                            <br />
                                            <span style='margin-left: 60px'>
                                                <a href='sub-head-report?state={{ $journal->id }},{{ $accountHead->id }},2024-06-01,2024-06-30' target='_blank'>
                                                    {{ $subHead->sub_head }}
                                                </a>
                                            </span>
                                        @endforeach
                                    @endforeach
                                </td>
                                <td class="text-center" style="width: 200px;">
                                    @foreach ($journal->accounthead as $accountHead)
                                        @foreach ($accountHead->subhead as $subHeadIndex => $subHead)
                                            @if($subHeadIndex > 0) <br /> @endif
                                            <span style='margin-left: 60%; font-weight: bold'>10,423.00</span><br />
                                            <span style='margin-left: 40%'>10,423.00</span>
                                        @endforeach
                                    @endforeach
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td class="text-center" colspan="3">No Record Found</td>
                            </tr>
                        @endforelse
                    </tbody>
                    <tfoot>
                        <tr>
                            <th colspan="2">Total Amount</th>
                            <th style="text-align: right">52,657.00</th>
                        </tr>
                    </tfoot>
                </table>



            </div>
        </div>
    </section>

@endsection
