<?php

namespace App\Http\Requests;

use Illuminate\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;

class EmailTemplateRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
       return [
            'name' => 'required|min:2|max:255',
            'details' => 'required|min:2|max:255',
            'html' => 'required'  
        ];

    }
}
