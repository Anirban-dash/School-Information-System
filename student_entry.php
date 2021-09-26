
<?php
require 'common.php';

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
        
        <div class="container">
        <div class="col-md-offset-4 col-md-5" style="margin-bottom: 20px;">
            <form method="POST" action="student_entry_submit.php">
            		<h3>Enter Student Details</h3><br>
	               	<div class="form-group">
	               		<label for="fullname">Full Name</label>
                                <input type="text" name="fullname" id="fullname" class="form-control" required="true">
	            		</div>
	            	<div class="form-group">
	            		<label for="dob">Date of Birth</label>
                                <input type="date" name="dob" id="dob" class="form-control" required="true" placeholder="yyyy-mm-dd">
	            	</div>
                        <div class="form-group">
                                    <label for="father">Father's Name</label>
                                                   <input type="text" name="father" id="father" class="form-control">
                                      </div>
	            			<div class="form-group">
	               				<label for="address">Address</label>
                                                <input type="text" name="address" id="address" class="form-control" required="true">
	            			</div>
	            			<div class="form-group">
	               				<label for="cast">Cast</label>
                                                 <select id="cast" name="cast" class="form-control" required="true">
                                                     <option disabled="">-Please Select-</option>
                                                    <option value="General">General</option>
                                                    <option value="OBC">OBC</option>
                                                    <option value="SC">SC</option>
                                                    <option value="ST">ST</option>
                                                </select>    
	            			</div>
                                        <div class="form-group">
	               				<label for="religion">Religion</label>
                                                 <select id="religion" name="religion" class="form-control" required="true">
                                                     <option disabled="">-Please Select-</option>
                                                     <option value="Hindu">Hindu</option>
                                                    <option value="Muslim">Muslim</option>
                                                    <option value="Christians">Christians</option>
                                                    <option value="Buddh">Buddhist</option>
                                                    <option value="Sikhs">Sikh</option>
                                                    <option value="Jain">Jain</option>
                                                    <option value="others">Others</option>
                                                </select> 
	            			</div>
                                         <div class="form-group">
	               				<label for="mother">Mother's Name</label>
                                                <input type="text" name="mother" id="mother" class="form-control" required="true">
	            			</div>
                                        <div class="form-group">
	               				<label for="aadhar">Aadhar Number</label>
                                                <input type="text" name="aadhar" id="aadhar" class="form-control" required="true" size="12">
	            			</div>
                                        <div class="form-group">
	               				<label for="class">Present Class</label>
                                                <select id="class" name="class" class="form-control" required="true">
                                                    <option disabled="">-Please Select-</option>
                                                    <option value="1">Class-I</option>
                                                    <option value="2">Class-II</option>
                                                    <option value="3">Class-III</option>
                                                    <option value="4">Class-IV</option>
                                                </select>                                                 
	            			</div>
                                        <div class="form-group">
	               				<label for="roll">Roll Number</label>
                                                <input type="text" name="roll" id="roll" class="form-control" required="true">
	            			</div>
                                        <button type="submit" class="btn btn-default btn-primary btn-block">Submit</button>
            </form>
        </div>
    </div>
       
          
    
</body>
</html>
