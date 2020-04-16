<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class CheckoutController extends Controller
{
    public function index(Request $request){
        $cartProducts = array();
        if(Auth::user()){
            if($request->session()->has('cart')){
                $cartProducts = $request->session()->get('cart');
                if($cartProducts == null ){
                    $cartProducts = array();
                }
            }
            return view('Auths.checkout', compact('cartProducts'));
        }
    }

    public function checkoutSuccess(){
        dd('Checkout Success!');
    }
}
