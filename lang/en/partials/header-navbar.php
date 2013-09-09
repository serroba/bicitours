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
				<li>
					<a href="#">Rent</a>
				</li>
				<li>
					<a href="#">Bike sells</a>
				</li>
				<li>
					<a href="#">Reservation</a>
				</li>
				<li>
					<a href="#">Contact us</a>
				</li>

			</ul>
		</div>
	</nav>
</header>