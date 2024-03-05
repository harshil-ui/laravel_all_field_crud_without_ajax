<?php

namespace App\Http\Controllers;

use App\Models\ContractCategory;
use App\Http\Requests\ContractCategoryRequest;

class ContractCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('contract_category.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContractCategoryRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(ContractCategoryRequest $request)
    {
        ContractCategory::create($request->validated());
        return redirect(route('home'))->with('message', 'Contract category created successfully');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ContractCategory  $contractCategory
     * @return \Illuminate\Http\Response
     */
    public function show(ContractCategory $contractCategory)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ContractCategory  $contractCategory
     * @return \Illuminate\Http\Response
     */
    public function edit(ContractCategory $contractCategory)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContractCategoryRequest  $request
     * @param  \App\Models\ContractCategory  $contractCategory
     * @return \Illuminate\Http\Response
     */
    public function update(ContractCategoryRequest $request, ContractCategory $contractCategory)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ContractCategory  $contractCategory
     * @return \Illuminate\Http\Response
     */
    public function destroy(ContractCategory $contractCategory)
    {
        //
    }
}
