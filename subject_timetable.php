<?php
require 'common.php';
$subject_query="SELECT * FROM subject";
$teacher_query="SELECT * FROM teacher";
$class1="SELECT * FROM time_table where class_id=1";
$c1_query= mysqli_query($con, $class1);
$class2="SELECT * FROM time_table where class_id=2";
$c2_query= mysqli_query($con, $class2);
$class3="SELECT * FROM time_table where class_id=3";
$c3_query= mysqli_query($con, $class3);
$class4="SELECT * FROM time_table where class_id=4";
$c4_query= mysqli_query($con, $class4);
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
          <div class="form-group col-md-4">
	               	<label for="class">Class</label>
                                 <select id="class" name="class" class="form-control" required="true">                                          
                                                    <?php if(mysqli_num_rows($c1_query)==0){?>
                                                     <option value="1">Class-I</option>
                                                    <?php }?>
                                                     <?php if(mysqli_num_rows($c2_query)==0){?>
                                                    <option value="2">Class-II</option>
                                                    <?php }?>
                                                     <?php if(mysqli_num_rows($c3_query)==0){?>
                                                    <option value="3">Class-III</option>
                                                    <?php }?>
                                                     <?php if(mysqli_num_rows($c4_query)==0){?>
                                                    <option value="4">Class-IV</option>
                                                     <?php }?>
                                                </select>                                                 
	            			</div>
    <table class="table table-stripe table-bordered table-hover table-responsive">
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
</body>
</html>
