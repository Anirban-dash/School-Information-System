<?php
require 'common.php';
$id=mysqli_escape_string($con, $_POST['id']);
$id= intval($id);
$name= mysqli_escape_string($con, $_POST['fullname']);
$dob=$_POST['dob'];
$father=mysqli_escape_string($con, $_POST['father']);
$add=mysqli_escape_string($con, $_POST['address']);
$cast=mysqli_escape_string($con, $_POST['cast']);
$reg=mysqli_escape_string($con, $_POST['religion']);
$mother=mysqli_escape_string($con, $_POST['mother']);
$adhar=mysqli_escape_string($con, $_POST['aadhar']);
$class=mysqli_escape_string($con,$_POST['class']);
$class= intval($class);
$roll=mysqli_escape_string($con, $_POST['roll']);
$roll= intval($roll);
$select="SELECT name FROM student WHERE aadhar='$adhar' and st_id!='$id'";
$select_result= mysqli_query($con, $select) ;

if(mysqli_num_rows($select_result)==0){
    $query="UPDATE `student` SET `name` = '$name', `roll` = '$roll', `father` = '$father', `address` = '$add', `dob` = '$dob', `cast` = '$cast', `religion` = '$reg', `aadhar` = '$adhar', `mother` = '$mother', `class_id` = '$class' WHERE `student`.`st_id` = '$id'";
    $result= mysqli_query($con, $query) or die(mysqli_error($con));
    header("location:student_edit.php?st_up=1");
}else{
    header("location:student_edit.php?st_up=2");
}

?>
