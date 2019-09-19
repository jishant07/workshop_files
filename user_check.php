<?php 
	session_start();
	extract($_POST);
	require('./includes/db_info.php');
	$password = md5($pwd);
	$sql = "select email,password from `user_data` where `email`='$email' && `password`='$password'";
	$result = $con -> query($sql);
	$rows = $result->num_rows;
	if($rows == 1)
	{
		$_SESSION['is_logged_in'] = 1;
		$_SESSION['logged_in_user'] = $email;
	}
	else
	{
		$_SESSION['login_error'] = 1;
	}
	header("Location:template.php");
?>