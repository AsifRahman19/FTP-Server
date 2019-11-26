<?php
include "include/header.php";
include "include/connect.php";
?>
<body>
	<!-- navigation -->
	<nav class="navbar navbar-expand-md navbar-light bg-light sticky-top">
		<div class="container-fluid">
			<a class="navbar-brand" href="unregistered.php">All in One FTP Server</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive">
				<span class="navbar-toggler-icon"></span>	
			</button>
			<div class="collapse navbar-collapse" id="navbarResponsive">
				<ul class="navbar-nav ml-auto">
					
					<li class="nac-item">
						<a class="nav-link" href="login.php">Login</a>
					</li>
					<li class="nac-item">
						<a class="nav-link" href="register.php">Register</a>
				</ul>	
			</div>
		</div>
	</nav>

<!-- Image Slider -->
<center>
<div id = "slides" class="carousel slide" data-ride = "carousel">
<ul class="carousel-indicators">
	<li data-target="#slides" data-slide-to="0" class="active"></li>
	<li data-target="#slides" data-slide-to="1"></li>
	<li data-target="#slides" data-slide-to="2"></li>
	<li data-target="#slides" data-slide-to="3"></li>
</ul>
<div class="carousel-inner">
	<div class="carousel-item active">
		<img src="img/avengers.jpg">	
		<div class="carousel-caption">
			<h1>Avengers Endgame</h1>
		</div>	
	</div>
	<div class="carousel-item">
		<img src="img/johnwick2.jpg">	
		<div class="carousel-caption">
			<h1>John Wick 2</h1>
		</div>		
	</div>
	<div class="carousel-item">
		<img src="img/mafia2.jpg">
		<div class="carousel-caption">
			<h1>Mafia 2</h1>
		</div>			
	</div>
	<div class="carousel-item">
		<img src="img/office.jpg">	
		<div class="carousel-caption">
		</div>		
	</div>
</div>	
<br>
<?php
include "include/footer.php";
?>
