<?php
declare(strict_types=1);

/*
 * Shared layout helpers for the ZZPZO Big Picture theme.
 * Keep this file in the same directory as index.php, about.php, etc.
 */

function zzpzo_read_file(string $filePath, string $fallback = ''): string
{
    if (!is_file($filePath) || !is_readable($filePath)) {
        return $fallback;
    }

    $content = file_get_contents($filePath);

    if ($content === false) {
        return $fallback;
    }

    $content = trim($content);

    return $content === '' ? $fallback : $content;
}

function zzpzo_escape(string $value): string
{
    return htmlspecialchars($value, ENT_QUOTES, 'UTF-8');
}

function zzpzo_site_title(): string
{
    static $siteTitle = null;

    if ($siteTitle !== null) {
        return $siteTitle;
    }

    $siteTitle = zzpzo_read_file('title.txt', 'Title');

    return $siteTitle;
}

function zzpzo_document_title(string $pageTitle): string
{
    $siteTitle = zzpzo_site_title();

    return $pageTitle === 'Startpagina'
        ? $siteTitle
        : $siteTitle . ' - ' . $pageTitle;
}

function zzpzo_banner_url(string $imageFile): string
{
    return zzpzo_read_file($imageFile, 'img/banner-bg.jpg');
}

function zzpzo_text_content(string $textFile): string
{
    $content = zzpzo_read_file($textFile, '-');

    return nl2br(zzpzo_escape($content));
}

function zzpzo_is_active(string $activePage, string $pageFile): string
{
    return $activePage === $pageFile ? ' class="active"' : '';
}

function zzpzo_render_header(string $pageTitle, string $activePage): void
{
    $siteTitle = zzpzo_site_title();
    $documentTitle = zzpzo_document_title($pageTitle);
    ?>
<!DOCTYPE HTML>
<!--
    Big Picture by HTML5 UP
    Adapted for ZZPZO multi-page PHP content pages.
-->
<html lang="nl">
<head>
    <meta charset="utf-8" />
    <title><?= zzpzo_escape($documentTitle) ?></title>
    <meta name="description" content="<?= zzpzo_escape($pageTitle . ' - ' . $siteTitle) ?>" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />

    <link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
    <noscript><link rel="stylesheet" href="assets/css/noscript.css?id=<?php echo filemtime('assets/css/noscript.css'); ?>" /></noscript>

    <style>
        #header #brandLogo {
            display: inline-flex;
            align-items: center;
            min-height: 3rem;
        }

        #header #brandLogo img {
            display: block;
            width: 50px;
            height: auto;
            max-height: 50px;
            object-fit: contain;
        }

        #header nav ul {
            white-space: nowrap;
        }

        #header nav ul li.active > a {
            font-weight: 700;
            text-decoration: underline;
            text-underline-offset: 0.25rem;
        }

        .zzpzo-page-hero {
            min-height: 55vh !important;
        }

        .zzpzo-page-hero .content {
            padding: 2.5rem;
        }

        .zzpzo-page-hero .content h2 {
            margin-bottom: 0;
        }

        .zzpzo-rich-text {
            line-height: 1.8;
            overflow-wrap: anywhere;
            text-align: left;
        }

        .zzpzo-legal-links a {
            text-decoration: none;
        }

        @media screen and (max-width: 980px) {
            #header {
                flex-wrap: wrap;
                gap: 0.5rem;
            }

            #header nav {
                overflow-x: auto;
                max-width: 100%;
            }

            #header nav ul li {
                margin-left: 0.7rem;
            }
        }
    </style>
</head>

<body class="is-preload">
    <header id="header">
        <h1>
            <a href="index.php" id="brandLogo" aria-label="Naar de startpagina">
                <img
                    src="logo.png?id=<?php echo filemtime('logo.png'); ?>"
                    alt="<?= zzpzo_escape($siteTitle) ?> Logo"
                    onerror="this.remove();"
                />
            </a>
        </h1>

        <nav aria-label="Primaire navigatie">
            <ul>
                <li<?= zzpzo_is_active($activePage, 'index.php') ?>><a href="index.php">Startpagina</a></li>
                <li<?= zzpzo_is_active($activePage, 'about.php') ?>><a href="about.php">Over ons</a></li>
                <li<?= zzpzo_is_active($activePage, 'service.php') ?>><a href="service.php">Diensten</a></li>
                <li<?= zzpzo_is_active($activePage, 'contact.php') ?>><a href="contact.php">Contact</a></li>
            </ul>
        </nav>
    </header>
    <?php
}

function zzpzo_render_hero(string $heading, string $imageFile, string $id = 'intro'): void
{
    $bannerUrl = zzpzo_banner_url($imageFile);
    ?>
    <section
        id="<?= zzpzo_escape($id) ?>"
        class="main style1 dark fullscreen zzpzo-page-hero"
        style="background-image: linear-gradient(rgba(0, 0, 0, 0.38), rgba(0, 0, 0, 0.38)), url('<?= zzpzo_escape($bannerUrl) ?>');"
    >
        <div class="content">
            <header>
                <h2><?= zzpzo_escape($heading) ?></h2>
            </header>
        </div>
    </section>
    <?php
}

function zzpzo_render_text_section(string $heading, string $textFile): void
{
    ?>
    <section class="main style3 primary">
        <div class="content">
            <header>
                <h2><?= zzpzo_escape($heading) ?></h2>
            </header>

            <div class="box">
                <div class="zzpzo-rich-text">
                    <?= zzpzo_text_content($textFile) ?>
                </div>
            </div>
        </div>
    </section>
    <?php
}

function zzpzo_render_footer(): void
{
    ?>
    <footer id="footer">
        <ul class="icons zzpzo-legal-links">
            <li><a href="terms.php">Algemene voorwaarden</a></li>
            <li><a href="complain.php">Klachtenportaal</a></li>
            <li><a href="privacy.php">Privacybeleid</a></li>
        </ul>

        <ul class="menu">
            <li>Auteursrecht &copy; <?= date('Y') ?> ZZpzo</li>
        </ul>
    </footer>
    <?php
}

function zzpzo_render_scripts(): void
{
    ?>
    <script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script>
    <script src="assets/js/jquery.poptrox.min.js?id=<?php echo filemtime('assets/js/jquery.poptrox.min.js'); ?>"></script>
    <script src="assets/js/jquery.scrolly.min.js?id=<?php echo filemtime('assets/js/jquery.scrolly.min.js'); ?>"></script>
    <script src="assets/js/jquery.scrollex.min.js?id=<?php echo filemtime('assets/js/jquery.scrollex.min.js'); ?>"></script>
    <script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script>
    <script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script>
    <script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script>
    <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>
</html>
    <?php
}
