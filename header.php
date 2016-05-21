<?php include('bootstrap.php'); ?>
<?php 
    session_start();

    // Create navigation html
    $navHTML = '';
    foreach($config['nav'] as $val) {
        // if ($val['only_member'] && empty($_SESSION['auth'])) continue;
        $navHTML .= '<li><a href="'. $val['href'] .'">'. $val['name'] .'</a></li>';
    }

    // Create social media sectio html
    $socialHTML = '';
    foreach($config['social_media'] as $val) {
        $socialHTML .= '<li><a href="'. $val['href'] .'"><i class="'. $val['class']  .'"></i>'. $val['name'] .'</a></li>';
    }

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $config['title']?></title>
        <meta name="description" content="<?php echo $config['meta']['desc']?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,100italic,100|Lato:400,300,300italic|Dancing+Script:400,700' rel='stylesheet' type='text/css'>        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.min.css">

        <!-- Fancybox -->
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.3.min.js"><\/script>')</script>
        <script src="js/vendor/jquery.mousewheel-3.0.6.pack.js"></script>
        <link href="js/source/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
        <script src="js/source/jquery.fancybox.js" type="text/javascript"></script>
        <script src="js/source/jquery.fancybox.pack.js" type="text/javascript"></script>
        <link href="js/source/helpers/jquery.fancybox-buttons.css" rel="stylesheet" type="text/css"/>
        <script src="js/source/helpers/jquery.fancybox-buttons.js" type="text/javascript"></script>
        <script src="js/source/helpers/jquery.fancybox-media.js" type="text/javascript"></script>
        <link href="js/source/helpers/jquery.fancybox-thumbs.css" rel="stylesheet" type="text/css"/>
        <script src="js/source/helpers/jquery.fancybox-thumbs.js" type="text/javascript"></script>
        
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <header class="page-header">
            
            <div class="row">
            
                <div class="span-3 columns">
                    <div class="logo">
                        <a href="index.php"><img src="img/logo.png"></a>
                    </div>
                </div>

                <div class="span-9 columns">
                    
                    <nav class="nav">
                        
                        <ul>
                            <?php echo $navHTML; ?>
                        </ul>

                    </nav>

                </div>

            </div>

        </header>
       

        
