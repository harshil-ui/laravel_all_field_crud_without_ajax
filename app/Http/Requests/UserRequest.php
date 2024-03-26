<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Request;

class UserRequest extends FormRequest
{
    public function rules(Request $request)
    {
        return [
            'name' => ['required'],
            'email' => ['required', 'email:rfc,dns'],
            'contact_no' => ['required', 'numeric'],
            'password' => ['required', 'confirmed'],
            'remember_me' => ['nullable'],
            'avatar' => ['required']
        ];
    }
}
