<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class SalesRequest extends FormRequest
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
            'mobile_number' => ['required','regex:/\+?(88)?0?1[3456789][0-9]{8}\b/'],
            'previous_dues' => ['required', 'numeric'],
            'invoice_number' => ['required'],
            'date' => ['required', 'date', 'date_format:Y-m-d'],
            'total_amount' => ['required','numeric'],
            'discount_amount' => ['nullable','numeric'],
            'less_amount' => ['nullable','numeric'],
            'grand_total' => ['required','numeric'],
            'cash_paid' => ['required',],
            'due_amount' => ['nullable','numeric'],
            'advance' => ['nullable','numeric'],
            'payment_method' => ['required'],

            'medicine_id.*' => ['required','numeric'],
            'quantity.*' => ['required','numeric'],
            'unit_price.*' => ['required','numeric'],
            'uni_disc.*' => ['nullable','numeric'],
            'sub_total.*' => ['required','numeric'],
            'sell_price.*' => ['nullable','numeric'],
            'cost_price.*' => ['nullable','numeric'],
            'customer_id' => ['required', 'exists:contacts,id'],
            'created_by' => ['nullable', 'exists:users,id'],
        ];
    }
}
