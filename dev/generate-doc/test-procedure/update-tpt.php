<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

//function dispcitydd($cid, $rid){
 $tcl =  $_POST['tcl'];
$gid =  $_POST['gid'];
$pid =  $_POST['pid'];
$did =  $_POST['did'];
$userid = $_POST['userid'];
$doctypeid = $_POST['doctypeid'];
$dname =  $_POST['dname'];
 $title =  $_POST['title'];
$tpid =  $_POST['tpid'];



//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//insert
$sql1 = "UPDATE test_procedure_title SET tclist = '$tcl', title = '$title' WHERE did = '$did' AND tpid = '$tpid' ";
$result1 = $conn->query($sql1);


 header("Location:/dev/generate-doc/callpage.php?userid=$userid&docidentifier=$did&gid=$gid&pid=$pid&docname=$dname&doctype=$doctypeid");
	

//}
?>