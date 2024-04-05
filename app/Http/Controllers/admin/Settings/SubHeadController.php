<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Account;
use App\Models\AccountHead;
use App\Models\Journal;
use App\Models\SubHead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class SubHeadController extends Controller
{
    public function index()
    {
        $accountheads = AccountHead::all();
        $journals = Journal::all();

        $data = SubHead::with(['accounthead','journal'])->orderBy('id', 'desc')->paginate();
        return view('admin.settings.sub-head.index', compact([
            'data',
            'journals',
            'accountheads'
        ]));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'account_head' => ['required', 'exists:account_heads,id'],
            'journal_id' => ['required', 'exists:journals,id'],
            'sub_head' => ['required'],
        ]);
       $subhead = new SubHead();

       $subhead->account_head =$request->account_head;
       $subhead->journal_id =$request->journal_id;
       $subhead->sub_head =$request->sub_head;
       $subhead->save();

        return redirect()->back()->with('success', 'Sub head Created Successfully');
    }

    public function update(Request $request)
    {

        $validated = $request->validate([
            'account_head' => ['required', 'exists:account_heads,id'],
            'journal_id' => ['required', 'exists:journals,id'],
            'sub_head' => ['required'],
        ]);

        SubHead::find($request->id)->update([
            'account_head' => $request->account_head,
            'journal_id' => $request->journal_id,
            'sub_head' => $request->sub_head,
        ]);
        return redirect()->back()->with('success', 'Sub head Upated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        SubHead::find($id)->delete();
        return redirect()->back()->with('success', 'Sub head Deleted Successfully');
    }

}


