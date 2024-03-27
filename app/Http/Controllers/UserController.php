<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function create()
    {
        return view('auth.register');
    }

    public function store(UserRequest $request)
    {
        $remember = false;
        $data = $request->validated();
        $path = $request->file('avatar')->store('public/users');
        $data['avatar'] = $path;
        if($data['remember_me'] === 'on'){
            $remember = true;
        }
        $user = User::create($data);
        Auth::login($user, $remember);
        return redirect(route('table'))->with('message', 'User registered successfully');
    }

    public function login()
    {
        return view('auth.login');
    }
}
