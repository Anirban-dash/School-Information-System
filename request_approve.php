<?php
require 'common.php';
$str= mysqli_escape_string($con, $_GET['id']);
$pos= strpos($str, " ");
$id= substr($str, $pos+1);
$u_id= substr($str,0,$pos);
$id= intval($id);
$u_id= intval($u_id);
$ch_id= strval($id);
$sstr=substr($ch_id,0,5);
$teacher="20212";
$student="20213";
$query="UPDATE `update_req` SET `status` = 'Success' WHERE `update_req`.`u_id` = '$u_id'";
mysqli_query($con, $query) or die(mysqli_error($con));
if(strcmp($sstr, $teacher)==0){
    header("location:edit_request.php?id=$id");
}
else if(strcmp($sstr, $student)==0){
    header("location:student_edit_request.php?id=$id");
}
?>
