<?php 
require 'common.php';
$id= mysqli_escape_string($con, $_POST['email']);
$id= intval($id);
$pass=mysqli_escape_string($con, $_POST['password']);
$query="SELECT name FROM teacher WHERE t_id='$id' and pass='$pass'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
    $_SESSION['errorr']=0;
    $_SESSION['count']=0; 
    header("location:staff_login.php");
}
else{
    session_start();
   $_SESSION['id']=$id;
   unset($_SESSION['error']);
   header('location:staff_index.php');
}
?>