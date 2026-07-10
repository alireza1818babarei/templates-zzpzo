<?php
$defaultBanner = "images/bg.jpg";
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
		?> - Contact</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
		<link rel="stylesheet" href="assets/css/zz-nav-hover-fix.css?id=<?php echo filemtime('assets/css/zz-nav-hover-fix.css'); ?>" />
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
						<h1>Contact</h1>
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
					<div class="page-copy">
						<?php
						$filePath = 'contact.txt';
						if (file_exists($filePath)) {
							echo nl2br(htmlspecialchars(file_get_contents($filePath)));
						} else {
							echo '-';
						}
						?>
					</div>
					<form method="post" action="#">
						<div class="fields">
							<div class="field half">
								<label for="name">Naam</label>
								<input type="text" name="name" id="name" />
							</div>
							<div class="field half">
								<label for="phone">Telefoon</label>
								<input type="text" name="phone" id="phone" />
							</div>
							<div class="field">
								<label for="email">E-mail</label>
								<input type="email" name="email" id="email" />
							</div>
							<div class="field">
								<label for="message">Bericht</label>
								<textarea name="message" id="message" rows="4"></textarea>
							</div>
						</div>
						<ul class="actions">
							<li><input type="submit" value="Verzenden" class="primary" /></li>
						</ul>
					</form>
					<p class="recaptcha-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>
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