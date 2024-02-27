<!-- resources/views/child.blade.php -->

@extends('layouts.app')

@section('title', 'CRUD')

@section('content')

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
                            placeholder="Enter first name" required>
                    </div>

                    <div class="mb-3">
                        <label for="last_name">Last name : </label>
                        <input type="text" class="form-control" name="last_name" id="last_name"
                            placeholder="Enter last name">
                    </div>

                    {{-- Email input --}}

                    <div class="mb-3">
                        <label for="email">Email : </label>
                        <input type="email" name="email" id="email" class="form-control" placeholder="Enter email"
                            required>
                    </div>

                    <div class="mb-3">
                        <button type="submit" class="btn btn-primary">Add</button>
                    </div>

                </div>
            </div>
        </div>
    </form>

@endsection
