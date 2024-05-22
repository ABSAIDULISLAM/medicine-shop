<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Cache;

class SupliyerController extends Controller
{
    public function index()
    {
        $cacheKey = 'supplier_list_cache';
        if (Cache::has($cacheKey)) {
            $data = Cache::get($cacheKey);
        } else {
            $data = [];
            Contact::where('contact_type', 2)->latest()->chunk(20, function ($contacts) use (&$data) {
                foreach ($contacts as $contact) {
                    $data[] = $contact;
                }
            });
            Cache::put($cacheKey, $data, now()->addHours(1));
        }

        return view('admin.contact.suplyer-list', compact('data'));
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

        Contact::create([
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
        Cache::forget('supplier_list_cache');
        return redirect()->back()->with('success', 'Supplier Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'id' => ['required', 'exists:contacts,id'],
            'company_name' => ['required', 'string', 'max:100'],
            'contact_person' => ['required', 'string', 'max:100'],
            'contact_num' => ['required', 'regex:/\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'email_address' => ['nullable', 'email', 'max:100'],
            'address' => ['nullable', 'string', 'max:100'],
            'opening_balance' => ['nullable', 'numeric'],
            'status' => ['required'],
        ]);

        $data = Contact::findOrFail($request->id);
        if ($data) {
            $data->update([
                'company_name' => $request->company_name,
                'contact_person' => $request->contact_person,
                'contact_num' => $request->contact_num,
                'email_address' => $request->email_address,
                'address' => $request->address,
                'opening_balance' => $request->opening_balance,
                'status' => $request->status,
            ]);
            Cache::forget('supplier_list_cache');
            return redirect()->back()->with('success', 'Supplier Updated Successfully');
        } else {
            return redirect()->back()->with('error', 'No Item Found');
        }
    }



    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Contact::find($id)->delete();
        Cache::forget('supplier_list_cache');
        return redirect()->back()->with('success', 'Supplier Deleted Successfully');
    }
}
