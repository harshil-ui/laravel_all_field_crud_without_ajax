<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'CRUD')

@section('content')

    <a href="{{ route('create-contract') }}">Crete contract category</a>

    <form action="{{ route('insertCustomer') }}" method="post" enctype="multipart/form-data">
        @csrf

        <div class="mt-3">
            <div class="row">
                <div class="col-md-6">
                    <h2>Bootstrap Form with Various Fields</h2>

                    <!-- Text input -->
                    <div class="mb-3">
                        <label for="first_name" class="form-label">First name : </label>
                        <input type="text" class="form-control" id="first_name" name="first_name"
                            placeholder="Enter first name">
                    </div>

                    <div class="mb-3">
                        <label for="last_name">Last name : </label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            placeholder="Enter last name">
                    </div>

                    {{-- Email input --}}

                    <div class="mb-3">
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email">
                    </div>

                    {{-- Password field --}}

                    <div class="mb-3">
                        <label for="password">Password : </label>
                        <input type="password" name="password" id="password" class="form-control"
                            placeholder="Enter password">
                    </div>

                    {{-- Number Field --}}

                    <div class="mb-3">
                        <label for="number">Number : </label>
                        <input type="text" name="number" id="number" class="form-control" placeholder="Enter number">
                    </div>

                    {{-- Date picker --}}

                    <div class="mb-3">
                        <label for="date">Date : </label>
                        <input type="text" name="date" id="date" placeholder=" Select date"
                            class="datepicker form-control">
                    </div>

                    {{-- Select --}}

                    <div class="mb-3">
                        <label for="contract_category_id">Contract category : </label>
                        <select name="contract_category_id" id="contract_category_id" class="form-control">
                            <option value="">--Select contract category--</option>
                            @foreach ($contractCategory as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>
                            @endforeach
                        </select>
                    </div>

                    {{-- Multiple select --}}

                    <div class="mb-3">
                        <label for="country">Country :</label>
                        <select name="country[]" id="country" class="form-control" multiple>
                            <option value="india">India</option>
                            <option value="japan">Japan</option>
                            <option value="usa">USA</option>
                            <option value="uk">UK</option>
                            <option value="russia">Russia</option>
                            <option value="poland">Poland</option>
                        </select>
                    </div>

                    {{-- File upload --}}

                    <div class="mb-3">
                        <label for="image">Image : </label>
                        <input type="file" name="image" id="image" class="image form-control">
                    </div>

                    {{-- Text area --}}

                    <div class="mb-3">
                        <label for="comment">Comment :</label>
                        <textarea name="comment" class="form-control" id="comment" rows="3"></textarea>
                    </div>

                    {{-- Check boxed --}}

                    <fieldset>
                        <legend>Favourite sports</legend>
                        @foreach ($sports as $val)
                            <div>
                                <label for="{{ $val }}">{{ $val }} :</label>
                                <input type="checkbox" name="sports[]" id="{{ $val }}" value="{{ $val }}">
                            </div>
                        @endforeach
                    </fieldset>

                    {{-- Radio --}}

                    <div class="mb-3">

                        <fieldset>
                            <legend>Gender </legend>
                            <div>
                                <label for="male">Male : </label>
                                <input type="radio" name="gender" id="male" value="male">
                            </div>
                            <div>
                                <label for="female">Female : </label>
                                <input type="radio" name="gender" id="female" value="female">
                            </div>
                        </fieldset>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>
            </div>
        </div>
    </form>
@endsection

@extends('layouts.footer')
