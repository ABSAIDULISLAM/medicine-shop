<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Generic;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Cache;
use Illuminate\Support\Facades\Crypt;

class GenericController extends Controller
{
    public function index()
    {
        // $minutes = 60;
        // $data = Cache::remember('data', $minutes, function () {
        //     return Generic::orderBy('generic_name', 'asc')->paginate(50);
        // });
        $data = Generic::orderBy('id', 'asc')->get();
        return view('admin.settings.generic.index', compact('data'));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'generic_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Generic::create([
            'generic_name' => $request->generic_name,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Generic Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'generic_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Generic::find($request->id)->update([
            'generic_name' => $request->generic_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Generic Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Generic::find($id)->delete();
        return redirect()->back()->with('success', 'Generic Deleted Successfully');
    }



}
