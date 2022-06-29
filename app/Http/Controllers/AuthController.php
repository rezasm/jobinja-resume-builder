<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    public function register(){


        return view('auth.register');

    }

    public function StoreUser(Request $request){

        $validated = $request->validate([
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);
        $user = new User();
        $user->name = $request->email; 
        $user->email = $request->email; 
        $user->password = Hash::make($request->password); 
        $user->save();
        return redirect()->route('login');
    }
    public function login(){


        return view('auth.login');
    }

    public function LoginUser(Request $request){
        $credentials = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);


        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            return redirect()->intended('/');
        }

        return back()->with('error',__('flash.credentilas-invalid'));
    }
}
