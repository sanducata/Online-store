<!DOCTYPE html>
<html lang="ro">
<head>
	<meta charset="utf-8">
	<title>Contul meu</title>
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
					<img src="imagineSusContulMeu.png" alt="poza">
					<div id="header">
						<p>Contul meu</p>
					</div>
			</div>
			<div id="loginRegisterDiv">
				<div id="loginForm">
					<p class="titluForm">Ai deja cont? Logheaza-te aici!</p>
					<form action="loginScript.php" method="post">
						<input type="text" placeholder="Adresa de E-mail *" name="email" required="required">
						<input type="password" placeholder="Parola *" name="pass" required="required">
						<div class="submitButon">
							<button class="butonLogin">Login</button>
						</div>
					</form>
				</div>
				<div id="registerForm">
					<div>
						<p class="titluForm">Nu ai cont? Creeaza unul!</p>
					</div>
					<form action="adaugaCont.php" method="post">
						<input type="text" placeholder="Numele si prenumele *" name="nume" required="required">
						<input type="text" placeholder="Numar de telefon" name="tel">
						<input type="text" placeholder="Adresa *" name="adresa" required="required">
						<input type="text" placeholder="Adresa de E-mail *" name="email" required="required">
						<input type="password" placeholder="Parola *" name="pass" required="required">
						<div class="submitButon">
							<button class="butonLogin">Creeaza cont</button>
						</div>
					</form>
				</div>
			</div>
		</div>

		<div id="right-column">
			<?php
			$pagina = 'register';
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