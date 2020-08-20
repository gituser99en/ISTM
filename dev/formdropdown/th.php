<?php

session_start();

$name = $_GET['q'];

//$_SESSION['countryid'] = $regid;

 include_once('ihname.php'); echo ihname($name); 


?>