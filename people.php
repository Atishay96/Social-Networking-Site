<?php
include 'connection.php';
include 'server.php';
if(!loggedin())
{
	header('Location: index.php');
}

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
				body
				{
					font-family: Times-new-roman;
				}
				.change,.change_pass
				{
					font-size:25px;
					color:blue;
				}
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
				.font
				{
					font-size: 40px;
					font-family: Times-new-roman;
				}
				.bg2
				{
					text-align: left;
					color:red;
					background-color:grey;
				}
				.bg-4 
 				{ 
				  background-color: #2f2f2f; 
			      color: #fff;
			      text-align: right;
			  	}
			</style>
			<script>
			$(document).ready(function(){
				$("#a_but").click(function(){
					<?php 
						$id = getuserfield('Id');
						
						$query = "INSERT INTO friends VALUES ['','','']";
					?>
				});
			});
			</script>
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
			<br/><br/>
			
			<div class="container-fluid font" style="text-align:center;">
					Welcome <?php
						echo getuserfield('first_name').',';
						?>
						<h1 style="color:black; font-weight:bold;">People you may know</h1>
					<div class="jumbotron bg2">
						
						<?php
							$query= "SELECT * FROM user_pass WHERE Id <>'".getuserfield('Id')."'";
								$query_run=mysql_query($query);
								$x = mysql_num_rows($query_run);
								$a_id = getuserfield('Id');
							if($query_run)
							{
										while($x--)
										{
											$p_id = mysql_result($query_run,$x, 'Id');
											if(!friends($a_id,$p_id))
											{
												if(file_exists('dp/'.$p_id.'.jpg')==TRUE)
												{
													echo '<img src="dp/'.$p_id.'.jpg" alt="dp" style="width:100px;height:100px;border-radius:200px;"> ';
												}
												else
												{
													echo '<img src="dp/default.jpg" alt="dp" style="width:100px;height:100px;border-radius:200px;"> 	';
												}
												echo '<a href="#">'.getuserfieldf($p_id).'</a>';

												echo '<span id="a_but"><button id="<?php echo $p_id;?>" class="btn btn-lg btn-danger" style="margin:0px 0px 0px 50px;">Add Friend</button></span><br/><br/>';
											}
										}
										
							}
											
						?>
					</div>
					<h1 style="color:black; font-weight:bold;">Friend List</h1>
					<div class="jumbotron bg2">	
						<?php

							$query= "SELECT * FROM friends WHERE id='".getuserfield('Id')."'";
								$query_run=mysql_query($query);
								$rows=array();
							if($query_run)
							{
										while($row = mysql_fetch_array($query_run))
										{
											$rows[]=$row;
										}
											foreach($rows as $row)
											{
												$id2 = stripslashes($row['id2']);
												if(file_exists('dp/'.$id2.'.jpg')==TRUE)
												{
													echo '<img src="dp/'.$row['id2'].'.jpg" alt="dp" style="width:100px;height:100px;border-radius:200px;"> ';
												}
												else
												{
													echo '<img src="dp/default.jpg" alt="dp" style="width:100px;height:100px;border-radius:200px;"> 	';
												}
												echo '<a href="#">'.getuserfieldf($id2).'</a>';

												echo '<span id="but"><button id="<?php echo $id2;?>" class="btn btn-lg btn-danger" style="margin:0px 0px 0px 50px;">Remove Friend</button></span><br/><br/>';
											}
							}
							else
								echo "error";
						?>
					</div>
					<footer class="container-fluid bg-4">
						<p>&copy copyrighted to Atishay Jain</p> 
					</footer>
			</div>
		</body>
	</html>