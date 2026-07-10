<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta http-equiv="X-UA-Compatible" content="ie=edge">
<title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Klachtenportaal</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400;1,500&family=Manrope:wght@200;300;400;500;600&family=DM+Mono:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="tooplate-ivory-style.css?id=<?php echo filemtime('tooplate-ivory-style.css'); ?>">
</head>
<body>
<nav class="pill-nav zz-pill-nav" aria-label="Hoofdnavigatie">
  <a href="index.php" class="navbar-brand" id="brandLogo">
      <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
  </a>
  <a href="index.php" class="">Startpagina</a>
  <a href="about.php" class="">Over ons</a>
  <a href="service.php" class="">Diensten</a>
  <a href="contact.php" class="">Contact</a>
</nav>
<button class="hamburger" aria-label="Navigatie openen/sluiten"><span></span><span></span><span></span></button>
<nav class="mobile-nav" aria-label="Mobiele navigatie">
  <a href="index.php" class="navbar-brand zz-mobile-logo" id="brandLogo">
      <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
  </a>
  <a href="index.php">Startpagina</a>
  <a href="about.php">Over ons</a>
  <a href="service.php">Diensten</a>
  <a href="contact.php">Contact</a>
</nav>
<main>

<section class="zz-dynamic-section">
  <div class="zz-dynamic-header">
    <h2>Klachtenportaal</h2>
  </div>
  <div class="zz-dynamic-panel">
    <div class="zz-dynamic-content text-content">
      <?php
      $filePath = 'complain.txt';
      if (file_exists($filePath)) {
          echo nl2br(htmlspecialchars(file_get_contents($filePath)));
      } else {
          echo '-';
      }
      ?>
    </div>
  </div>
</section>


<section class="zz-form-section">
  <div class="zz-form-grid zz-form-grid-single">
    <div class="zz-form-card">
      <h2>Klachtenformulier</h2>
      <form action="#" method="post">
        <div class="zz-form-row"><input class="zz-field" type="text" name="name" placeholder="Naam"></div>
        <div class="zz-form-row"><input class="zz-field" type="text" name="phone" placeholder="Telefoon"></div>
        <div class="zz-form-row"><input class="zz-field" type="email" name="email" placeholder="E-mail"></div>
        <div class="zz-form-row"><textarea class="zz-field" name="message" placeholder="Bericht"></textarea></div>
        <button class="zz-submit" type="submit">Verzenden</button>
      </form>
      <div class="zz-recaptcha">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
    </div>
  </div>
</section>

</main>
<footer class="zz-footer">
  <div class="zz-footer-inner">
    <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
    <div class="zz-footer-links">
      <a href="terms.php">Algemene voorwaarden</a>
      <a href="complain.php">Klachtenportaal</a>
      <a href="privacy.php">Privacybeleid</a>
    </div>
  </div>
</footer>
<script src="zz-dynamic.js?id=<?php echo filemtime('zz-dynamic.js'); ?>"></script>
</body>
</html>
