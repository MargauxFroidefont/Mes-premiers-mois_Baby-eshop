<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Mon site</title>
	<link href="https://fonts.googleapis.com/css?family=Satisfy" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lato:100,300,400,700" rel="stylesheet">
	<link rel="stylesheet" href="assets/style/main.css">
</head>
<body>

<header>

	<div class="header">

		<nav class="header-social-networks">
			<ul>
				<li><a href="#"><img src="src/icons/facebook.svg" alt="réseau social facebook"></a></li>
				<li><a href="#"><img src="src/icons/twitter.svg" alt="réseau social twitter"></a></li>
				<li><a href="#"><img src="src/icons/instagram.svg" alt="réseau social instagram"></a></li>
			</ul>
		</nav>

		<nav class="header-customer-bar lato-header">
			<ul>
				<?php if(isset($_SESSION['clients'])) :?>
					<li><a href="compte" ><img src="src/icons/user.svg" alt="espace client">Mon compte</a></li>
				<?php else:?>
					<li><a href="inscription" ><img src="src/icons/user.svg" alt="espace client">Se connecter</a></li>
				<?php endif; ?>
				<li><a href="#" ><img src="src/icons/shopping-bag.svg" alt="panier client">Mon panier</a></li>
			</ul>
		</nav>

	</div>

</header>
