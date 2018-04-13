// var $navbar = $('navbar'),
//     $navbarHeight = $navbar.height(),
//     $title = $('.title');

// var navScroll = {
    
//   init:function(){
//     $(window).on('scroll',function(){
//       navScroll.navDrop();
//     })
//   },
  
//   navDrop:function(){
//     var $scrollTop = $(window).scrollTop();
    
//     if($scrollTop > $navbarHeight){
//       $navbar.addClass('scrolled'); 
//       $title.css('padding-top','70px');
//     }
//     else if($scrollTop == 0) {
//       $navbar.removeClass('scrolled');
//       $title.css('padding-top','0');
//     }
    
//   }
// }

// $(document).ready(function(){
//   navScroll.init();
// })



// Opacity


// $(document).ready(function() {
//   $(window).scroll(function() {
//     if ($(this).scrollTop() > 250) {
//       $('#slideshow-container').css('opacity', 0);
         
//       $('.navbar').css('background', 'red');

//     } else {
//       $('#slideshow-container').css('opacity', 1);
//       $('.navbar').css('background', 'transparent');
//       console.log("coucou");

//     }
//   });
// });