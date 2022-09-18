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
            'name' => 'required|unique:users|min:4|max:40',
            'noHp' => 'required|min:10',
            'email' => 'required|email:dns|unique:users',
            'password' => 'required|confirmed|min:6|max:12'
        ]);
        $validasi['password'] = bcrypt($validasi['password']);
        User::create($validasi);

        return redirect('/');
    }
}
