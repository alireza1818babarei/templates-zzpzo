<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Klachtenportaal</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/fontawesome-all.min.css?id=<?php echo filemtime('css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css?id=<?php echo filemtime('css/magnific-popup.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css?id=<?php echo filemtime('slick/slick.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css?id=<?php echo filemtime('slick/slick-theme.css'); ?>"/>
    <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
</head>

<body style="background-image: url('img/constructive_bg_04.jpg');">
<div class="zz-page-shell">

<div class="container-fluid tm-main">
  <div class="row tm-main-row">
    <div id="tmSideBar" class="col-xl-3 col-lg-4 col-md-12 col-sm-12 sidebar">
      <button id="tmMainNavToggle" class="menu-icon">&#9776;</button>
      <div class="inner">
        <a href="index.php" class="navbar-brand" id="brandLogo">
            <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
        </a>
        <nav id="tmMainNav" class="tm-main-nav"><ul>
          <li><a href="index.php" class=""><i class="fas fa-home tm-nav-fa-icon"></i><span>Startpagina</span></a></li><li><a href="about.php" class=""><i class="fas fa-info-circle tm-nav-fa-icon"></i><span>Over ons</span></a></li><li><a href="service.php" class=""><i class="fas fa-map tm-nav-fa-icon"></i><span>Diensten</span></a></li><li><a href="contact.php" class=""><i class="fas fa-comments tm-nav-fa-icon"></i><span>Contact</span></a></li>
        </ul></nav>
      </div>
    </div>
    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

<section class="tm-section zz-form-box">
  <div class="tm-bg-transparent-black tm-contact-box-pad">
    <div class="row mb-4">
      <div class="col-sm-12"><header><h2 class="tm-text-shadow">Klachtenportaal</h2></header></div>
    </div>
    <div class="row tm-page-4-content">
      <div class="col-md-6 col-sm-12 tm-contact-col">
        <div class="contact_message">
          <form action="#" method="post" class="contact-form">
            <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Naam"></div>
            <div class="form-group"><input type="text" name="phone" class="form-control" placeholder="Telefoon"></div>
            <div class="form-group"><input type="email" name="email" class="form-control" placeholder="E-mail"></div>
            <div class="form-group"><textarea name="message" class="form-control" rows="9" placeholder="Bericht"></textarea></div>
            <button type="submit" class="btn tm-btn-submit tm-btn ml-auto">Verzenden</button>
          </form>
          <div class="zz-form-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
        </div>
      </div>
      <div class="col-md-6 col-sm-12 tm-contact-col">
        <div class="tm-address-box zz-dynamic-content text-content">
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
  </div>
</section>

    </div>
    <footer class="footer-link">
      <div class="tm-copyright-text"><p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p></div>
      <div class="zz-footer-links">
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
      </div>
    </footer>
  </div>
</div>
<script type="text/javascript" src="js/jquery-3.2.1.min.js?id=<?php echo filemtime('js/jquery-3.2.1.min.js'); ?>"></script>
<script type="text/javascript" src="js/jquery.magnific-popup.min.js?id=<?php echo filemtime('js/jquery.magnific-popup.min.js'); ?>"></script>
<script type="text/javascript" src="slick/slick.min.js?id=<?php echo filemtime('slick/slick.min.js'); ?>"></script>
<script type="text/javascript" src="js/zz-dynamic.js?id=<?php echo filemtime('js/zz-dynamic.js'); ?>"></script>
</div>
</body>
</html>
