@extends('layouts.app')

@section('title', 'Register user')

@section('content')

    <style>
        body {
            background-color: #f0f2f5;
        }

        .card {
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }

        .btn-custom {
            background-color: #007bff;
            border-color: #007bff;
            color: #fff;
        }

        .btn-custom:hover {
            background-color: #0056b3;
            border-color: #004085;
        }
    </style>

    <div class="container my-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card">
                    <div class="card-header text-center">
                        <h4>Sign Up</h4>
                    </div>
                    <div class="card-body">
                        <form method="POST" action="{{ route('post-user') }}" enctype="multipart/form-data">
                            @csrf
                            <!-- Full Name -->
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-person-fill"></i></span>
                                <input type="text" class="form-control" id="fullName" placeholder="Full Name"
                                    name="name" autocomplete="off">
                            </div>
                            <!-- Email Address -->
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-envelope-fill"></i></span>
                                <input type="email" class="form-control" id="emailAddress" placeholder="Email Address"
                                    name="email" autocomplete="off">
                            </div>
                            <!-- Contact Number -->
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-telephone-fill"></i></span>
                                <input type="tel" class="form-control" id="contactNumber" placeholder="Contact Number"
                                    name="contact_no" autocomplete="off" onkeypress="return /[0-9]/i.test(event.key)">
                            </div>
                            <!-- Password -->
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-lock-fill"></i></span>
                                <input type="password" class="form-control" id="password" placeholder="Password"
                                    name="password" autocomplete="off">
                            </div>
                            <!-- Confirm Password -->
                            <div class="mb-3 input-group">
                                <span class="input-group-text"><i class="bi bi-check2-circle"></i></span>
                                <input type="password" class="form-control" id="confirmPassword"
                                    placeholder="Confirm Password" name="password_confirmation" autocomplete="off">
                            </div>
                            <!-- Remember Me Checkbox -->
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMe" name="remember_me" checked>
                                <label class="form-check-label" for="rememberMe">Remember Me</label>
                            </div>
                            <!-- Avatar Upload -->
                            <div class="mb-3">
                                <label for="avatar" class="form-label">Upload Avatar</label>
                                <input type="file" class="form-control" id="avatar" name="avatar" accept="image/*">
                            </div>
                            <button type="submit" class="btn btn-custom w-100">Create Account</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
