

<?php

session_start();
//in progress
include ('include\database.inc.php');

$msg="";
if (isset($_POST['submit'])) {
	$email=htmlspecialchars( $_POST['email'] );
	$password=htmlspecialchars( $_POST['password'] );

	$sql="select * from userlogin where email='$email' and password='$password' ";
	$res=mysqli_query($con,$sql);

	if(mysqli_num_rows($res)>0){

		$row=mysqli_fetch_assoc($res);
		$_SESSION['admin_login']='yes';
		$_SESSION['admin_name']=$row['name'];
		redirect('user-panel\index.php');

	}
	else{
		$msg="Please enter valid login details";
	}
}



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
      window.location.href = "home.php";
    }
   
  </script>
  <div class="video-container">
    <video src="..\asset\img_user\vid-1.mp4" id="video-slider" loop autoplay muted></video>
</div>
<div class="container">
  <div class="box">
    <h1>Login</h1>
    <input type="text" type="email" name="email" placeholder="Enter your email" required autocomplete="off" />
    <input type="password" type="password" name="password" placeholder="Enter your password" required autocomplete="off" />       
    <!-- <a href="user_panel\userpanel.php"><button type="submit" id="login-btn" class="login-btn">Login</button></a> -->
    <div class="text-center mt-3">

											<input type="submit" class="login-btn" value="Sign In" name="submit" />
										</div>
    <a href="sign-up.php">Don't have an account? Sign up</a>
    
    <br/><br/>
    <a href="admin_panel/adminlogin.php">ADMIN LOGIN</a>

  </div>
</div>

     <script>
       document.getElementById("login-btn").onclick = function () {
                  location.href = "home.php";
              };
     </script>








</body>
</html>
