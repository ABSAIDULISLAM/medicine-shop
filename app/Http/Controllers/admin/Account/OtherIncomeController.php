<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ExpenseRequest;
use App\Models\AccountHead;
use App\Models\BankSetup;
use App\Models\CashStatement;
use App\Models\Employee;
use App\Models\Income;
use App\Models\SecondSubHead;
use App\Models\SubHead;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class OtherIncomeController extends Controller
{
    public function index(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $inv = $request->input('voucher_no', '');
        $accountHead = $request->input('account_head', 0);

        $query = Income::with('accounthead')
                        ->where('account_type', 1)
                        ->when($from_date && $to_date, function($query) use ($from_date, $to_date) {
                            return $query->whereBetween('date', [$from_date, $to_date]);
                        })
                        ->when($inv, function($query) use ($inv) {
                            return $query->where('money_receipt', $inv);
                        })
                        ->when($accountHead, function($query) use ($accountHead) {
                            return $query->where('account_head', $accountHead);
                        });

        $income = $query->orderBy('id', 'desc')->get();
        $accountheads = AccountHead::orderBy('id', 'desc')->get();

        return view('admin.account.other-income.index', compact('income', 'from_date', 'to_date', 'inv', 'accountheads', 'accountHead'));

    }

    public function invoice($id){
        $data = Income::with(['accounthead', 'subhead',
        'employee'=>function($employee){
            $employee->select('id','employee_name');
        }])
        ->find($id);
        return view('admin.account.other-income.invoice', compact('data'));
    }

    public function create()
    {
        $accountHead = AccountHead::orderBy('id', 'asc')->get();
        $subHead = SubHead::orderBy('id', 'asc')->get();
        $scnSubHead = SecondSubHead::orderBy('id', 'asc')->get();
        $employee = Employee::orderBy('id', 'asc')->get();
        $bank = BankSetup::orderBy('id', 'asc')->get();

        return view('admin.account.other-income.create', compact([
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
        $expense->account_type = 1; //0 = income
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

        CashStatement::create([
            'date'=>$request->date,
            'remarks'=>$request->remarks,
            'debit'=>$request->amount,
            'credit'=>0,
            'insert_status'=> 2, //2 == collection
            'insert_id'=> $request->employee_id,
        ]);

        return redirect()->route('Account.other-income.list')->with('success', 'Income Inserted Successfully');
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

        return view('admin.account.other-income.edit', compact([
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
        $expense->account_type = 1; //1 = income
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

        CashStatement::find($request->id)->update([
            'date'=>$request->date,
            'remarks'=>$request->remarks,
            'debit'=>$request->amount,
            'credit'=>0,
            'insert_status'=> 2, //2 == collection
            'insert_id'=> $expense->id,
        ]);
        return redirect()->route('Account.other-income.list')->with('success', 'Expense Updated Successfully');

    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Income::find($id)->delete();
        return redirect()->back()->with('success', 'Expense Deleted Successfully');
    }
}
