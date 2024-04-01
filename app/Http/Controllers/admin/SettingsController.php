<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{

    public function NewBarcode()
    {
        return view('admin.settings.new-barcode');
    }
}
