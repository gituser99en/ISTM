<?php
session_start();
$catid = $_GET['q'];

include_once $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/doctypebycatergorydd.php'; echo dispdoctypebycatergorydd($catid); 

// include_once('submitdt.php'); echo submitdt($dtypeid); 

?>