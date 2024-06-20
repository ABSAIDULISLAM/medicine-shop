<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\AccountHead;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class AccountHeadController extends Controller
{
    public function index()
    {
        $data = AccountHead::with('journal')->orderBy('id', 'desc')->paginate();
        $journal = Journal::orderBy('id','asc')->get();

        return view('admin.settings.account-head.index',compact('data','journal'));
    }


    public function store(Request $request)
    {
        $validated = $request->validate([
            'journal_id' => ['required'],
            'head_name' => ['required', 'string', 'max:100'],
        ]);

        AccountHead::create([
            'journal_id' => $request->journal_id,
            'head_name' => $request->head_name,
            'status' => 1,
        ]);
        return redirect()->back()->with('success', 'Account head Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'journal_id' => ['required'],
            'head_name' => ['required', 'string', 'max:100'],
        ]);

        AccountHead::find($request->id)->update([
            'journal_id' => $request->journal_id,
            'head_name' => $request->head_name,
            'status' => 1,
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


