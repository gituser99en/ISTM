<?php
session_start();
$tkaid = $_GET['q'];
//$tkaname = $_GET['r'];



//  echo'<input type="text" id="activity" name="activity" value="';echo $aname;echo'" ><br>';
//  echo'<input type="hidden" id="activity" name="activity" value="';echo $tkaname;echo'" ><br>';
   echo'<input type="hidden" id="activityid" name="activityid" value="';echo $tkaid;echo'" ><br>';
echo' <label for="lname">Time In Minutes:</label><br>
  <input type="text" id="timeinmin" name="timeinmin" ><br><br>
  <input type="submit" value="Submit">

</form> 
</div> ';
// include_once('submitdt.php'); echo submitdt($dtypeid); 

?>