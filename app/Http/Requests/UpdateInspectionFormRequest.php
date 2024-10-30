<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateInspectionFormRequest extends FormRequest
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
            'work_order_no' => 'required|string|max:255',
            'customer_name' => 'required|string|max:255',
            'production_order_no' => 'nullable|string|max:255',
            'project' => 'nullable|string|max:255',
            'quality_inspector' => 'nullable|string|max:255',
            'signature' => 'nullable|file|mimes:jpg,jpeg,png,pdf|max:2048', // File validation
        ];
    }
}
