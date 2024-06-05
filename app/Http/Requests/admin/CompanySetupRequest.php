<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class CompanySetupRequest extends FormRequest
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
            'company_name' => ['required', 'string', 'max:100'],
            'company_address' => ['required', 'string', 'max:100'],
            'contact_person' => ['required', 'string', 'max:100'],
            'contact_number' => ['required', 'numeric', 'regex:/\+?(88)?0?1[3-9][0-9]{8}\b/'],
            'web_link' => ['required', 'url'],
            'company_setup_date' => ['required','date', 'date_format:Y-m-d'],
            'company_logo' => ['nullable', 'image', 'mimes:jpg,png,jpeg,webp', 'max:2048'],
        ];
    }
}
