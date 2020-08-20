<?php
session_start();
//session initiation
if (!isset($_SESSION['loggedin']))
{
  $_SESSION['loggedin'] = "0";
}
if (!isset($_SESSION['loginid']))
{
  $_SESSION['loginid'] = "null";
}
if (!isset($_SESSION['consent']))
{
  $_SESSION['consent'] = "0";
}
if (!isset($_SESSION['IP_ADDR']))
{
  $_SESSION['IP_ADDR'] = "null";
}

$_SESSION['uprojid'] = "1";

$_SESSION['projectid'] = "1";
$_SESSION['groupid'] = "1";
$_SESSION['pid'] = "1";
$_SESSION['gid'] = "1";
$_SESSION['userid'] = "1";
$_SESSION['username'] = "Eric Neilson";
?>



<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ISTM INDEPENDENT SOFTWARE TESTING MODEL</title>
  <meta name="description" content="ISTM INDEPENDENT SOFTWARE TESTING MODEL - SOFTWARE TESTING PORTAL AND RESOURCES">
  <meta name="Eric Neilson" content="Eric Neilson">

  <link rel="stylesheet" href="homeex.css?v=1.0">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!--HEAD SCIPTS-->
   <script>
function showDocument(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../generate-doc/dt.php?q="+str, true);
  xhttp.send();
}
  </script>
   <script>
function showDocumentcat(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../generate-doc/dct.php?q="+str, true);
  xhttp.send();
}
  </script>
  
  <script>
function showDocumentbycat(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc2").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc2").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../generate-doc/dbct.php?q="+str, true);
  xhttp.send();
}
  </script>
  <script>
function showDocumentbycattpt(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc3").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc3").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "../generate-doc/dtpe.php?q="+str, true);
  xhttp.send();
}
  </script>

 <!-- <script src="js/scripts.js"></script>-->
</head>

<body>
    <!--TOP SCIPTS-->
  
   <!--CONTENT--> 
   
<!--HEADER TOPNAV H1--> 
<div class="flex-cont">
<div>

<div class="dropdown">
<button class="dropbtn">ISTM</button>
<div class="dropdown-content">
 <a href="http://www.istm.online/register/">Register</a>
<a href="http://www.istm.online/login/">Login</a>
 
<!--  <a href="http://www.istm.online/login/">Buy</a>-->
  <a href="http://www.istm.online/software-testing-artifacts/">ISTM Artifacts</a>
  <a href="http://www.istm.online/test-basis/test-basis-exmaple/test-basis.php">Test Basis Example</a>
   <a href="http://www.istm.online/test-condition/test-condition-exmaple/test-condition.php">Test Condition Example</a>
   <a href="http://www.istm.online/test-procedures/test-procedures-exmaple/test-procedures.php">Test Procedures Example</a>
</div>
</div>
<!--<div class="dropdown">
<button class="dropbtn">LOGIN</button>
<div class="dropdown-content">

<a href="http://www.istm.online/login/">Login</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">REGISTER</button>
<div class="dropdown-content">

 <a href="http://www.istm.online/register/">Register</a>
</div>
</div>
-->
<div class="dropdown">
<button class="dropbtn">SOFTWARE TESTING</button>
<div class="dropdown-content">

<a href="http://www.istm.online/software-testing-fundamentals/">Fundamentals</a>
<a href="http://www.istm.online/software-testing-life-cycle/">Life Cycle</a>
<a href="http://www.istm.online/software-testing-test-levels/">Test Levels</a>
 <a href="http://www.istm.online/software-testing-test-types/">Test Types</a>
<a href="http://www.istm.online/software-testing-test-design/">Test Design</a>
  <a href="http://www.istm.online/software-testing-static-techniques/">Static</a>
<a href="http://www.istm.online/software-testing-test-management/">Test Management</a>
  <a href="http://www.istm.online/software-testing-metrics/">Test Metrics</a>
  <a href="http://www.istm.online/software-testing-artifacts/">Artifacts</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">LINKS</button>
<div class="dropdown-content">

  <a href="http://www.istm.online/messages/page-under-construction.php">Links</a>
  <!--<a href="http://www.istm.online/software-testing-links/">Links</a>-->
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TOOLS</button>
<div class="dropdown-content">
<a href="http://www.istm.online/messages/page-under-construction.php">Tools</a>
<!--<a href="http://www.istm.online/software-testing-tools/">Tools</a>-->
</div>
</div>
<div class="dropdown">
<button class="dropbtn">DOWNLOADS</button>
<div class="dropdown-content">
<a href="http://www.istm.online/messages/page-under-construction.php">Downloads</a>
<!--<a href="http://www.istm.online/software-testing-downloads/">Downloads</a>-->
</div>
</div>
  
  <div class="dropdown">
<button class="dropbtn">HOME</button>
<div class="dropdown-content">

<a href="http://www.istm.online/login/">Login</a>
  <a href="http://www.istm.online/register/">Register</a>
  <a href="http://www.istm.online/home/">Home</a>
  <a href="http://www.istm.online/">Index</a>
 
</div>
</div>
</div> 
</div>     
</div>


<div class="header">   
	<div class="headerimg">
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="../inc/img/ISTM350.jpg" >
	</div> 
</div> 

<div class="flex-cont">
<h1>ISTM INDEPENDENT SOFTWARE TESTING MODEL</h1> 
</div> 
<div class="block-cont-69fl">
  <h3> Documents</h3>
<div class="flex-cont-r">
  <div class="flex-cont-29">
     Analysis
  <div>
  <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/listdocs/docid-cat-analysis.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev/listdocs/docid-cat-submission.php';
     include $_SERVER['DOCUMENT_ROOT'].'/dev/listdocs/docid-cat-tpt.php';
     include $_SERVER['DOCUMENT_ROOT'].'/dev/listdocs/docid-cat-tpe.php';
    include $_SERVER['DOCUMENT_ROOT'].'/dev/listdocs/docid-cat.php';
echo doccata(1, $_SESSION['uprojid']);


?>
    

    </div> 
     </div> 
   
  <div class="flex-cont-29">
  Test Management
  <div>
    
  <?php

echo doccat(2, $_SESSION['uprojid']);


?>
    </div> 
    </div> 
 <div class="flex-cont-29"> 
   Test Basis
  <div>
  <?php

echo doccat(3, $_SESSION['uprojid']);


?>
    
    </div> 
    </div> 
  </div> 
  <div>
  <br></br><br></br>
  </div>
  <div class="flex-cont-r">
  <div class="flex-cont-29">
    Test Condition
  <div>
  <?php

echo doccat(4, $_SESSION['uprojid']);


?>
    </div> 
     </div> 
  
  <div class="flex-cont-29">
    Test Procedure Templates
  <div>
  <?php

echo doccattpt(5, $_SESSION['uprojid']);


?>
    </div> 
    </div> 
    
      <div class="flex-cont-29">
    Test Procedure Execution
  <div>
  <?php

echo doccattpe(5, $_SESSION['uprojid']);


?>
    </div> 
    </div> 

  </div> 
  <div>
  <br></br><br></br>
  </div>
  <div class="flex-cont-r">
     <div class="flex-cont-29"> 
   Use Case
  <div>
  <?php

echo doccat(6, $_SESSION['uprojid']);


?>
    </div> 
    </div> 
    
    
  <div class="flex-cont-29">
     Traceability
  <div>
  <?php

echo doccat(7, $_SESSION['uprojid']);


?>
    </div> 
     </div> 
   
  <div class="flex-cont-29">
  Metrics and Measurement
  <div>
    
  <?php

echo doccat(8, $_SESSION['uprojid']);


?>
    </div> 
    </div> 

  </div> 
  <div>
 <br></br><br></br>
  </div>
  <div class="flex-cont-r">
    
     <div class="flex-cont-29"> 
   Test Reports
  <div>
  <?php

echo doccat(9, $_SESSION['uprojid']);


?>
    
    </div> 
    </div> 
    
  <div class="flex-cont-29">
     Process Improvement
  <div>
  <?php

echo doccat(10, $_SESSION['uprojid']);


?>
    </div> 
     </div> 
   
  <div class="flex-cont-29">
  Risk
  <div>
    
  <?php

echo doccat(11, $_SESSION['uprojid']);


?>
    </div> 
    </div> 

  </div> 
  <div>
  <br></br><br></br>
  </div>
  <div class="flex-cont-r">
    
     <div class="flex-cont-29"> 
   Process
  <div>
  <?php

echo doccat(12, $_SESSION['uprojid']);


?>
    
    </div> 
    </div> 
    
  <div class="flex-cont-29">
     Submission
  <div>
  <?php

echo doccat(13, $_SESSION['uprojid']);


?>
    </div> 
     </div> 
   
  <div class="flex-cont-29">
  Submission Analysis
  <div>
    
  <?php

echo doccats(1, $_SESSION['uprojid']);


?>
    </div> 
    </div> 

  </div> 
  <div>
  <br></br><br></br>
  </div>
  <div class="flex-cont-r">
    
   <div class="flex-cont-29"> 
   General 1
  <div>
  <?php

echo doccat(14, $_SESSION['uprojid']);


?>
    
    </div> 
    </div> 
     <div class="flex-cont-29"> 
   General 2
  <div>
  <?php

echo doccat(15, $_SESSION['uprojid']);


?>
    
    </div> 
    </div> 
 <div class="flex-cont-29"> 
   General 3
  <div>
  <?php

echo doccat(16, $_SESSION['uprojid']);


?>
    
    </div> 
    </div> 
  </div> 
  <div>
  <br></br><br></br>
  </div>



 <div class="flex-cont-r" style="border-top: 1px solid;
    border-color: rgb(110, 136, 169);padding-bottom: 10px; padding-top: 10px;color: rgb(110, 136, 169)">
   
   GENERATE DOCUMENT
   <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/doctypedd.php'; echo dispdoctypedd(); ?> 
       <div id="txtHintdoc">
                
                
  </div> 

</div>
 <div class="flex-cont-r" style="border-top: 1px solid;
    border-color: rgb(110, 136, 169);padding-bottom: 10px; padding-top: 10px;color: rgb(110, 136, 169); display:flex">
   
   GENERATE DOCUMENT
   <?php  include_once $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/doctypecatergorydd.php'; echo dispdoctypecatergorydd(); ?> 
       <div id="txtHintdoc1">
                
                
  </div> 
   <div id="txtHintdoc2">
                
                
  </div> 
    <div id="txtHintdoc3">
                
                
  </div> 

</div>

 <div class="flex-cont-r" style="border-top: 1px solid;
    border-color: rgb(110, 136, 169);padding-bottom: 10px; padding-top: 10px;color: rgb(110, 136, 169)">
   actions
</div>
</div> 


<div class="block-cont-29fr">
<div>
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/home/display-user-details.php';
echo dispuserdet(1);


?>
  </div>
       <div>
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/home/display-proj-user-details2.php';
echo dispprojuserdet2(1);


?>
  
   </div>
  <div>
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/home/display-user-proj-details.php';
echo dispuserprojdet(1);


?>
  </div>
 
     <div>
 <?php
include $_SERVER['DOCUMENT_ROOT'].'/dev/home/display-proj-user-details1.php';
echo dispprojuserdet1(1);


?>
  </div>
 
  <div>
     <p>p</p>
 
  </div> 
  <div>
  <p>p</p>
  </div> 
</div> 






<div class="flex-cont-cb">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<div class="flex-cont">
 <?php
    print_r ($_SESSION);
    ?>
</div> 
<div class="flex-cont-cb">
<br></br><br></br><br></br><br></br><br></br>
</div> 


<div class="flex-cont-fn">
<div class="dropup">
  <button class="dropupbtn">SUPPORT</button>
  <div class="dropup-content">
    <a href="http://www.istm.online/support/">SUPPORT</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">ABOUT</button>
  <div class="dropup-content">
    <a href="http://www.istm.online/about/">ABOUT</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">CONTACT</button>
  <div class="dropup-content">
    <a href="http://www.istm.online/support/">CONTACT</a>
  
  </div>
   </div>
  
  <div class="dropup">
  <button class="dropupbtn">HOME</button>
  <div class="dropup-content">
  <a href="http://www.istm.online/">ISTM</a>
  <a href="http://www.istm.online/home/">Home</a>
  </div>
   </div>
  

<!--
<div class="dropup">
  <button class="dropupbtn">JOBS</button>
  <div class="dropup-content">
   <a href="http://www.istm.online/software-testing-jobs/">JOBS</a>
  </div>

</div>
-->
<div class="dropup">
  <button class="dropupbtn">POLICY</button>
  <div class="dropup-content">
   <a href="http://www.istm.online/policy/">COOKIES</a>
     <a href="http://www.istm.online/policy/">PRIVACY</a>
     <a href="http://www.istm.online/policy/">TOS</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">SITEMAP</button>
  <div class="dropup-content">
   <a href="http://www.istm.online/sitemap/">SITEMAP</a>
  </div>

</div>

</div>

<!-- <script src="js/scripts.js"></script>-->
</body>
</html>