<?php

namespace App\Http\Controllers\admin;

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
    public function CustomerReport()
    {
        return view('admin.report.customer-report');
    }
    public function SupliyerReport()
    {
        return view('admin.report.supliyer-report');
    }
    public function CustomerDue()
    {
        return view('admin.report.customer-due');
    }
    public function CustomerStatement()
    {
        return view('admin.report.customer-statement');
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
    public function EmployeeReport()
    {
        return view('admin.report.employee-report');
    }
    public function EmployeeExpense()
    {
        return view('admin.report.employee-expense');
    }
    public function EmployeeLedger()
    {
        return view('admin.report.employee-ledger');
    }
    public function MonthlySalarySheet()
    {
        return view('admin.report.monthly-salary-sheet');
    }
    public function EmployeeStatement()
    {
        return view('admin.report.employee-statement');
    }
    public function CustomerLedger()
    {
        return view('admin.report.customer-ledger');
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
