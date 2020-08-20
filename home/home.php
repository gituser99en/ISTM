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
  $_SESSION['IP_ADDR'] = "null";;
}
if (!isset($_SESSION['name']))
{
  $_SESSION['name'] = "null";
}

if (!isset($_SESSION['gid']))
{
  $_SESSION['gid'] = "null";
}

if (!isset($_SESSION['pid']))
{
  $_SESSION['pid'] = "null";
}

if (!isset($_SESSION['email']))
{
  $_SESSION['email'] = "null";
}
?>

<?php  include_once('../inc/func/getusergroupid.php'); $_SESSION['gid'] = getusergroupid($_SESSION['loginid']); ?> 
<?php  include_once('../inc/func/getuserprojectid.php'); $_SESSION['pid'] = getuserprojectid($_SESSION['loginid']); ?> 


<!doctype html>

<html lang="en">
<head>
  <meta charset="utf-8">

  <title>ISTM INDEPENDENT SOFTWARE TESTING MODEL</title>
  <meta name="description" content="ISTM INDEPENDENT SOFTWARE TESTING MODEL - SOFTWARE TESTING RESOURCES">
  <meta name="Eric Neilson" content="Eric Neilson">

  <link rel="stylesheet" href="istm.css?v=1.0">
  
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  
   <!--HEAD SCIPTS-->
  <!-- <script src="../../../inc/js/doctypedd.js"></script>-->
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
  xhttp.open("GET", "../dev/generate-doc/dt.php?q="+str, true);
  xhttp.send();
}
</script>
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

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">FUNDAMENTALS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">LIFE CYCLE</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST LEVELS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST TYPES</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST DESIGN</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">STATIC TECHNIQUES</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TEST MANAGEMENT</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">TOOLS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
</div>
</div>
<div class="dropdown">
<button class="dropbtn">DOWNLOADS</button>
<div class="dropdown-content">

<a href="https://www.google.com">Google</a>
<a href="https://www.facebook.com">Facebook</a>
<a href="https://www.youtube.com">YouTube</a>
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
  
  <div class="flex-cont">
<?php  include_once('../dev/generate-doc/doctypedd.php'); echo dispdoctypedd(); ?> 
       <div id="txtHintdoc">
                
                
            </div>
</div> 

<div class="flex-cont">
<div class="flex-cont1">
  <dl>
  <dt>User Info</dt>
  <dd>Name</dd>
    <dd>User ID</dd>
    <dd>Gruop ID</dd>
    <dd>Name</dd>
    <dd>Project ID</dd>
    <dd>Name</dd>
 
</dl>
  </div> 
  <div class="flex-cont1">
  <dl>
  <dt>GROUP</dt>
  <dd>Create</dd>
    <dd>Join</dd>
    <dd>Add User</dd>
    <dd>Change Active</dd>
</dl>
  </div> 
   <div class="flex-cont1">
  <dl>
  <dt>PROJECT</dt>
  <dd>Create</dd>
    <dd>Join</dd>
    <dd>Add User</dd>
    <dd>Change Active</dd>
    <dd>View</dd>
</dl>
  </div> 
  
  
  <?php
  print_r ($_SESSION);
  ?>
</div> 

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont">
<p>p</p>
</div> 

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div class="flex-cont-fn">
<div class="dropup">
  <button class="dropupbtn">LOGIN</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">REGISTER</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">CONTACT</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">JOBS</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">POLICY</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>
<div class="dropup">
  <button class="dropupbtn">SITEMAP</button>
  <div class="dropup-content">
    <a href="#">Link 1</a>
    <a href="#">Link 2</a>
    <a href="#">Link 3</a>
  </div>

</div>

</div>

 <script src="js/scripts.js"></script>
</body>
</html>