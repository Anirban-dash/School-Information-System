<?php
require 'common.php';
$mon_sub_1= mysqli_escape_string($con, $_POST['mon_sub_1']);
$mon_sub_2= mysqli_escape_string($con, $_POST['mon_sub_2']);
$mon_sub_3= mysqli_escape_string($con, $_POST['mon_sub_3']);
$mon_tec_1= mysqli_escape_string($con, $_POST['mon_tec_1']);
$mon_tec_2= mysqli_escape_string($con, $_POST['mon_tec_2']);
$mon_tec_3= mysqli_escape_string($con, $_POST['mon_tec_3']);
$tue_sub_1= mysqli_escape_string($con, $_POST['tue_sub_1']);
$tue_sub_2= mysqli_escape_string($con, $_POST['tue_sub_2']);
$tue_sub_3= mysqli_escape_string($con, $_POST['tue_sub_3']);
$tue_tec_1= mysqli_escape_string($con, $_POST['tue_tec_1']);
$tue_tec_2= mysqli_escape_string($con, $_POST['tue_tec_2']);
$tue_tec_3= mysqli_escape_string($con, $_POST['tue_tec_3']);
$wed_sub_1= mysqli_escape_string($con, $_POST['wed_sub_1']);
$wed_sub_2= mysqli_escape_string($con, $_POST['wed_sub_2']);
$wed_sub_3= mysqli_escape_string($con, $_POST['wed_sub_3']);
$wed_tec_1= mysqli_escape_string($con, $_POST['wed_tec_1']);
$wed_tec_2= mysqli_escape_string($con, $_POST['wed_tec_2']);
$wed_tec_3= mysqli_escape_string($con, $_POST['wed_tec_3']);
$thu_sub_1= mysqli_escape_string($con, $_POST['thu_sub_1']);
$thu_sub_2= mysqli_escape_string($con, $_POST['thu_sub_2']);
$thu_sub_3= mysqli_escape_string($con, $_POST['thu_sub_3']);
$thu_tec_1= mysqli_escape_string($con, $_POST['thu_tec_1']);
$thu_tec_2= mysqli_escape_string($con, $_POST['thu_tec_2']);
$thu_tec_3= mysqli_escape_string($con, $_POST['thu_tec_3']);
$fri_sub_1= mysqli_escape_string($con, $_POST['fri_sub_1']);
$fri_sub_2= mysqli_escape_string($con, $_POST['fri_sub_2']);
$fri_sub_3= mysqli_escape_string($con, $_POST['fri_sub_3']);
$fri_tec_1= mysqli_escape_string($con, $_POST['fri_tec_1']);
$fri_tec_2= mysqli_escape_string($con, $_POST['fri_tec_2']);
$fri_tec_3= mysqli_escape_string($con, $_POST['fri_tec_3']);
$sat_sub_1= mysqli_escape_string($con, $_POST['sat_sub_1']);
$sat_sub_2= mysqli_escape_string($con, $_POST['sat_sub_2']);
$sat_tec_1= mysqli_escape_string($con, $_POST['sat_tec_1']);
$sat_tec_2= mysqli_escape_string($con, $_POST['sat_tec_2']);
$class=intval($_POST['class']);
$q_1="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$mon_sub_1', '$mon_tec_1', '1', 'Monday', '$class');";
$q_2="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$mon_sub_2', '$mon_tec_2', '2', 'Monday', '$class');" ;
$q_3="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$mon_sub_3', '$mon_tec_3', '3', 'Monday', '$class');";
$q_4="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$tue_sub_1', '$tue_tec_1', '1', 'Tuesday', '$class')";
$q_5="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$tue_sub_2', '$tue_tec_2', '2', 'Tuesday', '$class');"; 
$q_6="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$tue_sub_3', '$tue_tec_3', '3', 'Tuesday', '$class');";
$q_7="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$wed_sub_1', '$wed_tec_1', '1', 'Wednesday', '$class');";
$q_8="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$wed_sub_2', '$wed_tec_2', '2', 'Wednesday', '$class');";
$q_9="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$wed_sub_3', '$wed_tec_3', '3', 'Wednesday', '$class');";
$q_10="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$thu_sub_1', '$thu_tec_1', '1', 'Thursday', '$class');";
$q_11="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$thu_sub_2', '$thu_tec_2', '2', 'Thursday', '$class');";
$q_12="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$thu_sub_3', '$thu_tec_3', '3', 'Thursday', '$class');";
$q_13="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$fri_sub_1', '$fri_tec_1', '1', 'Friday', '$class');";
$q_14="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$fri_sub_2', '$fri_tec_2', '2', 'Friday', '$class');";
$q_15="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$fri_sub_3', '$fri_tec_3', '3', 'Friday', '$class');";
$q_16="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$sat_sub_1', '$sat_tec_1', '1', 'Saturday', '$class');";
$q_17="INSERT INTO `time_table` (`sub_name`, `t_name`, `period`, `day`, `class_id`) VALUES ('$sat_sub_2', '$sat_tec_2', '2', 'Saturday', '$class');";
$q_result_1= mysqli_query($con, $q_1) or die(mysqli_error($con));
$q_result_2= mysqli_query($con, $q_2) or die(mysqli_error($con));
$q_result_3= mysqli_query($con, $q_3) or die(mysqli_error($con));
$q_result_4= mysqli_query($con, $q_4) or die(mysqli_error($con));
$q_result_5= mysqli_query($con, $q_5) or die(mysqli_error($con));
$q_result_6= mysqli_query($con, $q_6) or die(mysqli_error($con));
$q_result_7= mysqli_query($con, $q_7) or die(mysqli_error($con));
$q_result_8= mysqli_query($con, $q_8) or die(mysqli_error($con));
$q_result_9= mysqli_query($con, $q_9) or die(mysqli_error($con));
$q_result_10= mysqli_query($con, $q_10) or die(mysqli_error($con));
$q_result_11= mysqli_query($con, $q_11) or die(mysqli_error($con));
$q_result_12= mysqli_query($con, $q_12) or die(mysqli_error($con));
$q_result_13= mysqli_query($con, $q_13) or die(mysqli_error($con));
$q_result_14= mysqli_query($con, $q_14) or die(mysqli_error($con));
$q_result_15= mysqli_query($con, $q_15) or die(mysqli_error($con));
$q_result_16= mysqli_query($con, $q_16) or die(mysqli_error($con));
$q_result_17= mysqli_query($con, $q_17) or die(mysqli_error($con));
header("location:time_table_view.php");
?>
