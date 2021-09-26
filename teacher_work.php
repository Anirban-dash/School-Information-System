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
$t_name=$row['name'];
$curr_day= date("l");
$f_query="SELECT * FROM time_table WHERE t_name='$t_name' and day='$curr_day' ORDER BY period";
$f_result= mysqli_query($con, $f_query) or die(mysqli_error($con));

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
    <div class="col-md-8 col-md-offset-2" style="margin-top:10px;">
  <table class="table table-stripe table-bordered table-hover table-responsive">
            <tbody>
                <tr class="success">
                    <td><?php echo $curr_day;?></td>
                    <?php
                    if(mysqli_num_rows($f_result)==0){
                        echo '<td> No Classes For Today</td>';
                    }
                    while($f_row= mysqli_fetch_array($f_result)){
                        echo '<td>'.' Period: '.$f_row['period'].'<br> Class: '.$f_row['class_id'];
                    }
                    ?>
                </tr>
            </tbody>
  </table>
    </div>
</body>
</html>
