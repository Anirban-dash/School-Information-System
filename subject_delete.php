<?php
require 'common.php';
$id=$_GET['id'];
$id= intval($id);
$query="DELETE FROM `subject` WHERE `subject`.`s_id` = '$id'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
header("location:subject.php");
?>

