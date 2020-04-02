<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Category;
use App\Shop;

class ProductController extends Controller
{
    public function create(){
        $menu_active = 3;
        $categories = Category::where('status', '1')->pluck('id', 'category_name')->all();
        $shop_id = Shop::where('user_id', auth()->id())->pluck('id')->all()[0];
        return view('trader.product.create', compact('menu_active','categories', 'shop_id'));
    }
}
