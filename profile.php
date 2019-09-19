<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<?php 
		if(isset($_SESSION['file_error']) && $_SESSION['file_error'])
		{
	?>
		<script type="text/javascript">
			alert("File Uploaded Successfully");
		</script>
	<?php 
	$_SESSION['file_error'] = 0;
		} 
	?>
	<?php 
		require './includes/db_info.php';
		$email = $_SESSION['logged_in_user'];
		$select_sql = "select * from `image_db` where email='$email'";
		$result = $con -> query($select_sql);
		if($result->num_rows > 0)
		{
			while($row = $result->fetch_assoc())
			{
				?>
				<div class="container">
					<img src="<?php echo $row['image_link']; ?>" width="100%" height="300px">
				</div>
				<?php
			}
		}
		else
		{
			?>
			<p>No Image Uploaded</p>
			<?php
		}
	?>
	<form action="add_photo.php" method="POST" enctype="multipart/form-data" class="form-group">
		<input type="file" name="image_to_upload" required class="form-control">
		<button>Submit</button>
	</form>
</body>
</html>