<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CashStatement;
use App\Models\Contact;
use App\Models\PaymentInfo;
use App\Models\SupplierLedger;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class SupliyerPaymentController extends Controller
{
    public function index(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusId = $request->input('customer_id', 0);

        $query = PaymentInfo::with('customer');

        if (!empty($cusId)) {
            $query->where('supplier_id', $cusId);
        }
        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }

        $data = $query->orderBy('id', 'desc')->get();
        $customer = Contact::where('contact_type', 2)->select('id', 'company_name')->get();
        return view('admin.supliyer-payment.index', compact('data', 'from_date', 'to_date', 'cusId', 'customer'));
    }


    public function MoneyRecipt($id)
    {
        $data = PaymentInfo::with('customer')->where('id', $id)->first();
        return view('admin.supliyer-payment.money-recipt', compact('data'));
    }

    public function create()
    {
        $supplier = Contact::where('contact_type', 2)->select('id', 'company_name')->get();
        return view('admin.supliyer-payment.create', compact('supplier'));
    }

    public function SupplierInfo(Request $request)
    {
        $supId = $request->input('supplier_id');

        $latestLedger = SupplierLedger::where('supplier_id', $supId)
            ->orderBy('id', 'desc')
            ->first();
        $previousDue = $latestLedger ? $latestLedger->balance : 0;

        $customerData = Contact::find($supId);

        if ($customerData) {
            $response = [
                'data' => $customerData,
                'previousDue' => $previousDue,
            ];
            return response()->json($response);
        } else {
            return response()->json(['message' => 'Customer not found'], 404);
        }
    }

    public function store(Request $request)
    {
        // return $request->all();
        $request->validate([
            'supplier_id' => ['required', 'exists:contacts,id'],
            'totalDues' => ['nullable'],
            'remarks' => ['nullable'],
            'bank_id' => ['nullable'],
            'address' => ['required'],
            'date' => ['required', 'date', 'date_format:Y-m-d'],
            'paid' => ['required'],
            'chequeNum' => ['nullable'],
            'money_reset' => ['required'],
            'payment_method' => ['required'],
            'discount' => ['nullable'],
            'currDues' => ['required'],
            'chuque_app_date' => ['nullable'],
        ]);

        $payment = new PaymentInfo();
        $payment->supplier_id = $request->supplier_id;
        $payment->address = $request->address;
        $payment->contact_number = $request->contact_number;
        $payment->totalDues     = $request->totalDues ?? 0;
        $payment->date     = $request->date;
        $payment->remarks     = $request->remarks ?? $request->money_reset;
        $payment->payment     = $request->paid;
        $payment->discount     = $request->discount ?? 0;
        $payment->currDues     = $request->currDues ?? 0;
        $payment->payment_method     = $request->payment_method;
        $payment->bankName     = $request->bank_id ?? 0;
        $payment->cheque_num         = $request->chequeNum ?? 0;
        $payment->cheque_app_date     = $request->chuque_app_date ?? 0;
        $payment->collection_date     = $request->date;
        $payment->creator         = Auth::id();
        $payment->money_reset     = $request->money_reset;
        $payment->update_by     = Auth::id();
        $payment->save();

        $latestData = SupplierLedger::where('supplier_id', $request->supplier_id)->orderBy('id', 'desc')->first();
        $due = 0;

        if ($latestData) {
            if ($latestData->balance >= $request->paid) {
                $due = $latestData->balance - $request->paid;
            } else {
                $due = 0;
            }
        } else {
            $due = ($request->previous_dues ?? 0) - ($request->paid ?? 0);
        }
        $customerLedger = new SupplierLedger();
        $customerLedger->supplier_id = $request->supplier_id;
        $customerLedger->description = $request->money_reset;
        $customerLedger->previous_due = $request->totalDues ?? 0;
        $customerLedger->debit = $request->paid ?? 0;
        $customerLedger->credit = 0;
        $customerLedger->discount = $request->discount ?? 0;
        $customerLedger->balance = $due;
        $customerLedger->insert_status = 2; // 2 = sales
        $customerLedger->insert_id = $payment->id;
        $customerLedger->date = $request->date;
        $customerLedger->created_by = Auth::id();
        $customerLedger->save();

        CashStatement::create([
            'date' => $request->date,
            'remarks' => $request->money_reset,
            'debit' => $request->paid ?? 0,
            'credit' => 0,
            'insert_status' => 3, // 3 ==  Expense means Purchase
            'insert_id' => $request->supplier_id,
        ]);

        return redirect()->route('Supliyer-payment.index')->with('success', 'Supplier Payment Stored Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        PaymentInfo::find($id)->delete();
        return redirect()->back()->with('success', 'Collection Info Deleted Successfully');
    }
}
