<?php
session_start();

function tpepagination($tpeoffset){
    


 include $_SERVER['DOCUMENT_ROOT'].'/dev/listdocs/pagination/docid-cat-tpep.php';
echo doccattpep(5, $_SESSION['uprojid'], $tpeoffset);
}
?>