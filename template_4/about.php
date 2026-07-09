<!DOCTYPE html>
<html lang="nl">

<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <link href="https://fonts.googleapis.com/css?family=Raleway:100,300,400,500,700,900" rel="stylesheet">

  <title><?php
  $filePath = 'title.txt';
  if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
  } else {
    echo 'Titel';
  }
  ?></title>
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">

  <link rel="stylesheet" type="text/css" href="css/font-awesome.css?id=<?php echo filemtime('css/font-awesome.css'); ?>">

  <link rel="stylesheet" type="text/css" href="css/fullpage.min.css?id=<?php echo filemtime('css/fullpage.min.css'); ?>">

  <link rel="stylesheet" type="text/css" href="css/owl.carousel.css?id=<?php echo filemtime('css/owl.carousel.css'); ?>">

  <link rel="stylesheet" href="css/animate.css?id=<?php echo filemtime('css/animate.css'); ?>">

  <link rel="stylesheet" href="css/templatemo-style.css?id=<?php echo filemtime('css/templatemo-style.css'); ?>">

  <link rel="stylesheet" href="css/responsive.css?id=<?php echo filemtime('css/responsive.css'); ?>">
  <style type="text/css">
    @media only screen and (max-width: 767px) {
      #header {
        position: fixed;
        top: 0;
        z-index: 6666;
        background-color: #DBE2E8;
      }
    }
  </style>
</head>

<body>

  <div id="video">
    <div class="preloader">
      <div class="preloader-bounce">
        <span></span>
        <span></span>
        <span></span>
      </div>
    </div>

    <header id="header" style="background: #DBE2E8;">
      <div class="container-fluid">
        <div class="navbar">
          <a href="index.php" class="navbar-brand" id="brandLogo">
            <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:150px;" onerror="this.remove();">
          </a>
          <div class="navigation-row">
            <nav id="navigation">
              <button type="button" class="navbar-toggle"> <i class="fa fa-bars"></i> </button>
              <div class="nav-box navbar-collapse">
                <ul class="navigation-menu nav navbar-nav navbars" id="nav">
                  <li data-menuanchor="index"><a href="index.php">Startpagina</a></li>
                  <li data-menuanchor="about"><a href="about.php">Over ons</a></li>
                  <li data-menuanchor="service"><a href="service.php">Diensten</a></li>
                  <li data-menuanchor="contact"><a href="contact.php">Contact</a></li>
                </ul>
              </div>
            </nav>
          </div>
        </div>
      </div>
    </header>
    <?php
    $defaultBanner = "images/main-bg.jpg";
    $bannerFile = "aboutimage.txt";

    if (file_exists($bannerFile)) {
      $bannerUrl = trim(file_get_contents($bannerFile));
      if ($bannerUrl === "") {
        $bannerUrl = $defaultBanner;
      }

      ?>
      <video autoplay muted loop id="myVideo">
        <source src="img/banner-bg.jpg" type="video/mp4">
      </video>
      <?php

    } else {
      $bannerUrl = $defaultBanner;
      ?>
      <video autoplay muted loop id="myVideo">
        <source src="images/video-bg.mp4" type="video/mp4">
      </video>
      <?php
    }
    ?>


    <div id="fullpage" class="fullpage-default">

      <div class="section animated-row" data-section="slide01">
        <div class="section-inner">
          <div class="welcome-box">
            <h1 class="welcome-title animate" data-animate="fadeInUp">Over ons</h1>
            <div class="scroll-down next-section animate" data-animate="fadeInUp"><img src="images/mouse-scroll.png"
                alt=""><span>Scroll omlaag</span></div>
          </div>
        </div>
      </div>

      <div class="section animated-row" data-section="slide02">
        <div class="section-inner">
          <div class="about-section">
            <div class="row justify-content-center">
              <div class="col-lg-8 wide-col-laptop">
                <div class="row">
                  <div class="col-md-12">
                    <div class="about-contentbox">
                      <div class="animate" data-animate="fadeInUp">
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
                  </div>

                </div>
              </div>
            </div>
          </div>
        </div>
        <style type="text/css">
          .footer-wrapper {
            display: flex;
            justify-content: center;
            /* کل فوتر وسط صفحه */
          }

          .footer-links {
            margin-top: 200px;
            width: 100%;
            max-width: 1100px;
            /* مرکز تصویر/صفحه */
            display: flex;
            justify-content: space-between;
            align-items: center;
          }

          /* لینک‌ها */
          .footer-left a {
            margin-right: 10px;
          }

          /* ---------- موبایل ---------- */
          @media (max-width: 767px) {
            .footer-links {
              flex-direction: column;
              gap: 10px;
              text-align: center;
            }

            .footer-left {
              display: flex;
              gap: 10px;
              justify-content: center;
            }
          }
        </style>

        <div class="footer-wrapper">
          <div class="footer-links">
            <div class="footer-left">
              <a href="terms.php">Algemene voorwaarden</a>
              <a href="complain.php">Klachtenportaal</a>
              <a href="privacy.php">Privacybeleid</a>
            </div>

            <div class="footer-right" style="text-align: center;">
              Auteursrecht &copy; <?php echo date('Y'); ?> ZZPZO
            </div>
          </div>
        </div>
      </div>





    </div>
    <!--
        <div id="social-icons">
            <div class="text-right">
                <ul class="social-icons">
                    <li><a href="#" title="Facebook"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="#" title="Twitter"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="#" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
                    <li><a href="#" title="Instagram"><i class="fa fa-behance"></i></a></li>
                </ul>
            </div>
        </div> -->
  </div>

  <script src="js/jquery.js?id=<?php echo filemtime('js/jquery.js'); ?>"></script>

  <script src="js/bootstrap.min.js?id=<?php echo filemtime('js/bootstrap.min.js'); ?>"></script>

  <script src="js/fullpage.min.js?id=<?php echo filemtime('js/fullpage.min.js'); ?>"></script>

  <script src="js/scrolloverflow.js?id=<?php echo filemtime('js/scrolloverflow.js'); ?>"></script>

  <script src="js/owl.carousel.min.js?id=<?php echo filemtime('js/owl.carousel.min.js'); ?>"></script>

  <script src="js/jquery.inview.min.js?id=<?php echo filemtime('js/jquery.inview.min.js'); ?>"></script>

  <script src="js/form.js?id=<?php echo filemtime('js/form.js'); ?>"></script>

  <script src="js/custom.js?id=<?php echo filemtime('js/custom.js'); ?>"></script>


</body>

</html>
