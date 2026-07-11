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
?> - Over ons</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="css/materialize.min.css?id=<?php echo filemtime('css/materialize.min.css'); ?>">
    <link rel="stylesheet" href="css/tooplate.css?id=<?php echo filemtime('css/tooplate.css'); ?>">
    <link rel="stylesheet" href="css/zz-responsive-fixes.css?id=<?php echo filemtime('css/zz-responsive-fixes.css'); ?>">
</head>

<?php
$defaultBanner = "img/input-bg-02.jpg";
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
<body class="zz-page" style="background-image: url('<?php echo htmlspecialchars($bannerUrl); ?>');">
    <main class="zz-layout">
        <div class="container zz-page-shell">
            <div class="row">
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    <div class="tm-home-left zz-title-box">
                        <h1 class="tm-site-title">Over ons</h1>
                    </div>
                    <div class="tm-home-left mt-5 font-weight-light zz-dynamic-text">
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
                <div class="col-xl-6 col-lg-6 col-md-6 col-sm-12">
                    
<div class="zz-side-panel">
    <div class="zz-logo-box">
        <a href="index.php" class="navbar-brand" id="brandLogo">
            <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:50px;margin-top:-5px;" onerror="this.remove();">
        </a>
    </div>
    <ul class="list-group tm-home-list zz-nav-list tm-bg-black font-weight-light">
        <li class="d-flex justify-content-between align-items-center"><a href="index.php" class="tm-white-text">Startpagina</a></li>
<li class="d-flex justify-content-between align-items-center"><a href="about.php" class="tm-white-text font-weight-bold">Over ons</a></li>
<li class="d-flex justify-content-between align-items-center"><a href="service.php" class="tm-white-text">Diensten</a></li>
<li class="d-flex justify-content-between align-items-center"><a href="contact.php" class="tm-white-text">Contact</a></li>
    </ul>
</div>

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

</body>
</html>