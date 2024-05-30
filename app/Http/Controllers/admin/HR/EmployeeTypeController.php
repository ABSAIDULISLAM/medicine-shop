<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\EmployeeType;
use Illuminate\Http\Request;

class EmployeeTypeController extends Controller
{
    public function index()
    {
        $data = EmployeeType::orderBy('id', 'desc')->get();

        return view('admin.hr-management.employee-type.index',compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'employee_type' => ['required'],
            'status' => ['required'],
        ]);

        EmployeeType::create($validated);

        return redirect()->back()->with('success', 'Employee type stored Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => ['required'],
            'employee_type' => ['required'],
            'status' => ['required'],
        ]);

        EmployeeType::find($request->id)->update($validated);

        return redirect()->back()->with('success', 'Employee type Updated Successfully');
    }


    public function delete($id)
    {
        EmployeeType::find($id)->delete();
        return redirect()->back()->with('success', 'Employee type Deleted Successfully');

    }
}
