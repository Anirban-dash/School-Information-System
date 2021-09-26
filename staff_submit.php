<?php
require 'common.php';
$name= mysqli_escape_string($con, $_POST['fullname']);
$age=mysqli_escape_string($con, $_POST['age']);
$age= intval($age);
$s_id=mysqli_escape_string($con,$_POST['sub']);
$s_id= intval($s_id);
$s_name="SELECT name FROM subject WHERE s_id='$s_id'";
$s_name_result= mysqli_query($con, $s_name) or die(mysqli_error($con));
$s_row= mysqli_fetch_array($s_name_result);
$subject=$s_row['name'];
$number=mysqli_escape_string($con, $_POST['phone']);
$email=mysqli_escape_string($con, $_POST['email']);
$query="INSERT INTO `teacher` (`name`, `age`, `sub_id`, `sub_name`, `mobile_no`, `email`,`pass`) VALUES ('$name','$age','$s_id','$subject','$number','$email','password')";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
header("location:staff_view.php");
?>


