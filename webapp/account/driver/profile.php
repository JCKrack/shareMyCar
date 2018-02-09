<html>
	<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php require_once($_SERVER['DOCUMENT_ROOT'].'/lib/title.php'); ?> Profile</title>
		<link rel="stylesheet" type="text/css" href="css/style.css">
		<link rel="stylesheet" href="/css/footer.css">
	</head>
	<body>
		<header>
      <?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/header_users.php"); ?>
		</header>
		<main>
			<h1>Profile</h1>
			<div class="box">
				<div class="personalinfo">
					<h3>Personal Information</h3>
					<div class="img">
						<img src="/images/eric.jpg">
						<input type="button" name="change" value="Change">
					</div>
					<div class="uni">Name:</div><div class="r">Eric</div>
					<div class="uni">Last Name:</div><div class="r">Juarez</div><br>
					<div class="uni">E-mail:</div><div class="r">ericloco@yahoo.mx</div><br>
					<dv class="uni">Cell phone:</dv><div class="r">6646969666</div>
				</div>
				<div class="universinfo">
					<h3>Collage Information</h3>
					<div class="uni">University:</div><div class="r">Universidad Tecnologica de Tijuana</div><br>
					<div class="uni">State:</div><div class="r">Baja California</div>
					<div class="uni">City:</div><div class="r">Tijuana</div><br>
					<dv class="uni">Control #:</dv><div class="r">0316111961</div>
					<div class="uni">Turn:</div><div class="r">Morning</div>
				</div>
				<div class="carinfo">
					<h3>Car Information</h3>
					<div class="uni">Color:</div><div class="r">Black</div>
					<div class="uni">Brand:</div><div class="r">Aston Martin</div>
					<div class="uni">Model:</div><div class="r">DB11 2017</div>
					<dv class="uni">Plates:</dv><div class="r">123456</div>
					<div class="uni">Licence Number:</div><div class="r">123456</div>
				</div>
			</div>
		</main>
		<footer>
      <?php require_once($_SERVER['DOCUMENT_ROOT']."/lib/footer_users.php"); ?>
   		</footer>
	</body>
</html>
