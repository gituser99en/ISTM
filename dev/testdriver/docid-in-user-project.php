<?php
session_start();

function docidinuserproject($userid, $did){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/home/getusergroupid.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/home/getuserprojectid.php';
  
$_SESSION['gid'] = getusergroupid($_SESSION['userid']);
    $_SESSION['pid'] = getuserprojectid($_SESSION['userid']);
     $_SESSION['uprojid'] = getuserprojectid($_SESSION['userid']);
  
  //connection//
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//SQL///////////////////////////////////////////////////////////
//select
$sql1 = "SELECT pid FROM document_id WHERE id = '$did'";
$result1 = $conn->query($sql1);
  
  //while array
while($row1 = mysqli_fetch_array($result1)){
  // $etids[$c]= $row1["loginid"];
   
   $dpid= $row1["pid"];
   
}
  $tpid = 1;
  //if ($_SESSION['pid'] == $dpid){
    if ($tpid == $dpid){
var_dump($tpid, $dpid, $userid, $did);
  return 1;
      
  }else{
      var_dump($tpid, $dpid, $userid, $did);
    return 0;
  }
  
}
?>