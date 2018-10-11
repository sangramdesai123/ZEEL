<?php
if(isset($_GET['name']))
{
	include_once 'db.php';
	$name = mysqli_real_escape_string($con,$_GET['name']);
	$email = mysqli_real_escape_string($con,$_GET['email']);
	$pwd = mysqli_real_escape_string($con,$_GET['pwd']);
	$tel = mysqli_real_escape_string($con,$_GET['phone']);
	$address = mysqli_real_escape_string($con,$_GET['address']);
	//error handeral
	//cheack empty input
	echo $name;
	if(empty($name) ||empty($email)||empty($tel)||empty($pwd)||empty($address))
	{
		header("Location:loginpage.php?signup=empty");
		exit();
	}
	else{
		//cheak if input char is valid
		if(!preg_match("/^[a-zA-Z]*$/", $name)){
			header("Location:loginpage.php?signup=invalid");
			exit();
		}else{
			//email is valid or not
			if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
				header("Location:loginpage.php?signup=invalidEmail");
				exit();
			}
			else{
				$sql="SELECT * FROM users WHERE name='$name';";
				$result=mysqli_query($con,$sql);
				$resultCheck=mysqli_num_rows($result);
				if($resultCheck>0)
				{
					header("Location:../loginpage.php?signup=userNameExist");
					exit();
				}else{
					//hashing password
					//$hashedpwd=password_hash($pwd,PASSWORD_DEFAULT);
					//INSERT USER INTO DATABASE
					$sql="INSERT INTO users (`name`, `email`, `pwd`, `tel`, `address`) VALUES('$name','$email','$pwd','$tel','$address');";
					mysqli_query($con,$sql);
					header("Location:../home.php?signup=Success");
					exit();
				}
			}
		}
	}
}
?>