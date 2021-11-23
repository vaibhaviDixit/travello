<?php

session_start();

include ('include/functions.inc.php');
include ('include/constants.inc.php');

unset( $_SESSION['ADMIN']);
session_destroy();
redirect(SITE_PATH);
?>
