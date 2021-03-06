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


<section class="sn-product-dsl-sec-wrp">
  <div class="container">
      <div class="row marginNo">
        <div class="col-sm-12 paddingNO">
          <div class="sn-product-single-lft SnProductSlider">
            <div class="sn-product-single-img">
              <img src="assets/images/sn-product-dsl-lft-img.jpg">
            </div>
            <div class="sn-product-single-img">
              <img src="assets/images/sn-product-single-img-1.jpg">
            </div>
            <div class="sn-product-single-img">
              <img src="assets/images/sn-product-single-img-2.jpg">
            </div>
            <div class="sn-product-single-img">
              <img src="assets/images/sn-product-single-img-3.jpg">
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-sm-12">
          <div class="sn-product-dsl-wrp">
            <div class="sn-product-dsl-lft">
              <div class="sn-product-dsl-lft-img lazy" data-src="assets/images/sn-product-dsl-lft-img.jpg">
              </div>
            </div>
            <div class="sn-product-dsl-rgt">
              <div class="sn-product-dsl-dsc">
                <h1 class="sn-product-dsl-title">To My Daughter Heart <br> Necklace</h1>
                <div class="sn-rating">
                  <ul class="clearfix">
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <span>(37)</span>
                </div>
                <div class="sn-product-price">
                  <del><span>$120.00</span></del>
                  <ins><span>$34.97</span></ins>
                </div>
                <div class="sn-single-op-radio-wrp">
                  <span>Color</span>
                  <div class="sn-single-op-radio-inr clearfix">
                    <div class="sn-single-op-radio">
                      <input type="radio" id="silver" name="text" value="silver" checked="checked">
                      <label for="silver">Silver</label>
                    </div>
                    <div class="sn-single-op-radio">
                      <input type="radio" id="gold" name="text" value="gold">
                      <label for="gold">Gold</label>
                    </div>
                  </div>
                </div>
                <div class="sn-product-select-wrp">
                  <div class="sn-product-select">
                    <select class="round">
                      <option>Select Quantity:</option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                    </select>
                  </div>
                </div>
                <div class="sn-add-to-cart-btn">
                  <button type="submit">Add to Cart</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>    
</section><!-- end of .main-content -->


<section class="sn-product-single-sec-wrp">
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="sn-product-single-wrp clearfix">
          <div class="hide-776 sn-product-single-lft">
            <div class="sn-product-single-img lazy" data-src="assets/images/sn-product-single-img-1.jpg" style="height: 480px;">
            </div>
            <div class="sn-product-single-img lazy" data-src="assets/images/sn-product-single-img-2.jpg" style="height: 550px;">
            </div>
            <div class="sn-product-single-img lazy" data-src="assets/images/sn-product-single-img-3.jpg" style="height: 550px;">
            </div>
          </div>
          <div class="sn-product-single-rgt">
            <div class="product-cart">
              <img class="lazy" data-src="assets/images/product-cart.jpg">
            </div>
            <div class="sn-product-single-tp-dsc">
              <p>Want to surprise your affectionate and generous daughter? What’s the most beautiful gift to give her? Make your loving daughter smile, filled with joy and excitement with this To My Daughter Love Mom Heart Necklace! A glamorous necklace that inevitably brings delight to your child’s face.</p>
              <p>This is a first-class To My Daughter Love Mom Heart Necklace presented with a sweet message on it that says: <em>"To My Daughter, always remember that Mom loves you. You are braver than you believe. Stronger than you seem. Smarter than you think and loved more than you know. Love, Mom”.</em> Such an artisanal necklace that your daughter will surely remember you by.</p>
            </div>
            <div class="sn-product-dsc-list">
              <ul>
                <li>
                  <p><b>ELEGANT TOUCH OF DAUGHTER NECKLACE.</b> Looking for a precious gift for your daughter to remind her how much you love her? This To My Daughter Love Mom Heart Necklace is an exceptional gift you can’t miss! You’ll be extremely pleased when you see this beautiful necklace made with surgical Steel with a hand-poured liquid glass dome. A very thoughtful and pleasant reminder of how much you love her.</p>
                </li>
                <li>
                  <p><b>PERFECT GIFT.</b> Show how much you love your daughter with this lovely To My Daughter Love Mom Heart Necklace. A unique and thoughtful gift for birthday, Valentine’s Day, Graduation day, Christmas day, or any events. Wherever you are, let this shimmering necklace be a remembrance of how much you treasure her. A well-made and custom made necklace crafted for the best gift ever to your loved one!</p>
                </li>
                <li>
                  <p><b>GREAT VALUE & GOOD QUALITY ACCESSORY.</b> The necklace is made with jewelry grade steel. The pendant is made with high-quality materials that measure approximately 24mm x 24mm. Positively, a dazzling necklace that won’t stain and lasts for many, many years.</p>
                </li>
                <li>
                  <p><b>WELL-CRAFTED ACCESSORY.</b> Your daughter will surely be stuck on this first-class To My Daughter Love Mom Heart Necklace presented with a sweet message on it that says: "To My Daughter, always remember that Mom loves you. You are braver than you believe. Stronger than you seem. Smarter than you think and loved more than you know. Love, Mom”. It has a perfect size heart shape pendant that is not too big, not too small for a daughter’s neck. Just an excellent silver necklace that is absolutely a gift worth remembering.</p>
                </li>
              </ul>
              <strong>Package Included:</strong>
              <p>1x To My Daughter - Love Mom - Heart Necklace</p>
              <strong> Online-exclusive: not available in stores! <br> Extremely high demand: Please allow 2-3 weeks for delivery.</strong>
            </div>
            <div class="product-cart-btm">
              <img class="lazy" data-src="assets/images/product-cart-2.jpg">
            </div>
            <div class="sn-reviews-dsc-wrp">
              <div class="sn-rating-reviews-inr clearfix">
                <div class="sn-rating-reviews">
                  <ul class="clearfix">
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                    <li><a href="#"><i class="fas fa-star"></i></a></li>
                  </ul>
                  <span>37 Reviews</span>
                </div>
                <div class="sn-reviews-rgt clearfix">
                  <div class="sn-reviews-bar-clr clearfix">
                    <div class="sn-reviews-bar">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
                  <div class="sn-reviews-btn">
                    <a href="#">Write a review</a>
                  </div>
                </div>
              </div>
              <div class="sn-reviews-dsc-inr">
                <div class="clearfix grid masonry">
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Tandie M.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Got mine for my one and only daughter  I love it.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Linda R.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I bought this for my Daughter.It is so nice,Im giving it to her at the hospital after she has her baby girl.I cant wait.Tyvm I love it and so will she.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Heather N.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>This necklace is beautiful and the perfect size. My daughter LOVES it! The quality of it is comparable to some of my jewelry that is upwards to 3-4x the cost.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Tindra C.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I got this for my daughter and she absolutely loves it! Its good quality and is the first necklace to withstand her at the park lol definitely recommend this for other moms to give their daughters!!</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Gina F.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I ordered his for my daughter. It is beautiful! She never takes it off and says she thinks of me every time she touches it.....so worth it!</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Sharon J.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Just what I had hoped for! It's quaint and simplistic style was perfect yet it holds a beautiful sentiment!</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Yvette M.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Love this necklace.  I bought it to give to my daughter when she leaves for college in the fall. She typically wears silver jewelry, so this will be a nice addition to her collection. It is delicate but well made.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Lee-ann C.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I got this for my best friend’s daughter. My best friend recently died, and her daughter is turning 10. What a very special, high-quality gift, with a beautiful display. It’s perfect.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Luisa O.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>This is a nice, moderately sized piece of jewelry that I would imagine any daughter would love to receive. This may not be the fanciest piece of jewelry but it is a charmingly simple piece that will remind the daughters just how much she means to you each and every time she wears it.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Veronica L.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Pretty, dainty, exactly as pictured. Super fast shipping.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Marilyn V.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>My daughter said she loved it because it was a moderately sized piece of jewelry that didn't hang too low and still looked really nice! she said she got many compliments on it when she wore it to work, so I'll take that as a successful purchase.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Anna C.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Classic, symbolic necklace. I'm impressed too by the mission and approach of the company.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Marilyn V.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>My daughter said she loved it because it was a moderately sized piece of jewelry that didn't hang too low and still looked really nice! she said she got many compliments on it when she wore it to work, so I'll take that as a successful purchase.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Silvia E.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I love that she wanted to have this treasure! Good job, your company rocks and so does the message to daughters from mothers ❤️</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Stephanie R.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I’ve been wearing it none stop from the day Mom gave it to me. I though that it’d go black quickly and my neck would turn green but no such thing. The material is great and I get so many compliments on it.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Wenzell S.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>This is an absolutely gorgeous piece. It’s really simple and perfect for someone who doesn’t like heavy jewelry, but that’s not to say it doesn’t withstand regular wear.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Celine C.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Amazing quality for a reasonable price. This necklace has great attention to details. The words are engraved clean and crisp. Perfectly made for a cheap price.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Diana K.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I absolutely love this new necklace. So meaningful of my daughter, and being a mom.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Celine C.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Amazing quality for a reasonable price. This necklace has great attention to details. The words are engraved clean and crisp. Perfectly made for a cheap price.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Rhea G.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>My Daughter LOVED it. Doesn't seem cheap or anything, the quality is REALLY good. I was afraid the chain would break easily, but the chain is AMAZING. Highly recommend it.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Natalie M.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Bought this as a birthday gift for my daughter after looking at all of them and decided upon this one because it was unlike any of the others I had seen. She gets compliments on it, even from a worker at a high end jewelry store.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Oralia F.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                      <p>I was not thrilled with the chain but the pendant is so gorgeous.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Matilda R.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>This is a cute gift.  It's solid and doesn't look cheap. She wears it to church a lot. Very happy with the purchase.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Frenda W.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>The best part of purchasing this necklace was my daughters reaction. At 13 girls can be a little picky and hard to please, but she loved this gift and barely takes it off.</p>
                     </div>
                  </div>
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Yoona B.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>My daughter loved the necklace. She is hard to please and thought it was great. And its excellent quality and the adjustable length is a nice bonus.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Panelo V.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                      <p>Thank you for this creation, can be a wonderful gift that can be kept a lifetime. I love the quotes and writing for it.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Amalia F.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I am very impressed with my purchase. Unfortunately this is a Christmas gift so my review is based only on how it looks. It’s beautiful. I’m sure my daughter will love it.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Fina H.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I’m so excited to give this to my daughter for her 16th birthday. The writing is a little small, but the message is perfect.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Tara D.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>This necklace is really quite beautiful. Looks great for my daughter on casual, dress, gown or business attire. I love this for its price and  it really was beautiful.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Cath S.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>It’s a shame that the spelling is not ours here in Australia we spell it mum</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Glenda U.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>An exquisite necklace. Pretty as same as what the seller showed on the picture. My daughter really loved it. Thank you!</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>George J.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>A small treasure. My daughter loved it, wears it every day!</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Fina V.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                      <p>I bought two of these for my daughters. My daughters both love them so I love them.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Sandy F.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                      <p>Beautiful and well-made. It will be passed down from my daughter to hers.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Calixta F.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>She cried she loved it. She Loved it! Great personal gift! I really love the way this turned out. It's a powerful message to my little girl printed on a nice, sturdy polished piece of stainless steel. It hangs on a good chain and will last a very long time. I'm very happy with this purchase.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Amanda K.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>I purchased this necklace as a gift to my daughter who started her first year at college and she simply loved it! It has a very special message engraved and come in a beautiful packaging which highlights it.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Josie K.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                      <p>I give  it to my daughter and she found it awesome. I like it's design and the presence of those sweet line that keeps mother and daughter bond is very much effective in a product in itself. I would recommend it to every mom and daughter.</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Rizza L.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="far fa-star"></i></a></li>
                      </ul>
                      <p>What I like the most about this product is what it says and how it looks. (I wanted something my daughter could wear around her neck that would help her maintain her self-confidence).</p>
                     </div>
                  </div>                  
                  <div class="grid-item masonry-item">
                    <div class="sn-reviews-dsc">
                      <h5>Sisilia A.</h5>
                      <ul class="clearfix">
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                        <li><a href="#"><i class="fas fa-star"></i></a></li>
                      </ul>
                      <p>Bought as an xmas present for my daughter. As a mom, very satisfied with the purchase.Heartwarming! Great present for my daughter!</p>
                     </div>
                  </div>

                </div>
              </div>
              <div class="sn-read-more-btn" style="display: none;">
                <a class="load-more" href="#">Show more reviews</a>
              </div>
              <div class="sn-share-icon">
                <ul class="clearfix">
                  <li>
                    <a href="#"><i class="fab fa-facebook-f"></i>Share</a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-twitter"></i>Tweet</a>
                  </li>
                  <li>
                    <a href="#"><i class="fab fa-pinterest-p"></i>Pin it</a>
                  </li>
                </ul>
              </div>
            </div>
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