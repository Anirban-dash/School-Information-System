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
<div class="sidenav" id="myside">
    <a href="javascript:void(0)" class="closenav glyphicon glyphicon-menu-left" onclick="closenav()"></a>  
    <a href="#"><img src="hoi_avatar.jpg" alt="alt" height="25%" width="50%" class="imag"/> </a>        
    <a href="#"><h4>ANIRBAN DASH</h4></a> 
    <a href="hoi_index.php"><span class="glyphicon glyphicon-dashboard"></span> School Details</a>

    <button  class="drop"><span class="glyphicon glyphicon-education"></span> Teacher Section
        <span class="glyphicon glyphicon-menu-down"></span></button>
    
    <div class="drop-contain">
    <a href="staff_view.php">Teacher List View</a>
    <a href="staff_edit.php">Teacher Edit/Delete</a>
    <a href="staff_entry.php">Teacher Entry</a>
    </div>
    <button  class="drop"><span class="glyphicon glyphicon-education"></span> Student Section
        <span class="glyphicon glyphicon-menu-down"></span></button>
        <div class="drop-contain">
  <a href="student_view.php">Student List View</a>
  <a href="student_edit.php">Student Edit/Delete</a>
  <a href="student_entry.php">Student Entry</a>
        </div>
   <button  class="drop"><span class="glyphicon glyphicon-education"></span> Subject Section
        <span class="glyphicon glyphicon-menu-down"></span></button>
        <div class="drop-contain">
  <a href="subject.php">Subject List View</a>
  <a href="sub_entry.php">Subject Entry</a>
        </div>
<a href="time_table_view.php"><span class="glyphicon glyphicon-th"></span> View Time Table</a>
    <a href="hoi_notice_board.php"><span class="glyphicon glyphicon-list-alt"></span> Notice Board</a>
     <a href="request_list.php"><span class="glyphicon glyphicon-info-sign"></span> Request Updates</a>
     <a href="request_history.php"><span class="glyphicon glyphicon-refresh"></span> Request History</a>
    <a href="hoi_password.php"><span class="glyphicon glyphicon-cog"></span> Change Password</a>
    <a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Logout</a>
</div>
    <script>
        function openbar(){
            document.getElementById('myside').style.width="260px";
           
        }
        function closenav(){
            document.getElementById('myside').style.width="0";
        }
        var dropdown = document.getElementsByClassName("drop");
        var i;

        for (i = 0; i < dropdown.length; i++) {
          dropdown[i].addEventListener("click", function() {
            this.classList.toggle("active");
            var dropdownContent = this.nextElementSibling;
            if (dropdownContent.style.display === "block") {
              dropdownContent.style.display = "none";
            } else {
              dropdownContent.style.display = "block";
            }
          });
        }
    </script>