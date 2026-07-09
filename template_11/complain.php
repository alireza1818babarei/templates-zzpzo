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
		?>

		<title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Klachtenportaal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?= $version ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?= $version ?>" /></noscript>
	</head>
	<body class="is-preload zz-static-page">

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
								<p>Klachtenportaal</p>
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

						<article id="complain">
							<h2 class="major">Klachtenportaal</h2>
							<p>
<?php
						$contentFile = 'complain.txt';

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

		<!-- Scripts -->
			<script src="assets/js/jquery.min.js?id=<?= $version ?>"></script>
			<script src="assets/js/browser.min.js?id=<?= $version ?>"></script>
			<script src="assets/js/breakpoints.min.js?id=<?= $version ?>"></script>
			<script src="assets/js/util.js?id=<?= $version ?>"></script>
			<script src="assets/js/main.js?id=<?= $version ?>"></script>

	</body>
</html>