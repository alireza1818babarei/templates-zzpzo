<!DOCTYPE HTML>
<!--
  Dimension by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license
-->
<html lang="nl">

<head>
  <meta charset="utf-8" />

  <?php
  $titleFile = 'title.txt';
  $siteTitle = 'Titel';

  if (file_exists($titleFile)) {
    $titleContent = file_get_contents($titleFile);

    if ($titleContent !== false && trim($titleContent) !== '') {
      $siteTitle = trim($titleContent);
    }
  }

  $imageFile = 'homeimage.txt';
  $pageImage = 'images/pic01.jpg';

  if (file_exists($imageFile)) {
    $savedImage = file_get_contents($imageFile);

    if ($savedImage !== false && trim($savedImage) !== '') {
      $pageImage = trim($savedImage);
    }
  }
  ?>

  <title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  <link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css?id=<?php echo filemtime('assets/css/noscript.css'); ?>" />
  </noscript>
</head>

<body class="is-preload">

  <div id="wrapper">

    <header id="header">
      <div class="logo">
        <a href="index.php" class="navbar-brand" id="brandLogo" style="width: 100%; height: 100%; border-bottom: 0; display: flex ; align-items: center; justify-content: center;" >
          <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:100%;" onerror="this.remove();">
        </a>
      </div>

      <div class="content">
        <div class="inner">
          <h1><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></h1>
          <p>Welkom op onze website.</p>
        </div>
      </div>

      <nav>
        <ul>
          <li><a href="index.php">Startpagina</a></li>
          <li><a href="about.php">Over ons</a></li>
          <li><a href="service.php">Diensten</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </nav>
    </header>

    <div id="main">

      <article id="home">
        <h2 class="major">Startpagina</h2>

        <span class="image main">
          <img src="<?= htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') ?>" alt="Startpagina" />
        </span>

        <p class="zz-home-text-wrap">
          <?php
          $contentFile = 'home.txt';

          if (file_exists($contentFile)) {
            $content = file_get_contents($contentFile);

            if ($content !== false && trim($content) !== '') {
              echo nl2br(
                htmlspecialchars(
                  trim($content),
                  ENT_QUOTES,
                  'UTF-8'
                )
              );
            } else {
              echo '-';
            }
          } else {
            echo '-';
          }
          ?>
        </p>
      </article>

    </div>

    <footer id="footer">
      <p class="copyright">
        <a href="terms.php">Algemene voorwaarden</a> &nbsp;|&nbsp;
        <a href="complain.php">Klachtenportaal</a> &nbsp;|&nbsp;
        <a href="privacy.php">Privacybeleid</a>
        <br />
        Auteursrecht &copy; <?= date('Y') ?> ZZpzo
      </p>
    </footer>

  </div>

  <div id="bg"></div>

  <script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
  <script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
  <script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
  <script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
  <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>

</body>

</html>
