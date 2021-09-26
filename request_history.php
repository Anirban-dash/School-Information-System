<?php 
require 'common.php';
$query="SELECT * FROM update_req";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
$c=1;
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
    .bg a{
        text-decoration: none;
    }
    </style>
    </head>
<body> 
  <?php
  include 'sidebar.php';
  ?>
        <div class="col-md-offset-3 col-md-7" style="padding-top: 20px;">
            <h2 class="text-primary"><i>REQUEST HISTORY</i></h2>
        <table class="table table-stripe table-bordered table-hover table-responsive">
            <tbody>
                <tr>
                    <th>SL No.</th>
                    <th>Person's ID</th>
                    <th>Request Content</th>
                    <th>Status</th>
                </tr>
                <?php while($row= mysqli_fetch_array($result)){
                    ?>                 
                <tr>
                    <td><?php echo $c; ?></td>
                    <td><?php echo $row['a_id']; ?></td>
                    <td><?php echo $row['text']; ?></td>
                    <td><?php echo $row['status']; ?></td>
                </tr>
                <?php $c++;
                } ?>
            </tbody>
        </table>
    </div>
    <?php if(mysqli_num_rows($result)!=0){ ?>
       <div class="col-md-offset-5 col-md-3 bg">          
           <a  href="clear_requestes.php"><button class="btn btn-danger btn-block">Delete All Request <span class="glyphicon glyphicon-trash"></span></button></a> 
      </div>
    <?php } ?>  
    
</body>
</html>