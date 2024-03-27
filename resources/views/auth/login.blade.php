@extends('layouts.app')

@section('title', 'Login')

@section('content')

    <style>
        body {
            background-color: #f0f2f5;
        }

        .card {
            max-width: 400px;
            margin: auto;
            top: 50%;
            transform: translateY(-50%);
        }
    </style>


    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="card mt-5">
                    <div class="card-body">
                        <h5 class="card-title text-center mb-4">Login</h5>
                        <form action="{{ route('post-login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com"
                                    name="email" autocomplete="off">
                            </div>
                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" placeholder="Password"
                                    name="password" autocomplete="off">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="hidden" name="remember_me" value="off">
                                <input type="checkbox" class="form-check-input" name="remember_me" id="rememberMeCheck"
                                    checked>
                                <label class="form-check-label" for="rememberMeCheck">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                            <div class="text-center">
                                <p class="d-inline">Need an account?</p> <a href="{{ route('register-user') }}"
                                    style="text-decoration: none" class="btn btn-link">Create
                                    Account</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
