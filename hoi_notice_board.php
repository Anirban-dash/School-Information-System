<?php 
require 'common.php';
$query="SELECT * FROM notice_board";
$result= mysqli_query($con, $query) or die(mysqli_error($con));

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
        font-size: 2.5vh;
    }
    .jumbotron p{
        font-size: 3vh;
    }
</style>
    </head>
<body> 
  <?php
  include 'sidebar.php';
  if(mysqli_num_rows($result)==0){
  ?>
     <div class="col-md-offset-3 col-md-6 col-xs-10 col-xs-offset-1 alert alert-warning" style="margin-top: 30px">
         <br><br>
            <strong> No Notice Available</strong>
            <br>
            <br><br>
        </div>
  <?php }else{
      while($row= mysqli_fetch_array($result)){
?>
    <div class="col-sm-offset-3 col-sm-6 col-xs-10 col-xs-offset-1 jumbotron" style="margin-top: 30px">
        <center><h2><?php echo $row['subject'];?></h2></center><br>
        <p><?php echo $row['content'];?></p>
        TIME: <?php echo $row['time'];?><br>
        VIEW: <?php echo strtoupper($row['status']);?>
        <div class="bg">
              <?php
        echo "<a href='delete_notice.php?id={$row['n_id']}'><p class='text-danger'>Delete <span class='glyphicon glyphicon-trash'></span></p></a>";
        echo "<a href='edit_notice.php?id={$row['n_id']}'><p class='text-succes'>Edit <span class='glyphicon glyphicon-edit'></span></p></a>";
        ?>
        </div>
        </div>
  <?php }}?>
      <div class="col-md-offset-3 col-md-6 bg">
    <a href="add_notice.php"><p>Create Notice <span class="glyphicon glyphicon-plus-sign"></span></p></a>
      </div>
    
    
</body>
</html>