<?php

namespace App\Http\Controllers\Admin\HR;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class DesignationController extends Controller
{
    public function index()
    {
        return view('admin.hr-management.designation.index');
    }
}
