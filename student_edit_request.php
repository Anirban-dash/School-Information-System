<?php
require 'common.php';
$s_id= intval($_GET['id']);
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
    <div class="col-md-offset-4 col-md-5" style="padding-top: 20px;">
        <form method="POST" action="student_edit_submit.php">
            <div class="form-group">
	            <label for="id">Enter The ID Number For The Student</label>
                    <input type="text" name="id" value="<?php echo $s_id;?>" id="id" class="form-control" required="true">
	    </div>
            <button type="submit" class="btn btn-default btn-primary btn-block">FIND</button>
        </form>
    </div>
</body>
</html>
