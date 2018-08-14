<?php
    if (Auth::check()){
        $user_id = Auth::id();
    }
    else {
        $user_id = 0;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Single Product</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="OneTech shop project">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <script src="{{ asset('front/js/jquery-3.3.1.min.js') }}"></script>
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/bootstrap4/bootstrap.min.css') }}">
{{--
    <link href="{{ asset('front/plugins/fontawesome-free-5.0.1/css/fontawesome-all.css') }}" rel="stylesheet" type="text/css">
--}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.theme.default.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/plugins/OwlCarousel2-2.2.1/animate.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/product_styles.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('front/styles/product_responsive.css') }}">
    <link rel="stylesheet" href="{{asset('v2.3.2/jquery.rateyo.min.css')}}"/>
    <script type="text/javascript" src="{{ asset('v2.3.2/jquery.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('v2.3.2/jquery.rateyo.js') }}"></script>
    <script src="https://unpkg.com/sweetalert2@7.18.0/dist/sweetalert2.all.js"></script>

    <script src="{{ asset('js/rating.js') }}"></script>
    <link rel="stylesheet" href="{{asset('css/rating.css')}}"/>

    <style type="text/css">
        .ajax-load{
            background: #e1e1e1;
            padding: 10px 0px;
            width: 100%;
        }
        * {
            -webkit-box-sizing:border-box;
            -moz-box-sizing:border-box;
            box-sizing:border-box;
        }

        *:before, *:after {
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        .clearfix {
            clear:both;
        }

        .text-center {text-align:center;}

        a {
            color: tomato;
            text-decoration: none;
        }

        a:hover {
            color: #2196f3;
        }

        pre {
            display: block;
            padding: 9.5px;
            margin: 0 0 10px;
            font-size: 13px;
            line-height: 1.42857143;
            color: #333;
            word-break: break-all;
            word-wrap: break-word;
            background-color: #F5F5F5;
            border: 1px solid #CCC;
            border-radius: 4px;
        }

        .header {
            padding:20px 0;
            position:relative;
            margin-bottom:10px;

        }

        .header:after {
            content:"";
            display:block;
            height:1px;
            background:#eee;
            position:absolute;
            left:30%; right:30%;
        }

        .header h2 {
            font-size:3em;
            font-weight:300;
            margin-bottom:0.2em;
        }

        .header p {
            font-size:14px;
        }



        #a-footer {
            margin: 20px 0;
        }

        .new-react-version {
            padding: 20px 20px;
            border: 1px solid #eee;
            border-radius: 20px;
            box-shadow: 0 2px 12px 0 rgba(0,0,0,0.1);

            text-align: center;
            font-size: 14px;
            line-height: 1.7;
        }

        .new-react-version .react-svg-logo {
            text-align: center;
            max-width: 60px;
            margin: 20px auto;
            margin-top: 0;
        }


        /* Rating Star Widgets Style */
        .rating-stars ul {
            list-style-type:none;
            padding:0;

            -moz-user-select:none;
            -webkit-user-select:none;
        }
        .rating-stars ul > li.star {
            display:inline-block;

        }

        /* Idle State of the stars */
        .rating-stars ul > li.star > i.fa {
            font-size:2.5em; /* Change the size of the stars */
            color:#FF912C; /* Color on idle state */
        }

        /* Hover state of the stars */
        .rating-stars ul > li.star.hover > i.fa {
            color:#FFD700;
        }

        /* Selected state of the stars */
        .rating-stars ul > li.star.selected > i.fa {
            color:#FF912C;
        }

        .progress {
            margin-bottom: 10px;
        }

        .progress-text {
            background-color: #FFFFFF;
            color: #000000;
            padding: 0 10px;
        }

    </style>

</head>

<body>

<div class="super_container">
    <!-- Header -->

    <header class="header">

        <!-- Top Bar -->

        <div class="top_bar">
            <div class="container">
                <div class="row">
                    <div class="col d-flex flex-row">
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('images/phone.png') }}" alt=""></div>+38 068 005 3570</div>
                        <div class="top_bar_contact_item"><div class="top_bar_icon"><img src="{{ asset('images/mail.png') }}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                        <div class="top_bar_content ml-auto">
                            <div class="top_bar_menu">
                                <ul class="standard_dropdown top_bar_dropdown">
                                    <li>
                                        <a href="#">English<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">Italian</a></li>
                                            <li><a href="#">Spanish</a></li>
                                            <li><a href="#">Japanese</a></li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="#">$ US dollar<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="#">EUR Euro</a></li>
                                            <li><a href="#">GBP British Pound</a></li>
                                            <li><a href="#">JPY Japanese Yen</a></li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                            <div class="top_bar_user">
                                @guest
                                    <div>
                                        <div class="user_icon"><img src="{{ asset('images/user.svg') }}" alt=""></div>
                                        <a href="{{ route('register') }}">Register</a>
                                    </div>
                                    <div>
                                        <div class="user_icon"><img src="{{ asset('images/user.svg') }}" alt=""></div>
                                        <a href="{{ route('login') }}">Sign in</a>
                                    </div>
                                @else
                                    <li class="dropdown">
                                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false" aria-haspopup="true" v-pre>
                                            {{ Auth::user()->name }} <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <li>
                                                <a href="{{ route('logout') }}"
                                                   onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                                    Logout
                                                </a>

                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                            </li>
                                        </ul>
                                    </li>
                                @endguest
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header Main -->

        <div class="header_main">
            <div class="container">
                <div class="row">

                    <!-- Logo -->
                    <div class="col-lg-2 col-sm-3 col-3 order-1">
                        <div class="logo_container">
                            <div class="logo"><a href="#">OneTech</a></div>
                        </div>
                    </div>

                    <!-- Search -->
                    <div class="col-lg-6 col-12 order-lg-2 order-3 text-lg-left text-right">
                        <div class="header_search">
                            <div class="header_search_content">
                                <div class="header_search_form_container">
                                    <form action="#" class="header_search_form clearfix">
                                        <input type="search" required="required" class="header_search_input" placeholder="Search for products...">
                                        <div class="custom_dropdown">
                                            <div class="custom_dropdown_list">
                                                <span class="custom_dropdown_placeholder clc">All Categories</span>
                                                <i class="fas fa-chevron-down"></i>
                                                <ul class="custom_list clc">
                                                    <li><a class="clc" href="#">All Categories</a></li>
                                                    <li><a class="clc" href="#">Computers</a></li>
                                                    <li><a class="clc" href="#">Laptops</a></li>
                                                    <li><a class="clc" href="#">Cameras</a></li>
                                                    <li><a class="clc" href="#">Hardware</a></li>
                                                    <li><a class="clc" href="#">Smartphones</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <button type="submit" class="header_search_button trans_300" value="Submit"><img src="{{ asset('images/search.png') }}" alt=""></button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- Wishlist -->
                    <div class="col-lg-4 col-9 order-lg-3 order-2 text-lg-left text-right">
                        <div class="wishlist_cart d-flex flex-row align-items-center justify-content-end">
                            <div class="wishlist d-flex flex-row align-items-center justify-content-end">
                                <div class="wishlist_icon"><img src="{{ asset('images/heart.png') }}" alt=""></div>
                                <div class="wishlist_content">
                                    <div class="wishlist_text"><a href="#">Wishlist</a></div>
                                    <div class="wishlist_count">115</div>
                                </div>
                            </div>

                            <!-- Cart -->
                            <div class="cart">
                                <div class="cart_container d-flex flex-row align-items-center justify-content-end">
                                    <div class="cart_icon">
                                        <img src="{{ asset('images/cart.png') }}" alt="">
                                        <div class="cart_count"><span>10</span></div>
                                    </div>
                                    <div class="cart_content">
                                        <div class="cart_text"><a href="#">Cart</a></div>
                                        <div class="cart_price">$85</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Main Navigation -->

        <nav class="main_nav">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="main_nav_content d-flex flex-row">

                            <!-- Categories Menu -->

                            <div class="cat_menu_container">
                                <div class="cat_menu_title d-flex flex-row align-items-center justify-content-start">
                                    <div class="cat_burger"><span></span><span></span><span></span></div>
                                    <div class="cat_menu_text">categories</div>
                                </div>

                                <ul class="cat_menu">
                                    <li><a href="#">Computers & Laptops <i class="fas fa-chevron-right ml-auto"></i></a></li>
                                    <li><a href="#">Cameras & Photos<i class="fas fa-chevron-right"></i></a></li>
                                    <li class="hassubs">
                                        <a href="#">Hardware<i class="fas fa-chevron-right"></i></a>
                                        <ul>
                                            <li class="hassubs">
                                                <a href="#">Menu Item<i class="fas fa-chevron-right"></i></a>
                                                <ul>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-right"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="#">Smartphones & Tablets<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">TV & Audio<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Gadgets<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Car Electronics<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Video Games & Consoles<i class="fas fa-chevron-right"></i></a></li>
                                    <li><a href="#">Accessories<i class="fas fa-chevron-right"></i></a></li>
                                </ul>
                            </div>

                            <!-- Main Nav Menu -->
                            <div class="main_nav_menu ml-auto">
                                <ul class="standard_dropdown main_nav_dropdown">
                                    <li><a href="index.html">Home<i class="fas fa-chevron-down"></i></a></li>
                                    <li class="hassubs">
                                        <a href="#">Super Deals<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs">
                                        <a href="#">Featured Brands<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li>
                                                <a href="#">Menu Item<i class="fas fa-chevron-down"></i></a>
                                                <ul>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                    <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                                </ul>
                                            </li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="#">Menu Item<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li class="hassubs">
                                        <a href="#">Pages<i class="fas fa-chevron-down"></i></a>
                                        <ul>
                                            <li><a href="shop.html">Shop<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="product.html">Product<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="blog_single.html">Blog Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="regular.html">Regular Post<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="cart.html">Cart<i class="fas fa-chevron-down"></i></a></li>
                                            <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                        </ul>
                                    </li>
                                    <li><a href="blog.html">Blog<i class="fas fa-chevron-down"></i></a></li>
                                    <li><a href="contact.html">Contact<i class="fas fa-chevron-down"></i></a></li>
                                </ul>
                            </div>

                            <!-- Menu Trigger -->

                            <div class="menu_trigger_container ml-auto">
                                <div class="menu_trigger d-flex flex-row align-items-center justify-content-end">
                                    <div class="menu_burger">
                                        <div class="menu_trigger_text">menu</div>
                                        <div class="cat_burger menu_burger_inner"><span></span><span></span><span></span></div>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </nav>

        <!-- Menu -->

        <div class="page_menu">
            <div class="container">
                <div class="row">
                    <div class="col">

                        <div class="page_menu_content">

                            <div class="page_menu_search">
                                <form action="#">
                                    <input type="search" required="required" class="page_menu_search_input" placeholder="Search for products...">
                                </form>
                            </div>
                            <ul class="page_menu_nav">
                                <li class="page_menu_item has-children">
                                    <a href="#">Language<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">English<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Italian<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Spanish<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Japanese<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Currency<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">US Dollar<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">EUR Euro<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">GBP British Pound<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">JPY Japanese Yen<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item">
                                    <a href="#">Home<i class="fa fa-angle-down"></i></a>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Super Deals<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Super Deals<i class="fa fa-angle-down"></i></a></li>
                                        <li class="page_menu_item has-children">
                                            <a href="#">Menu Item<i class="fa fa-angle-down"></i></a>
                                            <ul class="page_menu_selection">
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                                <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                            </ul>
                                        </li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Featured Brands<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Featured Brands<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item has-children">
                                    <a href="#">Trending Styles<i class="fa fa-angle-down"></i></a>
                                    <ul class="page_menu_selection">
                                        <li><a href="#">Trending Styles<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                        <li><a href="#">Menu Item<i class="fa fa-angle-down"></i></a></li>
                                    </ul>
                                </li>
                                <li class="page_menu_item"><a href="blog.html">blog<i class="fa fa-angle-down"></i></a></li>
                                <li class="page_menu_item"><a href="contact.html">contact<i class="fa fa-angle-down"></i></a></li>
                            </ul>

                            <div class="menu_contact">
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('images/phone_white.png') }}" alt=""></div>+38 068 005 3570</div>
                                <div class="menu_contact_item"><div class="menu_contact_icon"><img src="{{ asset('images/mail_white.png') }}" alt=""></div><a href="mailto:fastsales@gmail.com">fastsales@gmail.com</a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </header>

    <!-- Single Product -->
    <div class="single_product">
        <div class="container">
            <div class="row">

                <!-- Images -->
                <div class="col-lg-2 order-lg-1 order-2">
                    <ul class="image_list">
                        <li data-image="{{ asset('storage/'. $product->images[0]->filename) }}"><img src="{{ asset('storage/'. $product->images[0]->filename) }}" alt=""></li>
                        <li data-image="{{ asset('storage/'. $product->images[1]->filename) }}"><img src="{{ asset('storage/'. $product->images[1]->filename) }}" alt=""></li>
                        <li data-image="{{ asset('storage/'. $product->images[2]->filename) }}"><img src="{{ asset('storage/'. $product->images[2]->filename) }}" alt=""></li>
                    </ul>
                </div>

                <!-- Selected Image -->
                <div class="col-lg-5 order-lg-2 order-1">
                    <div class="image_selected">
                        <img src="{{ asset('storage/'. $product->images[0]->filename) }}" alt="">
                    </div>
                    <span class="float-left text-info"> <i class="fa fa-clock-o text-secondary"></i> {{date_format($product->created_at, 'H:i/ d.m.Y')  }}</span>
                    <span class="float-right text-info"> <i class="fa fa-eye text-secondary"></i> {{ $product->views }}</span>
                    <br>
                    <div class='rating-stars text-center custom_dropdown_placeholder'>
                        <h1 id="rateCount"></h1>
                    </div>
                    <div class="philips-rating-name-rat">
                        <div id="ratingBar">
                            <?php if(Auth::check()): ?>
                                <script>
                                    $(function () {
                                        var count = 0;
                                        var starsAll = <?= $summa ?>;//Всего звезд
                                        var voteAll = <?= $voteAll ?>;//Всего голосов
                                        var idShop = <?= $product->id ?>;//id статьи
                                        var starWidth = 17;//ширина одной звезды
                                        var ratingUser = <?= $ratingUser ?>;//старий райтинг пользователя если нет то ноль

                                        var rating = (starsAll/voteAll); //Старый рейтинг
                                        rating = Math.round(rating*100)/100;
                                        if(isNaN(rating)){
                                            rating = 0;
                                        }
                                        var ratingResCss = rating * starWidth;
                                        $("#ratDone").css("width", ratingResCss);
                                        $("#ratStat").html("Рейтинг: <strong>"+rating+"</strong> Голосов: <strong>"+voteAll+"</strong>");

                                        var coords;
                                        var stars;  //кол-во звезд при наведении
                                        var ratingNew;  //Новое количество звезд

                                        $("#rating").mousemove(function(e){
                                            var offset = $("#rating").offset();
                                            coords = e.clientX - offset.left; //текушая координата
                                            stars = Math.ceil(coords/starWidth);
                                            starsCss = stars*starWidth;
                                            $("#ratHover").css("width", starsCss).attr("title", stars+" из 5");
                                        });
                                        $("#rating").mouseout(function(){
                                            $("#ratHover").css("width", 0);
                                        });
                                        $("#rating").click(function(){

                                            var aaa = ratingUser - stars;
                                            var starsNew = starsAll - aaa;
                                            if (ratingUser == 0 && count == 0) {
                                                voteAll++;
                                                count++;
                                            }

                                            var ratingNew = starsNew/voteAll;

                                            ratingNew = Math.round(ratingNew*100)/100;

                                            $.ajax({
                                                type: "GET",
                                                url: '{{ route('rate.product')}}',
                                                data: {"id": idShop, "user_id": <?=$user_id?>,"rating": stars},
                                                cache: false,
                                                success: function(response){
                                                    if(response == "ok"){
                                                        var newRat = response+"px";
                                                        var newRatingResCss = ratingNew * starWidth;
                                                        $("#ratDone").css('width', newRatingResCss);
                                                        $("#ratStat").html("Рейтинг: <strong>"+ratingNew+"</strong> Голосов: <strong>"+voteAll+"</strong>");
                                                    }else{
                                                        $("#ratStat").text(response);
                                                    }
                                                }
                                            });
                                            return false;
                                        });

                                    })
                                </script>
                            <?php else:?>
                            <script>
                                $(function () {
                                    var starsAll = <?= $summa ?>;//Всего звезд
                                    var voteAll = <?= $voteAll ?>;//Всего голосов
                                    var idShop = <?= $product->id ?>;//id статьи
                                    var starWidth = 17;//ширина одной звезды
                                    var ratingUser = 0;//старий райтинг пользователя если нет то ноль

                                    var rating = (starsAll/voteAll); //Старый рейтинг
                                    rating = Math.round(rating*100)/100;
                                    if(isNaN(rating)){
                                        rating = 0;
                                    }
                                    var ratingResCss = rating * starWidth;
                                    $("#ratDone").css("width", ratingResCss);
                                    $("#ratStat").html("Рейтинг: <strong>"+rating+"</strong> Голосов: <strong>"+voteAll+"</strong>");
                                })
                            </script>
                            <?php endif; ?>
                            <div id="rating">
                                <div id="ratZero"></div>
                                <div id="ratDone"></div>
                                <div id="ratHover"></div>
                            </div>
                            <div id="ratBlocks"></div>
                            <div id="ratStat"></div>
                        </div>
                    </div>

                    <br>
                    <button type="button" class="btn btn-link" data-toggle="collapse" data-target="#ratingContent" style="text-decoration: none">Batafsil</button>

                    <section class='rating-widget collapse' id="ratingContent">
                        <div class="progress">
                            <span class="progress-text">
                                5
                            </span>
                            <div id="rate_5" class="progress-bar bg-danger progress-bar-striped" style="width: {{ round(($rate5/$voteAll)*100)}}%"></div>
                        </div>
                        <div class="progress">
                            <span class="progress-text">
                                4
                            </span>
                            <div id="rate_4" class="progress-bar bg-warning progress-bar-striped" style="width: {{ round(($rate4/$voteAll)*100)}}%">
                            </div>
                        </div>
                        <div class="progress">
                            <span class="progress-text">
                                3
                            </span>
                            <div id="rate_3" class="progress-bar bg-info progress-bar-striped" style="width: {{ round(($rate3/$voteAll)*100)}}%">
                            </div>
                        </div>
                        <div class="progress">
                            <span class="progress-text">
                                2
                            </span>
                            <div id="rate_2" class="progress-bar progress-bar-striped" style="width: {{ round(($rate2/$voteAll)*100)}}%">
                            </div>
                        </div>
                        <div class="progress">
                            <span class="progress-text">
                                1
                            </span>
                            <div id="rate_1" class="progress-bar progress-bar-striped" style="width: {{ round(($rate1/$voteAll)*100)}}%">
                            </div>
                        </div>
                    </section>
                    <br>
                </div>
                <!-- Description -->
                <div class="col-lg-5 order-3">
                    <div class="">
                            <p class="text-danger"><span><strong class="text-info">Mahsulot kategoriyasi: </strong></span>{{ $product->category->categories }}</p>
                        <hr>
                        @if($product->d_of_h->degree_id == 1)
                            <p class="text-danger"><span><strong class="text-info">Xavflilik darajasi: </strong></span>{{ $product->d_of_h->degree_of_hazards }} <sup><span class="badge" style="color: white; font-size: 12px; background-color: #ff9917">{{ $product->d_of_h->degree_id }}</span></sup></p>
                        @elseif($product->d_of_h->degree_id == 2)
                            <p class="text-danger"><span><strong class="text-info">Xavflilik darajasi: </strong></span>{{ $product->d_of_h->degree_of_hazards }} <sup><span class="badge" style="color: white; font-size: 12px;  background-color: #FFE234">{{ $product->d_of_h->degree_id }}</span></sup></p>
                        @elseif($product->d_of_h->degree_id == 3)
                            <p class="text-danger"><span><strong class="text-info">Xavflilik darajasi: </strong></span>{{ $product->d_of_h->degree_of_hazards }} <sup><span class="badge" style="color: white; font-size: 12px; background-color: #ff9917">{{ $product->d_of_h->degree_id }}</span></sup></p>
                        @elseif($product->d_of_h->degree_id == 4)
                            <p class="text-danger"><span><strong class="text-info">Xavflilik darajasi: </strong></span>{{ $product->d_of_h->degree_of_hazards }} <sup><span class="badge" style="color: white; font-size: 12px; background-color: #ff6f13">{{ $product->d_of_h->degree_id }}</span></sup></p>
                        @elseif($product->d_of_h->degree_id == 5)
                            <p class="text-danger"><span><strong class="text-info">Xavflilik darajasi: </strong></span>{{ $product->d_of_h->degree_of_hazards }} <sup><span class="badge" style="color: white; font-size: 12px; background-color: red">{{ $product->d_of_h->degree_id }}</span></sup></p>
                        @endif
                            <div class="progress">
                            @if($product->d_of_h->degree_id == 1)
                                <div class="progress-bar progress-bar-striped progress-bar-animated" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%; background-color: #d4ff24"></div>
                            @elseif($product->d_of_h->degree_id == 2)
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 10%; background-color: #d4ff24"></div>
                                    <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:20%; background-color: #ffea3c"></div>
                            @elseif($product->d_of_h->degree_id == 3)
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 10%; background-color: #d4ff24"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:20%; background-color: #ffea3c"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:30%; background-color: #ffd031"></div>
                            @elseif($product->d_of_h->degree_id == 4)
                                <div class="progress-bar progress-bar-striped progress-bar-animated"  style="width:10%; background-color: #d4ff24"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:15%; background-color: #ffea3c"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:30%; background-color: #ffd031"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:35%; background-color: #ff5d13"></div>
                            @elseif($product->d_of_h->degree_id == 5)
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width: 20%; background-color: #d4ff24"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:40%; background-color: #ffea3c"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:60%; background-color: #ffd031"></div>
                                <div class="progress-bar progress-bar-striped progress-bar-animated" style="width:80%; background-color: #ff5d13"></div>
                                <div id="prog_5" class="progress-bar progress-bar-striped progress-bar-animated" style="width:100%; background-color: #ff160c"></div>
                            @endif
                            </div>
                        <hr>
                        <h4 class="text-dark product_name"><span><strong class="text-info">Mahsulot nomi: </strong></span>{!! $product->title !!}</h4>
                        <hr>
                        <h4 class="text-dark"><span><strong class="text-info">Kelib chiqishi: </strong></span>{!! $product->country->countries !!}</h4>
                        <hr>
                        <h4 class="text-dark"><span><strong class="text-info">Ishlab chiqarilgan sana: </strong></span>{{date('d.m.Y', strtotime($product->date_born)) }}</h4>
                        <hr>
                        <h4 class="text-dark"><span><strong class="text-info">Yaroqlilik muddati: </strong></span>{{ $product->date_death .' ' . $product->date_death_name }} </h4>
                        <hr>
                        <h4 class="text-dark"><span><strong class="text-info">Yaroqsizligi aniqlangan kun: </strong></span>{{ date("d.m.Y", strtotime($product->found_date))}} </h4>
                        <hr>
                        <h4 class="text-dark"><p><b class="text-info">Harid qilingan joyi: </b><br>{{ $product->buy_place }}</p></h4>
                        <hr>
                        <h4 class="text-dark product_text"><p><b class="text-info">Mahsulot haqida: </b><br>{{ $product->details }}</p></h4>
                        <hr>
                        <h4 class="text-dark"><p><b class="text-info">Mahsulot xavfi: </b><br>{{ $product->danger }}</p></h4>
                        <hr>
                        <h4 class="text-dark"><p><b class="text-info">Mahsulot aybi: </b><br>{{ $product->danger_type }}</p></h4>

                        <div class="order_info d-flex flex-row">
                            <h5 class="text-dark"><span><strong class="text-info">Mahsulot kiritilgan sana: </strong></span>{{ date_format($product->created_at, 'd.m.Y') }}</h5>
                        </div>
                        <div class="order_info d-flex flex-row">
                            <h5 class="text-dark"><span><strong class="text-success">Mahsulot kiritgan shaxs: </strong></span>{{ $product->user->name }}</h5>
                        </div>
                    </div>
                </div>
            </div>
            <div class="w-75" >
                <h2>Comments</h2>
                <div class="card" id="comments">
                    <hr>
                </div>
                    <div class="card-footer">
                        @if(Auth::check())
                        <form action="{{route('product.comment', ['product' => $product])}}" method="post">
                            {{ csrf_field() }}
                            <div class="form-group">
                                <label for="comment"></label>
                                <textarea id="comment" name="comment" class="form-control {{ $errors->has('comment') ? ' is-invalid' : '' }}" rows="5" placeholder="mahsulot haqida fikringiz"></textarea>
                                @if ($errors->has('comment'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('comment') }}</strong>
                                    </span>
                                @endif
                            </div>
                            <button type="submit" id="addComment" class="btn btn-outline">Send</button>
                        </form>

                        @else
                            <div class="card-footer">
                                <h5 class="text-info">O'z fikringizni qoldirish uchun <a href="/login" class="text-danger">Login </a> bo'lishingiz kerak bo'ladi</h5>
                            </div>
                        @endif
                        <script>
                            var url = '<?php echo route('show.comments', [$product])?>';
                            $(function () {
                                var page = 1;
                                function getDataInfo()
                                {
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                                        }
                                    });
                                    $.ajax({
                                        dataType: 'json',
                                        method: 'GET',
                                        url: url,
                                        data: {
                                            page: page,
                                        },
                                        success: function (data) {
                                            console.log(data)
                                            writeData(data);
                                        },
                                    });
                                }
                                getDataInfo();
                                function writeData(data) {
                                    var user = '';
                                    $.each(data, function (key, value) {
                                        if(value.product_id == '<?php echo $product->id;?>'){
                                                user = user + "<div class='card'>";
                                                user = user + "<div class='card-body'><h5>" + value.name + "</h5><hr></div>";
                                                user = user + "<div class='card-body'><p>" + value.comments + '</p></div>';
                                                user = user + '<div class="card-footer"><span class="float-right text-info">' + value.created_at + '</span></div>';
                                                user = user + "</div>";
                                                $('#comments').html(user);
                                            }
                                    });
                                }

                                $('#addComment').on('click', function(event){
                                    event.preventDefault();

                                     var value = $('#comment').val();
                                     var commentUrl = '<?php echo route('product.comment', [$product])?>';
                                    $.ajaxSetup({
                                        headers: {
                                            'X-CSRF-TOKEN': $("meta[name='csrf-token']").attr('content')
                                        }
                                    });
                                    $.ajax({

                                        type : 'post',
                                        dataType: 'JSON',
                                        url : commentUrl,
                                        data:{
                                            'comment':value
                                        },
                                        beforeSend: function(){
                                            $('#comments').html("<img src='{{ asset('aaaa.gif') }}' />")
                                        },
                                        success:function(){
                                            $('#comment').val('');
                                            $('#comments').load(commentUrl);
                                            getDataInfo();
                                            console.log()
                                        }
                                    });
                                });
                            });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Recently Viewed -->

    <div class="viewed">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="viewed_title_container">
                        <h3 class="viewed_title">Recently Viewed</h3>
                        <div class="viewed_nav_container">
                            <div class="viewed_nav viewed_prev"><i class="fas fa-chevron-left"></i></div>
                            <div class="viewed_nav viewed_next"><i class="fas fa-chevron-right"></i></div>
                        </div>
                    </div>

                    <div class="viewed_slider_container">

                        <!-- Recently Viewed Slider -->

                        <div class="owl-carousel owl-theme viewed_slider">

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('images/view_1.jpg') }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Beoplay H7</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('images/view_2.jpg') }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">LUNA Smartphone</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('images/view_3.jpg') }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225</div>
                                        <div class="viewed_name"><a href="#">Samsung J730F...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item is_new d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('images/view_4.jpg') }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$379</div>
                                        <div class="viewed_name"><a href="#">Huawei MediaPad...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item discount d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('images/view_5.jpg') }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$225<span>$300</span></div>
                                        <div class="viewed_name"><a href="#">Sony PS4 Slim</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Recently Viewed Item -->
                            <div class="owl-item">
                                <div class="viewed_item d-flex flex-column align-items-center justify-content-center text-center">
                                    <div class="viewed_image"><img src="{{ asset('images/view_6.jpg') }}" alt=""></div>
                                    <div class="viewed_content text-center">
                                        <div class="viewed_price">$375</div>
                                        <div class="viewed_name"><a href="#">Speedlink...</a></div>
                                    </div>
                                    <ul class="item_marks">
                                        <li class="item_mark item_discount">-25%</li>
                                        <li class="item_mark item_new">new</li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Brands -->

    <div class="brands">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="brands_slider_container">

                        <!-- Brands Slider -->

                        <div class="owl-carousel owl-theme brands_slider">

                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_1.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_2.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_3.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_4.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_5.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_6.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_7.jpg') }}" alt=""></div></div>
                            <div class="owl-item"><div class="brands_item d-flex flex-column justify-content-center"><img src="{{ asset('images/brands_8.jpg') }}" alt=""></div></div>

                        </div>

                        <!-- Brands Slider Navigation -->
                        <div class="brands_nav brands_prev"><i class="fas fa-chevron-left"></i></div>
                        <div class="brands_nav brands_next"><i class="fas fa-chevron-right"></i></div>

                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Newsletter -->

    <div class="newsletter">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="newsletter_container d-flex flex-lg-row flex-column align-items-lg-center align-items-center justify-content-lg-start justify-content-center">
                        <div class="newsletter_title_container">
                            <div class="newsletter_icon"><img src="{{ asset('images/send.png') }}" alt=""></div>
                            <div class="newsletter_title">Sign up for Newsletter</div>
                            <div class="newsletter_text"><p>...and receive %20 coupon for first shopping.</p></div>
                        </div>
                        <div class="newsletter_content clearfix">
                            <form action="#" class="newsletter_form">
                                <input type="email" class="newsletter_input" required="required" placeholder="Enter your email address">
                                <button class="newsletter_button">Subscribe</button>
                            </form>
                            <div class="newsletter_unsubscribe_link"><a href="#">unsubscribe</a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->

    <footer class="footer">
        <div class="container">
            <div class="row">

                <div class="col-lg-3 footer_col">
                    <div class="footer_column footer_contact">
                        <div class="logo_container">
                            <div class="logo"><a href="#">OneTech</a></div>
                        </div>
                        <div class="footer_title">Got Question? Call Us 24/7</div>
                        <div class="footer_phone">+38 068 005 3570</div>
                        <div class="footer_contact_text">
                            <p>17 Princess Road, London</p>
                            <p>Grester London NW18JR, UK</p>
                        </div>
                        <div class="footer_social">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-f"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter"></i></a></li>
                                <li><a href="#"><i class="fab fa-youtube"></i></a></li>
                                <li><a href="#"><i class="fab fa-google"></i></a></li>
                                <li><a href="#"><i class="fab fa-vimeo-v"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-lg-2 offset-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Find it Fast</div>
                        <ul class="footer_list">
                            <li><a href="#">Computers & Laptops</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Smartphones & Tablets</a></li>
                            <li><a href="#">TV & Audio</a></li>
                        </ul>
                        <div class="footer_subtitle">Gadgets</div>
                        <ul class="footer_list">
                            <li><a href="#">Car Electronics</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <ul class="footer_list footer_list_2">
                            <li><a href="#">Video Games & Consoles</a></li>
                            <li><a href="#">Accessories</a></li>
                            <li><a href="#">Cameras & Photos</a></li>
                            <li><a href="#">Hardware</a></li>
                            <li><a href="#">Computers & Laptops</a></li>
                        </ul>
                    </div>
                </div>

                <div class="col-lg-2">
                    <div class="footer_column">
                        <div class="footer_title">Customer Care</div>
                        <ul class="footer_list">
                            <li><a href="#">My Account</a></li>
                            <li><a href="#">Order Tracking</a></li>
                            <li><a href="#">Wish List</a></li>
                            <li><a href="#">Customer Services</a></li>
                            <li><a href="#">Returns / Exchange</a></li>
                            <li><a href="#">FAQs</a></li>
                            <li><a href="#">Product Support</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </footer>

    <!-- Copyright -->

    <div class="copyright">
        <div class="container">
            <div class="row">
                <div class="col">

                    <div class="copyright_container d-flex flex-sm-row flex-column align-items-center justify-content-start">
                        <div class="copyright_content"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="fa fa-heart" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank">Colorlib</a>
                            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
                        </div>
                        <div class="logos ml-sm-auto">
                            <ul class="logos_list">
                                <li><a href="#"><img src="{{asset('images/logos_1.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('images/logos_2.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('images/logos_3.png')}}" alt=""></a></li>
                                <li><a href="#"><img src="{{asset('images/logos_4.png')}}" alt=""></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<script src="{{ asset('js/raphael-min.js') }}"></script>
<script src="{{ asset('js/jquery.ratemate.js')}}"></script>
<script src="{{ asset('front/styles/bootstrap4/popper.js') }}"></script>
<script src="{{ asset('front/styles/bootstrap4/bootstrap.min.js') }}"></script>
<script src="{{ asset('front/plugins/greensock/TweenMax.min.js') }}"></script>
<script src="{{ asset('front/plugins/scrollmagic/ScrollMagic.min.js') }}"></script>
<script src="{{ asset('front/plugins/greensock/animation.gsap.min.js') }}"></script>
<script src="{{ asset('front/plugins/greensock/ScrollToPlugin.min.js') }}"></script>
<script src="{{ asset('front/plugins/OwlCarousel2-2.2.1/owl.carousel.js') }}"></script>
<script src="{{ asset('front/plugins/easing/easing.js') }}"></script>
<script src="{{ asset('front/js/product_custom.js') }}"></script>
</body>

</html>