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
    <form method="POST" action="notice_submit_script.php">
        <div class="form-group">
            <label for="subjectt">Subject</label><br>
            <input name="subject" id="subject" class="form-control" required="true">
        </div>
            <div class="form-group">
                <label for="content">Content of Notice</label><br>
                <textarea id="content" name="content" rows="6" cols="40" placeholder="Enter The Content of the Notice" required="true"></textarea>
	    </div>
        <div class="form-group">
            <label for="status">View:</label>
            <input list="view" name="status" id="status" class="form-control" required="true" placeholder="all,teacher,20211001,etc.">
            <datalist id="view">
                <option value="ALL">
                <option value="TEACHER">
                <option value="STUDENT">
            </datalist>
        </div>
        <button type="submit" class="btn btn-default btn-primary btn-block">PUBLISH</button>
        </form>
     </div>
</body>
</html>
