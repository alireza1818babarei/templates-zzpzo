<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Contact</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="css/materialize.min.css?id=<?php echo filemtime('css/materialize.min.css'); ?>">
    <link rel="stylesheet" href="css/tooplate.css?id=<?php echo filemtime('css/tooplate.css'); ?>">
    <link rel="stylesheet" href="css/zz-responsive-fixes.css?id=<?php echo filemtime('css/zz-responsive-fixes.css'); ?>">
</head>

<?php
$defaultBanner = "img/input-bg-04.jpg";
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
<body class="zz-form-page" style="background-image: url('<?php echo htmlspecialchars($bannerUrl); ?>');">
    <div class="container zz-form-container">
        <div class="row mt-4">
            <div class="col-xl-12">
                
<div class="zz-side-panel">
    <div class="zz-logo-box">
        <a href="index.php" class="navbar-brand" id="brandLogo">
            <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:50px;margin-top:-5px;" onerror="this.remove();">
        </a>
    </div>
    <ul class="list-group tm-home-list zz-nav-list tm-bg-black font-weight-light">
        <li class="d-flex justify-content-between align-items-center"><a href="index.php" class="tm-white-text">Startpagina</a></li>
<li class="d-flex justify-content-between align-items-center"><a href="about.php" class="tm-white-text">Over ons</a></li>
<li class="d-flex justify-content-between align-items-center"><a href="service.php" class="tm-white-text">Diensten</a></li>
<li class="d-flex justify-content-between align-items-center"><a href="contact.php" class="tm-white-text font-weight-bold">Contact</a></li>
    </ul>
</div>

            </div>
        </div>
    </div>
    <main class="zz-form-layout">
        <div class="container zz-form-container">
            <div class="row tm-register-row tm-mb-35 zz-form-row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-l">
                    <form action="#" method="post" class="tm-bg-black p-5 h-100 zz-standard-form">
                        <div class="input-field">
                            <input placeholder="Naam" id="name" name="name" type="text" class="validate">
                        </div>
                        <div class="input-field">
                            <input placeholder="Telefoon" id="phone" name="phone" type="text" class="validate">
                        </div>
                        <div class="input-field">
                            <input placeholder="E-mail" id="email" name="email" type="email" class="validate">
                        </div>
                        <div class="input-field mb-5">
                            <textarea placeholder="Bericht" id="message" name="message" class="p-3"></textarea>
                        </div>
                        <div class="text-right">
                            <button type="submit" class="waves-effect btn-large btn-large-white px-4 black-text rounded-0">Verzenden</button>
                        </div>
                        <div class="zz-recaptcha-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</div>
                    </form>
                </div>
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12 tm-login-r">
                    <header class="font-weight-light tm-bg-black p-5 h-100 zz-form-copy">
                        <h3 class="mt-0 text-white font-weight-light">Contact</h3>
                        <div class="zz-dynamic-text">
                            <?php
                            $filePath = 'contact.txt';
                            if (file_exists($filePath)) {
                                echo nl2br(htmlspecialchars(file_get_contents($filePath)));
                            } else {
                                echo '-';
                            }
                            ?>
                        </div>
                    </header>
                </div>
            </div>
        </div>
    </main>
    
<footer class="zz-footer">
    <div class="zz-footer-inner tm-bg-black white-text py-2 tm-px-5">
        <span>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</span>
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
    </div>
</footer>

    
<script src="js/jquery-3.2.1.slim.min.js?id=<?php echo filemtime('js/jquery-3.2.1.slim.min.js'); ?>"></script>
<script src="js/materialize.min.js?id=<?php echo filemtime('js/materialize.min.js'); ?>"></script>
<script src="js/zz-form-height.js?id=<?php echo filemtime('js/zz-form-height.js'); ?>"></script>
<script>
    $(document).ready(function () {
        $('select').formSelect();
    });
</script>

</body>
</html>