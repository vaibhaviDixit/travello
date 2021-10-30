

<?php

session_start();

include ('../include/functions.inc.php');

unset( $_SESSION['CURRENT_USER_ID']);
session_destroy();
redirect("../login.php");




?>
