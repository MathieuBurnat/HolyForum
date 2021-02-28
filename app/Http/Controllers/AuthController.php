<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function login()
    {
        $user = new User();
        return view ('auth.login')->with(compact('user'));
    }

    public function register()
    {
        $user = new User();
        return view ('auth.register')->with(compact('user'));
    }
}
