@extends('layouts.app')
@section('title', 'FrostFree | Product')
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

    .hide {
      display: none;
    }

    .clear {
      float: none;
      clear: both;
    }

    .rating {
      font-size: 35px;
      width: 193px;
      unicode-bidi: bidi-override;
      direction: rtl;
      text-align: center;
      position: relative;
    }

    .rating > label {
        float: right;
        display: inline;
        padding: 0;
        margin: 0;
        position: relative;
        width: 1.1em;
        cursor: pointer;
        color: #000;
    }

    .rating > label:hover,
    .rating > label:hover ~ label,
    .rating > input.radio-btn:checked ~ label {
        color: transparent;
    }

    .rating > label:hover:before,
    .rating > label:hover ~ label:before,
    .rating > input.radio-btn:checked ~ label:before,
    .rating > input.radio-btn:checked ~ label:before {
        content: "\2605";
        position: absolute;
        left: 0;
        color: #FFD700;
    }

  </style>
@endsection
@section('content')
  <div id="wrapper" class="wide-wrap">
    <div class="offcanvas-overlay"></div>
    <div class="content-container">
      <div class="container-full">
        <div class="row">
          <div class="col-md-12 main-wrap">
            <div class="main-content">
              <div class="container">
                <div class="row">
                  <div class="col-md-12 no-min-height"></div>
                </div>
              </div>
              <div class="product">
                <div class="container">
                  <div class="row summary-container product-opt">
                    <div class="col-md-5 col-sm-6 entry-image">
                      <div>
                        <img src="{{url("uploads/products/$product->product_image")}}" style="width: 100%">
                      </div>
                    </div>
                    <div class="col-md-4 col-sm-6 entry-summary">
                      <div class="summary">
                        <h1 class="product_title entry-title">{{$product->product_name}}</h1>
                        <div class="shop-product-rating">
                          <div class="star-rating">
                            <span style="width:{{$averageRating * 20}}%"></span>
                          </div>
                          <a href="#reviews" class="shop-review-link">(<span class="count">{{sizeof($reviews)}}</span> customer review)</a>
                        </div>
                        <p class="price">
                          <?php
                            $discountRate = DB::table('discounts')->where('product_id',"$product->id")->get();
                          ?>
                          <span class="price">
                            @if(!isset($discountRate) || sizeof($discountRate) <= 0)
                              <span class="amount">&pound;{{$product->price}}</span>
                            @else
                              <?php
                                $discount = $discountRate[0]->discount;
                                $netPrice = $product->price - ($discount/100 * $product->price);
                              ?>
                              <span class="amount" style="text-decoration: line-through">&pound;{{$product->price}}</span>
                              &nbsp;
                              <span class="amount">&pound;{{$netPrice}}</span>
                            @endif
                          </span>
                        </p>
                        <div class="product-excerpt">
                          <p>
                            {{substr($product->description, 0, 250)}}...
                          </p>
                        </div>
                        <div class="product-actions res-color-attr">
                          <form class="cart" method="POST" id="cart-form{{$product->id}}" 
                            action="{{route('carts.store', $product->id)}}">
                            @csrf
                            <div class="single_variation_wrap">
                              <div class="variations_button">
                                <div class="quantity">
                                  <input min = "1" max="100" type="number" name="quantity" value="1" title="Qty" class="input-text qty text" size="4">
                                </div>
                                <button type="submit" class="button">Add to cart</button>
                              </div>
                            </div>
                          </form>
                        </div>
                        <div class="product_meta">
                          <span class="posted_in">Category: <a href="{{route('categories.show', $product->category_id)}}">{{App\Category::find($product->category_id)->category_name}}</a></span>
                          <span class="posted_in">Shop Name: <a href="{{route('shops.index', $product->shop_id)}}">{{App\Shop::find($product->shop_id)->shop_name}}</a></span>
                        </div>
                      </div> 
                    </div>
                  </div>
                </div>
                <div class="shop-tab-container">
                  <div class="container">
                    <div class="row">
                      <div class="col-md-12">
                        <div class="tabbable shop-tabs">
                          <ul class="nav nav-tabs" role="tablist">
                            <li class="active">
                              <a data-toggle="tab" role="tab" href="#tab-description">Description</a>
                            </li>
                            <li>
                              <a data-toggle="tab" role="tab" href="#tab-additional_information">Allergy Information</a>
                            </li>
                            <li>
                              <a data-toggle="tab" role="tab" href="#tab-reviews">Reviews ({{sizeof($reviews)}})</a>
                            </li>
                          </ul>
                          <div class="tab-content">
                            <div class="tab-pane active" id="tab-description">
                              <h2>Product Description</h2>
                              <h3>{{$product->product_name}}</h3>
                              <p>
                                {{$product->description}}
                              </p>
                            </div>
                            <div class="tab-pane" id="tab-additional_information">
                              <h2>Allergy Information</h2>
                              <?php
                                $allergyInfo = $product->allergy_info;
                                $allergyInfos = explode("\r\n", $allergyInfo);
                              ?>
                              <h3>{{$product->product_name}}</h3>
                              <p>
                                <ol>
                                  @forelse($allergyInfos as $info)
                                    <li>{{$info}}</li>
                                  @empty 
                                    <li>No allergy information.</li>
                                  @endforelse
                                </ol>
                              </p>
                            </div>
                            <div class="tab-pane" id="tab-reviews">
                              <div id="reviews">
                                <div id="comments">
                                  <ol class="commentlist">
                                    @forelse($reviews as $review)
                                      <?php
                                        $dateTime = $review->created_at->toDateTimeString();
                                        $formattedDate = date('M d Y', strtotime($dateTime));

                                        $user = \App\User::findOrFail($review->user_id);
                                      ?>
                                      <li>
                                        <div class="comment_container">
                                          <img alt='avatar' src="{{url('uploads/profile/',$user->user_photo ?? 'default-profile.png')}}" class='avatar' height='60' width='60'/>
                                          <div class="comment-text">
                                            <div class="star-rating">
                                              <span style="width:{{$review->rating * 20}}%"></span>
                                            </div>
                                            <p class="meta">
                                              <strong>{{$user->username}}</strong> &ndash; <time datetime="{{$dateTime}}">{{$formattedDate}}</time>
                                            </p>
                                            <div class="description"><p>{{$review->review_detail}}</p></div>
                                          </div>
                                        </div>
                                      </li> 
                                    @empty
                                       <p>No reviews yet.</p>
                                    @endforelse
                                  </ol>
                                </div>
                                <div id="respond-wrap">
                                  <div id="respond" class="comment-respond">
                                    <h3 class="comment-reply-title">
                                      <span>Leave a review</span>
                                    </h3>
                                    @if(Auth::user())
                                      <form class="comment-form" method="POST" action="{{route('reviews.store', $product->id)}}">
                                        @csrf
                                        <p class="comment-form-comment">
                                          <label>Your rating</label>
                                        </p>
                                        <div class="rating">
                                          <input id="star5" name="star" type="radio" value="5" class="radio-btn hide" />
                                          <label for="star5" >☆</label>
                                          <input id="star4" name="star" type="radio" value="4" class="radio-btn hide" />
                                          <label for="star4" >☆</label>
                                          <input id="star3" name="star" type="radio" value="3" class="radio-btn hide" />
                                          <label for="star3" >☆</label>
                                          <input id="star2" name="star" type="radio" value="2" class="radio-btn hide" />
                                          <label for="star2" >☆</label>
                                          <input id="star1" name="star" type="radio" value="1" class="radio-btn hide" />
                                          <label for="star1" >☆</label>
                                          <div class="clear"></div>
                                        </div>
                                        <span style="color: red">{{$errors->first('star')}}</span>
                                        {{-- <p class="comment-form-name">
                                          <label>Your name</label>
                                          <input class="form-control" name="name" />
                                        </p> --}}
                                        <br/>
                                        <p class="comment-form-comment">
                                          <label>Comment</label>
                                          <textarea class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                          <span style="color: red">{{$errors->first('comment')}}</span>
                                        </p>
                                        <p>
                                          <input name="submit" type="submit" id="submit" class="submit" value="Submit">
                                        </p>
                                      </form>
                                    @else 
                                      <label>Login to leave a review.</label>
                                    @endif
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="container">
                  <div class="row">
                    <div class="col-sm-12">
                      <div class="related products">
                        <div class="related-title">
                          <h3><span>Related Products</span></h3>
                        </div>
                        <ul class="products columns-4" data-columns="4">
                          @forelse($relatedProducts as $relatedProduct)
                            <li class="product">
                              <div class="product-container">
                                <figure>
                                  <div class="product-wrap">
                                    <div class="product-images">
                                      <div class="shop-loop-thumbnail">
                                          <img width="300" height="350" src="{{url("uploads/products/$relatedProduct->product_image")}}" alt="Product-2"/>
                                      </div>
                                    </div>
                                  </div>
                                  <figcaption>
                                    <div class="shop-loop-product-info">
                                      <div class="info-title">
                                      <h3 class="product_title"><a href="{{route('products.show',$relatedProduct->id)}}">{{$relatedProduct->product_name}}</a></h3>
                                      </div>
                                      <div class="info-meta">
                                        <div class="info-price">
                                          <?php
                                            $discountRate = DB::table('discounts')->where('product_id',"$relatedProduct->id")->get();
                                          ?>
                                          <span class="price">
                                            @if(!isset($discountRate) || sizeof($discountRate) <= 0)
                                              <span class="amount">&pound;{{$relatedProduct->price}}</span>
                                            @else
                                              <?php
                                                $discount = $discountRate[0]->discount;
                                                $netPrice = $relatedProduct->price - ($discount/100 * $relatedProduct->price);
                                              ?>
                                              <span class="amount" style="text-decoration: line-through">&pound;{{$relatedProduct->price}}</span>
                                              &nbsp;
                                              <span class="amount">&pound;{{$netPrice}}</span>
                                            @endif
                                          </span>
                                        </div>
                                        <div class="loop-add-to-cart">
                                          <a style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('cart-form2{{$relatedProduct->id}}').submit();">
                                            Add to Cart
                                          </a>
                                          <form method="POST" id="cart-form2{{$relatedProduct->id}}" style="display:none" 
                                            action="{{route('carts.store', $relatedProduct->id)}}">
                                            @csrf 
                                            <input type="hidden" value="1" name="quantity">
                                          </form>
                                        </div>
                                      </div>
                                    </div>
                                  </figcaption>
                                </figure>
                              </div>
                            </li>
                          @empty 
                            <li>
                              No related Product.
                            </li>
                          @endforelse
                          
                        </ul>
                      </div>
                    </div>
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
  <script type='text/javascript' src='{{ URL::asset('js/jquery.magnific-popup.min.js') }}'></script>
  <script>
    const el = document.getElementById('theBody');
    el.classList.add("shop");

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
