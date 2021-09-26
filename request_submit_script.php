<?php
require 'common.php';
$id=$_SESSION['id'];
$sub= mysqli_escape_string($con, $_POST['subject']);
$query="INSERT INTO `update_req` (`a_id`, `text`, `status`) VALUES ('$id', '$sub', 'Pending')";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header("location:update_request.php");
?>