

<?php

session_start();

include ('../include/functions.inc.php');

unset( $_SESSION['CURRENT_USER']);
session_destroy();
redirect("../login.php");




?>
