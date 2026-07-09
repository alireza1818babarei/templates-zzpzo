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
?> - Privacybeleid</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=DM+Mono:wght@300;400&family=Playfair+Display:ital,wght@0,700;0,800;0,900;1,700&family=Instrument+Sans:wght@400;500;600&display=swap" rel="stylesheet">
<link rel="stylesheet" href="templatemo-split-style.css?id=<?php echo filemtime('templatemo-split-style.css'); ?>">
</head>
<body>
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
    <a href="contact.php">Contact</a>
  </nav>
</header>

<!-- Main Content -->
<div class="split-container split-container-standard">
  <div class="left-side left-side-standard">
    <div class="panel panel-active">
      <div class="standard-content">
        <span class="about-label">Privacybeleid</span>
        <div class="content-body">
<?php
$filePath = 'privacy.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo '-';
}
?>
        </div>
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
