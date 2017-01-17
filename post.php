<?php
include "connection.php";
include "server.php";

if(isset($_POST['w_area']))
{
	echo '<br/><br/><br/>'."pressed";
	$id_user=getuserfield('Id');
	$w_area = $_POST['w_area'];
	if(!empty($w_area))
	{
		$query="INSERT INTO post VALUES ('','$w_area','$id_user','likes')";
		$query_run = mysql_query($query);
		if($query_run)
		{
			echo "all good";
		}
	}
}
header('location:home.php');
?>