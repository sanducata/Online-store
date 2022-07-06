<?php
	$user="catalin.sandu";
	$pass="Sc199011";
	$host="localhost";
	$db="u_catalinsandu";
	
mysql_connect($host, $user, $pass) or die("Serverul nu functioneaza!");
mysql_select_db($db) or die("Nu exista baza de date!");
?>