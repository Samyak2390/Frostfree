@extends('layouts.app')
@section('title', 'FrostFree | Cart')
@section('addCss')
  <style>
    .product-opt{

    }

    @media (min-width: 700px){
      .product-opt{
        display: flex; 
        justify-content: space-between; 
        margin-top: 5em;
      }
    }
  </style>
@endsection
@section('content')
  <div class="content-container" style="margin-top: 6em">
    <div class="container">
      <div class="row">
        <div class="col-md-12 main-wrap">
          <div class="main-content">
            <div class="shop">
              <form>
                <table class="table shop_table cart">
                  <thead>
                    <tr>
                      <th class="product-remove hidden-xs">&nbsp;</th>
                      <th class="product-thumbnail hidden-xs">&nbsp;</th>
                      <th class="product-name">Product</th>
                      <th class="product-price text-center">Price</th>
                      <th class="product-quantity text-center">Quantity</th>
                      <th class="product-subtotal text-center hidden-xs">Total</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="cart_item">
                      <td class="product-remove hidden-xs">
                        <a href="#" class="remove" title="Remove this item">&times;</a>
                      </td>
                      <td class="product-thumbnail hidden-xs">
                        <a href="#">
                          <img width="100" height="150" src="images/product/product-1.jpg" alt="Product-1"/>
                        </a>
                      </td>
                      <td class="product-name">
                        <a href="#">Cras rhoncus duis viverra</a>
                        <dl class="variation">
                          <dt class="variation-Color">Color:</dt>
                          <dd class="variation-Color"><p>Green</p></dd>
                          <dt class="variation-Size">Size:</dt>
                          <dd class="variation-Size"><p>Extra Large</p></dd>
                        </dl>
                      </td>
                      <td class="product-price text-center">
                        <span class="amount">&#36;22.00</span>
                      </td>
                      <td class="product-quantity text-center">
                        <div class="quantity">
                          <input type="number" step="1" min="0" name="qunatity" value="2" title="Qty" class="input-text qty text" size="4"/>
                        </div>
                      </td>
                      <td class="product-subtotal hidden-xs text-center">
                        <span class="amount">&#36;44.00</span>
                      </td>
                    </tr>
                    <tr class="cart_item">
                      <td class="product-remove hidden-xs">
                        <a href="#" class="remove" title="Remove this item">&times;</a>
                      </td>
                      <td class="product-thumbnail hidden-xs">
                        <a href="#">
                          <img width="100" height="150" src="images/product/product-3.jpg" alt="Product-3"/>
                        </a>
                      </td>
                      <td class="product-name">
                        <a href="#">Creamy Spring Pasta</a>
                        <dl class="variation">
                          <dt class="variation-Color">Color:</dt>
                          <dd class="variation-Color"><p>Green</p></dd>
                          <dt class="variation-Size">Size:</dt>
                          <dd class="variation-Size"><p>Medium</p></dd>
                        </dl>
                      </td>
                      <td class="product-price text-center">
                        <span class="amount">&#36;12.00</span>
                      </td>
                      <td class="product-quantity text-center">
                        <div class="quantity">
                          <input type="number" step="1" min="0" name="quantity" value="1" title="Qty" class="input-text qty text" size="4"/>
                        </div>
                      </td>
                      <td class="product-subtotal hidden-xs text-center">
                        <span class="amount">&#36;12.00</span>
                      </td>
                    </tr>
                    <tr>
                      <td colspan="6" class="actions">
                        <input type="submit" class="button update-cart-button" name="update_cart" value="Update Cart"/>
                      </td>
                    </tr>
                  </tbody>
                </table>
              </form>
              <div class="cart-collaterals">
                <div class="cart_totals">
                  <h2>Cart Totals</h2>
                  <table>
                    <tr class="cart-subtotal">
                      <th>Subtotal</th>
                      <td><span class="amount">&#36;56.00</span></td>
                    </tr>
                    <tr class="shipping">
                      <th>Shipping</th>
                      <td><span class="amount">&#36;0.00</span></td>
                    </tr>
                    <tr class="order-total">
                      <th>Total</th>
                      <td><strong><span class="amount">&#36;56.00</span></strong></td>
                    </tr>
                  </table>
                  <div class="wc-proceed-to-checkout">
                    <a href="#" class="checkout-button button alt wc-forward">Proceed to Checkout</a>
                  </div>
                </div>
                
              </div>
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
@endsection