<?php
require 'common.php';
$query="DELETE FROM update_req";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
header("location:request_history.php");
?>