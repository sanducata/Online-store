<ul id="navbar">
	<?php
	session_start();
	
	if(!isset($_SESSION['id']))
	{
			echo "<li><a class=\"";?><?php if($pagina=='home') {echo "active";}?><?php echo "\" href=\"index.php\">HOME</a></li>";
			echo "<li><a class=\"";?><?php if($pagina=='spray') {echo "active";}?><?php echo "\" href=\"spray.php\">SPRAY</a></li>";
			echo "<li class=\"dropdown\">
					<a class=\"";?><?php if($pagina=='tag') {echo "active";}?><?php echo "\" href=\"tag.php\"><span class=\"sageata\">&#129083;</span>TAG</a>
					<div class=\"continutDropdown\">
						<a href=\"markere.php\">MARKERE</a>
						<a href=\"squeezere.php\">SQUEEZERE</a>
					</div>
				</li>";
			echo "<li class=\"dropdown\">
					<a class=\"";?><?php if($pagina=='accesorii') {echo "active";}?><?php echo "\" href=\"accesorii.php\"><span class=\"sageata\">&#129083;</span>ACCESORII</a>
					<div class=\"continutDropdown\">
						<a href=\"capace.php\">CAPACE</a>
						<a href=\"varfuri.php\">VARFURI</a>
					</div>
				</li>";
			echo "<li><a class=\"";?><?php if($pagina=='register') {echo "active";}?><?php echo "\" href=\"contulMeu.php\">CONTUL MEU</a></li>";
	}
	else if(isset($_SESSION['id']))
	{
		if($_SESSION['email'] == "website@admin.com" && $_SESSION['parola'] == md5("admin"))
		{
			echo "<li><a class=\"";?><?php if($pagina=='home') {echo "active";}?><?php echo "\" href=\"index.php\">HOME</a></li>";
			echo "<li><a class=\"";?><?php if($pagina=='spray') {echo "active";}?><?php echo "\" href=\"spray.php\">SPRAY</a></li>";
			echo "<li class=\"dropdown\">
					<a class=\"";?><?php if($pagina=='tag') {echo "active";}?><?php echo "\" href=\"tag.php\"><span class=\"sageata\">&#129083;</span>TAG</a>
					<div class=\"continutDropdown\">
						<a href=\"markere.php\">MARKERE</a>
						<a href=\"squeezere.php\">SQUEEZERE</a>
					</div>
				</li>";
			echo "<li class=\"dropdown\">
					<a class=\"";?><?php if($pagina=='accesorii') {echo "active";}?><?php echo "\" href=\"accesorii.php\"><span class=\"sageata\">&#129083;</span>ACCESORII</a>
					<div class=\"continutDropdown\">
						<a href=\"capace.php\">CAPACE</a>
						<a href=\"varfuri.php\">VARFURI</a>
					</div>
				</li>";
			echo "<li><a class=\"";?><?php if($pagina=='cos') {echo "active";}?><?php echo "\" href=\"cos.php\">COS</a></li>";
			echo "<li><a class=\"";?><?php if($pagina=='administrare') {echo "active";}?><?php echo "\" href=\"administrareSite.php\">ADMINISTRARE</a></li>";
			echo "<li><a href=\"logout.php\">LOGOUT</a></li>";
		}
		else
		{
			echo "<li><a class=\"";?><?php if($pagina=='home') {echo "active";}?><?php echo "\" href=\"index.php\">HOME</a></li>";
			echo "<li><a class=\"";?><?php if($pagina=='spray') {echo "active";}?><?php echo "\" href=\"spray.php\">SPRAY</a></li>";
			echo "<li class=\"dropdown\">
					<a class=\"";?><?php if($pagina=='tag') {echo "active";}?><?php echo "\" href=\"tag.php\"><span class=\"sageata\">&#129083;</span>TAG</a>
					<div class=\"continutDropdown\">
						<a href=\"markere.php\">MARKERE</a>
						<a href=\"squeezere.php\">SQUEEZERE</a>
					</div>
				</li>";
			echo "<li class=\"dropdown\">
					<a class=\"";?><?php if($pagina=='accesorii') {echo "active";}?><?php echo "\" href=\"accesorii.php\"><span class=\"sageata\">&#129083;</span>ACCESORII</a>
					<div class=\"continutDropdown\">
						<a href=\"capace.php\">CAPACE</a>
						<a href=\"varfuri.php\">VARFURI</a>
					</div>
				</li>";
			echo "<li><a class=\"";?><?php if($pagina=='cos') {echo "active";}?><?php echo "\" href=\"cos.php\">COS</a></li>";
			echo "<li><a href=\"logout.php\">LOGOUT</a></li>";
		}
	}?>
</ul>