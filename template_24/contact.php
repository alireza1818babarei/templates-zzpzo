<!DOCTYPE HTML>
<html>

<head>
	<title>
		<?php
		$filePath = 'title.txt';
		if (file_exists($filePath)) {
			echo nl2br(htmlspecialchars(file_get_contents($filePath)));
		} else {
			echo 'Titel';
		}
		?> - Contact
	</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
</head>

<body class="is-preload hero-page contact-page">
	<?php
	$defaultBanner = "images/pic03.jpg";
	$bannerFile = "contactimage.txt";

	if (file_exists($bannerFile)) {
		$bannerUrl = trim(file_get_contents($bannerFile));
		if ($bannerUrl === "") {
			$bannerUrl = $defaultBanner;
		}
	} else {
		$bannerUrl = $defaultBanner;
	}
	?>

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

	<!-- Header -->
	<section id="header" class="dark dynamic-hero"
		style="background-image: url('assets/css/images/overlay.png'), url('<?= htmlspecialchars($bannerUrl) ?>');">
		<header>
			<h1>Contact</h1>
		</header>
	</section>
	<!-- Page Content -->
	<section id="page-content" class="main">
		<header>
			<div class="container">
			</div>
		</header>
		<div class="content style4 featured">
			<div class="container medium">
				<section class="dynamic-content">
					<?php
					$filePath = 'contact.txt';
					if (file_exists($filePath)) {
						echo nl2br(htmlspecialchars(file_get_contents($filePath)));
					} else {
						echo '-';
					}
					?>
				</section>

				<section class="standard-form">
					<form method="post" action="#">
						<div class="row gtr-50">
							<div class="col-6 col-12-mobile"><input type="text" name="name" id="name" placeholder="Naam" /></div>
							<div class="col-6 col-12-mobile"><input type="text" name="phone" id="phone" placeholder="Telefoon" /></div>
							<div class="col-12"><input type="email" name="email" id="email" placeholder="E-mail" /></div>
							<div class="col-12"><textarea name="message" id="message" placeholder="Bericht"></textarea></div>
							<div class="col-12">
								<ul class="actions special">
									<li><input type="submit" class="button" value="Verzenden" /></li>
								</ul>
							</div>
							<div class="col-12">
								<p class="recaptcha-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>
							</div>
						</div>
					</form>
				</section>
			</div>
		</div>
	</section>

	<!-- Footer -->
	<section id="footer">
		<div class="copyright">
			<ul class="menu">
				<li><a href="terms.php">Algemene voorwaarden</a></li>
				<li><a href="complain.php">Klachtenportaal</a></li>
				<li><a href="privacy.php">Privacybeleid</a></li>
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