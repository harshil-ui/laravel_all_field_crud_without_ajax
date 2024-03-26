@extends('layouts.app')

@section('title', 'Register user')

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
                        <form>
                            <div class="mb-3">
                                <label for="emailInput" class="form-label">Email address</label>
                                <input type="email" class="form-control" id="emailInput" placeholder="name@example.com">
                            </div>
                            <div class="mb-3">
                                <label for="passwordInput" class="form-label">Password</label>
                                <input type="password" class="form-control" id="passwordInput" placeholder="Password">
                            </div>
                            <div class="mb-3 form-check">
                                <input type="checkbox" class="form-check-input" id="rememberMeCheck">
                                <label class="form-check-label" for="rememberMeCheck">Remember me</label>
                            </div>
                            <button type="submit" class="btn btn-primary w-100">Sign in</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
