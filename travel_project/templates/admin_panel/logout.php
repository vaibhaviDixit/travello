<?php

session_start();

include ('../include/functions.inc.php');

unset( $_SESSION['ADMIN']);
session_destroy();
redirect("../login.php");
?>
