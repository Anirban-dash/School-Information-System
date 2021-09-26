<?php
require 'common.php';
$id=$_GET['id'];
$query="SELECT * FROM notice_board WHERE n_id='$id'";
$result= mysqli_query($con, $query);
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
<style>
    .bg p{
        float: right;
        padding: 5px;
    }
</style>
    </head>
<body> 
  <?php
  include 'sidebar.php';
  ?>
<center><h3 class="text text-info"><i>NOTICE</i></h3></center>
 <div class="col-md-offset-4 col-md-5" style="padding-top: 20px;">
    <form method="POST" action="notice_edit_script.php">
        <div class="form-group">
            <input name="id"  value="<?php echo $row['n_id'];?>" hidden="true"  required="true">
            <label for="subjectt">Subject</label><br>
            <input name="subject" id="subject" value="<?php echo $row['subject'];?>" class="form-control" required="true">
        </div>
            <div class="form-group">
                <label for="content">Content of Notice</label><br>
                <textarea id="content" name="content"  rows="8" cols="40"  required="true"><?php echo $row['content'];?></textarea>
	    </div>
        <div class="form-group">
            <strong>View:        </strong><select name="status" id="status" required="true">
                <option value="all">All</option>
                <option value="teacher">Teacher Only</option>
                <option value="student">Student Only</option>
            </select>
        </div>
        <button type="submit" class="btn btn-default btn-primary btn-block">PUBLISH</button>
        </form>
     </div>
</body>
</html>


