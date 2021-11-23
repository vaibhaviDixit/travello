<?php 

session_start();

include ('include/database.inc.php');
include ('include/constants.inc.php');
include ('include/functions.inc.php');

$id=getSafeVal($_POST['confirmid']);
$cnf=mysqli_query($con,"update bookonline set status=1 where id='$id' ");
if($cnf){
	echo 1;
}				  
				   

				   

?>
