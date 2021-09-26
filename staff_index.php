<?php 
require 'common.php';
$id= $_SESSION['id'];
$query="SELECT * FROM teacher WHERE t_id='$id'";
$result= mysqli_query($con, $query) or die(mysqli_error($con));
if(mysqli_num_rows($result)==0){
    echo ' <script>alert("Invalid ID") </script>';
    die();
}
else{
    $row= mysqli_fetch_array($result);
}
$s_id=$row['sub_id'];
$subject_query="SELECT name FROM subject WHERE s_id='$s_id'";
$query_result= mysqli_query($con, $subject_query) or die(mysqli_error($con));
$res= mysqli_fetch_array($query_result);
?>
<!DOCTYPE html>
<html>
    <head>
<title>DAVM Public School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
<link rel="stylesheet" href="style1.css"/>
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
    <div>
        <div class="col-sm-4 jumbotron" style="margin-top: 20px; margin-left: 20px;">
            <p>ID: <?php echo $row['t_id'];?>  </p>
            <p>Name: <?php echo $row['name'];?></p>
        </div>
        <div class="col-sm-4 jumbotron" style="margin-top: 20px; margin-left: 20px;">
            <p>Age: <?php echo $row['age'];?>  </p>
            <p>Subject: <?php echo $res['name'];?></p>
        </div>
    </div>
    <div>
        <div class="col-sm-4 jumbotron" style="margin-top: 20px; margin-left: 20px;">
            <p>Mobile: <?php echo $row['mobile_no'];?>  </p>
            <p>Email: <?php echo $row['email'];?></p>
        </div>
        <div class="col-sm-4 jumbotron" style="margin-top: 20px; margin-left: 20px;">
            <p>Date of Joining: <?php echo $row['joining'];?>  </p>
            <br><br>
        </div>
    </div>
</body>
</html>
   