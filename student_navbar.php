<?php 
$st_id=$_SESSION['id'];
$select_query="SELECT name FROM student WHERE st_id='$st_id'";
$name_result= mysqli_query($con, $select_query);
$name_row= mysqli_fetch_array($name_result);
?>
<style>
    .logo_img{
    height: 12rem;
    width: 12rem;
}
</style>
<header>
    <div class="tophead">
        <div class="headlogo">
            <img src="logo.png" alt="logo" class="logo_img"/>
        </div>
        <div>
            <span class="menuicon glyphicon glyphicon-menu-hamburger" onclick="openbar()"></span>
        </div>            
    </div>
</header>
<div class="sidenav" id="myside" style="background: #009999">
    <a href="javascript:void(0)" class="closenav glyphicon glyphicon-menu-left" onclick="closenav()"></a>  
    <a href="#"><img src="student_avatar.jpg" alt="student_avatar" height="25%" width="50%" class="imag"/> </a>        
    <a href="#"><h4><?php echo strtoupper($name_row['name']);?></h4></a> 
    <a href="student_index.php"><span class="glyphicon glyphicon-tasks"></span> Notice Board</a>
    <a href="student_timetable_view.php"><span class="glyphicon glyphicon-list-alt"></span> Class Time Table</a>
    <a href="student_request.php"><span class="glyphicon glyphicon-edit"></span> Request For Updates</a>
    <a href="student_profile_view.php"><span class="glyphicon glyphicon-user"></span> My Profile</a>
    <a href="student_password.php"><span class="glyphicon glyphicon-cog"></span> Change Password</a>
    <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
</div>
    <script>
        function openbar(){
            document.getElementById('myside').style.width="260px";
           
        }
        function closenav(){
            document.getElementById('myside').style.width="0";
        }
    </script>
