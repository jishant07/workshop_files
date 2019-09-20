<?php session_start(); ?>
<!DOCTYPE html>
<html>
<head>
	<title>Profile Page</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
	<nav class="navbar navbar-expand navbar-light bg-light">
		<div class="container">
	 		<a class="navbar-brand" href="template.php">Gallery_Name</a>
	 		<ul class="navbar-nav">	
	 			<?php 
	 				if (isset($_SESSION['is_logged_in']) && $_SESSION['is_logged_in'])
	 				{
	 					?>
	 					<li class="nav-item">
	 						<a href="profile.php" class="nav-link">My Gallery</a>
	 					</li>
	 					<li class="nav-item">
	 						<a href="logout.php" class="nav-link" id="SignUP">Logout</a>
	 					</li>
	 					<?php
	 				}
	 				else
	 				{
	 					?>
	 					<li class="nav-item">
	 						<a href="#" class="nav-link" id="LogIN"><i class="fab fa-adn"></i>LogIN</a>
	 					</li>
	 					<li class="nav-item">
	 						<a href="#" class="nav-link" id="SignUP"><i class="fas fa-user-plus"></i>SignUP</a>
	 					</li>
	 					<?php
	 				}
	 			?>
	 		</ul>
	 	</div>
	</nav>	
	<div class="container" style="margin: 50px auto;">
		<div class="row">
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
					<div class="col-lg-4 col-md-6" style="margin-top: 20px;">
						<div class="img-thumbnail">
							<img src="<?php echo $row['image_link']; ?>" width="100%">
						</div>
					</div>
					<?php
				}
			}
			else
			{
				?>
				<div class="container">
					<div class="jumbotron" style="margin: 5%; background-color: white; border: 1px solid grey; ">
						<p class="display-4" style="text-align: center;">No Image Uploaded</p>
					</div>
				</div>

				<?php
			}
		?>
		</div>
		<form action="add_photo.php" method="POST" enctype="multipart/form-data" class="form-group">
			<div class="container" style="width: 50%; margin-top: 100px;">	
				<div style="display: inline-block;">
					<input type="file" name="image_to_upload" required class="form-control" width="500px">
				</div>
				<div style="display: inline-block;">
					<button class="btn btn-primary" style="margin: 20px 40%;">Submit</button>
				</div>
				
			</div>
		</form>
	</div>

</body>
</html>