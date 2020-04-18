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
    var $grid = $('.grid').packery({
      itemSelector: '.grid-item',
      //gutter: 20
    });
    var j = 0;
    var l = 0;
    var int = 5;
    var tli = $('.loadMore .lmitem').length;
    var $items, $item1, $item2, $item3;
    $('.load-more').on( 'click', function(e) {
      e.preventDefault();
      $('.loadMore .lmitem').each(function(i){
        l++;
        if( $('.loadMore .lmitem:nth-child('+l+')').length ){
          $item = $('.loadMore .lmitem:nth-child('+l+')').html();
          $items = $($items).add($item);
        }else{
          $('.load-more').fadeOut();
        }
        if( l > int || l == int ) { int += 5; return false; }
      });
      if( tli == l || tli < l ){
        $('.load-more').fadeOut();
      }
      // append elements to container
      $grid.append( $items ).packery( 'appended', $items );
      $items = '';
    });

  }

}

/*if( $('.masonry').length ){
  $('.masonry').masonry({
    item:'.masonry-item',
    count: 10,
    itemsToLoad: 5,
    //cssClass:'load-more',
    btnHTML:'<div class="sn-read-more-btn"><a class="load-more" href="#">Show more reviews</a></div>'
  });
}
*/


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
        adaptiveHeight: true
      });
  }
}

})(jQuery);