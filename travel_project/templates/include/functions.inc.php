<?php


function redirect ($path)
{
    ?>
    <script>
        window.location.href='<?php echo $path ?>'
    </script>
    <?php
    die();
}

//print array
function pra($arr){
	echo "<pre>";
	print_r($arr);
}




function getSafeVal($str){
	global $con;
	$str=mysqli_real_escape_string($con,htmlspecialchars($str));
	return $str;
}



//if user is logged in then add its favorites items in database
function manageFav($uemail,$pckgId){

    global $con;
  
    $uid=$_SESSION['CURRENT_USER_ID'];


    $res=mysqli_query($con,"select * from favourites where userId='$uid' and pckgId='$pckgId'  ");

        //insert into db
        if(mysqli_num_rows($res)==0){
            mysqli_query($con,"insert into favourites(userId, pckgId) VALUES ('$uid','$pckgId')");

        }

}

function getUserFav(){
    global $con;
    $arr=array();
    $uid=$_SESSION['CURRENT_USER_ID'];

    $res=mysqli_query($con,"select * from favourites where userId='$uid' ");
    while ($row=mysqli_fetch_assoc($res) ) {
        $arr[]=$row;
    }
    return $arr;

}

function getFavourites(){
    $fav_array=array(); //store fav

if(isset($_SESSION['CURRENT_USER_ID'])){
  //if user is logged in get fav of user from database
  $getUserFav=getUserFav();

  foreach ($getUserFav as $key => $value) {

   $fav_array[]= array(
        'pckgId'=>$value['pckgId']

      );
  }
 
}
else{

  //if user is not logged in then get cart from session
  if (isset($_SESSION['favourites']) && count($_SESSION['favourites'])>0) {
    $fav_array=$_SESSION['favourites'];
  }

}
return $fav_array;

}

function getCurrentUserName(){
     global $con;
    $uid=$_SESSION['CURRENT_USER_ID'];
    $getname=mysqli_fetch_assoc(mysqli_query($con,"select * from user where id ='$uid' "));
    $name=$getname['name'];
    return $name;
}


?>