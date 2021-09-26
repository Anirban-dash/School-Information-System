<?php 
require 'common.php';
$id= $_SESSION['id'];
$c_id= strval($id);
$notice_query="SELECT * FROM notice_board where status='ALL' or status='STUDENT' or status='$c_id'";
$notice_result= mysqli_query($con, $notice_query) or die(mysqli_error($con));
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
    .bg{
        float: right;
    }
</style>
    </head>
<body> 
    <?php
    require 'student_navbar.php';
if(mysqli_num_rows($notice_result)==0){
?>
    <div class="col-md-offset-3 col-md-5 alert alert-warning" style="margin-top: 30px">
         <br><br>
            <strong> No Notice Available</strong>
            <br>
            <br><br>
        </div>
<?php }else{
while($res= mysqli_fetch_array($notice_result)){
?>
    <div class="col-sm-offset-3 col-sm-6 col-xs-10 col-xs-offset-1 jumbotron" style="margin-top: 30px">
        <center><h2><?php echo strtoupper($res['subject']);?></h2></center><br>
        <p>Dear <?php echo strtoupper($res['status']);?></p>
        <p><?php echo $res['content'];?></p>
        <div class="bg">
            Thank You<br>
            Head Of The Institute<br>
            <?php echo strtoupper($res['time']);?>
        </div>
        </div>
<?php }}?>
</body>
</html>