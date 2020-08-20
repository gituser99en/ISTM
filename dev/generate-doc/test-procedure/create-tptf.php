<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

//function dispcitydd($cid, $rid){
 $step =  $_POST['step'];
$gid =  $_POST['gid'];
$pid =  $_POST['pid'];
$did =  $_POST['did'];
$userid = $_POST['userid'];
$doctypeid = $_POST['doctypeid'];
$dname =  $_POST['dname'];
 $action =  $_POST['action'];
$tpid =  $_POST['tpid'];
 $expected =  $_POST['expected'];


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//insert
$sql1 = "INSERT INTO test_procedure_field_template (did, userid, step, gid, pid, action, expected, tpid) VALUES ('$did', '$userid', '$step', '$gid', '$pid', '$action', '$expected', '$tpid')";
$result1 = $conn->query($sql1);


 header("Location:/dev/generate-doc/callpage.php?userid=$userid&docidentifier=$did&gid=$gid&pid=$pid&docname=$dname&doctype=$doctypeid");
	

//}
?>