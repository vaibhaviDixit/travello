<?php
   session_start();
   
      include ('include/database.inc.php');
      include ('include/functions.inc.php');
      include ('include/constants.inc.php');
   
      $row=getAdminDetails();
   
      if(!isset($_SESSION['ADMIN'])){
         redirect(SITE_PATH.'templates/adminlogin');
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
      <!-- cdn for data table -->
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
      
      <link href="<?php echo SITE_PATH; ?>asset/css_user/reportbootstrap.min.css" rel="stylesheet">
      <link href="<?php echo SITE_PATH; ?>asset/css_user/reportbootstrap-responsive.min.css" rel="stylesheet">
      
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <!-- custom css -->
      <link href="<?php echo SITE_PATH; ?>asset/css_admin/custom.css" rel="stylesheet">
       
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="<?php echo SITE_PATH; ?>asset/img_user/icon-48x48.png" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
      <!-- font awesome cdn link  -->
      <link href="<?php echo SITE_PATH; ?>asset/css_user/reportbootstrap.min.css" rel="stylesheet">
      <link href="<?php echo SITE_PATH; ?>asset/css_user/reportbootstrap-responsive.min.css" rel="stylesheet">
      <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
      <link href="<?php echo SITE_PATH; ?>asset/css_user/reportfont-awesome.css" rel="stylesheet">
      <link href="<?php echo SITE_PATH; ?>asset/css_user/reportstyle.css" rel="stylesheet">
      <link href="<?php echo SITE_PATH; ?>asset/bootstrap.min.css" rel="stylesheet">
      <link href="<?php echo SITE_PATH; ?>asset/css_user/reports.css" rel="stylesheet">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="<?php echo SITE_PATH; ?>asset/img_user/icon-48x48.png" />
      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <!-- admin profile -->
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="<?php echo SITE_PATH; ?>asset/img_user/icon-48x48.png" />
      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
      <link href="<?php echo SITE_PATH; ?>asset/css_admin/app.css" rel="stylesheet">
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <title>Admin Panel</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="wrapper">
      <nav id="sidebar" class="sidebar js-sidebar">
         <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="<?php echo SITE_PATH; ?>"><span class="align-middle">Home</span></a>
            <ul class="sidebar-nav">
               <li class="sidebar-header">
                  Pages
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/index'; ?>">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>profile">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
                        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                     </svg>
                     <span class="align-middle">Profile</span>
                  </a>
               </li>
               <li class="sidebar-item" >
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>EditViewDetails">
                  <i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Edit View Details Page</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>reports">
                     <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-bar-chart" viewBox="0 0 16 16">
                        <path d="M4 11H2v3h2v-3zm5-4H7v7h2V7zm5-5v12h-2V2h2zm-2-1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h2a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1h-2zM6 7a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1V7zm-5 4a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1v3a1 1 0 0 1-1 1H2a1 1 0 0 1-1-1v-3z"/>
                     </svg>
                     <span class="align-middle">Reports</span>
                  </a>
               </li>
               <br/>
               <li class="sidebar-header">
                  Packages
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>AddElement">
                  <i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Add Package</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>ListElement">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Packages</span>
                  </a>
               </li>
               <li class="sidebar-header">
                  Bookings
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>AddBooking">
                  <i class="align-middle" data-feather="plus-circle"></i> <span class="align-middle">Add Bookings</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>ListBooking">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">Offline Bookings</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>onlineBookings">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">Online Bookings</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>paymentDues">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">Payment Dues</span>
                  </a>
               </li>
               <li class="sidebar-header">
                  Category
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>AddCategory">
                  <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add Package Catogery</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>listCategory">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Category</span>
                  </a>
               </li>
               <li class="sidebar-header">
                  Coupons
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>AddCoupon">
                  <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add Coupon</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>ListCoupon">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Coupon</span>
                  </a>
               </li>
              
         </div>
      </nav>
      <!-- admin navbar starts -->
      <div class="main">
      <nav class="navbar navbar-expand navbar-light navbar-bg">
         <a class="sidebar-toggle js-sidebar-toggle">
         <i class="hamburger align-self-center"></i>
         </a>
         <div class="navbar-collapse collapse">
            <ul class="navbar-nav navbar-align">
               <li class="nav-item">
                  <a class="nav-link dropdown-toggle userdropdown d-sm-inline-block" href="javascript:void(0)"  >
                  <img src="<?php  echo SITE_PROFILE_IMAGE.$row['profile']; ?>" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo $row['name']; ?></span>
                  </a>
                  <div class="card" style="width: 7rem;" id="userDrop">
                     <ul class="list-group list-group-flush">
                        <li class="list-group-item"><a class="dropdown-item" href="<?php echo SITE_PATH.'templates/admin_panel/' ?>logout">Log out</a></li>
                     </ul>
                  </div>
               </li>
            </ul>
         </div>
      </nav>