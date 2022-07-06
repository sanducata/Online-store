<?php
	include "conexiune.php";
	
	if(isset($_POST['email']))
	{
		$email=mysql_real_escape_string($_POST['email']);
		$password=mysql_real_escape_string($_POST['pass']);
	}

	$sql="SELECT * FROM Register WHERE `Email`='$email' AND `Parola`= md5('$password')";
	$result=mysql_query($sql);
	$row=mysql_fetch_array($result);
	if(mysql_num_rows($result)==1)
	{
		session_start();
		$_SESSION['email']=$row['Email'];
		$_SESSION['id']=$row['ID'];
		$_SESSION['nume']=$row['Nume'];
		$_SESSION['adresa']=$row['Adresa'];
		$_SESSION['tel']=$row['Telefon'];
		$_SESSION['parola']=$row['Parola'];
		
		if($_SESSION['email'] == "website@admin.com" && $_SESSION['parola'] == md5("admin"))
		{
			session_write_close();
			header('Location: administrareSite.php');
		}
		else
		{
			session_write_close();
			header('Location: index.php');
		}
		exit();
	}
	else
	{
		echo "<script>alert('Adresa de email sau parola gresita!')</script>";
		echo"<script>location.href='contulMeu.php'</script>";
	}
?>