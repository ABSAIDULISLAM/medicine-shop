<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ProductPurchaseRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        return [
            'supplier_id' => ['required', 'exists:contacts,id'],
            'final_amount' => ['nullable', 'numeric'],
            'payment' => ['nullable', 'numeric'],
            'previous_dues' => ['nullable', 'numeric'],
            'discount' => ['nullable', 'numeric'],
            'dues' => ['nullable', 'numeric'],
            'invoice_number' => ['required', 'numeric'],
            'shipping_charge' => ['nullable', 'numeric'],
            'bank_id' => ['nullable', 'numeric'],
            'date' => ['required', 'date', 'date_format:Y-m-d'],
            'payment_method' => ['nullable'],
            'cheque_no' => ['required_if:payment_method,cheque'],
            'search' => ['nullable'],
            'product_id.*' => ['nullable', 'numeric'],
            'quantity.*' => ['nullable', 'numeric'],
            'cost_price.*' => ['nullable', 'numeric'],
            'expire_date.*' => ['required', 'date', 'date_format:Y-m-d'],
            'rack_id.*' => ['nullable', 'numeric'],
            'sub_total.*' => ['nullable', 'numeric'],
            'hiddnTotal.*' => ['nullable', 'numeric'],
            'stock.*' => ['nullable', 'numeric'],
            'preStock.*' => ['nullable', 'numeric'],
            'product_code.*' => ['nullable'],
            'total_amount' => ['nullable', 'numeric'],
            'total_coast' => ['nullable', 'numeric'],
        ];
    }
}
