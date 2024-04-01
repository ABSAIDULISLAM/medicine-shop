<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\BankSetup;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BankSetupController extends Controller
{
    public function index()
    {
        $data = BankSetup::orderBy('bank_name', 'asc')->paginate(20);
        return view('admin.settings.bank-setup.index', compact('data'));

    }

    public function store(Request $request)
    {
        // return $request->all();

        $validated = $request->validate([
            'bank_name' => ['required', 'string', 'max:100'],
            'opening_balance' => ['nullable', 'numeric'],
            'deposit_balance' => ['nullable', 'numeric'],
            'status' => ['required'],
        ]);

        BankSetup::create([
            'bank_name' => $request->bank_name,
            'opening_balance' => $request->opening_balance,
            'deposit_balance' => $request->deposit_balance,
            'creation_date' => Carbon::now(),
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Bank Setup Info Created Successfully');
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

        BankSetup::find($request->id)->update([
            'bank_name' => $request->bank_name,
            'opening_balance' => $request->opening_balance,
            'deposit_balance' => $request->deposit_balance,
            // 'creation_date' => Carbon::now(),
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Bank Setup Info Created Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        BankSetup::find($id)->delete();
        return redirect()->back()->with('success', 'Bank Setup Info Deleted Successfully');
    }



}
