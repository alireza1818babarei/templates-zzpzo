<!DOCTYPE HTML>
<html>
	<head>
		<title><?php
		$filePath = 'title.txt';
		if (file_exists($filePath)) {
			echo nl2br(htmlspecialchars(file_get_contents($filePath)));
		} else {
			echo 'Titel';
		}
		?> - Klachtenportaal</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?php echo filemtime('assets/css/noscript.css'); ?>" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Header -->
			<header id="header">
				<h1>
					<a href="index.php" class="navbar-brand" id="brandLogo">
						<img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
					</a>
				</h1>
				<button class="menu-toggle" type="button" aria-label="Menu" aria-expanded="false"><span></span></button>
				<nav>
					<ul>
						<li><a href="index.php">Startpagina</a></li>
						<li><a href="about.php">Over ons</a></li>
						<li><a href="service.php">Diensten</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</header>

		<!-- Klachtenportaal -->
			<section id="contact" class="main style3 secondary" style="min-height: calc(100vh - 6em);">
				<div class="content">
					<header>
						<h2>Klachtenportaal</h2>
						<p><?php
						$filePath = 'complain.txt';
						if (file_exists($filePath)) {
							echo nl2br(htmlspecialchars(file_get_contents($filePath)));
						} else {
							echo '-';
						}
						?></p>
					</header>
					<div class="box">
						<form method="post" action="#">
							<div class="fields">
								<div class="field third"><input type="text" name="name" placeholder="Naam" /></div>
								<div class="field third"><input type="text" name="phone" placeholder="Telefoon" /></div>
								<div class="field third"><input type="email" name="email" placeholder="E-mail" /></div>
								<div class="field"><textarea name="message" placeholder="Bericht" rows="6"></textarea></div>
							</div>
							<p>
								Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.
							</p>
							<ul class="actions special">
								<li><input type="submit" value="Verzenden" /></li>
							</ul>
						</form>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<footer id="footer">
				<p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
				<ul class="menu">
					<li><a href="terms.php">Algemene voorwaarden</a></li>
					<li><a href="complain.php">Klachtenportaal</a></li>
					<li><a href="privacy.php">Privacybeleid</a></li>
				</ul>
			</footer>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
			<script src="assets/js/jquery.poptrox.min.js?id=<?php echo filemtime('assets/js/jquery.poptrox.min.js'); ?>"></script>
			<script src="assets/js/jquery.scrolly.min.js?id=<?php echo filemtime('assets/js/jquery.scrolly.min.js'); ?>"></script>
			<script src="assets/js/jquery.scrollex.min.js?id=<?php echo filemtime('assets/js/jquery.scrollex.min.js'); ?>"></script>
			<script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
			<script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
			<script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
			<script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>

	</body>
</html>
