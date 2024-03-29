<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function CashStatement()
    {
        return view('admin.report.cash-statement');
    }
    public function ExpiredMedicineReport()
    {
        return view('admin.report.expired-medicine-report');
    }
    public function StockReport()
    {
        return view('admin.report.stock-report');
    }
    public function Stockout()
    {
        return view('admin.report.stockout');
    }
    public function SalesReport()
    {
        return view('admin.report.sales-report');
    }
    public function PurchaseReport()
    {
        return view('admin.report.purchase-report');
    }
    public function SalesDetails()
    {
        return view('admin.report.sales-details');
    }

    public function SupliyerReport()
    {
        return view('admin.report.supliyer-report');
    }



    public function BankLeadger()
    {
        return view('admin.report.bank-leadger');
    }
    public function CollectionReport()
    {
        return view('admin.report.collection-report');
    }
    public function PaymentReport()
    {
        return view('admin.report.payment-report');
    }


    public function SupliyerLedger()
    {
        return view('admin.report.supliyer-ledger');
    }
    public function ExpenseHeadReport()
    {
        return view('admin.report.expense-head-report');
    }
    public function SingleHeadReport()
    {
        return view('admin.report.single-head-report');
    }
    public function ExpenseReport()
    {
        return view('admin.report.expense-report');
    }
    public function InvoiceProfit()
    {
        return view('admin.report.invoice-profit');
    }
    public function ProfitLoss()
    {
        return view('admin.report.profit-los');
    }
}
