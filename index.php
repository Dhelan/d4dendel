<!DOCTYPE html>
<html lang="en">
<head>
	<title>Hapinoworries</title>
	<meta charset="utf-8">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="main.css">
	<link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;600;800&display=swap" rel="stylesheet">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
	<!-- Load an icon library to show a hamburger menu (bars) on small screens -->
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<style>  
	  body {
	    font-family: Raleway;
	    line-height: 1.8;
	  }
	  .margin {margin-bottom: 5px;}
	  .bg-1 { 
	    background-color: #267151; /* Green */
	    color: #ffffff;
	  }
	  .bg-2 { 
	    background-color: #474e5d; /* Dark Blue */
	    color: #ffffff;
	  }
	  .bg-3 { 
	    background-color: #ffffff; /* White */
	    color: #555555;
	  }
	  .bg-4 { 
	    background-color: #2f2f2f; /* Black Gray */
	    color: #fff;
	  }
	  .container-fluid-1 {
	    padding-top: 70px;
	    padding-bottom: 70px;
	  }
	.topnav {
	  z-index: 3;
	  overflow: hidden;
	  background-color: #333;
	}

	.topnav a {
	  float: left;
	  display: block;
	  color: #f2f2f2;
	  text-align: center;
	  padding: 14px 16px;
	  text-decoration: none;
	  font-size: 17px;
	}

	.topnav a:hover {
	  background-color: #ddd;
	  color: black;
	}

	.topnav a.active {
	  background-color: #f97137;
	  color: white;
	}

	.topnav .icon {
	  display: none;
	}

	@media screen and (max-width: 600px) {
	  .topnav a:not(:first-child) {display: none;}
	  .topnav a.icon {
	    float: right;
	    display: block;
	  }
	}

	@media screen and (max-width: 600px) {
	  .topnav.responsive {position: relative;}
	  .topnav.responsive .icon {
	    position: absolute;
	    right: 0;
	    top: 0;
	  }
	  .topnav.responsive a {
	    float: none;
	    display: block;
	    text-align: left;
	  }
	}
	#container1{
		padding-top: 20px;
	}
	#container1 video{
		z-index: -1;	
	}
	.button{
  		background-color: #f97137;
		border: none;
		color: #fff;
		padding: 15px 32px;
		text-align: center;
		text-decoration: none;
		display: inline-block;
		font-size: 16px; 
	}
	.button:hover {
	  	box-shadow: 0 12px 16px 0 rgba(0,0,0,0.24), 0 17px 50px 0 rgba(0,0,0,0.19);
	}
	</style>
</head>
<body>
	<div class="topnav" id="myTopnav">
	  <a href="index.php" class="active">HA<b>PINO</b>WORRIES</a>
	  <a href="blog.php">BLOG</a>
	  <a href="gallery.php">GALLERY</a>
	  <a href="#about">ABOUT</a>
	  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
	    <i class="fa fa-bars"></i>
	  </a>
	</div>
	<!-- First Container -->
	<div class="container-fluid container-fluid-1 text-center" id="container1">
		<!-- The video -->
		<video autoplay muted loop id="myVideo">
			<source src="XP-Pen Artist 15.6 Graphics Display - Reveal Your True Colors 2.mp4" type="video/mp4">
		</video>
		<div class="row">
			<div class="col-lg-12">
				<div id="content">
					<img src="d4dendel (5).jpg" class="img-responsive img-circle margin" style="display:inline" alt="HAPI" width="250" height="250">
					<h2 id="wc" data-wow-delay="0.3s">HA<b style="color: #f97137;">PINO</b>WORRIES</h2>
					<center><h4 style="width: 40%;">Connect with us by liking and following our facebook page, surely we can have an exciting adventure together!</h4></center>
					<hr>
					<a href="https://www.facebook.com/d4dendel"><button class="button"><span class="glyphicon glyphicon-pencil"></span>Follow us</button></a>
				</div>							       
			</div>
		</div>
	</div>
																	    
	<!-- Second Container -->
	<div class="container-fluid container-fluid-1 bg-2 text-center">
	  <h3 class="margin">What Am I?</h3>
	  <div class="col-lg-4 wow fadeIn">
		<div class="embed-responsive embed-responsive-16by9 wow fadeInRight">
			<iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f2cCLH0c40s" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
		</div>
	  </div>
	  <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. </p>
	  <a href="#" class="btn btn-default btn-lg">
	    <span class="glyphicon glyphicon-search"></span> Search
	  </a>
	</div>

	<!-- Third Container (Grid) -->
	<div class="container-fluid container-fluid-1 bg-3 text-center">    
	  <h3 class="margin">Where To Find Me?</h3><br>
	  <div class="row">
	    <div class="col-sm-4">
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <img src="d4dendel (6).jpg" class="img-responsive margin" style="width:100%" alt="Image">
	    </div>
	    <div class="col-sm-4"> 
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <img src="d4dendel (9).jpg" class="img-responsive margin" style="width:100%" alt="Image">
	    </div>
	    <div class="col-sm-4"> 
	      <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
	      <img src="d4dendel (8).jpg" class="img-responsive margin" style="width:100%" alt="Image">
	    </div>
	  </div>
	</div>

	<!-- Footer -->
	<footer class="container-fluid container-fluid-1 bg-4 text-center">
	  <p>Bootstrap Theme Made By <a href="https://www.w3schools.com">www.w3schools.com</a></p> 
	</footer>
	<script>
	function myFunction() {
	  var x = document.getElementById("myTopnav");
	  if (x.className === "topnav") {
	    x.className += " responsive";
	  } else {
	    x.className = "topnav";
	  }
	}
	</script>
</body>
</html>
