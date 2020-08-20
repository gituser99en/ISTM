<?php

session_start();

$tid = $_GET['q'];

//$_SESSION['countryid'] = $regid;
include $_SERVER['DOCUMENT_ROOT'].'/inc/func/getdoctype.php';
$typename = getdoctype($tid) ; 

 include_once('tyname.php'); echo tyname($tid, $typename); 


?>