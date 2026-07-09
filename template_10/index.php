<!DOCTYPE HTML>
<!--
	Forty by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="nl">

<head>
	<meta charset="utf-8" />

	<?php
	$version = time();
	$titleFile = 'title.txt';
	$siteTitle = 'Titel';

	if (file_exists($titleFile)) {
		$titleContent = file_get_contents($titleFile);

		if ($titleContent !== false && trim($titleContent) !== '') {
			$siteTitle = trim($titleContent);
		}
	}

	$imageFile = 'homeimage.txt';
	$pageImage = 'images/pic01.jpg';

	if (file_exists($imageFile)) {
		$savedImage = file_get_contents($imageFile);

		if ($savedImage !== false && trim($savedImage) !== '') {
			$pageImage = trim($savedImage);
		}
	}
	?>

	<title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></title>
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css?id=<?= $version ?>" />
	<noscript>
		<link rel="stylesheet" href="assets/css/noscript.css?id=<?= $version ?>" />
	</noscript>
</head>

<body class="is-preload">

	<!-- Wrapper -->
	<div id="wrapper">
		<!-- Header -->
		<header id="header" class="alt">
			<a href="index.php" class="navbar-brand" id="brandLogo"
				style="margin-top: 20px;width: 150px; height: 100%; border-bottom: 0; display: flex ; align-items: center; justify-content: center; margin-left: 10px;">
				<img src="logo.png?id=<?= $version ?>" alt="Logo" style="width:100%;"
					onerror="this.remove();">
			</a>
			<nav>
				<a href="#menu">Menu</a>
			</nav>
		</header>

		<!-- Menu -->
		<nav id="menu">
			<ul class="links">
				<li><a href="index.php">Startpagina</a></li>
				<li><a href="about.php">Over ons</a></li>
				<li><a href="service.php">Diensten</a></li>
				<li><a href="contact.php">Contact</a></li>
			</ul>
		</nav>
		<!-- Banner -->
		<section id="banner" class="major">
			<div class="inner">
				<span class="image">
					<img src="<?= htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') ?>" alt="Startpagina" />
				</span>
				<header class="major">
					<h1>Startpagina</h1>
				</header>
				<div class="content">
				</div>
			</div>
		</section>
		<!-- Main -->
		<div id="main">
			<section id="one">
				<div class="inner">
					<p class="zz-home-text-wrap">
						<?php
						$contentFile = 'home.txt';

						if (file_exists($contentFile)) {
							$content = file_get_contents($contentFile);

							if ($content !== false && trim($content) !== '') {
								echo nl2br(htmlspecialchars(trim($content), ENT_QUOTES, 'UTF-8'));
							} else {
								echo '-';
							}
						} else {
							echo '-';
						}
						?>
					</p>
				</div>
			</section>
		</div>
		<!-- Footer -->
		<footer id="footer">
			<div class="inner">
				<ul class="copyright">
					<li><a href="terms.php">Algemene voorwaarden</a></li>
					<li><a href="complain.php">Klachtenportaal</a></li>
					<li><a href="privacy.php">Privacybeleid</a></li>
					<li>Auteursrecht &copy; <?= date('Y') ?> ZZpzo</li>
				</ul>
			</div>
		</footer>

	</div>
	<!-- Scripts -->
	<script src="assets/js/jquery.min.js?id=<?= $version ?>"></script>
	<script src="assets/js/jquery.scrolly.min.js?id=<?= $version ?>"></script>
	<script
		src="assets/js/jquery.scrollex.min.js?id=<?= $version ?>"></script>
	<script src="assets/js/browser.min.js?id=<?= $version ?>"></script>
	<script src="assets/js/breakpoints.min.js?id=<?= $version ?>"></script>
	<script src="assets/js/util.js?id=<?= $version ?>"></script>
	<script src="assets/js/main.js?id=<?= $version ?>"></script>

</body>

</html>