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
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800;900&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
</head>
<body>
  <header class="site-header">
    <a class="brand" href="index.php" id="brandLogo"><img src="logo.png" alt="Logo" onerror="this.remove();"></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primaryNav" aria-label="Open menu"><span></span><span></span><span></span></button>
    <nav class="nav" id="primaryNav"><a href="index.php"><span>Home</span></a><a href="about.php"><span>About Us</span></a><a href="service.php"><span>Services</span></a><a href="contact.php" class="active"><span>Contact</span></a></nav>
  </header>
  <main>
  <?php
$defaultHeroImage = 'assets/images/hero.svg';
$heroImageFile = 'contactimage.txt';

if (file_exists($heroImageFile)) {
    $heroImageUrl = trim(file_get_contents($heroImageFile));
    if ($heroImageUrl === '') {
        $heroImageUrl = $defaultHeroImage;
    }
} else {
    $heroImageUrl = $defaultHeroImage;
}
?>
  <section class="page-hero">
      <img src="<?php echo htmlspecialchars($heroImageUrl); ?>" alt="Contact">
      <h1>Contact</h1>
    </section>
  <section class="contact-area" id="content">
      <div class="contact-layout">
        <div class="contact-copy dynamic-content">
          <?php
$filePath = 'contact.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo '-';
}
?>
        </div>
        <div class="form-wrap">
          <form class="contact-form" action="#" method="post">
            <div class="field"><label for="name">Name</label><input id="name" name="name" type="text" placeholder="Name" required></div>
            <div class="field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel" placeholder="Phone" required></div>
            <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" placeholder="Email" required></div>
            <div class="field field-full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Message" required></textarea></div>
            <button class="btn form-submit" type="submit"><span>Submit</span></button>
          </form>
          <p class="form-note dynamic-recaptcha-note">This site is protected by reCAPTCHA, the Google <a href="privacy.php" class="recaptcha-link">Privacy Policy</a> and <a href="terms.php" class="recaptcha-link">Terms of Service</a> apply.</p>
        </div>
      </div>
    </section>
  </main>
  <footer class="site-footer">
    <div class="footer-links">
      <a href="terms.php">TERMS</a>
      <a href="complain.php">COMPLAINTS</a>
      <a href="privacy.php">PRIVACY</a>
    </div>
    <p class="mb-0">Copyright &copy; <?php echo date('Y'); ?> ZZpzo</p>
  </footer>
  <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>
</html>
