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
?> - Privacybeleid</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
	</head>
	<body class="is-preload no-hero-page">

		<!-- Navigation -->
		<nav id="site-nav">
			<div class="container nav-container">
				<a href="index.php" class="navbar-brand" id="brandLogo">
					<img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
				</a>
				<ul class="main-menu">
					<li><a href="index.php">Startpagina</a></li>
					<li><a href="about.php">Over ons</a></li>
					<li><a href="service.php">Diensten</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</div>
		</nav>

		<!-- Page Content -->
			<section id="page-content" class="main">
				<header>
					<div class="container">
						<h2>Privacybeleid</h2>
					</div>
				</header>
				<div class="content dark style3 featured">
					<div class="container medium">
						<section class="dynamic-content">
							<?php
$filePath = 'privacy.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo '-';
}
?>
						</section>
					</div>
				</div>
			</section>

		<!-- Footer -->
			<section id="footer">
				<div class="copyright">
					<ul class="menu">
						<li><a href="terms.php">Algemene voorwaarden</a></li><li><a href="complain.php">Klachtenportaal</a></li><li><a href="privacy.php">Privacybeleid</a></li>
					</ul>
					<p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
				</div>
			</section>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
			<script src="assets/js/jquery.scrolly.min.js?id=<?php echo filemtime('assets/js/jquery.scrolly.min.js'); ?>"></script>
			<script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
			<script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
			<script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
			<script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>

	</body>
</html>
