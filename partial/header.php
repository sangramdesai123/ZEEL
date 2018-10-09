<?php 
session_start(); 
 ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <title>Online Shopping</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <link rel="stylesheet" type="text/css" href="css/style.css">
  <script src="../js/main.js"></script>
 
</head>
<body>
<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>                        
      </button>
      <a  href="home.php"><img src="img/zeal.jpg"></a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-shopping-cart"></span></span><font size=3> Cart</a></li></font>

        <?php  
            if(isset($_SESSION['u_name']))
            {
              $user=$_SESSION['u_name'];
            echo '<li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span><font size=3>'.$user.'</a></li></font>
              ';
            }
            else{
            echo '<li><a href="loginpage.php"><span class="glyphicon glyphicon-log-in"></span><font size=3> Login</a></li></font>
        <li><a href="contact.php"><span class="glyphicon glyphicon-globe"></span></span><font size=3> Contact Us</a></li></font>';
            }
          ?>



		    
		  </ul>
    </div>
</div>
</nav>
