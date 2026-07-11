<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title><?php
  $filePath = 'title.txt';
  if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
  } else {
    echo 'Title';
  }
  ?></title>
  <link rel="stylesheet" href="fontawesome-5.5/css/all.min.css" />
  <link rel="stylesheet" href="slick/slick.css">
  <link rel="stylesheet" href="slick/slick-theme.css">
  <link rel="stylesheet" href="magnific-popup/magnific-popup.css">
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link rel="stylesheet" href="css/tooplate-infinite-loop.css" />
  <!--
Tooplate 2117 Infinite Loop
https://www.tooplate.com/view/2117-infinite-loop
-->
  <style type="text/css">
    @media (max-width: 767px) {
      .tm-navbar .navbar-toggler {
        display: block;
      }
    }

    .footer-nav {
      list-style: none;
      padding: 0;
      margin: 0 0 15px 0;
      display: flex;
      justify-content: center;
      gap: 20px;
    }

    .footer-nav .nav-link {
      padding: 0;
    }
  </style>

</head>

<body>

  <?php
  $defaultBanner = "/img/infinite-loop-01.jpg";
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




  <!-- Hero section -->
  <section id="infinite" class="text-white tm-font-big tm-parallax" style="background: <?php echo $bannerUrl; ?>">
    <!-- Navigation -->
    <nav class="navbar navbar-expand-md tm-navbar" id="tmNav">
      <div class="container">
        <div class="tm-next">
          <a href="#infinite" class="navbar-brand"></a>
        </div>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <i class="fas fa-bars navbar-toggler-icon"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item">
              <a class="nav-link tm-nav-link" href="index.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tm-nav-link" href="about.php">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tm-nav-link" href="service.php">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link tm-nav-link" href="contact.php">Contact</a>
            </li>


          </ul>
        </div>
      </div>
    </nav>





    <div class="text-center tm-hero-text-container">
      <div class="tm-hero-text-container-inner">
        <a href="index.php" class="navbar-brand" id="brandLogo">
          <img src="logo.png" alt="Logo" style="width:200px;margin-top:-5px;" onerror="this.remove();">
        </a>
<h2>CONTACT</h2>

      </div>
    </div>



    <div class="tm-next tm-intro-next">
      <a href="#whatwedo" class="text-center tm-down-arrow-link">
        <i class="fas fa-2x fa-arrow-down tm-down-arrow"></i>
      </a>
    </div>
  </section>

  <section id="whatwedo" class="tm-section-pad-top">

    <div class="container" style="min-height: 60px;">

      <div class="row tm-content-box"><!-- first row -->
        <div class="col-lg-12 col-xl-12">
          <div class="tm-intro-text-container">
            <?php
            $filePath = 'contact.txt';
            if (file_exists($filePath)) {
              echo nl2br(htmlspecialchars(file_get_contents($filePath)));
            } else {
              echo '-';
            }
            ?>


            <div class="container py-5">
              <div class="row justify-content-center">
                <div class="col-lg-10 col-xl-8">

                  <!-- Title -->
                  <p class="text-center mb-4">
                    Submit Your Contact Us
                  </p>

                  <form action="#" method="post">

                    <!-- Row 1 -->
                    <div class="row g-3 mb-3">
                      <div class="col-md-4" style="margin-bottom: 20px;">
                        <input type="text" name="name" class="form-control" placeholder="Name" required>
                      </div>

                      <div class="col-md-4" style="margin-bottom: 20px;">
                        <input type="email" name="email" class="form-control" placeholder="E-Mail" required>
                      </div>

                      <div class="col-md-4" style="margin-bottom: 20px;">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone">
                      </div>
                    </div>

                    <!-- Message -->
                    <div class="mb-3" style="margin-bottom: 20px;">
                      <textarea name="message" rows="3" class="form-control" placeholder="Message" required></textarea>
                    </div>

                    <!-- reCAPTCHA text -->
                    <p class="small text-muted mb-4">
                      This site is protected by reCAPTCHA, the Google
                      <a href="privacy.php" class="text-decoration-none">Privacy Policy</a> and
                      <a href="terms.php" class="text-decoration-none">Terms of Service</a> apply.
                    </p>

                    <!-- Submit -->
                    <div class="text-end" style="margin-bottom: 20px;">
                      <button type="submit" class="btn btn-outline-secondary px-4">
                        Submit
                      </button>
                    </div>

                  </form>

                </div>
              </div>
            </div>


          </div>
        </div>

      </div><!-- first row -->


    </div>

  </section>


  <!-- Contact -->
  <section id="contact" class="tm-section-pad-top tm-parallax-2" style="min-height: 200px;background: #A9A9A9;">

    <div class="container tm-container-contact">

      <div class="row">

      </div><!-- row ending -->

    </div>




    <footer class="text-center small tm-footer">



      <ul class="footer-nav">
        <li class="nav-item">
          <a class="nav-link tm-nav-link" href="terms.php">TERMS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tm-nav-link" href="complain.php">COMPLAINTS</a>
        </li>
        <li class="nav-item">
          <a class="nav-link tm-nav-link" href="privacy.php">PRIVACY</a>
        </li>
      </ul>




      <p class="mb-0">Copyright &copy; <?php echo date('Y'); ?> ZZPZO</p>


    </footer>

  </section>



  <script src="js/jquery-1.9.1.min.js"></script>
  <script src="slick/slick.min.js"></script>
  <script src="magnific-popup/jquery.magnific-popup.min.js"></script>
  <script src="js/easing.min.js"></script>
  <script src="js/jquery.singlePageNav.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script>

    function getOffSet() {
      var _offset = 450;
      var windowHeight = window.innerHeight;

      if (windowHeight > 500) {
        _offset = 400;
      }
      if (windowHeight > 680) {
        _offset = 300
      }
      if (windowHeight > 830) {
        _offset = 210;
      }

      return _offset;
    }

    function setParallaxPosition($doc, multiplier, $object) {
      var offset = getOffSet();
      var from_top = $doc.scrollTop(),
        bg_css = 'center ' + (multiplier * from_top - offset) + 'px';
      $object.css({ "background-position": bg_css });
    }

    // Parallax function
    // Adapted based on https://codepen.io/roborich/pen/wpAsm
    var background_image_parallax = function ($object, multiplier, forceSet) {
      multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
      multiplier = 1 - multiplier;
      var $doc = $(document);
      // $object.css({"background-attatchment" : "fixed"});

      if (forceSet) {
        setParallaxPosition($doc, multiplier, $object);
      } else {
        $(window).scroll(function () {
          setParallaxPosition($doc, multiplier, $object);
        });
      }
    };

    var background_image_parallax_2 = function ($object, multiplier) {
      multiplier = typeof multiplier !== 'undefined' ? multiplier : 0.5;
      multiplier = 1 - multiplier;
      var $doc = $(document);
      $object.css({ "background-attachment": "fixed" });

      $(window).scroll(function () {
        if ($(window).width() > 768) {
          var firstTop = $object.offset().top,
            pos = $(window).scrollTop(),
            yPos = Math.round((multiplier * (firstTop - pos)) - 186);

          var bg_css = 'center ' + yPos + 'px';

          $object.css({ "background-position": bg_css });
        } else {
          $object.css({ "background-position": "center" });
        }
      });
    };

    $(function () {
      // Hero Section - Background Parallax
      background_image_parallax($(".tm-parallax"), 0.30, false);
      background_image_parallax_2($("#contact"), 0.80);
      background_image_parallax_2($("#testimonials"), 0.80);

      // Handle window resize
      window.addEventListener('resize', function () {
        background_image_parallax($(".tm-parallax"), 0.30, true);
      }, true);

      // Detect window scroll and update navbar
      $(window).scroll(function (e) {
        if ($(document).scrollTop() > 120) {
          $('.tm-navbar').addClass("scroll");
        } else {
          $('.tm-navbar').removeClass("scroll");
        }
      });

      // Close mobile menu after click
      $('#tmNav a').on('click', function () {
        $('.navbar-collapse').removeClass('show');
      })


      // Pop up
      $('.tm-gallery').magnificPopup({
        delegate: 'a',
        type: 'image',
        gallery: { enabled: true }
      });

      $('.tm-testimonials-carousel').slick({
        dots: true,
        prevArrow: false,
        nextArrow: false,
        infinite: false,
        slidesToShow: 3,
        slidesToScroll: 1,
        responsive: [
          {
            breakpoint: 992,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 768,
            settings: {
              slidesToShow: 2
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1
            }
          }
        ]
      });

      // Gallery
      $('.tm-gallery').slick({
        dots: true,
        infinite: false,
        slidesToShow: 5,
        slidesToScroll: 2,
        responsive: [
          {
            breakpoint: 1199,
            settings: {
              slidesToShow: 4,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 991,
            settings: {
              slidesToShow: 3,
              slidesToScroll: 2
            }
          },
          {
            breakpoint: 767,
            settings: {
              slidesToShow: 2,
              slidesToScroll: 1
            }
          },
          {
            breakpoint: 480,
            settings: {
              slidesToShow: 1,
              slidesToScroll: 1
            }
          }
        ]
      });
    });
  </script>
</body>

</html>
