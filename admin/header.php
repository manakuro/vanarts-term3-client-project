<?php include('../bootstrap.php'); ?>
<?php 
    use WWM\Utility;

    session_start();

    // If the user has not logined
    // go to login page
    if (empty($_SESSION['auth'])  && CURRENT_PAGE !== 'login') {
        header("Location: ./login.php");
        return;
    }

    $cssDir = '../css/';
    // create navigation menu html
    $navHTML = Utility::getNav($config['admin']['nav']);

?>

<!doctype html>
<html class="no-js" lang="">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title><?php echo $config['title']?></title>
        <meta name="description" content="<?php echo $config['meta']['desc']?>">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        
        <!-- perevent google search robots from indexing -->
        <meta name="robots" content="noindex"/> 

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,100italic,100|Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="<?php echo $cssDir; ?>font-awesome.min.css">
        <link rel="stylesheet" href="<?php echo $cssDir; ?>libs/normalize.css">
        <link rel="stylesheet" href="<?php echo $cssDir; ?>libs/video-js.css">
        <link rel="stylesheet" href="<?php echo $cssDir; ?>libs/magnific-popup.css">
        <link rel="stylesheet" href="<?php echo $cssDir; ?>main.min.css">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <!-- header -->
        <header class="page-header">
            
            <div class="row header-inner">
            
                <div class="span-l-2 columns">
                    <div class="logo">
                        <a href="<?php echo BASE_URL; ?>"><img src="../img/logo.png"></a>
                    </div>
                </div>

            </div>

            <div class="nav-wrapper">
                
                <div class="row">

                    <div class="span-l-12 columns">
                        
                        <nav class="nav">
                            
                            <ul class="nav-list"><?php echo $navHTML; ?></ul>

                        </nav>

                    </div>
                    
                </div>

            </div>

        </header>
        <!-- /header -->
       

        
