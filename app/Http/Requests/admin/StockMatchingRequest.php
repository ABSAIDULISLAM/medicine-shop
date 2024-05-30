<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class StockMatchingRequest extends FormRequest
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
            'invoice_number' => ['required'],
            'challan_no' => ['nullable'],
            'remarks' => ['nullable'],
            'date' => ['required', 'date', 'date_format:Y-m-d'],

            'medicine_id.*' => ['required','numeric'],
            'add_qty.*' => ['required','numeric'],
            'minus_qty.*' => ['required','numeric'],
            'cost_price.*' => ['required','numeric'],
            'sales_price.*' => ['required','numeric'],
            'inStock.*' => ['required','numeric'],
            'currStock.*' => ['required','numeric'],
        ];
    }
}
