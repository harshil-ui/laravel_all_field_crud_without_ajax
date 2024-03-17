<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'CRUD')

@section('content')

    {{-- @dd($customer) --}}

    <a href="{{ route('create-contract') }}">Crete contract category</a>
    <br>
    <a href="{{ route('table') }}">List</a>

    <form action="{{ isset($customer) ? route('updateCustomer', $customer->id) : route('insertCustomer') }}" method="post"
        enctype="multipart/form-data">
        @csrf

        <div class="mt-3">
            <div class="row">
                <div class="col-md-6">
                    <h2>{{ isset($customer) ? 'Update customer' : 'Add customer' }}</h2>

                    <!-- Text input -->
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name : </label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="Enter first name" value="{{ isset($customer) ? $customer->first_name : '' }}">
                    </div>

                    <div class="mb-3">
                        <label for="last_name">Last name : </label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            placeholder="Enter last name" value="{{ isset($customer) ? $customer->last_name : '' }}">
                    </div>

                    {{-- Email input --}}

                    <div class="mb-3">
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email"
                            value="{{ isset($customer->email) ? $customer->email : '' }}">
                    </div>

                    {{-- Password field --}}
                    @if (!isset($customer))
                        <div class="mb-3">
                            <label for="password">Password : </label>
                            <input type="password" name="password" id="password" class="form-control"
                                placeholder="Enter password">
                        </div>
                    @endif

                    {{-- Number Field --}}

                    <div class="mb-3">
                        <label for="number">Number : </label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Enter number"
                            value="{{ isset($customer->number) ? $customer->number : '' }}">
                    </div>

                    {{-- Date picker --}}

                    <div class="mb-3">
                        <label for="date">Date : </label>
                        <input type="text" name="date" id="date" placeholder=" Select date"
                            class="datepicker form-control" value="{{ isset($customer->date) ? $customer->date : '' }}">
                    </div>

                    {{-- Select --}}

                    <div class="mb-3">
                        <label for="contract_category_id">Contract category : </label>
                        <select name="contract_category_id" id="contract_category_id" class="form-control">
                            <option value="">--Select contract category--</option>
                            @foreach ($contractCategory as $item)
                                <option value="{{ $item->id }}"
                                    {{ isset($customer->contract_category_id) && $customer->contract_category_id == $item->id ? 'selected' : '' }}>
                                    {{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Multiple select --}}
                    <div class="mb-3">
                        <label for="country">Country :</label>
                        <select name="country[]" id="country" class="form-control" multiple>
                            @foreach ($countries as $item)
                                <option value="{{ $item }}"
                                    {{ isset($customer->country) && in_array($item, json_decode($customer->country)) ? 'selected' : '' }}>
                                    {{ $item }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- File upload --}}

                    <div class="mb-3">
                        <label for="image">Image : </label>
                        <input type="file" name="image" id="image" class="image form-control">
                    </div>

                    @if (isset($customer->image))
                        <img src="{{ Storage::url($customer->image) }}" alt="customer image" height="100px" width="100px">
                    @endif

                    {{-- Text area --}}

                    <div class="mb-3">
                        <label for="comment">Comment :</label>
                        <textarea name="comment" class="form-control" id="comment" rows="3">{{ isset($customer->comment) ? $customer->comment : '' }}</textarea>
                    </div>

                    {{-- Check boxed --}}
                    <fieldset>
                        <legend>Favourite sports</legend>
                        @foreach ($sports as $val)
                            <div>
                                <label for="{{ $val }}">{{ $val }} :</label>
                                <input type="checkbox" name="sports[]" id="{{ $val }}"
                                    value="{{ $val }}"
                                    {{ isset($customer->sports) && in_array($val, json_decode($customer->sports)) ? 'checked' : '' }}>
                            </div>
                        @endforeach
                    </fieldset>

                    {{-- Radio --}}

                    <div class="mb-3">

                        <fieldset>
                            <legend>Gender </legend>
                            <div>
                                <label for="male">Male : </label>
                                <input type="radio" name="gender" id="male" value="male"
                                    {{ isset($customer->gender) && $customer->gender === 'male' ? 'checked' : '' }}>
                            </div>
                            <div>
                                <label for="female">Female : </label>
                                <input type="radio" name="gender" id="female" value="female"
                                    {{ isset($customer->gender) & ($customer->gender === 'female') ? 'checked' : '' }}>
                            </div>
                        </fieldset>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">
                            {{ isset($customer) ? 'Update customer' : 'Add customer' }}
                        </button>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection

@extends('layouts.footer')
