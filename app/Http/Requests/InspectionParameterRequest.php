<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class InspectionParameterRequest extends FormRequest
{
    public function authorize()
    {
        // Set to true if you want to allow all users to access this request
        return true;
    }

    public function rules()
    {
        return [
        's_no' => 'required|integer',
        'inspection_parameter' => 'required|string',
        'check_type' => 'required|string',
        'accepted' => 'required|integer',
        'rejected' => 'required|integer',
        'qc_noted' => 'nullable|string',
        ];
    }


}
