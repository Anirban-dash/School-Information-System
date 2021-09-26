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
$age=mysqli_escape_string($con, $_POST['age']);
$age= intval($age);
$s_id=mysqli_escape_string($con,$_POST['sub']);
$s_id= intval($s_id);
$number=mysqli_escape_string($con, $_POST['phone']);
$email=mysqli_escape_string($con, $_POST['email']);
$te_id=mysqli_escape_string($con, $_POST['t_id']);
$te_id= intval($te_id);
$select="SELECT name FROM subject WHERE s_id='$s_id'";
$select_result= mysqli_query($con, $select) or die($select_result);
$row= mysqli_fetch_array($select_result);
$subject=$row['name'];
if(mysqli_num_rows($select_result)==0){
    echo '<script>alert("Invalid Subject ID");</script>';
    
?>

        
        <div class="col-md-offset-3 col-md-4 alert alert-danger" style="margin-top: 30px">
            <br>
            <strong><span class="glyphicon glyphicon-exclamation-sign"></span> INVALID SUBJECT ID</strong>
            <br>Subject ID isn't match to our database. Please verify it.
            <br><br>
        </div>
<?php }else {
$update_query="UPDATE `teacher` SET `name` = '$name', `age` = '$age', `sub_id` = '$s_id', `sub_name` = '$subject', `mobile_no` = '$number', `email` = '$email' WHERE `teacher`.`t_id` = '$te_id'";
$update_result= mysqli_query($con, $update_query) or die($update_result);

?>
    

        <div class="col-md-offset-3 col-md-4 col-xs-offset-1 col-xs-10 alert alert-success" style="margin-top: 30px">
            <br>
            <strong>UPDATED SUCCESSFULLY</strong>
            <br>Your Credentials are updated
            <br><br>
        </div>
<?php }?>
    </body>
</html>
