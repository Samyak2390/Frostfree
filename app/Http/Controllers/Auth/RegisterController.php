<?php

namespace App\Http\Controllers\Auth;

/**
 * Imports required for overriding register method
 */
use Illuminate\Http\Request;
use Illuminate\Auth\Events\Registered;
/**------------------------------------- */

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
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

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'role' => ['required', 'numeric'],
            'username' => ['required', 'string', 'max:255', 'unique:users'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
            'trader_category' => ['required_if:role,1'],
            'shop_name'  => ['required_if:role,1'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    { 
        $user = User::create([
            'role' => $data['role'],
            'username' => $data['username'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'trader_category' => $data['trader_category'],
        ]);

        $user->shop()->create([
            'shop_name'=>$data['shop_name']
        ]);

        return $user;
    }

    /**
     * Override register method from Illuminate\Foundation\Auth\RegistersUsers;
     */

    public function register(Request $request)
    {
        $this->validator($request->all())->validate();

        event(new Registered($user = $this->create($request->all())));
        
        //Disable auto login after registration
        // $this->guard()->login($user);

        if ($response = $this->registered($request, $user)) {
            return $response;
        }

        return $request->wantsJson()
                    ? new Response('', 201)
                    : redirect($this->redirectPath());
    }

    protected function registered(Request $request, $user)
    {
        /**
         * Display flash message after successful registration.
         */
        session()->flash('snackbar-message', 'You are successfully registerd!');
        session()->flash('snackbar-message2', 'Check your email to verify.'); 
        session()->flash('snack-style', 'background-color: #28B463');
    }

    public function showRegistrationForm()
    {
        abort(404);
    }
}
