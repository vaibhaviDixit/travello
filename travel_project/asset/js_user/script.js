var Swipes = new Swiper('.swiper-container', {
    loop: true,
    speed: 800,
    
    allowTouchMove:true,
    navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
    },
    autoplay: {
        delay: 5000,
      },
 
});

$(document).ready(function() {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    $('#customers-testimonials').owlCarousel({
        loop: true,
        center: true,
        items: 4,
        margin: 0,
        autoplay: true,
      
        autoplayTimeout: 5000,
        smartSpeed: 450,
        responsive: {
          0: {
            items: 1
          },
          768: {
            items: 2
          },
          1170: {
            items: 4
          }
        }
    });
});
jQuery(document).ready(function(){
  
  $('.like-button').click(function(){
      $(this).toggleClass('is-active');
  })

})

//favorites

function manageFav(id,operation){
 


   jQuery.ajax({
    url:'addToFav.php',
    type:'post',
    data:{id : id,operation:operation},
    success:function(result){
         

      msg=jQuery.parseJSON(result);
      if(msg.action=="remove"){
        console.log("remove");
          window.location.href="favourites.php";
      }
      else{

      setTimeout(function() {
        $("#addToFavSuccess").fadeIn(200);
      }, 200);

      setTimeout(function() {
        $("#addToFavSuccess").fadeOut(200);
      }, 1000);
      
      }

      $("#favItems").html(msg.totalItems);


    }

  });

}




















