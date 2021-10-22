<?php

session_start();

include ('include\database.inc.php');

$type=$_POST['type'];

if($type=="signUp"){


		$email=$_POST['email'];
		$pass=$_POST['password'];

		$check=mysqli_query($con,"select * from userlogin where email='$email' ");

		if(mysqli_num_rows($check)>0){
			$arr=array("status"=>"fail");
		   echo json_encode($arr);
		}
		else{

				$result=mysqli_query($con,"INSERT INTO `userlogin`(`email`, `password`) VALUES ('$email','$pass')");

				if($result){

				$arr=array("status"=>"success");
				echo json_encode($arr);

				}
				else{
					$arr=array("status"=>"fail");
				    echo json_encode($arr);
				}

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





?>