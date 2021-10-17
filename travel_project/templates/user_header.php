<?php

include 'include/database.inc.php';
include 'include/functions.inc.php';
include 'include/constants.inc.php';

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css'>


<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.1.1/assets/owl.carousel.min.css'>
<link rel='stylesheet' href='https://themes.audemedia.com/html/goodgrowth/css/owl.theme.default.min.css'>
<link rel="stylesheet" href="..\asset\css_user\home-css.css">

</head>
<body>
  <nav class="navbar">
    <div class="logo">
        <h1>Travel</h1>
    </div>         
    <ul class="nav-menu">
        <li class="nav-item"><a href="index.php">Home</a></li>
        <li class="nav-item"><a href="#about">About us</a></li>
        <li class="nav-item"><a href="login.php"><i class="material-icons">person</i></a></li>
        <li class="nav-item"><a href="cart.php"><i class="material-icons">shopping_cart</i></a></li>

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
