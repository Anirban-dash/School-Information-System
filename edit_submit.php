<?php
require 'common.php';
$query1="SELECT * FROM subject";
$result1= mysqli_query($con, $query1);
$te_id=mysqli_escape_string($con, $_POST['id']);
$te_id= intval($te_id);
$query="SELECT * FROM teacher WHERE t_id='$te_id'";
$result= mysqli_query($con, $query);
if(mysqli_num_rows($result)==0){ 
    header("location:staff_edit.php?err=1");
}
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
    </head>
    <body>
         <?php
    include 'sidebar.php';
    ?>
        <div class="col-md-offset-4 col-md-5">
            <form method="POST" action="change_submit.php">
            		<h3>Edit Teacher Details</h3><br>
                        	<div class="form-group">
                                    <label for="t_id" class="text-info">ID: <?php echo $te_id; ?></label>
                                <input type="text" value="<?php echo $te_id; ?>" name="t_id" id="t_id" class="form-control hidden" required="true">
	            		</div>
	            	
	               	<div class="form-group">
	               		<label for="fullname">Full Name</label>
                                <input type="text" value="<?php echo $row['name']; ?>" name="fullname" id="fullname" class="form-control" required="true">
	            		</div>
	            	<div class="form-group">
	            		<label for="age">Age</label>
                                <input type="text" value="<?php echo $row['age']; ?>" name="age" id="age" class="form-control" required="true">
	            	</div>
                        <div class="form-group">
                                    <label for="sub">Subject:</label>
                                       <select type="text" name="sub" id="sub" class="form-control">
                                        <?php 
                                        while($row1= mysqli_fetch_array($result1)){?>
                                        <option value="<?php echo $row1['s_id']?>"><?php echo $row1['name'];?></option>
                                        <?php }?>
                                    </select>
                                      </div>
	            			<div class="form-group">
	               				<label for="phone">Contact Number</label>
                                                <input type="text" value="<?php echo $row['mobile_no']; ?>" name="phone" id="phone" class="form-control" required="true">
	            			</div>
	            			<div class="form-group">
	               				<label for="email">Email Address</label>
                                                <input type="email" value="<?php echo $row['email']; ?>" name="email" id="email" class="form-control" required="true">
	            			</div>
                                        <button type="submit" class="btn btn-default btn-primary btn-block">Save</button>
            </form><br>
            <br>
            <form method="POST" action="delete_teacher.php">
                <input type="text" value="<?php echo $te_id; ?>" name="t_id" id="t_id" class="form-control hidden" required="true">
                <button class="btn btn-danger btn-block">Delete</button> 
            </form>
        </div>
    </body>
</html>

