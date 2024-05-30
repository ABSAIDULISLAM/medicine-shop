<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\StockMatchingRequest;
use App\Models\Medicine;
use App\Models\StockLedger;
use App\Models\StockMatching;
use App\Models\StockMatchingDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;

class StockController extends Controller
{
    public function index()
    {
        $data = StockMatching::with('stockmetcingdetails')->orderBy('id', 'desc')->get();
        return view('admin.stock-matching.index', compact('data'));
    }
    public function create()
    {
        return view('admin.stock-matching.create');
    }

    public function invoiceView($id)
    {
        // $id = Crypt::decrypt($id);

        $data = StockMatching::with(['stockmetcingdetails', 'stockmetcingdetails.medicine'])->orderBy('id', 'desc')->where('id', $id)->first();

        return view('admin.stock-matching.invoice-print',compact('data'));
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
                    'stock' => $product->stock,
                ],
            ];

            return response()->json($response);
        }

        return response()->json(['error' => 'Product not found '], 404);
    }

    public function store(StockMatchingRequest $request)
    {
        // return $request->all();
        if($request->medicine_id && count($request->medicine_id) > 0) {
            $stock = new StockMatching();
            $stock->invoice_number = $request->invoice_number;
            $stock->remarks = $request->remarks ?? $request->invoice_number;
            $stock->date = $request->date;
            $stock->created_by = Auth::id();
            $stock->save();

            foreach ($request->medicine_id as $key => $medicine_id) {
                $medicineId = $medicine_id;
                $medicine = Medicine::find($medicineId);
                if ($medicine) {
                    $medicine->stock += $request->add_qty[$key];
                    $medicine->stock -= $request->minus_qty[$key];
                    $medicine->save();

                    $stockmdet = new StockMatchingDetail();
                    $stockmdet->medicine_id = $medicineId;
                    $stockmdet->generic_id = $request->generic_id[$key];
                    $stockmdet->company_id = $request->company_id[$key];
                    $stockmdet->add_qty = $request->add_qty[$key];
                    $stockmdet->minus_qty = $request->minus_qty[$key];
                    $stockmdet->cost_price = $request->cost_price[$key] ?? 0;
                    $stockmdet->sales_price = $request->sales_price[$key];
                    $stockmdet->date = $request->date;
                    $stockmdet->common_id = $stock->id;
                    $stockmdet->created_by = Auth::id();
                    $stockmdet->save();
                }

                StockLedger::create([
                    'medicine_id' => $medicineId,
                    'generic_id' => $request->generic_id[$key],
                    'date' => $request->date,
                    'debit_qty' => $request->minus_qty[$key] > 0 ? $request->minus_qty[$key]: 0,
                    'credit_qty' => $request->add_qty[$key] > 0 ? $request->add_qty[$key]: 0,
                    'consumer' => $stock->id,
                    'insert_status' => $stock->id,
                    'insert_id' => 5,  // 5 = Stock metching
                    'created_by' => Auth::id(),
                ]);
            }
            return redirect()->route('Stock-matching.index')->with('success', 'Stock Metching Store Successfully');
        }

        return back()->with('error', 'No quantity provided for the sale.');
    }

    public function delete($id)
    {
        $id = Crypt::decrypt($id);
        $sales = StockMatching::find($id);

        if ($sales) {
            $sales->delete();
            return redirect()->back()->with('success', 'Stock Metching info Deleted Successfully');
        } else {
            return redirect()->back()->with('error', 'Stock Metching info not found');
        }
    }


}
