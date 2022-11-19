<?php

// print_r($_SERVER['PHP_SELF']);


session_start();
session_destroy(); //logout-session
header('location:./sign.php');

?>  