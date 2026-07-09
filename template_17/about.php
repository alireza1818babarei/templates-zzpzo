<!DOCTYPE html>
<html lang="nl">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Over ons</title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="css/fontawesome-all.min.css?id=<?php echo filemtime('css/fontawesome-all.min.css'); ?>">
  <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
</head>
<body>
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="tm-container">
    <div class="tm-container-inner">

      <nav class="zz-top-nav">
        <a href="index.php" class="navbar-brand" id="brandLogo">
            <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
        </a>
        <button class="zz-menu-toggle" type="button" aria-label="Menu">☰</button>
        <div class="zz-menu-wrap">
          <ul class="zz-main-menu">
            <li><a class="" href="index.php">Startpagina</a></li>
            <li><a class="active" href="about.php">Over ons</a></li>
            <li><a class="" href="service.php">Diensten</a></li>
            <li><a class="" href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>

      <?php
$defaultBanner = "img/slopa-pic-01.jpg";
$bannerFile = "aboutimage.txt";

if (file_exists($bannerFile)) {
    $bannerUrl = trim(file_get_contents($bannerFile));
    if ($bannerUrl === "") {
        $bannerUrl = $defaultBanner;
    }
} else {
    $bannerUrl = $defaultBanner;
}
?>
      <section class="zz-hero-section" style="background-image: url('img/slopa-bottom-line.png'), url('<?php echo htmlspecialchars($bannerUrl); ?>');">
        <div class="col-xs-12 tm-bg-black-alpha tm-text-white text-center tm-site-header-box zz-hero-box">
          <h1 class="mb-0">Over ons</h1>
        </div>
      </section>

      <section class="zz-content-section">
        <div class="zz-content-card">
          <h2 class="tm-text-green mb-5">Over ons</h2>
          <div class="zz-dynamic-content text-content">
            <?php
            $filePath = 'about.txt';
            if (file_exists($filePath)) {
                echo nl2br(htmlspecialchars(file_get_contents($filePath)));
            } else {
                echo '-';
            }
            ?>
          </div>
        </div>
      </section>

      <footer class="zz-footer">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6"><p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p></div>
            <div class="col-sm-12 col-md-6 zz-footer-links">
              <a href="terms.php">Algemene voorwaarden</a>
              <a href="complain.php">Klachtenportaal</a>
              <a href="privacy.php">Privacybeleid</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="js/jquery-3.2.1.slim.min.js?id=<?php echo filemtime('js/jquery-3.2.1.slim.min.js'); ?>"></script>
  <script src="js/zz-dynamic.js?id=<?php echo filemtime('js/zz-dynamic.js'); ?>"></script>
</body>
</html>
