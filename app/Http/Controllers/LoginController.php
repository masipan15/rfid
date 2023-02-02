<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(){
        return view('login.login');
    }

    public function loginproses(Request $request){

       if (Auth::attempt([
        'email'=>$request->email,
        'password'=> $request-> password,
        'role' =>  'admin'
        ])) {
        return redirect('/');
       }
       return redirect('login');
    }

    public function logout(){
        auth::logout();
        return redirect('login');
    }
}
