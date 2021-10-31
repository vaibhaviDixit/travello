<?php
   session_start();
   
   include '../include/database.inc.php';
   include '../include/functions.inc.php';
   include '../include/constants.inc.php';
   
   $favArray=getFavourites();
   $row=getCurrentUserDetails();
   
   if(!isset($_SESSION['CURRENT_USER_ID'])){
   	redirect("../login.php");
   }
   
   
   ?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
      <meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
      <meta name="author" content="AdminKit">
      <meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
      <link rel="stylesheet" href="..\..\asset\css_user\style.css"/>
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
      <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
      <link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
      <link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="..\..\asset\img_user\icon-48x48.png" />
      <script src="../../asset/js_user/script.js"></script>
      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <title>User Panel</title>
      <link href="..\..\asset\bootstrap.min.css" rel="stylesheet">
      <link href="..\..\asset\css_admin\app.css" rel="stylesheet">
      <link href="..\..\asset\css_user\cards.css" rel="stylesheet">
      <link href="..\..\asset\css_user\rateus.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="wrapper">
      <nav id="sidebar" class="sidebar js-sidebar">
         <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="../index.php">
            <span class="align-middle">Home</span>
            </a>
            <ul class="sidebar-nav">
            <li class="sidebar-header">
               Pages
            </li>
            <li class="sidebar-item ">
               <a class="sidebar-link" href="profile.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                     <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                  </svg>
                  <span class="align-middle">Profile</span>
               </a>
            </li>
            <li class="sidebar-item ">
               <a class="sidebar-link" href="history.php">
               <i class="fa fa-history fa-lg" aria-hidden="true"></i> <span class="align-middle">History</span>
               </a>
            </li>
            <li class="sidebar-item ">
               <a class="sidebar-link" href="favourites.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-heart-fill" viewBox="0 0 16 16">
                     <path fill-rule="evenodd" d="M8 1.314C12.438-3.248 23.534 4.735 8 15-7.534 4.736 3.562-3.248 8 1.314z"/>
                  </svg>
                  <span class="align-middle">Favourites</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="notifications.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bell-fill" viewBox="0 0 16 16">
                     <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
                  </svg>
                  <span class="align-middle">Notifications</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="rateus.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16">
                     <path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/>
                  </svg>
                  <!--<i class="align-middle" data-feather="book"></i> --> <span class="align-middle">Rate Us</span>
               </a>
            </li>
            <li class="sidebar-item">
               <a class="sidebar-link" href="termsandconditions.php">
               <i class="align-middle" data-feather="book"></i> <span class="align-middle">Terms and Conditions</span>
               </a>
            </li>
            <div class="sidebar-cta">
            </div>
         </div>
      </nav>
      <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
         <a class="sidebar-toggle js-sidebar-toggle">
         <i class="hamburger align-self-center"></i>
         </a>
         <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
               <li class="nav-item">
                  <a class="nav-link dropdown-toggle userdropdown d-sm-inline-block" href="javascript:void(0)"  >
                  <img src="<?php  echo SITE_PROFILE_IMAGE.$row['profile']; ?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo getCurrentUserName(); ?></span>
                  </a>
                  <div class="card" style="width: 7rem;" id="userDrop">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="dropdown-item" href="logout.php">Log out</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </nav>