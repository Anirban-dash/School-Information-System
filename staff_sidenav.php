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
