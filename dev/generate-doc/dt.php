<?php
session_start();
$dtypeid = $_GET['q'];

 include_once('submitdt.php'); echo submitdt($dtypeid); 

?>