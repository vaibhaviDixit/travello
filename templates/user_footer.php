<footer class="footer">

  <div class="box-container">
    <div class="box">
      <h5>Stay Connected With Us</h5>
      <?php
        $adminSocial=mysqli_fetch_assoc(mysqli_query($con,"select * from admin"));
        $fb="";
        $insta="";
        $whatsapp="";
        $phone="";
        if($adminSocial>0){
          $phone=$adminSocial['phone'];
          $fb=$adminSocial['fb'];
          $insta=$adminSocial['insta'];
          $whatsapp=$adminSocial['whatsapp'];
        }
      ?>
      <a href="<?php echo $fb;  ?>" target="_blank" class="d-inline">
      <i id="s-icon" class="fab fa-facebook-square" style="color:#4267B2"></i> </a>
      <a href="<?php echo $insta;  ?>" target="_blank" class="d-inline">
        <i  id="s-icon" class="fab fa-instagram" style="color:#e1306c"></i>
      </a>
      <a href="https://wa.me/+91<?php echo $whatsapp;  ?>" target="_blank" class="d-inline">
        <i  id="s-icon" class="fab fa-whatsapp"  style="color:#25D366"></i>
      </a>
      <h5>Address</h5>
      <p class="address">
        Corporate Office :
        Doon House, B-275(A),<br>First floor Sector-57,<br>Shushant Lok 3 Near Hong Kong Bazzar,<br>Gurugram Pin 122001, Haryana.
       <br><i class="fa fa-phone"></i> +91<?php echo $phone;  ?></p>
    </div>
      <div class="box">
        <h5>Quick Links</h5>
        <a href="<?php echo SITE_PATH; ?>">Home</a>
        <a href="<?php echo SITE_PATH; ?>#packages">Destinations</a>
        <a href="<?php echo SITE_PATH; ?>#services">Services</a>
        <a href="<?php echo SITE_PATH; ?>#offers">Exclusive Deals</a>
        <a href="<?php echo SITE_PATH; ?>#review">Testimonials</a>
        <a href="<?php echo SITE_PATH; ?>#about">About us</a>
      </div>
      <div class="box">
        <h5>Discuss Your Queries with us</h5>
        <form method="POST" action="">
          <input type="text" name="phone" id="phone" placeholder="Phone Number" required>
          <textarea name="query" id="query" cols="30" rows="10" placeholder="Any Query.." required></textarea>
          <button class="query-btn"  type="submit" name="submitQuery">Send</button>
        </form>
        </div>

     

  </div>

  <p class="credit"> created by <span> Bodhi Technology </span> | all rights reserved! </p>

</footer>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script src="<?php echo SITE_PATH; ?>asset/firebase.js"></script>

<script src="<?php echo SITE_PATH; ?>asset/bootstrap.min.js" ></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
<!-- Push notification js -->
   <script src="<?php echo SITE_PATH; ?>asset/push.min.js"></script>
   <script src="<?php echo SITE_PATH; ?>asset/serviceWorker.min.js"></script>

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>

<script type="text/javascript">
      window.addEventListener("scroll",function(){
        var nav =document.querySelector("nav");
        nav.classList.toggle("sticky",window.scrollY>50);
          })
</script>
<script type="text/javascript" src="<?php echo SITE_PATH; ?>asset/js_user/script.js"></script>
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


<?php
  
  if (isset($_POST['submitQuery'])) {
    $phone=$_POST['phone'];
    $query=$_POST['query'];
    $q=mysqli_query($con,"INSERT INTO `query`(`phone`, `query`) VALUES ('$phone','$query')");
    if($q){
      ?>
        <script type="text/javascript">swal("Thanks!","Thank you for your response!","success")</script>
      <?php
    }
  }

?>