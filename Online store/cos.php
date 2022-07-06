<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Cos</title>
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

		<div id=continut>
			<div id="imagineCuText">
					<img src="imagineSusCos.png" alt="poza">
					<div id="header">
						<p>Cos</p>
					</div>
			</div>
			<?php
				include "conexiune.php";
				$sql = "SELECT * FROM cos";
				$rez = mysql_query($sql);
			?>

				<table id="tabelCos">
					<tr>
						<th class="asd">Nume produs</th>
						<th class="asd">Culoare</th>
						<th class="asd">Pret</th>
						<th></th>
					</tr>
					<?php
					while($row=mysql_fetch_array($rez))
					{
						echo "<tr><td>".$row['Nume']."</td><td>".$row['Culoare']."</td><td>".$row['Pret']." Lei</td><td><a class=\"butoaneStergeCos\" href=\"stergeCos.php?id=".$row['ID']."\">Sterge din cos</a></td></tr>";
					}
					?>
				</table>
				<div id="divButonComanda">
					<button type="submit" id="butonComanda">Finalizare comanda</button>
				</div>
		</div>

		<div id="right-column">
			<?php
			$pagina = 'cos';
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