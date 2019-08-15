		<?php
			$page = 'index';
			include'header.php';	
			include'nav_bar.php';
		?>

		<div class="container-page">
			<div class="container-intro d-flex j-center">
				<p class="bold title--1">Hello !</p>
				<p class="content">Je suis Ornella, une <strong class="bold">web designer</strong> basée à Lille, en France. Ici, vous pourrez <a href="works.php"> découvrir mes créations</a> et <a href="contact.php">me contacter</a> si vous avez la moindre question. <br/>
				Bonne visite !</p>

				<figure class="picture">
					<img src="./img/ornella-mozzi.png" alt="Une photo de moi, souriant"/>
				</figure>	
				
				<div class="button-container">
					<a class="button button-link bold" href="works.php">Découvrir mes travaux</a>
				</div>
			</div>
		</div>	

			<?php
				include'footer.php'
			?>