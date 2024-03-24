<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HRManagementController extends Controller
{
    public function EmployeeType()
    {
        return view('admin.hr-management.employee-type');
    }

    public function EmployeeList()
    {
        return view('admin.hr-management.employee-list');
    }
    public function EmployeeCreate()
    {
        return view('admin.hr-management.create-employee');
    }
    public function EmployeeEdit()
    {
        return view('admin.hr-management.edit-employee');
    }

    public function EmployeeStatement()
    {
        return view('admin.hr-management.employee-statement');
    }

    public function EmployeeDesignation()
    {
        return view('admin.hr-management.employee-designation');
    }

    public function EmployeeSalary()
    {
        return view('admin.hr-management.employee-salary');
    }

}
