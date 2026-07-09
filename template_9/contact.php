<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

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
$pageImage = 'images/tm-luminary-01.jpg';

if (file_exists($imageFile)) {
  $savedImage = file_get_contents($imageFile);

  if ($savedImage !== false && trim($savedImage) !== '') {
    $pageImage = trim($savedImage);
  }
}
?>

<title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@300;400;500;600;700&display=swap" rel="stylesheet">
<link rel="stylesheet" href="templatemo-621-luminary-style.css?id=<?php echo filemtime('templatemo-621-luminary-style.css'); ?>">
</head>
<body>

<svg class="grain" width="100%" height="100%" aria-hidden="true">
  <filter id="n"><feTurbulence type="fractalNoise" baseFrequency="0.65" numOctaves="5" stitchTiles="stitch"/><feColorMatrix type="saturate" values="0"/></filter>
  <rect width="100%" height="100%" filter="url(#n)"/>
</svg>

<div class="atmosphere"></div>
<!-- Nav -->
<nav class="top-nav" id="topNav">
  <a href="index.php" class="nav-brand">
    <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="height: 60%; width: 250px;" onerror="this.remove();">
  </a>

  <ul class="nav-links">
    <li class="active"><a href="index.php">Startpagina</a></li>
    <li><a href="about.php">Over ons</a></li>
    <li><a href="service.php">Diensten</a></li>
    <li><a href="Contact.php">Contact</a></li>
  </ul>


  <button class="nav-toggle" id="navToggle" aria-label="Menu openen/sluiten" aria-expanded="false">
    <span class="toggle-bar"></span>
    <span class="toggle-bar"></span>
  </button>
</nav>

<!-- Mobile Menu -->
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
<!-- Side Panels -->
<nav class="side-panel left" aria-label="Scrollindicator">
  <div class="side-track"><div class="side-track-fill" id="leftTrack"></div></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-readout" id="scrollPct">00</div>
</nav>

<nav class="side-panel right" aria-label="Pagina-indicator">
  
  <div class="side-track"><div class="side-track-fill" id="rightTrack"></div></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-dot"></div>
  <div class="side-readout">ZZP</div>
</nav>
<main class="main">
  <section class="hero" id="hero">
    <div class="hero-grid"></div>

    <h1>Contact</h1>

    <p class="hero-sub"></p>

    <div class="hero-ctas">
      <a href="#content" class="btn-primary">Verkennen</a>
    </div>
  </section>
  <section class="section" id="content">
    <div class="feature reveal">
      <div class="feature-visual">
        <img src="<?= htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') ?>" alt="Welkom">
      </div>

      <div class="feature-content">
        <h2 class="section-title">Contact</h2>
        <div class="section-body zz-home-text-wrap">
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
        </div>
      </div>
    </div>
        <div class="pricing-card reveal">
      <form class="luminary-form" method="post" action="#">
        <p class="pricing-tier">Neem contact op</p>

        <p>
          <label for="name">Naam</label><br>
          <input type="text" name="name" id="name" placeholder="Uw naam" autocomplete="name" required>
        </p>

        <p>
          <label for="email">E-mail</label><br>
          <input type="email" name="email" id="email" placeholder="you@example.com" autocomplete="email" required>
        </p>

        <p>
          <label for="phone">Telefoon</label><br>
          <input type="text" name="phone" id="phone" placeholder="Optioneel telefoonnummer" inputmode="tel" autocomplete="tel">
        </p>

        <p>
          <label for="message">Bericht</label><br>
          <textarea name="message" id="message" rows="6" placeholder="Schrijf uw bericht" required></textarea>
        </p>

        <p class="pricing-desc">
          Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.
        </p>

        <button type="submit" class="btn-primary">Bericht verzenden</button>
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

      <div class="footer-links">
        <span class="footer-credit">Auteursrecht &copy; <?= date('Y') ?> ZZpzo</span>
      </div>
    </div>
  </section>
</main>

<script src="templatemo-621-luminary-page-script.js?id=<?php echo filemtime('templatemo-621-luminary-page-script.js'); ?>"></script>
</body>
</html>
