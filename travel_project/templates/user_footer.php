<?php

?>


<footer class="footer">

  <div class="box-container">
    <div class="box">
      <h5>Stay Connected With Us</h5>
      <i id="s-icon" class="fa fa-facebook-square" style="color:#4267B2"></i>
      <i id="s-icon" class="fa fa-twitter-square"  style="color:#1DA1F2"></i>
      <i  id="s-icon" class="fa fa-linkedin-square"  style="color:#0077b5"></i>
      <i  id="s-icon" class="fa fa-instagram" style="color:#e1306c"></i>
      <i  id="s-icon" class="fa fa-whatsapp"  style="color:#25D366"></i>
      <h5>Address</h5>
      <p class="address">
        Corporate Office :
        Doon House, B-275(A),<br>First floor Sector-57,<br>Shushant Lok 3 Near Hong Kong Bazzar,<br>Gurugram Pin 122001, Haryana.
       <br><i class="fa fa-phone"></i> +91-9122588799</p>
    </div>
      <div class="box">
        <h5>Quick Links</h5>
        <a href="home.php">Home</a>
        <a href="home.php#packages">Destinations</a>
        <a href="home.php#services">Services</a>
        <a href="home.php#offers">Exclusive Deals</a>
        <a href="home.php#review">Testimonials</a>
        <a href="home.php#about">About us</a>
      </div>
      <div class="box">
        <h5>Discuss Your Queries with us</h5>
        <form method="POST" action="">
          <input type="text" name="email" id="email" placeholder="Email Address">
          <textarea name="query" id="query" cols="30" rows="10" placeholder="Any Query.."></textarea>
          <button class="query-btn" name="send">Send</button>
        </form>
        </div>

     

  </div>

  <p class="credit"> created by <span> Bodhi Technology </span> | all rights reserved! </p>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script src="../asset/firebase.js"></script>

<script src="../asset/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>


<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
      window.addEventListener("scroll",function(){
        var nav =document.querySelector("nav");
        nav.classList.toggle("sticky",window.scrollY>50);
          })
</script>
<script type="text/javascript" src="../asset/js_user/script.js"></script>
<button onclick="topFunction()" id="myBtn"  class="scroll"><i class="material-icons">keyboard_arrow_up</i></button>

<script>
//Get the button
var mybutton = document.getElementById("myBtn");

// When the user scrolls down 20px from the top of the document, show the button
window.onscroll = function() {scrollFunction()};

function scrollFunction() {
if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
  mybutton.style.display = "block";
} else {
  mybutton.style.display = "none";
}
}

// When the user clicks on the button, scroll to the top of the document
function topFunction() {
document.body.scrollTop = 0;
document.documentElement.scrollTop = 0;
}
  </script>
  
</body>
</html>








