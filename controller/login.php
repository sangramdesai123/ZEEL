<?php
session_start(); 
#after user click on log in button user get verifed and log in to his account
if(isset($_GET['submit']))
{
	include 'db.php';
	$uid=mysqli_real_escape_string($con,$_GET['email']);//because user not able add  sql query in log in box
	$pwd=mysqli_real_escape_string($con,$_GET['pwd']);
//error handling
	//check inputs is empty
	if(empty($uid)||empty($pwd)){
			header("Location:../loginpage.php?login=empty");
		exit();
	}
	else{
		$sql="SELECT * FROM users WHERE email='$uid';";
		$result=mysqli_query($con,$sql);
		$resultch=mysqli_num_rows($result);
		if($resultch < 1){
			header("Location:../loginpage.php?login=error");
			exit();
		}
		else{
			if ($row = mysqli_fetch_assoc($result)) {
				
				//dehashing of password user type
				//$hashedPwdCheck = password_verify($pwd , $row['name']);
				if($pwd==$row['name'])
				//if($hashedPwdCheck == false)
				{
					
					header("Location:../loginpage.php?login=errorindehashedpwd");
					exit();
				}else//if($hashedPwdCheck == true){
					//log in the user in website here creating session verible for user
					$_SESSION['u_name']=$row['name'];
					$_SESSION['u_address']=$row['address'];
					$_SESSION['u_email']=$row['email'];
					$_SESSION['u_phone']=$row['tel'];
					header("Location:../home.php?login=success");
					exit();
				}
			}
		}
	}

 ?>