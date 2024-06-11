<?php

namespace App\Http\Controllers;

use App\Models\User;

class SessionController extends Controller
{
    public function create(){
        return view('session.create');
    }

    public function login()
    {
        $attributes = request()->validate([
            'password' => 'required',
            'username' => 'required',
        ]);

        if (!auth()->attempt($attributes)) {
            return back()->withErrors([['error' => 'Invalid Credentials']]);
        } else {
            session()->regenerate();
            return redirect('/test_asd/a')->with('message', 'Login Successful');
        }
    }

    public function logout()
    {
        auth()->logout();

        return redirect('/test_asd/a')->with('message', 'Logout Successful');
    }
}
