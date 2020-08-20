<?php

session_start();

$name = $_GET['q'];

//$_SESSION['countryid'] = $regid;
include $_SERVER['DOCUMENT_ROOT'].'/inc/func/getusername.php';
$ownername = getusername($name) ; 

 include_once('ihname.php'); echo ihname($name, $ownername); 


?>