<?php

namespace App\Http\Controllers\Admin;

use App\Models\Medicine;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class MedicineController extends Controller
{
    public function index()
    {
        $data = Medicine::with('generic','company')->orderBy('medicine_name','asc')->paginate(50);
        return view('admin.medicine.index',compact('data'));
    }

    public function create()
    {
        return view('admin.medicine.create');
    }
    public function edit()
    {
        return view('admin.medicine.edit');
    }


}
