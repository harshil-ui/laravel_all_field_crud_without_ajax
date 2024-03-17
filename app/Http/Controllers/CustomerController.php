<?php

namespace App\Http\Controllers;

use App\Http\Requests\CustomerRequest;
use App\Models\ContractCategory;
use App\Models\Customer;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class CustomerController extends Controller
{
    public $sports = ['cricket', 'football', 'tennis', 'hockey'];
    public $countries = ['India', 'Japan', 'USA', 'UK', 'France', 'Germany'];

    public function store(CustomerRequest $request)
    {
        $data = $request->validated();
        $path = $request->file('image')->store('public/avatars');
        $data['password'] = Hash::make($data['password']);
        $data['country'] = json_encode($data['country']);
        $data['image'] = $path;
        $data['sports'] = json_encode($data['sports']);
        Customer::create($data);
        return redirect(route('table'))->with('message', 'Customer created successfully');
    }

    public function create()
    {

        return view('customers.form', [
            'contractCategory' => $this->getContractCategory(),
            'sports' => $this->sports,
            'countries' => $this->countries
        ]);
    }

    public function getContractCategory()
    {
        return ContractCategory::select('id', 'name')->get();
    }

    public function list()
    {
        $customers = DB::table('customers')
            ->join('contract_categories', 'customers.contract_category_id', '=', 'contract_categories.id')
            ->select('customers.*', 'contract_categories.name AS contractCategory')
            ->get();
        return view('customers.index', ['customers' => $customers]);
    }

    public function edit(Customer $customer)
    {
        return view('customers.form', [
            'customer' => $customer,
            'contractCategory' => $this->getContractCategory(),
            'sports' => $this->sports,
            'countries' => $this->countries
        ]);
    }
}
