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
  include 'sidebar.php';
  ?>
    <div class="col-md-offset-3 col-xs-offset-2 col-md-6 col-xs-8" style="margin-top: 30px;">
        <form action="timetable_view.php" method="POST">
            <div class="form-group">
                <strong>Select Class:</strong>
        <select id="cl" name="cl" class="form-control">
            <option value="1">Class I</option>
            <option value="2">Class II</option>
            <option value="3">Class III</option>
            <option value="4">Class IV</option>
        </select>
            </div>
            <div style="margin: 10px;">
        <button type="submit" class="btn btn-primary btn-block">Get Timetable</button>
            </div>
        </form>
    </div>
</body>
</html>