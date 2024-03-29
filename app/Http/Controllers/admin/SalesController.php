<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SalesController extends Controller
{
    public function index()
    {
        return view('admin.sales.index');
    }

    public function create()
    {
        return view('admin.sales.create');
    }
    public function edit()
    {
        return view('admin.sales.edit');
    }



    public function SalesReturnList()
    {
        return view('admin.sales.return-list');
    }



}
