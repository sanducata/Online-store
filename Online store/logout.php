<?php
	include "conexiune.php";
	session_start();
	$sql = "DELETE FROM cos";
	$row = mysql_query($sql);
	if(session_destroy()) 
	{
		header("Location: index.php"); 
	}
?>