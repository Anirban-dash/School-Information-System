<?php
session_start();
if(isset($_SESSION['id'])){
    $str=strval($_SESSION['id']);
    $sstr=substr($str,0,5);
    $hoi="20211";
    $teacher="20212";
    $student="20213";
    if(strcmp($sstr, $hoi)==0){
        header("location:hoi_index.php");
    }else if(strcmp($sstr, $teacher)==0){
        header('location:staff_index.php');
    }else if(strcmp($sstr, $student)==0){
        header('location:student_index.php');
    }else{
        echo "<center><img src='error.jpg' alt='error' width='50%'/></center>";
        die();
    }
}
if(isset($_SESSION['counter'])){
    $_SESSION['counter']++;
}else{
    $_SESSION['counter']=1;
}
?>
<!DOCTYPE html>
<html>
    <head>
        <script>
        function openbar(){
            document.getElementById('myside').style.width="260px";
           
        }
      
        function closenav(){
            document.getElementById('myside').style.width="0";
        }
</script>
<title>DAVM Public School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
<link rel="stylesheet" href="style1.css"/>
    </head>
    <style>
           .logo_img{
            height: 12rem;
            width: 12rem;
            }
            .ft{
                position:fixed;
                bottom: 0;
                background-size: cover; 
                background: #101010;
                height: auto;
                width: 100%;
            }
            .ft p{
                margin-top: 5px;
                color: #ffffff;
                text-align: center;
            }
    </style>
    <body class="b">
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
       
       <div class="sidenav" id="myside" style="background: lightseagreen">
           
           <a href="javascript:void(0)" class="closenav glyphicon glyphicon-remove" onclick="closenav()"></a><br><br> 
           <h3 style="color:white; padding-left: 30px;"><i>HOI LOGIN</i></h3>
           <a href="index.php">HOI LOGIN</a>
  <a href="staff_login.php" >TEACHER LOGIN</a>
  <a href="student_login.php">STUDENT LOGIN</a>
</div>
       <div class="container-fluid">
    <div class="col-sm-offset-4 col-sm-4" style="margin-top: 50px;">
	            <div class="panel panel-primary">
	            	<div class="panel-heading">
                            <center>
                            <img src="hoi_avatar.jpg" alt="alt" height="50%" width="50%"/>
                            </center>
	            	</div>
	            	<div class="panel-body">
                            <form method="POST" action="hoi_login.php">
	            		
	            		<div class="form-group">
                                    <label for="email">ID</label>
                                    <input type="text" name="email" id="email" class="form-control" required="true">
                                        
	            		</div>
	            		<div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required="true">
	            		</div>
                                <?php 
                                if(isset($_SESSION['error']) && $_SESSION['counter']==1){?>
                                <strong><p class="text text-danger">*Invalid ID or Password</p></strong>
                                <?php }?>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
	            		
                                
                            </form>
	            	</div> 
	            </div>
	        </div>  
</div>
       
       <div class="ft">
           
           <p>“Copyright © DAVM School. All Rights Reserved” ​and ​“Contact Us: +91 90000 00000”</p>
       </div>
  
</body>
</html>
