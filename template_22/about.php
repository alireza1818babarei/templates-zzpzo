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
		?> - Over ons</title>
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

		<?php
		$defaultBanner = "images/one.jpg";
		$bannerFile = "aboutimage.txt";

		if (file_exists($bannerFile)) {
			$bannerUrl = trim(file_get_contents($bannerFile));
			if ($bannerUrl === "") {
				$bannerUrl = $defaultBanner;
			}
		} else {
			$bannerUrl = $defaultBanner;
		}
		?>
		<!-- Over ons -->
			<section id="one" class="main style2 right dark fullscreen" style="background-image: url('assets/css/images/overlay.png'), url('<?= htmlspecialchars($bannerUrl) ?>');">
				<div class="content box style2">
					<header>
						<h2>Over ons</h2>
					</header>
				</div>
			</section>

		<!-- Over ons Content -->
			<section id="about-content" class="main style3 primary">
				<div class="content">
					<p><?php
					$filePath = 'about.txt';
					if (file_exists($filePath)) {
						echo nl2br(htmlspecialchars(file_get_contents($filePath)));
					} else {
						echo '-';
					}
					?></p>
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
