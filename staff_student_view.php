
<?php
require 'common.php';
$query="SELECT st_id,name FROM student";
$result= mysqli_query($con, $query);
$id= $_SESSION['id'];
$query1="SELECT name FROM teacher WHERE t_id='$id'";
$result1= mysqli_query($con, $query1) or die(mysqli_error($con));
$row= mysqli_fetch_array($result1);
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
        <header>
    <div class="tophead">
        <div class="headlogo">
            <img src="logo.png" alt="logo" height="30%" width="35%"/>
        </div>
        <div>
            <span class="menuicon glyphicon glyphicon-menu-hamburger" onclick="openbar()"></span>
        </div>            
    </div>
</header>
    <div class="sidenav" id="myside" style="background-color: #000000">
    <a href="javascript:void(0)" class="closenav glyphicon glyphicon-menu-left" onclick="closenav()"></a>  
    <a href="#"><img src="staff_login.jpg" alt="alt" height="25%" width="50%" class="imag"/> </a>        
    <a href="#"><h4><?php echo strtoupper($row['name']);?></h4></a> 
    <a href="staff_index.php"><span class="glyphicon glyphicon-user"></span> Your Details</a>
    <a href="staff_student_view.php"><span class="glyphicon glyphicon-education"></span> Student List View</a>
    <a href="staff_notice.php"><span class="glyphicon glyphicon-list-alt"></span> Notice Board</a>
    <a href="teacher_timetable.php"><span class="glyphicon glyphicon-th"></span> Time Table</a>
    <a href="teacher_work.php"><span class="glyphicon glyphicon-bullhorn"></span> Today's Classes</a>
    <a href="update_request.php"><span class="glyphicon glyphicon-edit"></span> Request for Update</a>
    <a href="staff_password.php"><span class="glyphicon glyphicon-cog"></span> Change Password</a>
    <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>

</div>
    
       <div class="col-md-offset-4 col-md-5" style="padding-top: 20px;">
        <h2 class="text-primary">STUDENT LIST VIEW</h2>
        <table class="table table-stripe table-bordered table-hover table-responsive">
            <tbody>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    
                </tr>
                <?php
                while($row= mysqli_fetch_array($result)){
                    echo "<tr><td>".$row['st_id']."</td><td>".$row['name'];
                }
                    ?>
            </tbody>
            
        </table>
       </div>
    </body>
</html>