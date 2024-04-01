<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Income;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
       return Income::latest()->get();
        return view('admin.collection.index');
    }

    public function create()
    {
        return view('admin.collection.create');
    }
    public function edit()
    {
        return view('admin.collection.edit');
    }
}
