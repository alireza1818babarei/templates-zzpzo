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
    ?> - Klachtenportaal
  </title>
  <link rel="stylesheet" href="css/all.min.css?id=<?php echo filemtime('css/all.min.css'); ?>" />
  <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>" />
  <link rel="stylesheet" href="css/zz-mobile-layout-fix.css?id=<?php echo filemtime('css/zz-mobile-layout-fix.css'); ?>" />
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
              <ul class="navbar-nav mx-auto tm-navbar-nav">
                <li class="nav-item ">
                  <a class="nav-link " href="index.php">Startpagina</a>
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

  <section class="container zz-form-section">
    <div class="col-xl-5 col-lg-6 col-md-12 tm-contact-left">
      <div class="tm-contact-form-container zz-contact-form-container ml-auto mr-0">
        <header>
          <h2 class="tm-contact-header">Klachtenportaal</h2>
        </header>
        <form action="#" class="tm-contact-form zz-contact-form" method="POST">
          <div class="form-group">
            <input type="text" name="name" class="form-control" placeholder="Naam">
          </div>
          <div class="form-group">
            <input type="text" name="phone" class="form-control" placeholder="Telefoon">
          </div>
          <div class="form-group">
            <input type="email" name="email" class="form-control" placeholder="E-mail">
          </div>
          <div class="form-group">
            <textarea rows="5" name="message" class="form-control" placeholder="Bericht"></textarea>
          </div>
          <div class="tm-text-right">
            <button type="submit" class="btn tm-btn tm-btn-big">Verzenden</button>
          </div>
        </form>
        <div class="zz-form-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
      </div>
    </div>
    <div class="col-xl-7 col-lg-6 col-md-12 tm-contact-right">
      <div class="zz-contact-copy">
        <h2>Klachtenportaal</h2>
        <div class="zz-dynamic-content text-content">
          <?php
          $filePath = 'complain.txt';
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