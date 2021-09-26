<?php
require 'common.php';
$id=$_GET['id'];
$query="DELETE FROM `notice_board` WHERE `notice_board`.`n_id` = '$id'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
header("location:hoi_notice_board.php");
?>

