<?php
	require_once("config.php");
	
	$email = $_POST['email'];
	$password = $_POST['password'];
	
	$queryString = "SELECT * FROM tbloginform WHERE email = '".$email."' && password = '".$password."'";
	$query = mysqli_query; $connection; $queryString;	
?>