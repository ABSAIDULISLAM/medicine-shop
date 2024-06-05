<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExpenseRequest;
use App\Models\AccountHead;
use App\Models\BankSetup;
use App\Models\Employee;
use App\Models\Income;
use App\Models\SecondSubHead;
use App\Models\SubHead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class ExpenseController extends Controller
{
    public function index()
    {
        $expense = Income::with('accounthead')->where('account_type', 0)->orderBy('id', 'desc')->get();

        return view('admin.account.expense.index', compact('expense'));
    }

    public function invoice($id){
        $data = Income::with(['accounthead', 'subhead',
        'employee'=>function($employee){
            $employee->select('id','employee_name');
        }])
        ->find($id);
        return view('admin.account.expense.invoice', compact('data'));
    }

    public function create()
    {
        $accountHead = AccountHead::orderBy('id', 'asc')->get();
        $subHead = SubHead::orderBy('id', 'asc')->get();
        $scnSubHead = SecondSubHead::orderBy('id', 'asc')->get();
        $employee = Employee::orderBy('id', 'asc')->get();
        $bank = BankSetup::orderBy('id', 'asc')->get();

        return view('admin.account.expense.create', compact([
            'accountHead',
            'subHead',
            'scnSubHead',
            'employee',
            'bank',
        ]));
    }

    public function bankBalance(Request $request)
    {
        $bankId = $request->input('bank_id');
        $bank = BankSetup::find($bankId);

        if ($bank) {
            $previousAmount = $bank->opening_balance;
            return response()->json($previousAmount);
        } else {
            return response()->json('Bank not found', 404);
        }
    }

    public function store(ExpenseRequest $request)
    {
        $expense = new Income();
        $expense->account_head = $request->account_head;
        $expense->sub_head_id = $request->sub_head_id;
        $expense->scnd_head_id = $request->scnd_head_id;
        $expense->money_receipt = $request->voucher_no;
        $expense->employee_id = $request->employee_id;
        $expense->purpose = $request->remarks;
        $expense->date = $request->date;
        $expense->amount = $request->amount;
        $expense->credit_amount = 0;
        $expense->status = $request->status;
        $expense->creator = Auth::id();
        $expense->account_type = 0; //0 = expense
        $expense->payment_method = $request->payment_method;
        $expense->bank_id = $request->bank_id;
        $expense->chequeNum = $request->chequeNum;
        $expense->chuque_app_date = $request->chuque_app_date;
        $expense->cashAmount = $request->cashAmount;

        if($request->hasFile('income_file')){
            $image = Upload($request->file('income_file'), 'uploads/documents/', 400, 400);
            $expense->income_file = $image;
        }
        $expense->save();

        return redirect()->route('Account.expense.list')->with('success', 'Expense Inserted Successfully');
    }

    public function edit($id)
    {
        $id = crypt::decrypt($id);
        $accountHead = AccountHead::orderBy('id', 'asc')->get();
        $subHead = SubHead::orderBy('id', 'asc')->get();
        $scnSubHead = SecondSubHead::orderBy('id', 'asc')->get();
        $employee = Employee::orderBy('id', 'asc')->get();
        $bank = BankSetup::orderBy('id', 'asc')->get();
         $data = Income::find($id);

        return view('admin.account.expense.edit', compact([
            'accountHead',
            'subHead',
            'scnSubHead',
            'employee',
            'bank',
            'data',
        ]));
    }

    public function update(ExpenseRequest $request)
    {
        $expense = Income::find($request->id);
        $expense->account_head = $request->account_head;
        $expense->sub_head_id = $request->sub_head_id;
        $expense->scnd_head_id = $request->scnd_head_id;
        $expense->money_receipt = $request->voucher_no;
        $expense->employee_id = $request->employee_id;
        $expense->purpose = $request->remarks;
        $expense->date = $request->date;
        $expense->amount = $request->amount;
        $expense->credit_amount = 0;
        $expense->status = $request->status;
        $expense->creator = Auth::id();
        $expense->account_type = 0; //0 = expense
        $expense->payment_method = $request->payment_method;
        $expense->bank_id = $request->bank_id;
        $expense->chequeNum = $request->chequeNum;
        $expense->chuque_app_date = $request->chuque_app_date;
        $expense->cashAmount = $request->cashAmount;

        if($request->hasFile('income_file')){
            if ($expense->income_file && file_exists($expense->income_file)) {
                unlink($expense->income_file);
            }
            $image = Upload($request->file('income_file'), 'uploads/documents/', 400, 400);
            $expense->income_file = $image;
        }
        $expense->save();

        return redirect()->route('Account.expense.list')->with('success', 'Expense Updated Successfully');

    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Income::find($id)->delete();
        return redirect()->back()->with('success', 'Expense Deleted Successfully');
    }
}
