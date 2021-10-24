<?php

session_start();

include 'include/database.inc.php';
include 'include/functions.inc.php';
include 'include/constants.inc.php';

$favArray=getFavourites();
$fav_count=count($favArray);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\asset\css_user\home-css.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/Swiper/4.3.3/css/swiper.css'>
<link rel="stylesheet" href="..\asset\css_user\home-css.css">
<link rel="stylesheet" href="..\asset\css_user\style.css">
 <link rel="stylesheet" href="..\asset\css_user\destination-details-css.css"/>
    <link rel="stylesheet" href="..\asset\css_user\home-css.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="../asset/bootstrap.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />

<!-- <link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'> -->
  <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
<link rel="stylesheet" href="..\asset\css_user\home-css.css">

</head>
<body>
  <nav class="navbar">
    <div class="logo">
        <img src="../asset/img_user/logo.png">
    </div>         
    <ul class="nav-menu">
        <li class="nav-item"><a href="index.php">Home</a></li>
        <li class="nav-item"><a href="#about">About us</a></li>
        <li class="nav-item"><a href="<?php if(isset($_SESSION['CURRENT_USER_ID'])){
            echo "user_panel/userpanel.php";
        }else{
            echo "login.php";
        } ?>">

        <?php if(isset($_SESSION['CURRENT_USER_ID']))
              { ?>Hi, <?php echo getCurrentUserName(); }
              else{
                ?>

        <i class="material-icons">person</i>
                <?php
              }

        ?>
        </a></li>
        <li class="nav-item"><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>
        <li class="nav-item" style="position: relative;"><a href="favourites.php"> <i class="material-icons is-liked bouncy">favorite</i></a> <span id="favItems" class="count"><?php echo $fav_count; ?> </li>

    </ul>
    <div class="mobile-view">
        <ul class="mobile-tab">
          <li><a href="index.php"><i class='fa fa-home'></i></a>
            <span class="tooltiptext">Home</span>
        </li>
        <li><a href="#packages"><i class="fa fa-map-o" aria-hidden="true"></i></a>
          <span class="tooltiptext">Destinations</span>
        </li>
        <li ><a href="cart.php"><i class="material-icons">shopping_cart</i></a>
            <span class="tooltiptext">Cart</span>
        </li>
          <li><a href="login.php"><i class="fa fa-user" aria-hidden="true"></i></a>
            <span class="tooltiptext">Profile</span>
        </li>
        </ul>
    </div>
 
</nav>


<div class="alert alert-success w-20 successMsg" id="addToCartSuccess" role="alert" >
<i class="fas fa-check-circle green-tick"></i>Added to cart successfully!
</div>

<div class="alert alert-success w-20 successMsg" id="addToFavSuccess" role="alert" >
<i class="fas fa-check-circle green-tick"></i>Added to Favourites successfully!
</div>