<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Administrare</title>
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
					<p>Admininstrare website</p>
				</div>
			</div>
			<?php
				include "conexiune.php";
				$sql = "SELECT * FROM produse";
				$rez = mysql_query($sql);
			?>
			<div id="tabelProduse">
				<table>
					<tr>
						<th>Nume produs</th>
						<th>Culoare</th>
						<th>Pret</th>
						<th>Cantitate</th>
						<th></th>
						<th></th>
					</tr>
					<?php
					while($row=mysql_fetch_array($rez))
					{
						echo "<tr><td>".$row['Nume']."</td><td>".$row['Culoare']."</td><td>".$row['Pret']."</td><td>".$row['Bucati']."</td><td class=\"butoaneAdm\"><a href=\"formModifica.php?id=".$row['ID']."\">Modifica</a></td><td class=\"butoaneAdm\"><a href=\"sterge.php?id=".$row['ID']."\">Sterge</a></td></tr>";
					}
					?>
				</table>
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