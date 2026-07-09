<!DOCTYPE html>
<html class="no-js"> 
    <head>
        <meta charset="utf-8">
        <title><?php
        $filePath = 'title.txt';  
        if (file_exists($filePath)) {
            echo nl2br(htmlspecialchars(file_get_contents($filePath)));
        } else {
            echo 'Title';
        }
    ?>-Terms</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
 
        <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700,800' rel='stylesheet' type='text/css'>
        
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <link rel="stylesheet" href="css/font-awesome.css">
        <link rel="stylesheet" href="css/animate.css">
        <link rel="stylesheet" href="css/templatemo_misc.css">
        <link rel="stylesheet" href="css/templatemo_style.css">
        <link rel="stylesheet" href="css/owl-carousel.css">

        <script src="js/vendor/modernizr-2.6.1-respond-1.1.0.min.js"></script>
    </head>
    <body>
        <div class="site-main" id="sTop">
            <div class="site-header">
                <div class="main-header">
                    <div class="container">
                        <div id="menu-wrapper">
                            <div class="row">
                                <nav class="navbar navbar-inverse" role="navigation">
                                    <div class="navbar-header">
                                        <button type="button" id="nav-toggle" class="navbar-toggle" data-toggle="collapse" data-target="#main-nav">
                                            <span class="sr-only">Toggle navigation</span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                            <span class="icon-bar"></span>
                                        </button>
                                            <a href="index.php" class="navbar-brand" id="brandLogo">
    <img src="logo.png" alt="Logo"
         style="width:50px;margin-top:-5px;"
         onerror="this.remove();">
</a>
                                        <div id="main-nav" class="collapse navbar-collapse">
                                          <ul class="menu-first nav navbar-nav" style="margin-right: 20px;">
                                                <li><a href="index.php">Home</a></li>
                                                <li><a href="about.php">About Us</a></li>
                                                <li><a href="service.php">Services</a></li>
                                                <li><a href="contact.php">Contact</a></li> 
                                                <!-- <li><a href="terms.php">Terms</a></li> -->
                                               <!--  <li><a href="complain.php">Complain</a></li>    
                                                <li><a href="privacy.php">Privacy</a></li> -->                             
                                            </ul>                                    
                                        </div> <!-- /.main-menu -->
                                    </div>
                                </nav>
                            </div> <!-- /.row -->
                        </div> <!-- /#menu-wrapper -->                        
                    </div> <!-- /.container -->
                </div> <!-- /.main-header -->
            </div> <!-- /.site-header -->
        </div> <!-- /.site-main -->


    <?php
$defaultBanner = "img/banner-bg.jpg";
$bannerFile = "termsimage.txt";

if (file_exists($bannerFile)) {
    $bannerUrl = trim(file_get_contents($bannerFile));
    if ($bannerUrl === "") {
        $bannerUrl = $defaultBanner;
    }
} else {
    $bannerUrl = $defaultBanner;
}
?>


        <div style="margin-top: 150px;min-height: 650px;">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div style="padding:20px;text-align: justify;">
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
            </div>
        </div>
 
 

        <footer>
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-12">
                            <p>Copyright &copy; <?php echo date('Y'); ?> ZZpzo</p>

                    </div>
                    <div class="col-md-4 col-sm-12">
                       <ul class="social-icons">
                            <li><a href="terms.php">TERMS</a></li>
                            <li><a href="complain.php">COMPLAINTS</a></li>
                            <li><a href="privacy.php">PRIVACY</a></li>
                        </ul>
                    </div>
                    <div class="col-md-2 col-md-offset-2 col-sm-12">
                        <div class="back-to-top">
                            <a href="#top">
                                <i class="fa fa-angle-up"></i>
                                back to top
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        
        <script src="js/vendor/jquery-1.11.0.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.0.min.js"><\/script>')</script>
        <script src="js/bootstrap.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Map -->
        <script src="https://maps.google.com/maps/api/js?sensor=true"></script>
        <script src="js/vendor/jquery.gmap3.min.js"></script>

        <script type="text/javascript">
        $(document).ready(function() {
            
            // mobile nav toggle
            $('#nav-toggle').on('click', function (event) {
                event.preventDefault();
                $('#main-nav').toggleClass("open");
            });
        });
        </script>
        
    </body>
</html>