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
      <a href="contact.php">Contact</a>
    </nav>
  </header>
  <main class="page-main dynamic-fullwidth-main dynamic-no-hero">
    <section class="content-panel dynamic-content-panel">
      <div class="dynamic-txt-content">
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
</div>
<footer class="site-footer">
  <div><p>Copyright &copy; <?php echo date('Y'); ?> ZZpzo</p></div>
  <div><a href="terms.php">TERMS</a> <a href="complain.php">COMPLAINTS</a> <a href="privacy.php">PRIVACY</a></div>
</footer>
<script src="assets/js/main.js"></script>
</body>
</html>