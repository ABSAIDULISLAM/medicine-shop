<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Journal;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class JournalController extends Controller
{
    public function index()
    {
        $data = Journal::orderBy('name', 'asc')->paginate(200);
        return view('admin.settings.journal.index', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Journal::create([
            'name' => $request->name,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Journal Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Journal::find($request->id)->update([
            'name' => $request->name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Journal Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Journal::find($id)->delete();
        return redirect()->back()->with('success', 'Journal Deleted Successfully');
    }



}


