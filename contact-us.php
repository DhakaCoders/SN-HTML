<?php 
include('function.php');
$current_location  = get_current_location();
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0">
	<title>To My Daughter Heart Necklace &ndash; Shopping Namara</title>
  <link rel='icon' type='image/png' href='favicon.ico'></link>
  <meta name="robots" content="noindex,nofollow">
  <meta name="robots" content="noindex">
  <meta name="robots" content="nofollow">
  <link rel="stylesheet" href="assets/css/bootstrap.min.css">
  <link rel="stylesheet" type="text/css" href="assets/fonts/font-awesome/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="assets/icofont/icofont.min.css">
  <link rel="stylesheet" type="text/css" href="assets/slick.slider/slick-theme.css">
  <link rel="stylesheet" type="text/css" href="assets/slick.slider/slick.css">  
  <link href="https://fonts.googleapis.com/css2?family=Arapey&family=Lato&family=Montserrat:wght@300;400;700&family=Old+Standard+TT:ital,wght@0,400;0,700;1,400&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
<header class="header">
  <div class="hdr-top">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-top-inr">
           <span class="flag_img">
            <img src="https://www.countryflags.io/<?php echo $current_location['countryCode'] ?>/flat/24.png" class="lazy" data-src="https://www.countryflags.io/<?php echo $current_location['countryCode'] ?>/flat/24.png">
          </span>   
          <span class="flag_city"><?php echo $current_location['city'] ?></span>  
          <span class="header-headline">- 70% OFF EXPIRES TODAY</span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hdr-top" style="display: none;">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-top-inr">
            <span>Free Shipping For Orders Over <b>$75</b></span>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="hdr-btm">
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="hdr-btm-inr clearfix">
            <div class="xs-menu-btn-bar show-sm clearfix">
                <div class="nav-opener">
                 <div class="nav-opener-btn">
                    <span></span>
                    <span></span>
                    <span></span>
                  </div>
               </div>
            </div>
            <div class="hdr-btm-lft">
              <div class="logo">
                <a href="#">
                  <img width="250" height="92" class="lazy" data-src="assets/images/logo.png">
                </a>
              </div>
            </div>
            <div class="hdr-btm-rgt clearfix">
              <div class="hdr-cart-icon">
                <span><!-- <img src="assets/images/cart-icon.png"> --><i class="icofont-shopping-cart"></i></span>
              </div>
              <div class="search-form-btn hide-sm"><i class="icofont-search"></i></div>
              <nav class="main-nav hide-sm">
                <ul class="clearfix">
                  <li class="menu-item-has-children">
                    <a href="#">Shop<i class="fas fa-sort-down"></i></a>
                    <ul class="sub-menu">
                      <li><a href="#">Featured Products</a></li>
                      <li><a href="#">Featured Products</a></li>
                      <li><a href="#">Featured Products</a></li>
                      <li><a href="#">Lorem Ipsum</a></li>
                    </ul>
                  </li>
                  <li><a href="#">Contact </a></li>
                </ul>
              </nav>
              <div class="search-bar"></div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</header><!-- end of header -->

<div class="search-form-wrp-clr">
  <div class="search-form-wrp">
    <span class="close-btn"><i class="fas fa-times"></i></span>
    <div class="search-form">
      <input class="search" type="text" name="search" placeholder="Search our store">
      <input class="search-btn" type="submit" value="">
      <i class="fas fa-search"></i>
    </div>
  </div>
</div>


<!-- - xs menu bar and pop up menu -- -->
 
  <div class="xs-popup-main-menu-wrap">
    <div class="xs-popup-main-menu-ftr clearfix">
      <div class="xs-menu-close-btn-controller clearfix">
         <div class="fl-close-btn">
           <span></span>
           <span></span>
           <span></span>
         </div>
      </div>
    </div>
    <nav class="xs-popup-main-nav clearfix">
      <ul class="clearfix">
        <li class="menu-item-has-children">
          <a href="#">Shop</a>
          <ul class="clearfix sub-menu">
            <li><a href="#">Featured Products</a> </li>
          </ul>
        </li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>
    <div class="xs-popup-btm-menu">
      <ul>
        <li><a href="#">FAQ</a></li>
        <li><a href="#">Shipping & Returns</a></li>
        <li><a href="#">Privacy Policy</a></li>
        <li><a href="#">Terms of Service</a></li>
        <li><a href="#">Contact Us</a></li>
      </ul>
    </div>
  </div>

<!-- - end of xs menu bar and pop up menu -- -->





<section class="sn-page-cntlr">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="sn-block-650">
          <div class="sn-page-sec-entry-hdr">
            <h1>Contact Us</h1>
          </div>
          <div class="sn-text-module-center-title sn-text-module-underline-1">
            <p>
              <strong>We want to hear from you!</strong>
            </p>
            <p>If you have any questions about your order, concerns, comments, missives just contact us:</p>
            <p>Email: support@shoppingnamara.com</p>
            <p>We will get back to you very, very quickly! </p>
          </div>
          
        </div>
      </div>
    </div>
  </div>
</section>


<footer class="footer-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="ftr-col-inr clearfix">
          <div class="ftr-col-lft">
            <div class="ftr-col-menu">
              <ul>
                <li><a href="#">FAQ</a></li>
                <li><a href="#">Shipping & Returns</a></li>
                <li><a href="#">Privacy Policy</a></li>
                <li><a href="#">Terms of Service</a></li>
                <li><a href="#">Contact Us</a></li>
              </ul>
            </div>
          </div>
          <div class="ftr-col-rgt clearfix">
            <div class="ftr-col-rgt-dsc">
              <p> &copy;2020, Shopping Namara</p>
              <span>Powered by Shopify</span>
            </div>
            <div class="ftr-col-rgt-cart clearfix">
              <ul class="clearfix">
                <li><i class="icofont-american-express-alt"></i></li>
                <li><i class="icofont-diners-club"></i></li>
                <li><i class="icofont-discover"></i></li>
                <li><i class="icofont-jcb-alt"></i></li>
                <li><i class="icofont-mastercard"></i></li>
                <li><i class="icofont-paypal"></i></li>
                <li><i class="icofont-visa"></i></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div><!-- end of ftr-top --> 
</footer><!-- end of footer -->

<script src="https://code.jquery.com/jquery-3.0.0.js"></script>
<script src="https://code.jquery.com/jquery-migrate-3.0.0.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<script src="assets/slick.slider/slick.js"></script>
<script src="assets/js/packery.pkgd.min.js"></script>
<script src="assets/js/lazyload.min.js"></script>
<script src="assets/js/main.js"></script>
<script type="text/javascript">window.onload = function() {var newd1 = new LazyLoad({elements_selector: ".lazy"});}</script>
</body>
</html>