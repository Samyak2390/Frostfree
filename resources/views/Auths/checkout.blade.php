@extends('layouts.app')
@section('title', 'FrostFree | Checkout')
@section('addCss')
  <style>
    .product-opt{

    }

    .margin-top{
      margin-top: 6em;
    }

    @media (min-width: 700px){
      .product-opt{
        display: flex; 
        justify-content: space-between; 
        margin-top: 5em;
      }
    }
    @media (max-width: 700px){
      .margin-top{
          margin-top: 0em;
        }
    }
  </style>
@endsection
@section('content')
  <?php $subTotal = 0 ?>
  <div class="content-container margin-top">
    <div class="container">
      <div class="row">
        <div class="col-md-12 main-wrap">
          <div class="main-content">
            <div class="shop">
              <h2>You are buying: </h2>
              <form>
                <table class="table shop_table cart">
                  <thead>
                    <tr>
                      <th class="product-thumbnail hidden-xs">&nbsp;</th>
                      <th class="product-name">Product</th>
                      <th class="product-price text-center">Price</th>
                      <th class="product-quantity text-center">Quantity</th>
                      <th class="product-subtotal text-center hidden-xs">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    @forelse($cartProducts as $cart)
                      <?php $pid = $cart['id']?>
                      <tr class="cart_item">
                        <td class="product-thumbnail hidden-xs">
                          <a href="{{route('products.show', $pid)}}">
                            <?php $image = $cart['product_image']?>
                            <img width="100" height="150" src={{url("uploads/products/$image")}} alt="Product-1"/>
                          </a>
                        </td>
                        <td class="product-name">
                          <a href="{{route('products.show', $pid)}}">{{$cart['product_name']}}</a>
                          <dl class="variation">
                            <dt class="variation-Color">Category:</dt>
                            <dd class="variation-Color"><p>{{$cart['category_name']}}</p></dd>
                            <dt class="variation-Size">Shop:</dt>
                            <dd class="variation-Size"><p>{{$cart['shop_name']}}</p></dd>
                          </dl>
                        </td>
                        <td class="product-price text-center">
                          <?php
                            $netPrice = $cart['product_price'] - (($cart['discount']/100) * $cart['product_price']);
                            $netPrice = round($netPrice, 2);
                          ?>
                          @if($cart['discount'] == 0)
                            <span class="amount">&pound;{{$cart['product_price']}}</span>
                          @endif
                          @if($cart['discount'] > 0)
                            <span class="amount" style="text-decoration: line-through">&pound;{{$cart['product_price']}}</span>
                            &nbsp;
                            <span class="amount">&pound;{{$netPrice}}</span>
                          @endif

                        </td>
                        <td class="product-quantity text-center">
                          <div class="quantity">
                            {{$cart['quantity']}}
                          </div>
                        </td>
                        <td class="product-subtotal hidden-xs text-center">
                          <?php
                            $subTotal += $cart['quantity'] * $netPrice;
                          ?>
                          <span class="amount">&pound;{{$cart['quantity'] *  $netPrice}}</span>
                        </td>
                      </tr>
                    @empty 
                      <tr>
                        <td colspan="6" style="text-align: center; font-size: 18px;">Your cart is currently empty.</td>
                      </tr>
                    @endforelse 
                    @if(sizeOf($cartProducts) > 0)
                      <tr>
                        <td colspan="6" class="actions">
                        </td>
                      </tr>
                    @endif
                  </tbody>
                </table>
              </form>
              @forelse($cartProducts as $cart) 
                <?php $pid = $cart['id']?>
                <form method="POST" id="cart-del-form{{$pid}}" style="display:none" 
                  action="{{route('carts.destroy', $pid)}}">
                  @csrf 
                  @method('DELETE')
                </form>
              @empty
              @endforelse
              @if(sizeOf($cartProducts) > 0)
                <div class="cart-collaterals">
                  <div class="cart_totals">
                    <h2>Cart Totals</h2>
                    <table>
                      <tr class="order-total">
                        <th>Total</th>
                        <td><strong><span class="amount">&pound;{{$subTotal}}</span></strong></td>
                      </tr>
                    </table>
                    {{-- <div>
                      <img src="https://www.paypalobjects.com/webstatic/mktg/Logo/pp-logo-200px.png" border="0" alt="PayPal Logo">
                    </div>
                    <div class="wc-proceed-to-checkout">
                      <form method="POST" id="items" style="display:none" 
                        action="#">
                        @csrf 
                        @foreach($cartProducts as $product)
                          <input type="hidden" name="items[]" value="{{serialize($product)}}">
                        @endforeach
                        <input type="hidden" name = "total" value= "{{$subTotal}}">
                      </form>
                      <a style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('items').submit();"  
                        class="checkout-button button alt wc-forward">Pay with PayPal</a>
                    </div> --}}
                    <div id="paypal-button"></div>
                    {{-- SImulate checkout Success --}}
                    <div><a href="{{route('checkout.success')}}">success</a></div>
                  </div>
                  
                </div>
              @endif
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection
@section('injectJQuery')
  <script type='text/javascript' src='{{ URL::asset('js/core.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/widget.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/mouse.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/slider.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/jquery-ui-touch-punch.min.js') }}'></script>
  <script type='text/javascript' src='{{ URL::asset('js/price-slider.js') }}'></script>

  <script>
    const elements = document.querySelectorAll('.underline');
    elements.forEach(element => {
      element.style.color = 'black';
    });

    const search = document.querySelectorAll('.navbar-search-button')[1];
    search.style.color = 'black';

    const cart = document.querySelector('.minicart-link');
    cart.style.color = 'black';
  </script>

  <script src="https://www.paypalobjects.com/api/checkout.js"></script>
  <script>
    paypal.Button.render({
      env: 'sandbox', // Or 'production'
      style: {
        size: 'large',
        color: 'gold',
        shape: 'pill',
      },
      // Set up the payment:
      // 1. Add a payment callback
      payment: function(data, actions) {
        // 2. Make a request to your server
        return actions.request.post('/api/create-payment')
          .then(function(res) {
            // 3. Return res.id from the response
            console.log('>>>>>>>>>>>>>>>>'+res);
            return res.id;
          })
          .catch(function(error){
            console.log('Error>>>>>>'+error);
          });
      },
      // Execute the payment:
      // 1. Add an onAuthorize callback
      onAuthorize: function(data, actions) {
        // 2. Make a request to your server
        return actions.request.post('/api/execute-payment', {
          paymentID: data.paymentID,
          payerID:   data.payerID
        })
          .then(function(res) {
            console.log('lalalal'+res);
            fetch('/api/checkout-succed', 
            {method:'POST'})
            .then(res=>{
              console.log('res>>>>' + res);
            })
          });
      }
    }, '#paypal-button');
  </script>
@endsection