<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeType;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    public function index()
    {
        Employee::orderBy('id', 'desc')->get();

        return view('admin.hr-management.employee.index');
    }

    public function create()
    {
        $degisnations = Designation::all();
        $employeetype = EmployeeType::all();
        return view('admin.hr-management.employee.create', compact('employeetype', 'degisnations'));
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
