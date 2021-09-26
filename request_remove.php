<?php
require 'common.php';
$id=$_GET['id'];
$query="UPDATE `update_req` SET `status` = 'Discard' WHERE `update_req`.`u_id` = '$id'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header("location:request_list.php");

