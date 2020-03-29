<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        // $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if(auth()->user()){
            if(auth()->user()->role == '1'){
                return redirect("/trader");
            }
            else if(auth()->user()->role == '0'){
                return redirect("/admin");
            }
            else{
                //if user is verified
                if(auth()->user()->email_verified_at){
                    return view('home');
                }else{
                    return redirect("/customer");
                }
            }
        }
        return view('home');
    }

    public function trader(){
        return '<p> You are trader</p>';
    }

    public function admin(){
        return '<p> You are admin</p>';
    }
}
