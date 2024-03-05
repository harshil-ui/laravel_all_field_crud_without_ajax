<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\ContractCategory;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class CustomerController extends Controller
{
    public function store(CustomerRequest $request)
    {
        $data = $request->validated();
        $data['password'] = Hash::make($data['password']);
        Customer::create($data);
        return redirect(route('home'))->with('message', 'Customer created successfully');
    }

    public function create()
    {
        return view('index', ['contractCategory' => $this->getContractCategory()]);
    }

    public function getContractCategory()
    {
        return ContractCategory::select('id', 'name')->get();
    }
}
