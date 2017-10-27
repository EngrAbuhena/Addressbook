<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class PhonebookRequest extends FormRequest
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
     * @return array
     */
    public function rules(Request $request)
    {
        return [
            // validation rules for phonebooks Table
            'name' => 'required|max:50',
            'phone' => 'required|min:10|max:15|unique:phonebooks,phone,'.$request->id,
            'email' => 'email|max:50|unique:phonebooks,email,'.$request->id
        ];
    }
}
