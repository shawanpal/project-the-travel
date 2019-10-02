<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use App\User;
use Illuminate\Support\Facades\Input;
use Hash;
use Session;

class LoginController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Login Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles authenticating users for the application and
      | redirecting them to your home screen. The controller uses a trait
      | to conveniently provide its functionality to your applications.
      |
     */

use AuthenticatesUsers;

    public function userLogin(Request $request) {

        $validator = Validator::make($request->all(), [
                    'email' => 'email|string|required',
                    'password' => 'string|required|min:8'
        ]);

        if ($validator->fails()) {
            return Redirect::back()
                            ->withErrors($validator, 'login')
                            ->withInput();
        } else {
            $email = $request->input('email');
            $password = $request->input('password');
            $credentials = array('email' => $email, 'password' => $password, 'status' => 1);
            if (Auth::attempt($credentials)) {
                $request->session()->put('user_id', Auth::user()->id);
                return redirect('/');
            } else {
                $request->session()->flash('status-danger', "Invalid Credentials , Please try again.");
                return Redirect::back();
            }
        }
    }

}
