<!DOCTYPE HTML>
<!--
	Massively by HTML5 UP
	html5up.net | @ajlkn
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="nl">
	<head>
		<meta charset="utf-8" />

		<?php
		$titleFile = 'title.txt';
		$siteTitle = 'Titel';

		if (file_exists($titleFile)) {
			$titleContent = file_get_contents($titleFile);

			if ($titleContent !== false && trim($titleContent) !== '') {
				$siteTitle = trim($titleContent);
			}
		}

		$imageFile = 'contactimage.txt';
		$pageImage = 'images/pic04.jpg';

		if (file_exists($imageFile)) {
			$savedImage = file_get_contents($imageFile);

			if ($savedImage !== false && trim($savedImage) !== '') {
				$pageImage = trim($savedImage);
			}
		}
		?>

		<title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?php echo filemtime('assets/css/noscript.css'); ?>" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">
				<!-- Header -->
					<header id="header">
						<a href="index.php" class="logo navbar-brand" id="brandLogo">
							<img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:250px;margin-top:-5px;" onerror="this.remove();">
						</a>
					</header>

				<!-- Nav -->
					<nav id="nav">
						<ul class="links">
							<li><a href="index.php">Startpagina</a></li>
							<li><a href="about.php">Over ons</a></li>
							<li><a href="service.php">Diensten</a></li>
							<li class="active"><a href="contact.php">Contact</a></li>
						</ul>
					</nav>
				<!-- Main -->
					<div id="main">

						<section class="post">
							<header class="major">
								<span class="date">Neem contact op</span>
							</header>

							<span class="image main">
								<img src="<?= htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') ?>" alt="Neem contact op" />
							</span>

							<p>
								<?php
								$contentFile = 'contact.txt';

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

							<form method="post" action="#">
								<div class="fields">
									<div class="field half">
										<label for="name">Naam</label>
										<input type="text" name="name" id="name" autocomplete="name" required />
									</div>

									<div class="field half">
										<label for="email">E-mail</label>
										<input type="email" name="email" id="email" autocomplete="email" required />
									</div>

									<div class="field">
										<label for="phone">Telefoon</label>
										<input type="text" name="phone" id="phone" inputmode="tel" autocomplete="tel" />
									</div>

									<div class="field">
										<label for="message">Bericht</label>
										<textarea name="message" id="message" rows="6" required></textarea>
									</div>
								</div>

								<p>
									Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.
								</p>

								<ul class="actions">
									<li><input type="submit" value="Bericht verzenden" /></li>
									<li><input type="reset" value="Wissen" /></li>
								</ul>
							</form>
						</section>

					</div>
				<!-- Footer -->
					<footer id="footer">
						<section class="split contact">
							<section>
								<div class="footer-links">
									<a href="terms.php">Algemene voorwaarden</a>
									<a href="complain.php">Klachtenportaal</a>
									<a href="privacy.php">Privacybeleid</a>
								</div>
							</section>
						</section>
					</footer>

				<!-- Copyright -->
					<div id="copyright">
						<ul>
							<li>Auteursrecht &copy; <?= date('Y') ?> ZZpzo</li>
						</ul>
					</div>

			</div>
		<!-- Scripts -->
			<script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
			<script src="assets/js/jquery.scrollex.min.js?id=<?php echo filemtime('assets/js/jquery.scrollex.min.js'); ?>"></script>
			<script src="assets/js/jquery.scrolly.min.js?id=<?php echo filemtime('assets/js/jquery.scrolly.min.js'); ?>"></script>
			<script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
			<script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
			<script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
			<script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>

	</body>
</html>
