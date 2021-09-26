<?php
require 'common.php';
$query="SELECT t_id,name,sub_id FROM teacher";
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
    </head>

<body>
  
    <?php
    include 'sidebar.php';
    ?>
 
    <div class="col-md-offset-4 col-md-5" style="padding-top: 20px;">
        <h2 class="text-primary">TEACHER LIST VIEW</h2>
        <table class="table table-stripe table-bordered table-hover table-responsive">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Subject Assign</th>
                    <th>Subject ID</th>
                </tr>
                <?php while($row= mysqli_fetch_array($result)){
                    $s_name=$row['sub_id'];              
                    $sub_query="SELECT name FROM subject where s_id='$s_name'";
                    $sub_result=mysqli_query($con, $sub_query);
                    $sub_row= mysqli_fetch_array($sub_result); ?>                 
                <tr>
                    <td><?php echo $row['t_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <td><?php echo $sub_row['name']; ?></td>
                    <td><?php echo $row['sub_id']; ?></td>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>

</body>
</html>
