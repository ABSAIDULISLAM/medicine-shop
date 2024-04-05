<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class SupliyerController extends Controller
{
    public function index()
    {
        $data = [];

        Contact::where('contact_type', 2)->latest()->chunk(20, function ($contacts) use (&$data) {
            foreach ($contacts as $contact) {
                $data[] = $contact;
            }
        });
        return view('admin.contact.suplyer-list', compact('data'));
    }
}
