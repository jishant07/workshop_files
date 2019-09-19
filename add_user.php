<?php 
	session_start();
	require './includes/db_info.php';
	extract($_POST);
	$hash = md5($pwd);
	$sql = "select * from `user_data` where email='$email'";
	$result = $con -> query($sql);
	$rows = $result->num_rows;
	if ($rows > 0)
	{
		$_SESSION['user_exists'] = 1;
	}
	else
	{
		$insert_sql = "INSERT INTO `user_data`(`name`, `email`, `password`, `insta`, `twitter`, `facebook`) VALUES ('$fname.$lname','$email','$hash','$insta','$twitter','$fb')";
		$con -> query($insert_sql);
		$_SESSION['user_added'] = 1;
	}
	header("Location:template.php");
?>