<?php
session_start();
include_once './controller/db.php'; 
if(isset($_SESSION['u_name'])){
	echo $_SESSION['u_email'];

	$Product_Id=$_GET['btn'];
	$email = $_SESSION['u_email'];
	$sql="INSERT INTO `cart`(`email`, `Product_Id`) VALUES ('$email','$Product_Id')";
	mysqli_query($con,$sql);
	header("Location:cart.php");
	exit();
}
