@extends('admin.layouts.master')
@section('title', 'Bank-report')

@section('content')
    <section class="content-header">
        <h1>
            Bank Current Ledger
            <small> Bank Current Ledger</small>
        </h1>
        <ol class="breadcrumb">
            <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
            <li><a href="#">Bank Current Ledger</a></li>
            <li class="active"> Bank Current Ledger</li>
        </ol>
    </section>
    <section class="content">
        <div class="row">
            <div class="col-xs-12">
                <div class="box box-primary">
                    <div class="box-header with-border">
                        <h3 class="box-title"> Bank Current Ledger</h3>
                        <div class="box-tools pull-right">
                            <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                                    class="fa fa-minus"></i></button>
                            <button type="button" class="btn btn-box-tool" data-widget="remove"><i
                                    class="fa fa-times"></i></button>
                        </div>
                    </div>
                    <div class="box-body">
                        <div class="row">
                            <div class="col-md-2"></div>
                            <div class="col-md-8">
                                <div class="row">
                                    @forelse ($data as $item)
                                    <div class="col-md-6">
                                        <a href="{{route('Report.bank.statement',['id'=>$item->id])}}" target="_balank">
                                            <div class="info-box bg-aqua">
                                                <span class="info-box-icon"><i
                                                        class="ion-ios-chatbubble-outline"></i></span>
                                                <div class="info-box-content">
                                                    <span class="info-box-text">{{$item->bank_name}}</span>
                                                    <span class="info-box-number">{{$item->totalcredit >= $item->totaldebit ? $item->totalcredit : $item->totaldebit-$item->totalcredit}}</span>

                                                    <div class="progress">
                                                        <div class="progress-bar" style="width: 100%"></div>
                                                    </div>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    @empty
                                        <h4 class="text-danger text-center py-5">Now Item Found</h4>
                                    @endforelse
                                </div>
                            </div>
                            <div class="col-md-2"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    @endsection
