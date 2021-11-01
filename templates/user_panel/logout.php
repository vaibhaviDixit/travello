<?php

session_start();

include ('include/functions.inc.php');
include ('include/constants.inc.php');

unset( $_SESSION['CURRENT_USER_ID']);
session_destroy();
redirect(SITE_PATH.'templates/login');




?>
