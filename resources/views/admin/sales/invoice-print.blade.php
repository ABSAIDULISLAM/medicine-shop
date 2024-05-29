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
                                <img src="{{asset('backend/assets/logo.png')}}" alt="logo" style="height: 80px;width: 200px;"></h4>
                            <span style="font-size:11px;font-weight:400;text-align: center"><br /> Contact: 017********* <br /> Web: www.smartpharma.com
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
                                <td>:Smart Pharma</td>
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
                                    <td class="text-left" style="width: 200px;border:1px solid #000;"> {{$item->medicine->medicine_name}} </td>
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
                                    {{$data->less_amount}} </th>
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
                                    {{$data->due_amount }} </th>
                            </tr>
                            <tr style="border:1px solid #000;">
                                <th class="thick-line text-right tf00" colspan="3"
                                    style="font-size:12px;border:1px solid #000;">
                                    <span style="margin-right:10px;">Paid Amount</span>
                                </th>
                                <th class="thick-line text-right tf01"
                                    style="font-size:12px;font-weight:600;border:1px solid #000;">
                                    {{$data->cash_paid > $data->total_amount ? $data->total_amount : $data->cash_paid}} </th>
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

