<?php
session_start();
function sortbyf($gid, $pid, $did, $userid, $dtid, $sbid, $docname){
//$gid =  $_POST['gid'];
//$pid =  $_POST['pid'];
//$did =  $_POST['did'];
//$sb =  $_POST['sb'];
    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/inc/db/db.php';
  
  switch ($sbid) {
    case "1":
       include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/process-improvement/incident-form/viewincidentformdetails.php';
echo viewincidentformdetails1(1, 1, $did, $userid, $dtid, $sbid, $docname);
        break;
    case "2":
       include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/process-improvement/incident-form/viewincidentformdetailsobcat.php';
echo viewincidentformdetailsobcat(1, 1, $did,$userid, $dtid, $sbid, $docname);
        break;
   
    default:
         include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/process-improvement/incident-form/viewincidentformdetails.php';
echo viewincidentformdetails1(1, 1, $did,$userid, $dtid, 1, $docname);
}

}
?>