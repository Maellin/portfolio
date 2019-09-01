		<?php
			$page = 'index';
			include'header.php';	
			include'nav_bar.php';
		?>

		<div class="container-page d-flex">
			<div class="intro d-flex">
				<figure class="picture d-flex a-center">
					<img src="./img/ornella-mozzi.png" alt="Une photo de moi, souriant"/>
				</figure>
			
				<div class="container-intro d-flex j-center">
					<p class="bold title--1">Hello !</p>
					<p class="content">Et bienvenue sur mon portfolio ! <br/>
						Je suis Ornella, une <strong class="bold">web designer</strong> basée à Lille, en France. Ici, vous pourrez <a href="works.php"> découvrir mes créations</a> et <a href="contact.php">me contacter</a> si vous avez la moindre question. <br/>
					Bonne visite !</p>	
					
					<div class="button-container">
						<a class="button button-link bold" href="works.php">Découvrir mes travaux</a>
					</div>
				</div>
			</div>

			<div class="container-apropos">
				<h2>À propos</h2>

				<h4 class="bold sous-titre">Qui suis-je ?</h4>
				<p>Une amoureuse de la nature avec une passion grandissante pour les plantes notamment. Une touche-à-tout, aussi bien dans mes activités personnelles que dans la sphère professionnelle. Une positive, quoiqu'il arrive. Une créative, en perpétuelle découverte de soi et de ses capacités. Une personne déterminée à évoluer chaque jour. Une <strong>web designer</strong> en devenir.</p>
				
				<h4 class="bold sous-titre">Quel est mon parcours ?</h4>
				<p>Mes études en Langues Étrangères Appliquées et en Tourisme m'ont conduite en 2015 en Angleterre, à Londres, où j'ai eu l'opportunité de gérer la <strong class="bold">communication digitale</strong> du Nuts Pub Crawl. <br/><br/>
				
				De retour en France, quelques mois plus tard, j'ai intégré la chaleureuse équipe lilloise de Teaminside en tant qu'<span class="bold">éditrice web</span> pour MSN Actualités. Une première réelle expérience durable, enrichissante, qui m'a permis d'apprendre à connaître une audience web et à adapter mes publications en conséquence, tout en optimisant les besoins clients. <br/><br/>
				
				Deux ans plus tard, ma soif de créativité m'a menée en Auvergne, à Vichy, où j'ai entrepris la mission de <span class="bold">développer la communication digitale de l'Association Enfance Jeunesse</span> de Saint-Rémy-en-Rollat : créations print & web, refonte du logo, animation de la page Facebook, ou encore communication événementielle autour de la Fête du Jeu 2018 organisée par l'AEJ (affiches, flyers, banderoles, communiqué de presse...).<br/><br/>

				Plus qu'une expérience unique, un véritable déclic. Celui qui a confirmé mon choix d'orientation professionnelle, dans lequel je m'épanouis aujourd'hui pleinement : <span class="bold">le web design</span>.
				</p>

				<h4 class="bold sous-titre">Quelles sont mes compétences ?</h4>
				<p>
					• Design graphique<br/>
					• UX<br/>
					• Développement (HTML5, CSS3, bases de JavaScript, jQuery et PHP)<br/>
					• CMS (WordPress, Microsoft Ice, Squarespace, Jimdo)<br/>
					• Rédaction web<br/>
					• Réseaux sociaux<br/><br/>
				</p>
				
				
				<div class="d-flex j-center button-container">
						<a class="button button-link bold" href="./img/cv-ornella-mozzi.pdf" target="_blank">Télécharger mon CV</a>
				</div>
			</div>
		</div>	

			<?php
				include'footer.php'
			?>