<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <title>FrostFree</title>
        <link rel="shortcut icon" href="images/favicon.png">
        
        <link rel='stylesheet' href='{{ URL::asset('css/settings.css') }}' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ URL::asset('css/swatches-and-photos.css') }}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{ URL::asset('css/font-awesome.min.css') }}' type='text/css' media='all'/>
        <link rel='stylesheet' href='http://fonts.googleapis.com/css?family=Montserrat%3A400%2C700&#038;' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{ URL::asset('css/elegant-icon.css') }}' type='text/css' media='all' />
        <link rel='stylesheet' href='{{ URL::asset('css/style.css') }}' type='text/css' media='all'/>
        <link rel='stylesheet' href='{{ URL::asset('css/shop.css') }}' type='text/css' media='all'/>

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <style>
        
        </style>
    </head>
    <body>
      <div class="offcanvas open">
        <div class="offcanvas-wrap">
            <div class="offcanvas-user clearfix text-center">
                {{-- <a class="offcanvas-user-wishlist-link" href="wishlist.html">
                    <i class="fa fa-heart-o"></i> My Wishlist
                </a> --}}
                <a class="offcanvas-user-account-link" href="#">
                    <i class="fa fa-user"></i> Login
                </a>
            </div>
            <nav class="offcanvas-navbar">
                <ul class="offcanvas-nav">
                    <li class="menu-item-has-children dropdown">
                    <a href="{{url('/')}}" class="dropdown-hover">Home <span class="caret"></span></a>

                    </li>
                    <li class="menu-item-has-children dropdown">
                        <a href="shop.html" class="dropdown-hover">Shop <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li id="menu-item-10433" class="menu-item-has-children dropdown-submenu">
                                <a href="shop-by-category.html">Butcher <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-by-category.html">Nulla</a></li>
                                    <li><a href="shop-by-category.html">Maecenas</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown-submenu">
                                <a href="shop-by-category.html">Fishmonger <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-by-category.html">Adesso</a></li>
                                    <li><a href="shop-by-category.html">Barbour</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown-submenu">
                                <a href="shop-by-category.html">Greengrocer <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-by-category.html">Adesso</a></li>
                                    <li><a href="shop-by-category.html">Barbour</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown-submenu">
                                <a href="shop-by-category.html">Bakery <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-by-category.html">Adesso</a></li>
                                    <li><a href="shop-by-category.html">Barbour</a></li>
                                </ul>
                            </li>
                            <li class="menu-item-has-children dropdown-submenu">
                                <a href="shop-by-category.html">Delicatessen <span class="caret"></span></a>
                                <ul class="dropdown-menu">
                                    <li><a href="shop-by-category.html">Adesso</a></li>
                                    <li><a href="shop-by-category.html">Barbour</a></li>
                                </ul>
                            </li>
                           
                            
                        </ul>
                    </li>
                    <li><a href="collection.html">Collections</a></li>

                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-hover">Pages <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="about-us.html">About us</a></li>
                            <li><a href="contact-us.html">Contact Us</a></li>
                            <li><a href="faq.html">FAQ</a></li>
                        </ul>
                    </li>
                </ul>
            </nav>
            <div class="offcanvas-widget">
                <div class="widget social-widget">
                    <div class="social-widget-wrap social-widget-none" style="display: flex; justify-content: center">
                        <a href="www.facebook.com" title="Facebook" target="_blank">
                            <i class="fa fa-facebook facebook-bg-hover"></i>
                        </a>
                        <a href="www.twitter.com" title="Twitter" target="_blank">
                            <i class="fa fa-twitter twitter-bg-hover"></i>
                        </a>
                        <a href="www.instagram.com" title="Instagram" target="_blank">
                            <i class="fa fa-instagram instagram-bg-hover"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="wrapper" class="wide-wrap">
        <div class="offcanvas-overlay"></div>
        <header class="header-type-classic header-absolute header-transparent">
            <div class="topbar">
                <div class="container topbar-wap">
                    <div class="row">
                        <div class="col-sm-6">
                            <div class="left-topbar">
                                <div class="topbar-social">
                                    <a href="www.facebook.com" title="Facebook" target="_blank">
                                        <i class="fa fa-facebook facebook-bg-hover"></i>
                                    </a>
                                    <a href="www.twitter.com" title="Twitter" target="_blank">
                                        <i class="fa fa-twitter twitter-bg-hover"></i>
                                    </a>
                                    <a href="www.instagram.com" title="Instagram" target="_blank">
                                        <i class="fa fa-instagram instagram-bg-hover"></i>
                                    </a>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="right-topbar">
                                {{-- <div class="user-wishlist">
                                    <a href="wishlist.html"><i class="fa fa-heart-o"></i> My Wishlist</a>
                                </div> --}}
                                <div class="user-login">
                                    <ul class="nav top-nav">
                                        <li class="menu-item">
                                            <a data-rel="loginModal" href="#"><i class="fa fa-user"></i> Login</a>
                                        </li>
                                    </ul>
                                </div>
                                {{-- <div class="language-switcher">
                                    <div class="wpml-languages disabled">
                                        <a class="active" href="#" data-toggle="dropdown">
                                            <img src="images/en.png" alt="English"/> EN
                                        </a>
                                    </div>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="navbar-container">
                <div class="navbar navbar-default  navbar-scroll-fixed">
                    <div class="navbar-default-wrap">
                        <div class="container">
                            <div class="row">
                                <div class="col-md-12 navbar-default-col">
                                    <div class="navbar-wrap">
                                        <div class="navbar-header">
                                            <button type="button" class="navbar-toggle">
                                                <span class="sr-only">Toggle navigation</span>
                                                <span class="icon-bar bar-top"></span>
                                                <span class="icon-bar bar-middle"></span>
                                                <span class="icon-bar bar-bottom"></span>
                                            </button>
                                            <a class="navbar-search-button search-icon-mobile" href="#">
                                                <i class="fa fa-search"></i>
                                            </a>
                                            <a class="cart-icon-mobile" href="#">
                                                <i class="elegant_icon_bag"></i><span>0</span>
                                            </a>
                                            {{-- <a class="navbar-brand" href="{{ url('/') }}" style="display: flex">
                                                <div><img src="/svg/snow.svg" style="height:60px;"></div>
                                                <div style="display: flex; align-items: center; padding-left: 15px">Frostfree</div>
                                                <img class="logo" alt="FrostFree" src="images/logo-transparent.png">
                                                <img class="logo-fixed" alt="FrostFree" src="images/logo-fixed.png">
                                                <img class="logo-mobile" alt="FrostFree" src="images/logo-mobile.png">  
                                            </a> --}}
                                            <a class="navbar-brand" href="index.html">
                                                <img class="logo" alt="FrostFree" src="images/logo-transparent.png">
                                                <img class="logo-fixed" alt="FrostFree" src="images/logo-fixed.png">
                                                <img class="logo-mobile" alt="FrostFree" src="images/logo-mobile.png">
                                            </a>
                                        </div>
                                        <nav class="collapse navbar-collapse primary-navbar-collapse">
                                            <ul class="nav navbar-nav primary-nav">
                                                <li class="menu-item-has-children dropdown">
                                                    <a href="index.html" class="dropdown-hover">
                                                        <span class="underline">Home</span> <span class="caret"></span>
                                                    </a>
                                                </li>
                                                <li class="menu-item-has-children megamenu megamenu-fullwidth dropdown">
                                                    <a href="shop.html" class="dropdown-hover">
                                                        <span class="underline">Shop</span> <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                            <h3 class="megamenu-title">
                                                                Butcher <span class="caret"></span>
                                                            </h3>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="shop-by-category.html">Nulla</a></li>
                                                                <li><a href="shop-by-category.html">Maecenas</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                            <h3 class="megamenu-title">
                                                                Fishmonger <span class="caret"></span>
                                                            </h3>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="shop-by-category.html">Nulla</a></li>
                                                                <li><a href="shop-by-category.html">Maecenas</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                            <h3 class="megamenu-title">
                                                                Greengrocer <span class="caret"></span>
                                                            </h3>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="shop-by-category.html">Nulla</a></li>
                                                                <li><a href="shop-by-category.html">Maecenas</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                            <h3 class="megamenu-title">
                                                                Bakery <span class="caret"></span>
                                                            </h3>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="shop-by-category.html">Nulla</a></li>
                                                                <li><a href="shop-by-category.html">Maecenas</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        <li class="menu-item-has-children mega-col-3 dropdown-submenu">
                                                            <h3 class="megamenu-title">
                                                                Delicatessen <span class="caret"></span>
                                                            </h3>
                                                            <ul class="dropdown-menu">
                                                                <li><a href="shop-by-category.html">Nulla</a></li>
                                                                <li><a href="shop-by-category.html">Maecenas</a></li>
                                                                
                                                            </ul>
                                                        </li>
                                                        
                                                    </ul>
                                                </li>
                                                <li class="menu-item-has-children dropdown">
                                                    <a href="#" class="dropdown-hover">
                                                        <span class="underline">Categories</span> <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="#">Meat</a></li>
                                                        <li><a href="#">Fish</a></li>
                                                        <li><a href="#">Cake</a></li>
                                                    </ul>
                                                </li>
                                                
                                                <li class="menu-item-has-children dropdown">
                                                    <a href="#" class="dropdown-hover">
                                                        <span class="underline">Pages</span> <span class="caret"></span>
                                                    </a>
                                                    <ul class="dropdown-menu">
                                                        <li><a href="about-us.html">About us</a></li>
                                                        <li><a href="contact-us.html">Contact Us</a></li>
                                                        <li><a href="faq.html">FAQ</a></li>
                                                    </ul>
                                                </li>
                                                <li class="navbar-search">
                                                    <a class="navbar-search-button" href="#">
                                                        <i class="fa fa-search"></i>
                                                    </a>
                                                </li>
                                                <li class="navbar-minicart navbar-minicart-nav">
                                                    <a class="minicart-link" href="#">
                                                        <span class="minicart-icon">
                                                            <i class="minicart-icon-svg elegant_icon_bag"></i>
                                                            <span>0</span>
                                                        </span>
                                                    </a>
                                                    <div class="minicart">
                                                        <div class="minicart-header no-items show">
                                                            Your shopping bag is empty.
                                                        </div>
                                                        <div class="minicart-footer">
                                                            <div class="minicart-actions clearfix">
                                                                <a class="button" href="#">
                                                                    <span class="text">Go to the shop</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </li>
                                            </ul>
                                        </nav>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="header-search-overlay hide">
                        <div class="container">
                            <div class="header-search-overlay-wrap">
                                <form class="searchform">
                                    <input type="search" class="searchinput" name="s" value="" placeholder="Search..."/>
                                    <input type="submit" class="searchsubmit hidden" name="submit" value="Search"/>
                                </form>
                                <button type="button" class="close">
                                    <span aria-hidden="true" class="fa fa-times"></span>
                                    <span class="sr-only">Close</span>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </header>
        <div class="content-container no-padding">
            <div class="container-full">
                <div class="row">
                    <div class="col-md-12 main-wrap">
                        <div class="main-content">
                            <div id="home-slider" data-autorun="yes" data-duration="6000" class="carousel slide fade dhslider dhslider-custom " data-height="650">
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
                                                                        <span class="lookbook-small-title">Massa Tincidunt</span>
                                                                        <h3><a href="#"><span class="nth-word-first">Spring/Summer</span> 2014 </a></h3>
                                                                        <a class="btn btn-primary lookbook-action" href="#"><span>Shop Now</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="lookbook-thumb">
                                                                <div class="caroufredsel product-slider" data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="3" data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1">
                                                                    <div class="caroufredsel-wrap">
                                                                        <div class="shop shop-lookbok columns-3">
                                                                            <ul class="products columns-3" data-columns="3">
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
                                                                                <li class="product">
                                                                                    <div class="product-container">
                                                                                        <figure>
                                                                                            <div class="product-wrap">
                                                                                                <div class="product-images">
                                                                                                    <div class="shop-loop-thumbnail">
                                                                                                        <img width="300" height="350" src="images/product/product-6.jpg" alt="Product-6"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Pesto Cauliflower</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;15.05</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-7.jpg" alt="Product-7"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Ut quis Aenean</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;10.95</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-9.jpg" alt="Product-9"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;17.45</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-10.jpg" alt="Product-10"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Mauris egestas</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-11.jpg" alt="Product-11"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Nunc lacus sem</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;10.95</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-12.jpg" alt="Product-12"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Quisque libero sagittis</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;17.50</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-13.jpg" alt="Product-13"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Donec tincidunt justo</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <del><span class="amount">&#36;20.50</span></del> <ins><span class="amount">&#36;19.00</span></ins>
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
                                                                                                        <img width="300" height="350" src="images/product/product-14.jpg" alt="Product-14"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Nunc interdum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                        <span class="lookbook-small-title">Duis porta</span>
                                                                        <h3><a href="#"><span class="nth-word-first">Sweet</span> Summer </a></h3>
                                                                        <a class="btn btn-primary lookbook-action" href="#"><span>Shop Now</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="lookbook-thumb">
                                                                <div class="caroufredsel product-slider" data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="3" data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1">
                                                                    <div class="caroufredsel-wrap">
                                                                        <div class="shop shop-lookbok columns-3">
                                                                            <ul class="products columns-3" data-columns="3">
                                                                                <li class="product">
                                                                                    <div class="product-container">
                                                                                        <figure>
                                                                                            <div class="product-wrap">
                                                                                                <div class="product-images">
                                                                                                    <div class="shop-loop-thumbnail">
                                                                                                        <img width="300" height="350" src="images/product/product-1.jpg" alt="Product-1"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Nunc interdum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                                <li class="product">
                                                                                    <div class="product-container">
                                                                                        <figure>
                                                                                            <div class="product-wrap">
                                                                                                <div class="product-images">
                                                                                                    <div class="shop-loop-thumbnail">
                                                                                                        <img width="300" height="350" src="images/product/product-7.jpg" alt="Product-7"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Ut quis Aenean</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;10.95</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-8.jpg" alt="Product-8"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;23.00</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-9.jpg" alt="Product-9"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;17.45</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-10.jpg" alt="Product-10"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Mauris egestas</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-12.jpg" alt="Product-12"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Quisque libero sagittis</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;17.50</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-13.jpg" alt="Product-13"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Donec tincidunt justo</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <del><span class="amount">&#36;20.50</span></del> <ins><span class="amount">&#36;19.00</span></ins>
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
                                                                                                        <img width="300" height="350" src="images/product/product-14.jpg" alt="Product-14"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Nunc interdum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                        <span class="lookbook-small-title">Cras quis</span>
                                                                        <h3><a href="#"><span class="nth-word-first">Winter</span> 2015 </a></h3>
                                                                        <a class="btn btn-primary lookbook-action" href="#"><span>Shop Now</span></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="lookbook-thumb">
                                                                <div class="caroufredsel product-slider" data-height="variable" data-scroll-fx="scroll" data-scroll-item="1" data-visible-min="1" data-visible-max="3" data-responsive="1" data-infinite="1" data-autoplay="0" data-circular="1">
                                                                    <div class="caroufredsel-wrap">
                                                                        <div class="shop shop-lookbok columns-3">
                                                                            <ul class="products columns-3" data-columns="3">
                                                                                <li class="product">
                                                                                    <div class="product-container">
                                                                                        <figure>
                                                                                            <div class="product-wrap">
                                                                                                <div class="product-images">
                                                                                                    <div class="shop-loop-thumbnail">
                                                                                                        <img width="300" height="350" src="images/product/product-1.jpg" alt="Product-1"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Nunc interdum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                                <li class="product">
                                                                                    <div class="product-container">
                                                                                        <figure>
                                                                                            <div class="product-wrap">
                                                                                                <div class="product-images">
                                                                                                    <div class="shop-loop-thumbnail">
                                                                                                        <img width="300" height="350" src="images/product/product-7.jpg" alt="Product-7"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Ut quis Aenean</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;10.95</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-8.jpg" alt="Product-8"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;23.00</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-9.jpg" alt="Product-9"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Morbi fermentum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;17.45</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-10.jpg" alt="Product-10"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Mauris egestas</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-12.jpg" alt="Product-12"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Quisque libero sagittis</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;17.50</span>
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
                                                                                                        <img width="300" height="350" src="images/product/product-13.jpg" alt="Product-13"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Donec tincidunt justo</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <del><span class="amount">&#36;20.50</span></del> <ins><span class="amount">&#36;19.00</span></ins>
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
                                                                                                        <img width="300" height="350" src="images/product/product-14.jpg" alt="Product-14"/>
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
                                                                                                        <h3 class="product_title"><a href="#">Nunc interdum</a></h3>
                                                                                                    </div>
                                                                                                    <div class="info-meta">
                                                                                                        <div class="info-price">
                                                                                                            <span class="price">
                                                                                                                <span class="amount">&#36;14.95</span>
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
                                                                        <a href="#" class="caroufredsel-prev"></a>
                                                                        <a href="#" class="caroufredsel-next"></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="footer-services">
                                                    <div class="container">
                                                        <div class="row">
                                                            <div class="col-sm-4 footer-service-item">
                                                                <a class="footer-service-item-i" href="#">
                                                                    <i class="footer-service-icon fa fa-send-o"></i>
                                                                    <h3 class="footer-service-title">Shipping & Returns</h3>
                                                                    <span class="footer-service-text">
                                                                        World wide shipping to selected countries
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-4 footer-service-item">
                                                                <a class="footer-service-item-i" href="#">
                                                                    <i class="footer-service-icon fa fa-life-bouy"></i>
                                                                    <h3 class="footer-service-title">FAQ</h3>
                                                                    <span class="footer-service-text">
                                                                        Answers to frequently asked questions
                                                                    </span>
                                                                </a>
                                                            </div>
                                                            <div class="col-sm-4 footer-service-item">
                                                                <a class="footer-service-item-i" href="#">
                                                                    <i class="footer-service-icon fa fa-home"></i>
                                                                    <h3 class="footer-service-title">Stores</h3>
                                                                    <span class="footer-service-text">Find our retail locations</span>
                                                                </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="footer-widget">
                                <div class="container">
                                    <div class="footer-widget-wrap">
                                        <div class="row">
                                            <div class="footer-widget-col col-md-2 col-sm-6">
                                                <div class="widget widget_nav_menu">
                                                    <h3 class="widget-title"><span>Infomation</span></h3>
                                                    <ul class="menu">
                                                        <li><a href="#">About Us</a></li>
                                                        <li><a href="#">Work Here</a></li>
                                                        <li><a href="#">Careers</a></li>
                                                        <li><a href="#">Dealer Locator</a></li>
                                                        <li><a href="#">Happenings</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="footer-widget-col col-md-2 col-sm-6">
                                                <div class="widget widget_nav_menu">
                                                    <h3 class="widget-title"><span>Customer Care</span></h3>
                                                    <ul class="menu">
                                                        <li><a href="#">Support</a></li>
                                                        <li><a href="#">FAQ</a></li>
                                                        <li><a href="#">Repair Center</a></li>
                                                        <li><a href="#">Contact us</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="footer-widget-col col-md-2 col-sm-6">
                                                <div class="widget widget_nav_menu">
                                                    <h3 class="widget-title"><span>Quick Link</span></h3>
                                                    <ul class="menu">
                                                        <li><a href="#">Order Status</a></li>
                                                        <li><a href="#">Shipping Policy</a></li>
                                                        <li><a href="#">Return Policy</a></li>
                                                        <li><a href="#">Digital Gift Card</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="footer-widget-col col-md-2 col-sm-6">
                                                <div class="widget widget_nav_menu">
                                                    <h3 class="widget-title"><span>Help</span></h3>
                                                    <ul class="menu">
                                                        <li><a href="#">Privacy</a></li>
                                                        <li><a href="#">Terms and Conditions</a></li>
                                                        <li><a href="#">Social Responsibility</a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                            <div class="footer-widget-col col-md-4 col-sm-6">
                                                <div class="widget widget_text">
                                                    <h3 class="widget-title"><span>The Store</span></h3>
                                                    <div class="textwidget">
                                                        <p><i class="fa fa-map-marker"></i> No 68/12, Tower Street,New York, USA</p>
                                                        <p><i class="fa fa-phone"></i> (012) 1234 7824</p>
                                                        <p><i class="fa fa-envelope"></i> <a href="mailto:email@domain.com">email@domain.com</a></p>
                                                        <p class="payment"><img src="images/footer-payment-color.png" alt=""></p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <footer id="footer" class="footer">
                                <div class="footer-info">
                                    <div class="container">
                                        <div class="row">
                                            <div class="col-md-12 text-center">
                                                <div class="footer-info-logo">
                                                    <a href="#"><img alt="The DMCS" src="images/footer-logo.png"></a>
                                                </div>
                                                <div class="copyright text-center">Copyright right © 2015 DMCS. All Rights Reserved.</div>
                                                <div class="footer-social">
                                                    <a href="#" title="Facebook" target="_blank">
                                                        <i class="fa fa-facebook facebook-bg-hover"></i>
                                                    </a>
                                                    <a href="#" title="Twitter" target="_blank">
                                                        <i class="fa fa-twitter twitter-bg-hover"></i>
                                                    </a>
                                                    <a href="#" title="Google+" target="_blank">
                                                        <i class="fa fa-google-plus google-plus-bg-hover"></i>
                                                    </a>
                                                    <a href="#" title="Pinterest" target="_blank">
                                                        <i class="fa fa-pinterest pinterest-bg-hover"></i>
                                                    </a>
                                                    <a href="#" title="RSS" target="_blank">
                                                        <i class="fa fa-rss rss-bg-hover"></i>
                                                    </a>
                                                    <a href="#" title="Instagram" target="_blank">
                                                        <i class="fa fa-instagram instagram-bg-hover"></i>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </footer>
                        </div>
                        <div class="modal fade user-login-modal" id="userloginModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="userloginModalForm">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title">Login</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" id="username" name="log" required class="form-control" value="" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="password">Password</label>
                                                <input type="password" id="password" required value="" name="pwd" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="checkbox clearfix">
                                                <div class="form-flat-checkbox pull-left">
                                                    <input type="checkbox" name="rememberme" id="rememberme" value="forever"><i></i>&nbsp;Remember Me
                                                </div>
                                                <span class="lostpassword-modal-link pull-right">
                                                    <a href="#lostpasswordModal" data-rel="lostpasswordModal">Lost your password?</a>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <span class="user-login-modal-register pull-left">
                                                <a data-rel="registerModal" href="#">Not a Member yet?</a>
                                            </span>
                                            <button type="submit" class="btn btn-default btn-outline">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade user-register-modal" id="userregisterModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="userregisterModalForm">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title">Register account</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label for="seeAnotherField">Registering for:</label>
                                                <select class="form-control" id="seeAnotherField" required>
                                                    <option value="no">Customer</option>
                                                    <option value="yes">Trader</option>
                                                    </select>
                                                </div>
                                            <div class="form-group">
                                                <label>Username</label>
                                                <input type="text" name="user_login" required class="form-control" value="" placeholder="Username">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_email">Email</label>
                                                <input type="email" id="user_email" name="user_email" required class="form-control" value="" placeholder="Email">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_password">Password</label>
                                                <input type="password" id="user_password" required value="" name="user_password" class="form-control" placeholder="Password">
                                            </div>
                                            <div class="form-group">
                                                <label for="user_password">Retype password</label>
                                                <input type="password" id="cuser_password" required value="" name="cuser_password" class="form-control" placeholder="Retype password">
                                            </div>
                                           
                                                <div class="form-group" id="otherFieldDiv">
                                                    <label for="otherField">Shop</label>
                                                    <input type="text" name="trader_name" required class="form-control" value="" placeholder="Shop" id="otherField">
                                               
                                                  </div>
                                        </div>
                                        <div class="modal-footer">
                                            <span class="user-login-modal-link pull-left">
                                                <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
                                            </span>
                                            <button type="submit" class="btn btn-default btn-outline">Register</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                        <div class="modal fade user-lostpassword-modal" id="userlostpasswordModal" tabindex="-1" role="dialog" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                    <form id="userlostpasswordModalForm">
                                        <div class="modal-header">
                                            <button type="button" class="close" data-dismiss="modal">
                                                <span aria-hidden="true">&times;</span><span class="sr-only">Close</span>
                                            </button>
                                            <h4 class="modal-title">Forgot Password</h4>
                                        </div>
                                        <div class="modal-body">
                                            <div class="form-group">
                                                <label>Username or E-mail:</label>
                                                <input type="text" name="user_login" required class="form-control" value="" placeholder="Username or E-mail">
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <span class="user-login-modal-link pull-left">
                                                <a data-rel="loginModal" href="#loginModal">Already have an account?</a>
                                            </span>
                                            <button type="submit" class="btn btn-default btn-outline">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
   

    <script type='text/javascript' src='http://code.jquery.com/jquery-1.11.3.min.js'></script>
    <script type='text/javascript' src='{{ URL::asset('js/jquery-migrate.min.js') }}'></script>
    <script type='text/javascript' src='js/jquery.themepunch.tools.min.js'></script>
    <script type='text/javascript' src='js/jquery.themepunch.revolution.min.js'></script>
    <script type='text/javascript' src='js/easing.min.js'></script>
    <script type='text/javascript' src='js/imagesloaded.pkgd.min.js'></script>
    <script type='text/javascript' src='js/bootstrap.min.js'></script>
    <script type='text/javascript' src='js/superfish-1.7.4.min.js'></script>
    <script type='text/javascript' src='js/jquery.appear.min.js'></script>
    <script type='text/javascript' src='js/script.js'></script>
    <script type='text/javascript' src='js/swatches-and-photos.js'></script>
    <script type='text/javascript' src='js/jquery.prettyPhoto.min.js'></script>
    <script type='text/javascript' src='js/jquery.prettyPhoto.init.min.js'></script>
    <script type='text/javascript' src='js/jquery.selectBox.min.js'></script>
    <script type='text/javascript' src='js/jquery.parallax.js'></script>
    <script type='text/javascript' src='js/jquery.touchSwipe.min.js'></script>
    <script type='text/javascript' src='js/jquery.transit.min.js'></script>
    <script type='text/javascript' src='js/jquery.carouFredSel.min.js'></script>
    <script type='text/javascript' src='js/isotope.pkgd.min.js'></script>
    <script type='text/javascript' src='js/custom.js'></script>
    </body>
</html>
