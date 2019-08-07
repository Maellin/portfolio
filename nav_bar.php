<header>
	<div class="container-header d-flex j-space-between a-center">
		<div class="container-logo">
			<a href="index.php"><img id="logo" src="./img/logo-om.png" alt="logo Ornella Mozzi"/></a>
		</div>
		<div class="container-nav">
			<nav class="menu">
				<ul class="d-flex">
					<li><a href="index.php" <?php if ($page == 'index') echo "class='active'" ?>>Bio</a></li>
					<li><a href="works.php" <?php if ($page == 'works') echo "class='active'" ?>>Créations</a></li>
					<li><a href="contact.php" <?php if ($page == 'contact') echo "class='active'" ?>>Contact</a></li>
				</ul>
			</nav>
		</div>
	</div>
</header>