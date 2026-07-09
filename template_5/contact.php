<!DOCTYPE html>
<html lang="nl">

<head>

  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=Edge">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

  <title><?php
  $filePath = 'title.txt';
  if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
  } else {
    echo 'Titel';
  }
  ?>-Contact</title>
  <!--
App Starter Template
http://www.templatemo.com/tm-492-app-starter
-->
  <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="css/animate.css?id=<?php echo filemtime('css/animate.css'); ?>">
  <link rel="stylesheet" href="css/font-awesome.min.css?id=<?php echo filemtime('css/font-awesome.min.css'); ?>">

  <link rel="stylesheet" href="css/magnific-popup.css?id=<?php echo filemtime('css/magnific-popup.css'); ?>">

  <link rel="stylesheet" href="css/owl.theme.css?id=<?php echo filemtime('css/owl.theme.css'); ?>">
  <link rel="stylesheet" href="css/owl.carousel.css?id=<?php echo filemtime('css/owl.carousel.css'); ?>">

  <link href='https://fonts.googleapis.com/css?family=Unica+One' rel='stylesheet' type='text/css'>
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,300,700' rel='stylesheet' type='text/css'>

  <!-- Main css -->
  <link rel="stylesheet" href="css/style.css?id=<?php echo filemtime('css/style.css'); ?>">

</head>

<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


  <!-- PRE LOADER -->

  <div class="preloader">
    <div class="sk-spinner sk-spinner-pulse"></div>
  </div>



  <!-- Navigation Section -->

  <div class="navbar navbar-default navbar-fixed-top">
    <div class="container">

      <a href="index.php" class="navbar-brand" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:150px;margin-top:-5px;" onerror="this.remove();">
      </a>
      <div class="navbar-header" style="min-height: 70px;">
        <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
          <span class="icon icon-bar"></span>
        </button>

      </div>

      <div class="collapse navbar-collapse">


        <ul class="nav navbar-nav navbar-right">
          <li><a href="index.php" class="smoothScroll">Startpagina</a></li>
          <li><a href="about.php" class="smoothScroll">Over ons</a></li>
          <li><a href="service.php" class="smoothScroll">Diensten</a></li>

          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

    </div>
  </div>


  <!-- Startpagina Section -->

  <?php
  $defaultBanner = "images/home-bg.jpg";
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


  <section id="home" class="main" style="background: #535bd4 url('<?= htmlspecialchars($bannerUrl) ?>') no-repeat;">
    <div class="overlay"></div>
    <div class="container">
      <div class="row">




        <div class="col-md-12">
          <div class="home-thumb">
            <h1 class="wow fadeInUp" data-wow-delay="0.6s">Contact</h1>


          </div>


        </div>

      </div>
    </div>



  </section>

  <section style="min-height: 300px;background: #fff;padding-top: 30px;">


    <div class="overlay">
      <div class="container">
        <div class="row">



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

    <div class="container py-5">
      <div class="row justify-content-center">
        <div class="col-lg-10 col-xl-8" style="width: 100%;">

          <!-- Title -->
          <p class="text-center mb-4">
            Neem contact op
          </p>

          <form action="#" method="post">

            <!-- Row 1 -->
            <div class="row g-3 mb-3">
              <div class="col-md-4" style="margin-bottom: 20px;">
                <input type="text" name="name" class="form-control" placeholder="Naam" required>
              </div>

              <div class="col-md-4" style="margin-bottom: 20px;">
                <input type="email" name="email" class="form-control" placeholder="E-mail" required>
              </div>

              <div class="col-md-4" style="margin-bottom: 20px;">
                <input type="tel" name="phone" class="form-control" placeholder="Telefoon">
              </div>
            </div>

            <!-- Message -->
            <div class="mb-3" style="margin-bottom: 20px;">
              <textarea name="message" rows="3" class="form-control" placeholder="Bericht" required></textarea>
            </div>

            <!-- reCAPTCHA text -->
            <p class="small text-muted mb-4">
              Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php" class="text-decoration-none">privacybeleid</a> en de <a href="terms.php" class="text-decoration-none">algemene voorwaarden</a> van Google zijn van toepassing.
            </p>

            <!-- Submit -->
            <div class="text-end" style="margin-bottom: 20px;">
              <button type="submit" class="btn btn-outline-secondary px-4">
                Verzenden
              </button>
            </div>

          </form>

        </div>
      </div>
    </div>


  </section>


  <footer>
    <div class="container">
      <div class="row">

        <div class="col-md-8 col-sm-6">
          <div class="wow fadeInUp footer-copyright" data-wow-delay="0.4s">
            <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZPZO</p>
          </div>
        </div>

        <div class="col-md-4 col-sm-12">
          <ul class="social-icons">
            <li><a href="terms.php" style="color: #999;">Algemene voorwaarden</a></li>
            <li><a href="complain.php" style="color: #999;">Klachtenportaal</a></li>
            <li><a href="privacy.php" style="color: #999;">Privacybeleid</a></li>
          </ul>
        </div>

      </div>
    </div>
  </footer>


  <!-- Modal Contact -->

  <div class="modal fade" id="modal1" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
      <div class="modal-content modal-popup">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal" aria-label="Sluiten"><span
              aria-hidden="true">&times;</span></button>
          <h2 class="modal-title">Contactformulier</h2>
        </div>

        <form action="#" method="post">
          <input name="name" type="text" class="form-control" id="name" placeholder="Uw naam" required>
          <input name="email" type="email" class="form-control" id="email" placeholder="E-mailadres" required>
          <textarea name="message" rows="3" class="form-control" id="message" placeholder="Bericht" required></textarea>
          <input name="submit" type="submit" class="form-control" id="submit" value="Bericht verzenden">
        </form>
      </div>
    </div>
  </div>


  <!-- Back top -->

  <a href="#" class="go-top"><i class="fa fa-angle-up"></i></a>


  <!-- SCRIPTS -->

  <script src="js/jquery.js?id=<?php echo filemtime('js/jquery.js'); ?>"></script>
  <script src="js/bootstrap.min.js?id=<?php echo filemtime('js/bootstrap.min.js'); ?>"></script>
  <script src="js/jquery.magnific-popup.min.js?id=<?php echo filemtime('js/jquery.magnific-popup.min.js'); ?>"></script>
  <script src="js/magnific-popup-options.js?id=<?php echo filemtime('js/magnific-popup-options.js'); ?>"></script>
  <script src="js/owl.carousel.min.js?id=<?php echo filemtime('js/owl.carousel.min.js'); ?>"></script>
  <script src="js/smoothscroll.js?id=<?php echo filemtime('js/smoothscroll.js'); ?>"></script>
  <script src="js/wow.min.js?id=<?php echo filemtime('js/wow.min.js'); ?>"></script>
  <script src="js/custom.js?id=<?php echo filemtime('js/custom.js'); ?>"></script>

</body>

</html>
