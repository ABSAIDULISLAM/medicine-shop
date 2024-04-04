<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'company_name' => ['required', 'string', 'max:100'],
            'company_address' => ['required', 'string', 'max:100'],
            'contact_person' => ['required', 'string', 'max:100'],
            'contact_number' => ['required', 'numeric'],
            'web_link' => ['required', 'url'],
            'company_setup_date' => ['date'],
            'company_logo' => ['required', 'image', 'mimes:jpg,png,jpeg,webp', 'max:2048'],
            // 'status' => ['required'],
        ]);

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

    public function update(Request $request)
    {
        return $request->all();

        $validated = $request->validate([
            'bank_name' => ['required', 'string', 'max:100'],
            'opening_balance' => ['nullable'],
            'deposit_balance' => ['nullable'],
            'status' => ['required'],
        ]);

        CompanySetup::find($request->id)->update([
            'bank_name' => $request->bank_name,
            'opening_balance' => $request->opening_balance,
            'deposit_balance' => $request->deposit_balance,
            // 'creation_date' => Carbon::now(),
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Company Setup Info Created Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        CompanySetup::find($id)->delete();
        return redirect()->back()->with('success', 'Company Setup Info Deleted Successfully');
    }

}

