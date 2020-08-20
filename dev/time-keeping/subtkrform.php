<?php
session_start();


    
$gid = $_POST['gid'];
$pid = $_POST['pid'];
$userid = $_POST['userid'];
$uusername = $_POST['uusername'];
//$activity = $_POST['activity'];
$activityid = $_POST['activityid'];
$timeinmin = $_POST['timeinmin'];

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
  //insert
$sql1 = "INSERT INTO time_keeping (gid, pid, userid, username, activityid, timeinmin) VALUES ('$gid', '$pid', '$userid', '$uusername' ,'$activityid', '$timeinmin')";
$result1 = $conn->query($sql1);

?>