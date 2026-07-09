<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php
    $filePath = 'title.txt';
    if (file_exists($filePath)) {
      echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
      echo 'Diensten';
    }
    ?> - Diensten
  </title>
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="assets/css/dynamic-template.css?id=<?php echo filemtime('assets/css/dynamic-template.css'); ?>">
</head>

<body>
  <div class="site-shell">
    <header class="site-header">
      <a class="brand" href="index.php" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
      </a>
      <input class="nav-toggle" id="nav-toggle" type="checkbox">
      <label class="nav-trigger" for="nav-toggle" aria-label="Menu openen"><span></span><span></span><span></span></label>
      <nav class="main-nav" aria-label="Hoofdnavigatie">
        <a href="index.php">Startpagina</a>
        <a href="about.php">Over ons</a>
        <a class="active" href="service.php">Diensten</a>
        <a href="contact.php">Contact</a>
      </nav>
    </header>
    <?php
    $defaultHeroImage = "assets/images/hero.svg";
    $heroImageFile = "serviceimage.txt";

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
        <h1>Diensten</h1>
      </div>
      <figure class="hero-media"><img src="<?php echo htmlspecialchars($heroImageUrl); ?>" alt="Diensten"></figure>
    </section>
    <main class="page-main dynamic-fullwidth-main ">
      <section class="content-panel dynamic-content-panel">
        <div class="dynamic-txt-content">
          <?php
          $filePath = 'service.txt';
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
    <div>
      <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
    </div>
    <div><a href="terms.php">Algemene voorwaarden</a> <a href="complain.php">Klachtenportaal</a> <a href="privacy.php">Privacybeleid</a></div>
  </footer>
  <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>

</html>