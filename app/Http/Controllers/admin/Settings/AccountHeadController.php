<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\AccountHead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AccountHeadController extends Controller
{
    public function index()
    {
        $data = AccountHead::orderBy('id', 'desc')->paginate();
        return view('admin.settings.account-head.index',compact('data'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'head_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        AccountHead::create([
            'head_name' => $request->head_name,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Account head Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'head_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        AccountHead::find($request->id)->update([
            'head_name' => $request->head_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Account head Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        AccountHead::find($id)->delete();
        return redirect()->back()->with('success', 'Account head Deleted Successfully');
    }

}


