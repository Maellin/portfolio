		<?php
			$page = 'works';
			include 'header.php';
			include 'nav_bar.php'; 
		?>
	
		<div class="container-page">
			<div class="container-intro d-flex j-center">
				<div>
					<h2 class="bold title--1">Mes créations</h2>
				</div>	
			</div>


			<div class="container-cards d-flex j-space-around">
				<div class="card d-flex" onclick="show('./img/maquette-newsletter.jpg')">
					<div class="card-image d-flex">
						<img src="./img/maquette-newsletter-350x260.jpg" alt="newsletter Nature et Découverte"/>
						<p>Nature & Découverte</p>					
					</div>
					<div class="card-content">
						<h3>Newsletter</h3>
						<p>Maquette de newsletter fictive pour la campagne de Noël de Nature & Découverte, réalisée sur Adobe Photoshop.</p>
					</div>
				</div>

				<div class="card d-flex" onclick="show('./img/landing-page.jpg')">
					<div class="card-image d-flex">
						<img src="./img/landing-page-350x264.jpg" alt="landing page de la marque Uniqlo"/>
						<p>Uniqlo</p>					
					</div>
					<div class="card-content">
						<h3>Landing page</h3>
						<p>Maquette d'une landing page fictive pour la campagne Uniqlo Printemps/Été 2019, réalisée sur Adobe Photoshop.</p>
					</div>
				</div>

				<div class="card d-flex" onclick="show('./img/maquette-refonte-hp.jpg')">
					<div class="card-image d-flex">
						<img src="./img/maquette-refonte-hp-small.jpg" alt="landing page de la marque Uniqlo"/>
						<p>jeposemonvolet</p>					
					</div>
					<div class="card-content">
						<h3>UI / UX</h3>
						<p>Projet fictif de refonte de la homepage du site jeposemonvolet.fr. Maquette réalisée sur Adobe Photoshop.</p>
					</div>
				</div>


				<div class="card d-flex" onclick="show('./img/daily-ui-1.jpg')">
					<div class="card-image d-flex">
						<img src="./img/daily-ui-1-442x249.jpg" alt="Interface utilisateur d'une page d'inscription"/>
						<p>Daily UI</p>					
					</div>
					<div class="card-content">
						<h3>UI / UX</h3>
						<p>Maquette d'interface utilisateur d'une page d'inscription, réalisée sur Adobe Photoshop.</p>
					</div>
				</div>

				<div class="card d-flex" onclick="show('./img/fantastic-parade.jpg')">
					<div class="card-image d-flex">
						<img src="./img/fantastic-parade-373x249.jpg" alt="Parade d'ouverture de Lille3000 Fantastic"/>
						<p>Lille3000 Fantastic</p>					
					</div>
					<div class="card-content">
						<h3>Retouche photo</h3>
						<p>Photo prise lors de la parade d'ouverture de l'événement Lille3000, puis retouchée sur Adobe Photoshop pour mettre en valeur les personnages géants au milieu de la foule.</p>
					</div>
				</div>

				<div class="card d-flex" onclick="show('./img/victor_duenas_teixeira.jpg')">
					<div class="card-image d-flex">
						<img src="./img/victor_duenas_teixeira-small.jpg" alt="photo retouchée sur fond dégradé jaune/vert d'une femme souriante portant des cheveux colorés verte et des lunettes de soleil"/>
						<p>Breaking the code</p>					
					</div>
					<div class="card-content">
						<h3>Retouche photo</h3>
						<p>À partir de la photo originale de Victor Duenas Teixeira, j'ai voulu isoler le personnage qui semble sortir du cadre dans lequel il était enfermé (Adobe Photoshop).</p>
					</div>
				</div>

				<div class="card d-flex" onclick="show('./img/carte-de-visite-om.jpg')">
					<div class="card-image d-flex">
						<img src="./img/carte-de-visite-om-small.jpg" alt="carte de visite d'Ornella Mozzi web designer"/>
						<p>Polygonal Design</p>					
					</div>
					<div class="card-content">
						<h3>Logo & Carte de visite</h3>
						<p>Carte de visite réalisée sur Adobe Photoshop. Le logo, quant à lui, a été designé sur Adobe Illustrator.</p>
					</div>
				</div>
				
				<div class="card d-flex" onclick="show('./img/banniere-linkedin.jpg')">
					<div class="card-image d-flex">
						<img src="./img/banniere-linkedin-350x249.jpg" alt="illustration en flat design"/>
						<p>Workplace</p>					
					</div>
					<div class="card-content">
						<h3>Flat design</h3>
						<p>Illustration en flat design représentant mon espace de travail, réalisée sur Adobe Illustrator.</p>
					</div>
				</div>
			</div>

			<div id="backdrop" class="d-flex j-center a-center" style='display:none' onclick='hide()'>	
				<img id="img-modal" src="" alt=""/>
			</div>

			<div class="container-content d-flex a-center">
				<div class="text d-flex j-center">
					<p class="content">Mes créations et <strong>design</strong> vous plaisent ? <br/>
					Contactez-moi !</p>
				</div>
				<div class="button-container">
					<a class="button button-link bold" href="contact.php">Me contacter</a>
				</div>
			</div>
		</div>



		<?php
			include'footer.php'
		?>