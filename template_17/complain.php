<?php
$formSuccess = '';
$formError = '';
$formName = '';
$formPhone = '';
$formEmail = '';
$formMessage = '';

if (isset($_GET['sent']) && $_GET['sent'] === '1') {
  $formSuccess = 'Uw klacht is succesvol verzonden.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $formName = isset($_POST['name']) ? trim($_POST['name']) : '';
  $formPhone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
  $formEmail = isset($_POST['email']) ? trim($_POST['email']) : '';
  $formMessage = isset($_POST['message']) ? trim($_POST['message']) : '';


  if ($formName === '' || $formEmail === '' || $formMessage === '') {
    $formError = 'Vul alle verplichte velden in.';
  } elseif (!filter_var($formEmail, FILTER_VALIDATE_EMAIL)) {
    $formError = 'Vul een geldig e-mailadres in.';
  } elseif (!function_exists('curl_init')) {
    $formError = 'De klacht kon niet worden verzonden. Probeer het later opnieuw.';
    error_log('Complaint API error: cURL is not available.');
  } else {
    $domain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';

    if ($domain === '' && isset($_SERVER['HTTP_HOST'])) {
      $domain = $_SERVER['HTTP_HOST'];
    }

    $domain = preg_replace('/:\d+$/', '', $domain);

    $payload = [
      'domain' => $domain,
      'page' => 'complain',
      'name' => $formName,
      'phone' => $formPhone,
      'email' => $formEmail,
      'message' => $formMessage
    ];

    $curl = curl_init('https://zzpzo.net/api/v1/insertuserscontactform');

    curl_setopt_array($curl, [
      CURLOPT_POST => true,
      CURLOPT_POSTFIELDS => http_build_query($payload),
      CURLOPT_HTTPHEADER => ['Content-Type: application/x-www-form-urlencoded'],
      CURLOPT_RETURNTRANSFER => true,
      CURLOPT_CONNECTTIMEOUT => 5,
      CURLOPT_TIMEOUT => 15
    ]);

    $apiResponse = curl_exec($curl);
    $httpCode = curl_getinfo($curl, CURLINFO_HTTP_CODE);
    $curlError = curl_error($curl);

    curl_close($curl);

    if ($curlError === '' && $httpCode >= 200 && $httpCode < 300) {
      header('Location: complain.php?sent=1#form-feedback');
      exit;
    }

    $formError = 'De klacht kon niet worden verzonden. Probeer het later opnieuw.';
    error_log('Complaint API error. HTTP: ' . $httpCode . ' Curl: ' . $curlError . ' Response: ' . $apiResponse);
  }
}
?>
<!DOCTYPE html>
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
      echo 'Titel';
    }
    ?> - Klachtenportaal
  </title>
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open+Sans:300,400">
  <link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
  <link rel="stylesheet" href="css/fontawesome-all.min.css?id=<?php echo filemtime('css/fontawesome-all.min.css'); ?>">
  <link rel="stylesheet" href="css/tooplate-style.css?id=<?php echo filemtime('css/tooplate-style.css'); ?>">
  <link rel="stylesheet" href="css/zz-form-feedback.css?id=<?php echo filemtime('css/zz-form-feedback.css'); ?>">
</head>

<body>
  <div id="loader-wrapper">
    <div id="loader"></div>
    <div class="loader-section section-left"></div>
    <div class="loader-section section-right"></div>
  </div>
  <div class="tm-container">
    <div class="tm-container-inner">

      <nav class="zz-top-nav">
        <a href="index.php" class="navbar-brand" id="brandLogo">
          <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();">
        </a>
        <button class="zz-menu-toggle" type="button" aria-label="Menu">☰</button>
        <div class="zz-menu-wrap">
          <ul class="zz-main-menu">
            <li><a class="" href="index.php">Startpagina</a></li>
            <li><a class="" href="about.php">Over ons</a></li>
            <li><a class="" href="service.php">Diensten</a></li>
            <li><a class="" href="contact.php">Contact</a></li>
          </ul>
        </div>
      </nav>

      <section class="zz-complain-section">
        <div class="container">
          <div class="zz-form-panel">
            <div class="row">
              <h2 class="col-sm-12 text-left mb-5">Klachtenportaal</h2>
            </div>
            <div class="row mb-4">
              <div class="col-xs-12 col-sm-12 col-md-6 pb-5 col-lg-6 col-xl-6 zz-contact-text">
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
              <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-xl-6 mb-sm-4 mb-md-0 mb-4">
                <?php if ($formSuccess !== ''): ?>
                  <div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite">
                    <?php echo htmlspecialchars($formSuccess); ?>
                  </div>
                <?php endif; ?>

                <?php if ($formError !== ''): ?>
                  <div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert">
                    <?php echo htmlspecialchars($formError); ?>
                  </div>
                <?php endif; ?>

                <form action="" method="POST">
                  <div class="form-group"><input type="text" name="name" class="form-control" placeholder="Naam"
                      value="<?php echo htmlspecialchars($formName, ENT_QUOTES, 'UTF-8'); ?>" maxlength="150"
                      autocomplete="name" required></div>
                  <div class="form-group"><input type="text" name="phone" class="form-control" placeholder="Telefoon"
                      value="<?php echo htmlspecialchars($formPhone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="50"
                      autocomplete="tel"></div>
                  <div class="form-group"><input type="email" name="email" class="form-control" placeholder="E-mail"
                      value="<?php echo htmlspecialchars($formEmail, ENT_QUOTES, 'UTF-8'); ?>" maxlength="254"
                      autocomplete="email" required></div>
                  <div class="form-group tm-mb-20"><textarea rows="5" name="message" class="form-control"
                      placeholder="Bericht" maxlength="5000"
                      required><?php echo htmlspecialchars($formMessage); ?></textarea></div>
                  <div class="form-group"><button type="submit" class="btn btn-primary tm-btn-send">Verzenden</button>
                  </div>
                </form>
                <div class="zz-form-note">Deze site wordt beschermd door reCAPTCHA. Het <a
                    href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google
                  zijn van toepassing.</div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer class="zz-footer">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-sm-12 col-md-6">
              <p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p>
            </div>
            <div class="col-sm-12 col-md-6 zz-footer-links">
              <a href="terms.php">Algemene voorwaarden</a>
              <a href="complain.php">Klachtenportaal</a>
              <a href="privacy.php">Privacybeleid</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="js/jquery-3.2.1.slim.min.js?id=<?php echo filemtime('js/jquery-3.2.1.slim.min.js'); ?>"></script>
  <script src="js/zz-dynamic.js?id=<?php echo filemtime('js/zz-dynamic.js'); ?>"></script>
</body>
<<<<<<< HEAD

=======
>>>>>>> 2849b00648a7e67c9ffbc11358c845e470ac863b
</html>