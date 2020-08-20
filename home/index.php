<?php


// called by display-multiple-profile6
// calls dip() display-individula-profile.php
if (session_status() !== PHP_SESSION_ACTIVE) {session_start();}

if ($_SESSION['loggedin'] == '0' or $_SESSION['loggedin'] == '')
{
    header('Location:/login');
    


}else{
  $tpeoffset = 0;
  $userid = $_SESSION['userid'];
   header("Location:/dev/generate-doc/home/callpagehome.php?userid=$userid&tpeoffset=$tpeoffset");
    //header('Location:home.php');
}


?>