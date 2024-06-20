<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\BankDeposit;
use App\Models\BankSetup;
use App\Models\BankWithdraw;
use App\Models\CashStatement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class BankWithdrawalController extends Controller
{
    public function index()
    {
        $data = BankWithdraw::with('bank')->orderBy('id','desc')->get();
        $bank = BankSetup::orderBy('id','asc')->get();
        return view('admin.account.bank-withdraw.index', compact('data','bank'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'bank_id' => ['required'],
            'date' => ['required','date','date_format:Y-m-d'],
            'deposit_amount' => ['required', 'numeric'],
            'remarks' => ['nullable'],
        ]);

        BankWithdraw::create([
            'bank_id' => $request->bank_id,
            'date' => $request->date,
            'withdraw_amount' => $request->deposit_amount,
            'remarks' => $request->remarks,
            'create_by' => Auth::id(),
        ]);
        CashStatement::create([
            'date' => $request->date,
            'remarks' => 'Bank Withdrawal',
            'debit' => 0,
            'credit' => $request->deposit_amount ?? 0,
            'insert_status' => 5,
            'insert_id' => $request->bank_id,
        ]);
        return redirect()->back()->with('success', 'Bank Withdraw Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'bank_id' => ['required'],
            'date' => ['required','date','date_format:Y-m-d'],
            'deposit_amount' => ['required', 'numeric'],
            'remarks' => ['nullable'],
        ]);

        BankWithdraw::find($request->id)->update([
            'bank_id' => $request->bank_id,
            'date' => $request->date,
            'withdraw_amount' => $request->deposit_amount,
            'remarks' => $request->remarks,
        ]);

        CashStatement::where('insert_id', $request->id)->update([
            'date' => $request->date,
            'remarks' => 'Bank Withdrawal',
            'debit' => 0,
            'credit' => $request->deposit_amount ?? 0,
            'insert_status' => 5,
            'insert_id' => $request->bank_id,
        ]);
        return redirect()->back()->with('success', 'Bank Withdraw Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        BankWithdraw::find($id)->delete();
        return redirect()->back()->with('success', 'Bank Withdraw Deleted Successfully');
    }
}
