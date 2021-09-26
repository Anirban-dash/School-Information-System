<?php 
require 'common.php';
$id= $_SESSION['id'];
$c_id= strval($id);
$query="SELECT * FROM update_req WHERE a_id='$c_id'";
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
       <?php 
    if(mysqli_num_rows($result)==0){
        ?>
    <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-warning" style="margin-top: 30px">
            <br>
            <strong> No Update Request Yet</strong>
            <br>
            <br><br>
        </div>
<?php }else{
    while($row1= mysqli_fetch_array($result)){
        if($row1['status']=="Pending"){
?>
    <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-info" style="margin-top: 30px">
            <br>
            <strong> Subject: <?php echo $row1['text'];?></strong>
            <br>Status: <?php echo $row1['status'];?>
            <br><br>
        </div>
        <?php }else if($row1['status']=="Success"){?>
     <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-success" style="margin-top: 30px">
            <br>
            <strong> Subject: <?php echo $row1['text'];?></strong>
            <br>Status: <?php echo $row1['status'];?>
            <br><br>
        </div>
        <?php } else{?>
      <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-danger" style="margin-top: 30px">
            <br>
            <strong> Subject: <?php echo $row1['text'];?></strong>
            <br>Status: <?php echo $row1['status'];?>
            <br><br>
        </div>
        <?php }}}?>
    <div class="col-md-offset-3 col-md-4 bg col-xs-offset-1">
        
        <a href="student_request_submit.php"><p>New Request <span class="glyphicon glyphicon-plus-sign"></span></p></a>
        </div> 
</body>
</html>