

<?php

session_start();

include ('include/database.inc.php');
include ('include/functions.inc.php');



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
<link rel="stylesheet" href="..\asset\css_user\login-signup-css.css">
<link rel='stylesheet' href='https://unpkg.com/aos@2.3.0/dist/aos.css'>
<link rel="stylesheet" href="..\asset\css_user\login-signup-css.css">


</head>
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

  <form method="post" id="loginForm">
  <div class="box">
    <h1>Login</h1>
     <span id="msg"></span>
    <input type="email" type="email" name="email" id="loginEmail" placeholder="Enter your email" required  />
    <input type="password" type="password" id="loginPass" name="password" placeholder="Enter your password" required  />    
    <div class="text-center mt-3">
    <button type="submit" id="loginBtn" class="login-btn"  name="submit" >Sign In</button>
    </div>

    <a href="sign-up.php">Don't have an account? Sign up</a>
    
    <br/><br/>
    <a href="admin_panel/adminlogin.php">ADMIN LOGIN</a>

  </div>
    </form>
</div>


<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.3.2/firebase-analytics.js"></script>

<script>



const firebaseConfig = {
  apiKey: "AIzaSyCp0yBkzF012bf7otTruduYppXJSL5rkdk",
  authDomain: "emailauth-e72dd.firebaseapp.com",
  projectId: "emailauth-e72dd",
  storageBucket: "emailauth-e72dd.appspot.com",
  messagingSenderId: "1009272597079",
  appId: "1:1009272597079:web:1e8d0ca93ec5f0cd0f1112",
  measurementId: "G-H3W6S0PM7S"
};

// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();


       

       //check email login

       $("#loginForm").on("submit",function(e){

          let loginEmail=$("#loginEmail").val();
          let loginPass=$("#loginPass").val();

          $("#loginBtn").attr('disabled',true);
          $("#loginBtn").html("Loading...");

          firebase.auth().signInWithEmailAndPassword(loginEmail,loginPass).then(function(response){
            console.log(response);

            let user=firebase.auth().currentUser;

            if(user!=null){ 
              let email=user.email;
              let eVerified=user.emailVerified;
              if(eVerified){

                 $.ajax({  
                   type:"POST",  
                   url:"register.php",  
                   data:"email="+email+"&password="+loginPass+"&type=login",
                   success:function(result){

                      msg=jQuery.parseJSON(result);

                     if(msg.status=="success"){
                       $("#msg").html("<div class='alert alert-success' role='alert'>Login Successfully</div>");
                        $("#loginBtn").attr('disabled',false);
                        $("#loginBtn").html("Sign In");
                        $("#loginForm")[0].reset();
                       window.location.href="user_panel/userpanel.php";
                     }
                     
                   }
                   
                  });

                
              }else{
             
               
              $("#msg").html("<div class='alert alert-success' role='alert'>Email not verified</div>");
               $("#loginBtn").attr('disabled',false);
              $("#loginBtn").html("Sign In");
              $("#loginForm")[0].reset();

              }
          }

            
          


          })
          .catch(function(error){
            console.log(error);
             $("#msg").html("<div class='alert alert-danger' role='alert'>Invalid Email or Password !</div>");
             $("#loginBtn").attr('disabled',false);
              $("#loginBtn").html("Sign In");
              $("#loginForm")[0].reset();

          })

          

         e.preventDefault();

       });


</script>








</body>
</html>
