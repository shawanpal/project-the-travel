<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Validator;
use Illuminate\Database\Eloquent\Collection;
use App\Models\User;
use Illuminate\Support\Facades\Input;
use Hash;

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

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = '/';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct() {
        $this->middleware('guest')->except('logout');
    }

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
            $hashed = Hash::make($password);
            $condition = array('email' => $email, 'password' => $hashed, 'status' => 1);
            $users = new User();
            $fetch = $users::where($condition)->get();
            print_r($condition);
            die();
        }
    }

}
