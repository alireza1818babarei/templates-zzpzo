<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Contact</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700&family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="templatemo-split-style.css?id=<?php echo filemtime('templatemo-split-style.css'); ?>">
</head>
<body>
<?php
$defaultBanner = "images/templatemo-split-10.jpg";
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
<!-- Site Header -->
<header class="site-header">
  <div class="site-brand">
    <a href="index.php" class="navbar-brand" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
</a>
  </div>
  <button class="site-menu-toggle" type="button" aria-label="Menu openen" aria-expanded="false" aria-controls="siteHeaderNav">
    <span></span>
    <span></span>
    <span></span>
  </button>
  <nav class="site-header-nav" id="siteHeaderNav">
    <a href="index.php">Startpagina</a>
    <a href="about.php">Over ons</a>
    <a href="service.php">Diensten</a>
    <a href="contact.php" class="nav-active">Contact</a>
  </nav>
</header>

<!-- Main Split -->
<div class="split-container">
  <div class="left-side">
    <div class="panel panel-active">
      <div class="page-content">
        <span class="about-label">Contact</span>
        <div class="content-body">
<?php
$filePath = 'contact.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo '-';
}
?>
        </div>
        <form class="contact-form" method="post" action="#">
          <div class="form-group">
            <label for="name">Naam</label>
            <input type="text" id="name" name="name" placeholder="Uw volledige naam">
          </div>
          <div class="form-group">
            <label for="phone">Telefoon</label>
            <input type="text" id="phone" name="phone" placeholder="Uw telefoonnummer">
          </div>
          <div class="form-group">
            <label for="email">E-mail</label>
            <input type="email" id="email" name="email" placeholder="hello@example.com">
          </div>
          <div class="form-group">
            <label for="message">Bericht</label>
            <textarea id="message" name="message" placeholder="Vertel ons over uw project..."></textarea>
          </div>
          <button type="submit" class="form-submit">Verzenden</button>
        </form>
        <p class="recaptcha-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>

      </div>
    </div>
  </div>

  <div class="split-divider"></div>

  <div class="canvas-side" id="canvasSide">
    <div class="canvas-context visible page-hero-image">
      <img src="<?= htmlspecialchars($bannerUrl) ?>" alt="Contact" loading="lazy">
      <div class="canvas-context-overlay">
        <p class="canvas-context-quote">Contact</p>
        <span class="canvas-context-attr">ZZpzo</span>
      </div>
    </div>
  </div>
</div>
<!-- Site Footer -->
<footer class="site-footer">
  <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
  <div class="footer-links">
    <a href="terms.php">Algemene voorwaarden</a>
    <span class="footer-dot">&middot;</span>
    <a href="complain.php">Klachtenportaal</a>
    <span class="footer-dot">&middot;</span>
    <a href="privacy.php">Privacybeleid</a>
  </div>
</footer>
<script src="templatemo-split-index.js?id=<?php echo filemtime('templatemo-split-index.js'); ?>"></script>
</body>
</html>
