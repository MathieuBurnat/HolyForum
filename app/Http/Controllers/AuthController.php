<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

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

        //If the mail exists
        if(!empty($user)){
        //Check is the hashed password correspond.
            if (Hash::check($request->input('password'), $user->password)){
                Auth::login($user);
                return redirect('/')->with("success","Vous êtes connecté !");
            }
            else
                return redirect(route('login'))->with("error","Le mot de passe est faux.");
        }else{
            return redirect(route('login'))->with("error","L'adresse mail n'existe pas.");
        }
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/')->with("warning","Vous êtes correctement déconnecté !");
    }
}
