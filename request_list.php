<?php
require 'common.php';
$query="SELECT * FROM update_req WHERE `status` = 'Pending'";
$result=mysqli_query($con, $query);
 
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
  if(mysqli_num_rows($result)==0){ 
  ?>
  <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-warning" style="margin-top: 30px">
            <br>
            <strong> No Update Request Yet</strong>
            <br>
            <br><br>
        </div>
<?php }else{
    while($row= mysqli_fetch_array($result)){
?>
     <div class="col-md-offset-3 col-md-4 col-xs-10 col-xs-offset-1 alert alert-info" style="margin-top: 30px">
            <br>
            <p><strong>ID: <?php echo $row['a_id'];?></strong></p>
            <p>Subject: <?php echo $row['text'];?></p>
            <p>Status: <?php echo $row['status'];?></p>
        </div>
    <div class="col-md-offset-3 col-md-4 bg"> 
        <?php
        echo "<a href='request_remove.php?id={$row['u_id']}'><p class='text-danger'>Discard <span class='glyphicon glyphicon-trash'></span></p></a>";
        echo "<a href='request_approve.php?id={$row['u_id']} {$row['a_id']}'><p class='text-succes'>Approve <span class='glyphicon glyphicon-ok'></span></p></a>";
        ?>
        </div>
<?php }}?>
</body>
</html>
