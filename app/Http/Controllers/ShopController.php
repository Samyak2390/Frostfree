<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Shop;
use App\User;
use App\Category;

class ShopController extends Controller
{
    public function index($shop_id){
        $shopInfo = Shop::find($shop_id);
        if(isset($shopInfo)){
            $parallax = "";
            $userId = Shop::find($shop_id)->user_id;
            $traderCategory = User::find($userId)->trader_category;
            $traderCategory = strtolower($traderCategory);

            if($traderCategory == 'greengrocer'){
            $parallax = 'greengrocer.jpeg';
            }

            if($traderCategory == 'fishmonger'){
            $parallax = 'fishmonger.jpg';
            }

            if($traderCategory == 'bakery'){
            $parallax = 'bakery.jpg';
            }

            if($traderCategory == 'delicatessen'){
            $parallax = 'delicatessen.jpg';
            }

            if($traderCategory == 'butcher'){
            $parallax = 'butcher.jpg';
            }

            $recentlyAdded = DB::table('products')->latest()->take(5)->get();
            $categories = Category::all();
            $products = DB::table('products')->where('shop_id', $shop_id)->get();
            return view('shop', compact('shopInfo', 'products', 'parallax', 'categories', 'recentlyAdded'));
        }else{
            abort(404);
        }
        
    }
}
