<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AccountHead;
use App\Models\BankSetup;
use App\Models\CashStatement;
use App\Models\CollectionInfo;
use App\Models\Contact;
use App\Models\Income;
use App\Models\Journal;
use App\Models\Medicine;
use App\Models\PaymentInfo;
use App\Models\Purchases;
use App\Models\PurchasesDetail;
use App\Models\Sales;
use App\Models\SupplierLedger;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ReportController extends Controller
{
    public function CashStatement(Request $request)
    {
        // CashStatement::truncate();
        $fromDate = $request->input('from_date', now()->subDays(7)->toDateString());
        $toDate = $request->input('to_date', now()->toDateString());

        $cashstatement = CashStatement::whereBetween('date', [$fromDate, $toDate])
            ->orderBy('id', 'desc')->get();

        return view('admin.report.cash-statement', compact('cashstatement', 'toDate', 'fromDate'));
    }

    public function ExpiredMedicineReport(Request $request)
    {
        
        $from_date = $request->input('from_date', Carbon::now()->subDays(7)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $mediname = $request->input('mediname', '');

        $query = Medicine::with('generic', 'company', 'mediform', 'rack')
            ->select('id', 'medicine_name', 'generic_id', 'company_id', 'medicine_form', 'medicine_strength', 'purchases_price', 'sale_price', 'stock', 'status', 'expire_date')
            ->where('expire_date', '<', now())
            ->whereBetween('expire_date', [$from_date, $to_date]);

        if (!empty($mediname)) {
            $query->where('medicine_name', 'like', '%' . $mediname . '%');
        }

        $expiredMedicines = $query->orderBy('id', 'desc')->paginate(5000);

        return view('admin.report.expired-medicine.list', compact('expiredMedicines', 'from_date', 'to_date', 'mediname'));
    }

    public function MedicineLedger(Request $request, $id)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));

        $medicine = Medicine::with(['ledger' => function ($query) use ($from_date, $to_date) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }, 'generic', 'company'])->find($id);

        return view('admin.report.expired-medicine.ledger', compact('medicine', 'from_date', 'to_date'));
    }

    public function StockReport(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $mediname = $request->input('mediname', '');

        $query = Medicine::with('generic', 'company', 'mediform', 'rack')
            ->select('id', 'medicine_name', 'generic_id', 'company_id', 'medicine_form', 'medicine_strength', 'purchases_price', 'sale_price', 'stock', 'status', 'expire_date')
            ->where('stock', '>', 0);

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('expire_date', [$from_date, $to_date]);
        }

        if (!empty($mediname)) {
            $query->where('medicine_name', 'like', '%' . $mediname . '%');
        }

        $stockMedicines = $query->orderBy('id', 'desc')->paginate(5000);

        return view('admin.report.stock.list', compact('stockMedicines', 'from_date', 'to_date', 'mediname'));
    }

    public function Stockout(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $mediname = $request->input('mediname', '');

        $query = Medicine::with('generic', 'company', 'mediform', 'rack')
            ->select('id', 'medicine_name', 'generic_id', 'company_id', 'medicine_form', 'medicine_strength', 'purchases_price', 'sale_price', 'stock', 'status', 'expire_date')
            ->where('stock', '<', 0);

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('expire_date', [$from_date, $to_date]);
        }

        if (!empty($mediname)) {
            $query->where('medicine_name', 'like', '%' . $mediname . '%');
        }

        $stockMedicines = $query->orderBy('id', 'desc')->paginate(5000);

        return view('admin.report.stock.stockout', compact('stockMedicines', 'from_date', 'to_date', 'mediname'));
    }

    public function SalesReport(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusName = $request->input('customer_id', 0);
        $sellerName = $request->input('created_by', 0);

        $query = Sales::with(['customer:id,company_name']);

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }

        if (!empty($cusName)) {
            $query->where('customer_id', $cusName);
        }

        if (!empty($sellerName)) {
            $query->where('created_by', $sellerName);
        }
        $query->select('id', 'customer_id', 'invoice_number', 'date', 'final_total', 'due_amount', 'cash_paid', 'created_by');

        $data = $query->orderBy('id', 'desc')
            ->get();

        $users = User::select('id', 'user_name')->get();
        $customer = Contact::where('contact_type', 1)->select('id', 'company_name')->get();

        return view('admin.report.sales.list', compact(
            'data',
            'from_date',
            'to_date',
            'cusName',
            'sellerName',
            'customer',
            'users',
        ));
    }


    public function PurchaseReport(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusName = $request->input('customer_id', 0);


        $query = Purchases::with(['suplyer:id,company_name']);

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }

        if (!empty($cusName)) {
            $query->where('supplier_id', $cusName);
        }

        $query->select('id', 'supplier_id', 'invoice_number', 'date', 'final_amount', 'dues', 'final_amount');

        $data = $query->orderBy('id', 'desc')
            ->get();

        $customer = Contact::where('contact_type', 2)->select('id', 'company_name')->get();

        return view('admin.report.purchase.list', compact(
            'data',
            'from_date',
            'to_date',
            'cusName',
            'customer',
        ));
    }
    public function SalesDetails(Request $request)
    {
        //     $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        //     $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        //     $cusName = $request->input('customer_id', 0);
        //     $supplier = $request->input('supplier_id', 0);
        //     $mediType = $request->input('mediType_id', 0);


        //    $query = PurchasesDetail::with(['suplyer:id,company_name']);

        //     if (!empty($from_date) && !empty($to_date)) {
        //         $query->whereBetween('date', [$from_date, $to_date]);
        //     }

        //     if (!empty($cusName)) {
        //         $query->where('supplier_id', $cusName);
        //     }

        //     $query->select('id','supplier_id','invoice_number','date','final_amount','dues','final_amount');

        //     $data = $query->orderBy('id','desc')
        //             ->get();

        //     $customer = Contact::where('contact_type', 2)->select('id','company_name')->get();

        //     return view('admin.report.purchase.list', compact(
        //         'data',
        //         'from_date',
        //         'to_date',
        //         'cusName',
        //         'customer',
        //     ));


        return view('admin.report.sales-details');
    }

    public function SupliyerReport()
    {
        $data = SupplierLedger::with('supplier')->orderBy('id', 'desc')->get();

        return view('admin.report.supplier.report', compact('data'));
    }

    public function SupliyerLedger()
    {
        $company = Contact::where('contact_type', 2)->select('id', 'company_name',)->get();
        return view('admin.report.supplier.ledger-search', compact('company'));
    }


    public function BankLeadger()
    {
        $data = BankSetup::with('bankstatement')->orderBy('id', 'desc')->get();

        $data->each(function ($item) {
            $item->totaldebit = $item->bankstatement->sum('debit');
            $item->totalcredit = $item->bankstatement->sum('credit');
        });

        return view('admin.report.bank.ledger', compact('data'));
    }

    public function BankStatement(Request $request, $id)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $bankName = $request->input('bank_id', 0);

        $query = BankSetup::with(['bankstatement' => function ($query) use ($from_date, $to_date) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }])
            ->where('id', $id);

        if (!empty($bankName)) {
            $query->where('id', $bankName);
        }

        $data = $query->orderBy('id', 'desc')
            ->first();

        $bank = BankSetup::select('id', 'bank_name')->get();

        return view('admin.report.bank.statement', compact('data', 'from_date', 'to_date', 'bankName', 'bank'));
    }

    public function CollectionReport(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusName = $request->input('customer_id', 0);

        $query = CollectionInfo::with(['customer:id,company_name']);

        if (!empty($cusName)) {
            $query->where('customer_id', $cusName);
        }

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('collection_date', [$from_date, $to_date]);
        }

        $data = $query->orderBy('id', 'desc')
            ->get();

        $customer = Contact::where('contact_type', 1)->select('id', 'company_name')->get();

        return view('admin.report.collection.report', compact('data', 'from_date', 'to_date', 'cusName', 'customer'));
    }

    public function PaymentReport(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusName = $request->input('customer_id', 0);

        $query = PaymentInfo::with(['customer:id,company_name']);

        if (!empty($cusName)) {
            $query->where('supplier_id', $cusName);
        }

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('collection_date', [$from_date, $to_date]);
        }

        $data = $query->orderBy('id', 'desc')
            ->get();

        $customer = Contact::where('contact_type', 2)->select('id', 'company_name')->get();

        return view('admin.report.payment.report', compact('data', 'from_date', 'to_date', 'cusName', 'customer'));
    }

    public function ExpenseHeadReport(Request $request)
    {
        return $data = Income::where('account_type', 0) // 0 for expense
                        ->with('journal.accounthead.subhead')
                        ->orderBy('id', 'desc')
                        ->get();





        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));

        $data = Journal::with(['accounthead', 'accounthead.subhead'])->orderBy('id', 'desc')->get();

        return view('admin.report.expense-head-report', compact('data','from_date','to_date'));
    }


    public function SingleHeadReport()
    {
        return view('admin.report.single-head-report');
    }


    public function ExpenseReport(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $role = $request->input('account_head', 0);
        $method = $request->input('payment_method', 0);

        $query = Income::where('account_type', 0)->with('accounthead','subhead');

        if (!empty($role)) {
            $query->where('account_head', $role);
        }
        if (!empty($method)) {
            $query->where('payment_method', $method);
        }

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }

        $data = $query->orderBy('id', 'desc')->get();


        $head = AccountHead::orderBy('id', 'asc')->get();

        return view('admin.report.expense.expense', compact('data', 'from_date', 'to_date', 'role','head','method'));
    }
    public function ExpenseDebitVowchar($id)
    {
        $data = Income::where('account_type', 0)
            ->with(['accounthead','subhead','employee:id,employee_name'])
            ->where('id',$id)
            ->first();

        return view('admin.report.expense.debit-voucher',compact('data'));
    }

    public function InvoiceProfit(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusId = $request->input('customer_id', 0);

        $query = Sales::with('customer:id,company_name')->select('id','customer_id','invoice_number','total_amount','cash_paid',);

        if (!empty($cusId)) {
            $query->where('customer_id', $cusId);
        }

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }

        $data = $query->orderBy('id', 'desc')->get();
        $customer = Contact::where('contact_type', 1)->get();

        return view('admin.report.invoice-profit',compact('data','from_date','to_date','cusId','customer'));
    }


    public function ProfitLoss(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(100)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));

        $query = Sales::select('id','invoice_number','total_amount','cash_paid',);

        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }
        $sales = $query->orderBy('id', 'desc')->get();



        return view('admin.report.profit-los', compact('sales','from_date','to_date'));
    }
}
