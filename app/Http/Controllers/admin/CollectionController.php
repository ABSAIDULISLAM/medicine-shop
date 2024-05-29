<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\CustomerLedger;
use App\Models\Income;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
       return Income::orderBy('id', 'desc')->get();

        return view('admin.collection.index');
    }


    public function create()
    {
        $customer = Contact::where('contact_type', 1)->select('id', 'company_name')->get();
        return view('admin.collection.create', compact('customer'));
    }

    public function CustomerInfo(Request $request)
    {
        $customerId = $request->input('cus_id');

        $data = Contact::where('id', $customerId)->first();
        $previousDue = CustomerLedger::where('customer_id', $customerId)->value('previous_due');

        if (!is_null($data)) {
            $response = [
                'data' => $data,
                'previousDue' => $previousDue,
            ];
            return response()->json($response);
        }
    }


    public function edit()
    {
        return view('admin.collection.edit');
    }
}
