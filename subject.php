<?php
require 'common.php';
$query="select s_id,name from subject";
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
        <h2 class="text-primary">SUBJECT DETAILS</h2>
        <table class="table table-stripe table-bordered table-hover table-responsive">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th></th>
                </tr>
                <?php while($row= mysqli_fetch_array($result)){?>
                <tr>
                    <td><?php echo $row['s_id']; ?></td>
                    <td><?php echo $row['name']; ?></td>
                    <?php echo "<td><a href='subject_delete.php?id={$row['s_id']}'><button type='submit' class='btn btn-danger'><span class='glyphicon glyphicon-trash'></span></button></a></td>";
                    ?>
                </tr>
                <?php } ?>
            </tbody>
        </table>
    </div>
     
</body>
</html>