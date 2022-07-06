<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Modifica</title>
	<link rel="stylesheet" type="text/css" href="stil.css">
	<link rel="shortcut icon" href="logo.png">
</head>
<body>
	<div id="wrapper">
		
		<div id="left-column">
			<a href="index.php">
				<p>GRAFFITI SHOP</p>
			</a>
		</div>

		<div id="continut">
			<div id="imagineCuText">
				<img src="imagineSusAccesorii.png" alt="poza">
				<div id="header">
					<p>Modifica pret si cantitate</p>
				</div>
			</div>
			<?php
				include "conexiune.php";
				$id = $_GET['id'];
				$sql = "SELECT * FROM produse WHERE ID='$id'";
				$rez = mysql_query($sql);
				$row=mysql_fetch_array($rez);
				$idprod=$row['ID'];

				$sql1 = "SELECT * FROM produse WHERE ID='$idprod'";
				$rez1 = mysql_query($sql1);
				$row1=mysql_fetch_array($rez1);
			?>

			<p class="prodModi">Produs: <span><?php echo $row1['Nume']; ?></span></p>
			<p class="prodModi">Culoare: <span><?php echo $row1['Culoare']; ?></span></p>

			<div id="divMareFormModi">
				<div id="divPretCantitate">
					<p>Pret</p>
					<p>Cantitate</p>
				</div>

				<div id="divFormModi">
					<form action="modifica.php" method="post">
						<input class="inputModi" type="text" name="pretNou" value="<?php echo $row['Pret'] ?>">
						<input class="inputModi" type="text" name="cantitateNoua" value="<?php echo $row['Bucati'] ?>">
						<input type="hidden" name="idu" value="<?php echo $id ?>">
						<input id="butonModifica" type="submit" name="modifica" value="Modifica">
					</form>
				</div>
			</div>
			
		</div>

		<div id="right-column">
			<?php
			$pagina = 'administrare';
			include "meniu.php";
			?>
			
		</div>
	</div>

	<div class="footer">
		<div class="footer-inner">
			<p id="footerP">&copy; Sandu Catalin 2020. <a href=http://csac.ulbsibiu.ro> CSAC</a></p>
		</div>
	</div>


</body>
</html>