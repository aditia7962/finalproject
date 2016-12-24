<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>TrendSetter / Home</title>
    <meta content="" name="description"/>
    <meta content="" name="keywords"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta content="telephone=no" name="format-detection"/>
    <meta name="HandheldFriendly" content="true"/>
    <link rel="stylesheet" href="<?=base_url()?>assests/assets/css/master.css"/>
    <link rel="icon" type="image/x-icon" href="favicon.ico"/>
  </head>
  <body>
    <!-- Loader--> 
  <div class="screen-loader">
       <div class="loading"> 
        <span class="loader_span"> 
            <span class="loader_right"></span> 
            <span class="loader_left"></span> 
        </span>
    </div>
      <div class="sl-top"></div>
      <div class="sl-bottom"></div>
   </div>      
    <!-- Loader end-->
    
    <div  class="l-theme">
      <!-- ==========================-->
      <!-- SEARCH MODAL-->
      <!-- ==========================-->
      <div class="header-search open-search">
        <div class="container">
          <div class="row">
            <div class="col-sm-8 col-sm-offset-2 col-xs-10 col-xs-offset-1">
              <div class="navbar-search">
                <form class="search-global">
                  <input type="text" placeholder="Type to search" autocomplete="off" name="s" value="" class="search-global__input"/>
                  <button class="search-global__btn"><i class="icon fa fa-search"></i></button>
                  <div class="search-global__note">Begin typing your search above and press return to search.</div>
                </form>
              </div>
            </div>
          </div>
        </div>
        <button type="button" class="search-close close"><i class="fa fa-times"></i></button>
      </div>
      <!-- ==========================-->
      <!-- MOBILE MENU-->
      <!-- ==========================-->
      <div data-off-canvas="mobile-slidebar left overlay" class="mobile-slidebar ">
          
         <ul class="nav navbar-nav">
                <li><a href="home.html">Home</a></li>
                <li><a href="<?=base_url()?>office" >Office Supplies</a></li>
                <li ><a href="gallery-1.html" >Technology</a></li>
                <li><a href="blog-post.html" >Furniture</a></li>
              </ul>
     </div>
        
      <!-- ==========================-->
      <!-- POPAP MENU-->
      <!-- ==========================-->
        
        
        <div class="wrap-fixed-menu" id="fixedMenu" >
	<nav class="fullscreen-center-menu">

		<div class="menu-main-menu-container">
            
         <ul class="nav navbar-nav">
                <li><a href="home.html">Home</a></li>
                <li><a href="<?=base_url()?>office" >Office Supplies</a></li>
                <li ><a href="gallery-1.html" >Technology</a></li>
                <li><a href="blog-post.html" >Furniture</a></li>
              </ul>
         
        
        
        </div>    </nav>
	<button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
</div>
      
        <div data-canvas="container">
        <header class="header header-4 header-normal-width header-menu-middle navbar-fixed-top header-logo-black header-topbarbox-1-left header-topbarbox-2-right header-navbar-center header-navibox-1-right">
          <div class="top-bar clearfix">
            <div class="header-topbarbox-1 clearfix">
              <div class="header-topbarbox__item btn-group">
                <button type="button" data-toggle="dropdown" class="header-topbarbox__btn dropdown-toggle">English<span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">language 1</a></li>
                  <li><a href="#">language 2</a></li>
                  <li><a href="#">language 3</a></li>
                </ul>
              </div>
              <div class="header-topbarbox__item btn-group">
                <button type="button" data-toggle="dropdown" class="header-topbarbox__btn dropdown-toggle">USD / $<span class="caret"></span></button>
                <ul role="menu" class="dropdown-menu">
                  <li><a href="#">currency 1</a></li>
                  <li><a href="#">currency 2</a></li>
                  <li><a href="#">currency 3</a></li>
                </ul>
              </div>
              <div class="header-topbarbox__item header-topbarbox__item_bd-top">ORDER ONLINE OR CALL US  8 800 777-23-22</div>
            </div>
            <div class="header-topbarbox-2 clearfix">
              <div class="header-topbarbox__item hidden-xs"><a href="home-1.html"><i class="icon fa fa-random"></i>compare<span class="badge"></span></a></div>
              <div class="header-topbarbox__item hidden-xs"><a href="home-1.html"><i class="icon fa fa-heart-o"></i>My favorites<span class="badge"></span></a></div>
              <div class="header-topbarbox__item"><a href="home-1.html">Login</a> or<a href="home-1.html"> Register</a></div>
            </div>
          </div>
          <div class="container container-boxed-width">
            <div class="row">
              <div class="col-sm-4">
                <ul class="nav navbar-nav hidden-xs clearfix vcenter">
                  <li>
                    <!-- Mobile Trigger Start-->
                    <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                    <!-- Mobile Trigger End-->
                  </li>
                  <li>
                    <ul class="social-net list-inline text-left">
                      <li class="social-net__item"><a href="facebook.com" class="social-net__link"><i class="icon fa fa-facebook"></i></a></li>
                      <li class="social-net__item"><a href="twitter.com" class="social-net__link"><i class="icon fa fa-twitter"></i></a></li>
                      <li class="social-net__item"><a href="pinterest-p.com" class="social-net__link"><i class="icon fa fa-pinterest-p"></i></a></li>
                      <li class="social-net__item"><a href="vk.com" class="social-net__link"><i class="icon fa fa-vk"></i></a></li>
                    </ul>
                    <!-- end social-list-->
                  </li>
                </ul>
              </div>
              <div class="col-sm-4 text-center">
                <div class="center-logo"><a href="home.html" class="navbar-brand scroll"><img src="<?php echo base_url()?>assests/assets/media/general/logo.png" alt="logo" class="normal-logo"/><img src="<?php echo base_url()?>assests/assets/media/general/logo-dark.png" alt="logo" class="scroll-logo hidden-xs"/></a>
                  <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                </div>
              </div>
              <div class="col-sm-4">
                <div class="header-navibox-1">
                  <button class="js-toggle-screen toggle-menu-button  hidden-xs"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button><a href="#" class="btn_header_search"><i class="fa fa-search"></i></a>
                  <div class="header-cart"><a href="#"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a><span class="header-cart-count bg-primary"></span></div>
                </div>
              </div>
            </div>
            <nav id="nav" class="navbar">
              <ul class="yamm main-menu nav navbar-nav hidden-xs">
                <li><a href="home.html">Home</a></li>
                <li><a href="<?=base_url()?>office" >Office Supplies</a></li>
                <li ><a href="gallery-1.html" >Technology</a></li>
                <li><a href="blog-post.html" >Furniture</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
            </nav>
          </div>
        </header>
        <!-- end .header-->
        
        
      </div>
      <div class="wrap-content">
        <div id="main-slider" data-slider-width="1920px" data-slider-height="985px" data-slider-arrows="false" data-slider-buttons="false" class="main-slider slider-pro">
          <div class="sp-slides">
            <!-- Slide 1-->
            <div class="sp-slide"><img src="<?php echo base_url()?>images/11.jpg" alt="slider" class="sp-image"/>
              <div class="container">
                <div class="row">
                  <div class="col-xs-10 col-xs-offset-1">
                    <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__label sp-layer">up to 70% off</div>
                    <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="600" data-hide-delay="400" class="main-slider__title sp-layer">Final Sale</h2>
                    <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                      <ul class="main-slider__list list-inline">
                        <li><a href="catalog-list.html">Furniture</a></li>
                        <li><a href="<?=base_url()?>office">Office Supplies</a></li>
                        <li><a href="catalog-list.html">Technology</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <!-- Slide 2-->
            <div class="sp-slide"><img src="<?php echo base_url()?>images/26.jpg" alt="slider" class="sp-image"/>
              <div class="container">
                <div class="row">
                  <div class="col-xs-10 col-xs-offset-1">
                    <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="800" data-show-delay="400" data-hide-delay="400" class="main-slider__label sp-layer">up to 70% off</div>
                    <h2 data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="1200" data-show-delay="600" data-hide-delay="400" class="main-slider__title sp-layer">Final Sale</h2>
                    <div data-width="100%" data-show-transition="left" data-hide-transition="left" data-show-duration="2000" data-show-delay="1200" data-hide-delay="400" class="sp-layer">
                      <ul class="main-slider__list list-inline">
                        <li><a href="catalog-list.html">Furniture</a></li>
                        <li><a href="<?=base_url()?>office">Office Supplies</a></li>
                        <li><a href="catalog-list.html">Technology</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- end main-slider-->