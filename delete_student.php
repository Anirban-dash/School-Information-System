<?php
require 'common.php';
$id=mysqli_escape_string($con, $_POST['id']);
$id= intval($id);
$query="DELETE FROM `student` WHERE `student`.`st_id` ='$id'";
$result= mysqli_query($con, $query) or die($result);
echo 'Student Deleted';
?>
<script>
    alert("Deleted Sucessfully");
    </script>