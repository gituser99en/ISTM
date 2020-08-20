<?php

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
//include '../../../inc/db/db.php';

//connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
   echo'fail';
    die("Connection failed: " . $conn->connect_error);
 
} 

echo'success';

?>