<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js" lang=""> <!--<![endif]-->

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <title><?php
  $filePath = 'title.txt';
  if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
  } else {
    echo 'Title';
  }
  ?></title>
  <!--
Stacked Template
https://templatemo.com/tm-505-stacked
-->
  <meta name="description" content="">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="apple-touch-icon" href="apple-touch-icon.png">

  <link rel="stylesheet" href="css/bootstrap.min.css">
  <link rel="stylesheet" href="css/bootstrap-theme.min.css">
  <link rel="stylesheet" href="css/templatemo-style.css">

  <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
</head>

<body>
  <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->
  <nav class="nav" style="width: 150px !important">
    <div class="burger">
      <div class="burger__patty"></div>
    </div>

    <ul class="nav__list">
      <li class="nav__item">
        <a href="index.php" class="nav__link c-blue" style="color: #fff !important;">Home</a>
      </li>
      <li class="nav__item">
        <a href="about.php" class="nav__link c-blue" style="color: #fff !important;">About</a>
      </li>
      <li class="nav__item">
        <a href="contact.php" class="nav__link c-blue" style="color: #fff !important;">Contact</a>
      </li>
      <li class="nav__item">
        <a href="service.php" class="nav__link c-blue" style="color: #fff !important;">Service</a>
      </li>

      <li class="nav__item">
        <a href="terms.php" class="nav__link c-blue" style="color: #fff !important;"></a>

      </li>
      <li class="nav__item" style="padding-top: 100px;height: 500px;background: #3e4e62;">
        <a href="terms.php" class="nav__link c-blue" style="color: #fff !important;height: 50px;display: -webkit-box;
  display: -ms-flexbox;
  display: flex;
  -webkit-box-pack: center;
  -ms-flex-pack: center;
  justify-content: center;
  -webkit-box-align: center;
  -ms-flex-align: center;
  align-items: center;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  text-decoration: none;
  font-size: 24px;
  background: #3e4e62;
  -webkit-transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);
  transition: all 0.5s cubic-bezier(0.175, 0.885, 0.32, 1.275);">Terms</a>
        <a href="privacy.php" class="nav__link c-blue"
          style="color: #fff !important;margin-top: 30px;background: none;height: 50px;  text-decoration: none;">Privacy</a>
        <a href="complain.php" class="nav__link c-blue"
          style="color: #fff !important;margin-top: 60px;background: none;height: 50px;  text-decoration: none;">Complain</a>


      </li>
      <!-- <li class="nav__item">
              <a href="privacy.php" class="nav__link c-blue"  style="color: #fff !important;">Privacy</a>
            </li>
            <li class="nav__item">
              <a href="complain.php" class="nav__link c-blue"  style="color: #fff !important;">Complain</a>
            </li> -->
    </ul>
  </nav>
  <?php
  $defaultBanner = "/img/infinite-loop-01.jpg";
  $bannerFile = "homeimage.txt";

  if (file_exists($bannerFile)) {
    $bannerUrl = trim(file_get_contents($bannerFile));
    if ($bannerUrl === "") {
      $bannerUrl = $defaultBanner;
    }
  } else {
    $bannerUrl = $defaultBanner;
  }
  ?>

  <section class="panel" id="1" style="background-image: url(<?php echo $bannerUrl; ?>) !important;">
    <article class="panel__wrapper">

      <div class="panel__content">

        <div class="container">
          <div class="row">
            <div class="col-md-8 col-md-offset-2">

              <div class="home-content" style="padding: 10px;">
                <a href="index.php" class="navbar-brand" id="brandLogo" style="float: right;">
                  <img src="logo.png" alt="Logo" style="width:150px;margin-top:-5px;" onerror="this.remove();">
                </a>

                <div class="home-heading">
                  <h1><em>Home</h1>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <div class="home-box-content">
                      <div class="" style="color: #fff !important;">



                        <?php
                        $filePath = 'home.txt';
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

          <p style="color: #fff;">Copyright &copy; <?php echo date('Y'); ?> ZZPZO</p>
        </div>

      </div>


    </article>
  </section>




  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
  <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>

  <script src="js/vendor/bootstrap.min.js"></script>

  <script src="js/plugins.js"></script>
  <script src="js/main.js"></script>

</body>

</html>
