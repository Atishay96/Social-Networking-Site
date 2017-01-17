<?php
include 'connection.php';
include 'server.php';
if(loggedin())
{
	?>
	<!DOCTYPE html>
	<html>
		<head>
			<meta charset="utf-8">
  			<meta name="viewport" content="width=device-width, initial-scale=1">
			<title>SNS</title>
			<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
 			<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
 			<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
			<style>
				.navbar 
				{
			      padding-top: 10px;
			      padding-bottom: 10px;
			      border: 0;
			      border-radius: 0;
			      margin-bottom: 0;
			      font-size: 12px;
			      letter-spacing: 5px;
  				}

 				.navbar-nav  li a:hover 
 				{
      				color: #1abc9c !important;
  				}
  				body 
  				{
	      			font: 30px Montserrat, sans-serif;
	      			line-height: 1.8;
	      			color:black;
  				}
  				p {font-size: 22px;}
  				.margin {margin-bottom: 45px;}
  				.links
  				{
					color:#23a37a;
				}
				.container-fluid 
				{
				  padding-top: 10px;
				  padding-bottom: 10px;
				}
			</style>
		</head>
		<body data-spy="scroll" data-target=".navbar" data-offset="50">
			<nav class="navbar navbar-inverse navbar-fixed-top">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="http://atishayj.in/">Hola!</a>
					</div>
					<div>
						<div class="collapse navbar-collapse" id="myNavbar">
							<ul class="nav navbar-nav navbar-right">
								<li><a href="home.php">Home</a></li>
								<li><a href="account.php">Account</a></li>
								<li><a href="logout.php">Log Out</a></li>
							</ul>
					</div>
				</div>
			</nav>
			<br/><br/><br/><br/><br/>
		</body>
	</html>
	<?php
	include 'home.php';
}
else
{
	include 'login.php';
}

?>