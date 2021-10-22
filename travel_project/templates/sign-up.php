
<?php



include ('include\database.inc.php');


?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="..\asset\css_user\login-signup-css.css"/>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Galada' rel='stylesheet'>
<link href='https://fonts.googleapis.com/css?family=Poppins' rel='stylesheet'>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">

<head>
<body>
  <button onclick="go_home()" id="home-btn"  class="home-btn"><i class="material-icons">keyboard_arrow_left</i></button>
    <script>
      function go_home(){
        window.location.href = "index.php";
      }
     
    </script>
  <div class="video-container">
    <video src="..\asset\img_user\vid-1.mp4" id="video-slider" loop autoplay muted></video>
</div>
<div class="container">
  <form method="post" id="signUpForm">
    <div class="box">
     
        <h1>Sign Up</h1>

       <span id="msg"></span>
        <div id="mainSignUpForm " style="display: flex;flex-direction: column;">
        <input type="text" name="signUpName" id="signUpName" placeholder="Name" required>
        <input type="text" name="signUpMob" id="signUpMob" placeholder="Mobile" required>
        <input type="text" name="signUpAdd" id="signUpAdd"  placeholder="Address" required>
        <div id="recaptcha-container"></div>
      </div>

        <input type="text" name="signUpOTP" id="signUpOTP" placeholder="OTP" style="display: none;">
        <button type="submit"  id="signbtn" class="sign-up-btn" onclick="return signUpvalidation()" >Sign Up</button>

        <a href="login.php">Already have an account? Login</a>
        
    </div>
  </form>
</div>


<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script src="../asset/firebase.js"></script>

<script>


// const firebaseConfig = {
//   apiKey: "AIzaSyCp0yBkzF012bf7otTruduYppXJSL5rkdk",
//   authDomain: "emailauth-e72dd.firebaseapp.com",
//   projectId: "emailauth-e72dd",
//   storageBucket: "emailauth-e72dd.appspot.com",
//   messagingSenderId: "1009272597079",
//   appId: "1:1009272597079:web:1e8d0ca93ec5f0cd0f1112",
//   measurementId: "G-H3W6S0PM7S"
// };

// // Initialize Firebase
// firebase.initializeApp(firebaseConfig);
// firebase.analytics();

  
  
  </script>





</body>
</html>
