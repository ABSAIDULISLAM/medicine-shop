<?php

namespace App\Http\Controllers\Admin\Report;

use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\CustomerLedger;
use Carbon\Carbon;
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

    public function due(Request $request)
    {
        $fromDate = $request->input('from_date', now()->subDays(7)->toDateString());
        $toDate = $request->input('to_date', now()->toDateString());

        $customerLedger = CustomerLedger::with([
                'customer:id,company_name,opening_balance',
                'sale:id,customer_id,final_total',
                'collection:id,customer_id,paid'
            ])
            ->whereBetween('date', [$fromDate, $toDate])
            ->orderBy('id', 'desc')
            ->get();

        return view('admin.report.customer.due', compact('customerLedger', 'fromDate', 'toDate'));
    }

    public function statement(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusId = $request->input('cusId', 0);

        $query = Contact::where('contact_type', 1)
            ->with(['creator','customerledger' => function($query) use ($from_date, $to_date) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }]);

        if ($cusId != 0) {
            $query->where('id', $cusId);
        }

        $customer = $query->orderBy('id', 'desc')->first();

        return view('admin.report.customer.statement', compact('customer','from_date','to_date','cusId'));
    }


    public function ledger()
    {
        $company = Contact::where('contact_type', 1)->select('id', 'company_name',)->get();
        return view('admin.report.customer.ledger', compact('company'));
    }

}
