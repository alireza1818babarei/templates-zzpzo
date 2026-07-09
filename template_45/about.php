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
    echo 'Over ons';
}
?> - Over ons</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="assets/css/dynamic-template.css?id=<?php echo filemtime('assets/css/dynamic-template.css'); ?>">
</head>
<body>
<a class="skip-link" href="#content">Naar de inhoud</a><header class="header-wrap site-shell">
  <nav class="nav-frame" aria-label="Primaire navigatie">
    <a class="brand" href="index.php" id="brandLogo">
  <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
</a>
    <button class="menu-toggle" type="button" aria-expanded="false" data-menu-toggle>Menu</button>
    <div class="nav-links" data-nav-links>
        <a href="index.php">Startpagina</a>
        <a href="about.php" aria-current="page">Over ons</a>
        <a href="service.php">Diensten</a>
        <a href="contact.php">Contact</a>
    </div>
  </nav>
</header>
<main id="content"><?php
$defaultHeroImage = "assets/images/hero.svg";
$heroImageFile = "aboutimage.txt";

if (file_exists($heroImageFile)) {
    $heroImageUrl = trim(file_get_contents($heroImageFile));
    if ($heroImageUrl === "") {
        $heroImageUrl = $defaultHeroImage;
    }
} else {
    $heroImageUrl = $defaultHeroImage;
}
?>
<section class="hero">
  <div class="site-shell hero-grid">
    <div class="hero-copy">
      <h1>Over ons</h1>
    </div>
    <div class="hero-panel">
      <img src="<?php echo htmlspecialchars($heroImageUrl); ?>" alt="Over ons">
    </div>
  </div>
</section><section class="section dynamic-fullwidth-section ">
  <div class="site-shell content-card dynamic-content-panel">
    <div class="dynamic-txt-content"><?php
    $filePath = 'about.txt';
    if (file_exists($filePath)) {
        echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
        echo '-';
    }
    ?></div>
  </div>
</section></main>
<footer class="footer">
  <div class="site-shell footer-grid">
    <div><p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p></div>
    <div class="footer-links">
      <a href="terms.php">Algemene voorwaarden</a>
      <a href="complain.php">Klachtenportaal</a>
      <a href="privacy.php">Privacybeleid</a>
    </div>
  </div>
</footer>
<script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>
</html>
