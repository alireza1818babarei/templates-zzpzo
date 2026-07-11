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
  <link rel="stylesheet" href="assets/css/zz-form-visual-fix.css?id=<?php echo filemtime('assets/css/zz-form-visual-fix.css'); ?>">
</head>
<body><div class="site-shell">
  <header class="site-header">
    <a class="brand" href="index.php" id="brandLogo">
  <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
</a>
    <input class="nav-toggle" id="nav-toggle" type="checkbox">
    <label class="nav-trigger" for="nav-toggle" aria-label="Menu openen"><span></span><span></span><span></span></label>
    <nav class="main-nav" aria-label="Hoofdnavigatie">
      <a href="index.php">Startpagina</a>
      <a href="about.php">Over ons</a>
      <a href="service.php">Diensten</a>
      <a class="active" href="contact.php">Contact</a>
    </nav>
  </header>
<?php
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
  <section class="hero">
    <div class="hero-copy">
      <h1>Contact</h1>
    </div>
    <figure class="hero-media"><img src="<?php echo htmlspecialchars($heroImageUrl); ?>" alt="Contact"></figure>
  </section>
  <main class="page-main dynamic-fullwidth-main">
    <section class="content-panel dynamic-content-panel dynamic-form-panel">
      <div class="dynamic-txt-content dynamic-form-text">
    <?php
    $filePath = 'contact.txt';
    if (file_exists($filePath)) {
        echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
        echo '-';
    }
    ?>
      </div>
      <form class="contact-form" action="#" method="post">
  <div class="field"><label for="name">Naam</label><input id="name" name="name" type="text"></div>
  <div class="field"><label for="phone">Telefoon</label><input id="phone" name="phone" type="tel"></div>
  <div class="field"><label for="email">E-mail</label><input id="email" name="email" type="email"></div>
  <div class="field full"><label for="message">Bericht</label><textarea id="message" name="message"></textarea></div>
  <button class="submit-btn" type="submit">Verzenden</button>
  <p class="recaptcha dynamic-recaptcha">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>
</form>
    </section>
  </main>
</div>
<footer class="site-footer">
  <div>&copy; <?php echo date('Y'); ?> ZZpzo</div>
  <div><a href="terms.php">Algemene voorwaarden</a> <a href="complain.php">Klachtenportaal</a> <a href="privacy.php">Privacybeleid</a></div>
</footer>
<script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>
</html>
