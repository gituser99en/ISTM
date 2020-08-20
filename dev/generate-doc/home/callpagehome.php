<?php
session_start();


    


//includes
/*include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/test-basis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-condition/test-condition-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/test-procedure-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/test-procedure-execution-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/test-analysis/test-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/development-analysis/development-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/company-analysis/company-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/project-analysis/project-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/submission-analysis/submission-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/process-improvement/incident-form/incident-form-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/time-keeping/time-keeping-doc.php';
*/

//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/home/home-page-example-pagination1.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/home/home.php';



if (isset($_GET['userid']))
   {

$userid = $_GET['userid'];
  $tpeoffset = $_GET['tpeoffset'];
//  $docidentifier = $_GET['docidentifier'];
 // $gid = $_GET['gid'];
 // $pid = $_GET['pid'];
//  $docname = $_GET['docname'];
//  $dtid = $_GET['doctype'];
//   $sbid = $_GET['sbid'];
//  $tptid = $_GET['tptid'];

  
   
      // echo disphome($userid, $docidentifier, $gid, $pid, $docname, $dtid);
  echo disphome($userid, $tpeoffset);
       


		
    }


?>