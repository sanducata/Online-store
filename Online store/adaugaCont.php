<?php
	include "conexiune.php";
	
	$name = $_POST['nume'];
	$mail = $_POST['email'];
	$parola =$_POST['pass'];
	$parola =md5($parola);
	$adr = $_POST['adresa'];
	$telefon = $_POST['tel'];

	$sql = "INSERT INTO `Register` (`Nume`, `Email`, `Parola`, `Adresa`, `Telefon`) VALUES ('$name' , '$mail', '$parola', '$adr', '$telefon')";
	$rez = mysql_query($sql);
	if($rez)
	{
		header("Location: contulMeu.php");
	}
	else
		header("Location: contulMeu.php");
?>