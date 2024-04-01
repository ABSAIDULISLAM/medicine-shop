<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\SupplierLedger;
use Illuminate\Http\Request;

class SupliyerPaymentController extends Controller
{
    public function index()
    {
        return SupplierLedger::all();
        return view('admin.supliyer-payment.index');
    }

    public function create()
    {
        return view('admin.supliyer-payment.create');
    }
    public function edit()
    {
        return view('admin.collection.edit');
    }
}
