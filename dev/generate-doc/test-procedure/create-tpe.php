<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}
 include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/gettptid.php';
//function dispcitydd($cid, $rid){
$tfid =  $_POST['tfid'];
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
$actual =  $_POST['actual'];
$pf =  $_POST['pf'];
//$tptid =  $_POST['dtid'];
$tptid = gettptid($did);

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

//connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//insert
$sql1 = "INSERT INTO test_procedure_field_execution (did, userid, tfid, gid, pid, actual, pf) VALUES ('$did', '$userid', '$tfid', '$gid', '$pid', '$actual', '$pf')";
$result1 = $conn->query($sql1);


 header("Location:/dev/generate-doc/callpage.php?userid=$userid&docidentifier=$did&gid=$gid&pid=$pid&docname=$dname&doctype=$doctypeid&tptid=$tptid");
	

//}
?>