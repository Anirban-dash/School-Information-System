<?php
require 'common.php';
$class=$_GET['id'];
$class= intval($class);
$del="DELETE FROM time_table WHERE class_id='$class'";
$del_res= mysqli_query($con, $del) or die(mysqli_error($con));
$subject_query="SELECT * FROM subject";
$teacher_query="SELECT * FROM teacher";
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
    <form method="POST" action="timetable.php">
<table class="table table-stripe table-bordered table-hover table-responsive">
    <input value="<?php echo $class;?>" name="class" hidden="true">
            <tbody>
                <tr>
                    <th>Day</th>
                    <th>1st Period</th>
                    <th>2nd Period</th>
                    <th>Lunch Break</th>
                    <th>3rd Period</th>
                </tr>
                <tr>
                    <td>Monday</td>
                            <td>
                                <strong>Subject</strong><select name="mon_sub_1" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="mon_tec_1" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>
                                <strong>Subject</strong><select name="mon_sub_2" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="mon_tec_2" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>Break</td>
                            <td>
                                <strong>Subject</strong><select name="mon_sub_3" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="mon_tec_3" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                     <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                                
                </tr> 
                                <tr>
                    <td>Tuesday</td>
                            <td>
                                <strong>Subject</strong><select name="tue_sub_1" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="tue_tec_1" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>
                                <strong>Subject</strong><select name="tue_sub_2" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="tue_tec_2" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>Break</td>
                            <td>
                                <strong>Subject</strong><select name="tue_sub_3" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="tue_tec_3" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                                
                </tr> 
                <tr>
                    <td>Wednesday</td>
                            <td>
                                <strong>Subject</strong><select name="wed_sub_1" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="wed_tec_1" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>
                                <strong>Subject</strong><select name="wed_sub_2" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="wed_tec_2" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>Break</td>
                            <td>
                                <strong>Subject</strong><select name="wed_sub_3" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="wed_tec_3" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                     <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                                
                </tr> 
                                <tr>
                    <td>Thursday</td>
                            <td>
                                <strong>Subject</strong><select name="thu_sub_1" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="thu_tec_1" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>
                                <strong>Subject</strong><select name="thu_sub_2" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="thu_tec_2" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>Break</td>
                            <td>
                                <strong>Subject</strong><select name="thu_sub_3" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="thu_tec_3" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                                
                </tr> 
                <tr>
                    <td>Friday</td>
                            <td>
                                <strong>Subject</strong><select name="fri_sub_1" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="fri_tec_1" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                  <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>
                                <strong>Subject</strong><select name="fri_sub_2" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="fri_tec_2" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                     <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>Break</td>
                            <td>
                                <strong>Subject</strong><select name="fri_sub_3" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="fri_tec_3" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                   <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                                
                </tr> 
                 <tr>
                    <td>Saterday</td>
                            <td>
                                <strong>Subject</strong><select name="sat_sub_1" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="sat_tec_1" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td>
                                <strong>Subject</strong><select name="sat_sub_2" required="true" class="form-control">
                                    <?php 
                                    $subject_result= mysqli_query($con, $subject_query);
                                    $teacher_result= mysqli_query($con, $teacher_query);
                                    while($subject_row=mysqli_fetch_array($subject_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $subject_row['name'] ?>"><?php echo $subject_row['name'] ?></option>
                                    <?php }?>
                                             </select><br>
                                    
                                 <strong>Teacher</strong><select name="sat_tec_2" required="true" class="form-control">
                                    <?php 
                                    while($teacher_row=mysqli_fetch_array($teacher_result)){                                                                  
                                        ?>
                                    <option value="<?php echo $teacher_row['name'] ?>"><?php echo $teacher_row['name']." - ".$teacher_row['sub_name'] ?></option>
                                    <?php }?>
                                             </select>
                                 
                            </td>
                            <td></td>
                            <td>                               
                            </td>                               
                </tr>        
            </tbody>       
        </table>
         <div class="col-md-offset-5 col-md-3 bg" style="padding-bottom: 20px;">
         <button type="submit" class="btn btn-default btn-primary btn-block">Save Time Table</button>
         </div>
     </form>
