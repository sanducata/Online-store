<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Home</title>
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
				<div id="homepageImage">
					<img src="imagineHomePage.png" alt="poza">
				</div>
			</div>
			<div id="coloanaStanga">
				<div class="pag">
					<a href="spray.php"><img src="sprayHome.jpg" alt="poza">
					<p class="titluPoze">Spray</p></a>
				</div>
				<div class="pag">
					<a href="markere.php"><img src="grogCutter.jpg" alt="poza">
					<p class="titluPoze">Markere</p></a>
				</div>
			</div>
			<div id="coloanaDreapta">
				<div class="pag">
					<a href="squeezere.php"><img src="grogSqueezer.jpg" alt="poza">
					<p class="titluPoze">Squeezere</p></a>
				</div>
				<div class="pag">
					<a href="capace.php"><img src="caps.jpg" alt="poza">
					<p class="titluPoze">Capace</p></a>
				</div>
			</div>
		</div>

		<div id="right-column">
			<?php
			$pagina = 'home';
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