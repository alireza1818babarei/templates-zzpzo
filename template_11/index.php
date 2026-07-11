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
  $version = time();

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

  <link rel="stylesheet" href="assets/css/main.css?id=<?= $version ?>" />
  <noscript>
    <link rel="stylesheet" href="assets/css/noscript.css?id=<?= $version ?>" />
  </noscript>
  <style>
    .zz-home-page #footer .copyright .zz-legal-link {
      display: inline-block;
      margin: 0.25rem 0.35rem;
      font-size: clamp(0.95rem, 1.2vw, 1rem);
      font-weight: 300;
      letter-spacing: 0.12rem;
      text-transform: uppercase;
    }

    @media screen and (max-width: 736px) {
      .zz-home-page #footer .copyright .zz-legal-link {
        display: block;
        margin: 0.45rem 0;
        font-size: 1rem;
      }

      .zz-home-page #footer .copyright .zz-link-separator {
        display: none;
      }
    }
  </style>
</head>

<body class="is-preload zz-home-page">

  <div id="wrapper">

    <header id="header">
      <div class="logo">
        <a href="index.php" class="navbar-brand" id="brandLogo" style="width: 100%; height: 100%; border-bottom: 0; display: flex ; align-items: center; justify-content: center;" >
          <img src="logo.png?id=<?= $version ?>" alt="Logo" style="width:100%;" onerror="this.remove();">
        </a>
      </div>

      <div class="content">
        <div class="inner">
          <h1>Startpagina</h1>
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
        <a href="terms.php" class="zz-legal-link">Algemene voorwaarden</a><span class="zz-link-separator"> &nbsp;|&nbsp; </span>
        <a href="complain.php" class="zz-legal-link">Klachtenportaal</a><span class="zz-link-separator"> &nbsp;|&nbsp; </span>
        <a href="privacy.php" class="zz-legal-link">Privacybeleid</a>
        <br /><br />
        Auteursrecht &copy; <?= date('Y') ?> ZZpzo
      </p>
    </footer>

  </div>

  <div id="bg">
    <img
      class="zz-home-background"
      src="<?= htmlspecialchars($pageImage, ENT_QUOTES, 'UTF-8') ?>"
      alt=""
      aria-hidden="true"
    />
  </div>

  <script src="assets/js/jquery.min.js?id=<?= $version ?>"></script>
  <script src="assets/js/browser.min.js?id=<?= $version ?>"></script>
  <script src="assets/js/breakpoints.min.js?id=<?= $version ?>"></script>
  <script src="assets/js/util.js?id=<?= $version ?>"></script>
  <script src="assets/js/main.js?id=<?= $version ?>"></script>

</body>

</html>
