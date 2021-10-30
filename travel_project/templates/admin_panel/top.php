<?php
session_start();

   include ('..\include\database.inc.php');
   include ('..\include\functions.inc.php');
   include ('..\include\constants.inc.php');


if(!isset($_SESSION['ADMIN'])){
   redirect("../adminlogin.php");
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
      <link href="..\..\asset\css_user\reportbootstrap.min.css" rel="stylesheet">
      <link href="..\..\asset\css_user\reportbootstrap-responsive.min.css" rel="stylesheet">
   
   <!-- font awesome cdn link  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
      <!-- font awesome cdn link  -->
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
      <!-- custom css -->
      <link href="..\..\asset\css_admin\custom.css" rel="stylesheet">
      <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.11.1/css/jquery.dataTables.min.css">
      <link rel="preconnect" href="https://fonts.gstatic.com">
      <link rel="shortcut icon" href="..\..\asset\img_user\icon-48x48.png" />
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
      <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
   <!-- font awesome cdn link  -->

      <link href="..\..\asset\css_user\reportbootstrap.min.css" rel="stylesheet">
    <link href="..\..\asset\css_user\reportbootstrap-responsive.min.css" rel="stylesheet">
    
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,400,600" rel="stylesheet">
    <link href="..\..\asset\css_user\reportfont-awesome.css" rel="stylesheet">
    
    <link href="..\..\asset\css_user\reportstyle.css" rel="stylesheet">
    <link href="..\..\asset\bootstrap.min.css" rel="stylesheet">
    <link href="..\..\asset\css_user\reports.css" rel="stylesheet">

	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="..\..\asset\img_user\icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />


   <!-- admin profile -->
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<link rel="preconnect" href="https://fonts.gstatic.com">
	<link rel="shortcut icon" href="..\..\asset\img_user\icon-48x48.png" />

	<link rel="canonical" href="https://demo-basic.adminkit.io/" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
	<link href="..\..\asset\css_admin\app.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">

      <link rel="canonical" href="https://demo-basic.adminkit.io/" />
      <title>Admin Panel</title>
      <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;600&display=swap" rel="stylesheet">
   </head>
   <body>
      <div class="wrapper">
      <nav id="sidebar" class="sidebar js-sidebar">
         <div class="sidebar-content js-simplebar">
            <a class="sidebar-brand" href="..\index.php"><span class="align-middle">Home</span></a>
            <ul class="sidebar-nav">
               <li class="sidebar-header">
                  Pages
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="index.php">
                  <i class="align-middle" data-feather="sliders"></i> <span class="align-middle">Dashboard</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="profile.php">
                  <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-person-fill" viewBox="0 0 16 16">
								<path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
							  </svg> <span class="align-middle">Profile</span>
                  </a>
               </li>
               <li class="sidebar-item" >
                  <a class="sidebar-link" href="EditViewDetails.php">
                  <i class="align-middle" data-feather="edit-3"></i> <span class="align-middle">Edit View Details Page</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="reports.php">
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
                  <a class="sidebar-link" href="AddElement.php">
                  <i class="align-middle" data-feather="plus-square"></i> <span class="align-middle">Add Package</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="ListElement.php">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Packages</span>
                  </a>
               </li>


               <li class="sidebar-header">
                  Bookings
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="AddBooking.php">
                  <i class="align-middle" data-feather="plus-circle"></i> <span class="align-middle">Add Bookings</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="ListBooking.php">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Bookings</span>
                  </a>
               </li>
               <li class="sidebar-item ">
                  <a class="sidebar-link" href="paymentDues.php">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">Payment Dues</span>
                  </a>
               </li>

               <li class="sidebar-header">
                  Category
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="AddCategory.php">
                  <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add Package Catogery</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="listCategory.php">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Category</span>
                  </a>
               </li>

                 <li class="sidebar-header">
                  Coupons
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="AddCoupon.php">
                  <i class="align-middle" data-feather="plus"></i> <span class="align-middle">Add Coupon</span>
                  </a>
               </li>
               <li class="sidebar-item">
                  <a class="sidebar-link" href="ListCoupon.php">
                  <i class="align-middle" data-feather="list"></i> <span class="align-middle">List Coupon</span>
                  </a>
               </li>
   
         
            </ul>
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
                  <li class="nav-item dropdown">
                     <a class="nav-icon dropdown-toggle" href="#" id="alertsDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                           <i class="align-middle" data-feather="bell"></i>
                           <span class="indicator">4</span>
                        </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="alertsDropdown">
                        <div class="dropdown-menu-header">
                           4 New Notifications
                        </div>
                        <div class="list-group">
                           <a href="notifications.php" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-danger" data-feather="alert-circle"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">Update completed</div>
                                    <div class="text-muted small mt-1">Restart server 12 to complete the update.</div>
                                    <div class="text-muted small mt-1">30m ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="notifications.php" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-warning" data-feather="bell"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">Lorem ipsum</div>
                                    <div class="text-muted small mt-1">Aliquam ex eros, imperdiet vulputate hendrerit et.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="notifications.php" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-primary" data-feather="home"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">Login from 192.186.1.8</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="notifications.php" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <i class="text-success" data-feather="user-plus"></i>
                                 </div>
                                 <div class="col-10">
                                    <div class="text-dark">New connection</div>
                                    <div class="text-muted small mt-1">Christina accepted your request.</div>
                                    <div class="text-muted small mt-1">14h ago</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="dropdown-menu-footer">
                           <a href="notifications.php" class="text-muted">Show all notifications</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-icon dropdown-toggle" href="#" id="messagesDropdown" data-bs-toggle="dropdown">
                        <div class="position-relative">
                           <i class="align-middle" data-feather="message-square"></i>
                        </div>
                     </a>
                     <div class="dropdown-menu dropdown-menu-lg dropdown-menu-end py-0" aria-labelledby="messagesDropdown">
                        <div class="dropdown-menu-header">
                           <div class="position-relative">
                              4 New Messages
                           </div>
                        </div>
                        <div class="list-group">
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="..\..\asset\img_user\avatar-5.jpg" class="avatar img-fluid rounded-circle" alt="Vanessa Tucker">
                                 </div>
                                 <div class="col-10 ps-2">
                                    <div class="text-dark">Vanessa Tucker</div>
                                    <div class="text-muted small mt-1">Nam pretium turpis et arcu. Duis arcu tortor.</div>
                                    <div class="text-muted small mt-1">15m ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="..\..\asset\img_user\avatar-2.jpg" class="avatar img-fluid rounded-circle" alt="William Harris">
                                 </div>
                                 <div class="col-10 ps-2">
                                    <div class="text-dark">William Harris</div>
                                    <div class="text-muted small mt-1">Curabitur ligula sapien euismod vitae.</div>
                                    <div class="text-muted small mt-1">2h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="..\..\asset\img_user\avatar-4.jpg" class="avatar img-fluid rounded-circle" alt="Christina Mason">
                                 </div>
                                 <div class="col-10 ps-2">
                                    <div class="text-dark">Christina Mason</div>
                                    <div class="text-muted small mt-1">Pellentesque auctor neque nec urna.</div>
                                    <div class="text-muted small mt-1">4h ago</div>
                                 </div>
                              </div>
                           </a>
                           <a href="#" class="list-group-item">
                              <div class="row g-0 align-items-center">
                                 <div class="col-2">
                                    <img src="..\..\asset\img_user\avatar-3.jpg" class="avatar img-fluid rounded-circle" alt="Sharon Lessman">
                                 </div>
                                 <div class="col-10 ps-2">
                                    <div class="text-dark">Sharon Lessman</div>
                                    <div class="text-muted small mt-1">Aenean tellus metus, bibendum sed, posuere ac, mattis non.</div>
                                    <div class="text-muted small mt-1">5h ago</div>
                                 </div>
                              </div>
                           </a>
                        </div>
                        <div class="dropdown-menu-footer">
                           <a href="#" class="text-muted">Show all messages</a>
                        </div>
                     </div>
                  </li>
                  <li class="nav-item dropdown">
                     <a class="nav-icon dropdown-toggle d-inline-block d-sm-none" href="#" data-bs-toggle="dropdown">
                <i class="align-middle" data-feather="settings"></i>
              </a>

                     <a class="nav-link dropdown-toggle d-none d-sm-inline-block" href="#" data-bs-toggle="dropdown">
                <img src="..\..\asset\img_user\avatar.jpg" class="avatar img-fluid rounded me-1" alt="Charles Hall" /> <span class="text-dark"><?php echo getCurrentUserName(); ?></span>
              </a>
                     <div class="dropdown-menu dropdown-menu-end">
                        <a class="dropdown-item" href="profile.php"><i class="align-middle me-1" data-feather="user"></i> Profile</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="pie-chart"></i> Analytics</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="index.php"><i class="align-middle me-1" data-feather="settings"></i> Settings & Privacy</a>
                        <a class="dropdown-item" href="#"><i class="align-middle me-1" data-feather="help-circle"></i> Help Center</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="logout.php">Log out</a>
                     </div>
                  </li>
               </ul>
            </div>
         </nav>
         <!--  -->