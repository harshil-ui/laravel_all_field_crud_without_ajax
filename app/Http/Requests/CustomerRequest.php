<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Route;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\Rules\File;
use Illuminate\Validation\Rule;



class CustomerRequest extends FormRequest
{
    public function rules()
    {
        return [
            'first_name' => ['required'],
            'last_name' => ['nullable'],
            'email' => ['required', Rule::unique('customers')->ignore($this->customer), 'email:rfc,dns'],
            'password' => Route::currentRouteName() !== 'updateCustomer' ? ['required', Password::min(8)] : ['nullable'],
            'number' => ['required', 'digits_between: 1, 5'],
            'date' => ['required', 'date_format:Y-m-d'],
            'contract_category_id' => ['required'],
            'country' => ['required', 'array'],
            'image' => ['required', File::image()->min(1)->max(1024 * 12)],
            'comment' => ['nullable'],
            'sports' => ['required', 'array'],
            'gender' => ['required']
        ];
    }
}
