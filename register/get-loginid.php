<?php
session_start();

function get_loginid($email){
    
//$email ='email';

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  include $_SERVER['DOCUMENT_ROOT'].'/inc/func/setnewusergroupid.php';
  include $_SERVER['DOCUMENT_ROOT'].'/inc/func/setnewuserprojectid.php';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT DISTINCT id, name FROM user WHERE email = '$email' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$loginid = $row["id"];
        $name = $row["name"];
	}
		
 
}
if ($loginid == 0) { 
 echo' failed';
}else{
  $tpeoffset = 0;
  $_SESSION['name'] = $name;
  $_SESSION['loginid'] = $loginid;
  $_SESSION['userid'] = $loginid;
  $_SESSION['consent'] = 1;
	$_SESSION['loggedin'] = TRUE;
    echo setnewusergroupid($loginid);
  echo setnewuserprojectid($loginid); 
 // header('Location:../home/home.php');
  header("Location:/dev/generate-doc/home/callpagehome.php?userid=$loginid&tpeoffset=$tpeoffset");
}  
 
//$_SESSION['groupid'] = '1';
//  $_SESSION['projectid'] = '1';
//$_SESSION['name'] = $name;
//$_SESSION['loginid'] = $loginid;
//$_SESSION['loggedin'] = TRUE;

//print_r ($_SESSION);
//var_dump($name, $loginid);


}
?>