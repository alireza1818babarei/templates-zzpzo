<!DOCTYPE HTML>
<html>
<?php
$defaultBanner = 'images/header.jpg';
?>
<head>
	<title><?php
	$filePath = 'title.txt';
	if (file_exists($filePath)) {
		echo nl2br(htmlspecialchars(file_get_contents($filePath)));
	} else {
		echo 'Titel';
	}
	?> - Algemene voorwaarden</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
</head>

<body class="is-preload no-hero-page">

	<div id="header" class="template-hero"
		style="background-image: url('assets/css/images/top-3200.svg'), url('<?= htmlspecialchars($defaultBanner) ?>');">
		<a href="index.php" class="logo navbar-brand" id="brandLogo">
			<img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
		</a>
		<h1>Algemene voorwaarden</h1>
		<nav class="directive-nav">
			<a href="index.php">Startpagina</a>
			<a href="about.php">Over ons</a>
			<a href="service.php">Diensten</a>
			<a href="contact.php">Contact</a>
		</nav>
	</div>
	<div id="main">
		<header class="major container medium dynamic-text">
			<h2>Algemene voorwaarden</h2>
			<?php
			$filePath = 'terms.txt';
			if (file_exists($filePath)) {
				echo nl2br(htmlspecialchars(file_get_contents($filePath)));
			} else {
				echo '-';
			}
			?>
		</header>
	</div>
	<div id="footer" class="template-footer">
		<div class="container medium">
			<p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
			<ul class="footer-links">
				<li><a href="terms.php">Algemene voorwaarden</a></li>
				<li><a href="complain.php">Klachtenportaal</a></li>
				<li><a href="privacy.php">Privacybeleid</a></li>
			</ul>
		</div>
	</div>
</body>

</html>