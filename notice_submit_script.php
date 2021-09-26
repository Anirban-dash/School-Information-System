<?php
require 'common.php';
$sub= mysqli_escape_string($con, $_POST['subject']);
$content= mysqli_escape_string($con, $_POST['content']);
$status=mysqli_escape_string($con, $_POST['status']);
$query="INSERT INTO `notice_board` (`subject`, `content`, `status`) VALUES ('$sub','$content','$status')";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header("location:hoi_notice_board.php");
?>
