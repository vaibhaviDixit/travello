<?php

?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
<link rel="stylesheet" href="..\..\asset\css_user\login-signup-css.css">
<link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
<link rel="stylesheet" href="..\..\asset\css_user\login-signup-css.css">


</head>
<body>
  <button onclick="go_home()" id="home-btn"  class="home-btn"><i class="material-icons">keyboard_arrow_left</i></button>
  <script>
    function go_home(){
      window.location.href = "../index.php";
    }
   
  </script>
  <div class="video-container">
    <video src="..\..\asset\img_user\vid-1.mp4" id="video-slider" loop autoplay muted></video>
</div>
<div class="container">

  <div class="box">
    <form method="post" id="adminloginForm" class="text-center">
    <h1>Admin Login</h1>
   <span id="msg"></span>
     <div id="mainLoginForm" style="display: flex; flex-direction: column; justify-content: center; align-items: center;">
    <input type="text" name="phone" id="adminloginPhone" placeholder="Enter your Phone" required  />   
    <div class="text-center mt-3">
    <button type="submit" id="loginBtn" class="login-btn"  name="submit" >Continue</button>
    </div>
  </div>
  </form>

    <div class="adminloginVerify" style="display: none; flex-direction: column; justify-content: center; align-items: center;">
      <div id="recaptcha-container"></div>
      <input type="text" id="adminloginOTP" name="adminloginOTP" placeholder="OTP" required  /> 
      <button type="submit"  id="verifyAdminLoginOtp" class="login-btn"  name="submit" >Verify</button>
    </div>

  
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script src="../../asset/firebase.js"></script>


</body>
</html>
