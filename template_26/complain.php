<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?> - Klachtenportaal</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;1,300;1,400&family=DM+Sans:ital,wght@0,400;0,500;0,600;1,400&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="templatemo-maison-style.css?id=<?php echo filemtime('templatemo-maison-style.css'); ?>">
    <link rel="stylesheet" href="zz-form-height-fix.css?id=<?php echo filemtime('zz-form-height-fix.css'); ?>">
</head>
<body>

<header class="site-header" id="header">
    <div class="container">
        <div class="header-inner">
            <a href="index.php" class="navbar-brand" id="brandLogo">
                <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
            </a>
            <nav class="nav-main">
                <a href="index.php" class="">Startpagina</a>
<a href="about.php" class="">Over ons</a>
<a href="service.php" class="">Diensten</a>
<a href="contact.php" class="">Contact</a>
            </nav>
            <button class="menu-toggle" id="menuToggle" aria-label="Menu openen/sluiten">
                <span></span>
                <span></span>
                <span></span>
            </button>
        </div>
    </div>
</header>

<div class="mobile-overlay" id="mobileOverlay"></div>
<nav class="mobile-nav" id="mobileNav">
    <button class="mobile-nav-close" id="mobileNavClose">×</button>
    <ul class="mobile-nav-links">
        <li><a href="index.php" class="">Startpagina</a></li>
<li><a href="about.php" class="">Over ons</a></li>
<li><a href="service.php" class="">Diensten</a></li>
<li><a href="contact.php" class="">Contact</a></li>
    </ul>
</nav>

<section class="contact zz-form-section">
    <div class="container">
        <div class="contact-grid">
            <div class="contact-content">
                <p class="text-label">Bezoek ons atelier</p>
                <h2 class="heading-display contact-title">Klachtenportaal</h2>
                <div class="zz-form-dynamic">
                    <div class="zz-dynamic-content text-content">
                        <?php
                        $filePath = 'complain.txt';
                        if (file_exists($filePath)) {
                            echo nl2br(htmlspecialchars(file_get_contents($filePath)));
                        } else {
                            echo '-';
                        }
                        ?>
                    </div>
                </div>
            </div>

            <div class="contact-form-wrapper">
                <h3 class="form-title">Klachtenportaal</h3>
                <form id="appointmentForm" action="#" method="post">
                    <div class="form-group">
                        <label class="form-label" for="name">Naam</label>
                        <input type="text" id="name" name="name" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="phone">Telefoon</label>
                        <input type="text" id="phone" name="phone" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="email">E-mail</label>
                        <input type="email" id="email" name="email" class="form-input">
                    </div>
                    <div class="form-group">
                        <label class="form-label" for="message">Bericht</label>
                        <textarea id="message" name="message" class="form-textarea"></textarea>
                    </div>
                    <button type="submit" class="form-submit">Verzenden</button>
                </form>
                <div class="zz-recaptcha-note">
                    Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.
                </div>
            </div>
        </div>
    </div>
</section>

<footer class="zz-site-footer">
    <div class="container">
        <div class="zz-footer-bottom">
            <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
            <div class="zz-footer-links">
                <a href="terms.php">Algemene voorwaarden</a>
                <a href="complain.php">Klachtenportaal</a>
                <a href="privacy.php">Privacybeleid</a>
            </div>
        </div>
    </div>
</footer>
<script src="zz-maison-dynamic.js?id=<?php echo filemtime('zz-maison-dynamic.js'); ?>"></script>
</body>
</html>