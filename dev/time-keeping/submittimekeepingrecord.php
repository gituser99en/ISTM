<?php
session_start();

function subtkrec($gid, $pid, $userid, $username, $activity, $timeinmin){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
  //insert
$sql1 = "INSERT INTO time_keeping (gid, pid, userid, username, activity, timeinmin) VALUES ('$gid', '$pid', '$userid', '$username' ,'$activity', '$timeinmin')";
$result1 = $conn->query($sql1);
}
?>