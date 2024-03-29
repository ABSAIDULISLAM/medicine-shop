<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankWithdrawalController extends Controller
{
    public function index()
    {
        return view('admin.account.bank-withdraw.index');
    }
    public function create()
    {
        return view('admin.account.bank-withdraw.create');
    }
}
