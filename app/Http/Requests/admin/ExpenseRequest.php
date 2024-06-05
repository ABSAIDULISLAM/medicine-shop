<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ExpenseRequest extends FormRequest
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
            'account_head' => ['required', 'exists:account_heads,id'],
            'employee_id' => ['required', 'exists:employees,id'],
            'amount' => ['required', 'numeric','max_digits:10', 'min_digits:1' ],
            'creator' => ['nullable'],
            'bank_id' => ['nullable','exists:bank_setups,id'],
            'sub_head_id' => ['required','exists:sub_heads,id'],
            'remarks' => ['nullable','string'],
            'scnd_head_id' => ['required', 'exists:second_sub_heads,id'],
            'date' => ['required','date', 'date_format:Y-m-d' ],
            'cashAmount' => ['nullable','string', 'max:256'],
            'chequeNum' => ['nullable','string', 'max:256'],
            'voucher_no' => ['nullable','string', 'max:256'],
            'payment_method' => ['required'],
            'status' => ['nullable'],
            'chuque_app_date' => ['nullable','date'],
            'expense_file' => ['nullable', 'image', 'mimes:png,jpg,jpeg,webp'],
        ];
    }
}
