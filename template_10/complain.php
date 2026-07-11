<?php
$formSuccess = '';
$formError = '';
$formName = '';
$formPhone = '';
$formEmail = '';
$formMessage = '';

if (isset($_GET['sent']) && $_GET['sent'] === '1') {
	$formSuccess = 'Uw klacht is succesvol verzonden.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
	$formName = isset($_POST['name']) ? trim($_POST['name']) : '';
	$formPhone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
	$formEmail = isset($_POST['email']) ? trim($_POST['email']) : '';
	$formMessage = isset($_POST['message']) ? trim($_POST['message']) : '';

	if ($formName === '' || $formEmail === '' || $formMessage === '') {
		$formError = 'Vul alle verplichte velden in.';
	} elseif (!filter_var($formEmail, FILTER_VALIDATE_EMAIL)) {
		$formError = 'Vul een geldig e-mailadres in.';
	} elseif (!function_exists('curl_init')) {
		$formError = 'De klacht kon niet worden verzonden. Probeer het later opnieuw.';
		error_log('Complaint API error: cURL is not available.');
	} else {
		$domain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';

		if ($domain === '' && isset($_SERVER['HTTP_HOST'])) {
			$domain = $_SERVER['HTTP_HOST'];
		}

		$domain = preg_replace('/:\d+$/', '', $domain);

		$payload = [
			'domain' => $domain,
			'page' => 'complain',
			'name' => $formName,
			'phone' => $formPhone,
			'email' => $formEmail,
			'message' => $formMessage
		];

		$curl = curl_init('https://zzpzo.net/api/v1/insertuserscontactform');

		curl_setopt_array($curl, [
			CURLOPT_POST => true,
			CURLOPT_POSTFIELDS => http_build_query($payload),
			CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_CONNECTTIMEOUT => 5,
			CURLOPT_TIMEOUT => 15
		]);

		$apiResponse = curl_exec($curl);
		$httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
		$curlError = curl_error($curl);

		curl_close($curl);

		if ($curlError === '' && $httpCode >= 200 && $httpCode < 300) {
			header('Location: complain.php?sent=1#form-feedback');
			exit;
		}

		$formError = 'De klacht kon niet worden verzonden. Probeer het later opnieuw.';
		error_log('Complaint API error. HTTP: ' . $httpCode . ' Curl: ' . $curlError . ' Response: ' . $apiResponse);
	}
}
?>
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

		$imageFile = 'complainimage.txt';
		$pageImage = 'images/pic10.jpg';

		if (file_exists($imageFile)) {
			$savedImage = file_get_contents($imageFile);

			if ($savedImage !== false && trim($savedImage) !== '') {
				$pageImage = trim($savedImage);
			}
		}
		?>

		<title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Klachtenportaal</title>
		<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
		<link rel="stylesheet" href="assets/css/main.css?id=<?= $version ?>" />
		<noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?= $version ?>" /></noscript>
		<style>
			.zz-form-feedback{margin:0 0 2rem;padding:1rem 1.15rem;border:1px solid transparent;line-height:1.5;text-align:left;overflow-wrap:anywhere;scroll-margin-top:7rem}
			.zz-form-feedback-success{color:#155724;background:#d4edda;border-color:#c3e6cb}
			.zz-form-feedback-error{color:#721c24;background:#f8d7da;border-color:#f5c6cb}
			.zz-dynamic-content{max-width:100%;box-sizing:border-box;overflow-wrap:anywhere;word-break:break-word;overflow-x:hidden}
			@media screen and (max-width:736px){.zz-dynamic-content,.zz-contact-layout,.zz-contact-layout>section{height:auto!important;min-height:0!important;max-height:none!important;overflow:visible!important}}
		</style>
	</head>
	<body class="is-preload zz-form-page">

		<div id="wrapper">
			<header id="header" class="alt">
				<a href="index.php" class="navbar-brand" id="brandLogo" style="margin-top: 20px;width: 150px; height: 100%; border-bottom: 0; display: flex ; align-items: center; justify-content: center; margin-left: 10px;">
					<img src="logo.png?id=<?= $version ?>" alt="Logo" style="width:100%;" onerror="this.remove();">
				</a>
				<nav><a href="#menu">Menu</a></nav>
			</header>

			<nav id="menu">
				<ul class="links">
					<li><a href="index.php">Startpagina</a></li>
					<li><a href="about.php">Over ons</a></li>
					<li><a href="service.php">Diensten</a></li>
					<li><a href="contact.php">Contact</a></li>
				</ul>
			</nav>

			<section id="banner" class="style2">
				<div class="inner">
					<span class="image"><img src="<?= htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') ?>" alt="Klachtenportaal" /></span>
					<header class="major"><h1>Klachtenportaal</h1></header>
				</div>
			</section>

			<div id="main">
				<section id="contact">
					<div class="inner zz-contact-layout">
						<section>
							<div class="zz-dynamic-text zz-dynamic-content">
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
							</div>

							<?php if ($formSuccess !== ''): ?>
								<div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite"><?php echo htmlspecialchars($formSuccess); ?></div>
							<?php endif; ?>

							<?php if ($formError !== ''): ?>
								<div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert"><?php echo htmlspecialchars($formError); ?></div>
							<?php endif; ?>

							<form method="post" action="">
								<div class="fields">
									<div class="field half">
										<label for="name">Naam</label>
										<input type="text" name="name" id="name" value="<?php echo htmlspecialchars($formName, ENT_QUOTES, 'UTF-8'); ?>" maxlength="150" autocomplete="name" required />
									</div>

									<div class="field half">
										<label for="email">E-mail</label>
										<input type="email" name="email" id="email" value="<?php echo htmlspecialchars($formEmail, ENT_QUOTES, 'UTF-8'); ?>" maxlength="254" autocomplete="email" required />
									</div>

									<div class="field">
										<label for="phone">Telefoon</label>
										<input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($formPhone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="50" inputmode="tel" autocomplete="tel" />
									</div>

									<div class="field">
										<label for="message">Bericht</label>
										<textarea name="message" id="message" rows="6" maxlength="5000" required><?php echo htmlspecialchars($formMessage); ?></textarea>
									</div>
								</div>

								<p>Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>

								<ul class="actions">
									<li><input type="submit" value="Klacht indienen" class="primary" /></li>
									<li><input type="reset" value="Wissen" /></li>
								</ul>
							</form>
						</section>
					</div>
				</section>
			</div>

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

		<script src="assets/js/jquery.min.js?id=<?= $version ?>"></script>
		<script src="assets/js/jquery.scrolly.min.js?id=<?= $version ?>"></script>
		<script src="assets/js/jquery.scrollex.min.js?id=<?= $version ?>"></script>
		<script src="assets/js/browser.min.js?id=<?= $version ?>"></script>
		<script src="assets/js/breakpoints.min.js?id=<?= $version ?>"></script>
		<script src="assets/js/util.js?id=<?= $version ?>"></script>
		<script src="assets/js/main.js?id=<?= $version ?>"></script>
		<script>
		(function(){window.addEventListener('load',function(){var feedback=document.getElementById('form-feedback');if(feedback){window.setTimeout(function(){feedback.scrollIntoView({behavior:'smooth',block:'center'});},250);}});})();
		</script>
	</body>
</html>