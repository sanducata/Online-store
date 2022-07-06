<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>TAG - Markere</title>
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
					<img src="imagineSusTag.png" alt="poza">
					<div id="header">
						<p>Markere</p>
					</div>
			</div>
			<div id="produse">
						<div class="leftDiv">
							<div class="leftProduct">
								<a href="cutter08.php">
									<div class="transparencyDiv"></div>
									<div class="imagineProdus">
										<img src="produse/markere/cutter08.jpg" alt="produs">
									</div>
									<div class="titluProdus">
										<p>GROG CUTTER 08</p>
									</div>
								</a>
							</div>
						</div>
						<div class="middleDiv">
							<div class="middleProduct">
								<a href="cutter15.php">
									<div class="transparencyDiv"></div>
									<div class="imagineProdus">
										<img src="produse/markere/cutter15.jpg" alt="produs">
									</div>
									<div class="titluProdus">
										<p>GROG CUTTER 15</p>
									</div>
								</a>
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

</body>
</html>