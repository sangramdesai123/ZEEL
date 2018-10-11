<?php
if(isset($_GET['btn']))
{
	include_once './controller/db.php';
	$bb=$_GET['btn'];
	echo $bb;
	$sql="DELETE  FROM cart WHERE Product_Id='$bb';";
    $res=mysqli_query($con,$sql);
    header("Location:cart.php?removed");
	exit();

}
