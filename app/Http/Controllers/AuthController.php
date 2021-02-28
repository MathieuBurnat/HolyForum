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
    
    public function connection(Request $request)
    {
        //Get The corresponded user
        $user = User::where('email', $request->input('email'))->first();

        //If doesn't exist
            //Return an error : User doesn't exist

        //Check is the hashed password correspond.
            //Isn't => Return an error : Password doesn't match.

        //If it's work
            //Log the user.
    }
}
