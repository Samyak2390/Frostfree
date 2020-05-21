<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Category;

class SearchController extends Controller
{
    public function show(Request $request){
        $searchterm = $_GET['search'];

        $recentlyAdded = DB::table('products')->latest()->take(5)->get();
        $categories = Category::all();

        $parallax = "search.jpg";

        if(isset($_GET['orderby'])){
            $orderBy = $_GET['orderby'];
            switch($orderBy){
                case 'price':
                    //low to high 
                    $products  = DB::table('products')->where('product_name', 'LIKE', '%' . $searchterm . '%')
                        ->orWhere('description', 'LIKE', '%' . $searchterm . '%')
                        ->orderBy('price')
                        ->get();
                    break;

                case 'price-desc': 
                    //high to low
                    $products  = DB::table('products')->where('product_name', 'LIKE', '%' . $searchterm . '%')
                        ->orWhere('description', 'LIKE', '%' . $searchterm . '%')
                        ->orderBy('price', 'desc')
                        ->get();
                    break;

                case 'date': 
                    $products  = DB::table('products')->where('product_name', 'LIKE', '%' . $searchterm . '%')
                        ->orWhere('description', 'LIKE', '%' . $searchterm . '%')
                        ->orderBy('updated_at', 'desc')
                        ->get();
                    break;

                default:
                $products  = DB::table('products')->where('product_name', 'LIKE', '%' . $searchterm . '%')
                        ->orWhere('description', 'LIKE', '%' . $searchterm . '%')
                        ->get();
            }
        }else{
            $products  = DB::table('products')->where('product_name', 'LIKE', '%' . $searchterm . '%')
                        ->orWhere('description', 'LIKE', '%' . $searchterm . '%')
                        ->get();
        }
        return view('search', compact('searchterm', 'products', 'categories', 'recentlyAdded', 'parallax'));

    }
}
