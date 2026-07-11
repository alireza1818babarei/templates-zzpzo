<?php
$formSuccess = '';
$formError = '';
$formName = '';
$formPhone = '';
$formEmail = '';
$formMessage = '';

if (isset($_GET['sent']) && $_GET['sent'] === '1') {
    $formSuccess = 'Uw bericht is succesvol verzonden.';
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
        $formError = 'Het bericht kon niet worden verzonden. Probeer het later opnieuw.';
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

        $formError = 'Het bericht kon niet worden verzonden. Probeer het later opnieuw.';
        error_log('Contact API error. HTTP: ' . $httpCode . ' Curl: ' . $curlError . ' Response: ' . $apiResponse);
    }
}
?>
<!DOCTYPE html>
<html lang="nl">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=Edge">
<meta name="description" content="">
<meta name="keywords" content="">
<meta name="author" content="templatemo">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

<title><?php
$filePath = 'title.txt';
if (file_exists($filePath)) {
    echo nl2br(htmlspecialchars(file_get_contents($filePath)));
} else {
    echo 'Titel';
}
?>-Contact</title>

<link rel="stylesheet" href="css/bootstrap.min.css?id=<?php echo filemtime('css/bootstrap.min.css'); ?>">
<link rel="stylesheet" href="css/animate.css?id=<?php echo filemtime('css/animate.css'); ?>">
<link rel="stylesheet" href="css/font-awesome.min.css?id=<?php echo filemtime('css/font-awesome.min.css'); ?>">
<link rel="stylesheet" href="css/templatemo-style.css?id=<?php echo filemtime('css/templatemo-style.css'); ?>">
<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,700" rel="stylesheet">
<style>
.zz-form-feedback{margin:0 0 1.5rem;padding:1rem 1.1rem;border:1px solid transparent;border-radius:4px;line-height:1.5;text-align:left;overflow-wrap:anywhere;scroll-margin-top:7rem}
.zz-form-feedback-success{color:#155724;background:#d4edda;border-color:#c3e6cb}
.zz-form-feedback-error{color:#721c24;background:#f8d7da;border-color:#f5c6cb}
.zz-dynamic-content{max-width:100%;box-sizing:border-box;overflow-wrap:anywhere;word-break:break-word;overflow-x:hidden}
@media (max-width:767px){.zz-form-page #home,.zz-form-page #home>.container,.zz-form-page #home .row,.zz-form-page .home-thumb,.zz-form-page .section-title,.zz-dynamic-content{height:auto!important;min-height:0!important;max-height:none!important;overflow:visible!important}.zz-form-page .home-img{min-height:320px;background-size:cover!important;background-position:center!important}}
</style>
</head>
<body class="zz-form-page" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<div class="preloader"><div class="spinner"><span class="spinner-rotate"></span></div></div>

<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
  <div class="container">
    <a href="index.php" class="navbar-brand" id="brandLogo">
      <img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" style="width:150px;margin-top:-10px;" onerror="this.remove();">
    </a>
    <div class="navbar-header" style="min-height:70px;background: #1C1C1C;">
      <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
        <span class="icon icon-bar"></span><span class="icon icon-bar"></span><span class="icon icon-bar"></span>
      </button>
    </div>
    <div class="collapse navbar-collapse">
      <ul class="nav navbar-nav navbar-right">
        <li><a href="index.php" class="smoothScroll">Startpagina</a></li>
        <li><a href="about.php" class="smoothScroll">Over ons</a></li>
        <li><a href="service.php" class="smoothScroll">Diensten</a></li>
        <li><a href="contact.php" class="smoothScroll">Contact</a></li>
      </ul>
    </div>
  </div>
</div>

<?php
$defaultBanner = "images/home-img.jpg";
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

<section id="home" class="parallax-section">
  <div class="container">
    <div class="row">
      <div class="col-md-6 col-sm-6">
        <div class="home-img" style="background: url('<?= htmlspecialchars($bannerUrl) ?>') no-repeat;"></div>
      </div>

      <div class="col-md-6 col-sm-6">
        <div class="home-thumb">
          <div class="section-title" style="width: 100%;">
            <h1 class="wow fadeInUp" data-wow-delay="0.6s">contact</h1>

            <div class="zz-dynamic-content">
              <?php
              $filePath = 'contact.txt';
              if (file_exists($filePath)) {
                  echo nl2br(htmlspecialchars(file_get_contents($filePath)));
              } else {
                  echo '-';
              }
              ?>
            </div>

            <div class="container py-5">
              <div class="row justify-content-center">
                <div class="col-md-12">
                  <p class="text-center mb-4">Neem contact op</p>

                  <?php if ($formSuccess !== ''): ?>
                    <div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite"><?php echo htmlspecialchars($formSuccess); ?></div>
                  <?php endif; ?>

                  <?php if ($formError !== ''): ?>
                    <div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert"><?php echo htmlspecialchars($formError); ?></div>
                  <?php endif; ?>

                  <form action="" method="post">
                    <div class="row g-3 mb-3">
                      <div class="col-md-4" style="margin-bottom: 20px;">
                        <input type="text" name="name" class="form-control" placeholder="Naam" value="<?php echo htmlspecialchars($formName, ENT_QUOTES, 'UTF-8'); ?>" maxlength="150" autocomplete="name" required>
                      </div>
                      <div class="col-md-4" style="margin-bottom: 20px;">
                        <input type="email" name="email" class="form-control" placeholder="E-mail" value="<?php echo htmlspecialchars($formEmail, ENT_QUOTES, 'UTF-8'); ?>" maxlength="254" autocomplete="email" required>
                      </div>
                      <div class="col-md-4" style="margin-bottom: 20px;">
                        <input type="tel" name="phone" class="form-control" placeholder="Telefoon" value="<?php echo htmlspecialchars($formPhone, ENT_QUOTES, 'UTF-8'); ?>" maxlength="50" autocomplete="tel">
                      </div>
                    </div>

                    <div class="mb-3" style="margin-bottom: 20px;">
                      <textarea name="message" rows="3" class="form-control" placeholder="Bericht" maxlength="5000" required><?php echo htmlspecialchars($formMessage); ?></textarea>
                    </div>

                    <p class="small text-muted mb-4">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php" class="text-decoration-none">privacybeleid</a> en de <a href="terms.php" class="text-decoration-none">algemene voorwaarden</a> van Google zijn van toepassing.</p>

                    <div class="text-end" style="margin-bottom: 20px;">
                      <button type="submit" class="btn btn-outline-secondary px-4">Verzenden</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<footer style="background: #1C1C1C;">
  <div class="container">
    <div class="row">
      <div class="col-md-12 col-sm-12">
        <div class="wow fadeInUp footer-copyright" data-wow-delay="1.8s"><p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZPZO</p></div>
      </div>
      <div style="width: 100%;">
        <ul class="social-icons" style="list-style: none; padding: 0;">
          <li><a href="terms.php">Algemene voorwaarden</a></li>
          <li><a href="complain.php">Klachtenportaal</a></li>
          <li><a href="privacy.php">Privacybeleid</a></li>
        </ul>
      </div>
    </div>
  </div>
</footer>

<script src="js/jquery.js?id=<?php echo filemtime('js/jquery.js'); ?>"></script>
<script src="js/bootstrap.min.js?id=<?php echo filemtime('js/bootstrap.min.js'); ?>"></script>
<script src="js/jquery.parallax.js?id=<?php echo filemtime('js/jquery.parallax.js'); ?>"></script>
<script src="js/smoothscroll.js?id=<?php echo filemtime('js/smoothscroll.js'); ?>"></script>
<script src="js/wow.min.js?id=<?php echo filemtime('js/wow.min.js'); ?>"></script>
<script src="js/custom.js?id=<?php echo filemtime('js/custom.js'); ?>"></script>
<script>
(function(){window.addEventListener('load',function(){var feedback=document.getElementById('form-feedback');if(feedback){window.setTimeout(function(){feedback.scrollIntoView({behavior:'smooth',block:'center'});},250);}});})();
</script>
</body>
</html>