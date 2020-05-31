@extends('trader.layouts.master')
@section('title','Dashboard')
@section('addCss')
    <style>
        .dash-main{
            padding-top: 10%;
            display: flex;
            justify-content: space-between;
            flex-wrap: wrap;
            max-width: 900px;
            margin:0 auto;
        }

        @media (max-width: 700px){
            .dash-main{
                justify-content: center;
            }
        }

        .card {
            box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
            transition: 0.3s;
            max-width: 250px;
            margin-top: 15px;
            background-color: #34BC6D;
        }

        .card:hover {
            box-shadow: 0 8px 16px 0 rgba(0,0,0,0.2);
        }

        .containerrr {
            text-align: center;
            padding: 2px 16px;
            color: white;
        }

        .containerrr div{
            height: 200px;
            display: flex;
            justify-content: center;
            align-items: center;
            font-size: 5.5em;
        }
    </style>
@endsection
@section('content')
<?php
    $shopId = Auth::user()->shop->id;
    $productCount = App\Product::where('shop_id', $shopId)->count();

    $itemsSold = 0;
    $earnings = 0;
    $orders = App\Order::where('delivery_status', 1)->get();
    foreach($orders as $order){
        $orderProducts = App\OrderProduct::where('order_id', $order->id)->get();
        foreach($orderProducts as $value){
            $product = App\Product::where('id', $value->product_id)->get();
            // dd($product);
            if($product[0]->shop_id == $shopId){
                $price = $product[0]->price * $value->quantity;
                $earnings += $price;
                $itemsSold+=$value->quantity;
            }
        }
    }


?>
<div class = 'dash-main'> 
    <div class="card">
        <div class="containerrr">
            <h3><b>Total Products</b></h3> 
            <div>{{$productCount}}</div> 
        </div>
    </div>

    <div class="card">
        <div class="containerrr">
            <h3><b>Items Sold</b></h3> 
            <div>{{$itemsSold}}</div> 
        </div>
    </div>

    <div class="card">
        <div class="containerrr">
            <h3><b>Total Earnings(&pound;)</b></h3> 
            <div>{{$earnings}}</div> 
        </div>
    </div>
</div>
@endsection
@section('jsblock')
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/jquery.ui.custom.js')}}"></script>
    <script src="{{asset('js/bootstrap2.min.js')}}"></script>
    <script src="{{asset('js/jquery.uniform.js')}}"></script>
    <script src="{{asset('js/select2.min.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/matrix.js')}}"></script>
    <script src="{{asset('js/matrix.tables.js')}}"></script>
    <script src="{{asset('js/matrix.popover.js')}}"></script>
@endsection
