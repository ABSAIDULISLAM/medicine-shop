<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CustomerReportController extends Controller
{
    public function report()
    {
        
        return view('admin.report.customer.report');
    }

    public function due()
    {
        return view('admin.report.customer.due');
    }

    public function statement()
    {
        return view('admin.report.customer.statement');
    }

    public function ledger()
    {
        return view('admin.report.customer.ledger');
    }
}
