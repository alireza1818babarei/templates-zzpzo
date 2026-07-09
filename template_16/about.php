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
?> - Over ons</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
    <link rel="stylesheet" href="css/fontawesome-all.min.css?id=<?php echo filemtime('css/fontawesome-all.min.css'); ?>">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" type="text/css" href="css/magnific-popup.css?id=<?php echo filemtime('css/magnific-popup.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="slick/slick.css?id=<?php echo filemtime('slick/slick.css'); ?>"/>
    <link rel="stylesheet" type="text/css" href="slick/slick-theme.css?id=<?php echo filemtime('slick/slick-theme.css'); ?>"/>
    <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
</head>
<?php
$defaultBanner = "img/constructive_bg_01.jpg";
$bannerFile = "aboutimage.txt";

if (file_exists($bannerFile)) {
    $bannerUrl = trim(file_get_contents($bannerFile));
    if ($bannerUrl === "") {
        $bannerUrl = $defaultBanner;
    }
} else {
    $bannerUrl = $defaultBanner;
}
?>
<body style="background-image: url('<?php echo htmlspecialchars($bannerUrl); ?>');">
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
          <li><a href="index.php" class=""><i class="fas fa-home tm-nav-fa-icon"></i><span>Startpagina</span></a></li><li><a href="about.php" class="active"><i class="fas fa-info-circle tm-nav-fa-icon"></i><span>Over ons</span></a></li><li><a href="service.php" class=""><i class="fas fa-map tm-nav-fa-icon"></i><span>Diensten</span></a></li><li><a href="contact.php" class=""><i class="fas fa-comments tm-nav-fa-icon"></i><span>Contact</span></a></li>
        </ul></nav>
      </div>
    </div>
    <div class="col-xl-9 col-lg-8 col-md-12 col-sm-12 tm-content">

<section class="tm-section zz-content-box">
  <div class="ml-auto">
    <header class="mb-4"><h1 class="tm-text-shadow">Over ons</h1></header>
    <div class="mb-5 tm-font-big zz-dynamic-content text-content">
      <?php
      $filePath = 'about.txt';
      if (file_exists($filePath)) {
          echo nl2br(htmlspecialchars(file_get_contents($filePath)));
      } else {
          echo '-';
      }
      ?>
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
