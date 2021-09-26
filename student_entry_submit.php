<!DOCTYPE html>
<html>
    <head>
<title>DAVM Public School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
<link rel="stylesheet" href="style1.css"/>
    </head>
    <body>
         <?php
            include 'sidebar.php';
             ?>
<?php
require 'common.php';
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
$select="SELECT name FROM student WHERE aadhar='$adhar'";
$select_result= mysqli_query($con, $select) or die($select_result);

if(mysqli_num_rows($select_result)==0){
    $query="INSERT INTO `student` (`name`, `roll`, `father`, `address`, `dob`, `cast`, `religion`, `aadhar`, `mother`, `class_id`,`pass`) VALUES ('$name','$roll','$father','$add','$dob','$cast','$reg','$adhar','$mother','$class','password')";
    $result= mysqli_query($con, $query) or die(mysqli_error($con));
    ?>
        <div class="col-md-offset-3 col-md-4 col-xs-offset-1 col-xs-10 alert alert-success" style="margin-top: 30px">
            <br>
            <strong><span class="glyphicon glyphicon-ok-circle"></span> INSERTED SUCCESSFULLY</strong>
            <br>Your Credentials are updated
            <br><br>
        </div>
        <?php
}else{
    ?>
         <div class="col-md-offset-3 col-md-4 col-xs-offset-1 col-xs-10 alert alert-danger" style="margin-top: 30px">
            <br>
            <strong><span class="glyphicon glyphicon-exclamation-sign"></span> AADHAR IS ALREADY TAKEN</strong>
            <br>This Aadhar Number is already taken by another Student. Please verify it.
            <br><br>
        </div>
        <?php
}

?>


