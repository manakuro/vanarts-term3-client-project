<?php 
    // set namespace
    use WWM\Utility;
?>
<footer class="page-footer">
    
    <div class="row">

        <div class="logo span-l-2">
            <a href="index.php"><img src="img/logo.png"></a>
        </div>

        <div class="span-6 columns page-footer-intor-wrapper">

            <p class="page-footer-intro">World Wide specializes in music, news, events, charts, hot songs/videos, and artist interviews in the US and Canada for music lovers.</p>

            <p class="page-footer-copyright">©2015-2016 AAA Inc.(canada) Ltd. All rights reserved AAA is part of the AAA Inc.</p>

        </div>
        
        <div class="span-l-3 columns">
            
            <h5 class="page-footer-title">categories</h5>
            <ul class="page-footer-nav">
            <?php foreach($config['footer']['categories'] as $val): ?>
                <li><a href="categories.php"><?php echo $val['name']; ?></a></li>
            <?php endforeach; ?>
            </ul>

        </div>

        <div class="span-l-3 columns">

            <h5 class="page-footer-title">about</h5>

            <ul class="page-footer-nav">
                <li><a href="about.php">about us</a></li>
                <li><a href="contact.php">contact us</a></li>
            </ul>

            <ul class="social">
                <?php echo Utility::getSocialLink($config['social_media']); ?>
            </ul>

            <div class="form newsletter-form-footer">

                <input type="text" name="" value="" class="input newsletter-input" placeholder="subscribe newsletter">
                <button type="submit" class="btn newsletter-btn">Submit</button>

            </div>

        </div>

    </div>

</footer>

        <!-- Vend0rs -->    
        <script src="js/libs/jquery.min.js"></script>
        <script src="js/libs/angular.min.js"></script>
        <script src="js/libs/lodash.min.js"></script>
        <script src="js/libs/ckeditor/ckeditor.js"></script>
        <script src="js/libs/modernizr-2.8.3.min.js"></script>

        <script src="js/libs/video.min.js"></script>
        <script src="js/libs/Youtube.min.js"></script>
        <script src="js/libs/Vimeo.js"></script>

        <script src="js/libs/audio.min.js"></script>

        <!-- JavaScript -->
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
            function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
            e=o.createElement(i);r=o.getElementsByTagName(i)[0];
            e.src='https://www.google-analytics.com/analytics.js';
            r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
            ga('create','UA-XXXXX-X','auto');ga('send','pageview');
        </script>
    </body>
</html>