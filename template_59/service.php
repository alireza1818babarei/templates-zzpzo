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
    echo 'Services';
}
?> - Services</title>
  <link rel="stylesheet" href="assets/css/style.css">
</head>
<body >
  <header class="site-header"><a class="brand" href="index.php" id="brandLogo"><img src="logo.png" alt="Logo" onerror="this.remove();"></a><nav class="nav"><a href="index.php"><span>Home</span></a><a href="about.php"><span>About Us</span></a><a href="service.php" class="active"><span>Services</span></a><a href="contact.php"><span>Contact</span></a></nav></header>
  <main>
  <?php
$defaultHeroImage = 'assets/images/hero.svg';
$heroImageFile = 'serviceimage.txt';

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
      <img src="<?php echo htmlspecialchars($heroImageUrl); ?>" alt="Services">
      <h1>Services</h1>
    </section>
  <section class="content-section" id="content">
      <div class="content-wrap">
        <div class="dynamic-content">
          <?php
$filePath = 'service.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo '-';
}
?>
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
  <script src="assets/js/main.js"></script>
</body>
</html>
