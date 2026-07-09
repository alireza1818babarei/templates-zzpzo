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
</head>
<body><header class="site-header"><a class="brand" href="index.php" id="brandLogo">
  <img style="width: 150px" src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
</a><button class="menu-toggle" type="button">Menu</button><nav class="nav-links"><a class="" href="index.php">Startpagina</a><a class="" href="about.php">Over ons</a><a class="" href="service.php">Diensten</a><a class="active" href="contact.php">Contact</a></nav></header><main><?php
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
<section class="hero"><div class="hero-inner"><h1>Contact</h1></div><div class="hero-art" style="background-image:url('<?php echo htmlspecialchars($heroImageUrl); ?>');" aria-hidden="true"></div></section><section class="section dynamic-fullwidth-section"><div class="bubble dynamic-content-panel dynamic-form-panel"><div class="dynamic-txt-content dynamic-form-text"><?php
    $filePath = 'contact.txt';
    if (file_exists($filePath)) {
        echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
        echo '-';
    }
    ?></div>
<form class="site-form" action="#" method="post">
  <label>Naam<input type="text" id="name" name="name"></label>
  <label>Telefoon<input type="tel" id="phone" name="phone"></label>
  <label>E-mail<input type="email" id="email" name="email"></label>
  <label>Bericht<textarea id="message" name="message"></textarea></label>
  <button class="primary-btn" type="submit">Verzenden</button>
</form>
<p class="recaptcha-note dynamic-recaptcha">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>
</div></section></main><footer class="site-footer"><span>&copy; <?php echo date('Y'); ?> ZZpzo</span><nav><a href="terms.php">Algemene voorwaarden</a><a href="complain.php">Klachtenportaal</a><a href="privacy.php">Privacybeleid</a></nav></footer><script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>
</html>
