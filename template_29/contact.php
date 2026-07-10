<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Contact</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="css/bootstrap-theme.min.css?id=<?php echo filemtime('css/bootstrap-theme.min.css'); ?>">
    <link rel="stylesheet" href="css/fontAwesome.css?id=<?php echo filemtime('css/fontAwesome.css'); ?>">
    <link rel="stylesheet" href="css/hero-slider.css?id=<?php echo filemtime('css/hero-slider.css'); ?>">
    <link rel="stylesheet" href="css/owl-carousel.css?id=<?php echo filemtime('css/owl-carousel.css'); ?>">
    <link rel="stylesheet" href="css/datepicker.css?id=<?php echo filemtime('css/datepicker.css'); ?>">
    <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
    <link rel="stylesheet" href="css/zz-form-mobile-fix.css?id=<?php echo filemtime('css/zz-form-mobile-fix.css'); ?>">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:100,200,300,400,500,600,700,800,900" rel="stylesheet">
</head>
<body>
<div class="zz-page">

<?php
$defaultBanner = "img/GettyImages.jpg";
$bannerFile = "contactimage.txt";

if (file_exists($bannerFile)) {
    $bannerUrl = trim(file_get_contents($bannerFile));
    if ($bannerUrl === "") {
        $bannerUrl = $defaultBanner;
    }
} else {
    $bannerUrl = $defaultBanner;
}
?>
<section class="zz-hero" style="background-image: url('<?php echo htmlspecialchars($bannerUrl); ?>');">
    
<header class="zz-header">
    <div class="zz-logo-slot">
        <a href="index.php" class="navbar-brand" id="brandLogo">
            <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:50px;margin-top:-5px;" onerror="this.remove();">
        </a>
    </div>
    <nav class="zz-menu-wrap">
        <button class="zz-menu-toggle" type="button">Menu</button>
        <ul class="zz-menu">
            <li><a href="index.php" class="">Startpagina</a></li>
<li><a href="about.php" class="">Over ons</a></li>
<li><a href="service.php" class="">Diensten</a></li>
<li><a href="contact.php" class="active">Contact</a></li>
        </ul>
    </nav>
</header>

    <div class="zz-hero-inner">
        <div class="zz-title-panel">
            <h1>Contact</h1>
        </div>
    </div>
</section>

<section class="zz-form-section">
    <div class="zz-form-shell">
        <div class="zz-form-row">
            <div class="zz-form-copy">
                <h2>Contact</h2>
                <div class="zz-dynamic-content text-content zz-form-copy-scroll">
                    <?php
                    $filePath = 'contact.txt';
                    if (file_exists($filePath)) {
                        echo nl2br(htmlspecialchars(file_get_contents($filePath)));
                    } else {
                        echo '-';
                    }
                    ?>
                </div>
            </div>
            <div class="zz-form-card">
                <h2>Contact</h2>
                <form action="#" method="post">
                    <div class="zz-form-grid">
                        <input type="text" name="name" placeholder="Naam">
                        <input type="text" name="phone" placeholder="Telefoon">
                        <input class="full" type="email" name="email" placeholder="E-mail">
                        <textarea class="full" name="message" placeholder="Bericht"></textarea>
                        <button type="submit">Verzenden</button>
                    </div>
                </form>
                <div class="zz-form-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
            </div>
        </div>
    </div>
</section>

<footer class="zz-sub-footer">
    <div class="zz-footer-inner">
        <div class="zz-footer-links">
            <a href="terms.php">Algemene voorwaarden</a>
            <a href="complain.php">Klachtenportaal</a>
            <a href="privacy.php">Privacybeleid</a>
        </div>
        <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
    </div>
</footer>
</div>
<script>
document.addEventListener('DOMContentLoaded', function () {
  var toggle = document.querySelector('.zz-menu-toggle');
  var menu = document.querySelector('.zz-menu');
  if (toggle && menu) {
    toggle.addEventListener('click', function () {
      menu.classList.toggle('open');
    });
  }
});
</script>
</body>
</html>