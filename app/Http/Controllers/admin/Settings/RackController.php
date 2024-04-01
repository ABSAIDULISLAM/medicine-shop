<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\Rack;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class RackController extends Controller
{
    public function index()
    {
        $data = Rack::orderBy('id', 'asc')->paginate(200);
        return view('admin.settings.rack.index', compact('data'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'rack_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Rack::create([
            'rack_name' => $request->rack_name,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Rack Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'rack_name' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        Rack::find($request->id)->update([
            'rack_name' => $request->rack_name,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Medicine Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Rack::find($id)->delete();
        return redirect()->back()->with('success', 'Rack Deleted Successfully');
    }



}


