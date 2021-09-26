<?php
require 'common.php';
$id=$_SESSION['id'];
$query="SELECT * FROM student WHERE st_id='$id'";
$result=mysqli_query($con, $query) or mysqli_error($con);
$row= mysqli_fetch_array($result);
?>
<!DOCTYPE html>
<html>
    <head>
<title>DAVM Public School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
<link rel="stylesheet" href="style1.css"/>
<style>
    .bg{
        border: 3px;
        border-color: black;
        background: lightgray;

    }
    .bg img{
        height: 10rem;
        width: 10rem;
        margin-top: 5px;
    }
    .logo_img{
    height: 12rem;
    width: 12rem;
}
</style>
    </head>
<body> 
    <?php
    require 'student_navbar.php';
?>
    <div class="col-md-offset-4 col-md-4 col-xs-offset-1 col-xs-10 bg" style="margin-top: 20px; margin-bottom: 20px;">
        <center>
        <img src="student_avatar.jpg" alt="student_avatar"class="imag"/><br><br>        
        <strong>Student ID: </strong> <strong><?php echo$row['st_id']; ?></strong><br><br>
        <strong>Student Name: </strong> <?php echo$row['name']; ?><br><br>
        <strong>Present Class: </strong> <?php echo$row['class_id']; ?><br><br>
        <strong>Roll Number: </strong> <?php echo$row['roll']; ?><br><br>
        <strong>Father's Name: </strong> <?php echo$row['father']; ?><br><br>
        <strong>Mother's Name: </strong> <?php echo$row['mother']; ?><br><br>
        <strong>Address: </strong> <?php echo$row['address']; ?><br><br>
        <strong>Date of Birth: </strong> <?php echo$row['dob']; ?><br><br>
        <strong>Cast: </strong> <?php echo$row['cast']; ?><br><br>
        <strong>Religion: </strong> <?php echo$row['religion']; ?><br><br>
        <strong>Aadhar Number: </strong> <?php echo$row['aadhar']; ?><br><br>
        
        </center>
    </div>
</body>
</html>