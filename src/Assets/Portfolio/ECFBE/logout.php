<?php
// on accede a la session
session_start();
// on detruit la session
session_destroy();
session_unset();
setcookie('localhost');
// redirect sur le form de connect°
header('location:index.php');
die;