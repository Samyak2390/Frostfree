@extends('layouts.app')
@section('title', 'FrostFree | Shop')
@section('addCss')
  <style>
    @media (max-width: 700px){
      .remove {
        display: none;
      }
    }
  </style>
@endsection
@section('content')

<div id="wrapper" class="wide-wrap">
  <div class="offcanvas-overlay"></div>
  <div class="heading-container heading-resize heading-button">
    <div class="heading-background heading-parallax bg-3" style="background-image: linear-gradient(0deg, rgba(0, 0, 0, 0.3), rgba(0, 0, 0, 0.3)), url(../images/parallax/{{$parallax}})">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <div class="heading-wrap">
              <div class="page-title">
                <h1>{{$shopInfo->shop_name}}</h1>
                <span class="subtitle">shop</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="shop-toolbar remove">
    <div class="container">
      <div class="row">
        <div class="col-md-9 main-wrap pull-right">
          <div class="view-mode">
            <a class="grid-mode active" title="Grid"><i class="fa fa-th"></i></a>
            <a class="list-mode" title="List" href="#"><i class="fa fa-th-list"></i></a>
          </div>
          <form class="shop-ordering clearfix" method="GET" action="/shops/{{$shopInfo->id}}">
            @csrf
            <div class="shop-ordering-select">
              <label class="hide">Sorting:</label>
              <div class="form-flat-select">
                <select name="orderby" class="orderby" onchange="this.form.submit()">
                  <option value="default" {{isset($_GET['orderby']) ? ($_GET['orderby']=='default' ? 'selected' : '') : ''}}>
                    Default sorting</option>
                  <option value="date" {{isset($_GET['orderby']) ? ($_GET['orderby']=='date' ? 'selected' : '') : ''}}>
                    Sort by newness</option>
                  <option value="price" {{isset($_GET['orderby']) ? ($_GET['orderby']=='price' ? 'selected' : '') : ''}}>
                    Sort by price: low to high</option>
                  <option value="price-desc" {{isset($_GET['orderby']) ? ($_GET['orderby']=='price-desc' ? 'selected' : '') : ''}}>
                    Sort by price: high to low</option>
                </select>
                <i class="fa fa-angle-down"></i>
              </div>
            </div>
            {{-- <div class="shop-ordering-select">
              <label class="hide">Show:</label>
              <div class="form-flat-select">
                <select name="per_page" class="per_page">
                  <option value="12" selected='selected'>12</option>
                  <option value="24">24</option>
                  <option value="36">36</option>
                </select>
                <i class="fa fa-angle-down"></i>
              </div>
            </div> --}}
          </form>
        </div>
      </div>
    </div>
  </div>
  <div class="content-container">
    <div class="container">
      <div class="row">
        <div class="col-md-9 main-wrap">
          <div class="main-content">
            <div class="shop-loop grid">
              <ul class="products">
                @forelse($products as $product)
                  <li class="product">
                    <div class="product-container">
                      <figure>
                        <div class="product-wrap">
                          <div class="product-images">
                            {{-- <span class="onsale">Sale!</span> --}}
                            <div class="shop-loop-thumbnail">
                                <img width="300" height="350" src="{{ URL::asset("uploads/products/$product->product_image")}}" alt="Product-13"/>
                            </div>
                            {{-- <div class="yith-wcwl-add-to-wishlist">
                                <div class="yith-wcwl-add-button">
                                    <a href="#" class="add_to_wishlist">
                                        Add to Wishlist
                                    </a>
                                </div>
                            </div> 
                            <div class="clear"></div>
                            <div class="shop-loop-quickview">
                              <a href="#" data-rel="quickViewModal"><i class="fa fa-plus"></i></a>
                            </div>--}}
                          </div>
                        </div>
                        <figcaption>
                          <div class="shop-loop-product-info">
                            <div class="info-title">
                              <h3 class="product_title"><a href="{{route('products.show', $product->id)}}">{{$product->product_name}}</a></h3>
                            </div>
                            <div class="info-meta">
                              <div class="info-price">
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
                              </div>
                              <div class="loop-add-to-cart">
                                <a style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('cart-form{{$product->id}}').submit();">
                                  Add to Cart
                                </a>
                                <form method="POST" id="cart-form{{$product->id}}" style="display:none" 
                                  action="{{route('carts.store', $product->id)}}">
                                  @csrf 
                                  <input type="hidden" value="1" name="quantity">
                                </form>
                              </div>
                              {{-- <div class="yith-wcwl-add-button">
                                <a href="#" class="add_to_wishlist">
                                  Add to Cart
                                </a>
                              </div> --}}
                            </div>
                            <div class="info-excerpt">
                              {{substr($product->description, 0, 150)}}...
                            </div>
                            <div class="list-info-meta clearfix">
                              <div class="info-price">
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
                              </div>
                              <div class="list-action clearfix">
                                <div class="loop-add-to-cart">
                                  <a style="cursor: pointer" onclick="event.preventDefault(); document.getElementById('cart-form2{{$product->id}}').submit();">
                                    Add to Cart
                                  </a>
                                  <form method="POST" id="cart-form2{{$product->id}}" style="display:none" 
                                    action="{{route('carts.store', $product->id)}}">
                                    @csrf 
                                    <input type="hidden" value="1" name="quantity">
                                  </form>
                                </div>
                              </div>
                            </div>
                          </div>
                        </figcaption>
                      </figure>
                    </div>
                  </li>
                @empty
                  <li style="text-align: center;font-size: 18px;font-weight: bold;">
                    No products for {{strtoupper($shopInfo->shop_name)}} Shop.
                  </li>
                @endforelse
              </ul>
            </div>
            {{-- <nav class="shop-pagination">
              <p class="shop-result-count">
                Showing 1&ndash;12 of 14 results
              </p>
              <div class="paginate">
                <div class="paginate_links">
                  <span class='page-numbers current'>1</span>
                  <a class='page-numbers' href='#'>2</a>
                  <a class="next page-numbers" href="#"><i class="fa fa-angle-right"></i></a>
                </div>
              </div>
            </nav> --}}
          </div>
        </div>
        <div class="col-md-3 sidebar-wrap">
          <div class="main-sidebar">
            <div class="widget shop widget_product_categories">
              <h4 class="widget-title"><span>Categories</span></h4>
              <ul class="product-categories">
                @forelse($categories as $category)
                  <li><a href="{{route('categories.show', $category->id)}}">{{$category->category_name}}</a></li>
                @empty 
                  <li><a href="">No categories.</a></li>
                @endforelse
              </ul>
            </div>
            <div class="widget shop widget_products">
              <h4 class="widget-title"><span>Recently added</span></h4>
              <ul class="product_list_widget">
                @forelse($recentlyAdded as $recent)
                  <li>
                    <a href="{{route('products.show', $recent->id)}}" title="{{$recent->product_name}}">
                      <img width="100" height="150" src="{{ URL::asset("uploads/products/$recent->product_image")}}" alt="Product-13"/> 
                      <span class="product-title">{{$recent->product_name}}</span>
                    </a>
                    <?php
                      $discountRate = DB::table('discounts')->where('product_id',"$recent->id")->get();
                    ?>
                    <span class="price">
                      @if(!isset($discountRate) || sizeof($discountRate) <= 0 )
                        <span class="amount">&pound;{{$recent->price}}</span>
                      @else
                        <?php
                          $discount = $discountRate[0]->discount;
                          $netPrice = $recent->price - ($discount/100 * $recent->price);
                        ?>
                        <span class="amount" style="text-decoration: line-through">&pound;{{$recent->price}}</span>
                        &nbsp;
                        <span class="amount">&pound;{{$netPrice}}</span>
                      @endif
                    </span>
                  </li>
                @empty 
                  <li>No recently added.</li>
                @endforelse
              </ul>
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
    var el = document.getElementById('theBody');
    el.classList.add("shop", "page-layout-left-sidebar");
  </script>
@endsection