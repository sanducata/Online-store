<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>MTN 94</title>
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
					<img src="imagineSusSpray.png" alt="poza">
					<div id="header">
						<p>MTN 94</p>
					</div>
			</div>
			<div id="produs">
				<div id="pozaProdus">
					<img src="produse/spray/mtn94.jpg" alt="produs">
				</div>
				<div id="detaliiProdus">
					<div id="titluProd">
						<h1>MTN 94</h1>
						<p>400 ml</p>
					</div>
					<?php
						include "conexiune.php";
						$sql = "SELECT * FROM produse WHERE `Nume` = 'MTN 94'";
						$rez = mysql_query($sql);
						$sql1 = "SELECT Pret FROM produse WHERE `Nume` = 'MTN 94'";
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
						<div class="culoare" id="partyYellow"></div>
						<div class="numeCuloare"><p>Party Yellow</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="lightYellow"></div>
						<div class="numeCuloare"><p>Light Yellow</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="lavaOrange"></div>
						<div class="numeCuloare"><p>Lava Orange</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="marsOrange"></div>
						<div class="numeCuloare"><p>Mars Orange</p></div>
					</div>
				</div>
				<div class="col1">
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="marsellieBlue"></div>
						<div class="numeCuloare"><p>Marsellie Blue</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="portoBlue"></div>
						<div class="numeCuloare"><p>Porto Blue</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="ultraviolet"></div>
						<div class="numeCuloare"><p>Ultraviolet</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="cosmosViolet"></div>
						<div class="numeCuloare"><p>Cosmos Violet</p></div>
					</div>
				</div>
				<div class="col1">
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="turquoise"></div>
						<div class="numeCuloare"><p>Turquoise</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="erasmusGreen"></div>
						<div class="numeCuloare"><p>Erasmus Green</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="spectroBriseGreen"></div>
						<div class="numeCuloare"><p>Spectro Brise Green</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="neonGreen"></div>
						<div class="numeCuloare"><p>Neon Green</p></div>
					</div>
				</div>
				<div class="col1">
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="black"></div>
						<div class="numeCuloare"><p>BLACK</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="madridRed"></div>
						<div class="numeCuloare"><p>Madrid Red</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="lightRed"></div>
						<div class="numeCuloare"><p>Light Red</p></div>
					</div>
					<div class="culoareCuNumeDiv">
						<div class="culoare" id="airWhite"></div>
						<div class="numeCuloare"><p>Air White</p></div>
					</div>
				</div>
			</div>

		</div>

		<div id="right-column">
			<?php
			$pagina = 'spray';
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