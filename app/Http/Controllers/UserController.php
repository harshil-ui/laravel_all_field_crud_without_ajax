<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRequest;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Hash;

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
        $data['password'] = Hash::make($request->password);
        if ($data['remember_me'] === 'on') {
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

    public function postLogin(Request $request)
    {
        $credentials = $request->validate([
            'email' => ['required', 'email:rfc,dns'],
            'password' => ['required'],
            'remember_me' => ['required']
        ]);

        $remember = $credentials['remember_me'] === 'on' ? true : false;
        unset($credentials['remember_me']);
        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();

            return redirect(route('home'));
        }

        return redirect(route('login'))->with('message', 'Credentials doen not match');
    }

    public function logout(Request $request): RedirectResponse
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect(route('login'));
    }
}
