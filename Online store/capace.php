<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Accesorii - Capace</title>
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
					<img src="imagineSusAccesorii.png" alt="poza">
					<div id="header">
						<p>Capace</p>
					</div>
			</div>
			<div id="produse">
						<div class="leftDiv">
							<div class="leftProduct">
								<a href="fatCap.php">
									<div class="transparencyDiv"></div>
									<div class="imagineProdus">
										<img src="produse/capace/fatCap.jpg" alt="produs">
									</div>
									<div class="titluProdus">
										<p>FAT CAP</p>
									</div>
								</a>
							</div>
							<div class="leftProduct">
								<a href="universalCap.php">
									<div class="transparencyDiv"></div>
									<div class="imagineProdus">
										<img src="produse/capace/universalCap.jpg" alt="produs">
									</div>
									<div class="titluProdus">
										<p>UNIVERSAL CAP</p>
									</div>
								</a>
							</div>
						</div>
						<div class="middleDiv">
							<div class="middleProduct">
								<a href="skinnyCap.php">
									<div class="transparencyDiv"></div>
									<div class="imagineProdus">
										<img src="produse/capace/skinnyCap.jpg" alt="produs">
									</div>
									<div class="titluProdus">
										<p>SKINNY CAP</p>
									</div>
								</a>
							</div>
							<div class="middleProduct">
								<a href="needleCap.php">
									<div class="transparencyDiv"></div>
									<div class="imagineProdus">
										<img src="produse/capace/needleCap.jpg" alt="produs">
									</div>
									<div class="titluProdus">
										<p>NEEDLE CAP</p>
									</div>
								</a>
							</div>
						</div>
						<div class="rightDiv">
							<div class="rightProduct">
								<a href="superFatCap.php">
									<div class="transparencyDiv"></div>
									<div class="imagineProdus">
										<img src="produse/capace/superFatCap.jpg" alt="produs">
									</div>
									<div class="titluProdus">
										<p>SUPER FAT CAP</p>
									</div>
								</a>
							</div>
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

</body>
</html>