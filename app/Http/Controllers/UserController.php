<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $data = $request->validated();
        $path = $request->file('avatar')->store('public/users');
        
    }

    public function login()
    {
        return view('auth.login');
    }
}
