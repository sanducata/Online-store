<?php
	include "conexiune.php";
	$idul = $_GET['id'];
	$sql = "DELETE FROM cos WHERE ID='$idul'";
	$rez = mysql_query($sql);
	if ($rez) {
		header("Location: cos.php");
		
	}
	else
			echo "Problema";
?>