		<?php
			$page = 'contact';
			include'header.php';
			include'nav_bar.php';
		?>

		<div class="container-intro">
			<h3 class="bold title--1">Contact</h3>
			<p class="content">Une question ? Une suggestion ? Une proposition ? <br/>
			Tout se joue ci-dessous ! :)</p>
		</div>

		<div class="container-form d-flex j-space-around a-center">
			<form id="contact-form" method="post" action="mail.php">
				<div class="form-content">
					<label for="name">Nom</label>
					<input class="form-style" type="text" id="name" name="nom">
				</div>
				<div class="form-content">
					<label for="mail">E-mail</label>
					<input class="form-style" type="email" id="mail" name="mail">
				</div>
				<div class="form-content">
					<label for="msg">Message</label>
					<textarea class="form-style" id="msg" name="message" rows="5" cols="33"></textarea>
				</div>
				<div class="button-container">
					<button class="button bold" type="submit" value="true" name="envoyer-mail">Envoyer</button>
				</div>
			</form>

				<div class="container-video">
					<video id="video" autoplay loop>
  						<source src="./video/coffee-video.mp4" type="video/mp4">
  					</video>
  				</div>
			</div>
		</div>
		

		<?php
			include'footer.php'
		?>
