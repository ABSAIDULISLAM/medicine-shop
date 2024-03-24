<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    public function index()
    {
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
