<?php
include('db.php');
include('services/broband_servies.php');

$all_plans = get_all_plans($db);
$page = "plans";
?>

<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>MyWebsite</title>
	<link rel="stylesheet" href="any.css">
	<link rel="stylesheet" type="text/css" href="css/normalize.css">
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" type="text/css" href="css/layout.css">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<style>
		@import url('https://fonts.googleapis.com/css?family=Averia+Serif+Libre|Bubblegum+Sans|Caveat+Brush|Chewy|Lobster+Two');


		body {
			width: 100%;
			height: 100%;
			background: linear-gradient(#141e30, #243b55);
			position: relative;
		}

		html {
			width: 100%;
			height: 100%;
		}

		.navbar {
			background: linear-gradient(135deg, #141e30, #03e9f4, #141e30);
			border: 0;
			z-index: 9999;
			letter-spacing: 4px;
			overflow: hidden;
			position: fixed;
			height: 80px;

		}

		.logo {
			display: block;
			height: auto;
			width: 52px;
			padding-top: 5px;
			margin-right: 15px;
		}

		.navbar-brand>img {
			height: 100%;
			padding: 15px;
			/* firefox bug fix */
			width: auto;
		}

		.navbar .nav>li>a {
			line-height: 50px;
			margin-top: 0px;
		}

		.navbar-header h1 {
			letter-spacing: 1px;
			color: black !important;
			font-family: 'Lobster Two', cursive;
		}

		.navbar li a,
		.navbar {
			color: black !important;
			font-size: 12px;
			transition: all 0.6s 0s;
		}

		.navbar-toggle {
			background-color: transparent !important;
			border: 0;
		}

		.navbar-nav li a:hover,
		.navbar-nav li a.active {
			color: white !important;
		}

		.profile-card-ctr {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 40px;
			flex-direction: column;
			min-height: 30rem;
			min-width: 10rem;
			background: white;
			border-radius: 3%;
		}

		.cards-table {
			width: 80%;
			margin-top: 10rem;
			display: flex;
			flex-direction: row;
			gap: 1rem;
			flex-wrap: wrap;
			margin-left: auto;
			margin-right: auto;
			justify-content: center;
		}

		.plan-name {
			margin-top: 1.5rem;
			padding: 2.5rem;
		}

		@media screen and (max-width: 576px) {
			.profile-card-ctr {
				flex-wrap: wrap;
			}
		}

		.profile-card__button {
			background: none;
			border: none;
			font-family: "Quicksand", sans-serif;
			font-weight: 700;
			font-size: 19px;
			margin: 15px 35px;
			padding: 15px 40px;
			min-width: 201px;
			border-radius: 50px;
			min-height: 55px;
			color: #fff;
			cursor: pointer;
			backface-visibility: hidden;
			transition: all 0.3s;

			margin-top: auto;
		}

		.profile-card-ctr {
			display: flex;
			justify-content: center;
			align-items: center;
			margin-top: 40px;
		}

		@media screen and (max-width: 576px) {
			.profile-card-ctr {
				flex-wrap: wrap;
			}
		}

		.profile-card__button:focus {
			outline: none !important;
		}

		@media screen and (min-width: 768px) {
			.profile-card__button:hover {
				transform: translateY(-8px);
			}
		}

		.profile-card__button.button--orange {
			background: linear-gradient(45deg, #141e30, #243b55);
			box-shadow: 0px 4px 30px #141e30;
		}

		.profile-card__button.button--orange:hover {
			box-shadow: 0px 7px 30px #03e9f4;
		}

		.td {
			padding-left: 110px;
		}

		.ts {
			padding-left: 210px;
		}
	</style>
</head>

<body>
	<?php include_once 'components/navbar.php' ?>
	<form action="services/purchase_plan.php" method="POST">
		<div class="cards-table">
			<div class="plan-card">
				<div class="profile-card-ctr">
					<div class="card-info">
						<h3 class="plan-name">
							Monthly
						</h3>
					</div>
					<button type="submit" class="profile-card__button button--orange" name="1">Activate</button>
				</div>
			</div>
			<div class="plan-card">
				<div class="profile-card-ctr">
					<div class="card-info">
						<h3 class="plan-name">
							Quarterly
						</h3>
					</div>
					<button type="submit" class="profile-card__button button--orange" name="2">Activate</button>
				</div>
			</div>
			<div class="plan-card">
				<div class="profile-card-ctr">
					<div class="card-info">
						<h3 class="plan-name">
							Yearly
						</h3>
					</div>
					<button type="submit" class="profile-card__button button--orange" name="3">Activate</button>
				</div>
			</div>
		</div>
	</form>

	<script src="home.js"></script>

</body>

</html>