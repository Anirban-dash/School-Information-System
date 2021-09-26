<?php
require 'common.php';
$id=$_GET['id'];
$query="SELECT * FROM student WHERE st_id='$id'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
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
    @media(max-width: 768px){
        .h{
            padding-bottom: 20px;
        }
    .mb{
        padding-left: 30px;
    }
}

</style>
    </head>
    
    <body>
        
  
    <?php
    include 'sidebar.php';
    ?>
        
        <div class="mb" style="padding-top: 20px;">
            <div class="col-md-offset-2 h">
           <h3 class="text-primary">STUDENT PROFILE</h3> 
            </div>
       <div class="col-md-offset-2 col-md-3" >
        
           <h4>Student ID: <?php echo $row['st_id'];?><br><br> Student Name: <?php echo $row['name'];?><br><br>Roll Number: <?php echo $row['roll'];?><br><br></h4>
       </div>
        <div class="col-md-3" >
        
            <h4>Class: <?php echo $row['class_id'];?><br><br> Date of Birth: <?php echo $row['dob'];?><br><br> Aadhar Number: <?php echo $row['aadhar'];?><br><br></h4>
       </div>
        </div>
        <div class="mb">
            <div class="col-md-offset-2 col-md-3" >
        
           <h4>Father's Name: <?php echo $row['father'];?><br><br> Mothers's Name: <?php echo $row['mother'];?><br><br>Address: <?php echo $row['address'];?><br><br></h4>
       </div>
        <div class="col-md-3" >
        
            <h4>Religion: <?php echo $row['religion'];?><br><br> Cast: <?php echo $row['cast'];?><br><br></h4>
       </div>
        </div>
    </body>
</html>