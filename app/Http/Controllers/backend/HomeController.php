<?php

namespace App\Http\Controllers\backend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }

    public function StockMatching()
    {
        return view('admin.stock-matching.list');
    }

    public function StockMatchingCreate()
    {
        return view('admin.stock-matching.create');
    }
}
