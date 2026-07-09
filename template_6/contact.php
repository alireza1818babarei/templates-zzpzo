<!DOCTYPE html>
<html lang="nl">
<head>

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
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
Stimulus Template
http://www.templatemo.com/tm-498-stimulus
-->
<link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="css/animate.css?id=<?php echo filemtime('css/animate.css'); ?>">
<link rel="stylesheet" href="css/font-awesome.min.css?id=<?php echo filemtime('css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="css/templatemo-style.css?id=<?php echo filemtime('css/templatemo-style.css'); ?>">

<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">

</head>
<body data-spy="scroll" data-target=".navbar-collapse" data-offset="50">


<!-- PRE LOADER -->

<div class="preloader">
     <div class="spinner">
          <span class="spinner-rotate"></span>
     </div>
</div>


<!-- Navigation Section -->

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
     <div class="container">
                <a href="index.php" class="navbar-brand" id="brandLogo">
    <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo"
         style="width:150px;margin-top:-10px;"
         onerror="this.remove();">
</a>

          <!-- navbar header -->
          <div class="navbar-header" style="min-height:70px;background: #1C1C1C;">
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
                    <li><a href="contact.php" class="smoothScroll">Contact</a></li>

               </ul>
          </div>

     </div>
</div>


<?php
$defaultBanner = "images/home-img.jpg";
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







<!-- Startpagina Section -->

<section id="home" class="parallax-section">
     <div class="container">
          <div class="row">

               <div class="col-md-6 col-sm-6">
                    <div class="home-img"  style="background: url('<?= htmlspecialchars($bannerUrl) ?>') no-repeat;"></div>
               </div>

               <div class="col-md-6 col-sm-6">
                    <div class="home-thumb">
                         <div class="section-title" style="width: 100%;">

                              <h1 class="wow fadeInUp" data-wow-delay="0.6s">contact</h1>
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
        <div class="col-md-12">

            <!-- Title -->
            <p class="text-center mb-4">
                Neem contact op
            </p>

            <form action="#" method="post">

                <!-- Row 1 -->
                <div class="row g-3 mb-3">
                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <input
                            type="text"
                            name="name"
                            class="form-control"
                            placeholder="Naam"
                            required
                        >
                    </div>

                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <input
                            type="email"
                            name="email"
                            class="form-control"
                            placeholder="E-mail"
                            required
                        >
                    </div>

                    <div class="col-md-4" style="margin-bottom: 20px;">
                        <input
                            type="tel"
                            name="phone"
                            class="form-control"
                            placeholder="Telefoon"
                        >
                    </div>
                </div>

                <!-- Message -->
                <div class="mb-3" style="margin-bottom: 20px;">
                    <textarea
                        name="message"
                        rows="3"
                        class="form-control"
                        placeholder="Bericht"
                        required
                    ></textarea>
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



                         </div>
                    </div>
               </div>


          </div>
     </div>
</section>


<!-- Over ons Section -->

<!-- Diensten Section -->

<!-- Experience Section -->

<!-- Education Section -->

<!-- Quotes Section -->

<!-- Contact Section -->

<!-- Footer Section -->



<!-- <section style="min-height: 300px;background: #bebebe ;">


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


    </section> -->



<footer style="background: #1C1C1C;">
	<div class="container">
		<div class="row">

               <div class="col-md-12 col-sm-12">
                    <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s">
                       <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZPZO</p>
                    </div>

               </div>


              <div  style="width: 100%;">
          <ul class="social-icons" style="list-style: none; padding: 0;">
                            <li><a href="terms.php">Algemene voorwaarden</a></li>
                            <li><a href="complain.php">Klachtenportaal</a></li>
                            <li><a href="privacy.php">Privacybeleid</a></li>
                        </ul>
                    </div>
		</div>
	</div>
</footer>

<!-- SCRIPTS -->

<script src="js/jquery.js?id=<?php echo filemtime('js/jquery.js'); ?>"></script>
<script src="js/bootstrap.min.js?id=<?php echo filemtime('js/bootstrap.min.js'); ?>"></script>
<script src="js/jquery.parallax.js?id=<?php echo filemtime('js/jquery.parallax.js'); ?>"></script>
<script src="js/smoothscroll.js?id=<?php echo filemtime('js/smoothscroll.js'); ?>"></script>
<script src="js/wow.min.js?id=<?php echo filemtime('js/wow.min.js'); ?>"></script>
<script src="js/custom.js?id=<?php echo filemtime('js/custom.js'); ?>"></script>

</body>
</html>
