<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;
use App\Shop;
use App\Category;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function show(Request $request, $id = null){
        $cartProducts = array();
        if(Auth::user() && !$request->session()->exists('cart')){
            $cartId = Auth::user()->cart->id;
            $cartProductDetails = DB::table('product__details')->where('cart_id', $cartId)->get();
            foreach($cartProductDetails as $cartProductDetail){
                $product = Product::find($cartProductDetail->id);
                $shop = Shop::find($product->shop_id);
                $category = Category::find($product->category_id);
                $cartProducts[$product->id] = array(
                    'id' => $product->id,
                    'product_name' => $product->product_name,
                    'shop_name'=>$shop->shop_name,
                    'category_name'=> $category->category_name,
                    'quantity'=>$cartProductDetail->quantity,
                    'product_image'=>$product->product_image,
                    'product_price'=>$product->price
                );
            }
            $request->session()->put('cart', $cartProducts);
        }

        if($request->session()->has('cart')){
            $cartProducts = $request->session()->get('cart');
            if($cartProducts == null ){
                $cartProducts = array();
            }
        }

        return view('cart', compact('cartProducts'));
        
    }

    public function store(Request $request, $productId){
        // $request->session()->forget('cart');
        $product = Product::findOrFail($productId);
        $shop = Shop::find($product->shop_id);
        $category = Category::find($product->category_id);
        $quantity = $request->input('quantity');

        $cart = array();

        if ($request->session()->exists('cart')) {
            $cart = $request->session()->get('cart');
        }

        if(array_key_exists($product->id, $cart)){
            session()->flash('snackbar-message', "$product->product_name  already exists in cart");
            session()->flash('snack-style', 'background-color: red');
        }else{
            $cart[$product->id] = array(
                'id' => $product->id,
                'product_name' => $product->product_name,
                'shop_name'=>$shop->shop_name,
                'category_name'=> $category->category_name,
                'quantity'=>$quantity,
                'product_image'=>$product->product_image,
                'product_price'=>$product->price
            );
            $request->session()->put('cart', $cart);
            session()->flash('snackbar-message', "$product->product_name  added to cart");
            session()->flash('snack-style', 'background-color: #28B463');
        }
        
        return redirect()->back();
    }

    public function destroy(Request $request, $productId){
        if ($request->session()->exists('cart')) {
            $cartProducts = $request->session()->get('cart');
            unset($cartProducts[$productId]);
            $request->session()->put('cart', $cartProducts);
        }
        return redirect()->back();
    }

    public function update(Request $request){
        $data = $request->all();
        if ($request->session()->exists('cart')) {
            $cartProducts = $request->session()->get('cart');
            foreach($data as $key=>$value){
                if(array_key_exists($key, $cartProducts)){
                    $cartProducts[$key]['quantity'] = $value;
                }
            }
            $request->session()->put('cart', $cartProducts);
            session()->flash('snackbar-message', "Quantity is updated");
            session()->flash('snack-style', 'background-color: #28B463');
        }
        return redirect()->back();
    }
}
