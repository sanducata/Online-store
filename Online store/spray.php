<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Spray</title>
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
						<p>Spray</p>
					</div>
			</div>
			<div id="produse">
				<div class="leftDiv">
					<div class="leftProduct">
						<a href="mtn94.php">
							<div class="transparencyDiv"></div>
							<div class="imagineProdus">
								<img src="produse/spray/mtn94.jpg" alt="produs">
							</div>
							<div class="titluProdus">
								<p>MTN 94</p>
							</div>
						</a>
					</div>
					<div class="leftProduct">
						<a href="maximo.php">
							<div class="transparencyDiv"></div>
							<div class="imagineProdus">
								<img src="produse/spray/maximo.jpg" alt="produs">
							</div>
							<div class="titluProdus">
								<p>MAXIMO</p>
							</div>
						</a>
					</div>
					<div class="leftProduct">
						<a href="alien.php">
							<div class="transparencyDiv"></div>
							<div class="imagineProdus">
								<img src="produse/spray/alien.jpg" alt="produs">
							</div>
							<div class="titluProdus">
								<p>ALIEN</p>
							</div>
						</a>
					</div>
				</div>
				<div class="middleDiv">
					<div class="middleProduct">
						<a href="hardcore.php">
							<div class="transparencyDiv"></div>
							<div class="imagineProdus">
								<img src="produse/spray/hardcore.jpg" alt="produs">
							</div>
							<div class="titluProdus">
								<p>HARDCORE</p>
							</div>
						</a>
					</div>
					<div class="middleProduct">
						<a href="tnt.php">
							<div class="transparencyDiv"></div>
							<div class="imagineProdus">
								<img src="produse/spray/tnt.jpg" alt="produs">
							</div>
							<div class="titluProdus">
								<p>TNT</p>
							</div>
						</a>
					</div>
				</div>
				<div class="rightDiv">
					<div class="rightProduct">
						<a href="megaColors.php">
							<div class="transparencyDiv"></div>
							<div class="imagineProdus">
								<img src="produse/spray/mega.jpg" alt="produs">
							</div>
							<div class="titluProdus">
								<p>MEGA COLORS</p>
							</div>
						</a>
					</div>
					<div class="rightProduct">
						<a href="pocket.php">
							<div class="transparencyDiv"></div>
							<div class="imagineProdus">
								<img src="produse/spray/pocket.jpg" alt="produs">
							</div>
							<div class="titluProdus">
								<p>POCKET</p>
							</div>
						</a>
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

</body>
</html>