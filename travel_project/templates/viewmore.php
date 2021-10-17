<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\asset\css_user\home-css.css"/>
    <link rel="stylesheet" href="..\asset\css_user\view-more-css.css"/>
<!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"> -->
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css'><link rel="stylesheet" href="..\asset\css_user\home-css.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'><link rel="stylesheet" href="..\asset\css_user\home-css.css">

</head>
<body>
  <!-- <nav class="navbar">
    <div class="logo">
        <h1>Travel</h1>
    </div>         
    <ul class="nav-menu">
        <li class="nav-item"><a href="#home">Home</a></li>
        <li class="nav-item"><a href="#about">About us</a></li>
        <li class="nav-item"><a href="login.html"><i class="material-icons">person</i></a></li>
        <li class="nav-item"><a href="#"><i class="material-icons">shopping_cart</i></a></li>

    </ul>
    <div class="mobile-view">
        <ul class="mobile-tab">
          <li><a href="#home"><i class='fa fa-home'></i></a>
            <span class="tooltiptext">Home</span>
        </li>
        <li><a href="#packages"><i class="fa fa-map-o" aria-hidden="true"></i></a>
          <span class="tooltiptext">Destinations</span>
        </li>
        <li ><a href="#"><i class="material-icons">shopping_cart</i></a>
            <span class="tooltiptext">Cart</span>
        </li>
          <li><a href="login.html"><i class="fa fa-user" aria-hidden="true"></i></a>
            <span class="tooltiptext">Profile</span>
        </li>
        </ul>
    </div>
 
</nav> -->
<script type="text/javascript">
      window.addEventListener("scroll",function(){
        var nav =document.querySelector("nav");
        nav.classList.toggle("sticky",window.scrollY>50);
          })
</script>

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

<div class="header">
         <h1>Travel</h1>
         <a href="home.php"><i class='fa fa-home'></i></a>
    </div>
    
    


    <section id="home" class="home">
      <!-- <div class="search-box">
        <button class="btn-search"><i class="fa fa-search"></i></button>
        <input type="text" class="input-search" placeholder="Type to Search...">
      </div> -->

      </div>
    <!-- partial -->
      <script src='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/js/swiper.min.js'></script><script  src="..\asset\js_user\script.js"></script>
  </section>

  <!-- packages section starts  -->
<section class="packages" id="packages">


  


<!-- Package catogery 1 -->

<h1 class="heading">      
  <span>E</span>
  <span>x</span>
  <span>p</span>
  <span>l</span>
  <span>o</span>
  <span>r</span>
  <span>e</span>
  &nbsp;&nbsp;&nbsp;
  <span>M</span>
  <span>o</span>
  <span>r</span>
  <span>e</span>
  &nbsp;&nbsp;&nbsp;&nbsp;
  <span>p</span>
  <span>l</span>
  <span>a</span>
  <span>c</span>
  <span>e</span>
  <span>s</span>

  <br/><br/>

  <!-- <div class="more-destinations">
        <div class="search">
            <input type="text" name="destination" id="destination" placeholder="Search Your Destination">
            <input type="button" value="Explore" class="search-btn" name="search-btn">    
        </div>

        <br/><br/> -->
</h1>
<div class="box-container">
<div class="box">
   <img src="..\asset\img_user\p-1.jpg" alt="">
    <div class="content">
        <h4><i id="map" class="fa fa-map-marker"></i> mumbai </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
        <div class="stars">
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star checked"></i>
            <i class="fa fa-star "></i>
            <i class="fa fa-star "></i>
        </div>
        <div class="price"> $90.00 <span>$120.00</span> </div>
        <div class="view-like">
          <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
          <div class="like-wrapper">
            <a href="javascript:void(0);" class="like-button">
              <i class="material-icons not-liked bouncy">favorite_border</i>
              <i class="material-icons is-liked bouncy">favorite</i>
              <span class="like-overlay"></span>
            </a>
        </div>
        </div>
        <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
    </div>
</div>

<div class="box">
    
    <img src="..\asset\img_user\p-2.jpg" alt="">
    <div class="content">
        <h4> <i id="map" class="fa fa-map-marker"></i> hawaii </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
        <div class="stars">
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star "></i>
          <i class="fa fa-star "></i>
      </div>
        <div class="price"> $90.00 <span>$120.00</span> </div>
        <div class="view-like">
          <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
          <div class="like-wrapper">
            <a href="javascript:void(0);" class="like-button">
              <i class="material-icons not-liked bouncy">favorite_border</i>
              <i class="material-icons is-liked bouncy">favorite</i>
              <span class="like-overlay"></span>
            </a>
        </div>
        </div>
        <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
    </div>
</div>

<div class="box">
    <img src="..\asset\img_user\p-3.jpg" alt="">
    <div class="content">
        <h4> <i id="map" class="fa fa-map-marker"></i> sydney </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
        <div class="stars">
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
      </div>
        <div class="price"> $90.00 <span>$120.00</span> </div>
        <div class="view-like">
          <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
          <div class="like-wrapper">
            <a href="javascript:void(0);" class="like-button">
              <i class="material-icons not-liked bouncy">favorite_border</i>
              <i class="material-icons is-liked bouncy">favorite</i>
              <span class="like-overlay"></span>
            </a>
        </div>
        </div>
        <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
    </div>
</div>

<div class="box">
    <img src="..\asset\img_user\p-4.jpg" alt="">
    <div class="content">
        <h4><i id="map" class="fa fa-map-marker"></i> paris </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
        <div class="stars">
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
      </div>
        <div class="price"> $90.00 <span>$120.00</span> </div>
        <div class="view-like">
          <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
          <div class="like-wrapper">
            <a href="javascript:void(0);" class="like-button">
              <i class="material-icons not-liked bouncy">favorite_border</i>
              <i class="material-icons is-liked bouncy">favorite</i>
              <span class="like-overlay"></span>
            </a>
        </div>
        </div>
        <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
    </div>
</div>

<div class="box">
    <img src="..\asset\img_user\p-5.jpg" alt="">
    <div class="content">
        <h4><i id="map" class="fa fa-map-marker"></i> tokyo </h4>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
        <div class="stars">
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star checked"></i>
          <i class="fa fa-star"></i>
          <i class="fa fa-star"></i>
      </div>
        <div class="price"> $90.00 <span>$120.00</span> </div>
        <div class="view-like">
          <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
          <div class="like-wrapper">
            <a href="javascript:void(0);" class="like-button">
              <i class="material-icons not-liked bouncy">favorite_border</i>
              <i class="material-icons is-liked bouncy">favorite</i>
              <span class="like-overlay"></span>
            </a>
        </div>
        </div>
        <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
    </div>
</div>

<div class="box">
        <img src="..\asset\img_user\p-6.jpg" alt="">
        <div class="content">
            <h4><i id="map" class="fa fa-map-marker"></i> eypt </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>
            <div class="price"> $90.00 <span>$120.00</span> </div>
            <div class="view-like">
              <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
              <div class="like-wrapper">
                <a href="javascript:void(0);" class="like-button">
                  <i class="material-icons not-liked bouncy">favorite_border</i>
                  <i class="material-icons is-liked bouncy">favorite</i>
                  <span class="like-overlay"></span>
                </a>
            </div>
            </div>
           <a href="destination-details.php#book"> <button class="book-btn">Book Now</button></a>
        </div>
    </div>

</div>
<!-- <div class="view-more"><a class="view-more-btn" href="viewmore.php">View More</a></div> -->


<div class="box-container">
    <div class="box">
       <img src="..\asset\img_user\p-1.jpg" alt="">
        <div class="content">
            <h4><i id="map" class="fa fa-map-marker"></i> mumbai </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
            <div class="stars">
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star checked"></i>
                <i class="fa fa-star "></i>
                <i class="fa fa-star "></i>
            </div>
            <div class="price"> $90.00 <span>$120.00</span> </div>
            <div class="view-like">
              <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
              <div class="like-wrapper">
                <a href="javascript:void(0);" class="like-button">
                  <i class="material-icons not-liked bouncy">favorite_border</i>
                  <i class="material-icons is-liked bouncy">favorite</i>
                  <span class="like-overlay"></span>
                </a>
            </div>
            </div>
            <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
        </div>
    </div>

    <div class="box">
        
        <img src="..\asset\img_user\p-2.jpg" alt="">
        <div class="content">
            <h4> <i id="map" class="fa fa-map-marker"></i> hawaii </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star "></i>
              <i class="fa fa-star "></i>
          </div>
            <div class="price"> $90.00 <span>$120.00</span> </div>
            <div class="view-like">
              <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
              <div class="like-wrapper">
                <a href="javascript:void(0);" class="like-button">
                  <i class="material-icons not-liked bouncy">favorite_border</i>
                  <i class="material-icons is-liked bouncy">favorite</i>
                  <span class="like-overlay"></span>
                </a>
            </div>
            </div>
            <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
        </div>
    </div>

    <div class="box">
        <img src="..\asset\img_user\p-3.jpg" alt="">
        <div class="content">
            <h4> <i id="map" class="fa fa-map-marker"></i> sydney </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>
            <div class="price"> $90.00 <span>$120.00</span> </div>
            <div class="view-like">
              <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
              <div class="like-wrapper">
                <a href="javascript:void(0);" class="like-button">
                  <i class="material-icons not-liked bouncy">favorite_border</i>
                  <i class="material-icons is-liked bouncy">favorite</i>
                  <span class="like-overlay"></span>
                </a>
            </div>
            </div>
            <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
        </div>
    </div>

    <div class="box">
        <img src="..\asset\img_user\p-4.jpg" alt="">
        <div class="content">
            <h4><i id="map" class="fa fa-map-marker"></i> paris </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>
            <div class="price"> $90.00 <span>$120.00</span> </div>
            <div class="view-like">
              <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
              <div class="like-wrapper">
                <a href="javascript:void(0);" class="like-button">
                  <i class="material-icons not-liked bouncy">favorite_border</i>
                  <i class="material-icons is-liked bouncy">favorite</i>
                  <span class="like-overlay"></span>
                </a>
            </div>
            </div>
            <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
        </div>
    </div>

    <div class="box">
        <img src="..\asset\img_user\p-5.jpg" alt="">
        <div class="content">
            <h4><i id="map" class="fa fa-map-marker"></i> tokyo </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>
            <div class="price"> $90.00 <span>$120.00</span> </div>
            <div class="view-like">
              <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
              <div class="like-wrapper">
                <a href="javascript:void(0);" class="like-button">
                  <i class="material-icons not-liked bouncy">favorite_border</i>
                  <i class="material-icons is-liked bouncy">favorite</i>
                  <span class="like-overlay"></span>
                </a>
            </div>
            </div>
            <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
        </div>
    </div>

    <div class="box">
        <img src="..\asset\img_user\p-6.jpg" alt="">
        <div class="content">
            <h4><i id="map" class="fa fa-map-marker"></i> eypt </h4>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Veritatis, nam!</p>
            <div class="stars">
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star checked"></i>
              <i class="fa fa-star"></i>
              <i class="fa fa-star"></i>
          </div>
            <div class="price"> $90.00 <span>$120.00</span> </div>
            <div class="view-like">
              <a class="view-details" href="destination-details.php"><i class="fa fa-eye"></i> View Details</a>
              <div class="like-wrapper">
                <a href="javascript:void(0);" class="like-button">
                  <i class="material-icons not-liked bouncy">favorite_border</i>
                  <i class="material-icons is-liked bouncy">favorite</i>
                  <span class="like-overlay"></span>
                </a>
            </div>
            </div>
            <button class="book-btn" href="destination-details.php#booknow">Book Now</button>
        </div>
    </div>

</div>
</section>

<?php

include 'user_footer.php';

?>
</body>
</html>
