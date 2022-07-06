<?php
	include "conexiune.php";
	$idul = $_GET['id'];
	$sql = "DELETE FROM produse WHERE ID='$idul'";
	$rez = mysql_query($sql);
	if ($rez) {
		header("Location: administrareSite.php");
		
	}
	else
			echo "Problema";
?>