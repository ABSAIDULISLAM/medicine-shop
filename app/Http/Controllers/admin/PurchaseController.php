<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class PurchaseController extends Controller
{
    public function index()
    {
        return view('admin.purchase.index');
    }

    public function create()
    {
        return view('admin.purchase.create');
    }
    public function edit()
    {
        return view('admin.purchase.edit');
    }
    public function windowPopInvoice()
    {
        return view('admin.purchase.invoice');
    }
}
