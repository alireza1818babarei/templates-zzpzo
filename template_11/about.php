<!DOCTYPE HTML>
<!--
  Dimension by HTML5 UP
  html5up.net | @ajlkn
  Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html lang="nl">

<head>
  <meta charset="utf-8" />

  <?php
  $version = time();

  $titleFile = 'title.txt';
  $siteTitle = 'Titel';

  if (file_exists($titleFile)) {
    $titleContent = file_get_contents($titleFile);

    if ($titleContent !== false && trim($titleContent) !== '') {
      $siteTitle = trim($titleContent);
    }
  }

  $imageFile = 'aboutimage.txt';
  $pageImage = 'images/pic03.jpg';

  if (file_exists($imageFile)) {
    $savedImage = file_get_contents($imageFile);

    if ($savedImage !== false && trim($savedImage) !== '') {
      $pageImage = trim($savedImage);
    }
  }
  ?>

  <title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Over ons</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
  <link rel="stylesheet" href="assets/css/main.css?id=<?= $version ?>" />
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css?id=<?= $version ?>" />
  </noscript>
</head>

<body class="is-preload">

  <!-- Wrapper -->
  <div id="wrapper">

    <!-- Header -->
    <header id="header">
      <div class="logo">
        <a href="index.php" class="navbar-brand" id="brandLogo" style="width: 100%; height: 100%; border-bottom: 0; display: flex ; align-items: center; justify-content: center;" >
          <img src="logo.png?id=<?= $version ?>" alt="Logo" style="width:100%;" onerror="this.remove();">
        </a>
      </div>

      <div class="content">
        <div class="inner">
          <h1><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?></h1>
          <p>Over ons</p>
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

    <!-- Main -->
    <div id="main">

      <article id="about">
        <h2 class="major">Over ons</h2>
        <span class="image main">
          <img src="<?= htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') ?>" alt="Over ons" />
        </span>
        <p>
          <?php
          $contentFile = 'about.txt';

          if (file_exists($contentFile)) {
            $content = file_get_contents($contentFile);

            if ($content !== false && trim($content) !== '') {
              echo nl2br(htmlspecialchars(trim($content), ENT_QUOTES, 'UTF-8'));
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

    <!-- Footer -->
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

  <!-- BG -->
  <div id="bg"></div>

  <!-- Open this page's native Dimension article -->
  <script>
    if (!window.location.hash) {
      window.location.hash = '#about';
    }
  </script>

  <!-- Scripts -->
  <script src="assets/js/jquery.min.js?id=<?= $version ?>"></script>
  <script src="assets/js/browser.min.js?id=<?= $version ?>"></script>
  <script src="assets/js/breakpoints.min.js?id=<?= $version ?>"></script>
  <script src="assets/js/util.js?id=<?= $version ?>"></script>
  <script src="assets/js/main.js?id=<?= $version ?>"></script>

</body>

</html>
