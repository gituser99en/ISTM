<?php
session_start();


    


//includes
//include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
//include $_SERVER['DOCUMENT_ROOT'].'/consent/ipexists.php';
include $_SERVER['DOCUMENT_ROOT'].'/consent/insertconsent.php';
//$uip = $_SESSION['IP_ADDR'];
$uipp = $_POST['ip'];
//echo'success';
//echo"$_SESSION['IP_ADDR']";
//echo $uip;
//echo $uipp;
//$ipe = ipexists($uipp);
//if ($ipe == 0){
 // echo 'insert';
echo insertconsent($uipp);
//  header('Location:/'); 
//} else{
 //   echo 'ipexists';
//   header('Location:/'); 
//  }
header("Location: http://istm.online/"); 
exit();
?>