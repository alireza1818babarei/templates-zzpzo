<!doctype html>
<html lang="nl">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php
    $filePath = 'title.txt';
    if (file_exists($filePath)) {
      echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
      echo 'Klachtenportaal';
    }
    ?> - Klachtenportaal
  </title>
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="assets/css/dynamic-template.css?id=<?php echo filemtime('assets/css/dynamic-template.css'); ?>">
</head>

<body>
  <a class="skip-link" href="#content">Naar de inhoud</a>
  <header class="header-wrap site-shell">
    <nav class="nav-frame" aria-label="Primaire navigatie">
      <a class="brand" href="index.php" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
      </a>
      <button class="menu-toggle" type="button" aria-expanded="false" data-menu-toggle>Menu</button>
      <div class="nav-links" data-nav-links>
        <a href="index.php">Startpagina</a>
        <a href="about.php">Over ons</a>
        <a href="service.php">Diensten</a>
        <a href="contact.php">Contact</a>
      </div>
    </nav>
  </header>
  <main id="content">
    <section class="section dynamic-fullwidth-section">
      <div class="site-shell">
        <aside class="form-note dynamic-form-note">
          <h2 class="dynamic-page-title">Klachtenportaal</h2>
          <div class="dynamic-txt-content dynamic-form-text"><?php
          $filePath = 'complain.txt';
          if (file_exists($filePath)) {
            echo nl2br(htmlspecialchars(file_get_contents($filePath)));
          } else {
            echo '-';
          }
          ?></div>
        </aside>
        <div class="form-card">
          <form class="smart-form" action="#" method="post">
            <div class="field-row"><label for="name">Naam</label><input id="name" name="name" type="text"></div>
            <div class="field-row"><label for="phone">Telefoon</label><input id="phone" name="phone" type="tel"></div>
            <div class="field-row"><label for="email">E-mail</label><input id="email" name="email" type="email"></div>
            <div class="field-row message"><label for="message">Bericht</label><textarea id="message"
                name="message"></textarea></div>
            <div class="form-actions">
              <button class="submit-btn" type="submit">Verzenden</button>
              <p class="recaptcha-note dynamic-recaptcha">Deze site wordt beschermd door reCAPTCHA. Het <a
                  href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="site-shell footer-grid">
      <div>
        <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
      </div>
      <div class="footer-links">
        <a href="terms.php">Algemene voorwaarden</a>
        <a href="complain.php">Klachtenportaal</a>
        <a href="privacy.php">Privacybeleid</a>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>

</html>