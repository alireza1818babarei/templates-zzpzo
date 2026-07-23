<?php
$formSuccess = '';
$formError = '';
$formName = '';
$formPhone = '';
$formEmail = '';
$formMessage = '';

if (isset($_GET['sent']) && $_GET['sent'] === '1') {
    $formSuccess = 'Your message has been sent successfully.';
}

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $formName = isset($_POST['name']) ? trim($_POST['name']) : '';
    $formPhone = isset($_POST['phone']) ? trim($_POST['phone']) : '';
    $formEmail = isset($_POST['email']) ? trim($_POST['email']) : '';
    $formMessage = isset($_POST['message']) ? trim($_POST['message']) : '';

    if ($formName === '' || $formEmail === '' || $formMessage === '') {
        $formError = 'Please complete all required fields.';
    } elseif (!filter_var($formEmail, FILTER_VALIDATE_EMAIL)) {
        $formError = 'Please enter a valid email address.';
    } elseif (!function_exists('curl_init')) {
        $formError = 'Your message could not be sent. Please try again later.';
        error_log('Contact API error: cURL is not available.');
    } else {
        $domain = isset($_SERVER['SERVER_NAME']) ? $_SERVER['SERVER_NAME'] : '';

        if ($domain === '' && isset($_SERVER['HTTP_HOST'])) {
            $domain = $_SERVER['HTTP_HOST'];
        }

        $domain = preg_replace('/:\d+$/', '', $domain);

        $payload = [
            'domain' => $domain,
            'page' => 'contact',
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
            header('Location: contact.php?sent=1#form-feedback');
            exit;
        }

        $formError = 'Your message could not be sent. Please try again later.';
        error_log('Contact API error. HTTP: ' . $httpCode . ' Curl: ' . $curlError . ' Response: ' . $apiResponse);
    }
}
?>
<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Contact';
}
?> - Contact</title>
  <link rel="stylesheet" href="assets/css/style.css?id=<?php echo filemtime('assets/css/style.css'); ?>">
  <style>
    .zz-form-feedback{margin:0 0 1.25rem;padding:.9rem 1rem;border:1px solid transparent;border-radius:10px;line-height:1.5;text-align:left;overflow-wrap:anywhere;scroll-margin-top:7rem}
    .zz-form-feedback-success{color:#155724;background:#d4edda;border-color:#c3e6cb}
    .zz-form-feedback-error{color:#721c24;background:#f8d7da;border-color:#f5c6cb}
    @media(max-width:760px){.contact-form input,.contact-form textarea,.contact-form button{max-width:100%;box-sizing:border-box}}
  </style>
</head>
<body>
  <header class="site-header">
    <a class="brand" href="index.php" id="brandLogo"><img src="logo.png" alt="Logo" onerror="this.remove();"></a>
    <button class="menu-toggle" type="button" aria-expanded="false" aria-controls="primaryNav" aria-label="Open menu"><span></span><span></span><span></span></button>
    <nav class="nav" id="primaryNav"><a href="index.php"><span>Home</span></a><a href="about.php"><span>About Us</span></a><a href="service.php"><span>Services</span></a><a href="contact.php" class="active"><span>Contact</span></a></nav>
  </header>
  <main>
  <?php
$defaultHeroImage = 'assets/images/hero.svg';
$heroImageFile = 'contactimage.txt';

if (file_exists($heroImageFile)) {
    $heroImageUrl = trim(file_get_contents($heroImageFile));
    if ($heroImageUrl === '') {
        $heroImageUrl = $defaultHeroImage;
    }
} else {
    $heroImageUrl = $defaultHeroImage;
}
?>
  <section class="page-hero">
      <img src="<?php echo htmlspecialchars($heroImageUrl); ?>" alt="Contact">
      <h1>Contact</h1>
    </section>
  <section class="contact-area" id="content">
      <div class="contact-layout">
        <div class="contact-copy dynamic-content">
          <?php
$filePath = 'contact.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo '-';
}
?>
        </div>
        <div class="form-wrap">
          <?php if ($formSuccess !== ''): ?>
            <div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite"><?php echo htmlspecialchars($formSuccess); ?></div>
          <?php endif; ?>
          <?php if ($formError !== ''): ?>
            <div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert"><?php echo htmlspecialchars($formError); ?></div>
          <?php endif; ?>
          <form class="contact-form" action="" method="post">
            <div class="field"><label for="name">Name</label><input id="name" name="name" type="text" placeholder="Name" value="<?php echo htmlspecialchars($formName); ?>" maxlength="150" autocomplete="name" required></div>
            <div class="field"><label for="phone">Phone</label><input id="phone" name="phone" type="tel" placeholder="Phone" value="<?php echo htmlspecialchars($formPhone); ?>" maxlength="50" autocomplete="tel"></div>
            <div class="field"><label for="email">Email</label><input id="email" name="email" type="email" placeholder="Email" value="<?php echo htmlspecialchars($formEmail); ?>" maxlength="254" autocomplete="email" required></div>
            <div class="field field-full"><label for="message">Message</label><textarea id="message" name="message" placeholder="Message" maxlength="5000" required><?php echo htmlspecialchars($formMessage); ?></textarea></div>
            <button class="btn form-submit" type="submit"><span>Submit</span></button>
          </form>
          <p class="form-note dynamic-recaptcha-note">This site is protected by reCAPTCHA, the Google <a href="privacy.php" class="recaptcha-link">Privacy Policy</a> and <a href="terms.php" class="recaptcha-link">Terms of Service</a> apply.</p>
        </div>
      </div>
    </section>
  </main>
  <footer class="site-footer">
    <div class="footer-links">
      <a href="terms.php">TERMS</a>
      <a href="complain.php">COMPLAINTS</a>
      <a href="privacy.php">PRIVACY</a>
    </div>
    <p class="mb-0">Copyright &copy; <?php echo date('Y'); ?> ZZpzo</p>
  </footer>
  <script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
  <script>window.addEventListener('load',function(){var f=document.getElementById('form-feedback');if(f){setTimeout(function(){f.scrollIntoView({behavior:'smooth',block:'center'});},220);}});</script>
</body>
</html>
