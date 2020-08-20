<?php

session_start();

function disptk($userid, $docidentifier, $gid, $pid, $docname, $doctypeid){

//  include $_SERVER['DOCUMENT_ROOT'].'/inc/func/checkgeneratetestanalysis.php';
//  include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/test-analysis/gentaq.php';
  include $_SERVER['DOCUMENT_ROOT'].'/inc/func/document/display-doc-id.php';
  include $_SERVER['DOCUMENT_ROOT'].'/inc/js/time-keeping/tkactivitydd.js';
   include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/time-keeping/tkactivitydd.php';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/time-keeping/viewtimekeepingbyuser.php';
  include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/time-keeping/viewtimekeepingbyproject.php';

  
//  $docstatus = ctagen($docidentifier);
//  if ($docstatus == 0){
// echo gentaq($gid, $pid, $docidentifier);
//  }

echo'
<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ISTM INDEPENDENT SOFTWARE TESTING MODEL</title>
  <meta name="description" content="ISTM INDEPENDENT SOFTWARE TESTING MODEL - SOFTWARE TESTING RESOURCES">
  <meta name="Eric Neilson" content="Eric Neilson">

  <link rel="stylesheet" href="http://www.istm.online/dev/generate-doc/time-keeping/tk-form.css?v=1.0">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!--HEAD SCIPTS-->
    <script>
function showDocument(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHint").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHint").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "time-keeping/tka.php?q="+str, true);
  xhttp.send();
}
  </script>
</head>

<body>
    <!--TOP SCIPTS-->
  
   <!--CONTENT--> 
   
<!--HEADER TOPNAV H1--> ';
  echo'
<div class="flex-cont">
<div>

<div class="dropdown">
<button class="dropbtn">ISTM</button>
<div class="dropdown-content">
 <a href="http://www.istm.online/register/">Register</a>
<a href="http://www.istm.online/login/">Login</a>
 
<!--  <a href="http://www.istm.online/login/">Buy</a>-->
  <a href="http://www.istm.online/software-testing-artifacts/">ISTM Artifacts</a>
 <a href="http://www.istm.online/test-basis/test-basis-example.php">Test Basis Example</a>
 <a href="http://www.istm.online/test-condition/test-condition-example.php">Test Condition Example</a>
  <a href="http://www.istm.online/test-procedures/test-procedure-example-doc.php">Test Procedure Example</a>
   <a href="http://www.istm.online/test-procedures/test-procedure-execution-example-doc.php">Test Procedure Execution Example</a>
 
   
<!--  <a href="http://www.istm.online/test-basis/test-basis-exmaple/test-basis.php">Test Basis Example</a>
<a href="/dev/generate-doc/callpage.php?userid=1&docidentifier=3&gid=1&pid=1&docname=ISTM-Index-Test-Procedure&doctype=3">Test Procedure Example</a>
   <a href="http://www.istm.online/test-condition/test-condition-exmaple/test-condition.php">Test Condition Example</a>
   <a href="http://www.istm.online/test-procedures/test-procedures-exmaple/test-procedures.php">Test Procedures Example</a>-->
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
  <!--
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
  <a href="http://www.istm.online/software-testing-artifacts/">Artifacts</a>
</div>
</div>
-->
<div class="dropdown">
<button class="dropbtn">LINKS</button>
<div class="dropdown-content">

 <!-- <a href="http://www.istm.online/messages/page-under-construction.php">Links</a>-->
  <a href="http://www.istm.online/software-testing-links/">Links</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TOOLS</button>
<div class="dropdown-content">
<!--<a href="http://www.istm.online/messages/page-under-construction.php">Tools</a>-->
<a href="http://www.istm.online/software-testing-tools/">Tools</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">ISTM DOWNLOADS</button>
<div class="dropdown-content">
<a href="http://www.istm.online/software-testing-downloads/">ISTM Downloads</a>
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

';


echo'
<div class="header">   
	<div class="headerimg">
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="../../../inc/img/ISTM350.jpg" >
	</div> 
</div> 
';

echo'
<div class="flex-cont">
<h1>'; echo $docname; echo'</h1> 
</div> 
';
  

echo'
<div class="flex-cont" style="justify-content:left">
  <div class="flex-cont-50" style="width:50%"> ';
  echo dispdocid($docidentifier);
 echo' </div>';

echo'
 </div> 
 ';
echo'</div> 


';
echo'
<div class="flex-cont">
<h2 style="
    border-bottom: 0px;
">SUBMIT TIME KEEPING RECORD</h2>
</div>
<div class="flex-cont" style="
   
    border-bottom: 1px solid;
    border-color:rgb(110, 136, 169);
    padding-top: 15px;
">
<form action="time-keeping/subtkrform.php" method="post" style="
    display: flex;
    height: 20px;
">
 <input type="hidden" id="doctypeid" name="doctypeid" value="';echo $doctypeid;echo'" >
 <input type="hidden" id="did" name="did" value="';echo $docidentifier;echo'" >
  <input type="hidden" id="docname" name="docname" value="';echo $docname;echo'" >
  <label for="gid" style="
    width: 50px;
    color:rgb(110, 136, 169);
">GID:</label><br>
  <input type="text" id="gid" name="gid" value="';echo $_SESSION['gid'];echo'"style="
    width: 50px;
    border: 1px solid;
 border-color:rgb(110, 136, 169);
"><br>
   <label for="pid" style="
    width: 50px;
    padding-left: 10px;
    color:rgb(110, 136, 169);
">PID:</label><br>
  <input type="text" id="pid" name="pid" value="';echo $_SESSION['pid'];echo'" style="
    width: 50px;
    border: 1px solid;
 border-color:rgb(110, 136, 169);
" ><br>
   <label for="uid" style="
    width: 50px;
    padding-left: 10px;
    color:rgb(110, 136, 169);
">UID:</label><br>
  <input type="text" id="userid" name="userid" value="';echo $_SESSION['userid'];echo'" style="
    width: 50px;
    border: 1px solid;
 border-color:rgb(110, 136, 169);
" ><br>
   <label for="unid" style="
    width: 80px;
    padding-left: 10px;
    color:rgb(110, 136, 169);
">User Name:</label><br>
  <input type="text" id="uusername" name="uusername" value="';echo $_SESSION['username'];echo'" style="
    width: 150px;
    border: 1px solid;
 border-color:rgb(110, 136, 169);
" ><br>
   <label for="activity" style="
    width: 50px;
    padding-left: 10px;
    color:rgb(110, 136, 169);
">Activity:</label><br>';
echo tkactivitydd();
echo'<div id="txtHint" style="
    display: flex;
">
</div>';
//echo'
 // <input type="text" id="activity" name="activity" value="';echo'" ><br>';
//  echo'<br>
//  <label for="lname">Time In Minutes:</label><br>
//  <input type="text" id="timeinmin" name="timeinmin" ><br><br>
//  <input type="submit" value="Submit">
//echo'
//</form> 
echo'</div></div> ';
//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/test-analysis/display-doc-id.php';



//include $_SERVER['DOCUMENT_ROOT'].'/inc/func/viewtestanalysisdetails.php';
//echo viewtestanalysisdetails();

//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/test-analysis/viewtestanalysisdetails.php';
//echo viewtestanalysisdetails1(1, 1, $docidentifier);


//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/analysis/test-analysis/display-field-label.php';
//echo dispfieldlabel();


//include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/display-section.php';
//echo displaysection($docidentifier);



/*echo'

<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 
<div class="flex-cont">
<h3>INSERT MASTER ITEM</h3>
</div> 
';
include $_SERVER['DOCUMENT_ROOT'].'/dev/generate-doc/test-basis/display-field-label-mi.php';
echo dispfieldlabelmi();

echo'
<form action="/dev/generate-doc/test-basis/create-master-item.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-name">
                <input type="text" name="name" placeholder="name" id="name" required>
                 </div> 
                  <div class="tbf-field-uid">
                <input type="text" name="uid" placeholder="uid" id="uid" required>
                 </div> 
                  <div class="tbf-field-type">
                <input type="text" name="type" placeholder="type" id="type" required>
                 </div> 
                  <div class="tbf-field-project">
                 <input type="text" name="project" placeholder="project" id="project" required>
                 </div> 
                  <div class="tbf-field-owner">
                 <input type="text" name="owner" placeholder="owner" id="owner" required>
                 </div> 
                 <div class="tbf-field-version">
               <input type="text" name="ver" placeholder="ver" id="ver" required>
                 </div> 
                 <div class="tbf-field-status">
                 <input type="text" name="stat" placeholder="status" id="stat" required>
                 </div> 
                 <div class="tbf-field-location">
                 <input type="text" name="location" placeholder="location" id="location" required>
                 </div> 
                <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="docid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="groupid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="projectid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';
echo'
<div class="flex-cont1">
<br></br>
</div> 
';
echo'<div class="flex-cont">
<h3>INSERT SUB ITEM</h3>
</div> ';
echo dispfieldlabel();

echo'
<form action="/dev/generate-doc/test-basis/create-sub-field.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-name">
                <input type="text" name="name" placeholder="name" id="name" required>
                 </div> 
                  <div class="tbf-field-uid">
                <input type="text" name="uid" placeholder="uid" id="uid" required>
                 </div> 
                  <div class="tbf-field-type">
                <input type="text" name="type" placeholder="type" id="type" required>
                 </div> 
                  <div class="tbf-field-project">
                 <input type="text" name="project" placeholder="project" id="project" required>
                 </div> 
                  <div class="tbf-field-owner">
                 <input type="text" name="owner" placeholder="owner" id="owner" required>
                 </div> 
                 <div class="tbf-field-version">
               <input type="text" name="ver" placeholder="ver" id="ver" required>
                 </div> 
                 <div class="tbf-field-status">
                 <input type="text" name="stat" placeholder="status" id="stat" required>
                 </div> 
                 <div class="tbf-field-location">
                 <input type="text" name="location" placeholder="location" id="location" required>
                 </div> 
                 <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="docid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="groupid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="projectid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';


echo'


<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div>';
  
  echo'<div class="flex-cont">
<h3>UPDATE MASTER ITEM</h3>
</div> ';

echo dispfieldlabelmi();

echo'
<form action="/dev/generate-doc/test-basis/update-master-item.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-name">
                <input type="text" name="name" placeholder="name" id="name" required>
                 </div> 
                  <div class="tbf-field-uid">
                <input type="text" name="uid" placeholder="uid" id="uid" required>
                 </div> 
                  <div class="tbf-field-type">
                <input type="text" name="type" placeholder="type" id="type" required>
                 </div> 
                  <div class="tbf-field-project">
                 <input type="text" name="project" placeholder="project" id="project" required>
                 </div> 
                  <div class="tbf-field-owner">
                 <input type="text" name="owner" placeholder="owner" id="owner" required>
                 </div> 
                 <div class="tbf-field-version">
               <input type="text" name="ver" placeholder="ver" id="ver" required>
                 </div> 
                 <div class="tbf-field-status">
                 <input type="text" name="stat" placeholder="status" id="stat" required>
                 </div> 
                 <div class="tbf-field-location">
                 <input type="text" name="location" placeholder="location" id="location" required>
                 </div> 
                <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="docid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="groupid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="projectid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';
echo'
<div class="flex-cont1">
<br></br>
</div> 
';

  echo'<div class="flex-cont">
<h3>UPDATE SUB ITEM</h3>
</div> ';
  
echo dispfieldlabel();

echo'
<form action="/dev/generate-doc/test-basis/update-sub-item.php" method="post">
  <div class="flex-cont-la">
<div class="tbf-field">
                <div class="tbf-field-name">
                <input type="text" name="name" placeholder="name" id="name" required>
                 </div> 
                  <div class="tbf-field-uid">
                <input type="text" name="uid" placeholder="uid" id="uid" required>
                 </div> 
                  <div class="tbf-field-type">
                <input type="text" name="type" placeholder="type" id="type" required>
                 </div> 
                  <div class="tbf-field-project">
                 <input type="text" name="project" placeholder="project" id="project" required>
                 </div> 
                  <div class="tbf-field-owner">
                 <input type="text" name="owner" placeholder="owner" id="owner" required>
                 </div> 
                 <div class="tbf-field-version">
               <input type="text" name="ver" placeholder="ver" id="ver" required>
                 </div> 
                 <div class="tbf-field-status">
                 <input type="text" name="stat" placeholder="status" id="stat" required>
                 </div> 
                 <div class="tbf-field-location">
                 <input type="text" name="location" placeholder="location" id="location" required>
                 </div> 
                 <input type="hidden" id="userid" name="userid" value="'; echo $userid; echo'">
  				<input type="hidden" id="docid" name="docid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="groupid" name="groupid" value="'; echo $gid; echo'">
  				<input type="hidden" id="projectid" name="projectid" value="'; echo $pid; echo'">
                <input type="hidden" id="dtid" name="dtid" value="'; echo $docidentifier; echo'">
                <input type="hidden" id="dname" name="dname" value="'; echo $docname; echo'">
</div> 
</div> 


</div> 
  <input type="submit" value="REGISTER">
</form>
';*/

echo'
<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 
 <div class="flex-cont">';


echo viewtkbu();
echo'
</div> 
<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> ';

echo'
<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> 
 <div class="flex-cont">';


echo viewtkbp();
echo'
</div> 
<div class="flex-cont1">
<br></br><br></br><br></br><br></br><br></br>
</div> ';
echo'
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
  
<!--  <div class="dropup">
  <button class="dropupbtn">HOME</button>
  <div class="dropup-content">
  <a href="http://www.istm.online/">ISTM</a>
  <a href="http://www.istm.online/home/">Home</a>
  </div>
   </div>
 --> 

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
';



}
?>