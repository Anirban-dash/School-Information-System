
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
    <div class="col-md-offset-4 col-md-5 jumbotron" style="margin-top: 20px;">
        <form method="POST" action="student_edit_submit.php">
            <div class="form-group">
	            <label for="id">Enter The ID Number For The Student</label>
                                <?php 
                                if(isset($_GET['s_err'])){?>
                                <strong><p class="text text-danger">*Invalid ID</p></strong>
                                <?php }?>
                    <input type="text" name="id" id="id" class="form-control" required="true">
	    </div>
            <button type="submit" class="btn btn-default btn-primary btn-block"><span class="glyphicon glyphicon-search"></span> FIND</button>
        </form>
    </div>
</body>
</html>
<?php
if(isset($_GET['st_up'])){
    if($_GET['st_up']==1){
    echo '<script>alert("Updated Successfully");</script>';
    }else{
        echo '<script>alert("Aadhar Number is already Taken");</script>';
    }
}
?>