<?php

namespace App\Http\Controllers\backend;

use App\Models\BankStatement;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\CompanySetup;
use App\Models\Medicine;

class HomeController extends Controller
{
    public function index()
    {
        return view('admin.home.index');
    }
    public function profile()
    {
        $userData = CompanySetup::find(1);
        return view('admin.profile',compact('userData'));
    }

}
