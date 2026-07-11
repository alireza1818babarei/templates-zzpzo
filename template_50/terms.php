<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Terms';
}
?> - Terms</title>
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="assets/css/dynamic-template.css?id=<?php echo filemtime('assets/css/dynamic-template.css'); ?>">
</head>
<body>
<a class="skip-link" href="#content">Skip to content</a><header class="header-wrap site-shell">
  <nav class="nav-frame" aria-label="Primary navigation">
    <a class="brand" href="index.php" id="brandLogo">
  <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
</a>
    <button class="menu-toggle" type="button" aria-expanded="false" data-menu-toggle>Menu</button>
    <div class="nav-links" data-nav-links>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="service.php">Services</a>
        <a href="contact.php">Contact</a>
    </div>
  </nav>
</header>
<main id="content"><section class="section dynamic-fullwidth-section dynamic-no-hero">
  <div class="site-shell content-card dynamic-content-panel">
    <h2 class="dynamic-page-title">Algemene voorwaarden</h2>
    <div class="dynamic-txt-content"><?php
    $filePath = 'terms.txt';
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
    <div><p>Copyright &copy; <?php echo date('Y'); ?> ZZpzo</p></div>
    <div class="footer-links">
      <a href="terms.php">TERMS</a>
      <a href="complain.php">COMPLAINTS</a>
      <a href="privacy.php">PRIVACY</a>
    </div>
  </div>
</footer>
<script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>
</html>
