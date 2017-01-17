<?php
ob_start();
session_start();
$current_file = $_SERVER['SCRIPT_NAME'];
if(isset($_SERVER['HTTP_REFERER'])&&!empty($_SERVER['HTTP_REFERER']))
{
	$http_referer = $_SERVER['HTTP_REFERER'];
}
function loggedin()
{
	if(isset($_SESSION['user_id'])&&!empty($_SESSION['user_id']))
	{
		return true;
	}
	else
	{
		return false;
	}
}

function getuserfield($field)
{
	$query = "SELECT $field FROM user_pass WHERE id='".$_SESSION['user_id']."'";
	if($query_run = mysql_query($query))
	{
		if($query_result = mysql_result($query_run,0,$field))
		{
			return $query_result;
		}
	}
}
function getuserfieldf($field)
{
	$query = "SELECT first_name FROM user_pass WHERE id='$field'";
	if($query_run = mysql_query($query))
	{
		if($query_result = mysql_result($query_run,0,'first_name'))
		{
			return $query_result;
		}
	}
}
function getuserfieldl($field)
{
	$query = "SELECT last_name FROM user_pass WHERE id='$field'";
	if($query_run = mysql_query($query))
	{
		if($query_result = mysql_result($query_run,0,'last_name'))
		{
			return $query_result;
		}
	}
}
function friends($id1,$id2)
{
	$query ="SELECT * FROM friends WHERE id='".$id1."' AND id2='".$id2."'";
	$query_run = mysql_query($query);
		if($query_run)
		{
			$query_num_rows=mysql_num_rows($query_run);
			if($query_num_rows==1)
				return true;
			else
				return false;
		}
}
?>
