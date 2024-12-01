<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function register(Request $request)
    {
        //VALIDATION
        $fields = $request->validate([
            'name' => ['required', 'max:255'],
            'email' => ['required', 'max:255', 'email', 'unique:users'],
            'password' => ['required', 'max:255', 'confirmed']
        ]);

        //REGISTER
        $user = User::create($fields);

        //Loggin
        Auth::login($user);

        //REDIRECT USER 
        return redirect()->route('home');
    }

    //Login user
    public function login(Request $request)
    {
        $fields = $request->validate([

            'email' => ['required', 'max:255', 'email'],
            'password' => ['required', 'max:255']
        ]);

        //Trying to loggin the user

        if (Auth::attempt($fields, $request->remember)) {
            return redirect()->intended();
        } else {
            return back()->withErrors([
                'failed' => 'incorrect username/passwors'
            ]);
        }
    }
}
