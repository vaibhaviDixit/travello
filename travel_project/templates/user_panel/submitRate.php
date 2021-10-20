<?php      

session_start();

include '../include/database.inc.php';
include '../include/functions.inc.php';
include '../include/constants.inc.php';


if(isset($_POST['stars']) && isset($_POST['msg'])){



 $stars=$_POST['stars'];
 $msg=$_POST['msg'];

 $uemail=$_SESSION['CURRENT_USER'];
 $getUid=mysqli_fetch_assoc(mysqli_query($con,"select * from userlogin where email='$uemail' "));

 $uid=$getUid['id'];

 $q=mysqli_query($con,"INSERT INTO `reviews`( `userId`, `description`, `stars`) VALUES ('$uid','$msg','$stars')");

if($q){
	$arr=array("status"=>"success");
	echo json_encode($arr);
}





}




?>