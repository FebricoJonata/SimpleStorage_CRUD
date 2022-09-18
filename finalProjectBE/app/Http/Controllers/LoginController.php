<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index(){
        return view('login');
    }

    public function authenticate(Request $request){
        $user = $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        if(Auth::attempt($user)){
            $request->session()->regenerate();
            return redirect()->intended('/dashboard');
        }
        return back();
    }
    
    public function logout(){
        Auth::logout();
        request()->session()->invalidate();
        request()->session()->regenerateToken();
        return redirect('/');
    }
}
