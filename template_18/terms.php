<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Algemene voorwaarden</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
    <link rel="stylesheet" href="css/zz-mobile-content-order.css?id=<?php echo filemtime('css/zz-mobile-content-order.css'); ?>">
</head>
<body>
<div class="tm-container mx-auto">


<nav class="zz-fixed-menu">
  <div class="zz-menu-card">
    <a href="index.php" class="navbar-brand" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
    </a>
    <button class="zz-menu-toggle" type="button" aria-label="Menu">☰</button>
    <ul class="zz-menu-links">
      <li><a href="index.php" title="Startpagina" class=""><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 11.5 12 4l9 7.5v8.5a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg><span>Startpagina</span></a></li>
      <li><a href="about.php" title="Over ons" class=""><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm0 2c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5Z"/></svg><span>Over ons</span></a></li>
      <li><a href="service.php" title="Diensten" class=""><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 7.5 12 2 3 7.5v9L12 22l9-5.5Zm-9 2.1L6.5 6.4 12 3.1l5.5 3.3Zm-1 10.1-6-3.7V8.6l6 3.6Zm2 0v-7.5l6-3.6V16Z"/></svg><span>Diensten</span></a></li>
      <li><a href="contact.php" title="Contact" class=""><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm8 7.2L4.4 7H4v.8l8 5.5 8-5.5V7h-.4Z"/></svg><span>Contact</span></a></li>
    </ul>
  </div>
</nav>


<section class="zz-plain-section">
  <div class="container">
    <div class="zz-plain-card">
      <h2 class="tm-color-secondary mb-4">Algemene voorwaarden</h2>
      <div class="zz-dynamic-content text-content">
        <?php
        $filePath = 'terms.txt';
        if (file_exists($filePath)) {
            echo nl2br(htmlspecialchars(file_get_contents($filePath)));
        } else {
            echo '-';
        }
        ?>
      </div>
    </div>
  </div>
</section>

<footer class="zz-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
      </div>
      <div class="col-md-6 col-sm-12 zz-footer-links">
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="js/smooth-scroll.polyfills.min.js?id=<?php echo filemtime('js/smooth-scroll.polyfills.min.js'); ?>"></script>
<script src="js/zz-dynamic.js?id=<?php echo filemtime('js/zz-dynamic.js'); ?>"></script>
<script>
var scroll = new SmoothScroll('a[href^="#"]', {
    easing: 'easeInOutQuart',
    speed: 800
});
</script>
</body>
</html>