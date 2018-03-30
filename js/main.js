var $navbar = $('navbar'),
    $navbarHeight = $navbar.height(),
    $title = $('.title');

var navScroll = {
    
  init:function(){
    $(window).on('scroll',function(){
      navScroll.navDrop();
    })
  },
  
  navDrop:function(){
    var $scrollTop = $(window).scrollTop();
    
    if($scrollTop > $navbarHeight){
      $navbar.addClass('scrolled'); 
      $title.css('padding-top','70px');
    }
    else if($scrollTop == 0) {
      $navbar.removeClass('scrolled');
      $title.css('padding-top','0');
    }
    
  }
}

$(document).ready(function(){
  navScroll.init();
})

// Carousel
var $carousel = $('.carousel');
var $seats = $('.carousel-seat');

$('.toggle').on('click', function(e) {
  var $newSeat;
  var $el = $('.is-ref');
  var $currSliderControl = $(e.currentTarget);
  // e.target is what triggers the event dispatcher to trigger and e.currentTarget is what you assigned your listener to.

  $el.removeClass('is-ref');
  if ($currSliderControl.data('toggle') === 'next') {
    $newSeat = next($el);
    $carousel.removeClass('is-reversing');
  } else {
    $newSeat = prev($el);
    $carousel.addClass('is-reversing');
  }

  $newSeat.addClass('is-ref').css('order', 1);
  for (var i = 2; i <= $seats.length; i++) {
    $newSeat = next($newSeat).css('order', i);
  }

  $carousel.removeClass('is-set');
  return setTimeout(function() {
    return $carousel.addClass('is-set');
  }, 50);

  function next($el) {
    if ($el.next().length) {
      return $el.next();
    } else {
      return $seats.first();
    }
  }

  function prev($el) {
    if ($el.prev().length) {
      return $el.prev();
    } else {
      return $seats.last();
    }
  }
});

// Opacity

$(document).ready(function() {
  $(window).scroll(function() {
    if ($(this).scrollTop() > 150) {
      $('#slideshow-container').css('opacity', 0);
      $('.navbar').css('background', 'red');
    } else {
      $('#slideshow-container').css('opacity', 1);
      $('.navbar').css('background', 'transparent');
      console.log("coucou");

    }
  });
});

  
  //Masonry

  $('.grid').masonry({
  // options
  itemSelector: '.grid-item',
  columnWidth: 200
});