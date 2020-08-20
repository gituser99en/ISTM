<?php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

//function dispcitydd($cid, $rid){
 $step =  $_POST['step'];
$gid =  $_POST['gid'];
$pid =  $_POST['pid'];
$tpid =  $_POST['tpid'];
$did =  $_POST['did'];
$userid = $_POST['userid'];
$doctypeid = $_POST['doctypeid'];
$dname =  $_POST['dname'];
 $actual =  $_POST['actual'];
//$tfid =  $_POST['tfid'];
 $pf =  $_POST['pf'];
//$tptid =  $_POST['tptid'];


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/gettptid.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/gettptfid.php';
$tptid = gettptid($did);
$tfid = gettptfid($tptid, $step, $tpid);
//connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//insert
$sql1 = "UPDATE test_procedure_field_execution SET actual = '$actual', pf = '$pf' WHERE did = '$did' AND tfid = '$tfid' ";
$result1 = $conn->query($sql1);


 header("Location:/dev/generate-doc/callpage.php?userid=$userid&docidentifier=$did&gid=$gid&pid=$pid&docname=$dname&doctype=$doctypeid&tptid='.$tptid.'");
	

//}
?>