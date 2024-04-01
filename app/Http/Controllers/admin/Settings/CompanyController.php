<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Company;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CompanyController extends Controller
{
    public function index()
    {

        $data = Company::orderBy('id', 'asc')->paginate(200);
        return view('admin.settings.company.index', compact('data'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Company::create([
            'company_name' => $request->company_name,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Compny Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Company::find($request->id)->update([
            'company_name' => $request->company_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Company Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Company::find($id)->delete();
        return redirect()->back()->with('success', 'Company Deleted Successfully');
    }



}

