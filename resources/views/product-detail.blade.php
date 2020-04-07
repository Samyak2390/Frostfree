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
                            <span style="width:80%"></span>
                          </div>
                          <a href="#reviews" class="shop-review-link">(<span class="count">1</span> customer review)</a>
                        </div>
                        <p class="price"><span class="amount">&pound;{{$product->price}}</span></p>
                        <div class="product-excerpt">
                          <p>
                            {{substr($product->description, 0, 250)}}...
                          </p>
                        </div>
                        <div class="product-actions res-color-attr">
                          <form class="cart">
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
                              <a data-toggle="tab" role="tab" href="#tab-reviews">Reviews (1)</a>
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
                                  <h2>1 review for Cras rhoncus duis viverra</h2>
                                  <ol class="commentlist">
                                    <li>
                                      <div class="comment_container">
                                        <img alt='' src='http://placehold.it/32x32' class='avatar' height='60' width='60'/>
                                        <div class="comment-text">
                                          <div class="star-rating">
                                            <span style="width:80%"></span>
                                          </div>
                                          <p class="meta">
                                            <strong>sitesao</strong> &ndash; <time datetime="2015-08-05T10:09:45+00:00">August 5, 2015</time>:
                                          </p>
                                          <div class="description"><p>Lorem ipsum dolor</p></div>
                                        </div>
                                      </div>
                                      <ol class="children">
                                        <li>
                                          <div class="comment_container">
                                            <img alt='' src='http://placehold.it/32x32' class='avatar' height='60' width='60'/>
                                            <div class="comment-text">
                                              <div class="star-rating">
                                                <span style="width:80%"></span>
                                              </div>
                                              <p class="meta">
                                                <strong>sitesao</strong> &ndash; <time datetime="2015-08-05T10:09:45+00:00">August 5, 2015</time>:
                                              </p>
                                              <div class="description"><p>Lorem ipsum dolor</p></div>
                                            </div>
                                          </div>
                                        </li>
                                      </ol>
                                    </li>
                                    <li>
                                      <div class="comment_container">
                                        <img alt='' src='http://placehold.it/32x32' class='avatar' height='60' width='60'/>
                                        <div class="comment-text">
                                          <div class="star-rating">
                                            <span style="width:80%"></span>
                                          </div>
                                          <p class="meta">
                                            <strong>sitesao</strong> &ndash; <time datetime="2015-08-05T10:09:45+00:00">August 5, 2015</time>:
                                          </p>
                                          <div class="description"><p>Lorem ipsum dolor</p></div>
                                        </div>
                                      </div>
                                    </li> 
                                  </ol>
                                </div>
                                <div id="respond-wrap">
                                  <div id="respond" class="comment-respond">
                                    <h3 class="comment-reply-title">
                                      <span>Leave a reply</span>
                                    </h3>
                                    <form class="comment-form">
                                      <p class="comment-form-name">
                                        <label>Your name</label>
                                        <input class="form-control" name="name" />
                                      </p>
                                      <p class="comment-form-comment">
                                        <label>Comment</label>
                                        <textarea class="form-control" name="comment" cols="45" rows="8" aria-required="true"></textarea>
                                      </p>
                                      <p>
                                        <input name="submit" class="btn" value="Post Comment" type="submit" />
                                      </p>
                                    </form>
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
                          <li class="product">
                            <div class="product-container">
                              <figure>
                                <div class="product-wrap">
                                  <div class="product-images">
                                    <div class="shop-loop-thumbnail">
                                                                              <img width="300" height="350" src="images/product/product-2.jpg" alt="Product-2"/>
                                                                          </div>
                                                                          <div class="yith-wcwl-add-to-wishlist">
                                                                              <div class="yith-wcwl-add-button">
                                                                                  <a href="#" class="add_to_wishlist">
                                                                                      Add to Wishlist
                                                                                  </a>
                                                                              </div>
                                                                          </div>
                                                                          <div class="clear"></div>
                                    <div class="shop-loop-quickview">
                                      <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <figcaption>
                                  <div class="shop-loop-product-info">
                                    <div class="info-title">
                                      <h3 class="product_title"><a href="#">Morbi sed egestas</a></h3>
                                    </div>
                                    <div class="info-meta">
                                      <div class="info-price">
                                        <span class="price">
                                          <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
                                        </span>
                                      </div>
                                      <div class="loop-add-to-cart">
                                        <a href="#">Select options</a>
                                      </div>
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
                                                                              <img width="300" height="350" src="images/product/product-3.jpg" alt="Product-3"/>
                                                                          </div>
                                                                          <div class="yith-wcwl-add-to-wishlist">
                                                                              <div class="yith-wcwl-add-button">
                                                                                  <a href="#" class="add_to_wishlist">
                                                                                      Add to Wishlist
                                                                                  </a>
                                                                              </div>
                                                                          </div>
                                                                          <div class="clear"></div>
                                    <div class="shop-loop-quickview">
                                      <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <figcaption>
                                  <div class="shop-loop-product-info">
                                    <div class="info-title">
                                      <h3 class="product_title"><a href="#">Creamy Spring Pasta</a></h3>
                                    </div>
                                    <div class="info-meta">
                                      <div class="info-price">
                                        <span class="price">
                                          <span class="amount">&#36;12.00</span>&ndash;<span class="amount">&#36;23.00</span>
                                        </span>
                                      </div>
                                      <div class="loop-add-to-cart">
                                        <a href="#">Select options</a>
                                      </div>
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
                                                                              <img width="300" height="350" src="images/product/product-4.jpg" alt="Product-4"/>
                                                                          </div>
                                                                          <div class="yith-wcwl-add-to-wishlist">
                                                                              <div class="yith-wcwl-add-button">
                                                                                  <a href="#" class="add_to_wishlist">
                                                                                      Add to Wishlist
                                                                                  </a>
                                                                              </div>
                                                                          </div>
                                                                          <div class="clear"></div>
                                    <div class="shop-loop-quickview">
                                      <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <figcaption>
                                  <div class="shop-loop-product-info">
                                    <div class="info-title">
                                      <h3 class="product_title"><a href="#">Green Chile Burritos</a></h3>
                                    </div>
                                    <div class="info-meta">
                                      <div class="info-price">
                                        <span class="price">
                                          <span class="amount">&#36;10.75</span>
                                        </span>
                                      </div>
                                      <div class="loop-add-to-cart">
                                        <a href="#">Select options</a>
                                      </div>
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
                                                                              <img width="300" height="350" src="images/product/product-5.jpg" alt="Product-5"/>
                                                                          </div>
                                                                          <div class="yith-wcwl-add-to-wishlist">
                                                                              <div class="yith-wcwl-add-button">
                                                                                  <a href="#" class="add_to_wishlist">
                                                                                      Add to Wishlist
                                                                                  </a>
                                                                              </div>
                                                                          </div>
                                                                          <div class="clear"></div>
                                    <div class="shop-loop-quickview">
                                      <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                                    </div>
                                  </div>
                                </div>
                                <figcaption>
                                  <div class="shop-loop-product-info">
                                    <div class="info-title">
                                      <h3 class="product_title"><a href="#">Jalapeno Dressing Salad</a></h3>
                                    </div>
                                    <div class="info-meta">
                                      <div class="info-price">
                                        <span class="price">
                                          <span class="amount">&#36;17.75</span>
                                        </span>
                                      </div>
                                      <div class="loop-add-to-cart">
                                        <a href="#">Select options</a>
                                      </div>
                                    </div>
                                  </div>
                                </figcaption>
                              </figure>
                            </div>
                          </li>
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
