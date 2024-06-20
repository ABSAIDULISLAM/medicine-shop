<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\SalesRequest;
use App\Models\BankSetup;
use App\Models\CashStatement;
use App\Models\Contact;
use App\Models\CustomerLedger;
use App\Models\Medicine;
use App\Models\Sales;
use App\Models\SalesDetail;
use App\Models\SalesReturn;
use App\Models\SalesReturnDetail;
use App\Models\StockLedger;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\Validator;

class SalesController extends Controller
{
    public function index(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $inv = $request->input('invoice_number', '');

        $query = Sales::with(['customer:id,company_name']);
        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }
        if (!empty($inv)) {
            $query->where('invoice_number', $inv);
        }
        $data = $query->latest()->get();

        return view('admin.sales.index', compact('data','from_date','to_date','inv'));
    }

    public function getSalesData()
    {
        $sales = Sales::with(['salesDetails','customer'])->get();
        return response()->json($sales);
    }

    public function create()
    {
        $customer = Contact::where('contact_type', 1)->select('id', 'company_name')->get();
        $bank = BankSetup::orderBy('id', 'asc')->select('id', 'bank_name')->get();

        return view('admin.sales.create', compact([
            'customer',
            'bank',
        ]));
    }

    public function CustomerStore(Request $request)
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

        CustomerLedger::create([
            'customer_id' => $contact->id,
            'description' => 'Opening Balance',
            'previous_due' => 0,
            'debit' => 0,
            'credit' => $contact->opening_balance,
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
        $mobile = $contact->contact_num;

        return response()->json([
            'success' => true,
            'option' => $option,
            'pre_blnc' => $pre_blnc,
            'mobile' => $mobile,
        ]);
    }

    public function CustomerInfo(Request $request)
    {
        $customerId = $request->input('customer_id');

        $previousDue = CustomerLedger::where('customer_id', $customerId)->value('previous_due');
        $contactNum = Contact::where('id', $customerId)->value('contact_num');

        if (!is_null($previousDue)) {
            $response = [
                'prevdue' => $previousDue,
                'contactNum' => $contactNum,
            ];
        } else {
            $response = [
                'prevdue' => 0,
                'contactNum' => $contactNum,
            ];
        }

        return response()->json($response);
    }


    public function fetchSingleProduct(Request $request)
    {
        $productName = $request->input('purchasesProductName');
        $product = Medicine::where('medicine_name', $productName)
        ->first();

        if ($product) {
            $response = [
                'product' => [
                    'id' => $product->id,
                    'medicine_name' => $product->medicine_name,
                    'medicine_form' => $product->medicine_form,
                    'medicine_strength' => $product->medicine_strength,
                    'generic_name' => $product->generic_name,
                    'cost_price' => $product->purchases_price,
                    'sales_price' => $product->sale_price,
                    'mrp_price' => $product->mrp_price,
                    'generic_id' => $product->generic_id,
                    'company_id' => $product->company_id,
                ],
            ];

            return response()->json($response);
        }

        return response()->json(['error' => 'Product not found '], 404);
    }

    // public function store(SalesRequest $request)
    // {
    //     if($request->quantity && count($request->quantity) > 0) {
    //         $sales = new Sales();
    //         $sales->customer_id = $request->customer_id;
    //         $sales->mobile_number = $request->mobile_number;
    //         $sales->previous_dues = $request->previous_dues;
    //         $sales->invoice_number  = $request->invoice_number;
    //         $sales->date = $request->date;
    //         $sales->total_amount = $request->total_amount;
    //         $sales->discount_amount = $request->discount_amount ?? 0;
    //         $sales->shipping_charge = 0;
    //         $sales->less_amount = $request->less_amount ?? 0;
    //         $sales->final_total = $request->grand_total;
    //         $sales->cash_paid = $request->cash_paid ?? 0;
    //         $sales->due_amount = $request->due_amount ?? 0;
    //         $sales->advance = $request->advance ?? 0;
    //         $sales->current_dues = $request->dues ?? 0;
    //         $sales->payment_method = $request->payment_method;
    //         $sales->bank_id = 0;
    //         $sales->cheque_number = 0;
    //         $sales->cheque_app_date = 0;
    //         $sales->payment_card_number = 0;
    //         $sales->payment_mobile_number = 0;
    //         $sales->created_by = Auth::id();
    //         $sales->created_at = Carbon::now();
    //         $sales->save();

    //         foreach ($request->quantity as $key => $value) {
    //             $medicineId = $request->medicine_id[$key];
    //             $medicine = Medicine::find($medicineId);
    //             if ($medicine) {
    //                 $medicine->stock -= $value;
    //                 $medicine->save();

    //                 $saleDetails = new SalesDetail();
    //                 $saleDetails->medicine_id = $request->medicine_id[$key];
    //                 $saleDetails->generic_id = $request->generic_id[$key];
    //                 $saleDetails->company_id = $request->company_id[$key];
    //                 $saleDetails->quantity = $value;
    //                 $saleDetails->sell_price = $request->unit_price[$key];
    //                 $saleDetails->product_discount = $request->uni_disc[$key] ?? 0;
    //                 $saleDetails->unit_price = $request->unit_price[$key];
    //                 $saleDetails->hidden_unit_price = $request->unit_price[$key];
    //                 $saleDetails->sub_total = $request->sub_total[$key];
    //                 $saleDetails->netCost_price = 0;
    //                 $saleDetails->inStock = $medicine->stock;
    //                 $saleDetails->date = $request->date[$key];
    //                 $saleDetails->customer_id = $request->customer_id;
    //                 $saleDetails->common_id = $sales->id;
    //                 $saleDetails->creator_id = Auth::id();
    //                 $saleDetails->save();
    //             }

    //             StockLedger::create([
    //                 'medicine_id' => $medicineId,
    //                 'generic_id' => 0,
    //                 'date' => $request->date,
    //                 'debit_qty' => 0,
    //                 'credit_qty' => $value,
    //                 'consumer' => $request->customer_id,
    //                 'insert_status' => 3, // 3 = Sales data
    //                 'insert_id' => $sales->id,
    //                 'created_by' => Auth::id(),
    //             ]);
    //         }

    //         $customerLedger = new CustomerLedger();
    //         $customerLedger->customer_id = $request->customer_id;
    //         $customerLedger->description = $request->invoice_number;
    //         $customerLedger->previous_due = $request->previous_dues ?? 0;
    //         $customerLedger->debit = 0;
    //         $customerLedger->credit = $request->cash_paid ?? 0;
    //         $customerLedger->discount = $request->discount ?? 0;
    //         $customerLedger->balance +=  $request->cash_paid ?? 0;
    //         $customerLedger->insert_status = 3; //  // 3 == Sales
    //         $customerLedger->insert_id = $sales->id;
    //         $customerLedger->date = $request->date;
    //         $customerLedger->created_by = Auth::id();
    //         $customerLedger->save();

    //         CashStatement::create([
    //             'date' => $request->date,
    //             'remarks' => $request->invoice_number,
    //             'debit' => 0,
    //             'credit' => $request->cash_paid ?? 0,
    //             'insert_status' => 1,
    //             'insert_id' => $sales->id,
    //         ]);

    //     }

    //     return redirect()->route('Sales.invoice.print', ['id' => Crypt::encrypt($sales->id)])->with('success', 'Sales Invoice Created Successfully');
    // }

    public function store(SalesRequest $request)
    {
        if($request->quantity && count($request->quantity) > 0) {
            $sales = new Sales();
            $sales->customer_id = $request->customer_id;
            $sales->mobile_number = $request->mobile_number;
            $sales->previous_dues = $request->previous_dues;
            $sales->invoice_number = $request->invoice_number;
            $sales->date = $request->date;
            $sales->total_amount = $request->total_amount;
            $sales->discount_amount = $request->discount_amount ?? 0;
            $sales->shipping_charge = 0;
            $sales->less_amount = $request->less_amount ?? 0;
            $sales->final_total = $request->grand_total;
            $sales->cash_paid = $request->cash_paid ?? 0;
            $sales->due_amount = $request->due_amount ?? 0;
            $sales->advance = $request->advance ?? 0;
            $sales->current_dues = $request->dues ?? 0;
            $sales->payment_method = $request->payment_method;
            $sales->bank_id = 0;
            $sales->cheque_number = 0;
            $sales->cheque_app_date = 0;
            $sales->payment_card_number = 0;
            $sales->payment_mobile_number = 0;
            $sales->created_by = Auth::id();
            $sales->created_at = Carbon::now();
            $sales->save();

            foreach ($request->quantity as $key => $quantity) {
                $medicineId = $request->medicine_id[$key];
                $medicine = Medicine::find($medicineId);
                if ($medicine) {
                    $medicine->stock -= $quantity;
                    $medicine->save();

                    $saleDetails = new SalesDetail();
                    $saleDetails->medicine_id = $medicineId;
                    $saleDetails->generic_id = $request->generic_id[$key];
                    $saleDetails->company_id = $request->company_id[$key];
                    $saleDetails->quantity = $quantity;
                    $saleDetails->sell_price = $request->unit_price[$key];
                    $saleDetails->product_discount = $request->uni_disc[$key] ?? 0;
                    $saleDetails->unit_price = $request->unit_price[$key];
                    $saleDetails->hidden_unit_price = $request->unit_price[$key];
                    $saleDetails->sub_total = $request->sub_total[$key];
                    $saleDetails->netCost_price = 0;
                    $saleDetails->inStock = $medicine->stock;
                    $saleDetails->date = $request->date;
                    $saleDetails->customer_id = $request->customer_id;
                    $saleDetails->common_id = $sales->id;
                    $saleDetails->creator_id = Auth::id();
                    $saleDetails->save();
                }

                StockLedger::create([
                    'medicine_id' => $medicineId,
                    'generic_id' => 0,
                    'date' => $request->date,
                    'debit_qty' => 0,
                    'credit_qty' => $quantity,
                    'consumer' => $request->customer_id,
                    'insert_status' => $sales->id,
                    'insert_id' => 3,  // 3 = Sales data
                    'created_by' => Auth::id(),
                ]);
            }

            $latestData = CustomerLedger::where('customer_id', $request->customer_id)->orderBy('id', 'desc')->first();
            $due = 0;

            if ($latestData) {
                if ($latestData->balance >= $request->cash_paid) {
                    $due = $latestData->balance - $request->cash_paid;
                } else {
                    $due = 0;
                }
            } else {
                $due = ($request->previous_dues ?? 0) - ($request->cash_paid ?? 0);
            }
            $customerLedger = new CustomerLedger();
            $customerLedger->customer_id = $request->customer_id;
            $customerLedger->description = $request->invoice_number;
            $customerLedger->previous_due = $request->previous_dues ?? 0;
            $customerLedger->debit = 0;
            $customerLedger->credit = $request->cash_paid ?? 0;
            $customerLedger->discount = $request->discount ?? 0;
            $customerLedger->balance = $due;
            $customerLedger->insert_status = 3; // 3 = Sales
            $customerLedger->insert_id = $sales->id;
            $customerLedger->date = $request->date;
            $customerLedger->created_by = Auth::id();
            $customerLedger->save();

            CashStatement::create([
                'date' => $request->date,
                'remarks' => $request->invoice_number,
                'debit' => 0,
                'credit' => $request->cash_paid ?? 0,
                'insert_status' => 1, // 1=collection
                'insert_id' => $request->customer_id,
            ]);

            return redirect()->route('Sales.invoice.print', ['id' => Crypt::encrypt($sales->id)])->with('success', 'Sales Invoice Created Successfully');
        }

        return back()->with('error', 'No quantity provided for the sale.');
    }


    public function invoicePrint($id)
    {
        $id = Crypt::decrypt($id);
        $data = Sales::with(['salesDetails','customer' => function($query){$query->select('id','company_name');}])->where('id',$id)->first();

        return view('admin.sales.invoice-print',compact('data'));
    }

    public function edit($id)
    {
        $id = Crypt::decrypt($id);

        $customer = Contact::where('contact_type', 1)->select('id', 'company_name')->get();
        $bank = BankSetup::orderBy('id', 'asc')->select('id', 'bank_name')->get();

        $data = Sales::with(['salesdetails', 'salesdetails.medicine'])->find($id);

        return view('admin.sales.edit', compact([
            'data',
            'customer',
            'bank',
        ]));
    }

    public function update(SalesRequest $request)
    {
        if($request->quantity > 0){
            $sales = Sales::find($request->id);
            if (!$sales) {
                return redirect()->back()->with('error', 'Sales record not found.');
            }
            $sales->customer_id = $request->customer_id;
            $sales->mobile_number = $request->mobile_number;
            $sales->previous_dues = $request->previous_dues;
            $sales->invoice_number = $request->invoice_number;
            $sales->date = $request->date;
            $sales->total_amount = $request->total_amount;
            $sales->discount_amount = $request->discount_amount ?? 0;
            $sales->shipping_charge = 0;
            $sales->less_amount = $request->less_amount ?? 0;
            $sales->final_total = $request->grand_total;
            $sales->cash_paid = $request->cash_paid ?? 0;
            $sales->due_amount = $request->due_amount ?? 0;
            $sales->advance = $request->advance ?? 0;
            $sales->current_dues = $request->dues ?? 0;
            $sales->payment_method = $request->payment_method;
            $sales->bank_id = 0;
            $sales->cheque_number = 0;
            $sales->cheque_app_date = 0;
            $sales->payment_card_number = 0;
            $sales->payment_mobile_number = 0;
            $sales->created_by = Auth::id();
            $sales->created_at = Carbon::now();
            $sales->save();


            foreach ($request->medicine_id as $key => $medicineId) {
                $medicine = Medicine::find($medicineId);
                $oldQuantity = SalesDetail::where('common_id', $request->id)
                                            ->where('medicine_id', $medicineId)
                                            ->first()
                                            ->quantity ?? 0;
                $medicine->stock += $oldQuantity;
                $medicine->save();
            }
            // Delete previous sale details
            SalesDetail::where('common_id', $request->id)->delete();
            // Delete previous Stock ledger data by this id
            StockLedger::where('insert_status', $request->id)->delete();

            // Add new sale details
            foreach ($request->quantity as $key => $value) {
                $medicineId = $request->medicine_id[$key];
                $medicine = Medicine::find($medicineId);
                if ($medicine) {
                    $stock = $medicine->stock;
                    $instock = $stock - $value;
                    $medicine->stock = $instock;
                    $medicine->save();

                    $saleDetails = new SalesDetail();
                    $saleDetails->medicine_id = $request->medicine_id[$key];
                    $saleDetails->generic_id = $request->generic_id[$key];
                    $saleDetails->company_id = $request->company_id[$key];
                    $saleDetails->quantity = $value;
                    $saleDetails->sell_price = $request->unit_price[$key];
                    $saleDetails->product_discount = $request->uni_disc[$key] ?? 0;
                    $saleDetails->unit_price = $request->unit_price[$key];
                    $saleDetails->hidden_unit_price = $request->unit_price[$key];
                    $saleDetails->sub_total = $request->sub_total[$key];
                    $saleDetails->netCost_price = 0;
                    $saleDetails->inStock = $instock;
                    $saleDetails->date = $request->date;
                    $saleDetails->customer_id = $request->customer_id;
                    $saleDetails->common_id = $sales->id;
                    $saleDetails->creator_id = Auth::id();
                    $saleDetails->save();
                }

                StockLedger::create([
                    'medicine_id' => $medicineId,
                    'generic_id' => 0,
                    'date' => $request->date,
                    'debit_qty' => 0,
                    'credit_qty' => $value,
                    'consumer' => $request->customer_id,
                    'insert_status' => $sales->id,
                    'insert_id' => 3,  // 3 = Sales data
                    'created_by' => Auth::id(),
                ]);
            }

            $latestData = CustomerLedger::where('customer_id', $request->customer_id)->orderBy('id', 'desc')->first();
            $due = 0;

            if ($latestData) {
                if ($latestData->balance >= $request->cash_paid) {
                    $due = $latestData->balance - $request->cash_paid;
                } else {
                    $due = 0;
                }
            } else {
                $due = ($request->previous_dues ?? 0) - ($request->cash_paid ?? 0);
            }
            $customerLedger = CustomerLedger::where('insert_id', $request->id)->first();
            $customerLedger->customer_id = $request->customer_id;
            $customerLedger->description = $request->invoice_number;
            $customerLedger->previous_due = $request->previous_dues ?? 0;
            $customerLedger->debit = 0;
            $customerLedger->credit = $request->cash_paid ?? 0;
            $customerLedger->discount = $request->discount ?? 0;
            $customerLedger->balance = $due;
            $customerLedger->insert_status = 3; // 3 = Sales
            $customerLedger->insert_id = $sales->id;
            $customerLedger->date = $request->date;
            $customerLedger->created_by = Auth::id();
            $customerLedger->save();
        }

        CashStatement::where('insert_id', $request->id)->update([
            'date' => $request->date,
            'remarks' => $request->invoice_number,
            'debit' => $request->payment ?? 0,
            'credit' => 0,
            'insert_status' => 1, // 1 = Sale
            'insert_id' => $request->customer_id,
        ]);

        return redirect()->route('Sales.index')->with('success', 'Sales Invoice Updated Successfully');
    }

    public function salesReturnForm($id)
    {
        $id = Crypt::decrypt($id);

        $customer = Contact::where('contact_type', 1)->select('id', 'company_name')->get();
        $bank = BankSetup::orderBy('id', 'asc')->select('id', 'bank_name')->get();

         $data = Sales::with(['salesdetails', 'salesdetails.medicine'])->find($id);

        return view('admin.sales.return', compact([
            'data',
            'customer',
            'bank',
        ]));
    }

    public function ReturnUpdate(SalesRequest $request)
    {
        // Sales::find($request->id)->delete();

        if($request->quantity > 0){

            $sales = new SalesReturn();
            $sales->customer_id = $request->customer_id;
            $sales->previous_dues = $request->previous_dues;
            $sales->invoice_number  = $request->invoice_number;
            $sales->date = $request->date;
            $sales->total_amount = $request->total_amount;
            $sales->discount_amount = $request->discount_amount ?? 0;
            $sales->shipping_charge = 0;
            $sales->less_amount = $request->less_amount ?? 0;
            $sales->final_total = $request->grand_total;
            $sales->cash_paid = $request->cash_paid ?? 0;
            $sales->due_amount = $request->due_amount ?? 0;
            $sales->advance = $request->advance ?? 0;
            $sales->current_dues = $request->dues ?? 0;
            $sales->payment_method = $request->payment_method;
            $sales->bank_id = 0;
            $sales->cheque_number = 0;
            $sales->chuque_app_date = 0;
            $sales->created_by = Auth::id();
            $sales->created_at = Carbon::now();
            $sales->save();

            // SalesDetail::where('common_id', $request->id)->delete();

            foreach ($request->quantity as $key => $value) {

                $medicineId = $request->medicine_id[$key];
                $medicine = Medicine::find($medicineId);
                if ($medicine) {
                    $stock = $medicine->stock;
                    $instock = $stock + $value;
                    $medicine->stock = $instock;
                    $medicine->save();

                    $saleDetails = new SalesReturnDetail();
                    $saleDetails->medicine_id = $request->medicine_id[$key];
                    $saleDetails->generic_id = $request->generic_id[$key];
                    $saleDetails->company_id = $request->company_id[$key];
                    $saleDetails->quantity = $value;
                    $saleDetails->sell_price = $request->unit_price[$key];
                    $saleDetails->product_discount = $request->uni_disc[$key] ?? 0;
                    $saleDetails->unit_price = $request->unit_price[$key];
                    // $saleDetails->hidden_unit_price = $request->unit_price[$key];
                    $saleDetails->sub_total = $request->sub_total[$key];
                    $saleDetails->netCost_price = 0;
                    $saleDetails->inStock = $instock;
                    $saleDetails->date = $request->date;
                    $saleDetails->customer_id = $request->customer_id;
                    $saleDetails->common_id = $sales->id;
                    $saleDetails->creator_id = Auth::id();
                    $saleDetails->save();
                }

                StockLedger::create([
                    'medicine_id' => $medicineId,
                    'generic_id' => 0,
                    'date' => $request->date,
                    'debit_qty' => 0,
                    'credit_qty' => $value,
                    'consumer' => $request->customer_id,
                    'insert_status' => $sales->id,
                    'insert_id' => 4,  // 4 = sales return
                    'created_by' => Auth::id(),
                ]);

            }

            $latestData = CustomerLedger::where('customer_id', $request->customer_id)->orderBy('id', 'desc')->first();
            $due = 0; // Initialize due to zero to avoid undefined variable issues

            if ($latestData) {
                if ($latestData->balance >= $request->cash_paid) {
                    $due = $latestData->balance - $request->cash_paid;
                } else {
                    $due = 0;
                }
            } else {
                $due = ($request->previous_dues ?? 0) - ($request->cash_paid ?? 0);
            }

            $customerLedger = new CustomerLedger();
            $customerLedger->customer_id = $request->customer_id;
            $customerLedger->description = $request->invoice_number;
            $customerLedger->previous_due = $request->previous_dues ?? 0;
            $customerLedger->debit = 0;
            $customerLedger->credit = $request->cash_paid ?? 0;
            $customerLedger->discount = $request->discount ?? 0;
            $customerLedger->balance = $due;
            $customerLedger->insert_status = 3; // 3 = Sales
            $customerLedger->insert_id = $sales->id;
            $customerLedger->date = $request->date;
            $customerLedger->created_by = Auth::id();
            $customerLedger->save();


            CashStatement::create([
                'date' => $request->date,
                'remarks' => $request->invoice_number,
                'debit' => 0,
                'credit' => $request->cash_paid ?? 0,
                'insert_status' => 5,
                'insert_id' => $request->customer_id,
            ]);

        }

        return redirect()->route('Sales.return.list')->with('success', 'Sales Return Created Successfully');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $sales = Sales::find($id);

        if ($sales) {
            $sales->delete();
            return redirect()->back()->with('success', 'Sales Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Sales not found');
        }
    }

    public function SalesReturnList(Request $request)
    {
        $from_date = $request->input('from_date', Carbon::now()->subDays(30)->format('Y-m-d'));
        $to_date = $request->input('to_date', Carbon::now()->format('Y-m-d'));
        $inv = $request->input('invoice_number', '');

        $query = SalesReturn::with(['customer:id,company_name']);
        if (!empty($from_date) && !empty($to_date)) {
            $query->whereBetween('date', [$from_date, $to_date]);
        }
        if (!empty($inv)) {
            $query->where('invoice_number', $inv);
        }
        $data = $query->latest()->get();

        return view('admin.sales.return-list', compact('data','from_date','to_date','inv'));

    }

    public function SalesReturndelete($id)
    {
        $id = Crypt::decrypt($id);
        $sales = SalesReturn::find($id);

        if ($sales) {
            $sales->delete();
            return redirect()->back()->with('success', 'Sales Return Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Sales Return id not found');
        }
    }

}
