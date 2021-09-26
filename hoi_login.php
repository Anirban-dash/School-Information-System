<?php
require 'common.php';
$id=mysqli_escape_string($con, $_POST['email']);
$pass=mysqli_escape_string($con, $_POST['password']);
$query="SELECT * FROM hoi";
$result=mysqli_query($con, $query);
$row= mysqli_fetch_array($result);
if(strcmp($id, $row['h_id'])==0 && strcmp($pass, $row['pass'])==0){
   
   $_SESSION['id']=$id;
   header("location:hoi_index.php");
}else{
    $_SESSION['error']=0;
    $_SESSION['counter']=0;
    header("location:index.php");
}

