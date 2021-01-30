<!DOCTYPE html>

<html lang="en"><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<!-- Meta -->

<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta content="Anil z" name="author">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="BokuFoods by Agrobint is an ecommerce membership program design to make organic farm produce available directly from farm. BokuFoods is an eco  modern organic food store for Farm shop, organic foods, agriculture and niche foods store.">
<meta name="keywords" content="food shop, fresh, fruits, organic farm, juice, free food, boku wallet, organic farm shop, organic food, organic shop, agriculture, cow, goat, fish, frozen, e-commerce, products, farm, farming, food, health, organic, organic food, retail, shop, store">

<!-- SITE TITLE -->
<title>Index - BokuFoods</title>
<!-- Favicon Icon -->
<link rel="shortcut icon" type="image/x-icon" href="frontend/./asset/img/favicon.png">
<!-- Animation CSS -->
<link rel="stylesheet" href="frontend/./asset/animate.css">	
<!-- Latest Bootstrap min CSS -->
<link rel="stylesheet" href="frontend/./asset/bootstrap.min.css">
<!-- Google Font -->
<link href="frontend/./asset/css" rel="stylesheet">  
<link href="frontend/./asset/css(1)" rel="stylesheet"> 
<!-- Icon Font CSS -->
<link rel="stylesheet" href="frontend/./asset/ionicons.min.css">
<!-- FontAwesome CSS -->
<link rel="stylesheet" href="frontend/./asset/all.min.css">
<!-- Themify Font CSS -->
<link rel="stylesheet" href="frontend/./asset/themify-icons.css">
<!--- owl carousel CSS-->
<link rel="stylesheet" href="frontend/./asset/owl.carousel.min.css">
<link rel="stylesheet" href="frontend/./asset/owl.theme.css">
<link rel="stylesheet" href="frontend/./asset/owl.theme.default.min.css">
<!-- Magnific Popup CSS -->
<link rel="stylesheet" href="frontend/./asset/magnific-popup.css">
<!-- jquery-ui CSS -->
<link rel="stylesheet" href="frontend/./asset/jquery-ui.css">
<!-- Style CSS -->
<link rel="stylesheet" href="frontend/./asset/style.css">
<link rel="stylesheet" href="frontend/./asset/responsive.css">
<link rel="stylesheet" id="layoutstyle" href="frontend/./asset/theme-default.css">

<script>
var sc_project=11981757; 
var sc_invisible=1; 
var sc_security="35d2687e"; 
var sc_https=1; 
</script>
<script src="frontend/./asset/counter.js.download" async=""></script>

</head>

<body>

<!-- LOADER -->
<div id="preloader" class="loaded" style="display: none;">
    <div class="line-scale">
    	<div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
    </div>
</div>
<!-- END LOADER --> 

<!-- START HEADER -->
<header class="header_wrap dark_skin main_menu_uppercase">
	<div class="top-header bg_gray">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7">
                	<ul class="contact_detail border_list list_none text-center text-md-left">
                        <li><a href="html#"><i class="ti-mobile"></i> <span>080-3001-1500</span></a></li>
                        <li><a href="html#"><i class="ti-email"></i> <span>info@bokufoods.ng</span></a></li>
                    </ul>
                </div>
                <div class="col-md-5">
                    <ul class="header_list border_list list_none header_dropdown text-center text-md-right">
                        <li>
                            <div class="custome_dropdown">
                                <div class="ddOutOfVision" id="msdrpdd20_msddHolder" style="height: 0px; overflow: hidden; position: absolute;"><select name="countries" class="custome_select" id="msdrpdd20">
                                    <option value="en" data-title="English">English</option>
                                    <option value="us" data-title="United States">United States</option>
                                </select>
                            </div>
                            </div>
                        </li>

                        <li class="dropdown">
                          <a class="dropdown-toggle" href="#" data-toggle="dropdown">My Account</a>
                          <div class="dropdown-menu shadow dropdown-menu-right">
                            <ul>
                                <li><a class="dropdown-item" href="https://bestwebcreator.com/organiq/demo/my-account.html">My account</a></li>
                                <li><a class="dropdown-item" href="https://bestwebcreator.com/organiq/demo/wishlist.html">Wishlist</a></li>
                                <li><a class="dropdown-item" href="https://bestwebcreator.com/organiq/demo/checkout.html">Checkout</a></li>
                            </ul>
                          </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <nav class="navbar navbar-expand-lg"> 
            {{-- <a class="navbar-brand" href="index.html">
                <img class="logo_light" src="frontend/./asset/img/logo_dark.png" alt="logo">
                <img class="logo_dark" src="frontend/./asset/img/boku_logo_new.png" alt="logo">
                <img class="logo_default" src="frontend/./asset/img/logo_dark.png" alt="logo">
            </a> --}}
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"> <span class="ion-android-menu"></span> </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarSupportedContent">
				<ul class="navbar-nav">
                    <li>
                        <a class="nav-link" href="index.html">Home</a>
                    </li>

                    <li>
                        <a class="nav-link" href="about.html">About Us</a>
                    </li>

                     <li>
                        <a class="nav-link" href="how_it_works.html">How it Works</a>
                    </li>

                      <li>
                        <a class="nav-link" href="{{ route('shop.page') }}">Shop</a>
                    </li>
                    
                      <li>
                        <a class="nav-link" href="faq.html">Faq</a>
                    </li>

                    <li> 
                        <a class="nav-link" href="contact.html">Contact Us</a>
                    </li>
                        
                </ul>
            </div>
            <ul class="navbar-nav attr-nav align-items-center">
                <li><a href="javascript:void(0);" class="nav-link search_trigger"><i class="ion-ios-search-strong"></i></a>
                    <div class="search-overlay">
                        <div class="search_wrap">
                            <form>
                                <div class="rounded_input">
                                	<input type="text" placeholder="Search" class="form-control" id="search_input">
                                </div>
                                <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                </li>
                <li class="dropdown cart_wrap">
                	<a class="nav-link" href="index.html#" data-toggle="dropdown"><i class="ion-bag"></i><span class="cart_count">2</span></a>
                        <div class="cart_box dropdown-menu dropdown-menu-right">
                            <ul class="cart_list">
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="frontend/./asset/img/cart_thamb1.jpg" alt="cart_thumb1">Fresh Organic Strawberry</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span>78.00</span></span>
                                </li>
                                <li>
                                    <a href="#" class="item_remove"><i class="ion-close"></i></a>
                                    <a href="#"><img src="frontend/./asset/img/asset/img/cart_thamb2.jpg" alt="cart_thumb2">Fresh Organic Grapes</a>
                                    <span class="cart_quantity"> 1 x <span class="cart_amount"> <span class="price_symbole">$</span>81.00</span></span>
                                </li>
                            </ul>
                        <div class="cart_footer">
                            <p class="cart_total">Total: <span class="cart_amount"> <span class="price_symbole">$</span>159.00</span></p>
                            <p class="cart_buttons"><a href="https://bestwebcreator.com/organiq/demo/cart.html" class="btn btn-default btn-radius view-cart">View Cart</a><a href="https://bestwebcreator.com/organiq/demo/checkout.html" class="btn btn-dark btn-radius checkout">Checkout</a></p>
                        </div>
                    </div>
                </li>
            </ul>
        </nav>
    </div>
</header>
<!-- END HEADER --> 
@php
  $slider = json_decode($sliders -> slider);
@endphp
<!-- START SECTION BANNER -->

<section class="banner w3-content">
<div class="container">
<div class="row">
<div class="col-lg-12">
<div id="drinks_slider" class="carousel slide" data-ride="carousel">
<div class="carousel-inner" role="listbox">

<div class="carousel-item active">
<a href="#">
<img class="d-block w-100" src="{{ URL::to('/') }}/media/slider/{{ $slider -> slider_image1 }}" alt="Hennessy Video Banner- November &amp; December">
</a></div>

<div class="carousel-item">
<a href="#">
<img class="d-block w-100" src="{{ URL::to('/') }}/media/slider/{{ $slider -> slider_image2 }}" alt="Hennessy Video Banner- November &amp; December">
</a></div>

<div class="carousel-item">
<a href="#">
<img class="d-block w-100" src="{{ URL::to('/') }}/media/slider/{{ $slider -> slider_image3 }}" alt="Hennessy Video Banner- November &amp; December">
</a></div>

<div class="carousel-item">
<a href="#">
<img class="d-block w-100" src="{{ URL::to('/') }}/media/slider/{{ $slider -> slider_image4 }}" alt="Hennessy Video Banner- November &amp; December">
</a></div>

</div>
<ol class="carousel-indicators">
<li data-target="#drinks_slider" data-slide-to="0" class="active"></li>
<li data-target="#drinks_slider" data-slide-to="1" class=""></li>
<li data-target="#drinks_slider" data-slide-to="2" class=""></li>
<li data-target="#drinks_slider" data-slide-to="3" class=""></li>
</ol>
</div>
</div>
</div>
</div>
</section>


<!--div class="w3-content">
 <img class="mySlides" src="frontend/./asset/img//banner2.jpg" alt="custom_html_banner1" style="width:100%">
 <button class="w3-button w3-black w3-display-left" onclick="plusDivs(-1)">&#10094;</button>
 <button class="w3-button w3-black w3-display-right" onclick="plusDivs(1)">&#10095;</button>
</div-->

<!--section class="banner_slider p-0">
    <!--div id="carouselExampleFade" class="carousel slide carousel-fade" data-ride="carousel">
        <!--div class="carousel-inner">
            <div class="carousel-item active bg_light_green background_bg" data-img-src="assets/img/banner2.jpg" style="background-image: url(&quot;assets/images/slide_bg_pattern.png&quot;); background-position: center center; background-size: cover;">
            	<div class="banner_slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1">
                                <div class="banner_content banner_content_pad animation animated fadeIn" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 10}" style="animation-delay: 0.4s; opacity: 1;">
                            <h2 class="animation animated fadeInDown" data-animation="fadeInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">Fresh Organic Foods &amp; Friuts.</h2>
                            <p class="animation" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 0;">Enjoy healthy organic foods from Boku Foods<br> directly from farm with a one time registration fee.</p>
                            <a class="btn btn-default btn-radius btn-borderd animation" href="shop.html" data-animation="fadeInUp" data-animation-delay="0.7s" style="animation-delay: 0.7s; opacity: 0;">Order Now</a>
                            <!--a class="btn btn-white btn-radius btn-borderd animation" href="contact.html" data-animation="fadeInUp" data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 0;">Contact Us</a>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>

                

                <!--div class="banner_shape">
                    <div class="shape1">
                    	<div class="animation animated rollIn" data-animation="rollIn" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape1.png" alt="shape1">
                        </div>
                    </div>
                    <div class="shape2">
                    	<div class="animation animated bounceInDown" data-animation="bounceInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape2.png" alt="shape2">
                        </div>
                    </div>
                    <div class="shape3">
                    	<div class="animation" data-animation="bounceInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape3.png" alt="shape3">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_yellow">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-xl-10">
                                <div class="banner_content border_shape text-center animation animated zoomIn" data-animation="zoomIn" data-animation-delay="0.4s" data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 10}" style="animation-delay: 0.4s; opacity: 1;">
                                    <h2 class="animation animated fadeInDown" data-animation="fadeInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">100% Organic Vegetable</h2>
                                    <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">Get Fresh vegitables directly from the farm delivered to you,<br> Vegitables nurishes the body.</p>
                                    <a class="btn btn-default btn-radius btn-borderd animation animated fadeInUp" href="shop.html" data-animation="fadeInUp" data-animation-delay="0.7s" style="animation-delay: 0.7s; opacity: 1;">Learn More</a>
                                    <a class="btn btn-white btn-radius btn-borderd animation animated fadeInUp" href="#" data-animation="fadeInUp" data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1;">Contact Us</a>
                        		</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape4">
                    	<div class="animation animated fadeInLeftBig" data-animation="fadeInLeftBig" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape4.png" alt="shape4">
                        </div>
                    </div>
                    <div class="shape5">
                    	<div class="animation animated slideInDown" data-animation="slideInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape5.png" alt="shape5">
                        </div>
                    </div>
                    <div class="shape6">
                    	<div class="animation animated bounceInDown" data-animation="bounceInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape6.png" alt="shape6">
                        </div>
                    </div>
                    <div class="shape7">
                    	<div class="animation animated fadeInRightBig" data-animation="fadeInRightBig" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape7.png" alt="shape7">
                        </div>
                    </div>
                    <div class="shape8">
                    	<div class="animation animated slideInUp" data-animation="slideInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape8.png" alt="shape8">
                        </div>
                    </div>
                    <div class="shape9">
                    	<div class="animation animated bounceInUp" data-animation="bounceInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape9.png" alt="shape9">
                        </div>
                    </div>
                    <div class="shape10">
                    	<div class="animation animated bounceInUp" data-animation="bounceInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape10.png" alt="shape10">
                        </div>
                    </div>
                    <div class="shape11">
                    	<div class="animation animated bounceInUp" data-animation="bounceInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape11.png" alt="shape11">
                        </div>
                    </div>
                </div>
            </div>
            <div class="carousel-item bg_light_blue">
                <div class="banner_slide_content">
                    <div class="container">
                        <div class="row">
                            <div class="col-xl-8 offset-xl-1 col-lg-9 offset-lg-1 col-md-10">
                                <div class="banner_content banner_content_pad animation animated fadeIn" data-animation="fadeIn" data-animation-delay="0.4s" data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 10}" style="animation-delay: 0.4s; opacity: 1;">
                            <h2 class="animation font_style1 animated fadeInDown" data-animation="fadeInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">The Fresh Organic Juices.</h2>
                            <p class="animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.6s" style="animation-delay: 0.6s; opacity: 1;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit<br class="d-none d-lg-block"> massa enim. Nullam id varius nunc id varius nunc.</p>
                            <a class="btn btn-default btn-radius btn-borderd animation animated fadeInUp" href="#" data-animation="fadeInUp" data-animation-delay="0.7s" style="animation-delay: 0.7s; opacity: 1;">Learn More</a>
                            <a class="btn btn-white btn-radius btn-borderd animation animated fadeInUp" href="#" data-animation="fadeInUp" data-animation-delay="0.8s" style="animation-delay: 0.8s; opacity: 1;">Contact Us</a>
                        </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="banner_shape">
                    <div class="shape12">
                    	<div class="animation animated slideInDown" data-animation="slideInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape12.png" alt="shape12">
                        </div>
                    </div>
                    <div class="shape13">
                    	<div class="animation animated slideInDown" data-animation="slideInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape13.png" alt="shape13">
                        </div>
                    </div>
                    <div class="shape14">
                    	<div class="animation animated zoomIn" data-animation="zoomIn" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape14.png" alt="shape14">
                        </div>
                    </div>
                    <div class="shape15">
                    	<div class="animation animated bounceInUp" data-animation="bounceInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape15.png" alt="shape15">
                        </div>
                    </div>
                    <div class="shape16">
                    	<div class="animation animated zoomInUp" data-animation="zoomInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape16.png" alt="shape16">
                        </div>
                    </div>
                    <div class="shape17">
                    	<div class="animation animated slideInLeft" data-animation="slideInLeft" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 1;">
                    		<img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape17.png" alt="shape17">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <a class="carousel-control-prev" href="#carouselExampleFade" role="button" data-slide="prev"><i class="ion-chevron-left"></i></a>
    <a class="carousel-control-next" href="#carouselExampleFade" role="button" data-slide="next"><i class="ion-chevron-right"></i></a>
    </div>
</section-->
<!-- END SECTION BANNER -->

<!-- START SECTION BANNER BOX -->
<section>
	<div class="container">
    	<div class="row">
        	<div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.2s" style="animation-delay: 0.2s; opacity: 0;">
            	<div class="banner_box box_shadow4 radius_all_10">
                	<div class="banner_text">
                    	<h3>Grains Flours & Oil</h3>
                        <p>100% Pure Natural Friut Juice</p>
                        <em><a href="shop.html"><u>Shop Now</u></a></em>
                    </div>
                    <div class="banner_img">
                    	<img src="frontend/./asset/img/banner_img1.png" alt="banner_img1">
                    </div>
                </div>
            </div>
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.3s" style="animation-delay: 0.3s; opacity: 0;">
            	<div class="banner_box box_shadow4 radius_all_10">
                	<div class="banner_text">
                    	<h3>Fruits, Vegitables, Juice</h3>
                        <p>100% Pure Natural Friut Juice</p>
                        <em><a href="shop.html"><u>Shop Now</u></a></em>
                    </div>
                    <div class="banner_img">
                    	<img src="frontend/./asset/img/banner_img2.png" alt="banner_img2">
                    </div>
                </div>
            </div>
            <div class="col-md-4 animation" data-animation="bounceInUp" data-animation-delay="0.4s" style="animation-delay: 0.4s; opacity: 0;">
            	<div class="banner_box box_shadow4 radius_all_10">
                	<div class="banner_text">
                    	<h3>Chicken Meat & Spices </h3>
                        <p>100% Organic Chicken and Meat</p>
                        <em><a href="shop.html"><u>Shop Now</u></a></em>
                    </div>
                    <div class="banner_img">
                    	<img src="frontend/./asset/img/banner_img3.png" alt="banner_img3">
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BANNER BOX -->

<!-- START SECTION WHY CHOOSE US -->
<section class="bg_gray">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-4 col-md-6 col-sm-8 text-center">
                <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                    <h2>Why Choose Us</h2>
                </div>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;"> Lorem ipsum dolor sit amet, consectetur blandit magna adipiscing elit. </p>
            </div>
        </div>
        <div class="row align-items-center">
        	<div class="col-lg-4 col-md-6">
            	<div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
                	<div class="box_icon">
                		<img src="frontend/./asset/img/icon1.png" alt="icon1">
                    </div>
                    <div class="intro_desc">
                        <h6>Natural Organic Fruits</h6>
                        <p>Lorem ipsum dolor consectetur adipiscing Phasellus blandit.</p>
                    </div>
                </div>
                <div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 0;">
                	<div class="box_icon">
                		<img src="frontend/./asset/img/icon2.png" alt="icon2">
                    </div>
                    <div class="intro_desc">
                        <h6>Fresh Vegetables</h6>
                        <p>Lorem ipsum dolor consectetur adipiscing Phasellus blandit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 order-lg-last">
            	<div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
                	<div class="box_icon">
                		<img src="frontend/./asset/img/icon3.png" alt="icon3">
                    </div>
                    <div class="intro_desc">
                        <h6>100% Organic Juices</h6>
                        <p>Lorem ipsum dolor consectetur adipiscing Phasellus blandit.</p>
                    </div>
                </div>
                <div class="icon_box icon_box_style1 bg-white radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 0;">
                	<div class="box_icon">
                		<img src="frontend/./asset/img/icon4.png" alt="icon4">
                    </div>
                    <div class="intro_desc">
                        <h6>Natural Organic Tea</h6>
                        <p>Lorem ipsum dolor consectetur adipiscing Phasellus blandit.</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-sm-12">
                <div class="why_choose_img bounceimg">
                    <img src="frontend/./asset/img/why_choose_img.png" alt="why_choose_img">
                </div>
            </div>
        </div>
    </div>
    <div class="wave_shape"><img src="frontend/./asset/img/wave_shape.png" alt="wave_shape"></div>
    <div class="overlap_shape">
        <div class="ol_shape1">
            <div class="animation" data-animation="bounceInDown" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape18.png" alt="shape18">
            </div>
        </div>
        <div class="ol_shape2">
            <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape19.png" alt="shape19">
            </div>
        </div>
        <div class="ol_shape3">
            <div class="animation" data-animation="zoomIn" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape20.png" alt="shape20">
            </div>
        </div>
        <div class="ol_shape4">
            <div class="animation" data-animation="bounceInUp" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape21.png" alt="shape21">
            </div>
        </div>
        <div class="ol_shape5">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape22.png" alt="shape22">
            </div>
        </div>
        <div class="ol_shape6">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape23.png" alt="shape23">
            </div>
        </div>
        <div class="ol_shape7">
            <div class="animation" data-animation="slideInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape24.png" alt="shape24">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION WHY CHOOSE US -->

<!-- START SECTION PRODUCT -->
<section class="pb_70">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8 col-sm-10 text-center">
                <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                    <h2>Best Organic Foods</h2>
                </div>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">We make organic foods accessible and afordable for our members.</p>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-12">
                <div class="product_content">
                    <ul class="nav nav-tabs justify-content-center animation" data-animation="fadeInUp" data-animation-delay="0.04s" role="tablist" style="animation-delay: 0.04s; opacity: 0;">
                      <li class="nav-item">
                        <a class="nav-link active" id="tab1" data-toggle="tab" href="#tab-1" role="tab" aria-controls="tab-1" aria-selected="true"><span class="pr_icon1"></span>All Product</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><span class="pr_icon2"></span>Vegetables</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab2" data-toggle="tab" href="#tab-2" role="tab" aria-controls="tab-2" aria-selected="false"><span class="pr_icon2"></span>Grains</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab3" data-toggle="tab" href="#tab-3" role="tab" aria-controls="tab-3" aria-selected="false"><span class="pr_icon3"></span>Fruits</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab4" data-toggle="tab" href="#tab-4" role="tab" aria-controls="tab-4" aria-selected="false"><span class="pr_icon4"></span>Juices</a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" id="tab5" data-toggle="tab" href="#tab-5" role="tab" aria-controls="tab-5" aria-selected="false"><span class="pr_icon5"></span>Tea</a>
                      </li>
                    </ul>
                    <div class="small_divider clearfix"></div>
                    <div class="tab-content">
                        <div class="tab-pane fade show active" id="tab-1" role="tabpanel" aria-labelledby="tab1">
                            <div class="row animation" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 0;">

                                @foreach( $products as $product )
                            	<div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_green">Sale</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="{{ URL::to('/') }}/media/product/{{ $product -> product_image }}" alt="product_img1"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">{{ $product -> name }}</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">${{ $product -> price }}</span>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-2" role="tabpanel" aria-labelledby="tab2">
                            <div class="row animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 1;">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_orange">-10%</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img2.jpg" alt="product_img2"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Grapes</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$40.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img3.jpg" alt="product_img3"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Cucumber</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                            <span class="price">$52.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img5.jpg" alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">100% Organic Juices</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                            <span class="price">$33.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img6.jpg" alt="product_img6"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Banana</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                            <span class="price">$42.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_red">Hot</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img7.jpg" alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Tomato</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_orange">-25%</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img8.jpg" alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Carrots</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$32.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-3" role="tabpanel" aria-labelledby="tab3">
                            <div class="row animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 1;">
                            	<div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_green">Sale</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img1.jpg" alt="product_img1"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Strawberry</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$35.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_orange">-10%</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img2.jpg" alt="product_img2"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Grapes</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$40.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_green">Sale</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img4.jpg" alt="product_img4"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Orange</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                            <span class="price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img5.jpg" alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">100% Organic Juices</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                            <span class="price">$33.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_red">Hot</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img7.jpg" alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Tomato</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_orange">-25%</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img8.jpg" alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Carrots</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$32.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-4" role="tabpanel" aria-labelledby="tab4">
                            <div class="row animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 1;">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_green">Sale</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img4.jpg" alt="product_img4"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Orange</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                            <span class="price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img5.jpg" alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">100% Organic Juices</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                            <span class="price">$33.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img6.jpg" alt="product_img6"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Banana</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                            <span class="price">$42.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_red">Hot</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img7.jpg" alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Tomato</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_orange">-25%</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img8.jpg" alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Carrots</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$32.00</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab-5" role="tabpanel" aria-labelledby="tab5">
                            <div class="row animation animated fadeInUp" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 1;">
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_red">Hot</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img7.jpg" alt="product_img7"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Tomato</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$54.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img3.jpg" alt="product_img3"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Cucumber</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                            <span class="price">$52.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_green">Sale</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img4.jpg" alt="product_img4"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Orange</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                            <span class="price">$39.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_orange">-10%</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img2.jpg" alt="product_img2"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Grapes</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$40.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img5.jpg" alt="product_img5"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">100% Organic Juices</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                            <span class="price">$33.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_orange">-25%</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img8.jpg" alt="product_img8"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Carrots</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$32.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img6.jpg" alt="product_img6"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Banana</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                            <span class="price">$42.00</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-xl-3 col-lg-4 col-sm-6">
                                	<div class="product">
                                    	<span class="pr_flash bg_green">Sale</span>
                                    	<div class="product_img">
                                        	<a href="#"><img src="frontend/./asset/img/product_img1.jpg" alt="product_img1"></a>
                                            <div class="product_action_box">
                                                <ul class="list_none pr_action_btn">
                                                    <li><a href="#"><i class="ti-heart"></i></a></li>
                                                    <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                                    <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="product_info">
                                        	<h6><a href="#">Fresh Organic Strawberry</a></h6>
                                            <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                            <span class="price">$35.00</span>
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
    <div class="overlap_shape">
        <div class="ol_shape8">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape25.png" alt="shape25">
            </div>
        </div>
        <div class="ol_shape9">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape26.png" alt="shape26">
            </div>
        </div>
        <div class="ol_shape10">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape27.png" alt="shape27">
            </div>
        </div>
        <div class="ol_shape11">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape28.png" alt="shape28">
            </div>
        </div>
        <div class="ol_shape12">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape29.png" alt="shape29">
            </div>
        </div>
        <div class="ol_shape13">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape30.png" alt="shape30">
            </div>
        </div>
        <div class="ol_shape14">
            <div class="bounceimg" data-animation="fadeInRight" data-animation-delay="0.5s">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape31.png" alt="shape31">
            </div>
        </div>
    </div>
</section>
<!-- START SECTION PRODUCT -->

<!-- START SECTION DEAL OF THE DAY -->
<section class="bg_light_blue">
    <div class="container">
        <div class="row justify-content-between align-items-center">
            <div class="col-lg-6 col-md-7">
            	<div class="deal_content text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                        <h2>Special discount <br> for all food products</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim Nullam nunc varius.</p>
                    <div class="countdown_time animation" data-animation="fadeInUp" data-animation-delay="0.04s" data-time="2020/05/08 00:00:00" style="animation-delay: 0.04s; opacity: 0;"><div class="countdown_box"><div class="countdown_content"><span class="countdown days">00 </span><span class="cd_text">Days</span></div></div><div class="countdown_box"><div class="countdown_content"><span class="countdown hours">00</span><span class="cd_text">Hrs</span></div></div><div class="countdown_box"><div class="countdown_content"><span class="countdown minutes">00</span><span class="cd_text">Min</span></div></div><div class="countdown_box"><div class="countdown_content"><span class="countdown seconds">00</span><span class="cd_text">Sec</span></div></div></div>
                    <a href="#" class="btn btn-default btn-radius btn-borderd animation" data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">See Offer Now</a>
                </div>
            </div>
            <div class="col-lg-6 col-md-5">
                <div class="deal_img_wrap bounceimg animation" data-animation="zoomIn" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                	<img src="frontend/./asset/img/deal_img.png" alt="deal_img">
                </div>
                <div class="circle_bg1">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape15">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: -30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape32.png" alt="shape32">
            </div>
        </div>
        <div class="ol_shape16">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 30, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape33.png" alt="shape33">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION DEAL OF THE DAY -->

<!-- START SECTION FEATURE PRODUCT -->
<section>
	<div class="container">	
    	<div class="row">
        	<div class="col-lg-6 col-md-8">
                <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                    <h2>Featured Products</h2>
                </div>
                <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                <div class="small_divider clearfix"></div>
            </div>
        </div>
        <div class="row">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
            	<div class="product_slider product_list carousel_slide3 owl-carousel owl-theme nav_top_right owl-loaded owl-drag" data-margin="30" data-dots="false" data-nav="true">
                <div class="owl-stage-outer owl-height" style="height: 378px;"><div class="owl-stage" style="transform: translate3d(0px, 0px, 0px); transition: all 0s ease 0s; width: 1900px;"><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img1.jpg" alt="product_img1"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Strawberry</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$35.00</span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img4.jpg" alt="product_img4"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Orange</a></h6>
                                <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                <span class="price">$39.00</span>
                            </div>
                        </div>

                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img7.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$54.00</span>
                            </div>
                        </div>
                        
                    </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img2.jpg" alt="product_img2"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Grapes</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$40.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img5.jpg" alt="product_img5"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">100% Organic Juices</a></h6>
                                <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                <span class="price">$33.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img8.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$32.00</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img3.jpg" alt="product_img3"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Cucumber</a></h6>
                                <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                <span class="price">$52.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img6.jpg" alt="product_img6"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Banana</a></h6>
                                <div class="rating"><div class="product_rate" style="width:60%"></div></div>
                                <span class="price">$42.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img9.jpg" alt="product_img9"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh pineapple</a></h6>
                                <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                <span class="price">$22.00</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 350px; margin-right: 30px;"><div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img2.jpg" alt="product_img2"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Grapes</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$40.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img5.jpg" alt="product_img5"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">100% Organic Juices</a></h6>
                                <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                <span class="price">$33.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img8.jpg" alt="product_img8"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Carrots</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$32.00</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item" style="width: 350px; margin-right: 30px;"><div class="items">
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img1.jpg" alt="product_img1"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Strawberry</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$35.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img4.jpg" alt="product_img4"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Orange</a></h6>
                                <div class="rating"><div class="product_rate" style="width:100%"></div></div>
                                <span class="price">$39.00</span>
                            </div>
                        </div>
                        <div class="product">
                            <div class="product_img">
                                <a href="#"><img src="frontend/./asset/img/product_img7.jpg" alt="product_img7"></a>
                                <div class="product_action_box">
                                    <ul class="list_none pr_action_btn">
                                        <li><a href="#"><i class="ti-heart"></i></a></li>
                                        <li><a href="#"><i class="ti-shopping-cart"></i></a></li>
                                        <li><a href="http://bestwebcreator.com//organiq/demo/shop-quick-view.html" class="popup-ajax"><i class="ti-eye"></i></a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="product_info">
                                <h6><a href="#">Fresh Organic Tomato</a></h6>
                                <div class="rating"><div class="product_rate" style="width:80%"></div></div>
                                <span class="price">$54.00</span>
                            </div>
                        </div>

                    </div></div></div></div><div class="owl-nav"><div class="owl-prev disabled"><i class="ion-ios-arrow-back"></i></div><div class="owl-next"><i class="ion-ios-arrow-forward"></i></div></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION FEATURE PRODUCT -->

<!-- START SECTION TESTIMONIAL -->
<section class="bg_gray">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                    <div class="heading_s1 text-center">
                        <h2>Our Member Say!</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                </div>
                <div class="small_divider"></div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
            	<div class="testimonial_slider testimonial_style1 carousel_slide3 owl-carousel owl-theme owl-loaded owl-drag" data-margin="30" data-loop="true" data-autoplay="true" data-dots="false">
                    
                    
                    
                <div class="owl-stage-outer owl-height" style="height: 285px;"><div class="owl-stage" style="transform: translate3d(-1140px, 0px, 0px); transition: all 0.25s ease 0s; width: 3420px;"><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img1.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Merry Walter</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img2.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>John Mark</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img3.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Calvin William</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img1.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Merry Walter</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img2.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>John Mark</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item active" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img3.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Calvin William</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img1.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Merry Walter</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img2.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>John Mark</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div><div class="owl-item cloned" style="width: 350px; margin-right: 30px;"><div class="testimonial_box">
                        <div class="testi_desc">
                            	<p>BokuFoods membership program is the best program making organic food afordable and accessible.</p>
                            </div>
                        <div class="testi_meta">
                        	<div class="testimonial_img">
                                <img src="frontend/./asset/img/client_img3.jpg" alt="client">
                            </div>
                        	<div class="testi_user">
                            	<h5>Calvin William</h5>
                                <span>Web Designer</span>
                            </div>
                        </div>
                    </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="ion-ios-arrow-back"></i></div><div class="owl-next"><i class="ion-ios-arrow-forward"></i></div></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape17">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/testimonial_bg_img1.jpg" alt="testimonial_bg_img1">
            </div>
        </div>
        <div class="ol_shape18">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/testimonial_bg_img2.png" alt="testimonial_bg_img2">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION TESTIMONIAL -->

<!-- START SECTION BLOG -->
<!--section class="pb_20">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                        <h2>Blog News</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Phasellus blandit massa enim. Nullam id varius nunc id varius nunc.</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
                	<div class="blog_img">
                        <a href="#">
                            <img src="frontend/./asset/img/blog_small_img1.jpg" alt="blog_small_img1">
                        </a>
                        <div class="blog_date style1"><h4>02</h4><span>May</span></div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                            <li><a href="#"><i class="far fa-comments"></i>4 Comment</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.05s" style="animation-delay: 0.05s; opacity: 0;">
                	<div class="blog_img">
                        <a href="#">
                            <img src="frontend/./asset/img/blog_small_img2.jpg" alt="blog_small_img2">
                        </a>
                        <div class="blog_date style1"><h4>25</h4><span>Mar</span></div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                            <li><a href="#"><i class="far fa-comments"></i>3 Comment</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
            	<div class="blog_post blog_style1 radius_all_10 animation" data-animation="fadeInUp" data-animation-delay="0.06s" style="animation-delay: 0.06s; opacity: 0;">
                	<div class="blog_img">
                        <a href="#">
                            <img src="frontend/./asset/img/blog_small_img3.jpg" alt="blog_small_img3">
                        </a>
                        <div class="blog_date style1"><h4>08</h4><span>Aug</span></div>
                    </div>
                    <div class="blog_content">
                        <h6 class="blog_title"><a href="#">Varius Phasellus blandit massa enim</a></h6>
                        <ul class="list_none blog_meta">
                            <li><a href="#"><i class="far fa-user"></i>by <span class="text_default">admin</span></a></li>
                            <li><a href="#"><i class="far fa-comments"></i>5 Comment</a></li>
                        </ul>
                        <p>Phasellus blandit massa enim elit variununc Lorems ipsum dolor sit consectetur industry. If you are use passage of Lorem Ipsum.</p>
                        <a href="#" class="blog_link">Read More <i class="ion-ios-arrow-right"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION BLOG -->

<!-- START SECTION CLIENT LOGO -->
<section class="small_pt">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-xl-6 col-lg-8">
            	<div class="text-center">
                    <div class="heading_s1 text-center animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                        <h2>Our partner</h2>
                    </div>
                    <p class="animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">Register on agrobint.com to partner with us and offer your products to millions of our members.</p>
                    <div class="small_divider"></div>
                </div>
            </div>
        </div>
    	<div class="row">
        	<div class="col-12 animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
            	<div class="carousel_slide5 owl-carousel owl-theme owl-loaded owl-drag" data-margin="30" data-dots="false" data-loop="true" data-autoplay="true">
                	
                    
                    
                    
                    
                <div class="owl-stage-outer owl-height" style="height: 146px;"><div class="owl-stage" style="transform: translate3d(-1368px, 0px, 0px); transition: all 0.25s ease 0s; width: 3420px;"><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo1.png" alt="cl_logo1"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo2.png" alt="cl_logo2"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo3.png" alt="cl_logo3"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo4.png" alt="cl_logo4"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo5.png" alt="cl_logo5"></a>
                    </div></div><div class="owl-item" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo1.png" alt="cl_logo1"></a>
                    </div></div><div class="owl-item active" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo2.png" alt="cl_logo2"></a>
                    </div></div><div class="owl-item active" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo3.png" alt="cl_logo3"></a>
                    </div></div><div class="owl-item active" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo4.png" alt="cl_logo4"></a>
                    </div></div><div class="owl-item active" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo5.png" alt="cl_logo5"></a>
                    </div></div><div class="owl-item cloned active" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo1.png" alt="cl_logo1"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo2.png" alt="cl_logo2"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo3.png" alt="cl_logo3"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo4.png" alt="cl_logo4"></a>
                    </div></div><div class="owl-item cloned" style="width: 198px; margin-right: 30px;"><div class="items">
                    	<a href="#"><img src="frontend/./asset/img/cl_logo5.png" alt="cl_logo5"></a>
                    </div></div></div></div><div class="owl-nav disabled"><div class="owl-prev"><i class="ion-ios-arrow-back"></i></div><div class="owl-next"><i class="ion-ios-arrow-forward"></i></div></div><div class="owl-dots disabled"></div></div>
            </div>
        </div>
    </div>
</section>
<!-- END SECTION CLIENT LOGO -->

<!-- END SECTION NEWSLATTER -->
<section class="bg_light_green newslatter_wrap">
	<div class="container">
    	<div class="row justify-content-center">
        	<div class="col-lg-6 col-md-8 text-center">
                <div class="heading_s1 animation" data-animation="fadeInUp" data-animation-delay="0.02s" style="animation-delay: 0.02s; opacity: 0;">
                    <h2>Subscribe Our Newsletter</h2>
                </div>
                <p class="m-0 animation" data-animation="fadeInUp" data-animation-delay="0.03s" style="animation-delay: 0.03s; opacity: 0;">Join our mailing list to get the latest offer.</p>
                <div class="small_divider"></div> 
                <div class="newsletter_form animation" data-animation="fadeInUp" data-animation-delay="0.04s" style="animation-delay: 0.04s; opacity: 0;">
                    <form> 
                        <div class="rounded_input">
                           <input type="text" class="form-control" required="" placeholder="Enter your Email Address">
                        </div>
                        <button type="submit" title="Subscribe" class="btn btn-default" name="submit" value="Submit">subscribe</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape19">
            <div class="animation" data-animation="fadeInLeft" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape34.png" alt="shape34">
            </div>
        </div>
        <div class="ol_shape20">
            <div class="animation" data-animation="fadeInRight" data-animation-delay="0.5s" style="animation-delay: 0.5s; opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape35.png" alt="shape35">
            </div>
        </div>
    </div>
</section>
<!-- END SECTION NEWSLATTER -->

<!-- START FOOTER -->
<footer class="bg_gray">
	<div class="top_footer small_pt small_pb">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                	<div class="footer_logo">
                    	<a href="#"><img alt="logo" src="frontend/./asset/img/boku_logo_new.png"></a>
                    </div>
                    <div class="footer_desc">
                    	<p>BOKUFoods a brand of <a href="https://www.agrobint.com/" target="_blank">Agrobint.</a></p>
                    </div>
                    <ul class="contact_info list_none">
                    	<li>
                            <span class="ti-mobile"></span>
                            <p>+234-80-3003-5577</p>
                        </li>
                        <li>
                            <span class="ti-email"></span>
                            <a href="mailto:info@bokufoods.ng">info@bokufoods.ng</a>
                        </li>
                        <li>
                            <span class="ti-location-pin"></span>
                            <address>Suite C204 Akord Mall Ibeju Lekki Lagos</address>
                        </li>
                    </ul>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4">
                	<h5 class="widget_title">Information</h5>

                    <ul class="list_none widget_links">             
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="how_it_works.html">How it works</a></li>
                <li><a href="faq.html">Faq</a></li>
                    </ul>
                </div>

                <div class="col-lg-2 col-md-3 col-sm-4">
                	<h5 class="widget_title">Support</h5>
                    <ul class="list_none widget_links">
                    <li><a href="#">My Account</a></li>
                   <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms and Conditions</a></li>
                    <li><a href="contact.html">Contact Us</a></li>
                    </ul>

                </div>
                <div class="col-lg-4 col-md-6 col-sm-4">
                	<h5 class="widget_title">Gallery</h5>
                    <ul class="list_none instafeed">
                    	<li><a href="#"><img src="frontend/./asset/img/insta_img1.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/insta_img2.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/insta_img3.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/insta_img4.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/insta_img5.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/insta_img6.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="##"><img src="frontend/./asset/img/insta_img7.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/insta_img8.jpg" alt="insta_img"><span class="insta_icon"><i class="ti-instagram"></i></span></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="middle_footer">
    	<div class="container">
        	<div class="row">
            	<div class="col-12">
                	<div class="shopping_info">
                        <div class="row justify-content-center">
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="fas fa-truck"></i>
                                    </div>
                                    <div class="intro_desc">
                                    	<h5>Free Delivery</h5>
                                        <p>Order food items and get it deliver to you for FREE</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="fas fa-dollar-sign"></i>
                                    </div>
                                    <div class="intro_desc">
                                    	<h5>Organic Product</h5>
                                        <p>Organic products directly from the farm</p>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">	
                                <div class="icon_box icon_box_style2">
                                    <div class="box_icon">
                                        <i class="far fa-life-ring"></i>
                                    </div>
                                    <div class="intro_desc">
                                    	<h5>24/7 Online Support</h5>
                                        <p>Our support staff are available 24 hours a day, 7 days a week</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="bottom_footer">
    	<div class="container">
        	<div class="row align-items-center">
            	<div class="col-lg-4">
                    <p class="copyright m-lg-0 text-center">{{ $sliders -> copyright }}</p>
                </div>
                <div class="col-lg-4 order-lg-first">
                    <ul class="list_none footer_payment text-center text-lg-left">
                        <li><a href="#"><img src="frontend/./asset/img/visa.png" alt="visa"></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/master_card.png" alt="master_card"></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/paystack.png" alt="paystack"></a></li>
                        <li><a href="#"><img src="frontend/./asset/img/paypal.png" alt="bitcoin"></a></li>
                       
                    </ul>
                </div>
                @php
                 $social_json = json_decode($sliders -> social);
                @endphp
                <div class="col-lg-4">
                    <ul class="list_none social_icons radius_social text-center text-lg-right">
                        <li><a href="{{ $social_json -> facebook }}" class="sc_facebook"><i class="fab fa-facebook-f"></i></a></li>
                        <li><a href="{{ $social_json -> instragram }}" class="sc_twitter"><i class="fab fa-twitter"></i></a></li>
                        <li><a href="{{ $social_json -> tiwtter }}" class="sc_google"><i class="fab fa-google-plus-g"></i></a></li>
                        <li><a href="{{ $social_json -> google }}" class="sc_instagram"><i class="fab fa-instagram"></i></a></li>
                        <li><a href="{{ $social_json -> pinterest }}" class="sc_pinterest"><i class="fab fa-pinterest"></i></a></li>
                    </ul>
                </div>

            </div>
        </div>
    </div>
    <div class="overlap_shape">
        <div class="ol_shape21">
            <div class="animation" style="opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape36.png" alt="shape36">
            </div>
        </div>
        <div class="ol_shape22">
            <div class="animation" style="opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape37.png" alt="shape37">
            </div>
        </div>
        <div class="ol_shape23">
            <div class="animation" style="opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape38.png" alt="shape38">
            </div>
        </div>
        <div class="ol_shape24">
            <div class="animation" style="opacity: 0;">
                <img data-parallax="{&quot;y&quot;: 20, &quot;smoothness&quot;: 20}" src="frontend/./asset/img/shape39.png" alt="shape39">
            </div>
        </div>
    </div>
</footer>
<!-- END FOOTER -->

<a href="#" class="scrollup" style="display: none;"><i class="ion-ios-arrow-up"></i></a> 

<!-- Latest jQuery --> 
<script src="frontend/./asset/jquery-1.12.4.min.js.download"></script> 
<!-- jquery-ui --> 
<script src="frontend/./asset/jquery-ui.js.download"></script>
<!-- popper min js --> 
<script src="frontend/./asset/popper.min.js.download"></script>
<!-- Latest compiled and minified Bootstrap --> 
<script src="frontend/./asset/bootstrap.min.js.download"></script> 
<!-- owl-carousel min js  --> 
<script src="frontend/./asset/owl.carousel.min.js.download"></script> 
<!-- magnific-popup min js  --> 
<script src="frontend/./asset/magnific-popup.min.js.download"></script> 
<!-- waypoints min js  --> 
<script src="frontend/./asset/waypoints.min.js.download"></script> 
<!-- parallax js  --> 
<script src="frontend/./asset/parallax.js.download"></script> 
<!-- jquery dd js  --> 
<script src="frontend/./asset/jquery.dd.min.js.download"></script>
<!-- countdown js  --> 
<script src="frontend/./asset/jquery.countdown.min.js.download"></script> 
<!-- jquery.counterup.min js --> 
<script src="frontend/./asset/jquery.counterup.min.js.download"></script>
<!-- jquery.parallax-scroll js -->
<script src="frontend/./asset/jquery.parallax-scroll.js.download"></script>
<!-- elevatezoom js -->
<script src="frontend/./asset/jquery.elevatezoom.js.download"></script>
<!-- fit video  -->
<script src="frontend/./asset/jquery.fitvids.js.download"></script>
<!-- imagesloaded js --> 
<script src="frontend/./asset/imagesloaded.pkgd.min.js.download"></script>
<!-- isotope min js --> 
<script src="frontend/./asset/isotope.min.js.download"></script>
<!-- cookie js -->
<script src="frontend/./asset/js.cookie.js.download"></script>
<!-- scripts js --> 
<script src="frontend/./asset/scripts.js.download"></script>


</body></html>