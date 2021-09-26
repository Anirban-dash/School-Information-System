<?php
require 'common.php';
$id=$_POST['id'];
$sub= mysqli_escape_string($con, $_POST['subject']);
$content= mysqli_escape_string($con, $_POST['content']);
$status=mysqli_escape_string($con, $_POST['status']);
$query="UPDATE `notice_board` SET `subject` = '$sub', `content` = '$content', `status` = '$status' WHERE `notice_board`.`n_id` = '$id'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header("location:hoi_notice_board.php");
?>