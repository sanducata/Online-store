<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>SKINNY CAP</title>
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
						<p>SKINNY CAP</p>
					</div>
			</div>
			<div id="produs">
				<div id="pozaProdus">
					<img src="produse/capace/skinnyCap.jpg" alt="produs">
				</div>
				<div id="detaliiProdus">
					<div id="titluProd">
						<h1>SKINNY CAP</h1>
					</div>
					<?php
						include "conexiune.php";
						$sql1 = "SELECT Pret FROM produse WHERE `Nume` = 'SKINNY CAP'";
						$rez1 = mysql_query($sql1);
						$sql2 = "SELECT * FROM produse WHERE `Nume` = 'SKINNY CAP'";
						$rez2 = mysql_query($sql2);
					?>
					<form action="adaugaCos.php" method="post">
					<div id="alegeCuloareDiv">
						
						<select name="numeOption" hidden="hidden">
							<?php
									while($row=mysql_fetch_array($rez2))
									{
										echo "<option value=\"".$row['ID']."\">".$row['Culoare']."</option>";
										
									}
								?>
						</select>
					</div>
					<div id="pret">
						<p><?php
							if($row1= mysql_fetch_array($rez1)){
									$pret=$row1['Pret'];
        							echo "$pret";
								}
							?><span>LEI</span></p>
					</div>
					
					
						
					<div id="butonAdaugaInCos">
						<?php
							session_start();
							
							if(isset($_SESSION['id'])){
								echo "<button type=\"submit\" name=\"bagaCos\">Adauga in cos</button>";
							}
							if(!isset($_SESSION['id'])){
								echo "<button onclick=\"myFunction()\" type=\"submit\" name=\"bagaCos\">Adauga in cos</button>";
							}
						?>
					</div>
					</form>
				</div>
			</div>

		</div>

		<div id="right-column">
			<?php
			$pagina = 'accesorii';
			include "meniu.php";
			?>
			
		</div>
	</div>

	<div class="footer">
		<div class="footer-inner">
			<p id="footerP">&copy; Sandu Catalin 2020. <a href=http://csac.ulbsibiu.ro> CSAC</a></p>
		</div>
	</div>
<script>
	function myFunction() {
	  alert("Pentru a adauga un produs in cos aveti nevoie de un cont!");
	}
</script>
</body>

</html>