<?php
	require_once("config.php");
	
	$name = $_GET['inputName'];
	$age = $_GET['inputAge'];
	$email = $_GET['inputEmail'];
	$password = $_GET['inputPassword'];
	$confirmPass = $_GET['inputConfirmpass'];
	
	if($password != $confrimPass)
		echo "Passwords are not the same";
	else{
	$query = "INSERT INTO tblloginform VALUES (0, '".$name."', '".$age."', '".$email."', '".$password."')";
	mysqli_query
	}
?>
