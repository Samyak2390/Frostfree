<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Product;
use App\Shop;
use App\Category;
use App\Payment;
use App\Product_Detail;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class CartController extends Controller
{
    public function show(Request $request, $id = null){
        $cartProducts = array();
        $collectionInfo = array();
        if(Auth::user() && sizeOf($request->session()->get('cart') ?? array())  == 0){
            $cartId = Auth::user()->cart->id;
            $cartProductDetails = DB::table('product__details')->where('cart_id', $cartId)->get();
            foreach($cartProductDetails as $cartProductDetail){
                $product = Product::find($cartProductDetail->product_id);
                $discount = DB::table('discounts')
                    ->where('product_id', $cartProductDetail->product_id)
                    ->get()[0]->discount ?? 0;

                $shop = Shop::find($product->shop_id);
                $category = Category::find($product->category_id);
                $cartProducts[$product->id] = array(
                    'id' => $product->id,
                    'product_name' => $product->product_name,
                    'shop_name'=>$shop->shop_name,
                    'category_name'=> $category->category_name,
                    'quantity'=>$cartProductDetail->quantity,
                    'product_image'=>$product->product_image,
                    'product_price'=>$product->price,
                    'discount'=>$discount
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

        //seeing if there is pending order
        if(Auth::user()){
            $cartId = Auth::user()->cart->id;
            $orders = DB::table('orders')->select('id', 'collection_slot_id', 'collection_date')->where([
                ['cart_id', '=', "$cartId"],
                ['delivery_status', '=', false],
            ])->get();
            // dd($cartId, $orders);

            if(sizeof($orders) > 0){
                foreach($orders as $order){
                    $payment = DB::table('payments')->select('price')->where([
                        ['order_id', '=', $order->id]
                    ])->get()[0]->price;
    
                    $collectionSlot = DB::table('collection_slots')->select('time', 'day')->where([
                        ['id', '=', $order->collection_slot_id]
                    ])->get()[0];
                    
                    $collectionInfo[$order->id] = array(
                        'orderId'=>$order->id,
                        'payment'=>$payment,
                        'collectionTime'=>$collectionSlot->time,
                        'collectionDay'=>$collectionSlot->day,
                        'collectionDate'=>$order->collection_date
                    );
                }
            }
        }

        return view('cart', compact('cartProducts', 'collectionInfo'));
    }

    public function store(Request $request, $productId){

        //If the user is logged in, fill the product_details table

        if(Auth::user()){
            $cartId = User::find(auth()->id())->cart->id;
            $quantity = $request->input('quantity');

            $alreadyInCart = DB::table('product__details')->where([
                ['cart_id', '=', $cartId],
                ['product_id', '=', $productId]
            ])->get();

            if(sizeOf($alreadyInCart) == 0){
                Product_Detail:: create([
                    'product_id' => $productId,
                    'cart_id' => $cartId,
                    'quantity' => $quantity
                ]);
            }
        }

        //If user is not logged in, only run this part to add cart products in session
        //Again, run this part to put cart products that was just added in product_details table
        // in session as well.

        $product = Product::findOrFail($productId);
        $shop = Shop::find($product->shop_id);
        $discount = DB::table('discounts')->where('product_id', $product->id)->get()[0]->discount ?? 0;
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
                'product_price'=>$product->price,
                'discount'=>$discount
            );
            $request->session()->put('cart', $cart);
            session()->flash('snackbar-message', "$product->product_name  added to cart");
            session()->flash('snack-style', 'background-color: #28B463');
        }
        
        return redirect()->back();
    }

    public function destroy(Request $request, $productId){
        if(Auth::User()){
            $cartId = User::find(auth()->id())->cart->id;
            $inCart = DB::table('product__details')->where([
                ['cart_id', '=', $cartId],
                ['product_id', '=', $productId]
            ])->get();
            if(sizeOf($inCart)==1){
                DB::table('product__details')
                ->where([
                    ['cart_id', '=', $cartId],
                    ['product_id', '=', $productId]
                ])->delete();
            }
        }

        if ($request->session()->exists('cart')) {
            $cartProducts = $request->session()->get('cart');
            unset($cartProducts[$productId]);
            $request->session()->put('cart', $cartProducts);
        }
        return redirect()->back();
    }

    public function update(Request $request){
        $data = $request->all();
        if(Auth::User()){
            $cartId = User::find(auth()->id())->cart->id;
            foreach($data as $key=>$value){
                if(is_numeric($key)){
                    $inCart = DB::table('product__details')->where([
                        ['cart_id', '=', $cartId],
                        ['product_id', '=', $key]
                    ])->get();

                    if(sizeOf($inCart) == 1){
                        DB::table('product__details')
                        ->where([
                            ['cart_id', '=', $cartId],
                            ['product_id', '=', $key]
                        ])->update(['quantity'=>$value]);
                    }
                }
            }
        }

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
