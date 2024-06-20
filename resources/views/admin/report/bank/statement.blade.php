    @extends('admin.layouts.master')
    @section('title', 'Bank-report')

    @section('content')

        <section class="content-header">
            <h1>
                Bank Statement
                <small> Bank Statement</small>
            </h1>
            <ol class="breadcrumb">
                <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
                <li><a href="#">Bank Statement</a></li>
                <li class="active"> Bank Statement</li>
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
                        <img src="{{ asset('backend/assets/logo.png') }}" alt="logo" height="80px"
                            width="200px"><br />
                        <br> <span style="font-size: 15px">
                            Dhaka, Bangladesh </span><br />
                        <span style="font-size: 15px">
                            Bank Statement
                        </span>
                    </h4>

                    <address>
                        <strong>Bank Name : {{ $data->bank_name }}</strong><br>
                        Opening Balance : {{ $data->opening_balance }}<br>
                        Date : {{ $from_date }} To {{ $to_date }} <span
                            style="float: right;margin-right: 20px">09-06-2024</span>
                    </address>

                </div>
                <div style="margin-right:10px;margin-top:10px;padding:10px;text-align: right" id="search">
                    <form method="get" id="bank-statement-form"
                        action="{{ route('Report.bank.statement', ['id' => 1]) }}">
                        @csrf
                        <div class="row">
                            <div class="form-group col-md-2"></div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="datepicker4">From Date </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" name="from_date" value="{{ $from_date }}"
                                            class="form-control pull-right" id="datepicker4" autocomplete="off"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="datepicker2">To Date </label>
                                    <div class="input-group date">
                                        <div class="input-group-addon">
                                            <i class="fa fa-calendar"></i>
                                        </div>
                                        <input type="date" name="to_date" value="{{ $to_date }}"
                                            class="form-control pull-right" id="datepicker2" autocomplete="off"
                                            required="">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-3">
                                <div class="form-group">
                                    <label for="bank_id">Bank Name</label>
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="fa fa-user"></i></span>
                                        <select name="bank_id" id="bank_id" class="form-control select2"
                                            style="width: 100%;">
                                            @forelse ($bank as $item)
                                                <option value="{{ $item->id }}"
                                                    {{ $item->id == $bankName ? 'selected' : '' }}>{{ $item->bank_name }}
                                                </option>
                                            @empty
                                                <option value="">No banks available</option>
                                            @endforelse
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-1">
                                <button type="submit" class="btn btn-primary" style="margin-top:25px">Search</button>
                            </div>
                        </div>
                    </form>

                    <script>
                        document.getElementById('bank-statement-form').addEventListener('submit', function(event) {
                            event.preventDefault();
                            var form = this;
                            var bankId = document.getElementById('bank_id').value;
                            var action = form.action.replace(/\/\d+$/, '/' + bankId);
                            form.action = action;
                            form.submit();
                        });
                    </script>

                </div>
                <!-- /.col -->
            </div>
            <div class="row">
                <div class="col-xs-12 table-responsive">
                    <table class="table table-bordered table-striped" style="font-size: 12px">
                        <thead>
                            <tr style="background-color: #14A586;color: #fff;">
                                <th class="text-center" style="width: 20px;">SL</th>
                                <th class="text-center" style="width: 80px;">Date</th>
                                <th class="text-center" style="width: 50px;">Chque No</th>
                                <th class="text-center" style="width: 80px;">Money Receipt</th>
                                <th class="text-center" style="width: 50px;">Credit</th>
                                <th class="text-center" style="width: 50px;">Debit</th>
                                <th class="text-center" style="width: 200px;">Remarks</th>
                            </tr>
                        </thead>
                        @php
                            $totalcredit = 0;
                            $totaldebit = 0;
                        @endphp
                        <tbody>
                            <tr>
                                <th colspan="4" style="width: 130px">OPN.Balance</th>
                                <th class="text-right" style="width: 80px">0.00</th>
                                <th style="width: 80px"></th>
                                <th style="width: 100px"></th>
                            </tr>
                            @forelse ($date->bankstatement ?? [] as $item)
                                @php
                                    $totalcredit += $item->credit;
                                    $totaldebit += $item->debit;
                                @endphp
                                <tr>
                                    <td class="text-center" style="width: 20px;">{{ $loop->index + 1 }}</td>
                                    <td style="width: 80px;">
                                        {{ $item->date }}</td>
                                    <td class="text-left" style="width: 50px;"> {{ $item->check_no }} </td>
                                    <td class="text-center" style="width: 80px;">
                                    </td>
                                    <td class="text-right" style="width: 50px;">{{ $item->credit }}</td>
                                    <td class="text-right" style="width: 50px;">{{ $item->debit }}</td>

                                    <td class="text-lrft" style="width: 200px;font-size:10px">{{ $item->remarks }}</td>
                                </tr>
                            @empty
                                <tr>
                                    <td class="text-center" colspan="7">No Record Found</td>
                                </tr>
                            @endforelse
                        </tbody>
                        <tfoot>
                            <tr>
                                <th style="width: 20px;"></th>
                                <th style="width: 80px;">Total</th>
                                <th style="width: 50px;"></th>
                                <th style="width: 80px;"></th>
                                <th class="text-right" style="width: 50px;">{{ $totalcredit }}/-</th>
                                <th class="text-right" style="width: 50px;">{{ $totaldebit }}/-</th>
                                <th style="width: 200px;color : red;">{{ $totalcredit - $totaldebit }}/-</th>
                            </tr>
                        </tfoot>
                    </table>
                </div>
        </section>
    @endsection
