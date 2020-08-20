<?php



function tyname($tid, $tn){

 echo' <input type="hidden" id="doctype" name="doctype" value="';echo $tn; echo'">';
  echo' <input type="hidden" id="doctypeid" name="doctypeid" value="';echo $tid; echo'">';
}
?>