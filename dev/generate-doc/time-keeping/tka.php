<?php
session_start();
$tkaid = $_GET['q'];
//$tkaname = $_GET['r'];



//  echo'<input type="text" id="activity" name="activity" value="';echo $aname;echo'" ><br>';
//  echo'<input type="hidden" id="activity" name="activity" value="';echo $tkaname;echo'" ><br>';
   echo'<input type="hidden" id="activityid" name="activityid" value="';echo $tkaid;echo'" ><br>';
echo' <label for="lname" style="
    width: 120px;
    color:rgb(110, 136, 169);
">Time In Minutes:</label><br>
  <input type="text" id="timeinmin" name="timeinmin" style="
    width: 70px;
    border-color:rgb(110, 136, 169);
" ><br><br>
  <input type="submit" value="Submit" style="
   margin-left:10px;
   background-color:rgb(110, 136, 169);
   color:white;
">

</form> 
</div> ';
// include_once('submitdt.php'); echo submitdt($dtypeid); 

?>