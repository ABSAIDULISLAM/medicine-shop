<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CashStatement;
use App\Models\CollectionInfo;
use App\Models\Contact;
use App\Models\CustomerLedger;
use App\Models\Income;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CollectionController extends Controller
{
    public function index()
    {
       $data = CollectionInfo::with('customer')->orderBy('id', 'desc')->get();

        return view('admin.collection.index',compact('data'));
    }


    public function MoneyRecipt($id)
    {
        $data = CollectionInfo::with('customer')->where('id', $id)->first();
        return view('admin.collection.money-recipt',compact('data'));
    }

    public function create()
    {
        $customer = Contact::where('contact_type', 1)->select('id', 'company_name')->get();
        return view('admin.collection.create', compact('customer'));
    }

    public function CustomerInfo(Request $request)
    {
        $customerId = $request->input('cus_id');

        $latestLedger = CustomerLedger::where('customer_id', $customerId)
                                    ->orderBy('id', 'desc')
                                    ->first();
        $previousDue = $latestLedger ? $latestLedger->balance : 0;

        $customerData = Contact::find($customerId);

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
        $request->validate([
            'customer_id' => ['required', 'exists:contacts,id'],
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

        $collectioninfo = new CollectionInfo();
        $collectioninfo->customer_id = $request->customer_id;
        $collectioninfo->address = $request->address;
        $collectioninfo->contact_number = $request->contact_number;
        $collectioninfo->totalDues	 = $request->totalDues ?? 0;
        $collectioninfo->date	 = $request->date;
        $collectioninfo->remarks	 = $request->remarks ?? $request->money_reset;
        $collectioninfo->paid	 = $request->paid;
        $collectioninfo->discount	 = $request->discount ?? 0;
        $collectioninfo->currDues	 = $request->currDues ?? 0;
        $collectioninfo->payment_method	 = $request->payment_method;
        $collectioninfo->bankName	 = $request->bank_id?? 0;
        $collectioninfo->cheque_num		 = $request->chequeNum ?? 0;
        $collectioninfo->cheque_app_date	 = $request->chuque_app_date?? 0;
        $collectioninfo->collection_date	 = $request->date;
        $collectioninfo->creator		 = Auth::id();
        $collectioninfo->money_reset	 = $request->money_reset;
        $collectioninfo->update_by	 = Auth::id();
        $collectioninfo->save();

        $latestData = CustomerLedger::where('customer_id', $request->customer_id)->orderBy('id', 'desc')->first();
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
            $customerLedger = new CustomerLedger();
            $customerLedger->customer_id = $request->customer_id;
            $customerLedger->description = $request->money_reset;
            $customerLedger->previous_due = $request->totalDues ?? 0;
            $customerLedger->debit = 0;
            $customerLedger->credit = $request->paid ?? 0;
            $customerLedger->discount = $request->discount ?? 0;
            $customerLedger->balance = $due;
            $customerLedger->insert_status = 2; // 2 = collection
            $customerLedger->insert_id = $collectioninfo->id;
            $customerLedger->date = $request->date;
            $customerLedger->created_by = Auth::id();
            $customerLedger->save();

            CashStatement::create([
                'date' => $request->date,
                'remarks' => $request->money_reset,
                'debit' => 0,
                'credit' => $request->paid ?? 0,
                'insert_status' => 2, // 2 ==  collection
                'insert_id' => $collectioninfo->id,
            ]);



        return redirect()->route('Collection.index')->with('success', 'Due Collected Successfully');

    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        CollectionInfo::find($id)->delete();
        return redirect()->back()->with('success', 'Collection Info Deleted Successfully');
    }
}
