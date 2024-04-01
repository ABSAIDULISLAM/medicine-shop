<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        // return 
        return view('admin.account.expense.index');
    }
    public function create()
    {
        return view('admin.account.expense.create');
    }
}
