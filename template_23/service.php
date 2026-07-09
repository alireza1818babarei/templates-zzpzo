<?php
$defaultBanner = "images/bg.jpg";
$bannerFile = "serviceimage.txt";

if (file_exists($bannerFile)) {
	$bannerUrl = trim(file_get_contents($bannerFile));
	if ($bannerUrl === "") {
		$bannerUrl = $defaultBanner;
	}
} else {
	$bannerUrl = $defaultBanner;
}
?>
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
		?> - Diensten</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?php echo filemtime('assets/css/noscript.css'); ?>" /></noscript>
	</head>
	<body class="template-page has-hero">

		<div id="wrapper">
			<header id="header">
				<a href="index.php" class="logo navbar-brand" id="brandLogo">
					<img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
				</a>
				<div class="content">
					<div class="inner">
						<h1>Diensten</h1>
					</div>
				</div>
				<nav class="use-middle">
					<ul>
						<li><a href="index.php">Startpagina</a></li>
						<li><a href="about.php">Over ons</a></li>
						<li class="is-middle"><a href="service.php">Diensten</a></li>
						<li><a href="contact.php">Contact</a></li>
					</ul>
				</nav>
			</header>

			<section class="page-section">
				<div class="section-inner">
					<?php
					$filePath = 'service.txt';
					if (file_exists($filePath)) {
						echo nl2br(htmlspecialchars(file_get_contents($filePath)));
					} else {
						echo '-';
					}
					?>
				</div>
			</section>

			<footer id="footer">
				<p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
				<ul class="footer-links">
					<li><a href="terms.php">Algemene voorwaarden</a></li>
					<li><a href="complain.php">Klachtenportaal</a></li>
					<li><a href="privacy.php">Privacybeleid</a></li>
				</ul>
			</footer>
		</div>

		<div id="bg" style="background-image: url('<?= htmlspecialchars($bannerUrl) ?>');"></div>

	</body>
</html>
