<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\ProductPurchaseRequest;
use App\Models\BankSetup;
use App\Models\CashStatement;
use App\Models\Company;
use App\Models\Contact;
use App\Models\Generic;
use App\Models\Medicine;
use App\Models\MedicineForm;
use App\Models\MedicineType;
use App\Models\Purchases;
use App\Models\PurchasesDetail;
use App\Models\Rack;
use App\Models\Sales;
use App\Models\StockLedger;
use App\Models\SupplierLedger;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class PurchaseController extends Controller
{
    public function index(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $cusId = $request->input('customer_id', 0);

        $query = Purchases::with(['suplyer:id,company_name']);
        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }
        if (!empty($cusId)) {
            $query->where('supplier_id', $cusId);
        }
        $purchases = $query->latest()->get();
        return view('admin.purchase.index', compact('purchases', 'from_date', 'to_date', 'cusId'));
    }

    public function create()
    {
        $suplyer = Contact::where('contact_type', 2)->select('id', 'company_name')->get();
        $bank = BankSetup::orderBy('id', 'asc')->select('id', 'bank_name')->get();
        $generics = Generic::orderBy('id', 'asc')->select('id', 'generic_name')->get();
        $mediForms = MedicineForm::orderBy('id', 'asc')->select('id', 'medicine_strength')->get();
        $companies = Company::orderBy('id', 'asc')->select('id', 'company_name')->get();
        $racks = Rack::orderBy('id', 'asc')->get();

        return view('admin.Purchase.create', compact([
            'suplyer',
            'bank',
            'generics',
            'mediForms',
            'companies',
            'racks',
        ]));
    }

    public function SupplierStore(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'company_name' => ['required', 'string', 'max:256'],
            'contact_num' => ['required', 'numeric', 'regex:/\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'address' => ['required', 'string'],
        ]);

        if ($validator->fails()) {
            return response()->json(['errors' => $validator->errors()], 422);
        }

        $contact = Contact::create([
            'company_name' => $request->company_name,
            'contact_person' => $request->company_name,
            'contact_num' => $request->contact_num,
            'address' => $request->address,
            'created_by' => $request->created_by,
            'contact_type' => $request->contact_type,
            'status' => $request->status,
            'opening_balance' => 0,
        ]);

        SupplierLedger::create([
            'supplier_id' => $contact->id,
            'description' => 'Opening Balance',
            'previous_due' => 0,
            'debit' => $contact->opening_balance,
            'credit' => 0,
            'discount' => 0,
            'balance' => $contact->opening_balance,
            'insert_status' => 1,
            'insert_id' => $contact->id,
            'date' => Carbon::now(),
            'created_by' => Auth::id(),
        ]);


        // Prepare response data
        $option = '<option value="' . $contact->id . '">' . $contact->company_name . '</option>';
        $pre_blnc = 0;

        return response()->json([
            'success' => true,
            'option' => $option,
            'pre_blnc' => $pre_blnc
        ]);
    }

    public function SupplierInfo(Request $request)
    {
        $supplierId = $request->input('supplier_id');

        $previousDue = SupplierLedger::where('supplier_id', $supplierId)->value('previous_due');

        if (!is_null($previousDue)) {
            return response()->json($previousDue);
        } else {
            return response()->json(0);
        }
    }


    public function medicineStore(Request $request)
    {
        $request->validate([
            'medicine_name' => 'required|string|max:255',
            // 'created_by' => 'required|exists:users,id',
            'medicine_form' => 'required|string|max:255',
            'company_id' => 'required|exists:companies,id',
            'purchases_price' => 'required|numeric',
            'min_stock' => 'required|numeric',
            'generic_id' => 'required|exists:generics,id',
            'medicine_strength' => 'required|string|max:255',
            'rack_id' => 'required|exists:racks,id',
            'sale_price' => 'required|numeric',
            'opening_stock' => 'required|numeric',
        ]);

        $medicine = new Medicine();
        $medicine->medicine_name = $request->medicine_name;
        // $medicine->created_by = $request->created_by;
        $medicine->medicine_form = $request->medicine_form;
        $medicine->company_id = $request->company_id;
        $medicine->purchases_price = $request->purchases_price;
        $medicine->min_stock = $request->min_stock;
        $medicine->generic_id = $request->generic_id;
        $medicine->medicine_strength = $request->medicine_strength;
        $medicine->rack_id = $request->rack_id;
        $medicine->sale_price = $request->sale_price;
        $medicine->opening_stock = $request->opening_stock;
        $medicine->medi_type = 1;
        $medicine->serial_number = rand(1000, 1000000);
        $medicine->company_name = 'Random Company';
        $medicine->generic_name = 'Random Generic';
        $medicine->save();

        return response()->json('Medicine saved successfully.');
    }

    public function searchProduct(Request $request)
    {
        $search = $request->input('pursearchQuery');

        $products = Medicine::where('medicine_name', 'like', '%' . $search . '%')
            ->orWhere('serial_number', 'like', '%' . $search . '%')
            ->get();

        $response = [];
        foreach ($products as $product) {
            $response[] = [
                'value' => $product->medicine_name,
                'label' => $product->serial_number . ' || ' . $product->medicine_name . ' || ' . $product->medicine_form . ' || ' . $product->medicine_strength . ' || ' . $product->company_name . ' || ' . $product->sale_price,
            ];
        }

        return response()->json($response);
    }

    public function fetchSingleProduct(Request $request)
    {
        $productName = $request->input('purchasesProductName');
        $product = Medicine::where('medicine_name', $productName)->first();

        if ($product) {
            $racks = Rack::orderBy('id', 'asc')->get();

            $response = [
                'product' => [
                    'id' => $product->id,
                    'medicine_name' => $product->medicine_name,
                    'medicine_form' => $product->medicine_form,
                    'medicine_strength' => $product->medicine_strength,
                    'generic_name' => $product->generic_name,
                    'cost_price' => $product->purchases_price,
                    'sales_price' => $product->sale_price,
                    'expire_date' => $product->expire_date,
                    'rack_id' => $product->rack_id,
                    'rack_name' => $product->rack_name,
                    'inStock' => $product->stock,
                    'preStock' => $product->min_stock,
                    'generic_id' => $product->generic_id,
                ],
                'racks' => $racks
            ];

            return response()->json($response);
        }
        return response()->json(['error' => 'Product not found '], 404);
    }

    public function store(ProductPurchaseRequest $request)
    {
        if ($request->quantity > 0) {
            $purchase = new Purchases();
            $purchase->supplier_id = $request->supplier_id;
            $purchase->previous_dues = $request->previous_dues ?? 0;
            $purchase->invoice_number = $request->invoice_number;
            $purchase->date = $request->date;
            $purchase->total_cost_amount = $request->total_cost;
            $purchase->total_amount = $request->total_amount;
            $purchase->grand_trade_amount = 0;
            $purchase->grand_vat_amount = 0;
            $purchase->discount = $request->discount ?? 0;
            $purchase->shipping_charge = $request->shipping_charge ?? 0;
            $purchase->final_amount = $request->final_amount;
            $purchase->payment = $request->payment ?? 0;
            $purchase->dues = $request->dues ?? 0;
            if ($request->payment_method == '1') {
                $purchase->payment_method = $request->payment_method;
                $purchase->bank_id = $request->bank_id;
                $purchase->cheque_no = $request->cheque_no;
            } else {
                $purchase->payment_method = $request->payment_method;
                $purchase->bank_id = 0;
                $purchase->cheque_no = 0;
            }
            $purchase->cheque_appr_date = Carbon::now();
            $purchase->created_by = Auth::id();
            $purchase->updated_at = Carbon::now();
            $purchase->save();

            foreach ($request->quantity as $key => $value) {
                $medicineId = $request->product_id[$key];
                $medicine = Medicine::find($medicineId);
                $medicine->stock += $value;
                $medicine->save();

                $purchaseDetail = new PurchasesDetail();
                $purchaseDetail->product_id = $request->product_id[$key];
                $purchaseDetail->generic_id = 0;
                $purchaseDetail->company_id = 0;
                $purchaseDetail->quantity = $value;
                $purchaseDetail->cost_price = $request->cost_price[$key];
                $purchaseDetail->sales_price = $request->sales_price[$key];
                $purchaseDetail->expire_date = $request->expire_date[$key];
                $purchaseDetail->rack_id = $request->rack_id[$key];
                $purchaseDetail->sub_total = $request->sub_total[$key];
                $purchaseDetail->inStock = $medicine->stock;
                $purchaseDetail->common_id = $purchase->id;
                $purchaseDetail->supplier_id = $request->supplier_id;
                $purchaseDetail->date = $request->date;
                $purchaseDetail->created_by = Auth::id();
                $purchaseDetail->save();

                StockLedger::create([
                    'medicine_id' => $medicineId,
                    'generic_id' => 0,
                    'date' => $request->date,
                    'debit_qty' => $value,
                    'credit_qty' => 0,
                    'consumer' => $request->supplier_id,
                    'insert_status' => 1, // 1 = purchase data
                    'insert_id' => $purchase->id,
                    'created_by' => Auth::id(),
                ]);
            }
            CashStatement::create([
                'date' => $request->date,
                'remarks' => $request->invoice_number,
                'debit' => $request->payment ?? 0,
                'credit' => 0,
                'insert_status' => 4, // 4 = payment
                'insert_id' => $request->supplier_id,
            ]);

            $latestData = SupplierLedger::where('supplier_id', $request->supplier_id)->orderBy('id', 'desc')->first();
            $due = 0;

            if ($latestData) {
                if ($latestData->balance >= $request->payment) {
                    $due = $latestData->balance - $request->payment;
                } else {
                    $due = 0;
                }
            } else {
                $due = ($request->previous_dues ?? 0) - ($request->payment ?? 0);
            }
            $supplierLedger = new SupplierLedger();
            $supplierLedger->supplier_id = $request->supplier_id;
            $supplierLedger->description = $request->invoice_number;
            $supplierLedger->previous_due = $request->previous_dues ?? 0;
            $supplierLedger->debit = $request->payment ?? 0;
            $supplierLedger->credit = 0;
            $supplierLedger->discount = $request->discount ?? 0;
            $supplierLedger->balance = $due;
            $supplierLedger->insert_status = 1; // 1 = purchase
            $supplierLedger->insert_id = $purchase->id;
            $supplierLedger->date = $request->date;
            $supplierLedger->created_by = Auth::id();
            $supplierLedger->save();
        }

        return redirect()->route('Purchase.index')->with('success', 'Purchase Inserted Successfully');
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);

        $data = Purchases::with(['purchasedetails', 'purchasedetails.product'])->find($id);

        $suplyer = Contact::where('contact_type', 2)->select('id', 'company_name')->get();
        $bank = BankSetup::orderBy('id', 'asc')->select('id', 'bank_name')->get();
        $racks = Rack::orderBy('id', 'asc')->get();

        return view('admin.purchase.edit', compact([
            'racks',
            'bank',
            'data',
            'suplyer',
        ]));
    }

    public function addMedicineType(Request $request)
    {
        $medicineType = new MedicineType();
        $medicineType->medicine_type = $request->medicineType;
        $medicineType->status = $request->medicineStatus;
        $medicineType->save();
        return response()->json($medicineType);
    }

    public function update(ProductPurchaseRequest $request)
    {
        if ($request->quantity && count($request->quantity) > 0) {
            $purchase = Purchases::find($request->purchaseId);
            if (!$purchase) {
                return redirect()->back()->with('error', 'Purchase record not found.');
            }

            // Update the purchase record
            $purchase->supplier_id = $request->supplier_id;
            $purchase->previous_dues = $request->previous_dues ?? 0;
            $purchase->invoice_number = $request->invoice_number;
            $purchase->date = $request->date;
            $purchase->total_cost_amount = $request->total_cost;
            $purchase->total_amount = $request->total_amount;
            $purchase->grand_trade_amount = 0;
            $purchase->grand_vat_amount = 0;
            $purchase->discount = $request->discount ?? 0;
            $purchase->shipping_charge = $request->shipping_charge ?? 0;
            $purchase->final_amount = $request->final_amount;
            $purchase->payment = $request->payment ?? 0;
            $purchase->dues = $request->dues ?? 0;
            $purchase->payment_method = $request->payment_method;
            $purchase->bank_id = $request->payment_method == '1' ? $request->bank_id : 0;
            $purchase->cheque_no = $request->payment_method == '1' ? $request->cheque_no : 0;
            $purchase->cheque_appr_date = $request->payment_method == '1' ? Carbon::now() : 0;
            $purchase->created_by = Auth::id();
            $purchase->updated_at = Carbon::now();
            $purchase->save();

            // Reset stock before re-adding quantities
            foreach ($request->product_id as $key => $medicineId) {
                $medicine = Medicine::find($medicineId);
                $oldQuantity = PurchasesDetail::where('common_id', $request->purchaseId)
                    ->where('product_id', $medicineId)
                    ->first()
                    ->quantity ?? 0;
                $medicine->stock -= $oldQuantity;
                $medicine->save();
            }

            // Delete old purchase details and stock ledger entries
            PurchasesDetail::where('common_id', $request->purchaseId)->delete();
            StockLedger::where('insert_status', $request->purchaseId)->delete();

            // Add new purchase details and stock ledger entries
            foreach ($request->quantity as $key => $value) {
                $medicineId = $request->product_id[$key];
                $medicine = Medicine::find($medicineId);
                $medicine->stock += $value;
                $medicine->save();

                $purchaseDetail = new PurchasesDetail();
                $purchaseDetail->product_id = $medicineId;
                $purchaseDetail->generic_id = 0;
                $purchaseDetail->company_id = 0;
                $purchaseDetail->quantity = $value;
                $purchaseDetail->cost_price = $request->cost_price[$key];
                $purchaseDetail->sales_price = $request->sales_price[$key];
                $purchaseDetail->expire_date = $request->expire_date[$key];
                $purchaseDetail->rack_id = $request->rack_id[$key];
                $purchaseDetail->sub_total = $request->sub_total[$key];
                $purchaseDetail->inStock = $medicine->stock;
                $purchaseDetail->common_id = $purchase->id;
                $purchaseDetail->supplier_id = $request->supplier_id;
                $purchaseDetail->date = $request->date;
                $purchaseDetail->created_by = Auth::id();
                $purchaseDetail->save();

                StockLedger::create([
                    'medicine_id' => $medicineId,
                    'generic_id' => 0,
                    'date' => $request->date,
                    'debit_qty' => $value,
                    'credit_qty' => 0,
                    'consumer' => $request->supplier_id,
                    'insert_status' => $purchase->id, // 1 = purchase data
                    'insert_id' => 3, // 3 = purchase data
                    'created_by' => Auth::id(),
                ]);
            }

            // Update cash statement
            CashStatement::where('insert_id', $request->purchaseId)->update([
                'date' => $request->date,
                'remarks' => $request->invoice_number,
                'debit' => $request->payment ?? 0,
                'credit' => 0,
                'insert_status' => 4, // 4 = payment
                'insert_id' => $request->supplier_id,
            ]);

            $latestData = SupplierLedger::where('supplier_id', $request->supplier_id)->orderBy('id', 'desc')->first();
            $due = 0;

            if ($latestData) {
                if ($latestData->balance >= $request->payment) {
                    $due = $latestData->balance - $request->payment;
                } else {
                    $due = 0;
                }
            } else {
                $due = ($request->previous_dues ?? 0) - ($request->payment ?? 0);
            }
            $supplierLedger = SupplierLedger::where('insert_id', $request->purchaseId)->first();
            if ($supplierLedger) {
                $supplierLedger->supplier_id = $request->supplier_id;
                $supplierLedger->description = $request->invoice_number;
                $supplierLedger->previous_due = $request->previous_dues ?? 0;
                $supplierLedger->debit = $request->payment ?? 0;
                $supplierLedger->credit = 0;
                $supplierLedger->discount = $request->discount ?? 0;
                $supplierLedger->balance = $due;
                $supplierLedger->insert_status = 1; // 1 = purchase
                $supplierLedger->insert_id = $purchase->id;
                $supplierLedger->date = $request->date;
                $supplierLedger->created_by = Auth::id();
                $supplierLedger->save();
            }
        } else {
            return redirect()->back()->with('error', 'Product Details Data Cannot be Empty');
        }

        return redirect()->route('Purchase.index')->with('success', 'Purchase Updated Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        Purchases::find($id)->delete();
        return redirect()->back()->with('success', 'Purchase Deleted Successfully');
    }

    public function windowPopInvoice($id)
    {
        $data = PurchasesDetail::where('common_id', $id)
            ->with(['product:id,medicine_name,purchases_price,sale_price'])
            ->get();
        $supplier = Purchases::where('id',$id)->select('id','supplier_id','date')->with('suplyer:id,company_name,contact_num,address')->first();

        return view('admin.purchase.invoice', compact('data','supplier'));
    }
}
