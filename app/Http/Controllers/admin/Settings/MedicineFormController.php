<?php

namespace App\Http\Controllers\admin\Settings;

use App\Http\Controllers\Controller;
use App\Models\MedicineForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Crypt;

class MedicineFormController extends Controller
{
    public function index()
    {

        $data = MedicineForm::orderBy('id', 'asc')->paginate(200);
        return view('admin.settings.medicine-form.index', compact('data'));

    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'medicine_strength' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        MedicineForm::create([
            'medicine_strength' => $request->medicine_strength,
            'status' => $request->status,
        ]);
        return redirect()->back()->with('success', 'Medicine Form Created Successfully');
    }

    public function update(Request $request)
    {
        $validated = $request->validate([
            'medicine_strength' => ['required', 'string', 'max:100'],
            'status' => ['required'],
        ]);

        MedicineForm::find($request->id)->update([
            'medicine_strength' => $request->medicine_strength,
            'status' => $request->status,
        ]);

        return redirect()->back()->with('success', 'Medicine Form Updated Successfully');
    }


    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        MedicineForm::find($id)->delete();
        return redirect()->back()->with('success', 'Medicine Form Deleted Successfully');
    }



}


