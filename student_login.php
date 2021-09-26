<!DOCTYPE html>
<html>
    <head>
<title>DAVM Public School</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" > 
<link rel="stylesheet" href="style1.css"/>
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
    </head>
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
  <h3 style="color:white; padding-left: 30px;"><i>STUDENT LOGIN</i></h3>
           <a href="index.php">HOI LOGIN</a>
  <a href="staff_login.php" >TEACHER LOGIN</a>
  <a href="student_login.php">STUDENT LOGIN</a>
</div>
       <div class="container-fluid">
  <div class="col-md-offset-4 col-md-4" style="margin-top: 50px;">
	            <div class="panel panel-primary">
	            	<div class="panel-heading">
                            <center>
                                <img src="student_avatar.jpg" alt="alt" height="50%" width="50%"/>
                            </center>
	            	</div>
	            	<div class="panel-body">
                            <form method="POST" action="login_submit.php">
	            		
	            		<div class="form-group">
                                    <label for="email">ID</label>
                                    <input type="text" name="email" id="email" class="form-control" required="true">
                                        
	            		</div>
	            		<div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="password" id="password" class="form-control" required="true">
	            		</div>
                                 <?php 
                                session_start();
                                if(isset($_SESSION['count'])){
                                    $_SESSION['count']++;
                                }else{
                                    $_SESSION['count']=1;
                                }
                                if(isset($_SESSION['errorr']) && $_SESSION['count']==1){?>
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
<script>
        function openbar(){
            document.getElementById('myside').style.width="260px";
           
        }
      
        function closenav(){
            document.getElementById('myside').style.width="0";
        }
</script>