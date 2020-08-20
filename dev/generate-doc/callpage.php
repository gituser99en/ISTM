<?php
session_start();


    


//includes
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/test-basis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-condition/test-condition-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/test-procedure-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/test-procedure-template-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/test-procedure-execution-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/test-analysis/test-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/development-analysis/development-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/company-analysis/company-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/project-analysis/project-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/submission-analysis/submission-analysis-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/process-improvement/incident-form/incident-form-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/time-keeping/time-keeping-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-reports/test-report/test-report-doc.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-management/test-plan/test-plan-doc.php';

include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-procedure/gettptid.php';

if (isset($_GET['userid']))
   {

$userid = $_GET['userid'];
  $docidentifier = $_GET['docidentifier'];
  $gid = $_GET['gid'];
  $pid = $_GET['pid'];
  $docname = $_GET['docname'];
  $dtid = $_GET['doctype'];
   $sbid = $_GET['sbid'];
 // $tptid = $_GET['tptid'];
 $tptid = gettptid($docidentifier);
  switch ($dtid) {
    case "1":
       echo disptestbasis($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
    case "2":
       echo disptestcondition($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
    case "3":
        echo disptestproc($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
      case "4":
        echo disptestanal($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
      case "5":
        echo dispproanal($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
       case "10":
       echo disptestplan($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
      case "12":
        echo dispdevanal($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
       case "13":
        echo dispcomanal($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
       case "14":
        echo dispsubanal($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
      case "17":
        echo dispincidentform($userid, $docidentifier, $gid, $pid, $docname, $dtid, $sbid);
        break;
       case "18":
        echo disptk($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
      case "19":
        echo disptestprocexecution($userid, $docidentifier, $gid, $pid, $docname, $dtid, $tptid);
        break;
      case "20":
        echo disptestreport($userid, $docidentifier, $gid, $pid, $docname, $dtid, $tptid);
        break;
      case "21":
        echo disptestproct($userid, $docidentifier, $gid, $pid, $docname, $dtid);
        break;
      
       
       
    default:
        echo "";
}


		
    }


?>