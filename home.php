<?php
if(!$_SESSION['user_id'])
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
 				.bg-4 
 				{ 
				  background-color: #2f2f2f; 
			      color: #fff;
			      text-align: right;
			  	}
			  	.left-side
			  	{
			  		float: left;
			  		border: 2px solid blue;
			  		padding:10px;
			  		font-size: 20px;
			  		font-weight: bold;
			  		margin:20px 30px 335px 10px;
			  	}
			  	.middle-part
			  	{
			  		padding:0px;
			  		font-size: 20px;
			  		font-weight: bold;
			  		margin:20px 0px 0px 45px;
			  	}
			  	.small
			  	{
			  		font-size:15px;
			  	}
			  	.likes_names
			  	{
			  		font-size:15px;
			  		color:grey;
			  	}
 			</style>
 			
 		
 		</head>
 		<body>
 		<div class="container-fluid">
	 		<div class="row">
	 			<div class="col-sm-1">	
		 			<aside class="left-side">
						 				<a href="home.php">Home</a><br/>
						 				<a href="#">Messages</a><br/>
						 				<a href="account.php">Account</a><br/>
		 			</aside>
		 		</div>
		 		<div class="col-sm-8">
		 			<div class="middle-part">
		 				<form class="form-horizontal container" action="post.php" method="post">
		 					<input type="text" name="w_area" placeholder="What's Up?" style=" text-align:left; width:60%; height:90px; margin:0px 0px 0px 0px;" required><br/>
		 					<input type="submit" class="btn btn-primary" Value="POST" style="margin:10px 0px 0px 615px">
		 				</form>
		 				<br/>
		 				<div class="container" style="margin:10px;">
			 				<?php
			 					$id = getuserfield("Id");
			 					$query="SELECT * FROM post WHERE 1";
			 					$query1="SELECT id FROM post";
			 					$query_run= mysql_query($query);
			 					$x = mysql_num_rows($query_run);
			 					$query_run1=mysql_query($query1);
			 					while($x--)
			 					{	
			 						$query_result1 = mysql_result($query_run1,$x,'id');
			 						$query_result = mysql_result($query_run,$x,'post');
			 						$query_result3 = mysql_result($query_run,$x,'post_id');
			 						if(friends($id,$query_result1)||$id==$query_result1)
			 						{
				 						if(file_exists('dp/'.$query_result1.'.jpg')==TRUE)
										{
											echo '<img src="dp/'.$query_result1.'.jpg" alt="dp" style="width:50px;height:50px;border-radius:10px;"> ';
										}
										else
										{
											echo '<img src="dp/default.jpg" alt="dp" style="width:50px;height:50px;border-radius:10px;">';
										}
				 						echo '<a href="#">'.getuserfieldf($query_result1).' '.getuserfieldl($query_result1).'</a>';	 					
					 					echo ' '.$query_result.'<br/>';
					 					$query_like = "SELECT * FROM likes WHERE post_id='".$query_result3."'";
					 					$query_like_run=mysql_query($query_like);
					 					if($query_like_run)
					 					{
					 						echo '<a href="#"><div class="likes_names" data-toggle="modal" data-target="#myModal">'.$query_like_num_rows = mysql_num_rows($query_like_run).' likes</div></a>';
					 					}?>
					 					<div class="modal fade" id="myModal" style="font-size:20px;">
											<div class="modal-content">
												<div class="modal-header">
													<button type="button" class="close btn-info btn-lg" data-dismiss="modal" style="font-family:Times-new-roman;">&times;</button>
												</div>
												<div class="modal-body">
							
						 							<?php

						 						 	$query_likes_names = "SELECT * FROM likes WHERE post_id='".$query_result3."'";
						 						 	$query_likes_names_run=mysql_query($query_likes_names);
						 						 	$u=mysql_num_rows($query_likes_names_run);
						 						 	while($u--)
						 						 	{
							 						 	if($query_likes_names)
							 						 	{
							 						 		$query_likes_names_result=mysql_result($query_likes_names_run, $u,'id');
							 						 		if($query_likes_names_result)
							 						 		{
							 						 			if(file_exists('dp/'.$query_likes_names_result.'.jpg')==TRUE)
																{
																	echo '<img src="dp/'.$query_likes_names_result.'.jpg" alt="dp" style="width:50px;height:50px;border-radius:10px;"> ';
																}
																else
																{
																	echo '<img src="dp/default.jpg" alt="dp" style="width:50px;height:50px;border-radius:10px;">';
																}
								 								echo '<a href=#>'.getuserfieldf($query_likes_names_result).' '.getuserfieldl($query_likes_names_result).'</a><br/>';
							 						 		}
							 						 		else
							 						 		{
							 						 			echo "error";
							 						 		}

							 						 	}
						 						 	}	
						 						 	?>

												</div>
											</div>
										</div>
										<?php
					 					echo '<a href="#" id="like">Like </a><a href="#small" id="comment">comment</a>';
					 					
			 							$query4="SELECT * FROM comment WHERE post_id='".$query_result3."'";
			 							$query_run4=mysql_query($query4);
			 							$y = mysql_num_rows($query_run4);
			 							while($y--)
			 							{
			 								clearstatcache();
			 								$query_result4 = mysql_result($query_run4,$y,'comment');
			 								$query_result5 = mysql_result($query_run4,$y,'user_id');
			 								echo '<div class="container" id="small"> &nbsp; &nbsp; &nbsp;';
			 								if(file_exists('dp/'.$query_result5.'.jpg')==TRUE)
											{
												echo '<img src="dp/'.$query_result5.'.jpg" alt="dp" style="width:50px;height:50px;border-radius:10px;"> ';
											}
											else
											{
												echo '<img src="dp/default.jpg" alt="dp" style="width:50px;height:50px;border-radius:10px;">';
											}
			 								echo '<a href=#>'.getuserfieldf($query_result5).' '.getuserfieldl($query_result5).'</a> '.$query_result4.'</div>';
			 							}
						 				?>
						 				<form class="form-inline" action="" method="POST">
					 						<br/>
					 						<input type="text"  id="comment" name="comment" placeholder="Enter your Comment">&nbsp;
					 						<input type="submit" class="btn btn-primary" value="POST">
					 					</form><br/>

										<?php
										if(isset($_POST['comment']))
										{
										    $comment=$_POST['comment'];
										    $idz=getuserfield('Id');
										    
											if(!empty($comment))
											{
												$query7="INSERT INTO comment VALUES ('','$query_result3','$comment','$idz')";
												$query_run7=mysql_query($query7);
												if($query_run7)
												{
													
													 header('location:home.php');
													
												}
												
											}
										}		
				 					}	
			 					}	
			 					
			 				?>
		 				</div>

		 			</div>
		 		</div>
		 		<div class="col-sm-3">
		 		</div>
	 		</div>
 		</div>
			<footer class="container-fluid bg-4">
				<p>&copy copyrighted to Atishay Jain</p> 
			</footer>
 		</body>
 	</html>
