<?php
require 'common.php';
$query="SELECT * FROM subject";
$result= mysqli_query($con, $query);
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
        <div class="col-md-offset-4 col-md-5">
         <form method="POST" action="staff_submit.php">
            		<h3>Enter Teacher Details</h3><br>
	               	<div class="form-group">
	               		<label for="fullname">Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control" required="true">
	            		</div>
	            	<div class="form-group">
	            		<label for="age">Age</label>
                                <input type="text" name="age" id="age" class="form-control" required="true">
	            	</div>
                        <div class="form-group">
                                    <label for="sub">Subject</label>
                                    <select type="text" name="sub" id="sub" class="form-control">
                                        <?php 
                                        while($row= mysqli_fetch_array($result)){?>
                                        <option value="<?php echo $row['s_id']?>"><?php echo $row['name'];?></option>
                                        <?php }?>
                                    </select>
                                      </div>
	            			<div class="form-group">
	               				<label for="phone">Contact Number</label>
                                                <input type="text" name="phone" id="phone" class="form-control" required="true">
	            			</div>
	            			<div class="form-group">
	               				<label for="email">Email Address</label>
                                                <input type="email" name="email" id="email" class="form-control" required="true">
	            			</div>
                                        <button type="submit" class="btn btn-default btn-primary btn-block">Submit</button>
            </form>
        </div>
    
</body>
</html>
