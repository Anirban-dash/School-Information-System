<?php 
require 'common.php';
$id= $_SESSION['id'];
$query="SELECT * FROM teacher WHERE t_id='$id'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
    echo ' <script>alert("Invalid ID") </script>';
    die();
}
else{
    $row= mysqli_fetch_array($result);
}
$o_pass=mysqli_escape_string($con, $_POST['o_id']);
$n_pass=mysqli_escape_string($con, $_POST['pass']);
$pass_query="SELECT pass FROM teacher where t_id='$id'";
$pass_result=mysqli_query($con, $pass_query) or die(mysqli_error($con));
$res=mysqli_fetch_array($pass_result);
?>
<!DOCTYPE html>
<html>
    <head>
<title>DAVM Public School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
<link rel="stylesheet" href="style1.css"/>
 <script>
        function openbar(){
            document.getElementById('myside').style.width="260px";
           
        }
        function closenav(){
            document.getElementById('myside').style.width="0";
        }
    </script>
    </head>
<body>
<?php    require 'staff_sidenav.php';
?>
   <?php
   if(strcmp($o_pass, $res['pass'])!=0){?>
    <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-danger" style="margin-top: 30px">
            <br>
            <strong><span class="glyphicon glyphicon-exclamation-sign"></span> INVALID PASSWORD</strong>
            <br>The Password you have entered is invalid.
            <br><br>
        </div>
   <?php }else{
       $query1="UPDATE `teacher` SET `pass` = '$n_pass' WHERE `teacher`.`t_id` = '$id'";
       $result1=mysqli_query($con, $query1) or die(mysqli_error($con));
   ?>
     <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-success" style="margin-top: 30px">
            <br>
            <strong><span class="glyphicon glyphicon-ok-circle"></span> UPDATED SUCCESSFULLY</strong>
            <br>Your Password is updated
            <br><br>
        </div>
    
   <?php }?>
</body>
</html>
