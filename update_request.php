<?php
require 'common.php';
$id=$_SESSION['id'];
$query="SELECT * FROM update_req WHERE a_id='$id'";
$result= mysqli_query($con, $query);
$query1="SELECT name FROM teacher WHERE t_id='$id'";
$result1= mysqli_query($con, $query1) or die(mysqli_error($con));
$row= mysqli_fetch_array($result1);
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
 <script>
        function openbar(){
            document.getElementById('myside').style.width="260px";
           
        }
        function closenav(){
            document.getElementById('myside').style.width="0";
        }
    </script>
    </head>
<body>
<?php    require 'staff_sidenav.php';

?>
    <?php 
    if(mysqli_num_rows($result)==0){
        ?>
    <div class="col-md-offset-3 col-md-4 alert alert-warning" style="margin-top: 30px">
            <br>
            <strong> No Update Request Yet</strong>
            <br>
            <br><br>
        </div>
<?php }else{
    while($row1= mysqli_fetch_array($result)){
        if($row1['status']=="Pending"){
?>
    <div class="col-md-offset-3 col-md-4 col-xs-offset-1 col-xs-10 alert alert-info" style="margin-top: 30px">
            <br>
            <strong> Subject: <?php echo $row1['text'];?></strong>
            <br>Status: <?php echo $row1['status'];?>
            <br><br>
        </div>
        <?php }else if($row1['status']=="Success"){?>
     <div class="col-md-offset-3 col-md-4 col-xs-offset-1 col-xs-10 alert alert-success" style="margin-top: 30px">
            <br>
            <strong> Subject: <?php echo $row1['text'];?></strong>
            <br>Status: <?php echo $row1['status'];?>
            <br><br>
        </div>
        <?php } else{?>
      <div class="col-md-offset-3 col-md-4 alert col-xs-offset-1 col-xs-10 alert-danger" style="margin-top: 30px">
            <br>
            <strong> Subject: <?php echo $row1['text'];?></strong>
            <br>Status: <?php echo $row1['status'];?>
            <br><br>
        </div>
        <?php }}}?>
    <div class="col-md-offset-3 col-md-4 bg">
        
        <a href="request_submit.php"><p>New Request <span class="glyphicon glyphicon-plus-sign"></span></p></a>
        </div>
</body>
</html>