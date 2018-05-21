/*
* === HEADER TRANSITION ===
*/

var a = $("#slideshow-container").offset().top;

$(document).scroll(function(){
    if($(this).scrollTop() > 400)
    {   
       $('.navbar').css({"background":"#808080"});
       

    } else {
       $('.navbar').css({"background":"transparent"});
    }
});

  
  /*
* === MASONRY ===
*/

// $('.grid').masonry({
//   // options
//   itemSelector: '.grid-item',
//   columnWidth: 900
// });


