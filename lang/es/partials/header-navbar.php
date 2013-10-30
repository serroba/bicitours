<header class='navbar main-navbar'>
	<nav class='navbar-default'>
		<div class="navbar-header">
			<button class="navbar-toggle" type="button" data-toggle="collapse" data-target=".bs-navbar-collapse">
				<span class="sr-only">Toggle navigation</span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
				<span class="icon-bar"></span>
			</button>
			<a href="./index.php" class="navbar-brand">Bicitours</a>
		</div>
		<div class="collapse navbar-collapse bs-navbar-collapse orange">
			<ul class="nav nav-pills nav-justified">
				<li <?php if(preg_match('/tours.php/', $_SERVER['SCRIPT_NAME'])) echo "class='active'"?>>
					<a href="tours.php">Tours</a>
				</li>
				<li <?php if(preg_match('/rent.php/', $_SERVER['SCRIPT_NAME'])) echo "class='active'"?>>
					<a href="rent.php">Arriendo</a>
				</li>
				<li <?php if(preg_match('/sell.php/', $_SERVER['SCRIPT_NAME'])) echo "class='active'"?>>
					<a href="sell.php">Venta de bicicletas</a>
				</li>
				<li <?php if(preg_match('/reservation.php/', $_SERVER['SCRIPT_NAME'])) echo "class='active'"?>>
					<a href="reservation.php">Reservas</a>
				</li>
				<li <?php if(preg_match('/contact.php/', $_SERVER['SCRIPT_NAME'])) echo "class='active'"?>>
					<a href="contact.php">Contacto</a>
				</li>

			</ul>
		</div>
	</nav>
</header>