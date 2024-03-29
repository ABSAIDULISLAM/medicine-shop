<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SettingsController extends Controller
{
    public function GenericList()
    {
        return view('admin.settings.generic-list');
    }
    public function CompanyList()
    {
        return view('admin.settings.company-list');
    }
    public function MedicineFormList()
    {
        return view('admin.settings.medicine-form-list');
    }
    public function RackList()
    {
        return view('admin.settings.rack-list');
    }
    public function JournalList()
    {
        return view('admin.settings.journal-list');
    }
    public function AccountHead()
    {
        return view('admin.settings.account-head');
    }
    public function SubHead()
    {
        return view('admin.settings.sub-head');
    }
    public function BankSetup()
    {
        return view('admin.settings.bank-setup');
    }
    public function CompanySetup()
    {
        return view('admin.settings.company-setup');
    }
    public function NewBarcode()
    {
        return view('admin.settings.new-barcode');
    }
}
