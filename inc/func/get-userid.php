<?php
session_start();

//function get_loginid($email){
    
$email ='email';

//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

$con = mysqli_connect($DATABASE_HOST, $DATABASE_USER, $DATABASE_PASS, $DATABASE_NAME);
if ( mysqli_connect_errno() ) {
	// If there is an error with the connection, stop the script and display the error.
	die ('Failed to connect to MySQL: ' . mysqli_connect_error());
}

$sql = "SELECT * FROM user_register WHERE email = '$email' ";
$result = $con->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
		
		$loginid = $row["id"];
        $name = $row["name"];
	}
		
        
}

$_SESSION['name'] = $name;
$_SESSION['loginid'] = $loginid;
$_SESSION['loggedin'] = TRUE;

print_r ($_SESSION);
var_dump($name, $loginid);


//}
?>