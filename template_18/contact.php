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
?> - Contact</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
    <link rel="stylesheet" href="css/zz-mobile-content-order.css?id=<?php echo filemtime('css/zz-mobile-content-order.css'); ?>">
</head>
<body>
<div class="tm-container mx-auto">


<nav class="zz-fixed-menu">
  <div class="zz-menu-card">
    <a href="index.php" class="navbar-brand" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
    </a>
    <button class="zz-menu-toggle" type="button" aria-label="Menu">☰</button>
    <ul class="zz-menu-links">
      <li><a href="index.php" title="Startpagina" class=""><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M3 11.5 12 4l9 7.5v8.5a1 1 0 0 1-1 1h-5v-6H9v6H4a1 1 0 0 1-1-1z"/></svg><span>Startpagina</span></a></li>
      <li><a href="about.php" title="Over ons" class=""><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M12 12a4 4 0 1 0-4-4 4 4 0 0 0 4 4Zm0 2c-4.42 0-8 2.24-8 5v1h16v-1c0-2.76-3.58-5-8-5Z"/></svg><span>Over ons</span></a></li>
      <li><a href="service.php" title="Diensten" class=""><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M21 7.5 12 2 3 7.5v9L12 22l9-5.5Zm-9 2.1L6.5 6.4 12 3.1l5.5 3.3Zm-1 10.1-6-3.7V8.6l6 3.6Zm2 0v-7.5l6-3.6V16Z"/></svg><span>Diensten</span></a></li>
      <li><a href="contact.php" title="Contact" class="active"><svg viewBox="0 0 24 24" aria-hidden="true"><path d="M4 5h16a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2Zm8 7.2L4.4 7H4v.8l8 5.5 8-5.5V7h-.4Z"/></svg><span>Contact</span></a></li>
    </ul>
  </div>
</nav>



<?php
$defaultBanner = "img/img-02.jpg";
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


<section class="tm-section zz-page-section zz-contact-content-section">
  <div class="container">
    <div class="row zz-content-layout zz-contact-content-layout">
      <div class="col-xl-7 col-lg-6 tm-circle-img-container zz-content-image-wrap zz-contact-image-wrap">
        <img src="<?php echo htmlspecialchars($bannerUrl); ?>" alt="Contact" class="rounded-circle tm-circle-img zz-circle-image">
      </div>

      <div class="col-xl-5 col-lg-6 tm-flex-center-v tm-text-container tm-section-left zz-contact-text-panel">
        <div class="zz-page-title">
          <h2 class="tm-color-primary">Contact</h2>
        </div>
        <div class="zz-dynamic-content text-content">
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
    </div>
  </div>
</section>

<section class="tm-section zz-contact-form-section">
  <div class="container">
    <form action="#" class="tm-contact-form zz-contact-form zz-contact-form-card" method="POST">
      <div class="form-group mb-4">
        <input type="text" name="name" class="form-control" placeholder="Naam">
      </div>
      <div class="form-group mb-4">
        <input type="text" name="phone" class="form-control" placeholder="Telefoon">
      </div>
      <div class="form-group mb-4">
        <input type="email" name="email" class="form-control" placeholder="E-mail">
      </div>
      <div class="form-group mb-5">
        <textarea rows="5" name="message" class="form-control" placeholder="Bericht"></textarea>
      </div>
      <div class="form-group mb-0 text-right">
        <button type="submit" class="btn tm-btn-primary tm-send-btn zz-send-btn">Verzenden</button>
      </div>
      <div class="zz-form-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
    </form>
  </div>
</section>

<footer class="zz-footer">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-12">
        <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
      </div>
      <div class="col-md-6 col-sm-12 zz-footer-links">
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
      </div>
    </div>
  </div>
</footer>
</div>
<script src="js/smooth-scroll.polyfills.min.js?id=<?php echo filemtime('js/smooth-scroll.polyfills.min.js'); ?>"></script>
<script src="js/zz-dynamic.js?id=<?php echo filemtime('js/zz-dynamic.js'); ?>"></script>
<script>
var scroll = new SmoothScroll('a[href^="#"]', {
    easing: 'easeInOutQuart',
    speed: 800
});
</script>
</body>
</html>