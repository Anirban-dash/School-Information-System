<?php
require 'common.php';
$clas=$_POST['cl'];
$clas= intval($clas);
$mon="SELECT * FROM time_table WHERE day='Monday' and class_id='$clas' ORDER BY period";
$tue="SELECT * FROM time_table WHERE day='Tuesday' and class_id='$clas' ORDER BY period";
$wed="SELECT * FROM time_table WHERE day='Wednesday' and class_id='$clas' ORDER BY period";
$thu="SELECT * FROM time_table WHERE day='Thursday' and class_id='$clas' ORDER BY period";
$fri="SELECT * FROM time_table WHERE day='Friday' and class_id='$clas' ORDER BY period";
$sat="SELECT * FROM time_table WHERE day='Saturday' and class_id='$clas' ORDER BY period";
$curr_day=date("l");
$mon_result=mysqli_query($con, $mon) or die(mysqli_error($con));
$tue_result=mysqli_query($con, $tue) or die(mysqli_error($con));
$wed_result=mysqli_query($con, $wed) or die(mysqli_error($con));
$thu_result=mysqli_query($con, $thu) or die(mysqli_error($con));
$fri_result=mysqli_query($con, $fri) or die(mysqli_error($con));
$sat_result=mysqli_query($con, $sat) or die(mysqli_error($con));
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
    .bg{
        float:right;
        padding:10px;
    }
    </style>
    </head>
<body> 
  <?php
  include 'sidebar.php';
  ?>

        <h3>CLASS <?php echo $clas;?> TIME TABLE</h3>
        <?php 
        if(mysqli_num_rows($mon_result)==0){?>
        <div class="col-md-offset-3 col-xs-offset-2 col-md-6 col-xs-8 alert alert-danger" style="margin-top: 30px;">
            <h3>Timetable isn't set for Class <?php echo $clas;?> </h3>
        </div>
        <div class="col-md-offset-3 col-xs-offset-2 col-md-2 col-xs-2">
            <a href='subject_timetable.php'><button class="btn btn-success">Set Timetable</button></a>
        </div>
        
        <?php }else{?>
    <table class="table table-stripe table-bordered table-hover table-responsive" style="margin-top: 20px;">
            <tbody>
                <tr>
                    <th>Day</th>
                    <th>1st Period</th>
                    <th>2nd Period</th>
                    <th>3rd Period</th>
                </tr>
                <?php if(strcmp($curr_day,"Monday")==0){
                 echo "<tr class='success'>";
                } else {
                    echo "<tr>";
                }?>   
                    <td>Monday</td>
                    <?php while($mon_row= mysqli_fetch_array($mon_result)){
                            echo '<td><strong>'.$mon_row['sub_name'].'</strong><br>'.$mon_row['t_name'].'</td>';
                    } ?>
                </tr>
                <?php if(strcmp($curr_day,"Tuesday")==0){
                 echo "<tr class='success'>";
                } else {
                    echo "<tr>";
                }?>   
                    <td>Tuesday</td>
                    <?php while($tue_row= mysqli_fetch_array($tue_result)){
                            echo '<td><strong>'.$tue_row['sub_name'].'</strong><br>'.$tue_row['t_name'].'</td>';
                    } ?>
                </tr>
                <?php if(strcmp($curr_day,"Wednesday")==0){
                 echo "<tr class='success'>";
                } else {
                    echo "<tr>";
                }?>   
                    <td>Wednesday</td>
                    <?php while($wed_row= mysqli_fetch_array($wed_result)){
                            echo '<td><strong>'.$wed_row['sub_name'].'</strong><br>'.$wed_row['t_name'].'</td>';
                    } ?>
                </tr>
                <?php if(strcmp($curr_day,"Thursday")==0){
                 echo "<tr class='success'>";
                } else {
                    echo "<tr>";
                }?>   
                    <td>Thursday</td>
                    <?php while($thu_row= mysqli_fetch_array($thu_result)){
                            echo '<td><strong>'.$thu_row['sub_name'].'</strong><br>'.$thu_row['t_name'].'</td>';
                    } ?>
                </tr>
                <?php if(strcmp($curr_day,"Friday")==0){
                 echo "<tr class='success'>";
                } else {
                    echo "<tr>";
                }?>   
                    <td>Friday</td>
                    <?php while($fri_row= mysqli_fetch_array($fri_result)){
                            echo '<td><strong>'.$fri_row['sub_name'].'</strong><br>'.$fri_row['t_name'].'</td>';
                    } ?>
                </tr>
                <?php if(strcmp($curr_day,"Saturday")==0){
                 echo "<tr class='success'>";
                } else {
                    echo "<tr>";
                }?>   
                    <td>Saturday</td>
                    <?php while($sat_row= mysqli_fetch_array($sat_result)){
                            echo '<td><strong>'.$sat_row['sub_name'].'</strong><br>'.$sat_row['t_name'].'</td>';
                    } ?>
                </tr>
            </tbody>
        </table>
          <div class="bg">
              <?php 
            echo "<a href='edit_timetable.php?id={$clas}'><button class='btn btn-primary'><span class='glyphicon glyphicon-refresh'></span> Reset Timetable</button></a>";
            ?>
        </div>
        <?php }?>
</body>
</html>
 
