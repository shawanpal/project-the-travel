<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Session;


class AuthController extends Controller {

    public function signup(Request $request) {
        if ($request->session()->has('user_id')) {
            return redirect()->route('home');
        } else {
            return view('signup');
        }
    }

    public function signin(Request $request) {
        if ($request->session()->has('user_id')) {
            return redirect()->route('home');
        } else {
            return view('signin');
        }
    }
    
    public function logout(Request $request) {
        if ($request->session()->has('user_id')) {
            $request->session()->forget('user_id');
            return Redirect::back();
        }else{
            return Redirect::back();
        }
        
    }
//return Redirect::back()->withErrors(['msg', 'The Message']);
}
