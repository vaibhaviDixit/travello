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

jQuery(document).ready(function() {
    "use strict";
    //  TESTIMONIALS CAROUSEL HOOK
    jQuery('#customers-testimonials').owlCarousel({
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
 
alert(operation);

   jQuery.ajax({
    url:'addToFav.php',
    type:'post',
    data:{id : id,operation:operation},
    success:function(result){
          console.log(result)


      msg=jQuery.parseJSON(result);
      if(msg.action=="remove"){
          window.location.href=window.location.href;
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




















