<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\Customer;
use Throwable;

class CustomerController extends Controller
{
    public function store(CustomerRequest $request)
    {
        Customer::create($request->validated());
        return redirect(route('home'))->with('message', 'Customer created successfully');
    }
}
