<?php 

  include ('include\database.inc.php');
   include ('include\functions.inc.php');
   include ('include\constants.inc.php');


	if(isset($_POST['id'])){
	$pid=$_POST['id'];
	$row=mysqli_fetch_assoc( mysqli_query($con,"select * from package where id='$pid' ") );
	$packagePrice=$row['packagePrice'];

	$arr=array("status"=>"success","price"=>$packagePrice);
	echo json_encode($arr);
}









?>