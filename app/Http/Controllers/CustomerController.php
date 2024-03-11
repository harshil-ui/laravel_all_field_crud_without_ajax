<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\ContractCategory;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Storage;


class CustomerController extends Controller
{
    public function store(CustomerRequest $request)
    {
        $data = $request->validated();
        $path = $request->file('image')->store('avatars');
        $data['password'] = Hash::make($data['password']);
        $data['country'] = json_encode($data['country']);
        $data['image'] = $path;
        $data['sports'] = json_encode($data['sports']);
        Customer::create($data);
        return redirect(route('home'))->with('message', 'Customer created successfully');
    }

    public function create()
    {
        $sports = ['cricket', 'football', 'tennis', 'hockey'];
        return view('customers.form', ['contractCategory' => $this->getContractCategory(), 'sports' => $sports]);
    }

    public function getContractCategory()
    {
        return ContractCategory::select('id', 'name')->get();
    }
}
