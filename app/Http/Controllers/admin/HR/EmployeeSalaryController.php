<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\Employee;
use App\Models\EmployeeLedger;
use App\Models\EmployeeSalary;
use Carbon\Carbon;
use Illuminate\Http\Request;

class EmployeeSalaryController extends Controller
{
    public function index(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusId = $request->input('employee_id', 0);

        $query = EmployeeSalary::with(['employee:id,employee_name']);

        if(!empty($cusId)){
            $query->where('employee_id', $cusId);
        }

        if(!empty($from_date) && !empty($to_date)){
            $query->whereBetween('date', [$from_date, $to_date]);
        }

        $employeeSalary = $query->latest()->get();


        $employee = Employee::orderBy('id','desc')->get();

        return view('admin.hr-management.salary.index',compact('employee','employeeSalary', 'from_date','to_date','cusId'));
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
