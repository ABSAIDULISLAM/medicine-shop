<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\EmployeeType;
use Illuminate\Http\Request;

class EmployeeTypeController extends Controller
{
    public function index()
    {
         EmployeeType::orderBy('id', 'desc')->get();
        return view('admin.hr-management.employee-type.index');
    }

}
