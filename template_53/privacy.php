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
    echo 'Privacy';
}
?> - Privacy</title>
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
</head>
<body>
  <header class="site-header">
    <a class="brand" href="index.php" id="brandLogo"><img src="logo.png" alt="Logo" onerror="this.remove();"></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primaryNav" aria-label="Open menu"><span></span><span></span><span></span></button>
    <nav class="nav" id="primaryNav"><a href="index.php"><span>Home</span></a><a href="about.php"><span>About Us</span></a><a href="service.php"><span>Services</span></a><a href="contact.php"><span>Contact</span></a></nav>
  </header>
  <main>
  <section class="simple-page" id="content">
      <div class="simple-card dynamic-content">
        <?php
$filePath = 'privacy.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo '-';
}
?>
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
