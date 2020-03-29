<?php

namespace App\Http\Controllers\Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;

class LoginController extends Controller
{
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
    // protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function username()
    {
        return 'username';
    }

    public function showLoginForm()
    {
      abort(404);
    }

    public function redirectTo(){
        // User role
        $role = auth()->user()->role; 

        switch ($role) {
            case 0:
              return '/admin';
              break;
            case 1:
              return '/trader';
              break;
            default:
              return '/customer';
              break;
          }
    }

    protected function loggedOut(Request $request)
    {
      session()->flash('snackbar-message', 'You have successfully logged out!');
      session()->flash('snack-style', 'background-color: #28B463');
    }
}
