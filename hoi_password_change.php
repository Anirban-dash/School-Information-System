<?php
require 'common.php';
$id=$_SESSION['id'];
$o_pass=mysqli_escape_string($con, $_POST['o_id']);
$n_pass=mysqli_escape_string($con, $_POST['pass']);
$query="SELECT pass FROM hoi where h_id='$id'";
$result=mysqli_query($con, $query) or die(mysqli_error($con));
$row=mysqli_fetch_array($result);
?>
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
   if(strcmp($o_pass, $row['pass'])!=0){?>
    <div class="col-md-offset-3 col-md-4 alert alert-danger" style="margin-top: 30px">
            <br>
            <strong><span class="glyphicon glyphicon-exclamation-sign"></span> INVALID PASSWORD</strong>
            <br>The Password you have entered is invalid.
            <br><br>
        </div>
   <?php }else{
       $query1="UPDATE `hoi` SET `pass` = '$n_pass' WHERE `hoi`.`h_id` = '$id'";
       $result1=mysqli_query($con, $query1) or die(mysqli_error($con));
   ?>
     <div class="col-md-offset-3 col-md-4 alert alert-success" style="margin-top: 30px">
            <br>
            <strong><span class="glyphicon glyphicon-ok-circle"></span> UPDATED SUCCESSFULLY</strong>
            <br>Your Password is updated
            <br><br>
        </div>
    
   <?php }?>
</body>