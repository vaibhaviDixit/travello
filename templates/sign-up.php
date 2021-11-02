<?php



include ('include/database.inc.php');
include ('include/constants.inc.php');

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="<?php echo SITE_PATH; ?>asset/css_user/login-signup-css.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="apple-touch-icon" sizes="76x76" href="<?php echo SITE_PATH; ?>asset/logo/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo SITE_PATH; ?>asset/logo/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo SITE_PATH; ?>asset/logo/favicon-16x16.png">
    <link rel="manifest" href="<?php echo SITE_PATH; ?>asset/logo/site.webmanifest">
    <link rel="mask-icon" href="<?php echo SITE_PATH; ?>asset/logo/safari-pinned-tab.svg" color="#5bbad5">
<meta name="msapplication-TileColor" content="#da532c">
<meta name="theme-color" content="#ffffff">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<head>
<body>
  <button onclick="go_home()" id="home-btn"  class="home-btn"><i class="material-icons">keyboard_arrow_left</i></button>
    <script>
      function go_home(){
        window.location.href = "<?php echo SITE_PATH; ?>";
      }
     
    </script>
  <div class="video-container">
    <video src="<?php echo SITE_PATH; ?>asset/img_user/vid-1.mp4" id="video-slider" loop autoplay muted></video>
</div>
<div class="container">
  <form method="post" id="signUpForm">
    <div class="box">
     
        <h1>Sign Up</h1>

       <span id="msg"></span>
        <div id="mainSignUpForm" style="display: flex;flex-direction: column; align-items: center;">
        <input type="text" name="signUpName" id="signUpName" placeholder="Name" required>
        <input type="text" name="signUpMob" id="signUpMob" placeholder="Mobile" required>
        <input type="text" name="signUpAdd" id="signUpAdd"  placeholder="Address" required>
        <button type="submit"  id="signbtn" class="sign-up-btn" onclick="return signUpvalidation()" >Sign Up</button>
       </div>
       <div id="OTP" style="display: none;">
        <div id="recaptcha-container"></div>
        <input type="text" name="signUpOTP" id="signUpOTP" placeholder="OTP" >
        <button type="submit"   id="verifybtn" class="sign-up-btn" >Verify</button>
        </div>

        

        <a href="<?php echo SITE_PATH; ?>templates/login">Already have an account? Login</a>
        
    </div>
  </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script src="<?php echo SITE_PATH; ?>asset/firebase.js"></script>


</body>
</html>
