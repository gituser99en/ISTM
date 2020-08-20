<?php
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
?>



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
		<img alt="ISTM INDEPENDENT SOFTWARE TESTING MODEL"  img src="inc/img/ISTM350.jpg" >
	</div> 
</div> 

<div class="flex-cont">
<h1>ISTM INDEPENDENT SOFTWARE TESTING MODEL</h1> 
</div> 

<div class="flex-cont">
<p>p</p>
</div> 

<div class="flex-cont">
<br></br><br></br><br></br><br></br><br></br>
</div> 

<div style="justify-content:center;display:flex">
  <div class="login">
    <h3>REGISTER</h3>
    <form action="create-project.php" method="post">
      <label for="projectname">PROJECT NAME</label><input type="text" name="name" placeholder="name" id="name" required>
      <label for="uid">UNIQUE ID</label>
      <input type="text" name="uid" placeholder="uid" id="uid" required>
      <label for="uid">USER ID</label>
      <input type="text" name="userid" placeholder="userid" id="userid" required>
      <label for="uid">OWNER ID</label>
      <input type="text" name="ownerid" placeholder="ownerid" id="ownerid" required>
      <label for="uid">GROUP ID</label>
      <input type="text" name="groupid" placeholder="groupid" id="groupid" required>
      <label for="desc">DESCRIPTION</label>
      <input type="text" name="desc" placeholder="Description" id="desc" required>
      <label for="owner">OWNER</label>
      <input type="text" name="owner" placeholder="Owner" id="owner" required>
      <label for="password">ENTER PASSWORD</label>
      <input type="password" name="password" placeholder="Password" id="password" required>
      <input type="submit" value="SUBMIT"></form>
  </div>
</div><br><div><br><br><br><br><br></div> </div>


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