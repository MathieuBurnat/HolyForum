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
}
