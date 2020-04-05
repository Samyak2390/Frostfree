<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Product;

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

        $meat_fish = array();
        $green_groceries = array();
        $bakery_delicacies = array();

        $products = Product::all();
        foreach($products as $product){
           $category =  DB::table('categories')->where('id', $product->category_id)->value('category_name');
            if(strtolower($category) == 'meat' || strtolower($category) == 'fish'){
                array_push($meat_fish, $product);
            }

            if(strtolower($category) == 'green groceries'){
                array_push($green_groceries, $product);
            }

            if(strtolower($category) == 'bakery' || strtolower($category) == 'delicacies'){
                array_push($bakery_delicacies, $product);
            }
        }
        return view('home', compact('meat_fish', 'green_groceries', 'bakery_delicacies'));
    }

    public function admin(){
        return '<p> You are admin</p>';
    }
}
