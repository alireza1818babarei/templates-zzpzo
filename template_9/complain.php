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
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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

<title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="templatemo-621-luminary-style.css?id=<?= $version ?>">
<style>
.zz-form-feedback{margin:0 0 1.5rem;padding:1rem 1.1rem;border:1px solid transparent;border-radius:16px;line-height:1.5;text-align:left;overflow-wrap:anywhere;scroll-margin-top:7rem}
.zz-form-feedback-success{color:#155724;background:#d4edda;border-color:#c3e6cb}
.zz-form-feedback-error{color:#721c24;background:#f8d7da;border-color:#f5c6cb}
.zz-dynamic-content{max-width:100%;box-sizing:border-box;overflow-wrap:anywhere;word-break:break-word;overflow-x:hidden}
@media (max-width:767px){.zz-dynamic-content,.feature-content,.section-body{height:auto!important;min-height:0!important;max-height:none!important;overflow:visible!important}}
</style>
</head>
<body class="zz-form-page">

<svg class="grain" width="100%" height="100%" aria-hidden="true">
  <filter id="n"><feTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="5" stitchTiles="stitch"/><feColorMatrix type="saturate" values="0"/></filter>
  <rect width="100%" height="100%" filter="url(#n)"/>
</svg>

<div class="atmosphere"></div>
<nav class="top-nav" id="topNav">
  <a href="index.php" class="nav-brand">
    <img src="logo.png?id=<?= $version ?>" alt="Logo" style="height: 60%; width: 250px;" onerror="this.remove();">
  </a>

  <ul class="nav-links">
    <li class="active"><a href="index.php">Startpagina</a></li>
    <li><a href="about.php">Over ons</a></li>
    <li><a href="service.php">Diensten</a></li>
    <li><a href="contact.php">Contact</a></li>
  </ul>

  <button class="nav-toggle" id="navToggle" aria-label="Menu openen/sluiten" aria-expanded="false">
    <span class="toggle-bar"></span>
    <span class="toggle-bar"></span>
  </button>
</nav>

<div class="mobile-menu" id="mobileMenu">
  <div class="mobile-menu-inner">
    <div class="mobile-menu-links">
      <a href="index.php" class="mobile-menu-link" data-index="01" aria-current="page">Startpagina</a>
      <a href="about.php" class="mobile-menu-link" data-index="02">Over ons</a>
      <a href="service.php" class="mobile-menu-link" data-index="03">Diensten</a>
      <a href="contact.php" class="mobile-menu-link" data-index="04">Contact</a>
    </div>

    <div class="mobile-menu-footer">
      <a href="contact.php">Contact</a>
    </div>
  </div>
</div>

<nav class="side-panel left" aria-label="Scrollindicator">
  <div class="side-track"><div class="side-track-fill" id="leftTrack"></div></div>
  <div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div>
  <div class="side-readout" id="scrollPct">00</div>
</nav>

<nav class="side-panel right" aria-label="Pagina-indicator">
  <div class="side-track"><div class="side-track-fill" id="rightTrack"></div></div>
  <div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div><div class="side-dot"></div>
  <div class="side-readout">ZZP</div>
</nav>

<main class="main">
  <section class="hero" id="hero">
    <div class="hero-grid"></div>
    <h1>Klachtenportaal</h1>
    <p class="hero-sub"></p>
    <div class="hero-ctas"><a href="#content" class="btn-primary">Verkennen</a></div>
  </section>

  <section class="section" id="content">
    <div class="feature feature-full reveal">
      <div class="feature-content">
        <h2 class="section-title">Klachtenportaal</h2>
        <div class="section-body zz-dynamic-content">
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
      </div>
    </div>

    <div class="pricing-card reveal">
      <?php if ($formSuccess !== ''): ?>
        <div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite"><?php echo htmlspecialchars($formSuccess); ?></div>
      <?php endif; ?>

      <?php if ($formError !== ''): ?>
        <div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert"><?php echo htmlspecialchars($formError); ?></div>
      <?php endif; ?>

      <form class="luminary-form" method="post" action="">
        <p class="pricing-tier">Dien een klacht in</p>

        <p>
          <label for="name">Naam</label><br>
          <input type="text" name="name" id="name" value="<?php echo htmlspecialchars($formName, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Uw naam" maxlength="150" autocomplete="name" required>
        </p>

        <p>
          <label for="email">E-mail</label><br>
          <input type="email" name="email" id="email" value="<?php echo htmlspecialchars($formEmail, ENT_QUOTES, 'UTF-8'); ?>" placeholder="you@example.com" maxlength="254" autocomplete="email" required>
        </p>

        <p>
          <label for="phone">Telefoon</label><br>
          <input type="text" name="phone" id="phone" value="<?php echo htmlspecialchars($formPhone, ENT_QUOTES, 'UTF-8'); ?>" placeholder="Optioneel telefoonnummer" maxlength="50" inputmode="tel" autocomplete="tel">
        </p>

        <p>
          <label for="message">Bericht</label><br>
          <textarea name="message" id="message" rows="6" placeholder="Schrijf uw bericht" maxlength="5000" required><?php echo htmlspecialchars($formMessage); ?></textarea>
        </p>

        <p class="pricing-desc">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>

        <button type="submit" class="btn-primary">Klacht indienen</button>
      </form>
    </div>
  </section>

  <section class="footer-cta" id="cta">
    <div class="footer-ctas reveal reveal-d2">
      <a href="terms.php" class="btn-secondary">Algemene voorwaarden</a>
      <a href="complain.php" class="btn-secondary">Klachtenportaal</a>
      <a href="privacy.php" class="btn-secondary">Privacybeleid</a>
    </div>

    <div class="footer-bar reveal reveal-d3">
      <div class="footer-links"><span class="footer-credit">Auteursrecht &copy; <?= date('Y') ?> ZZpzo</span></div>
    </div>
  </section>
</main>

<script src="templatemo-621-luminary-page-script.js?id=<?= $version ?>"></script>
<script>
(function(){window.addEventListener('load',function(){var feedback=document.getElementById('form-feedback');if(feedback){window.setTimeout(function(){feedback.scrollIntoView({behavior:'smooth',block:'center'});},220);}});})();
</script>
</body>
</html>