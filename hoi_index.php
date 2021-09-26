<?php 
require 'common.php';
$query="SELECT * FROM teacher";
$query2="SELECT * FROM student";
$result= mysqli_query($con, $query);
$result2= mysqli_query($con, $query2);
$sub_query="SELECT * FROM SUBJECT";
$sub_result= mysqli_query($con, $sub_query) or die(mysqli_error($con));
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
   <div class="container">
       <div style="padding-top: 20px;" class="row">
    <div class="col-md-offset-2 col-md-4">
        <div class="jumbotron profile">
            <h3>Total Student <?php echo mysqli_num_rows($result2); ?></h3>
        </div>
    </div>
    <div class="col-md-4">
        <div class="jumbotron profile">
            <h3>Total Staff  <?php echo mysqli_num_rows($result); ?></h3>
        </div>
    </div>
</div>
       <div class="row">
        <div class="col-md-offset-2 col-md-3">
            <h3>ADDRESS</h3>
            <p>Dubra,Jhargram,West Bengal</p>
        </div>
        <div class="col-md-3">
            <h3>HOI</h3>
            <p>MR. Anirban Dash</p>
        </div>
        <div class="col-md-3">
            <h3>HIGHEST CLASS</h3>
            <p>Class-IV</p>
        </div>

       </div>
       <div class="row">
         <div class="col-md-offset-2 col-md-3">
            <h3>SUBJECT COMBINATION</h3>
            <ul>
                <?php while($sub_row=mysqli_fetch_array($sub_result)){
                    echo '<li>'.$sub_row['name'].'</li>';
                } ?>
            </ul>
        </div>
        <div class="col-md-3">
            <h3>CLASS</h3>
            <p>I,II,III,IV</p>
        </div>
       </div>
   </div>
    
    
</body>
</html>
