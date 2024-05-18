<?php

namespace App\Http\Controllers\Admin;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Company;
use App\Models\Generic;
use App\Models\MedicineForm;
use App\Models\MedicineType;
use App\Models\Rack;
use Illuminate\Support\Facades\Crypt;

class MedicineController extends Controller
{
    public function index()
    {
        $data = collect();
        Medicine::with('generic', 'company', 'mediform')
            ->orderBy('medicine_name', 'asc')
            ->chunk(20, function ($medicines) use ($data) {
                foreach ($medicines as $medicine) {
                    $data->push($medicine);
                }
            });

        return view('admin.medicine.index', compact('data'));
    }

    public function create()
    {
        $generics = Generic::orderBy('id', 'asc')->get();;
        $mediForms = MedicineForm::orderBy('id', 'asc')->get();
        $companies = Company::orderBy('id', 'asc')->get();
        $racks = Rack::orderBy('id', 'asc')->get();

        return view('admin.medicine.create', compact([
            'generics',
            'mediForms',
            'companies',
            'racks',
        ]));
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'medicine_name' => ['required','string', 'max:256'],
            'purchases_price' => ['required', 'numeric','min:0', 'max:1000000000'],
            'sale_price' => ['required', 'numeric','min:0', 'max:1000000000'],
            'min_stock' => ['required', 'numeric','min:0', 'max:1000000000'],
            'company_id' => ['required','integer','exists:companies,id'],
            'rack_id' => ['required','integer','exists:racks,id'],
            'generic_id' => ['required','integer','exists:generics,id'],
            'medicine_form' => ['required','integer','exists:medicine_forms,id'],
            'indication' => ['nullable','string', 'max:256'],
            'side_effect' => ['nullable','string', 'max:256'],
            'medicine_strength' => ['nullable','string', 'max:256'],
            'administration' => ['nullable','string', 'max:256'],
        ]);

        $medicine = new Medicine();
        $medicine->medicine_name = $request->medicine_name;
        $medicine->purchases_price = $request->purchases_price;
        $medicine->sale_price = $request->sale_price;
        $medicine->min_stock = $request->min_stock;
        $medicine->company_id = $request->company_id;
        $medicine->company_name = 'Random Company';
        $medicine->generic_id = $request->generic_id;
        $medicine->generic_name = 'Random Generic';
        $medicine->rack_id = $request->rack_id;
        $medicine->medicine_form = $request->medicine_form;
        $medicine->indication = $request->indication;
        $medicine->side_effect = $request->side_effect;
        $medicine->medicine_strength = $request->medicine_strength;
        $medicine->administration = $request->administration;
        $medicine->medi_type = 1;
        $medicine->serial_number = rand(1000, 1000000);
        $medicine->save();

        return redirect()->route('Medicine.index')->with('success', 'Medicine Inserted Successfully');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);
        $data = Medicine::with(['generic','company','mediform', 'rack'])->find($id);

        $generics = Generic::orderBy('id', 'asc')->get();;
        $mediForms = MedicineForm::orderBy('id', 'asc')->get();
        $mediType = MedicineType::orderBy('id', 'asc')->get();
        $companies = Company::orderBy('id', 'asc')->get();
        $racks = Rack::orderBy('id', 'asc')->get();

        return view('admin.medicine.edit', compact([
            'generics',
            'mediForms',
            'mediType',
            'companies',
            'racks',
            'data',
        ]));
    }

    public function addMedicineType(Request $request)
    {
        $medicineType = new MedicineType();
        $medicineType->medicine_type = $request->medicineType;
        $medicineType->status = $request->medicineStatus;
        $medicineType->save();
        return response()->json($medicineType);
    }

    public function update(Request $request)
    {
        // return $request->all();
        $validated = $request->validate([
            'medicine_name' => ['required','string', 'max:256'],
            'purchases_price' => ['required', 'numeric','min:0'],
            'sale_price' => ['required', 'numeric','min:0'],
            'min_stock' => ['required', 'numeric','min:0'],
            'company_id' => ['required','integer','exists:companies,id'],
            'rack_id' => ['required','integer','exists:racks,id'],
            'generic_id' => ['required','integer','exists:generics,id'],
            'medicine_form' => ['required','integer','exists:medicine_forms,id'],
            // 'indication' => ['nullable','string', 'max:256'],
            // 'side_effect' => ['nullable','string', 'max:256'],

            'medicine_strength' => ['nullable','string', 'max:256'],
            'administration' => ['nullable','string', 'max:256'],
        ]);

        $medicine = Medicine::find($request->id);

        $medicine->medicine_name = $request->medicine_name;
        $medicine->purchases_price = $request->purchases_price;
        $medicine->sale_price = $request->sale_price;
        $medicine->min_stock = $request->min_stock;
        $medicine->company_id = $request->company_id;
        $medicine->company_name = 'Random Company';
        $medicine->generic_id = $request->generic_id;
        $medicine->generic_name = 'Random Generic';
        $medicine->rack_id = $request->rack_id;
        $medicine->medicine_form = $request->medicine_form;
        // $medicine->indication = $request->indication;
        // $medicine->side_effect = $request->side_effect;
        $medicine->medicine_strength = $request->medicine_strength;
        $medicine->administration = $request->administration;
        $medicine->expire_date = $request->expire_date;
        $medicine->box_qty = $request->box_qty;
        $medicine->mrp_price = $request->mrp_price;
        $medicine->trade_price = $request->trade_price;
        $medicine->opening_stock = $request->opening_stock;
        $medicine->save();

        return redirect()->route('Medicine.index')->with('success', 'Medicine Updated Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Medicine::find($id)->delete();
        return redirect()->back()->with('success', 'Medicine Deleted Successfully');
    }

}
