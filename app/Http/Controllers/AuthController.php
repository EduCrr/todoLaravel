<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{
    public function login(Request $request){
        return view('login');
    }

     public function login_action(Request $request){

        $validator = $request->validate([
            'email' => 'required|email',
            'password' => 'required|min:3'
        ]);

    //    $data = $request->only(['email', 'password']);
       
    //     return redirect('/login');

    }

    public function register(Request $request){
        return view('register');
    }

    public function register_action(Request $request){

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required|min:3|confirmed'
        ]);

       $data = $request->only(['name', 'email', 'password']);
       $userCreate = User::create($data);

       
        return redirect('/login');

    }
    
}
