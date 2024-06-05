<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CompanySetupRequest;
use App\Models\CompanySetup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class CompanySetupController extends Controller
{
    public function index()
    {
        $datas = CompanySetup::all();
        return view('admin.settings.company-setup.index', compact('datas'));
    }

    public function store(CompanySetupRequest $request)
    {
        $conpany = new CompanySetup();
        $conpany->company_name = $request->company_name;
        $conpany->company_address = $request->company_address;
        $conpany->contact_person = $request->contact_person;
        $conpany->contact_number = $request->contact_number;
        $conpany->web_link = $request->web_link;
        $conpany->company_setup_date = $request->company_setup_date;

        if($request->hasFile('company_logo')){
            $image = Upload($request->file('company_logo'), 'uploads/company/', 400, 400);
            $conpany->company_logo = $image;
        }
        $conpany->save();
        return redirect()->back()->with('success', 'Company Setup Info Created Successfully');
    }

    public function update(CompanySetupRequest $request)
    {
        $conpany = CompanySetup::find($request->id);
        $conpany->company_name = $request->company_name;
        $conpany->company_address = $request->company_address;
        $conpany->contact_person = $request->contact_person;
        $conpany->contact_number = $request->contact_number;
        $conpany->web_link = $request->web_link;
        $conpany->company_setup_date = $request->company_setup_date;

        if($request->hasFile('company_logo')){
            if ($conpany->company_logo && file_exists(public_path($conpany->company_logo))) {
                unlink(public_path($conpany->company_logo));
            }
            $image = Upload($request->file('company_logo'), 'uploads/company/', 400, 400);
            $conpany->company_logo = $image;
        }
        $conpany->save();
        return redirect()->back()->with('success', 'Company Setup Info Updated Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        CompanySetup::find($id)->delete();
        return redirect()->back()->with('success', 'Company Setup Info Deleted Successfully');
    }

}

