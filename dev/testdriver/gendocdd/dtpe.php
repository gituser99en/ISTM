<?php
session_start();
$did = $_GET['q'];

$_SESSION['pid'] =1;
$_SESSION['uprojid'] = "1";

$_SESSION['projectid'] = "1";
$_SESSION['groupid'] = "1";
$_SESSION['gid'] = "1";
$_SESSION['userid'] = "1";
$doctypeid =19;

//header('Location: /dev/generate-doc/callpage.php?userid='.$userid.'&docidentifier='.$did.'&gid='.$gid.'&pid='.$pid.'&docname='.$name.'&doctype='.$doctypeid.'');

//include_once $_SERVER['DOCUMENT_ROOT'].'/dev/testdriver/gendocdd/doctypebycatergorydd.php'; echo dispdoctypebycatergorydd($catid); 

 include_once('submitdttpe.php'); echo submitdttpe($dtypeid, $did); 

?>