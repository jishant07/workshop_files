<?php 
	session_start();
	require './includes/db_info.php';
	$sql_count = "select * from `image_db`";
	$result = $con -> query($sql_count);
	$row = mysqli_num_rows ($result);
	$new_id = $row + 1;
	$email = $_SESSION['logged_in_user'];
	if($email != "")
	{
		if (!empty($_FILES['image_to_upload']))
		{
			if (($_FILES['image_to_upload']['type'] == 'image/jpeg') || ($_FILES['image_to_upload']['type'] == 'image/jpg') || ($_FILES['image_to_upload']['type'] == 'image/png')) 
			{
				$target_dir = "images/";
				$target_file = $target_dir . $new_id . "img.jpg";
				move_uploaded_file($_FILES['image_to_upload']['tmp_name'], $target_file);
				$sql = "INSERT INTO `image_db`(`email`, `image_link`) VALUES ('$email','$target_file')";
				$con -> query($sql);
			}
			else
			{
				$_SESSION['file_error'] = 1;
			}
			header("Location:profile.php");
		}
	}
	else
	{
		header("Location:template.php");
	}
?>