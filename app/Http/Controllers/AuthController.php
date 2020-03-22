<?php


namespace App\Http\Controllers;


use App\Auth;

class AuthController extends Controller
{
    function login()
    {
        $data = request()->validate([
            'log' => 'required',
            'pwd' => 'required'
        ]);
        $username = request('log');
        $password = request('pwd');
        $check = request('rememberme');
    }

    function register()
    {
        $value = request('seeAnotherField');
        if ($value == 'no') {
            $data = request()->validate([
                'user_login' => 'required',
                'user_password' => 'required',
                'user_email' => 'email:rfc,dns'
            ]);
            $username = request('user_login');
            $password = request('user_password');
            $email = request('user_email');
        } else {
            $data = request()->validate([
                'user_login' => 'required',
                'user_password' => 'required',
                'user_email' => 'email:rfc,dns',
                'trader_name' => 'required'
            ]);
            $username = request('user_login');
            $password = request('user_password');
            $email = request('user_email');
            $shop = request('trader_name');
        }
    }
}
