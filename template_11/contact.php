<!DOCTYPE HTML>
<!--
	Dimension by HTML5 UP
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

		$imageFile = 'contactimage.txt';
		$pageImage = 'images/pic01.jpg';

		if (file_exists($imageFile)) {
			$savedImage = file_get_contents($imageFile);

			if ($savedImage !== false && trim($savedImage) !== '') {
				$pageImage = trim($savedImage);
			}
		}
		?>

		<title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Contact</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?= $version ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?= $version ?>" /></noscript>
	</head>
	<body class="is-preload">

		<!-- Wrapper -->
			<div id="wrapper">

				<!-- Header -->
					<header id="header">
      <div class="logo">
        <a href="index.php" class="navbar-brand" id="brandLogo" style="width: 100%; height: 100%; border-bottom: 0; display: flex ; align-items: center; justify-content: center;" >
          <img src="logo.png?id=<?= $version ?>" alt="Logo" style="width:100%;" onerror="this.remove();">
        </a>
      </div>
						<div class="content">
							<div class="inner">
								<h1><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></h1>
								<p>Contact</p>
							</div>
						</div>

						<nav>
        <ul>
          <li><a href="index.php">Startpagina</a></li>
          <li><a href="about.php">Over ons</a></li>
          <li><a href="service.php">Diensten</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
					</header>

				<!-- Main -->
					<div id="main">

						<article id="contact">
							<h2 class="major">Neem contact op</h2>
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
									<li><input type="submit" value="Bericht verzenden" class="primary" /></li>
									<li><input type="reset" value="Herstellen" /></li>
								</ul>
							</form>
						</article>

					</div>

				<!-- Footer -->
					<footer id="footer">
						<p class="copyright">
							<a href="terms.php">Algemene voorwaarden</a> &nbsp;|&nbsp;
							<a href="complain.php">Klachtenportaal</a> &nbsp;|&nbsp;
							<a href="privacy.php">Privacybeleid</a>
							<br />
							Auteursrecht &copy; <?= date('Y') ?> ZZpzo
						</p>
					</footer>

			</div>

		<!-- BG -->
			<div id="bg"></div>

		<!-- Open this page's native Dimension article -->
			<script>
				if (!window.location.hash) {
					window.location.hash = '#contact';
				}
			</script>

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js?id=<?= $version ?>"></script>
			<script src="assets/js/browser.min.js?id=<?= $version ?>"></script>
			<script src="assets/js/breakpoints.min.js?id=<?= $version ?>"></script>
			<script src="assets/js/util.js?id=<?= $version ?>"></script>
			<script src="assets/js/main.js?id=<?= $version ?>"></script>

	</body>
</html>
