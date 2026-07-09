<!DOCTYPE html>
<html lang="nl">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>
    <?php
    $filePath = 'title.txt';
    if (file_exists($filePath)) {
      echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
      echo 'Titel';
    }
    ?> - Contact
  </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600" />
  <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>" />
  <link rel="stylesheet" href="slick/slick.css?id=<?php echo filemtime('slick/slick.css'); ?>" />
  <link rel="stylesheet" href="slick/slick-theme.css?id=<?php echo filemtime('slick/slick-theme.css'); ?>" />
  <link rel="stylesheet" href="css/magnific-popup.css?id=<?php echo filemtime('css/magnific-popup.css'); ?>" />
  <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>" />
</head>
<?php
$defaultBanner = "img/photo-05.jpg";
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

<body class="zz-page" style="background-image: url('<?php echo htmlspecialchars($bannerUrl); ?>');">
  <div class="tm-main-container">
    <div class="tm-top-container">
      <nav id="tmNav" class="tm-nav">
        <a class="tm-navbar-menu" href="#">Menu</a>
        <ul class="tm-nav-links open">
          <li class="tm-nav-item "><a href="index.php" class="tm-nav-link">Startpagina</a></li>
          <li class="tm-nav-item "><a href="about.php" class="tm-nav-link">Over ons</a></li>
          <li class="tm-nav-item "><a href="service.php" class="tm-nav-link">Diensten</a></li>
          <li class="tm-nav-item active"><a href="contact.php" class="tm-nav-link">Contact</a></li>
        </ul>
      </nav>
     <div style="background-color: rgba(0,0,0,0.62); padding: 10px  20px;">
        <a href="index.php" id="brandLogo">
          <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
        </a>
      </div>
    </div>
    <main class="zz-main-content">
      <section class="zz-contact-layout">
        <form action="#" class="tm-contact-form" method="post">
          <div class="form-group mb-4">
            <input type="text" name="name" class="form-control" placeholder="Naam" />
          </div>
          <div class="form-group mb-4">
            <input type="text" name="phone" class="form-control" placeholder="Telefoon" />
          </div>
          <div class="form-group mb-4">
            <input type="email" name="email" class="form-control" placeholder="E-mail" />
          </div>
          <div class="form-group mb-4">
            <textarea rows="4" name="message" class="form-control" placeholder="Bericht"></textarea>
          </div>
          <div class="form-group mb-0">
            <button type="submit" class="btn tm-send-btn tm-fl-right">Verzenden</button>
          </div>
          <div class="zz-contact-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
        </form>
        <div class="tm-bg-dark zz-contact-info zz-dynamic-content text-content">
          <h2>Contact</h2>
          <?php
          $filePath = 'contact.txt';
          if (file_exists($filePath)) {
            echo nl2br(htmlspecialchars(file_get_contents($filePath)));
          } else {
            echo '-';
          }
          ?>
        </div>
      </section>
    </main>
    <div class="zz-bottom-container">
      <footer class="zz-footer">
        <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
        <div class="zz-footer-links">
          <a href="terms.php">Algemene voorwaarden</a>
          <a href="complain.php">Klachtenportaal</a>
          <a href="privacy.php">Privacybeleid</a>
        </div>
      </footer>
    </div>
  </div>
  <script src="js/jquery-1.11.0.min.js?id=<?php echo filemtime('js/jquery-1.11.0.min.js'); ?>"></script>
  <script>
    window.onload = function () { document.body.classList.add('loaded'); };
    document.addEventListener('DOMContentLoaded', function () {
      var menu = document.querySelector('.tm-navbar-menu');
      var links = document.querySelector('.tm-nav-links');
      if (menu && links) {
        menu.addEventListener('click', function (e) {
          e.preventDefault();
          links.classList.toggle('open');
          if (links.classList.contains('open')) { links.style.display = 'flex'; }
          else { links.style.display = 'none'; }
        });
        window.addEventListener('resize', function () {
          if (window.innerWidth > 991) {
            links.classList.add('open');
            links.style.removeProperty('display');
          }
        });
      }
    });
  </script>
</body>

</html>
