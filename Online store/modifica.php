<?php
	include "conexiune.php";

	$c=$_POST['pretNou'];
	$d=$_POST['cantitateNoua'];
	$e=$_POST['idu'];

	$sql = "UPDATE produse SET Pret='$c', Bucati='$d' WHERE ID='$e'";

	$rez=mysql_query($sql);
	if(rez)
		header("Location: administrareSite.php");
	else
		echo "Problema";
?>