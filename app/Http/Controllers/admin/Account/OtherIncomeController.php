<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OtherIncomeController extends Controller
{
    public function index()
    {
        return view('admin.account.other-income.index');
    }
    public function create()
    {
        return view('admin.account.other-income.create');
    }
}
