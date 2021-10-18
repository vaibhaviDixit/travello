<?php
session_start();
include 'include/database.inc.php';
include 'include/functions.inc.php';
include 'include/constants.inc.php';


$pkgId=getSafeVal($_POST['id']);
$operation=getSafeVal($_POST['operation']);

if($operation=="add"){
	if(isset($_SESSION['CURRENT_USER'])){
		//user is logged in
		$uemail=$_SESSION['CURRENT_USER'];
		manageFav($uemail,$pkgId);
		

	}
	else{
		//user is not logged in

			$_SESSION['favourites'][]=array(
				'pckgId'=>$pkgId,

			);

		

		
	}
	$totalItems=count(getFavourites());
	$arr=array('totalItems'=>$totalItems);
	echo json_encode($arr);
}

if($operation=="remove"){

	if(isset($_SESSION['CURRENT_USER'])){
		//user is logged in
		$uemail=$_SESSION['CURRENT_USER'];
		$getUid=mysqli_fetch_assoc(mysqli_query($con,"select * from userlogin where email='$uemail' "));
		$uid=$getUid['id'];

		mysqli_query($con,"delete from favourites where userId='$uid' and pckgId='$pkgId' ");

		

	}
	else{
		//user is not logged in

			foreach ($_SESSION['favourites'] as $key => $value) {

				if($value['pckgId']==$pkgId){
					echo $value['pckgId'].$pckgId;
					unset($_SESSION['favourites'][$key]);

				}
			}

		
	}
	$arr=array('action'=>'remove');
	echo json_encode($arr);

}


?>