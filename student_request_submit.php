<?php 
require 'common.php';
$id= $_SESSION['id'];
$c_id= strval($id);

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
    .jumbotron p{
        font-size: 3vh;
    }
</style>
    </head>
<body> 
    <?php
    require 'student_navbar.php';
?>
<div class="col-md-offset-4 col-md-5" style="padding-top: 20px;">
    <form method="POST" action="student_request_submit_script.php">
            <div class="form-group">
                <label for="subject">Request For Update</label><br>
                <textarea id="subject" name="subject" rows="6" cols="40" placeholder="Describe Your Issue" required="true"></textarea>
	    </div>
        <p class="text-info">*Your Request is send to the HOI</p><br>
        <button type="submit" class="btn btn-default btn-primary">SEND <span class="glyphicon glyphicon-send"></span></button>
        </form>
     </div>
</body>
</html>