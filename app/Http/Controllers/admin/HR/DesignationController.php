<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use App\Models\Designation;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        $data = Designation::orderBy('id', 'desc')->get();

        return view('admin.hr-management.designation.index',compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'designation' => ['required'],
            'status' => ['required'],
        ]);

        Designation::create($validated);

        return redirect()->back()->with('success', 'Designation stored Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => ['required'],
            'designation' => ['required'],
            'status' => ['required'],
        ]);

        Designation::find($request->id)->update($validated);

        return redirect()->back()->with('success', 'Designation Updated Successfully');
    }


    public function delete($id)
    {
        Designation::find($id)->delete();
        return redirect()->back()->with('success', 'Designation Deleted Successfully');
    }
}
