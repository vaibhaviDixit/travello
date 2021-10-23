<?php

session_start();

include ('include\database.inc.php');

$type=$_POST['type'];

if($type=="signUp"){


		$name=$_POST['name'];
		$mobile=$_POST['mobile'];
		$add=$_POST['add'];


		$check=mysqli_query($con,"INSERT INTO `user`(`name`, `mobile`, `address`) VALUES ('$name','$mobile','$add') ");

		if(mysqli_num_rows($check)>0){
			$arr=array("status"=>"success","msg"=>"Registered successfully!");
			$check=mysqli_query($con,"select * from user where mobile='$mobile' ");
			$row=mysqli_fetch_assoc($check);
			$_SESSION['CURRENT_USER_ID']=$row['id'];
		   echo json_encode($arr);
		}
		else{

		  $arr=array("status"=>"fail","msg"=>"Please Try Again");
		   echo json_encode($arr);
		}


}

if($type=="checkMobile"){


		$mobile=$_POST['mobile'];

		$check=mysqli_query($con,"select * from user where mobile='$mobile' ");

		if(mysqli_num_rows($check)>0){
			$arr=array("status"=>"success","msg"=>"Enter OTP sent to ".$mobile);
		    echo json_encode($arr);
		}
		else{
			$arr=array("status"=>"fail","msg"=>"Mobile no. not registered ");
		    echo json_encode($arr);

		}
		



}

if($type=="login"){


		$mobile=$_POST['mobile'];

		$check=mysqli_query($con,"select * from user where mobile='$mobile' ");

		if(mysqli_num_rows($check)>0){
			$row=mysqli_fetch_assoc($check);
			$_SESSION['CURRENT_USER_ID']=$row['id'];
			$arr=array("status"=>"success","msg"=>"login successfully");
		    echo json_encode($arr);
		}
		else{
			$arr=array("status"=>"fail","msg"=>"Unable to login!");
		    echo json_encode($arr);

		}
		



}
if($type=="adminlogin"){


		$mobile=$_POST['mobile'];

		$check=mysqli_query($con,"select * from admin where mobile='$mobile' ");

		if(mysqli_num_rows($check)>0){
			$row=mysqli_fetch_assoc($check);
			$_SESSION['ADMIN']=$row['id'];
			$arr=array("status"=>"success","msg"=>"login successfully");
		    echo json_encode($arr);
		}
		else{
			$arr=array("status"=>"fail","msg"=>"Unable to login!");
		    echo json_encode($arr);

		}
		



}
if($type=="checkAdminMobile"){

	$mobile=$_POST['mobile'];

		$check=mysqli_query($con,"select * from admin where mobile='$mobile' ");

		if(mysqli_num_rows($check)>0){
			$arr=array("status"=>"success","msg"=>"Enter OTP sent to ".$mobile);
		    echo json_encode($arr);
		}
		else{
			$arr=array("status"=>"fail","msg"=>"Mobile no. not registered ");
		    echo json_encode($arr);

		}

}



?>