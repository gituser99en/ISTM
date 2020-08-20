<?php
session_start();

function doccattpep($cid, $projid, $tpeoffset){
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  include_once $_SERVER['DOCUMENT_ROOT'].'/dev/listdocs/pagination/doc-list-typep.php';
  
  
  
  //connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

//select
$sql1 = "SELECT * FROM document_type WHERE catid = '$cid' AND id ='19'";
$result1 = $conn->query($sql1);
//$docs=array();
  $ctr='0';
  //while array
while($row1 = mysqli_fetch_array($result1)){
 $docs= $row1["id"];
  
  $docsa[]= $row1["id"];
  
  $doccat[$ctr]=$docs;
   
  // $docs[$ctr]= $row1["id"];
 // array()= $row1["id"];
   $ctr ++;
 // echo $docs;
}
  $numres = count($docsa);
 // echo $doccat[0];
 // echo $numres;
//  echo $docsa;
 // echo $docs;
 // $docs1 = $docs;
// return ; 
  
  $test = implode(', ', $docsa);

 // echo $test;
  
  $test1 = "1, 2, 3";
  
  echo doclisttypep($projid, $test, $tpeoffset);
}
?>