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
$sql1 = "INSERT INTO test_procedure_title (tclist, title, gid, pid, docid, tpid) VALUES ('$tcl', '$title', '$gid', '$pid', '$did', '$tpid')";
$result1 = $conn->query($sql1);


 header("Location:/dev/generate-doc/callpage.php?userid=$userid&docidentifier=$did&gid=$gid&pid=$pid&docname=$dname&doctype=$doctypeid");
	

//}
?>