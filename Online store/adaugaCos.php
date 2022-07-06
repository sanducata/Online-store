<?php
	include "conexiune.php";
	session_start();
	$id = $_POST['numeOption'];
	$sql6 = "SELECT * FROM produse WHERE `ID` = '$id'";
	$row6 = mysql_query($sql6);

		$rez6 = mysql_fetch_array($row6);
		$n = $rez6['Nume'];
		$c = $rez6['Culoare'];
		$p = $rez6['Pret'];
		$buc = $rez6['Bucati'];
		if (isset($_SESSION['id'])) {

			$buc--;

			$sql4 = "INSERT INTO `cos` (`Nume`, `Culoare`, `Pret`) VALUES ('$n', '$c', '$p')";
			$row4 = mysql_query($sql4);

			$sql3 = "UPDATE `produse` SET `Bucati` = '$buc' WHERE `ID` = '$id'";
			$row3 = mysql_query($sql3);

			header("Location: index.php");
		}
		else header("Location: contulMeu.php");
?>