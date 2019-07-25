<!DOCTYPE html>
<html lang="fr">
	<head>
		<title>Portfolio</title>
		<meta charset="utf-8">
		<meta name="description" content="Bienvenue sur le portfolio d'Ornella Mozzi ! Découvrez mes créations.">
 		<meta name="author" content="Ornella Mozzi">
  		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<link rel="stylesheet" type="text/css" href="style.css">

	</head>

	<body id="body">
		<?php 
			include'header.php'
		?>

		<div class="container-title d-flex j-center">
			<div>
				<p class="bold title--1">Mes créations</p>
			</div>	
		</div>

		<div class="container-cards d-flex j-space-around">
			<card class="card d-flex" onclick="show('./img/fantastic-parade.jpg')">
				<div class="card-image d-flex">
					<img src="./img/fantastic-parade-373x249.jpg" alt="Parade d'ouverture de Lille3000 Fantastic"/>
					<p>Lille3000 Fantastic</p>					
				</div>
				<div class="card-content">
					<h3>Retouche photo</h3>
					<p>Photo prise lors de la parade d'ouverture de l'événement Lille3000, puis retouchée sur Adobe Photoshop pour mettre en valeur les personnages géants au milieu de la foule.</p>
				</div>
			</card>
			
			<card class="card d-flex">
				<div class="card-image d-flex" onclick="show('./img/flat-design-birthday-cake.png')">
					<img src="./img/flat-design-birthday-cake373x249.png" alt="gâteau d'anniversaire réalisé en flat design"/>
					<p>Birthday Cake</p>					
				</div>
				<div class="card-content">
					<h3>Flat design</h3>
					<p>Créations diverses et variées en flat design, réalisées sur Adobe Illustrator.</p>
				</div>
			</card>
		
			<card class="card d-flex">
				<div class="card-image d-flex" onclick="show('./img/daily-ui-1.jpg')">
					<img src="./img/daily-ui-1-442x249.jpg" alt="Interface utilisateur d'une page d'inscription"/>
					<p>Daily UI</p>					
				</div>
				<div class="card-content">
					<h3>UI / UX</h3>
					<p>Maquette d'interface utilisateur d'une page d'inscription.</p>
				</div>
			</card>

			<card class="card d-flex">
				<div class="card-image d-flex" onclick="show('./img/maquette-newsletter.jpg')">
					<img src="./img/maquette-newsletter-350x260.jpg" alt="newsletter Nature et Découverte"/>
					<p>Nature & Découverte</p>					
				</div>
				<div class="card-content">
					<h3>Newsletter</h3>
					<p>Maquette de newsletter fictive pour la campagne de Noël de Nature & Découverte, réalisée sur Adobe Photoshop.</p>
				</div>
			</card>

			<card class="card d-flex">
				<div class="card-image d-flex" onclick="show('./img/banniere-linkedin.jpg')">
					<img src="./img/banniere-linkedin-350x249.jpg" alt="illustration en flat design"/>
					<p>Flat Design</p>					
				</div>
				<div class="card-content">
					<h3>UI / UX</h3>
					<p>Maquettes d'interfaces utilisateur réalisées sur Adobe Photoshop.</p>
				</div>
			</card>

			<card class="card d-flex">
				<div class="card-image d-flex" onclick="show('./img/landing-page.jpg')">
					<img src="./img/landing-page-350x264.jpg" alt="landing page de la marque Uniqlo"/>
					<p>Uniqlo</p>					
				</div>
				<div class="card-content">
					<h3>Landing page</h3>
					<p>Maquette Photoshop d'une landing page fictive pour la campagne Printemps/Été 2019.</p>
				</div>
			</card>
		</div>

		<div id="backdrop" class="d-flex j-center a-center" style='display:none' onclick='hide()'>	
			<img id="img-modal" src="" alt=""/>
		</div>

		<?php
			include'footer.php'
		?>

		<script src="script.js"></script>
	</body>

</html>