<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>
    <?php
    $filePath = 'title.txt';
    if (file_exists($filePath)) {
      echo nl2br(htmlspecialchars(file_get_contents($filePath)));
    } else {
      echo 'Contact';
    }
    ?> - Contact
  </title>
  <meta name="description" content="">
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
  <link rel="stylesheet" href="assets/css/dynamic-template.css?id=<?php echo filemtime('assets/css/dynamic-template.css'); ?>">
</head>

<body>
  <a class="skip-link" href="#content">Skip to content</a>
  <header class="header-wrap site-shell">
    <nav class="nav-frame" aria-label="Primary navigation">
      <a class="brand" href="index.php" id="brandLogo">
        <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
      </a>
      <button class="menu-toggle" type="button" aria-expanded="false" data-menu-toggle>Menu</button>
      <div class="nav-links" data-nav-links>
        <a href="index.php">Home</a>
        <a href="about.php">About Us</a>
        <a href="service.php">Services</a>
        <a href="contact.php" aria-current="page">Contact</a>
      </div>
    </nav>
  </header>
  <main id="content">
    <?php
    $defaultHeroImage = "assets/images/hero.svg";
    $heroImageFile = "contactimage.txt";

    if (file_exists($heroImageFile)) {
      $heroImageUrl = trim(file_get_contents($heroImageFile));
      if ($heroImageUrl === "") {
        $heroImageUrl = $defaultHeroImage;
      }
    } else {
      $heroImageUrl = $defaultHeroImage;
    }
    ?>
    <section class="hero">
      <div class="site-shell hero-grid">
        <div class="hero-copy">
          <h1>Contact</h1>
        </div>
        <div class="hero-panel">
          <img src="<?php echo htmlspecialchars($heroImageUrl); ?>" alt="Contact">
        </div>
      </div>
    </section>
    <section class="section dynamic-fullwidth-section">
      <div class="site-shell">
        <aside class="form-note dynamic-form-note">
          <div class="dynamic-txt-content dynamic-form-text"><?php
          $filePath = 'contact.txt';
          if (file_exists($filePath)) {
            echo nl2br(htmlspecialchars(file_get_contents($filePath)));
          } else {
            echo '-';
          }
          ?>
          </div>
        </aside>
        <div class="form-card">
          <form class="smart-form" action="#" method="post">
            <div class="field-row"><label for="name">Name</label><input id="name" name="name" type="text"></div>
            <div class="field-row"><label for="phone">Phone</label><input id="phone" name="phone" type="tel"></div>
            <div class="field-row"><label for="email">Email</label><input id="email" name="email" type="email"></div>
            <div class="field-row message"><label for="message">Message</label><textarea id="message"
                name="message"></textarea></div>
            <div class="form-actions">
              <button class="submit-btn" type="submit">Submit</button>
              <p class="recaptcha-note dynamic-recaptcha">This site is protected by reCAPTCHA, the Google <a
                  href="privacy.php">Privacy Policy</a> and <a href="terms.php">Terms of Service</a> apply.</p>
            </div>
          </form>
        </div>
      </div>
    </section>
  </main>
  <footer class="footer">
    <div class="site-shell footer-grid">
      <div>
        <p>Copyright &copy; <?php echo date('Y'); ?> ZZpzo</p>
      </div>
      <div class="footer-links">
        <a href="terms.php">TERMS</a>
        <a href="complain.php">COMPLAINTS</a>
        <a href="privacy.php">PRIVACY</a>
      </div>
    </div>
  </footer>
  <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
</body>

</html>