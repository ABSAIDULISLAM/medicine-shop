<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\EmployeeRequest;
use App\Models\Designation;
use App\Models\Employee;
use App\Models\EmployeeType;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class EmployeeController extends Controller
{
    public function index()
    {
        $data = Employee::with(['designation'=>function($query){$query->select('id','designation');}])->orderBy('id', 'desc')->get();

        return view('admin.hr-management.employee.index', compact('data'));
    }

    public function create()
    {
        $degisnations = Designation::all();
        $employeetype = EmployeeType::all();
        return view('admin.hr-management.employee.create', compact('employeetype', 'degisnations'));
    }

    public function store(EmployeeRequest $request)
    {
        $employee = new Employee();
        $employee->employee_type = $request->employee_type ?? 0;
        $employee->designation_id = $request->designation_id ?? 0;
        $employee->employee_name = $request->employee_name ?? 0;
        $employee->father_name = $request->father_name ?? 0;
        $employee->mother_name = $request->mother_name ?? 0;
        $employee->mobile_number = $request->mobile_number ?? 0;
        $employee->email_address = $request->email_address ?? 0;
        $employee->permanent_address = $request->permanent_address ?? 0;
        $employee->loan_amount = $request->loan_amount ?? 0;
        $employee->nid_number = $request->nid_number;
        $employee->perDaySalery = $request->perDaySalery ?? 0;
        $employee->overtime_rate = $request->overtime_rate ?? 0;
        $employee->basic_salary = $request->basic_salary ?? 0;
        $employee->house_rent = $request->house_rent ?? 0;
        $employee->mobile_cost = $request->mobile_cost ?? 0;
        $employee->cng_cost = $request->cng_cost ?? 0;
        $employee->washing_cost = $request->washing_cost ?? 0;
        $employee->deposit_amount = $request->deposit_amount ?? 0;
        $employee->status = $request->status;
        $employee->joining_date = $request->joining_date;
        if ($request->hasFile('employee_images')) {
            $image = Upload($request->file('employee_images'), 'uploads/employee/', 400, 400);
            $employee->employee_images  = $image ?? 0;
        }
        $employee->save();


        return redirect()->route('HR.employee.list')->with('success', 'Employee Stored Successfully');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $degisnations = Designation::all();
        $employeetype = EmployeeType::all();
        $data = Employee::find($id);
        return view('admin.hr-management.employee.edit', compact('data','employeetype', 'degisnations'));
    }

    public function update(EmployeeRequest $request)
    {
        $employee = Employee::find($request->id);
        $employee->employee_type = $request->employee_type ?? 0;
        $employee->designation_id = $request->designation_id ?? 0;
        $employee->employee_name = $request->employee_name ?? 0;
        $employee->father_name = $request->father_name ?? 0;
        $employee->mother_name = $request->mother_name ?? 0;
        $employee->mobile_number = $request->mobile_number ?? 0;
        $employee->email_address = $request->email_address ?? 0;
        $employee->permanent_address = $request->permanent_address ?? 0;
        $employee->loan_amount = $request->loan_amount ?? 0;
        $employee->nid_number = $request->nid_number;
        $employee->perDaySalery = $request->perDaySalery ?? 0;
        $employee->overtime_rate = $request->overtime_rate ?? 0;
        $employee->basic_salary = $request->basic_salary ?? 0;
        $employee->house_rent = $request->house_rent ?? 0;
        $employee->mobile_cost = $request->mobile_cost ?? 0;
        $employee->cng_cost = $request->cng_cost ?? 0;
        $employee->washing_cost = $request->washing_cost ?? 0;
        $employee->deposit_amount = $request->deposit_amount ?? 0;
        $employee->status = $request->status;
        $employee->joining_date = $request->joining_date;
        if ($request->hasFile('employee_images')) {
            if ($employee->employee_images && file_exists(public_path($employee->image))) {
                unlink(public_path($employee->employee_images));
            }
            $image = Upload($request->file('employee_images'), 'uploads/employee/', 400, 400);
            $employee->employee_images = $image;
        }
        $employee->save();

        return redirect()->route('HR.employee.list')->with('success', 'Employee Updated Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Employee::find($id)->delete();
        return redirect()->back()->with('success', 'Employee Deleted Successfully');
    }

    public function statement()
    {
        return view('admin.hr-management.employee.statement');
    }


}
