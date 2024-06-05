<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeLedger;
use App\Models\EmployeeSalary;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    public function index()
    {
        $employeeSalary = EmployeeSalary::with([
            'employee'=>function($query){
                $query->select('id','employee_name');
            }])
            ->latest()
            ->get();
        $employee = Employee::orderBy('id','desc')->get();

        return view('admin.hr-management.salary.index',compact('employee','employeeSalary'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => ['required'],
            'date' => ['required', 'date', 'date_format:Y-m-d'],
            'amount' => ['required', 'numeric'],
            'remarks' => ['required'],
        ]);

        $year = date('Y', strtotime($request->date));
        $month = date('m', strtotime($request->date));

        $existingSalary = EmployeeSalary::where('employee_id', $request->employee_id)
            ->whereYear('date', $year)
            ->whereMonth('date', $month)
            ->first();

        if ($existingSalary) {
            return redirect()->back()->withErrors(['error' => 'Salary for this employee for the selected month is already added.']);
        }

        $employeesal = EmployeeSalary::create($validated);

        EmployeeLedger::create([
            'employee_id' => $request->employee_id,
            'emp_type' => 1, // general employee, important
            'description' => $request->remarks,
            'debit' => $request->amount,
            'credit' => 0,
            'insert_id' => $employeesal->id,
            'date' => $request->date,
            'insert_status' => 1, // 1 for add salary
        ]);

        return redirect()->back()->with('success', 'Employee Salary Added Successfully');
    }


    public function update(Request $request)
    {
        $validated = $request->validate([
            'employee_id' => ['required'],
            'date' => ['required', 'date','date_format:Y-m-d'],
            'amount' => ['required','numeric'],
            'remarks' => ['required'],
        ]);

        EmployeeSalary::find($request->id)->update($validated);

        EmployeeLedger::where('insert_id', $request->id)->update([
            'employee_id' => $request->employee_id,
            'emp_type' => 1, //general employee, !important
            'description' => $request->remarks,
            'debit' => $request->amount,
            'credit' => 0,
            'insert_id' => $request->id,
            'date' => $request->date,
            'insert_status' => 1,//1 for add salary
        ]);

        return redirect()->back()->with('success', 'Employee Salary  Updated Successfully');
    }


    public function delete($id)
    {
        EmployeeSalary::find($id)->delete();
        return redirect()->back()->with('success', 'Employee type Deleted Successfully');

    }
}
