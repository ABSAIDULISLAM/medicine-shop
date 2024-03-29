<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        return view('admin.hr-management.employee.index');
    }
    public function create()
    {
        return view('admin.hr-management.employee.create');
    }
    public function edit()
    {
        return view('admin.hr-management.employee.edit');
    }
    public function statement()
    {
        return view('admin.hr-management.employee.statement');
    }


}
