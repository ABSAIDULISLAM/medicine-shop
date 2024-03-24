<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SupliyerController extends Controller
{
    public function index()
    {
        return view('admin.contact.suplyer-list');
    }
}
