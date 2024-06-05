<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\BankSetup;
use App\Models\BankTransfer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class BankTransferController extends Controller
{
    public function index()
    {
       $data =  BankTransfer::with(['transfer','savings'])->orderBy('id','desc')->get();
        return view('admin.account.bank-transfer.index',compact('data'));
    }

    public function create()
    {
        $bank = BankSetup::orderBy('id','asc')->get();
        return view('admin.account.bank-transfer.create',compact('bank'));
    }

    public function balance(Request $request)
    {
        $bankId = $request->input('tranfer_bank_id');

        $previousDue = BankSetup::where('id', $bankId)->value('deposit_balance');

        if (!is_null($previousDue)) {
            $response = [
                'prevdue' => $previousDue,
            ];
        } else {
            $response = [
                'prevdue' => 0,
            ];
        }

        return response()->json($response);
    }
    public function balancesavings(Request $request)
    {
        $bankId = $request->input('saving_bank_id');

        $previousDue = BankSetup::where('id', $bankId)->value('deposit_balance');

        if (!is_null($previousDue)) {
            $response = [
                'prevdue' => $previousDue,
            ];
        } else {
            $response = [
                'prevdue' => 0,
            ];
        }

        return response()->json($response);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'transfer_bank_id' => ['required'],
            'saving_bank_id' => ['required'],
            'transfer_amount' => ['required', 'numeric'],
            'cheque_number' => ['nullable'],
            'transfer_bank_amount' => ['nullable'],
            'saving_bank_amount' => ['nullable'],
            'transfer_date' => ['required','date','date_format:Y-m-d'],
        ]);

        BankTransfer::create([
            'transfer_bank_id' => $request->transfer_bank_id,
            'saving_bank_id' => $request->saving_bank_id,
            'transfer_amount' => $request->transfer_amount,
            'cheque_number' => $request->cheque_number,
            'transfer_bank_amount' => $request->transfer_bank_amount,
            'saving_bank_amount' => $request->saving_bank_amount,
            'transfer_date' => $request->transfer_date,
        ]);

        return redirect()->route('Account.bank.transfer.list')->with('success', 'Bank Transfer Created Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        BankTransfer::find($id)->delete();
        return redirect()->back()->with('success', 'Bank Transfer Deleted Successfully');
    }
}
