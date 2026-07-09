<!DOCTYPE HTML>
<html>
    <head>
        <title><?php
        $filePath = 'title.txt';
        if (file_exists($filePath)) {
            echo nl2br(htmlspecialchars(file_get_contents($filePath)));
        } else {
            echo 'Titel';
        }
        ?> - Startpagina</title>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
        <link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
    </head>
    <body class="landing is-preload">
        <div id="page-wrapper">

            <!-- Header -->
                <header id="header" class="alt">
                    <h1>
                        <a href="index.php" class="navbar-brand" id="brandLogo">
                            <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
                        </a>
                    </h1>
                    <nav id="nav">
                        <ul>
                            <li class="zz-menu-logo"><a href="index.php" class="navbar-brand zz-menu-brand"><img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();"></a></li>
                            <li class="active"><a href="index.php">Startpagina</a></li>
                            <li><a href="about.php">Over ons</a></li>
                            <li><a href="service.php">Diensten</a></li>
                            <li><a href="contact.php">Contact</a></li>
                        </ul>
                    </nav>
                </header>

            <?php
            $defaultBanner = 'images/banner.jpg';
            $bannerFile = 'homeimage.txt';
            if (file_exists($bannerFile)) {
                $bannerUrl = trim(file_get_contents($bannerFile));
                if ($bannerUrl === '') {
                    $bannerUrl = $defaultBanner;
                }
            } else {
                $bannerUrl = $defaultBanner;
            }
            ?>
            <!-- Banner -->
                <section id="banner" style="background-image: url('assets/css/images/overlay.png'), url('<?= htmlspecialchars($bannerUrl) ?>');">
                    <h2>Startpagina</h2>
                </section>

            <!-- Main -->
                <section id="main" class="container">
                    <section class="box special">
                        <div class="zz-home-text-wrap" style="text-align: left;">
                            <?php
                            $filePath = 'home.txt';
                            if (file_exists($filePath)) {
                                echo nl2br(htmlspecialchars(file_get_contents($filePath)));
                            } else {
                                echo '-';
                            }
                            ?>
                        </div>
                    </section>
                </section>

            <!-- Footer -->
                <footer id="footer">
                    <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
                    <ul class="copyright">
                        <li><a href="terms.php">Algemene voorwaarden</a></li>
                        <li><a href="complain.php">Klachtenportaal</a></li>
                        <li><a href="privacy.php">Privacybeleid</a></li>
                    </ul>
                </footer>

        </div>

        <!-- Scripts -->
            <script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
            <script src="assets/js/jquery.dropotron.min.js?id=<?php echo filemtime('assets/js/jquery.dropotron.min.js'); ?>"></script>
            <script src="assets/js/jquery.scrollex.min.js?id=<?php echo filemtime('assets/js/jquery.scrollex.min.js'); ?>"></script>
            <script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
            <script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
            <script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
            <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>

    </body>
</html>
