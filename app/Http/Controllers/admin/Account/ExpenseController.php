<?php

namespace App\Http\Controllers\Admin\Account;

use App\Http\Controllers\Controller;
use App\Models\AccountHead;
use App\Models\BankSetup;
use App\Models\Employee;
use App\Models\Income;
use App\Models\SecondSubHead;
use App\Models\SubHead;
use Illuminate\Http\Request;

class ExpenseController extends Controller
{
    public function index()
    {
        $expense = Income::with('accounthead')->where('account_type', 0)->get();

        return view('admin.account.expense.index', compact('expense'));
    }


    public function create()
    {
        $accountHead = AccountHead::orderBy('id', 'asc')->get();;
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

    public function store(Request $request)
    {
        $validated = $request->validate([
            'account_head' => ['required', 'exists:account_heads,id'],
            'employee_id' => ['required', 'exists:employees,id'],
            'amount' => ['required', 'numeric','max_digits:10', 'min_digits:1' ],
            'creator' => ['nullable'],
            'bank_id' => ['nullable','exists:bank_setups,id'],
            'sub_head_id' => ['required','exists:sub_heads,id'],
            'remarks' => ['nullable','string'],
            'scnd_head_id' => ['required', 'exists:second_sub_heads,id'],
            'date' => ['required','date', 'date_format:d/m/Y' ],
            'cashAmount' => ['nullable','string', 'max:256'],
            'chequeNum' => ['nullable','string', 'max:256'],
            'voucher_no' => ['nullable','string', 'max:256'],
            'payment_method' => ['nullable'],
            'status' => ['nullable'],
            'chuque_app_date' => ['nullable'],
            'expense_file' => ['nullable', 'image', 'mimes:png,jpg,jpeg,webp'],
        ]);

        $expense = new Income();
        $expense->account_head = $request->account_head;
        $expense->employee_id = $request->employee_id;
        $expense->amount = $request->amount;
        // $expense->creator = $request->creator;
        $expense->bank_id = $request->bank_id;
        $expense->sub_head_id = $request->sub_head_id;
        $expense->purpose = $request->remarks;
        $expense->scnd_head_id = $request->scnd_head_id;
        $expense->date = $request->date;
        $expense->cashAmount = $request->cashAmount;
        $expense->chequeNum = $request->chequeNum;
        $expense->money_receipt = $request->voucher_no;
        $expense->payment_method = $request->payment_method;
        $expense->status = $request->status;
        $expense->chuque_app_date = $request->chuque_app_date;
        $expense->expense_file = $request->expense_file;
        $expense->save();

        return redirect()->route('Medicine.index')->with('success', 'Expense Inserted Successfully');

    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Medicine::with(['generic','company','mediform', 'rack'])->find($id);

        $generics = Generic::orderBy('id', 'asc')->get();;
        $mediForms = MedicineForm::orderBy('id', 'asc')->get();
        $mediType = MedicineType::orderBy('id', 'asc')->get();
        $companies = Company::orderBy('id', 'asc')->get();
        $racks = Rack::orderBy('id', 'asc')->get();

        return view('admin.medicine.edit', compact([
            'generics',
            'mediForms',
            'mediType',
            'companies',
            'racks',
            'data',
        ]));
    }

    public function addMedicineType(Request $request)
    {
        $medicineType = new MedicineType();
        $medicineType->medicine_type = $request->medicineType;
        $medicineType->status = $request->medicineStatus;
        $medicineType->save();
        return response()->json($medicineType);
    }

    public function update(Request $request)
    {
        // return $request->all();
        $validated = $request->validate([
            'medicine_name' => ['required','string', 'max:256'],
            'purchases_price' => ['required', 'numeric','min:0'],
            'sale_price' => ['required', 'numeric','min:0'],
            'min_stock' => ['required', 'numeric','min:0'],
            'company_id' => ['required','integer','exists:companies,id'],
            'rack_id' => ['required','integer','exists:racks,id'],
            'generic_id' => ['required','integer','exists:generics,id'],
            'medicine_form' => ['required','integer','exists:medicine_forms,id'],
            // 'indication' => ['nullable','string', 'max:256'],
            // 'side_effect' => ['nullable','string', 'max:256'],

            'medicine_strength' => ['nullable','string', 'max:256'],
            'administration' => ['nullable','string', 'max:256'],
        ]);

        $medicine = Medicine::find($request->id);

        $medicine->medicine_name = $request->medicine_name;
        $medicine->purchases_price = $request->purchases_price;
        $medicine->sale_price = $request->sale_price;
        $medicine->min_stock = $request->min_stock;
        $medicine->company_id = $request->company_id;
        $medicine->company_name = 'Random Company';
        $medicine->generic_id = $request->generic_id;
        $medicine->generic_name = 'Random Generic';
        $medicine->rack_id = $request->rack_id;
        $medicine->medicine_form = $request->medicine_form;
        // $medicine->indication = $request->indication;
        // $medicine->side_effect = $request->side_effect;
        $medicine->medicine_strength = $request->medicine_strength;
        $medicine->administration = $request->administration;
        $medicine->expire_date = $request->expire_date;
        $medicine->box_qty = $request->box_qty;
        $medicine->mrp_price = $request->mrp_price;
        $medicine->trade_price = $request->trade_price;
        $medicine->opening_stock = $request->opening_stock;
        $medicine->save();

        return redirect()->route('Medicine.index')->with('success', 'Medicine Updated Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Medicine::find($id)->delete();
        return redirect()->back()->with('success', 'Medicine Deleted Successfully');
    }
}
