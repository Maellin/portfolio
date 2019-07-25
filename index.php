<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8">
		<meta name="description" content="Bienvenue sur le portfolio d'Ornella Mozzi !">
 		<meta name="author" content="Ornella Mozzi">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>

	<body>
		<?php 
			include'header.php'
		?>

		<div class="container-home d-flex j-center">
			<div>
				<p class="bold title--1">Bienvenue !</p>
				<p>Je m'appelle Ornella et je suis en route pour devenir <strong>web designer</strong>. Ici, vous pourrez découvrir mes créations et <a href="contact.php">me contacter</a> si vous avez la moindre question. <br/>
				Bonne visite !</p>
			</div>	

			<a class="button-link" href="works.php"><button class="button bold" href="works.php">Découvrir mes travaux</button></a>
		</div>

		<?php
			include'footer.php'
		?>
	</body>

</html>