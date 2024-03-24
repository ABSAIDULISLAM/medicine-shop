<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedicineController extends Controller
{
    public function index()
    {
        return view('admin.medicine.index');
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
