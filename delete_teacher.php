<?php

require 'common.php';
$te_id=mysqli_escape_string($con, $_POST['t_id']);
$te_id= intval($te_id);

$query="DELETE FROM `teacher` WHERE `teacher`.`t_id` ='$te_id'";
$result= mysqli_query($con, $query) or die($result);

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
 <div class="col-md-offset-3 col-xs-offset-1 col-xs-10 col-md-4 alert alert-success" style="margin-top: 30px">
            <br>
            <strong>DELETED SUCCESSFULLY</strong>
            <br><?php echo $te_id;?> is Deleted
            <br><br>
        </div>

    </body>
</html>