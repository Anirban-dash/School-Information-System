<?php 
require 'common.php';
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
    require 'student_navbar.php';
?>
    <div class="col-md-offset-4 col-md-5" style="padding-top: 20px;">
        <form method="POST" action="student_password_change.php">
            <div class="form-group">
	            <label for="o_id">Old Password</label>
                    <input type="password" name="o_id" id="o_id" class="form-control" required="true">
            </div>
             <div class="form-group">
                    <label for="pass">New Password</label>
                    <input type="password" name="pass" id="pass" class="form-control" required="true">
	    </div>
            <button type="submit" class="btn btn-default btn-primary btn-block">Submit</button>
        </form>
    </div>
</body>
</html>