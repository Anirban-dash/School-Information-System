<?php

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
    .bt{
        float: right;
    }
</style>
    </head>
    
<body> 
  <?php
  include 'sidebar.php';
  ?>
    <div class="col-md-offset-3 col-xs-offset-1 col-md-5 col-xs-10 jumbotron" style="margin-top: 20px">
        <form action="sub_enty_submit.php" method="POST">
            <div class="form-group">
                <label for="sub_name">Enter The Subject Name</label>
                <input type="text" name="sub_name" id="sub_name" class="form-control" required="true">
            </div>
            <div class="bt">
            <button type="submit" class="btn btn-block btn-success"><span class="glyphicon glyphicon-plus"></span> Add</button>
            </div>
        </form>
    </div>
</body>
</html>
