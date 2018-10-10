<?php
echo "string";
	session_start();
if(isset($_SESSION['u_name'])){

	session_unset();
	session_destroy();
	echo "string";
	header("Location:home.php");
	exit();
}
?>