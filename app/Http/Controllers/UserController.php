<?php

namespace App\Http\Controllers;



class UserController extends Controller
{
    public function loginForm()
    {
        return view('user.login');
    }

    public function registerForm()
    {
        return view('user.register');
    }
}
