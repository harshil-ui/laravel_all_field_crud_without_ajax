<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\Password;

class CustomerRequest extends FormRequest
{
    public function rules(Request $rq)
    {   
        return [
            'first_name' => ['required'],
            'last_name' => ['nullable'],
            'email' => ['unique:customers,email', 'email:rfc,dns'],
            'password' => ['required', Password::min(8)],
            'number' => ['required', 'digits_between: 1, 5'],
            'date' => ['required', 'date_format:Y-m-d'],
            'contract_category_id' => ['required'],
            'country' => ['required', 'array']
        ];
    }
}
