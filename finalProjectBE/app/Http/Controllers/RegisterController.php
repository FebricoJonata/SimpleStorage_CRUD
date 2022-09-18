<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class RegisterController extends Controller
{
    public function index(){
        return view('register');
    }


    public function store(Request $request){
        $validasi = $request->validate([
            'name' => 'required|unique:users',
            'noHp' => 'required',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed'
        ]);
        $validasi['password'] = bcrypt($validasi['password']);
        User::create($validasi);

        return redirect('/');
    }
}
