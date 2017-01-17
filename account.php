<?php
include 'connection.php';
include 'server.php';
if(!loggedin())
{
	header('Location: index.php');
}
clearstatcache();
if(isset($_POST['old'])&&isset($_POST['new'])&&isset($_POST['new_again']))
{
	$old = $_POST['old'];
	$new = $_POST['new'];
	$new_again = $_POST['new_again'];
	if(!empty($old)&&!empty($new)&&	!empty($new_again))
	{
		if(md5($old)==getuserfield('password'))
		{
			if($new==$new_again)
			{
				$new_md5=md5($new);
				$query = "UPDATE user_pass SET password='$new_md5' WHERE Id=".getuserfield('Id');
				$query_run= mysql_query($query);
				if($query_run)
				{
					?>
					<script type="text/javascript">
						alert("Password Updated");
					</script>
					<?php
				}
				else
				{
					?>
					<script type="text/javascript">
						alert("Some Error Occured try again later.");
					</script>
					<?php
				}
			}
			else
			{
				?>
				<script type="text/javascript">
					alert("Passwords don't Match");
				</script>
				<?php
			}
		}
		else
		{
			?>
				<script type="text/javascript">
					alert("Wrong Password");
				</script>
			<?php
		}
	}
	else
	{
		
	}
}

$dp= getuserfield('Id');

$name = $dp.'.jpg';

$extension = substr($name,strpos($name,'.')+1);
@$type = $_FILES['file']['type'];

@$tmp_name = $_FILES['file']['tmp_name'];

?>

<script>
$(document).ready(function(){
	$(#upload).click(function(){

<?php
clearstatcache();
if(isset($name))
{
	if(!empty($name))
	{
		if($extension=='jpg'&&$type=='image/jpeg')
		{
			$location = 'dp/';
		
			if(move_uploaded_file($tmp_name,$location.$name))
			{	?>
				<script type="text/javascript">
					alert("Uploaded");
				</script>
				<?php
			}	
			else
			{
				?>
				<script type="text/javascript">
					alert("There was some error");
				</script>
				<?php
			}

		} 
		else
		{
			?>
				<script type="text/javascript">
					alert("File must be jpg.");
				</script>
				<?php
		}
	}
	else
	{
		?>
		<script type="text/javascript">
			alert("Please choose a file.");
		</script>
		<?php
	}
}
?>
	
	});
});
</script>
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
					Welcome, <?php
						echo getuserfield('first_name').' '.getuserfield('last_name');
						if (file_exists('dp/'.$dp.'.jpg') == false) 
						{
							echo '<br/><img src="dp/default.jpg" alt="dp" height=200px; style="width:200px; border-radius:100px;"/><br/>';
						}
						else
						{
							echo '<br/><img src="dp/'.$dp.'.jpg" alt="dp" height=200px; style="width:200px; border-radius:100px;"/><br/>';
						}
						?><center><form action="account.php" class="form-horizontal container" method="POST" enctype= "multipart/form-data" style="font-size:20px;">
							<input type="file" name="file"><br/>
							<input type="submit" value="Upload" id="upload">
						</form></center><?php
						echo 'UserName:  '.getuserfield('user_name');
						echo '<br/>Email-ID:  '.getuserfield('email_id');
						echo '<br/>Gender:  '.getuserfield('gender');
						echo '<br/>BirthDay:  '.getuserfield('bday_day').' '.getuserfield('bday_month').' '.getuserfield('bday_year');
					?><br/>
					<div class="change_pass" data-toggle="modal" data-target="#myModal"><a>Change Password</a></div>
					<div class="modal fade" id="myModal" style=" font-size:20px;">
						<div class="modal-content">
							<div class="modal-header">
								<button type="button" class="close btn-info btn-lg" data-dismiss="modal" style="font-family:Times-new-roman;">&times;</button>
							</div>
							<center>
							<div class="modal-body">
								<form class="form-horizontal container" action="account.php" method="POST" role="form" data-toggle="validator">
									<div class="form-group">
											<label for="usr">Old Password</label>
											<input type="text" class="form-control"  name="old" placeholder="Enter Old Password" style="width:60%" required>
									</div>
					                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                                             				<div class="form-group">
											<label for="new">New Password</label>
											<input type="text" class="form-control" name="new" placeholder="Enter New Password" style="width:60%" required>
									</div>
									<div class="form-group">
											<label for="new_pass">New Password again</label>
											<input type="text" class="form-control" name="new_again" placeholder="Enter New Password again" style="width:60%" required>
									</div>	
									<input class="btn btn-primary" type="submit" value="Update"></b>
								</form>
							</div>
						</div>
						</center>
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
												echo '<a href="#">'.getuserfieldf($id2).'</a><br/><br/>';
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