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
<!DOCTYPE HTML>
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
  ?>
  <title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Contact</title>
  <meta name="description" content="<?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Contact" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
  <link rel="stylesheet" href="assets/css/zz-contact-reveal-fix.css?id=<?php echo filemtime('assets/css/zz-contact-reveal-fix.css'); ?>" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?php echo filemtime('assets/css/noscript.css'); ?>" /></noscript>
  <style>
    #header #brandLogo{display:inline-flex;align-items:center;height:70%;justify-content:center}#header #brandLogo img{display:block;width:100%;height:100%}#header nav ul{white-space:nowrap}#header nav ul li.active>a{font-weight:700;text-decoration:underline;text-underline-offset:.25rem}.zzpzo-page-hero{min-height:55vh!important}.zzpzo-rich-text{line-height:1.8;overflow-wrap:anywhere;text-align:left}.zzpzo-legal-links a{text-decoration:none}.zz-form-feedback{margin:0 0 1.5rem;padding:1rem 1.1rem;border:1px solid transparent;border-radius:.35rem;line-height:1.5;text-align:left;overflow-wrap:anywhere;scroll-margin-top:7rem}.zz-form-feedback-success{color:#155724;background:#d4edda;border-color:#c3e6cb}.zz-form-feedback-error{color:#721c24;background:#f8d7da;border-color:#f5c6cb}
    @media screen and (max-width:980px){#header{flex-wrap:wrap;gap:.5rem}#header nav{overflow-x:auto;max-width:100%}#header nav ul li{margin-left:.7rem}}
    @media screen and (max-width:736px){#contact .zzpzo-rich-text,#contact .box{height:auto!important;min-height:0!important;max-height:none!important;overflow:visible!important}}
  </style>
</head>
<body class="is-preload zzpzo-responsive-page">
  <header id="header">
    <h1 style="display:flex;align-items:center;"><a href="index.php" id="brandLogo" aria-label="Naar de startpagina"><img style="height:100%;" src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="<?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> Logo" onerror="this.remove();" /></a></h1>
    <button class="zzpzo-menu-toggle" type="button" aria-label="Menu openen" aria-expanded="false" aria-controls="primaryNavigation"><span></span><span></span><span></span></button>
    <nav id="primaryNavigation" aria-label="Primaire navigatie"><ul><li><a href="index.php">Startpagina</a></li><li><a href="about.php">Over ons</a></li><li><a href="service.php">Diensten</a></li><li class="active"><a href="contact.php">Contact</a></li></ul></nav>
  </header>
  <?php
  $defaultBanner = 'img/banner-bg.jpg';
  $bannerFile = 'contactimage.txt';
  $bannerUrl = $defaultBanner;
  if (file_exists($bannerFile)) {
    $savedBannerUrl = file_get_contents($bannerFile);
    if ($savedBannerUrl !== false && trim($savedBannerUrl) !== '') {
      $bannerUrl = trim($savedBannerUrl);
    }
  }
  ?>
  <section id="contact-hero" class="main style1 dark fullscreen" style="background-image:linear-gradient(rgba(0,0,0,.38),rgba(0,0,0,.38)),url('<?= htmlspecialchars($bannerUrl, ENT_QUOTES, 'UTF-8') ?>');"><div class="content"><header><h2>Neem contact op</h2></header></div></section>
  <section id="contact" class="main style3 secondary">
    <div class="content">
      <div class="box"><div class="zzpzo-rich-text"><?php
      $contentFile = 'contact.txt';
      if (file_exists($contentFile)) {
        $content = file_get_contents($contentFile);
        if ($content !== false && trim($content) !== '') { echo nl2br(htmlspecialchars(trim($content), ENT_QUOTES, 'UTF-8')); } else { echo '-'; }
      } else { echo '-'; }
      ?></div></div>
      <div class="box">
        <?php if ($formSuccess !== ''): ?><div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite"><?php echo htmlspecialchars($formSuccess); ?></div><?php endif; ?>
        <?php if ($formError !== ''): ?><div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert"><?php echo htmlspecialchars($formError); ?></div><?php endif; ?>
        <form method="post" action="">
          <div class="fields">
            <div class="field half"><input type="text" name="name" id="name" placeholder="Naam" value="<?php echo htmlspecialchars($formName, ENT_QUOTES, 'UTF-8'); ?>" maxlength="150" autocomplete="name" required /></div>
            <div class="field half"><input type="email" name="email" id="email" placeholder="E-mail" value="<?php echo htmlspecialchars($formEmail, ENT_QUOTES, 'UTF-8'); ?>" maxlength="254" autocomplete="email" required /></div>
            <div class="field"><input type="text" name="phone" id="phone" placeholder="Telefoon" value="<?php echo htmlspecialchars($formPhone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="50" inputmode="tel" autocomplete="tel" /></div>
            <div class="field"><textarea name="message" id="message" placeholder="Bericht" rows="6" maxlength="5000" required><?php echo htmlspecialchars($formMessage); ?></textarea></div>
          </div>
          <p>Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>
          <ul class="actions special"><li><input type="submit" value="Bericht verzenden" /></li></ul>
        </form>
      </div>
    </div>
  </section>
  <footer id="footer"><ul class="icons zzpzo-legal-links"><li><a href="terms.php">Algemene voorwaarden</a></li><li><a href="complain.php">Klachtenportaal</a></li><li><a href="privacy.php">Privacybeleid</a></li></ul><ul class="menu"><li>Auteursrecht &copy; <?= date('Y') ?> ZZpzo</li></ul></footer>
  <script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
  <script src="assets/js/jquery.poptrox.min.js?id=<?php echo filemtime('assets/js/jquery.poptrox.min.js'); ?>"></script>
  <script src="assets/js/jquery.scrolly.min.js?id=<?php echo filemtime('assets/js/jquery.scrolly.min.js'); ?>"></script>
  <script src="assets/js/jquery.scrollex.min.js?id=<?php echo filemtime('assets/js/jquery.scrollex.min.js'); ?>"></script>
  <script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
  <script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
  <script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
  <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
  <script>(function(){window.addEventListener('load',function(){var feedback=document.getElementById('form-feedback');if(feedback){window.setTimeout(function(){feedback.scrollIntoView({behavior:'smooth',block:'center'});},250);}});})();</script>
</body>
</html>