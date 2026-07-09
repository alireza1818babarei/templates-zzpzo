<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
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
  <link rel="stylesheet" href="css/all.min.css?id=<?php echo filemtime('css/all.min.css'); ?>" />
  <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>" />
</head>

<body>

  <div class="zz-logo-header">
    <div class="zz-logo-box">
      <a href="index.php" class="navbar-brand" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:50px;margin-top:-5px;" onerror="this.remove();">
      </a>
    </div>
  </div>

  <div class="tm-nav-section">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <nav class="navbar navbar-expand-md navbar-light">
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#tmMainNav"
              aria-controls="tmMainNav" aria-expanded="false" aria-label="Navigatie openen/sluiten">
              <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="tmMainNav">
              <ul class="navbar-nav tm-navbar-nav">
                <li class="nav-item active">
                  <a class="nav-link current" href="index.php">Startpagina</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="about.php">Over ons</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="service.php">Diensten</a>
                </li>
                <li class="nav-item ">
                  <a class="nav-link " href="contact.php">Contact</a>
                </li>
              </ul>
            </div>
          </nav>
        </div>
      </div>
    </div>
  </div>

  <?php
  $defaultBanner = "img/img-activities.jpg";
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
  <section class="zz-hero-section" style="background-image: url('<?php echo htmlspecialchars($bannerUrl); ?>');">
    <div class="zz-hero-content">
      <h1 class="zz-hero-title">Startpagina</h1>
    </div>
  </section>

  <section class="container zz-dynamic-section">
    <div class="zz-dynamic-wrap">
      <h2 class="zz-dynamic-title">Startpagina</h2>
      <div class="zz-dynamic-content text-content">
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
  </section>

  <footer class="container tm-footer">
    <div class="row tm-footer-row zz-footer-row">
      <p class="col-md-6 col-sm-12 mb-0">Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
      <div class="col-md-6 col-sm-12 zz-footer-links">
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
      </div>
    </div>
  </footer>
  <script src="js/jquery-1.9.1.min.js?id=<?php echo filemtime('js/jquery-1.9.1.min.js'); ?>"></script>
  <script src="js/bootstrap.min.js?id=<?php echo filemtime('js/bootstrap.min.js'); ?>"></script>
</body>

</html>
