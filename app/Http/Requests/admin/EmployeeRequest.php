<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class EmployeeRequest extends FormRequest
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
            'employee_name' => ['required', 'string', 'max:256'],
            'employee_type' => ['required'],
            'designation_id' => ['required'],
            'mobile_number' => ['required', 'numeric', 'regex:/\+?(88)?0?1[3-9][0-9]{8}\b/', 'unique:employees,id'],
            'email_address' => ['required', 'email', 'string', 'lowercase'],
            'mother_name' => ['required', 'string', 'max:256'],
            'father_name' => ['required', 'string', 'max:256'],
            'permanent_address' => ['required', 'string', 'max:256'],
            'nid_number' => ['nullable', 'numeric', 'regex:/^\d{10}$|^\d{13}$/'],
            'basic_salary' => ['required', 'numeric','decimal:0,1000000'],
            'washing_cost' => ['nullable', 'numeric','decimal:0,1000000'],
            'overtime_rate' => ['nullable', 'numeric','decimal:0,1000000'],
            'deposit_amount' => ['nullable', 'numeric','decimal:0,1000000'],
            'loan_amount' => ['nullable', 'numeric','decimal:0,1000000'],
            'joining_date' => ['required', 'date','date_format:Y-m-d'],
            'house_rent' => ['nullable', 'numeric','decimal:0,1000000'],
            'cng_cost' => ['nullable', 'numeric','decimal:0,1000000'],
            'perDaySalery' => ['nullable', 'numeric','decimal:0,1000000'],
            'mobile_cost' => ['nullable', 'numeric','decimal:0,1000000'],
            'status' => ['nullable', 'numeric','decimal:0,1000000'],
            'employee_images' => ['nullable', 'image', 'mimes:jpeg,png,jpg,gif,webp', 'max:2048'],
        ];
    }
}
