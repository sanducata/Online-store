<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>GROG CUTTER 15</title>
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
					<img src="imagineSusTag.png" alt="poza">
					<div id="header">
						<p>GROG CUTTER 15</p>
					</div>
			</div>
			<div id="produs">
				<div id="pozaProdus">
					<img src="produse/markere/cutter15.jpg" alt="produs">
				</div>
				<div id="detaliiProdus">
					<div id="titluProd">
						<h1>CUTTER 15</h1>
						<p>Varf 15mm</p>
					</div>
					<?php
						include "conexiune.php";
						$sql = "SELECT * FROM produse WHERE `Nume` = 'CUTTER 15'";
						$rez = mysql_query($sql);
						$sql1 = "SELECT Pret FROM produse WHERE `Nume` = 'CUTTER 15'";
						$rez1 = mysql_query($sql1);
					?>
					<form action="adaugaCos.php" method="post">
					<div id="alegeCuloareDiv">
						<p>
							
								<select name="numeOption">
									<option value="0">Alege culoarea</option>
								<?php
									while($row=mysql_fetch_array($rez))
									{
										echo "<option value=\"".$row['ID']."\">".$row['Culoare']."</option>";
										
									}
								?>
								</select>
							
						</p>
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

			<div id="titluChart">
				<p>Color chart</p>
			</div>
			<div id="colorChart">
				
				<div class="col1">
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="flashYellow"></div>
						<div class="numeCuloare"><p>Flash Yellow</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="klondikeGold"></div>
						<div class="numeCuloare"><p>Klondike Gold</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="clockworkOrange"></div>
						<div class="numeCuloare"><p>Clockwork Orange</p></div>
					</div>
				</div>
				<div class="col1">
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="neonOrange"></div>
						<div class="numeCuloare"><p>Neon Orange</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="piggyPink"></div>
						<div class="numeCuloare"><p>Piggy Pink</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="jellyfishFuchsia"></div>
						<div class="numeCuloare"><p>Jellyfish Fuchsia</p></div>
					</div>
				</div>
				<div class="col1">
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="laserGreen"></div>
						<div class="numeCuloare"><p>Laser Green</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="miamiGreen"></div>
						<div class="numeCuloare"><p>Miami Green</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="obitoryGreen"></div>
						<div class="numeCuloare"><p>Obitory Green</p></div>
					</div>
				</div>
				<div class="col1">
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="black"></div>
						<div class="numeCuloare"><p>BLACK</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="airWhite"></div>
						<div class="numeCuloare"><p>Bogota White</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="burningChrome"></div>
						<div class="numeCuloare"><p>Burning Chrome</p></div>
					</div>
				</div>
			</div>

		</div>

		<div id="right-column">
			<?php
			$pagina = 'tag';
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