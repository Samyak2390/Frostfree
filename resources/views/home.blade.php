@extends('layouts.app')
@section('title', 'FrostFree | Home')
@section('content')

  <div class="content-container no-padding">
    <div class="container-full">
      <div class="row">
        <div class="col-md-12 main-wrap">
          <div class="main-content">
            <div id="home-slider" data-autorun="yes" data-duration="6000"
              class="carousel slide fade dhslider dhslider-custom " data-height="650">
              <div class="dhslider-loader">
                <div class="fade-loading">
                  <i></i><i></i><i></i><i></i>
                </div>
              </div>
              <div class="carousel-inner dhslider-wrap">
                <div class="item slider-item active">
                  <div class="slide-bg slide-bg-1"></div>
                  <div class="slider-caption caption-align-left">
                    <div class="slider-caption-wrap">
                      <span class="slider-top-caption-text">Great daily deals</span>
                      <h2 class="slider-heading-text">Always fresh, never frozen</h2>
                      {{-- <div class="slider-caption-text">NEW COLLECTIONS</div>
                                                
                                                <div class="slider-buttons">
                                                    <a href="#" class="btn btn-lg btn-white-outline">Detail</a>
                                                    <a href="#" class="btn btn-lg btn-white-outline">Buy Now</a>
                                                </div> --}}
                    </div>
                  </div>
                </div>
                <div class="item slider-item">
                  <div class="slide-bg slide-bg-2"></div>
                  <div class="slider-caption caption-align-right">
                    <div class="slider-caption-wrap">
                      <span class="slider-top-caption-text">Great daily deals</span>
                      <h2 class="slider-heading-text">Big food, little money</h2>
                      {{-- <div class="slider-caption-text">NEW COLLECTIONS</div>
                                                <div class="slider-buttons">
                                                    <a href="#" class="btn btn-lg btn-white">SEE MORE</a>
                                                    <a href="#" class="btn btn-lg btn-white-outline">GET NOW</a>
                                                </div> --}}
                    </div>
                  </div>
                </div>
              </div>
              <ol class="carousel-indicators parallax-content">
                <li data-target="#home-slider" data-slide-to="0" class="active"></li>
                <li data-target="#home-slider" data-slide-to="1"></li>
              </ol>
            </div>

            <div class="content-container no-padding">
              <div class="container-full">
                <div class="row">
                  <div class="col-md-12 main-wrap">
                    <div class="main-content">
                      <div class="lookbooks">
                        <div class="lookbook lookbook-right clearfix">
                          <div class="loobook-wrap clearfix">
                            <div class="lookbook-info">
                              <div class="lookbook-info-wrap">
                                <div class="lookbook-info-sumary">
                                  <div
                                    style="font-size: 3rem; color: white; text-transform: uppercase; font-weight: bold;">
                                    Let's Meat!</div>
                                  <p
                                    style="font-size: 1.7em; color: white; text-transform: uppercase; font-weight: bold;">
                                    Buy Fresh meat.</p>
                                </div>
                              </div>
                            </div>
                            <div class="lookbook-thumb">
                              <div class="caroufredsel product-slider" data-height="variable" data-scroll-fx="scroll"
                                data-scroll-item="1" data-visible-min="1" data-visible-max="3" data-responsive="1"
                                data-infinite="1" data-autoplay="0" data-circular="1">
                                <div class="caroufredsel-wrap">
                                  <div class="shop shop-lookbok columns-3">
                                    <ul class="products columns-3" data-columns="3">
                                      @forelse($meat_fish as $meatFish)
                                        <li class="product" style="width: 364px">
                                          <div class="product-container">
                                            <figure>
                                              <div class="product-wrap">
                                                <div class="product-images">
                                                  <div class="shop-loop-thumbnail">
                                                    <div
                                                      style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                      <img width="300" height="350" src="{{url('uploads/products',$meatFish->product_image)}}" alt="{{$meatFish->product_name}}" />
                                                    </div>
                                                  </div>
                                                  {{-- <div class="yith-wcwl-add-to-wishlist">
                                                                                                          <div class="yith-wcwl-add-button">
                                                                                                              <a href="#" class="add_to_wishlist">
                                                                                                                  Add to Wishlist
                                                                                                              </a>
                                                                                                          </div>
                                                                                                      </div> --}}
                                                  <div class="clear">
                                                  </div>
                                                  {{-- <div class="shop-loop-quickview">
                                                                                                          <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                                                                                      </div> --}}
                                                </div>
                                              </div>
                                              <figcaption>
                                                <div class="shop-loop-product-info">
                                                  <div class="info-title">
                                                    <h3 class="product_title">
                                                    <a href="{{route('products.show', $meatFish->id)}}">{{$meatFish->product_name}}</a>
                                                    </h3>
                                                  </div>
                                                  <div class="info-price">
                                                    <span class="price">
                                                      @if(!isset($meatFish->discount->discount))
                                                        <span class="amount">&pound;{{$meatFish->price}}</span>
                                                      @else
                                                        <?php
                                                          $discount = $meatFish->discount->discount;
                                                          $netPrice = $meatFish->price - ($discount/100 * $meatFish->price);
                                                        ?>
                                                        <span class="amount" style="text-decoration: line-through">&pound;{{$meatFish->price}}</span>
                                                        &nbsp;
                                                        <span class="amount">&pound;{{$netPrice}}</span>
                                                      @endif
                                                    </span>
                                                  </div>
                                                </div>
                                              </figcaption>
                                            </figure>
                                          </div>
                                        </li>
                                      @empty 
                                        <li>
                                          No products for this Category.
                                        </li>
                                      @endforelse
                                    </ul>
                                  </div>
                                  <a href="#" class="caroufredsel-prev"></a>
                                  <a href="#" class="caroufredsel-next"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="lookbook lookbook-left clearfix">
                          <div class="loobook-wrap clearfix">
                            <div class="lookbook-info">
                              <div class="lookbook-info-wrap bg-1">
                                <div class="lookbook-info-sumary">
                                  <div class="lookbook-info-sumary">
                                    <div
                                      style="font-size: 3rem; color: white; text-transform: uppercase; font-weight: bold;">
                                      100% Organic</div>
                                    <p
                                      style="font-size: 1.7em; color: white; text-transform: uppercase; font-weight: bold;">
                                      Veggies.</p>
                                  </div>
                                </div>
                              </div>
                            </div>
                            <div class="lookbook-thumb">
                              <div class="caroufredsel product-slider" data-height="variable" data-scroll-fx="scroll"
                                data-scroll-item="1" data-visible-min="1" data-visible-max="3" data-responsive="1"
                                data-infinite="1" data-autoplay="0" data-circular="1">
                                <div class="caroufredsel-wrap">
                                  <div class="shop shop-lookbok columns-3">
                                    <ul class="products columns-3" data-columns="3">
                                      @forelse($green_groceries as $green_grocery)
                                        <li class="product">
                                          <div class="product-container">
                                            <figure>
                                              <div class="product-wrap">
                                                <div class="product-images">
                                                  <div class="shop-loop-thumbnail">
                                                    <div
                                                      style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                      <img width="300" height="350" src="{{url('uploads/products',$green_grocery->product_image)}}" alt="{{$green_grocery->product_name}}" />
                                                    </div>
                                                  </div>
                                                  {{-- <div class="yith-wcwl-add-to-wishlist">
                                                                                                          <div class="yith-wcwl-add-button">
                                                                                                              <a href="#" class="add_to_wishlist">
                                                                                                                  Add to Wishlist
                                                                                                              </a>
                                                                                                          </div>
                                                                                                      </div> --}}
                                                  <div class="clear">
                                                  </div>
                                                  {{-- <div class="shop-loop-quickview">
                                                                                                          <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                                                                                      </div> --}}
                                                </div>
                                              </div>
                                              <figcaption>
                                                <div class="shop-loop-product-info">
                                                  <div class="info-title">
                                                    <h3 class="product_title">
                                                      <a href="{{route('products.show', $green_grocery->id)}}">{{$green_grocery->product_name}}</a>
                                                    </h3>
                                                  </div>
                                                  <div class="info-price">
                                                    <span class="price">
                                                      @if(!isset($green_grocery->discount->discount))
                                                        <span class="amount">&pound;{{$green_grocery->price}}</span>
                                                      @else
                                                        <?php
                                                          $discount = $green_grocery->discount->discount;
                                                          $netPrice = $green_grocery->price - ($discount/100 * $green_grocery->price);
                                                        ?>
                                                        <span class="amount" style="text-decoration: line-through">&pound;{{$green_grocery->price}}</span>
                                                        &nbsp;
                                                        <span class="amount">&pound;{{$netPrice}}</span>
                                                      @endif
                                                    </span>
                                                  </div>
                                                </div>
                                              </figcaption>
                                            </figure>
                                          </div>
                                        </li>
                                      @empty 
                                        <li>
                                          No Products for this category.
                                        </li>
                                      @endforelse
                                    </ul>
                                  </div>
                                  <a href="#" class="caroufredsel-prev"></a>
                                  <a href="#" class="caroufredsel-next"></a>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>
                        <div class="lookbook lookbook-right clearfix">
                          <div class="loobook-wrap clearfix">
                            <div class="lookbook-info">
                              <div class="lookbook-info-wrap bg-2">
                                <div class="lookbook-info-sumary">
                                  <div
                                    style="font-size: 3rem; color: white; text-transform: uppercase; font-weight: bold;">
                                    Sweet Classics!</div>
                                  <p
                                    style="font-size: 1.7em; color: white; text-transform: uppercase; font-weight: bold;">
                                    Buy Freshly baked goods.</p>
                                </div>
                              </div>
                            </div>
                            <div class="lookbook-thumb">
                              <div class="caroufredsel product-slider" data-height="variable" data-scroll-fx="scroll"
                                data-scroll-item="1" data-visible-min="1" data-visible-max="3" data-responsive="1"
                                data-infinite="1" data-autoplay="0" data-circular="1">
                                <div class="caroufredsel-wrap">
                                  <div class="shop shop-lookbok columns-3">
                                    <ul class="products columns-3" data-columns="3">
                                      @forelse($bakery_delicacies as $delicacy)
                                        <li class="product">
                                          <div class="product-container">
                                            <figure>
                                              <div class="product-wrap">
                                                <div class="product-images">
                                                  <div class="shop-loop-thumbnail">
                                                    <div
                                                      style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                      <img width="300" height="350" src="{{url('uploads/products',$delicacy->product_image)}}"
                                                        alt="{{$delicacy->product_name}}" />
                                                    </div>
                                                  </div>
                                                  {{-- <div class="yith-wcwl-add-to-wishlist">
                                                                                                          <div class="yith-wcwl-add-button">
                                                                                                              <a href="#" class="add_to_wishlist">
                                                                                                                  Add to Wishlist
                                                                                                              </a>
                                                                                                          </div>
                                                                                                      </div> --}}
                                                  <div class="clear">
                                                  </div>
                                                  {{-- <div class="shop-loop-quickview">
                                                                                                          <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                                                                                      </div> --}}
                                                </div>
                                              </div>
                                              <figcaption>
                                                <div class="shop-loop-product-info">
                                                  <div class="info-title">
                                                    <h3 class="product_title">
                                                      <a href="{{route('products.show', $delicacy->id)}}">{{$delicacy->product_name}}</a>
                                                    </h3>
                                                  </div>
                                                  <div class="info-price">
                                                    <span class="price">
                                                      @if(!isset($delicacy->discount->discount))
                                                        <span class="amount">&pound;{{$delicacy->price}}</span>
                                                      @else
                                                        <?php
                                                          $discount = $delicacy->discount->discount;
                                                          $netPrice = $delicacy->price - ($discount/100 * $delicacy->price);
                                                        ?>
                                                        <span class="amount" style="text-decoration: line-through">&pound;{{$delicacy->price}}</span>
                                                        &nbsp;
                                                        <span class="amount">&pound;{{$netPrice}}</span>
                                                      @endif
                                                    </span>
                                                  </div>
                                                </div>
                                              </figcaption>
                                            </figure>
                                          </div>
                                        </li>
                                      @empty 
                                        <li>
                                          <div>
                                            No products for this category.
                                          </div>
                                        </li>
                                      @endforelse
                                    </ul>
                                  </div>
                                  <a href="#" class="caroufredsel-prev"></a>
                                  <a href="#" class="caroufredsel-next"></a>
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
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection