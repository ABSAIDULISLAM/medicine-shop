<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class BankDepositController extends Controller
{
    public function index()
    {
        return view('admin.account.bank-deposit.index');
    }
    public function create()
    {
        return view('admin.account.bank-deposit.create');
    }
}
