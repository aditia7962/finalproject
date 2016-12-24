<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge"/>
    <title>TrendSetter</title>
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
                <form class="search-global" action="<?php echo site_url('office');?>">
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
                <li><a href="catalog-list.html" >Shop</a></li>
                <li ><a href="gallery-1.html" >Portfolio</a></li>
                <li><a href="blog-post.html" >Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
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
                <li><a href="catalog-list.html" >Shop</a></li>
                <li ><a href="gallery-1.html" >Portfolio</a></li>
                <li><a href="blog-post.html" >Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
              </ul>
         
        
        
        </div>    </nav>
  <button type="button" class="fullmenu-close"><i class="fa fa-times"></i></button>
</div>
      <div data-canvas="container">
        <header class="header header-2 header-topbar-view header-normal-width navbar-fixed-top header-logo-black header-topbarbox-1-left header-topbarbox-2-right header-navibox-1-left header-navibox-2-right header-navibox-3-right">
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
              <div class="header-topbarbox__item"><a href="home-1.html"><i class="icon fa fa-random"></i>compare<span class="badge"></span></a></div>
              <div class="header-topbarbox__item"><a href="home-1.html"><i class="icon fa fa-heart-o"></i>My favorites<span class="badge"></span></a></div>
              <div class="header-topbarbox__item"><a href="<?php echo base_url()?>customer/login">Login</a> or<a href="home-1.html"> Register</a></div>
            </div>
          </div>
          <nav id="nav" class="navbar">
            <div class="container">
              <div class="header-navibox-1">
                <!-- Mobile Trigger Start-->
                <button class="menu-mobile-button visible-xs-block js-toggle-mobile-slidebar toggle-menu-button"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button>
                <!-- Mobile Trigger End--><a href="home.html" class="navbar-brand scroll"><img src="<?php echo base_url()?>assests/assets/media/general/logo.png" alt="logo" class="normal-logo"/><img src="<?php echo base_url()?>assests/assets/media/general/logo-dark.png" alt="logo" class="scroll-logo hidden-xs"/></a>
              </div>
              <div class="header-navibox-3">
                <button class="js-toggle-screen toggle-menu-button hidden-xs"><i class="toggle-menu-button-icon"><span></span><span></span><span></span><span></span><span></span><span></span></i></button><a href="#" class="btn_header_search"><i class="fa fa-search"></i></a>
                <div class="header-cart"><a href="#"><i aria-hidden="true" class="fa fa-shopping-cart"></i></a><span class="header-cart-count bg-primary"></span></div>
              </div>
              <div class="header-navibox-2">
             <nav id="nav" class="navbar">
              <ul class="yamm main-menu nav navbar-nav hidden-xs">
                <li><a href="home.html">Home</a></li>
                <li><a href="catalog-list.html" >Office Supplies</a></li>
                <li ><a href="gallery-1.html" >Technology</a></li>
                <li><a href="blog-post.html" >Furniture</a></li>
              </ul>
            </nav> </div>
            </div>
          </nav>
        </header>
        <!-- end .header-->
        
        
      </div>
      <div class="wrap-content">
        <div class="container">
          <div class="row">
            <div class="col-xs-12">
              <ol class="breadcrumb">
                <li><a href="home.html">Home</a></li>
                <li class="active">Office Supplies</li>
              </ol>
            </div>
          </div>
        </div>
        <div class="b-title-page b-title-page_w_bg">
          <div class="container">
            <div class="row">
              <div class="col-xs-12">
                <h1 class="b-title-page__title">Office Supplies</h1>
              </div>
            </div>
          </div>
        </div>
        <!-- end b-title-page-->
        
        <div class="container">
          <div class="row">
            <div class="col-md-3">
              <div class="b-goods-number-products">Showing 11 products</div>
            </div>
            <div class="col-md-9">
              <div class="b-goods-headers">
                <div class="b-goods-headers__view"><i class="b-goods-headers__view-item active fa fa-th js-view-col"></i><i class="b-goods-headers__view-item fa fa-list js-view-list"></i></div>
                <div class="b-goods-headers__sorting">
                  <div class="b-goods-headers__sorting-name">Sort by:</div>
                  <select data-width="auto" class="selectpicker">
                    <option>Popularity</option>
                    <option>Popularity 1</option>
                    <option>Popularity 2</option>
                    <option>Popularity 3</option>
                  </select>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-9 col-md-push-3">
              <div class="l-main-content">
                <div class="b-goods-catalog">
                  
                  <!-- end b-goods-->
                  <?php 
                  $no = 1;

                    foreach ($office_supplies as $key => $value) :?>

                    <section class="b-goods b-goods_mod-a b-goods_3-col">
                    <div class="b-goods__inner"><a href="<?=base_url().$value->picture?>" class="b-goods__img js-zoom-images"><img src="<?=base_url().$value->picture?>" alt="goods" class="img-responsive"/></a>
                      <div class="b-goods__wrap">
                        <h3 class="b-goods__name"><?=$value->product_name?></h3>
                        <div class="b-goods__description"><?=$value->product_description?></div>
                        <div class="b-goods__price"><?=$value->unit_price?></div>
                        <div class="b-goods-links"><a href="home.html" class="b-goods-links__item"><i class="icon fa fa-random"></i></a><a href="home.html" class="b-goods-links__item b-goods-links__item_main">add to cart</a><a href="home.html" class="b-goods-links__item"><i class="icon fa fa-heart-o"></i></a></div>
                        <div class="b-goods__label bg-secondary">sale</div>
                      </div>
                    </div>
                  </section>

                  <?php endforeach ?>
                  
                  <!-- end b-goods-->
                  
                </div>
                <div class="text-right">
                  <ul class="pagination">
                    <li><a class="active" href="#">
                    <?php echo $pagination ?>
                      
                    </a></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-md-3 col-md-pull-9">
              <aside class="l-sidebar">
                <form class="form-filter">
                  <section class="section-sidebar">
                    <h3 class="sidebar-title">Select price</h3>
                          <div class="b-slider-price">
                            <div class="js-slider-price"></div>
                            <div class="b-slider-price__inner">PRICE:
                              <input class="b-slider-price__input text-right js-slider-price_min"/> —
                              <input class="b-slider-price__input js-slider-price_max"/>
                            </div>
                          </div>
                          <!-- end .b-slider-price-->
                          
                  </section>
                  <section class="section-sidebar">
                    <h3 class="sidebar-title">categories</h3>
                    <div id="accordion" class="accordion accordion-2">
                      <div class="panel panel-default">
                        <div class="panel-heading"><a data-toggle="collapse" data-parent="#accordion" href="#categories-1" class="btn-collapse"><i class="icon"></i>Office Supplies</a></div>
                        <div id="categories-1" class="panel-collapse collapse in">
                          <div class="label-group">
                            <input id="categories__radio-1" type="radio" name="categories-group-1" value="" checked="checked" class="forms__radio hidden"/>
                            <?php foreach ($sub_category as $key => $value): ?>
                            <label for="categories__radio-1" class="forms__label forms__label-radio forms__label-radio-1"><?=$value->sub_category_name?></label>
                            <?php endforeach ?>
                          </div>
                        </div>
                      </div>
                      </div>

                  <button class="btn-filter btn btn-primary btn-effect">FILTER</button>
                      </div>
                  </section>
                </form>
              </aside>
              <!-- end .sidebar-->
              
              
            </div>
          </div>
        </div>
        <div class="b-form-newsletter bg-grey">
          <form class="b-form-newsletter__form">
            <div class="b-form-newsletter__title">Newsletter</div>
            <input type="email" placeholder="Enter your email" required="required" class="form-control"/>
            <button class="btn btn-primary btn-effect">subscribe</button>
          </form>
        </div>
        <!-- end b-form-newsletter-->
        <footer class="footer footer-type-1 bg-grey">
          <div class="footer__main">
            <div class="container">
              <div class="row">
                <div class="col-md-8 col-md-push-4">
                  <div class="row">
                    <div class="col-sm-3">
                      <section class="footer-section">
                        <h3 class="footer-section__title">About</h3>
                        <ul class="footer__list list-unstyled">
                          <li><a href="about.html">About Us</a></li>
                          <li><a href="home.html">Careers</a></li>
                          <li><a href="home.html">International</a></li>
                        </ul>
                      </section>
                    </div>
                    <div class="col-sm-3">
                      <section class="footer-section">
                        <h3 class="footer-section__title">Support</h3>
                        <ul class="footer__list list-unstyled">
                          <li><a href="contact.html">Contact</a></li>
                          <li><a href="contact.html">Returns</a></li>
                          <li><a href="contact.html">Warranty</a></li>
                          <li><a href="contact.html">Help</a></li>
                        </ul>
                      </section>
                    </div>
                    <div class="col-sm-3">
                      <section class="footer-section">
                        <h3 class="footer-section__title">Legal</h3>
                        <ul class="footer__list list-unstyled">
                          <li><a href="privacy-policy.html">Privacy</a></li>
                          <li><a href="terms-of-use.html">Terms</a></li>
                          <li><a href="privacy-policy.html">Patents</a></li>
                        </ul>
                      </section>
                    </div>
                    <div class="col-sm-3">
                      <section class="footer-section">
                        <h3 class="footer-section__title">Other</h3>
                        <ul class="footer__list list-unstyled">
                          <li><a href="home.html">Account</a></li>
                          <li><a href="home.html">Newsletter</a></li>
                        </ul>
                      </section>
                    </div>
                  </div>
                </div>
                <div class="col-md-4 col-md-pull-8">
                  <ul class="social-net list-inline">
                    <li class="social-net__item"><a href="facebook.com" class="social-net__link"><i class="icon fa fa-facebook"></i></a></li>
                    <li class="social-net__item"><a href="twitter.com" class="social-net__link"><i class="icon fa fa-twitter"></i></a></li>
                    <li class="social-net__item"><a href="pinterest-p.com" class="social-net__link"><i class="icon fa fa-pinterest-p"></i></a></li>
                    <li class="social-net__item"><a href="vk.com" class="social-net__link"><i class="icon fa fa-vk"></i></a></li>
                    <li class="social-net__item"><a href="vine.com" class="social-net__link"><i class="icon fa fa-vine"></i></a></li>
                  </ul>
                  <!-- end social-list-->
                  <div class="copyright">©  2017 TrendSetter  ® All Right Reserved</div>
                </div>
              </div>
            </div>
          </div>
        </footer>
        <!-- end .footer-type-1-->
        
        
      </div>
      <!-- end layout-theme-->
    </div>
    
  <!-- ++++++++++++-->
    <!-- MAIN SCRIPTS-->
    <!-- ++++++++++++-->
    <script src="<?=base_url()?>assests/assets/libs/jquery-1.12.4.min.js"></script>
    <script src="<?=base_url()?>assests/assets/libs/jquery-migrate-1.2.1.js"></script>
    <!-- Bootstrap-->
    <script src="<?=base_url()?>assests/assets/libs/bootstrap/bootstrap.min.js"></script>
    <!-- User customization-->
    <script src="<?=base_url()?>assests/assets/js/custom.js"></script>
    <!-- Other slider-->
    <script src="<?=base_url()?>assests/assets/plugins/owl-carousel/owl.carousel.min.js"></script>
    <!-- Pop-up window-->
    <script src="<?=base_url()?>assests/assets/plugins/magnific-popup/jquery.magnific-popup.min.js"></script>
    <!-- Headers scripts-->
    <script src="<?=base_url()?>assests/assets/plugins/headers/slidebar.js"></script>
    <script src="<?=base_url()?>assests/assets/plugins/headers/header.js"></script>
    <!-- Select customization-->
    <script src="<?=base_url()?>assests/assets/plugins/bootstrap-select/js/bootstrap-select.min.js"></script>
    <!-- Mail scripts-->
    <script src="<?=base_url()?>assests/assets/plugins/jqBootstrapValidation.js"></script>
    <script src="<?=base_url()?>assests/assets/plugins/contact_me.js"></script>
    <!-- Filter and sorting images-->
    <script src="<?=base_url()?>assests/assets/plugins/isotope/isotope.pkgd.min.js"></script>
    <script src="<?=base_url()?>assests/assets/plugins/isotope/imagesLoaded.js"></script>
        <!-- Shuffle-->
    <script src="<?=base_url()?>assests/assets/plugins/letters/jquery.shuffleLetters.js"></script>
    <!-- Progress numbers-->
    <script src="<?=base_url()?>assests/assets/plugins/rendro-easy-pie-chart/jquery.easypiechart.min.js"></script>
    <script src="<?=base_url()?>assests/assets/plugins/rendro-easy-pie-chart/waypoints.min.js"></script>
    <!-- Animations-->
    <script src="<?=base_url()?>assests/assets/plugins/scrollreveal/scrollreveal.min.js"></script>
    <!-- Main slider-->
    <script src="<?=base_url()?>assests/assets/plugins/slider-pro/jquery.sliderPro.min.js"></script>
    <!-- Price filter-->
    <script src="<?=base_url()?>assests/assets/plugins/nouislider/jquery.nouislider.all.min.js"></script>
  </body>
</html>