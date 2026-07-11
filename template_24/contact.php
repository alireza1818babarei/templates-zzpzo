<?php
$formSuccess='';$formError='';$formName='';$formPhone='';$formEmail='';$formMessage='';
if(isset($_GET['sent'])&&$_GET['sent']==='1'){$formSuccess='Uw bericht is succesvol verzonden.';}
if($_SERVER['REQUEST_METHOD']==='POST'){
	$formName=isset($_POST['name'])?trim($_POST['name']):'';$formPhone=isset($_POST['phone'])?trim($_POST['phone']):'';$formEmail=isset($_POST['email'])?trim($_POST['email']):'';$formMessage=isset($_POST['message'])?trim($_POST['message']):'';
	if($formName===''||$formEmail===''||$formMessage===''){$formError='Vul alle verplichte velden in.';}elseif(!filter_var($formEmail,FILTER_VALIDATE_EMAIL)){$formError='Vul een geldig e-mailadres in.';}elseif(!function_exists('curl_init')){$formError='Het bericht kon niet worden verzonden. Probeer het later opnieuw.';error_log('Contact API error: cURL is not available.');}else{
		$domain=isset($_SERVER['SERVER_NAME'])?$_SERVER['SERVER_NAME']:'';if($domain===''&&isset($_SERVER['HTTP_HOST'])){$domain=$_SERVER['HTTP_HOST'];}$domain=preg_replace('/:\d+$/','',$domain);
		$payload=['domain'=>$domain,'page'=>'contact','name'=>$formName,'phone'=>$formPhone,'email'=>$formEmail,'message'=>$formMessage];
		$curl=curl_init('https://zzpzo.net/api/v1/insertuserscontactform');curl_setopt_array($curl,[CURLOPT_POST=>true,CURLOPT_POSTFIELDS=>http_build_query($payload),CURLOPT_HTTPHEADER=>['Content-Type: application/x-www-form-urlencoded'],CURLOPT_RETURNTRANSFER=>true,CURLOPT_CONNECTTIMEOUT=>5,CURLOPT_TIMEOUT=>15]);
		$apiResponse=curl_exec($curl);$httpCode=curl_getinfo($curl,CURLINFO_HTTP_CODE);$curlError=curl_error($curl);curl_close($curl);
		if($curlError===''&&$httpCode>=200&&$httpCode<300){header('Location: contact.php?sent=1#form-feedback');exit;}
		$formError='Het bericht kon niet worden verzonden. Probeer het later opnieuw.';error_log('Contact API error. HTTP: '.$httpCode.' Curl: '.$curlError.' Response: '.$apiResponse);
	}
}
?>
<!DOCTYPE HTML>
<html>
<head>
	<title><?php $filePath='title.txt';if(file_exists($filePath)){echo nl2br(htmlspecialchars(file_get_contents($filePath)));}else{echo 'Titel';} ?> - Contact</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
	<link rel="stylesheet" href="assets/css/main.css?id=<?php echo filemtime('assets/css/main.css'); ?>" />
	<style>.zz-form-feedback{margin:0 0 1.5rem;padding:1rem 1.1rem;border:1px solid transparent;border-radius:4px;line-height:1.5;text-align:left;overflow-wrap:anywhere;scroll-margin-top:7rem}.zz-form-feedback-success{color:#155724;background:#d4edda;border-color:#c3e6cb}.zz-form-feedback-error{color:#721c24;background:#f8d7da;border-color:#f5c6cb}.dynamic-content{max-width:100%;box-sizing:border-box;overflow-wrap:anywhere;word-break:break-word;overflow-x:hidden}@media screen and (max-width:736px){.dynamic-content,.standard-form,.content,.container.medium{height:auto!important;min-height:0!important;max-height:none!important;overflow:visible!important}.standard-form input,.standard-form textarea,.standard-form button{max-width:100%;box-sizing:border-box}}</style>
</head>
<body class="is-preload hero-page contact-page">
<?php
$defaultBanner='images/pic03.jpg';$bannerFile='contactimage.txt';
if(file_exists($bannerFile)){$bannerUrl=trim(file_get_contents($bannerFile));if($bannerUrl===''){$bannerUrl=$defaultBanner;}}else{$bannerUrl=$defaultBanner;}
?>
<nav id="site-nav"><div class="container nav-container"><a href="index.php" class="navbar-brand" id="brandLogo"><img src="logo.png?id=<?php echo filemtime('logo.png'); ?>" alt="Logo" onerror="this.remove();"></a><ul class="main-menu"><li><a href="index.php">Startpagina</a></li><li><a href="about.php">Over ons</a></li><li><a href="service.php">Diensten</a></li><li><a href="contact.php">Contact</a></li></ul></div></nav>
<section id="header" class="dark dynamic-hero" style="background-image:url('assets/css/images/overlay.png'),url('<?= htmlspecialchars($bannerUrl) ?>');"><header><h1>Contact</h1></header></section>
<section id="page-content" class="main"><header><div class="container"></div></header><div class="content style4 featured"><div class="container medium">
<section class="dynamic-content"><?php $filePath='contact.txt';if(file_exists($filePath)){echo nl2br(htmlspecialchars(file_get_contents($filePath)));}else{echo '-';} ?></section>
<section class="standard-form">
<?php if($formSuccess!==''): ?><div id="form-feedback" class="zz-form-feedback zz-form-feedback-success" role="status" aria-live="polite"><?php echo htmlspecialchars($formSuccess); ?></div><?php endif; ?>
<?php if($formError!==''): ?><div id="form-feedback" class="zz-form-feedback zz-form-feedback-error" role="alert"><?php echo htmlspecialchars($formError); ?></div><?php endif; ?>
<form method="post" action=""><div class="row gtr-50"><div class="col-6 col-12-mobile"><input type="text" name="name" id="name" placeholder="Naam" value="<?php echo htmlspecialchars($formName,ENT_QUOTES,'UTF-8'); ?>" maxlength="150" autocomplete="name" required /></div><div class="col-6 col-12-mobile"><input type="text" name="phone" id="phone" placeholder="Telefoon" value="<?php echo htmlspecialchars($formPhone,ENT_QUOTES,'UTF-8'); ?>" maxlength="50" autocomplete="tel" /></div><div class="col-12"><input type="email" name="email" id="email" placeholder="E-mail" value="<?php echo htmlspecialchars($formEmail,ENT_QUOTES,'UTF-8'); ?>" maxlength="254" autocomplete="email" required /></div><div class="col-12"><textarea name="message" id="message" placeholder="Bericht" maxlength="5000" required><?php echo htmlspecialchars($formMessage); ?></textarea></div><div class="col-12"><ul class="actions special"><li><input type="submit" class="button" value="Verzenden" /></li></ul></div><div class="col-12"><p class="recaptcha-note">Deze site wordt beschermd door reCAPTCHA. Het <a href="privacy.php">privacybeleid</a> en de <a href="terms.php">algemene voorwaarden</a> van Google zijn van toepassing.</p></div></div></form>
</section></div></div></section>
<section id="footer"><div class="copyright"><ul class="menu"><li><a href="terms.php">Algemene voorwaarden</a></li><li><a href="complain.php">Klachtenportaal</a></li><li><a href="privacy.php">Privacybeleid</a></li></ul><p>Auteursrecht &copy; <?php echo date('Y'); ?> ZZpzo</p></div></section>
<script src="assets/js/jquery.min.js?id=<?php echo filemtime('assets/js/jquery.min.js'); ?>"></script><script src="assets/js/jquery.scrolly.min.js?id=<?php echo filemtime('assets/js/jquery.scrolly.min.js'); ?>"></script><script src="assets/js/browser.min.js?id=<?php echo filemtime('assets/js/browser.min.js'); ?>"></script><script src="assets/js/breakpoints.min.js?id=<?php echo filemtime('assets/js/breakpoints.min.js'); ?>"></script><script src="assets/js/util.js?id=<?php echo filemtime('assets/js/util.js'); ?>"></script><script src="assets/js/main.js?id=<?php echo filemtime('assets/js/main.js'); ?>"></script>
<script>(function(){window.addEventListener('load',function(){var f=document.getElementById('form-feedback');if(f){setTimeout(function(){f.scrollIntoView({behavior:'smooth',block:'center'});},220);}});})();</script>
</body></html>