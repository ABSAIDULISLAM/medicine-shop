<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\CustomerLedger;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class CustomerController extends Controller
{
    public function index()
    {
        $data = [];

        Contact::where('contact_type', 1)->latest()->chunk(20, function ($contacts) use (& $data) {
            foreach ($contacts as $contact) {
                $data[] = $contact;
            }
        });

        return view('admin.contact.customer-list', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'contact_type' => ['required'],
            'company_name' => ['required', 'string', 'max:100'],
            'contact_person' => ['required', 'string', 'max:100'],
            'contact_num' => ['required','regex:/\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'email_address' => ['nullable', 'email', 'max:100'],
            'address' => ['nullable', 'string', 'max:100'],
            'opening_balance' => ['nullable', 'numeric'],
            'status' => ['required'],
        ]);

        $customer = Contact::create([
            'contact_type' => $request->contact_type,
            'company_name' => $request->company_name,
            'contact_person' => $request->contact_person,
            'contact_num' => $request->contact_num,
            'email_address' => $request->email_address,
            'address' => $request->address,
            'created_by' => auth()->user()->id,
            'opening_balance' => $request->opening_balance,
            'status' => $request->status,
        ]);

        CustomerLedger::create([
            'customer_id' => $customer->id,
            'description' => 'Opening Balance',
            'previous_due' => 0,
            'debit' => 0,
            'credit' => $customer->opening_balance,
            'discount' => 0,
            'balance' => $customer->opening_balance,
            'insert_status' => 1,
            'insert_id' => $customer->id,
            'date' => Carbon::now(),
            'created_by' => Auth::id(),
        ]);


        return redirect()->back()->with('success', 'Customer Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => ['exists:contacts,id'],
            'company_name' => ['required', 'string', 'max:100'],
            'contact_person' => ['required', 'string', 'max:100'],
            'contact_num' => ['required','regex:/\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'email_address' => ['nullable', 'email', 'max:100'],
            'address' => ['nullable', 'string', 'max:100'],
            'opening_balance' => ['nullable', 'numeric'],
            'status' => ['required'],
        ]);

        Contact::find($request->id)->update([
            'company_name' => $request->company_name,
            'contact_person' => $request->contact_person,
            'contact_num' => $request->contact_num,
            'email_address' => $request->email_address,
            'address' => $request->address,
            'opening_balance' => $request->opening_balance,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Customer Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Contact::find($id)->delete();
        return redirect()->back()->with('success', 'Customer Deleted Successfully');
    }

}
