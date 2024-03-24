<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupliyerPaymentController extends Controller
{
    public function index()
    {
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
