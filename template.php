<!DOCTYPE html>
<html>
<head>
	<title>My Gallery</title>

	<!-- Link to TEMPLATE CSS file -->
	<link rel="stylesheet" type="text/css" href="css/template.css">
    <!-- Viewport Settings -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Link to SPINNER CSS file file -->
	<link rel="stylesheet" type="text/css" href="css/spinner.css">

	<!-- Bootstrap CDN -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

	<!-- FONT AWESOME CDN -->
	<link rel="stylesheet" type="text/css" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body>

<!-- 	//////////////////////////////////////////////////////////////////////////////////////
						PRE PAGE LOADER BODY KEEP IT AS IT IS
	////////////////////////////////////////////////////////////////////////////////////// -->
	<div id="overlayer"></div>
	<span class="loader">
	  <span class="loader-inner"></span>
	</span>

<!-- 	//////////////////////////////////////////////////////////////////////////////////////
										NAVBAR
	////////////////////////////////////////////////////////////////////////////////////// -->
	<div id="main">
	<nav class="navbar navbar-expand navbar-light bg-light">
		<div class="container" style="">
	 		<a class="navbar-brand" href="#">Gallery_Name</a>
	 		<ul class="navbar-nav">	
	 			<li class="nav-item">
	 				<a href="#" class="nav-link">Gallery</a>
	 			</li>
	 			<li class="nav-item">
	 				<a href="#" class="nav-link" id="LogIN"><i class="fab fa-adn"></i>LogIN</a>
	 			</li>
	 			<li class="nav-item">
	 				<a href="#" class="nav-link" id="SignUP"><i class="fas fa-user-plus"></i>SignUP</a>
	 			</li>
	 		</ul>
	 	</div>
	</nav>
	<div class="container abc" id="login" style="display:none;">
		<br>
		<div class="jumbotron">
			<form class="form-group" action="user_check.php" method="POST">
				<div class="row">
					<div class="col-lg-6 mb-5">
						<input type="text" class="form-control" ame="username" required placeholder="Enter the Username">
					</div>
				<br>
				<div class="col-lg-6 mb-5">
					<input type="password" class="form-control" name="pwd" required placeholder="Enter the Password">
				</div>
				</div>	
				<button class="btn btn-primary">Submit</button>
			</form>
		</div>
	</div>
	<div class="container abc" id="signup" style="display:none;">
		<br>
		<div class="jumbotron">
			<h1>Sign Up Form</h1>
		</div>
		<br>
	</div>


<!-- 	//////////////////////////////////////////////////////////////////////////////////////
						MAIN PAGE CONTENT STARTS FROM HERE
	////////////////////////////////////////////////////////////////////////////////////// -->
	<div class="jumbotron jumbotron-fluid">
		<div class="container" style="">
			<h1 class="display-4">Welcome To Your First Project!!!</h1>
			<p class="lead text-right">Your limitation - it's only your imagination.</p>
			<footer class="blockquote-footer text-right">Some Knowledgeable person,<cite title="Source Title"> Not me</cite></footer>
		</div>
	</div>
	
	<div class="container">
		<div class="row">
			<!-- STARTING OF ONE PIC -->
			<div class="col-lg-4 col-md-6">
				<div class="hovereffect img-thumbnail">
				    <img src="https://i.imgur.com/CO79hsR.png" width="100%">
				    <div class="overlay">
		                <h2 style="opacity: 0">Hover effect 8</h2>
		                <p class="set1">
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-facebook"></i></a>
		                </p>
		                <hr>
		                <hr>
		                <p class="set2">
		                    <a href="#"><i class="fa fa-instagram"></i></a>
		                    <a href="#"><i class="fa fa-dribbble"></i></a>
		                </p>
		            </div>
    			</div>
			</div>
			<!-- ENDING OF ONE PIC -->

			<!-- STARTING OF ONE PIC -->
			<div class="col-lg-4 col-md-6">
				<div class="hovereffect img-thumbnail">
				    <img src="https://i.imgur.com/2F3Al82.jpg" width="100%">
				    <div class="overlay">
		                <h2 style="opacity: 0">Hover effect 8</h2>
		                <p class="set1">
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-facebook"></i></a>
		                </p>
		                <hr>
		                <hr>
		                <p class="set2">
		                    <a href="#"><i class="fa fa-instagram"></i></a>
		                    <a href="#"><i class="fa fa-dribbble"></i></a>
		                </p>
		            </div>
    			</div>
			</div>
			<!-- ENDING OF ONE PIC -->

			<!-- STARTING OF ONE PIC -->
			<div class="col-lg-4 col-md-6">
				<div class="hovereffect img-thumbnail">
				    <img src="https://i.imgur.com/Gh4LZnk.png" width="100%">
				    <div class="overlay">
		                <h2 style="opacity: 0">Hover effect 8</h2>
		                <p class="set1">
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-facebook"></i></a>
		                </p>
		                <hr>
		                <hr>
		                <p class="set2">
		                    <a href="#"><i class="fa fa-instagram"></i></a>
		                    <a href="#"><i class="fa fa-dribbble"></i></a>
		                </p>
		            </div>
    			</div>
			</div>
			<!-- ENDING OF ONE PIC -->

			<!-- STARTING OF ONE PIC -->
			<div class="col-lg-4 col-md-6">
				<div class="hovereffect img-thumbnail">
				    <img src="https://i.imgur.com/aUhpEz3.jpg" width="100%">
				    <div class="overlay">
		                <h2 style="opacity: 0">Hover effect 8</h2>
		                <p class="set1">
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-facebook"></i></a>
		                </p>
		                <hr>
		                <hr>
		                <p class="set2">
		                    <a href="#"><i class="fa fa-instagram"></i></a>
		                    <a href="#"><i class="fa fa-dribbble"></i></a>
		                </p>
		            </div>
    			</div>
			</div>
			<!-- ENDING OF ONE PIC -->

			<!-- STARTING OF ONE PIC -->
			<div class="col-lg-4 col-md-6">
				<div class="hovereffect img-thumbnail">
				    <img src="https://i.imgur.com/qqFsein.jpg" width="100%">
				    <div class="overlay">
		                <h2 style="opacity: 0">Hover effect 8</h2>
		                <p class="set1">
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-facebook"></i></a>
		                </p>
		                <hr>
		                <hr>
		                <p class="set2">
		                    <a href="#"><i class="fa fa-instagram"></i></a>
		                    <a href="#"><i class="fa fa-dribbble"></i></a>
		                </p>
		            </div>
    			</div>
			</div>
			<!-- ENDING OF ONE PIC -->	

			<!-- STARTING OF ONE PIC -->
			<div class="col-lg-4 col-md-6">
				<div class="hovereffect img-thumbnail">
				    <img src="https://i.imgur.com/lhZoAOv.jpg" width="100%">
				    <div class="overlay">
		                <h2 style="opacity: 0">Hover effect 8</h2>
		                <p class="set1">
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-facebook"></i></a>
		                </p>
		                <hr>
		                <hr>
		                <p class="set2">
		                    <a href="#"><i class="fa fa-instagram"></i></a>
		                    <a href="#"><i class="fa fa-dribbble"></i></a>
		                </p>
		            </div>
    			</div>
			</div>
			<!-- ENDING OF ONE PIC -->	

			<!-- STARTING OF ONE PIC -->
			<div class="col-lg-4 col-md-6">
				<div class="hovereffect img-thumbnail">
				    <img src="https://i.imgur.com/Oaq0eip.jpg" width="100%">
				    <div class="overlay">
		                <h2 style="opacity: 0">Hover effect 8</h2>
		                <p class="set1">
		                    <a href="#"><i class="fa fa-twitter"></i></a>
		                    <a href="#"><i class="fa fa-facebook"></i></a>
		                </p>
		                <hr>
		                <hr>
		                <p class="set2">
		                    <a href="#"><i class="fa fa-instagram"></i></a>
		                    <a href="#"><i class="fa fa-dribbble"></i></a>
		                </p>
		            </div>
    			</div>
			</div>
			<!-- ENDING OF ONE PIC -->	

		</div>
	</div>
	</div>
</body>
<script type="text/javascript" src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript" src="js/template.js"></script>

<!-- 	//////////////////////////////////////////////////////////////////////////////////////
						SCRIPT FOR PRE PAGE LOADER 
	////////////////////////////////////////////////////////////////////////////////////// -->

<script type="text/javascript">
	$(window).on('load',function() {
		$("body").css("overflow","hidden");
		$(".loader").delay(2000).fadeOut("slow");
	  	$("#overlayer").delay(2000).fadeOut("slow", function(){$("body").css("overflow","auto");});	
	});
</script>

<!-- 	//////////////////////////////////////////////////////////////////////////////////////
						SCRIPT FOR TOP SCROLL ON REFRESH
	////////////////////////////////////////////////////////////////////////////////////// -->

<script type="text/javascript">
	$(window).on('beforeunload', function(){
  	$(window).scrollTop(0);
});
</script>
<script type="text/javascript">
	var login = 0;
	var signup = 0;
	$(document).ready(function()
	{
		$('#LogIN').on("click",function()
		{
			if(signup)
			{
				$('#signup').slideUp(300);
				signup = 0;
			}
			$('#login').slideToggle(300);
			login = 1;
		});
		$('#SignUP').on("click",function()
		{
			if(login)
			{
				$('#login').slideUp(300);
				login = 0;
			}
			$('#signup').slideToggle(300);
			signup = 1;
		});
	});
</script>
</html>
