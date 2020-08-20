<?php



function ihname($cid, $on){

 echo' <input type="hidden" id="owner" name="owner" value="';echo $on; echo'">';
  echo' <input type="hidden" id="userid" name="userid" value="';echo $cid; echo'">';
}
?>