<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccountController extends Controller
{
    public function ExpenseList()
    {
        return view('admin.account.expense-list');
    }

    public function ExpenseCreate()
    {
        return view('admin.account.expense-create');
    }


    public function IncomeList()
    {
        return view('admin.account.income-list');
    }
    public function IncomeCreate()
    {
        return view('admin.account.income-create');
    }


    public function BankDeposite()
    {
        return view('admin.account.bank-deposite');
    }
    public function BankWithdraw()
    {
        return view('admin.account.bank-withdraw');
    }
    public function BankTransfer()
    {
        return view('admin.account.bank-transfer');
    }
    public function Bankcreate()
    {
        return view('admin.account.create-bank-transfer');
    }



}
