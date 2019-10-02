<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;

class RegisterController extends Controller {
    /*
      |--------------------------------------------------------------------------
      | Register Controller
      |--------------------------------------------------------------------------
      |
      | This controller handles the registration of new users as well as their
      | validation and creation. By default this controller uses a trait to
      | provide this functionality without requiring any additional code.
      |
     */

use RegistersUsers;

    protected function create(array $data) {
        $user = new User();
        return $user::create($data);
    }

    /**
     * Register new user
     */
    public function userRegister(Request $request) {
        $validator = Validator::make($request->all(), [
                    'first_name' => 'string|required',
                    'last_name' => 'string|required',
                    'mobile_no' => 'numeric|required|unique:users',
                    'email' => 'email|string|required|unique:users',
                    'password' => 'string|required|min:8',
                    'confirm_password' => 'string|required|min:8'
        ]);
        if ($validator->fails()) {
            return Redirect::back()
                            ->withErrors($validator, 'register')
                            ->withInput();
        } else {
            $first_name = $request->input('first_name');
            $last_name = $request->input('last_name');
            $mobile_no = $request->input('mobile_no');
            $email = $request->input('email');
            $password = $request->input('password');
            $hashed = Hash::make($password);
            $data = array('first_name' => $first_name, 'last_name' => $last_name, 'mobile_no' => $mobile_no, 'email' => $email, 'password' => $hashed);
            $submit_data = $this->create($data);
            if ($submit_data) {
                $request->session()->flash('status', 'Register Successfully!');
                return redirect('/signin');
            }
        }
    }

}
