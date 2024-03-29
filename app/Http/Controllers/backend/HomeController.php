<?php

namespace App\Http\Controllers\backend;

use App\Models\BankStatement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        // return BankStatement::all();
        return view('admin.home.index');
    }

}
