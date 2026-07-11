<?php
$formSuccess = '';
$formError = '';
$formName = '';
$formPhone = '';
$formEmail = '';
$formMessage = '';

if (isset($_GET['sent']) && $_GET['sent'] === '1') {
    $formSuccess = 'Uw bericht is succesvol verzonden.';
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
        $formError = 'Het bericht kon niet worden verzonden. Probeer het later opnieuw.';
        error_log('Contact API error: cURL is not available.');
    } else {
        $domain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';

        if ($domain === '' && isset($_SERVER['HTTP_HOST'])) {
            $domain = $_SERVER['HTTP_HOST'];
        }

        $domain = preg_replace('/:\d+$/', '', $domain);

        $payload = [
            'domain' => $domain,
            'page' => 'contact',
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
            header('Location: contact.php?sent=1#form-feedback');
            exit;
        }

        $formError = 'Het bericht kon niet worden verzonden. Probeer het later opnieuw.';
        error_log('Contact API error. HTTP: ' . $httpCode . ' Curl: ' . $curlError . ' Response: ' . $apiResponse);
    }
}
?>
<!doctype html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Contact';
}
?> - Contact</title>
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="assets/css/dynamic-template.css?id=<?php echo filemtime('assets/css/dynamic-template.css'); ?>">
  <style>
    .zz-form-feedback{margin:0 0 1.25rem;padding:.9rem 1rem;border:1px solid transparent;border-radius:12px;line-height:1.5;text-align:left;overflow-wrap:anywhere;scroll-margin-top:7rem}
    .zz-form-feedback-success{color:#155724;background:#d4edda;border-color:#c3e6cb}
    .zz-form-feedback-error{color:#721c24;background:#f8d7da;border-color:#f5c6cb}
    .dynamic-form-text{max-width:100%;box-sizing:border-box;overflow-wrap:anywhere;word-break:break-word;overflow-x:hidden}
    @media (max-width:767px){.dynamic-form-panel,.dynamic-form-text{height:auto!important;min-height:0!important;max-height:none!important;overflow:visible!important}}
  </style>
</head>
<body class="zz-form-page"><header class="site-header"><a class="brand" href="index.php" id="brandLogo">
  <img style="width: 150px" src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
</a><button class="menu-toggle" type="button">Menu</button><nav class="nav-links"><a class="" href="index.php">Startpagina</a><a class="" href="about.php">Over ons</a><a class="" href="service.php">Diensten</a><a class="active" href="contact.php">Contact</a></nav></header><main><?php
$defaultHeroImage = "assets/images/hero.svg";
$heroImageFile = "contactimage.txt";

if (file_exists($heroImageFile)) {
    $heroImageUrl = trim(file_get_contents($heroImageFile));
    if ($heroImageUrl === "") {
        $heroImageUrl = $defaultHeroImage;
    }
} else {
    $heroImageUrl = $defaultHeroImage;
}
?>
<section class="hero"><div class="hero-inner"><h1>Contact</h1></div><div class="hero-art" style="background-image:url('<?php echo htmlspecialchars($heroImageUrl); ?>');" aria-hidden="true"></div></section><section class="section dynamic-fullwidth-section"><div class="bubble dynamic-content-panel dynamic-form-panel"><div class="dynamic-txt-content dynamic-form-text"><?php
    $filePath = 'contact.txt';
    if (file_exists($filePath)) {
        echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
        echo '-';
    }
    ?></div>
<?php if ($formSuccess !== ''): ?>
<div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite"><?php echo htmlspecialchars($formSuccess); ?></div>
<?php endif; ?>
<?php if ($formError !== ''): ?>
<div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert"><?php echo htmlspecialchars($formError); ?></div>
<?php endif; ?>
<form class="site-form" action="" method="post">
  <label>Naam<input type="text" id="name" name="name" value="<?php echo htmlspecialchars($formName, ENT_QUOTES, 'UTF-8'); ?>" maxlength="150" autocomplete="name" required></label>
  <label>Telefoon<input type="tel" id="phone" name="phone" value="<?php echo htmlspecialchars($formPhone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="50" autocomplete="tel"></label>
  <label>E-mail<input type="email" id="email" name="email" value="<?php echo htmlspecialchars($formEmail, ENT_QUOTES, 'UTF-8'); ?>" maxlength="254" autocomplete="email" required></label>
  <label>Bericht<textarea id="message" name="message" maxlength="5000" required><?php echo htmlspecialchars($formMessage); ?></textarea></label>
  <button class="primary-btn" type="submit">Verzenden</button>
</form>
<p class="recaptcha-note dynamic-recaptcha">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>
</div></section></main><footer class="site-footer"><span>&copy; <?php echo date('Y'); ?> ZZpzo</span><nav><a href="terms.php">Algemene voorwaarden</a><a href="complain.php">Klachtenportaal</a><a href="privacy.php">Privacybeleid</a></nav></footer><script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
<script>
(function(){window.addEventListener('load',function(){var feedback=document.getElementById('form-feedback');if(feedback){window.setTimeout(function(){feedback.scrollIntoView({behavior:'smooth',block:'center'});},180);}});})();
</script>
</body>
</html>