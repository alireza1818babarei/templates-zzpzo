<!DOCTYPE HTML>
<!--
  Big Picture by HTML5 UP
  Adapted as a standalone PHP page for ZZPZO.
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
  ?>

  <title><?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Diensten</title>
  <meta name="description" content="<?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> - Diensten" />
  <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

  <link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
  <noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?php echo filemtime('assets/css/noscript.css'); ?>" /></noscript>

    <style>
      #header #brandLogo {
        display: inline-flex;
        align-items: center;
        height: 70%;
        justify-content: center;
      }

      #header #brandLogo img {
        display: block;
        width: 100%;
        height: 100%;
      }

      #header nav ul {
        white-space: nowrap;
      }

      #header nav ul li.active > a {
        font-weight: 700;
        text-decoration: underline;
        text-underline-offset: 0.25rem;
      }

      .zzpzo-page-hero {
        min-height: 55vh !important;
      }

      .zzpzo-rich-text {
        line-height: 1.8;
        overflow-wrap: anywhere;
        text-align: left;
      }

      .zzpzo-legal-links a {
        text-decoration: none;
      }

      @media screen and (max-width: 980px) {
        #header {
          flex-wrap: wrap;
          gap: 0.5rem;
        }

        #header nav {
          overflow-x: auto;
          max-width: 100%;
        }

        #header nav ul li {
          margin-left: 0.7rem;
        }
      }
    </style>

</head>

<body class="is-preload zzpzo-responsive-page">
 <header id="header">
    <h1 style="display: flex; align-items: center;">
      <a href="index.php" id="brandLogo" aria-label="Naar de startpagina">
        <img
        style="height: 100%;"
          src="logo.png?id=<?php echo filemtime('logo.png'); ?>"
          alt="<?= htmlspecialchars($siteTitle, ENT_QUOTES, 'UTF-8') ?> Logo"
          onerror="this.remove();"
        />
      </a>
    </h1>

    <button class="zzpzo-menu-toggle" type="button" aria-label="Menu openen" aria-expanded="false" aria-controls="primaryNavigation">
      <span></span><span></span><span></span>
    </button>

    <nav id="primaryNavigation" aria-label="Primaire navigatie">
      <ul>
          <li><a href="index.php">Startpagina</a></li>
          <li><a href="about.php">Over ons</a></li>
          <li class="active"><a href="service.php">Diensten</a></li>
          <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>
  <?php
  $defaultBanner = 'img/banner-bg.jpg';
  $bannerFile = 'serviceimage.txt';
  $bannerUrl = $defaultBanner;

  if (file_exists($bannerFile)) {
    $savedBannerUrl = file_get_contents($bannerFile);

    if ($savedBannerUrl !== false && trim($savedBannerUrl) !== '') {
      $bannerUrl = trim($savedBannerUrl);
    }
  }
  ?>

  <section
    id="services-hero"
    class="main style1 dark fullscreen"
    style="background-image: linear-gradient(rgba(0, 0, 0, 0.38), rgba(0, 0, 0, 0.38)), url('<?= htmlspecialchars($bannerUrl, ENT_QUOTES, 'UTF-8') ?>');"
  >
    <div class="content">
      <header>
        <h2>Diensten</h2>
      </header>
    </div>
  </section>
  <section class="main style3 primary">
    <div class="content">

      <div class="box">
        <div class="zzpzo-rich-text">
          <?php
          $contentFile = 'service.txt';

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
        </div>
      </div>
    </div>
  </section>
  <footer id="footer">
    <ul class="icons zzpzo-legal-links">
      <li><a href="terms.php">Algemene voorwaarden</a></li>
      <li><a href="complain.php">Klachtenportaal</a></li>
      <li><a href="privacy.php">Privacybeleid</a></li>
    </ul>

    <ul class="menu">
      <li>Auteursrecht &copy; <?= date('Y') ?> ZZpzo</li>
    </ul>
  </footer>

    <script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
    <script src="assets/js/jquery.poptrox.min.js?id=<?php echo filemtime('assets/js/jquery.poptrox.min.js'); ?>"></script>
    <script src="assets/js/jquery.scrolly.min.js?id=<?php echo filemtime('assets/js/jquery.scrolly.min.js'); ?>"></script>
    <script src="assets/js/jquery.scrollex.min.js?id=<?php echo filemtime('assets/js/jquery.scrollex.min.js'); ?>"></script>
    <script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
    <script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
    <script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
    <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>

</body>
</html>
