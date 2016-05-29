<?php include('bootstrap.php'); ?>
<?php 
    // set namespace
    use WWM\Utility;

    session_start();

    // create navigation menu html
    $navHTML = Utility::getNav($config['nav']);

    // create social media html
    $socialHTML = Utility::getSocialLink($config['social_media']);

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
        <meta name="robots" content="noindex" /> 

        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <!-- Place favicon.ico in the root directory -->

        <!-- CSS -->
        <link href='https://fonts.googleapis.com/css?family=Roboto:400,300,300italic,400italic,500,500italic,100italic,100|Oswald:400,300,700' rel='stylesheet' type='text/css'>
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <link rel="stylesheet" href="css/libs/normalize.css">
        <link rel="stylesheet" href="css/libs/video-js.css">
        <link rel="stylesheet" href="css/libs/magnific-popup.css">
        <link rel="stylesheet" href="css/main.min.css">

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
                        <a href="<?php echo BASE_URL; ?>"><img src="img/logo.png"></a>
                    </div>
                </div>

                <div class="span-l-3 columns offset-4">
                    
                    <ul class="social"><?php echo $socialHTML; ?></ul>

                </div>

                <div class="span-l-3 columns">
                    
                    <div class="form newsletter-form-header">

                        <input type="text" name="" value="" class="input newsletter-input" placeholder="subscribe newsletter">
                        <button type="submit" class="btn newsletter-btn">Submit</button>

                    </div>

                </div>

            </div>

            <div class="nav-wrapper">
                
                <div class="row">

                    <div class="span-l-9 columns">
                        
                        <nav class="nav">
                            
                            <ul class="nav-list"><?php echo $navHTML; ?></ul>

                        </nav>

                    </div>

                    <div class="span-l-3 columns">
                        
                        <form action="serach.php" method="get" accept-charset="utf-8" class="form">

                            <div class="page-header-searchbar">
                                
                                <input type="text" class="search-input" name="search" value="" placeholder="Search for...">

                                <i class="fa fa-search search-icon" aria-hidden="true"></i>

                            </div>

                        </form>

                    </div>
                    
                </div>

            </div>

        </header>
        <!-- /header -->
       

        
