<?php
$host="localhost";
$user="root";
$password="";
$database="proj";
$conn_error = "Could not connect to the database";

$sqcon = mysql_connect($host,$user,$password);
if(!$sqcon || !mysql_select_db($database))
{
	echo die($conn_error);
}
else
	//echo "Connected";
?>