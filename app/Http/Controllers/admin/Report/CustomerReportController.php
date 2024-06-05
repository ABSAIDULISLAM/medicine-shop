<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use Illuminate\Http\Request;

class CustomerReportController extends Controller
{
    public function report()
    {
        $customers = Contact::where('contact_type', 1)
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.report.customer.report', compact('customers'));
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
        $company = Contact::where('contact_type', 1)->select('id', 'company_name',)->get();
        return view('admin.report.customer.ledger', compact('company'));
    }

    public function ledgerStatement(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'customer_id' => 'required|integer',
        ]);
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $cusId = $request->input('customer_id');

        $expense = Contact::where('contact_type', 1)
            ->where('id', $cusId)
            ->with(['collection' => function($query) use ($fromDate, $toDate) {
                $query->whereBetween('date', [$fromDate, $toDate]);
            }, 'creator:id,user_name'])
            ->first();

        return view('admin.report.customer.statement', compact('expense', 'fromDate', 'toDate', 'cusId'));
    }

    public function ledgerStatementFilter(Request $request)
    {
        $request->validate([
            'from_date' => 'required|date',
            'to_date' => 'required|date|after_or_equal:from_date',
            'employee_id' => 'required|integer',
        ]);
        $fromDate = $request->input('from_date');
        $toDate = $request->input('to_date');
        $cusId = $request->input('employee_id');
        $filterdata = true;

        $expense = Contact::where('contact_type', 1)
            ->where('id', $cusId)
            ->with(['collection' => function($query) use ($fromDate, $toDate) {
                $query->whereBetween('date', [$fromDate, $toDate]);
            }, 'creator:id,user_name'])
            ->first();

        return view('admin.report.customer.statement', compact('expense', 'fromDate', 'toDate', 'cusId','filterdata'));
    }


}
