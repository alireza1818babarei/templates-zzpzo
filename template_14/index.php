<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>
    <?php
    $filePath = 'title.txt';
    if (file_exists($filePath)) {
      echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
      echo 'Titel';
    }
    ?> - Startpagina
  </title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@300;400;600&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css?id=<?php echo filemtime('css/style.css'); ?>">
  <link rel="stylesheet" href="css/zz-responsive-fixes.css?id=<?php echo filemtime('css/zz-responsive-fixes.css'); ?>">
</head>

<body>
  <header class="site-header">
    <div class="nav-shell">
      <a href="index.php" class="navbar-brand" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
      </a>
      <button class="nav-toggle" type="button" aria-label="Menu openen/sluiten" aria-expanded="false">&#9776;</button>
      <nav class="nav-menu">
        <ul>
          <li><a href="index.php" class="active">Startpagina</a></li>
          <li><a href="about.php" class="">Over ons</a></li>
          <li><a href="service.php" class="">Diensten</a></li>
          <li><a href="contact.php" class="">Contact</a></li>
        </ul>
      </nav>
    </div>
  </header>
  <main>
    <?php
    $defaultBanner = "img/bg-img-01.jpg";
    $bannerFile = "homeimage.txt";

    if (file_exists($bannerFile)) {
      $bannerUrl = trim(file_get_contents($bannerFile));
      if ($bannerUrl === "") {
        $bannerUrl = $defaultBanner;
      }
    } else {
      $bannerUrl = $defaultBanner;
    }
    ?>
    <?php
    $contentBanner = "img/bg-img-02.jpg";
    ?>
    <section class="hero-full" style="background-image: url('<?php echo htmlspecialchars($bannerUrl); ?>');">
      <div class="hero-inner">
        <h1>Startpagina</h1>
      </div>
      <div class="band-inner">
        <div class="wide-card">
          <div class="content-body text-content zz-home-text-wrap">
            <?php
            $filePath = 'home.txt';
            if (file_exists($filePath)) {
              echo nl2br(htmlspecialchars(file_get_contents($filePath)));
            } else {
              echo '-';
            }
            ?>
          </div>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="footer-inner">
      <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
      <div class="footer-links">
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
      </div>
    </div>
  </footer>
  <script src="js/main.js?id=<?php echo filemtime('js/main.js'); ?>"></script>
</body>

</html>