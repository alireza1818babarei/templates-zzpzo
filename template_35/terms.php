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
?> - Algemene voorwaarden</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600">
    <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
    <link rel="stylesheet" href="css/materialize.min.css?id=<?php echo filemtime('css/materialize.min.css'); ?>">
    <link rel="stylesheet" href="css/tooplate.css?id=<?php echo filemtime('css/tooplate.css'); ?>">
</head>

<body class="zz-plain-page">
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
<li class="d-flex justify-content-between align-items-center"><a href="contact.php" class="tm-white-text">Contact</a></li>
    </ul>
</div>

            </div>
        </div>
    </div>
    <main class="zz-plain-layout">
        <div class="container">
            <div class="tm-bg-black zz-plain-card">
                <h1 class="tm-site-title">Algemene voorwaarden</h1>
                <div class="zz-dynamic-text">
                    <?php
                    $filePath = 'terms.txt';
                    if (file_exists($filePath)) {
                        echo nl2br(htmlspecialchars(file_get_contents($filePath)));
                    } else {
                        echo '-';
                    }
                    ?>
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
