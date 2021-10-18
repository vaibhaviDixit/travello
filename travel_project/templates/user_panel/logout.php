

<?php

session_start();

include ('../include/functions.inc.php');

unset( $_SESSION['CURRENT_USER']);
redirect("../login.php");




?>
