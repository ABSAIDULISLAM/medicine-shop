<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class SupliyerController extends Controller
{
    public function index()
    {
        $data = Contact::where('contact_type',2)->latest()->paginate(20);

        return view('admin.contact.suplyer-list', compact('data'));
    }
}
