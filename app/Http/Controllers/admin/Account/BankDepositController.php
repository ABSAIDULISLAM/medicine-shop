<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\BankDeposit;
use App\Models\BankSetup;
use App\Models\CashStatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class BankDepositController extends Controller
{
    public function index()
    {
         $data = BankDeposit::with('bank')->orderBy('id','desc')->get();
         $bank = BankSetup::orderBy('id','asc')->get();
        return view('admin.account.bank-deposit.index', compact('data','bank'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bank_id' => ['required'],
            'date' => ['required','date','date_format:Y-m-d'],
            'deposit_amount' => ['required', 'numeric'],
            'remarks' => ['nullable'],
        ]);

        BankDeposit::create([
            'bank_id' => $request->bank_id,
            'date' => $request->date,
            'deposit_amount' => $request->deposit_amount,
            'remarks' => $request->remarks,
            'create_by' => Auth::id(),
        ]);
        CashStatement::create([
            'date' => $request->date,
            'remarks' => 'Bank Deposite',
            'debit' => $request->deposit_amount ?? 0,
            'credit' => 0,
            'insert_status' => 5,
            'insert_id' => $request->bank_id,
        ]);
        return redirect()->back()->with('success', 'Bank Deposite Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'bank_id' => ['required'],
            'date' => ['required','date','date_format:Y-m-d'],
            'deposit_amount' => ['required', 'numeric'],
            'remarks' => ['nullable'],
        ]);

        BankDeposit::find($request->id)->update([
            'bank_id' => $request->bank_id,
            'date' => $request->date,
            'deposit_amount' => $request->deposit_amount,
            'remarks' => $request->remarks,
        ]);
        CashStatement::where('insert_id', $request->id)->update([
            'date' => $request->date,
            'remarks' => 'Bank Deposite',
            'debit' => $request->deposit_amount ?? 0,
            'credit' => 0,
            'insert_status' => 5,
            'insert_id' => $request->bank_id,
        ]);
        return redirect()->back()->with('success', 'Bank Deposite Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        BankDeposit::find($id)->delete();
        return redirect()->back()->with('success', 'Bank Deposite Deleted Successfully');
    }

}
