(function($) {

$('.navbar-toggle').on('click', function(){
	$('#mobile-nav').slideToggle(300);
});
	

/**
Responsive on 767px
*/
var windowWidth = $(window).width();
// if (windowWidth <= 767) {

  $('.toggle-btn').on('click', function(){
    $(this).toggleClass('menu-expend');
    $('.toggle-bar ul').slideToggle(500);
  });


// }



// http://codepen.io/norman_pixelkings/pen/NNbqgG
// https://stackoverflow.com/questions/38686650/slick-slides-on-pagination-hover


$('.search-form-btn').on('click', function(){
    $('.search-form-wrp').fadeIn(500);
    $('.search-form-wrp').addClass('search-expend');
  });

  $('.close-btn').on('click', function(){
    $('.search-form-wrp').fadeOut(500);
    $('.search-form-wrp').removeClass('search-expend');
  });
if (windowWidth > 480) {
  if( $('.grid').length ){
    $('.grid').packery({
      // options
      itemSelector: '.grid-item',
      //gutter: 20
    });

  }
}


 /*
---------------------------
 Xs Menu js
---------------------------
*/
if (windowWidth <= 767) {

    $('.nav-opener').on('click', function(){
    $('.xs-popup-main-menu-wrap').fadeIn(500);
    $('.xs-popup-main-menu-wrap').addClass('add-cls-show');
  });

  $('.xs-menu-close-btn-controller').on('click', function(){
    $('.xs-popup-main-menu-wrap').fadeOut(500);
    $('.xs-popup-main-menu-wrap').removeClass('add-cls-show');
  });

  $('.xs-popup-main-nav > ul > li.menu-item-has-children > a').on('click', function(e){
    e.preventDefault();
    $(this).parent().find('ul.sub-menu').slideToggle(500);
    $(this).toggleClass('sub-menu-expend')
  });

}



if (windowWidth <= 767) {
  if( $('.SnProductSlider').length ){
      $('.SnProductSlider').slick({
        dots: true,
        infinite: false,
        arrows: false,
        speed: 300,
        slidesToShow: 1,
        slidesToScroll: 1,
      });
  }
}


/**
Slick slider
*/
if( $('.responsive-slider').length ){
    $('.responsive-slider').slick({
      dots: true,
      infinite: false,
      speed: 300,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 1024,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            infinite: true,
            dots: true
          }
        },
        {
          breakpoint: 600,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2
          }
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1
          }
        }
        // You can unslick at a given breakpoint now by adding:
        // settings: "unslick"
        // instead of a settings object
      ]
    });
}

    new WOW().init();

})(jQuery);