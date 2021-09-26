<?php
require 'common.php';
$s_name= mysqli_escape_string($con, $_POST['sub_name']);
$query="INSERT INTO `subject` (`name`) VALUES ('$s_name')";
$sub_result= mysqli_query($con, $query) or die(mysqli_error($con));
header("location:subject.php");
?>

