<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App\Mail\OrderInvoice;
use App\Order;
use App\OrderProduct;
use App\Product;
use App\Shop;

class CheckoutController extends Controller
{
    private $countRecursionNo = 1;
    public function index(Request $request){
        $cartProducts = array();
        if(Auth::user()){
            if($request->session()->has('cart')){
                $cartProducts = $request->session()->get('cart');
                if($cartProducts == null ){
                    $cartProducts = array();
                }
            }
            return view('after-auth.checkout', compact('cartProducts'));
        }
    }

    public function checkoutSuccess(Request $request){
        //fill orders table
        $orderId = $this->fillOrders();
        
        //fill order_products table
        $payment = $this->fillOrderProducts($request, $orderId);

        //fill payments table
        $this->fillPayments($orderId, $payment);

        //Get invoice information
        $orderData = $this->invoiceInfo($request, $orderId);

        //send invoice to the customer
        Mail::to(Auth::user()->email)->send(new OrderInvoice($orderData['customer']));
        
        //send invoice to the admin
        Mail::to("frostfree.demo@gmail.com")->send(new OrderInvoice($orderData['customer']));

        //send individual invoices to the trader
        foreach($orderData['traders'] as $trader){
            Mail::to($trader['email'])->send(new OrderInvoice($trader));
        }

        session()->flash('snackbar-message', "Checkout Successfull!");
        return redirect()->route('carts.show');
    }

    public function invoiceInfo(Request $request, $orderId = '33127'){
        $total = 0;
        $invoiceInfo = array();
        $traders = array();
        $customerName = Auth::user()->username;
        $cartProducts = array();
        if ($request->session()->exists('cart')) {
            $cartProducts = $request->session()->get('cart');
            foreach($cartProducts as $key=>$value){
                $shopId = Product::find($key)->shop_id;
                $trader = Shop::find($shopId)->user;
                $traders[$shopId]['orderId'] = $orderId;
                $traders[$shopId]['customerName'] = $customerName;
                $traders[$shopId]['email'] = $trader->email;
                $traders[$shopId]['name'] = $trader->username;
                $traders[$shopId]['products'][$key] = $value; 
                $subTotal = ($value['product_price'] - (($value['discount']/100) * $value['product_price'])) * $value['quantity'];
                $total = $total + $subTotal;
            }
        }
        $invoiceInfo['customer'] = array(
            'orderId' => $orderId,
            'customerName' => $customerName,
            'products' => $cartProducts,
            'total' => $total
        );

        $invoiceInfo['traders'] = $traders;
        return $invoiceInfo;
    }

    protected function fillPayments($orderId, $payment){
        $userId = Auth::user()->id;
        DB::table('payments')->insert([
            ['order_id'=>$orderId, 'user_id'=>$userId, 'price'=>$payment],
        ]);
    }

    protected function fillOrderProducts(Request $request, $orderId){
        $total = 0;
        $cartProducts = array();
        if ($request->session()->exists('cart')) {
            $cartProducts = $request->session()->get('cart');
            foreach($cartProducts as $key=>$value){
                DB::table('order_products')->insert([
                    ['order_id'=>$orderId, 'product_id'=>$key],
                ]);
                $subTotal = ($value['product_price'] - (($value['discount']/100) * $value['product_price'])) * $value['quantity'];
                $total = $total + $subTotal;
            }
        }
        //total price of the products
        return $total;
    }

    protected function fillOrders(){
        date_default_timezone_set('Asia/Kathmandu');
        $timeAfterOneDay = time() + 86400;
        $collectionDetails = $this->findCollectionDetails($timeAfterOneDay);
       
        $cartId = Auth::user()->cart->id;
        
        $orderId = DB::table('orders')->insertGetId(
            [
                'cart_id' => $cartId, 
                'collection_slot_id' => $collectionDetails['collectionSlotId'],
                'delivery_status' => false,
                'collection_date' => $collectionDetails['collectionDate']
            ]
        );

        return $orderId;
    }

    private function findCollectionDetails($timeAfterOneDay){
        $collectionDay="";
        $collectionTime="";
        $collectionDate = "";
        $collectionSlotId="";
        // $date = date('m/d/Y', $timeAfterOneDay);
        $day = date('l', $timeAfterOneDay);
        $hour = date('H', $timeAfterOneDay);

        if($day == 'Sunday' || $day == 'Monday' || $day == 'Tuesday' || $day == 'Wednesday' || $day == 'Saturday'){
            $collectionDay = 'Wednesday';
            if($hour <= 12){
                $collectionTime = '10-13';
            }elseif ($hour>12 && $hour<=15){
                $collectionTime = '13-16';
            }elseif($hour>15){
                $collectionTime = '16-19';
            }
            $collectionSlotId = $this->findCollectionSlotId($collectionDay, $collectionTime);
            $collectionDate = $this->findNearestDate($collectionDay, $timeAfterOneDay);
            if($this->findCollectionNumbers($collectionSlotId, $collectionDate) >= 20){
                $this->countRecursionNo = $this->countRecursionNo + 1;
                $addTime = $timeAfterOneDay + ($this->countRecursionNo * 11000);
                return $this->findCollectionDetails($addTime);
            }
        }elseif($day='Thursday'){
            $collectionDay = 'Thursday';
            if($hour <= 12){
                $collectionTime = '10-13';
            }elseif ($hour>13 && $hour<=15){
                $collectionTime = '13-16';
            }elseif($hour>15){
                $collectionTime = '16-19';
            }
            $collectionSlotId = $this->findCollectionSlotId($collectionDay, $collectionTime);
            $collectionDate = $this->findNearestDate($collectionDay, $timeAfterOneDay);
            if($this->findCollectionNumbers($collectionSlotId, $collectionDate) >= 20){
                $this->countRecursionNo = $this->countRecursionNo + 1;
                $addTime = time() + ($this->countRecursionNo * 11000);
                return $this->findCollectionDetails($addTime);
            }
        }else{
            $collectionDay = 'Friday';
            if($hour <= 12){
                $collectionTime = '10-13';
            }elseif ($hour>12 && $hour<=15){
                $collectionTime = '13-16';
            }elseif($hour>15){
                $collectionTime = '16-19';
            }
            $collectionSlotId = $this->findCollectionSlotId($collectionDay, $collectionTime);
            $collectionDate = $this->findNearestDate($collectionDay, $timeAfterOneDay);
            if($this->findCollectionNumbers($collectionSlotId, $collectionDate) >= 20){
                $this->countRecursionNo = $this->countRecursionNo + 1;
                $addTime = time() + ($this->countRecursionNo * 11000);
                return $this->findCollectionDetails($addTime);
            }
        }
       
        return array(
            'collectionSlotId'=>$collectionSlotId, 
            'collectionDay'=>$collectionDay, 
            'collectionTime'=>$collectionTime, 
            'collectionDate'=>$collectionDate);
    }

    private function findCollectionSlotId($day, $time){
        $id = DB::table('collection_slots')->select('id')->where([
            ['day', '=', "$day"],
            ['time', '=', "$time"],
        ])->get()[0]->id;
        return $id;
    }

    private function findNearestDate($day, $time){
        return date('d/m/Y', strtotime("next $day", $time));
    }

    private function findCollectionNumbers($collectionSlotId, $collection_date){
        $count = DB::table('orders')->where([
            ['collection_slot_id', '=', "$collectionSlotId"],
            ['collection_date', '=', "$collection_date"],
        ])->count();
        return $count;
    }
}
