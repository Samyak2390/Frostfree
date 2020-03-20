@extends('app')
@section('title', 'Home')
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
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/steak.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Prime
                                                      Reserve
                                                      Local
                                                      Bone-In Rib
                                                      Steak</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&pound;90.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/filet.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Filet
                                                      Mignon</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&pound;39.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/chicken.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Organic
                                                      Boneless
                                                      Skinless
                                                      Chicken
                                                      Breast</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/rack.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Rack
                                                      of Lamb</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
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
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/aspa.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Asparagus</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/basil.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Organic
                                                      Basil</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/banana.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Fresho
                                                      Banana</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/mush.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Button
                                                      mushrooms</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
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
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/italian.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Herb
                                                      and Cheese
                                                      Pull-Apart
                                                      Bread</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&pound;90.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/loaf.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Loaf
                                                      Cake</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&pound;39.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/biscuit.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Filled
                                                      Scone</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
                                      <li class="product">
                                        <div class="product-container">
                                          <figure>
                                            <div class="product-wrap">
                                              <div class="product-images">
                                                <div class="shop-loop-thumbnail">
                                                  <div
                                                    style="height: 424.65px; background: white; display: flex; align-items: center;">
                                                    <img width="300" height="350" src="images/product/waffle.jpg"
                                                      alt="Product-2" />
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
                                                    <a href="#">Gourmet
                                                      Waffle</a>
                                                  </h3>
                                                </div>
                                                <div class="info-price">
                                                  <span class="price">
                                                    <span class="amount">&#36;12.00</span>&ndash;<span
                                                      class="amount">&#36;23.00</span>
                                                  </span>
                                                </div>
                                              </div>
                                            </figcaption>
                                          </figure>
                                        </div>
                                      </li>
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