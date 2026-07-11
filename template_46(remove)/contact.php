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
    echo 'Contact';
}
?> - Contact</title>
  <link rel="stylesheet" href="assets/css/style.css?v=20260703-fix1">
  <link rel="stylesheet" href="assets/css/dynamic-template.css?v=20260703-fix1">
</head>
<body><div class="site-shell">
  <header class="site-header">
    <a class="brand" href="index.php" id="brandLogo">
  <img src="logo.png" alt="Logo" onerror="this.remove();">
</a>
    <input class="nav-toggle" id="nav-toggle" type="checkbox">
    <label class="nav-trigger" for="nav-toggle" aria-label="Open menu"><span></span><span></span><span></span></label>
    <nav class="main-nav" aria-label="Main navigation">
      <a href="index.php">Home</a>
      <a href="about.php">About Us</a>
      <a href="service.php">Services</a>
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
  <div class="field"><label for="name">Name</label><input id="name" name="name" type="text"></div>
  <div class="field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel"></div>
  <div class="field"><label for="email">Email</label><input id="email" name="email" type="email"></div>
  <div class="field full"><label for="message">Message</label><textarea id="message" name="message"></textarea></div>
  <button class="submit-btn" type="submit">Submit</button>
  <p class="recaptcha dynamic-recaptcha">This site is protected by reCAPTCHA, the Google <a href="privacy.php">Privacy Policy</a> and <a href="terms.php">Terms of Service</a> apply.</p>
</form>
    </section>
  </main>
</div>
<footer class="site-footer">
  <div><p>Copyright &copy; <?php echo date('Y'); ?> ZZpzo</p></div>
  <div><a href="terms.php">TERMS</a> <a href="complain.php">COMPLAINTS</a> <a href="privacy.php">PRIVACY</a></div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>