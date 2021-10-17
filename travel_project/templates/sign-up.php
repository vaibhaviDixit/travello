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
        
        <input type="email" name="signUpEmail" id="signUpEmail" placeholder="Email Address">
        <input type="password" name="create-password" id="signUpPass" placeholder="Password">
        <input type="password" name="password" id="cPass"  placeholder="Confirm Password">
        <button type="submit"  id="signbtn" class="sign-up-btn" onclick="return valid()">Sign Up</button>

        <a href="login.php">Already have an account? Login</a>
        
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

  
  

  $("#signUpForm").on("submit",function(e){

      $("#signbtn").attr('disabled',true);
      $("#signbtn").html("Loading...");
    
     let email=$("#signUpEmail").val();
     let pass=$("#signUpPass").val();
     let cpass=$("#cPass").val();

     firebase.auth().createUserWithEmailAndPassword(email,pass).then(function(response){

        console.log(response);
        sendingVerifyEmail();

        
     })
     .catch(function(error){
        $("#msg").html("<div class='alert alert-success' role='alert'>"+error.message+"</div>");
        $("#signbtn").attr('disabled',false);
        $("#signbtn").html('Sign Up');

     })

    e.preventDefault();
    // alert("hii");

  });


//sen email 
function sendingVerifyEmail(){

  $("#signbtn").attr('disabled',true);
      $("#signbtn").html("Loading...");


  firebase.auth().currentUser.sendEmailVerification().then(function(response){
    console.log(response);

     $("#signbtn").attr('disabled',false);
     $("#signbtn").html('Sign Up');
     $("#signUpForm")[0].reset();

     $("#msg").html("<div class='alert alert-success' role='alert'>Thank you for Registration! Verify your Email... </div>");

  })
  .catch(function(error){
    console.log(error);

     $("#signbtn").attr('disabled',false);
     $("#signbtn").html('Sign Up');
     $("#signUpForm")[0].reset();

     $("#msg").html("<div class='alert alert-success' role='alert'>"+error.message+"</div>");

  })

}

//check validation

  function valid(){

    $("#msg").html("");

    let email=$("#signUpEmail").val();
    let pass=$("#signUpPass").val();
    let cpass=$("#cPass").val();

    if(email==""){
      $("#msg").html("<div class='alert alert-danger' role='alert'>Please enter your email</div>");
      return false;
    }

    if(pass=="" || cpass==""){
      $("#msg").html("<div class='alert alert-danger' role='alert'>Please enter your Password</div>");
      return false;
    }

    if(pass.length <7){
      $("#msg").html("<div class='alert alert-danger' role='alert'>Password too short! It must be atleast 6 characters!</div>");
      return false;
    }
    if(pass!=cpass){
      $("#msg").html("<div class='alert alert-danger' role='alert'>Passwords not matching</div>");
      return false;
    }

    return true;


  }



  </script>





</body>
</html>
