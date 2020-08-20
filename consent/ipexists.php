<?php
//session_start();


function ipexists($ip){
//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';

$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 


$sql = "SELECT DISTINCT ip FROM consent WHERE ip='$ip'";
$result = $conn->query($sql);

if ( ! $row = mysqli_fetch_array( $result ) ) {
    return 0;
}
else {
    $rip = $row['ip'];
    return $rip;
}

$conn->close();

}

?>

