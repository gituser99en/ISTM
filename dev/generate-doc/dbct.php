<?php
session_start();
$dtypeid = $_GET['q'];
$pid = $_SESSION['pid'];

if ($dtypeid==19){
include_once $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/doctypebycatergorytptdd.php'; echo dispdoctypebycatergorytptdd($pid); 
}else{
include_once $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/submitdt.php'; echo submitdt($dtypeid); 
}
?>