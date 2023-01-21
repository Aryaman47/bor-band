<?php
include('db.php');

session_start();
$isLoggedin = false;
// Check if the user is already logged in, if yes then redirect him to welcome page
if (isset($_SESSION["loggedin"]) && $_SESSION["loggedin"] === true) {
	$isLoggedin = true;
} ?>

<nav class="navbar navbar-default navbar-fixed-top">
	<div class="container">
		<div class="navbar-header">
			<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
				<span class="glyphicon glyphicon-menu-hamburger"></span>
			</button>


			<div class="navbar-left logo">
				<svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 291 385.3" style="enable-background:new 0 0 291 385.3;" xml:space="preserve">
					<style type="text/css">
						.st0 {
							fill: #000;
						}
					</style>
					<polygon class="st0" points="82.1,12 7.4,138.7 38.7,237.3 " />
					<polygon class="st0" points="92.7,5.3 199.4,8.7 223.4,82.7 " />
					<polygon class="st0" points="89.4,8.7 223.4,86.7 42.1,237.3 " />
					<polygon class="st0" points="206.1,15.3 262.7,66 228.1,82.7 " />
					<polygon class="st0" points="262.7,70 228.1,86 266.4,175.3 " />
					<polygon class="st0" points="228.1,92.7 262.7,179.3 173.4,328 " />
					<polygon class="st0" points="223.4,92.7 44.7,240 167.7,336 " />
					<polygon class="st0" points="252.1,210.3 184.4,380.3 170.7,339.7 " />
					<polygon class="st0" points="60.1,260.3 167.4,341 180.4,380.3 " />
				</svg>
			</div>
			<h1 class="brand brand-name navbar-left">
				<div class="navbar-left">Bro Band
			</h1>
		</div>
		<div class="collapse navbar-collapse navbar-right" id="myNavbar">
			<ul class="nav navbar-nav">
				<li><a href="index.php" <?php if ($page === 'home') echo 'class="active"'; ?>>Home</a></li>
				<li><a href="service.php" <?php if ($page === 'service') echo 'class="active"'; ?>>Service</a></li>
				<li><a href="plans.php" <?php if ($page === 'plans') echo 'class="active"'; ?>>Plans</a></li>
				<?php
				$class = "notactive";
				if ($page === "profile") $class = "active";
				if ($isLoggedin) {
					echo '<li><a href="profile.php"',  ' class="', $class, '">Profile</a></li>';
				} else {
					echo '<li><a href="login.php"',  ' class="', $class, '">Login</a></li>';
				}
				?>
			</ul>
		</div>
	</div>
</nav>