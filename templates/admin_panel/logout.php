<?php

session_start();

      include ($_SERVER['DOCUMENT_ROOT'].'/templates/include/database.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/templates/include/functions.inc.php');
      include ($_SERVER['DOCUMENT_ROOT'].'/templates/include/constants.inc.php');

unset( $_SESSION['ADMIN']);
session_destroy();
redirect(SITE_PATH);
?>
