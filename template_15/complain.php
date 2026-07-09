<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Klachtenportaal</title>
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
<link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="css/animate.css?id=<?php echo filemtime('css/animate.css'); ?>">
<link rel="stylesheet" href="css/magnific-popup.css?id=<?php echo filemtime('css/magnific-popup.css'); ?>">
<link rel="stylesheet" href="css/font-awesome.min.css?id=<?php echo filemtime('css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">
<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>

<nav class="zz-navbar">
  <div class="zz-nav-inner">
    <a href="index.php" class="navbar-brand" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
    </a>
    <button type="button" class="zz-menu-toggle" aria-label="Menu"><i class="fa fa-bars"></i></button>
    <div class="zz-main-menu-wrap">
      <ul class="zz-main-menu">
        <li><a class="" href="index.php">Startpagina</a></li>
        <li><a class="" href="about.php">Over ons</a></li>
        <li><a class="" href="service.php">Diensten</a></li>
        <li><a class="" href="contact.php">Contact</a></li>
      </ul>
    </div>
  </div>
</nav>

<section id="dynamic-content-section" class="zz-dynamic-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="zz-wide-card wow fadeInUp" data-wow-delay="0.2s">
          <div class="wow fadeInUp section-title" data-wow-delay="0.2s">
              <h2>Klachtenportaal</h2>
            </div>
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
    </div>
  </div>
</section>

<section id="form-section" class="zz-form-section">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="zz-form-card wow fadeInUp" data-wow-delay="0.2s">
          <div class="section-title">
            <h2>Klachtenportaal</h2>
          </div>
          <form action="#" method="post" id="complain-form">
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="name" placeholder="Naam">
            </div>
            <div class="col-md-6 col-sm-6">
              <input type="text" class="form-control" name="phone" placeholder="Telefoon">
            </div>
            <div class="col-md-12 col-sm-12">
              <input type="email" class="form-control" name="email" placeholder="E-mail">
            </div>
            <div class="col-md-12 col-sm-12">
              <textarea class="form-control" rows="5" name="message" placeholder="Bericht"></textarea>
            </div>
            <div class="col-md-offset-3 col-md-6 col-sm-offset-3 col-sm-6">
              <button id="submit" type="submit" class="form-control" value="submit" name="submit">Verzenden</button>
            </div>
          </form>
          <div class="form-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer class="zz-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
      </div>
      <div class="col-md-6 col-sm-6 zz-footer-links">
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
      </div>
    </div>
  </div>
</footer>
<script src="js/jquery.js?id=<?php echo filemtime('js/jquery.js'); ?>"></script>
<script src="js/bootstrap.min.js?id=<?php echo filemtime('js/bootstrap.min.js'); ?>"></script>
<script src="js/jquery.parallax.js?id=<?php echo filemtime('js/jquery.parallax.js'); ?>"></script>
<script src="js/jquery.magnific-popup.min.js?id=<?php echo filemtime('js/jquery.magnific-popup.min.js'); ?>"></script>
<script src="js/magnific-popup-options.js?id=<?php echo filemtime('js/magnific-popup-options.js'); ?>"></script>
<script src="js/smoothscroll.js?id=<?php echo filemtime('js/smoothscroll.js'); ?>"></script>
<script src="js/wow.min.js?id=<?php echo filemtime('js/wow.min.js'); ?>"></script>
<script src="js/custom.js?id=<?php echo filemtime('js/custom.js'); ?>"></script>
<script src="js/zz-dynamic.js?id=<?php echo filemtime('js/zz-dynamic.js'); ?>"></script>
</body>
</html>
