<footer class="page-footer section">
    
    <div class="row">

        <div class="span-3 columns">
            
            <div class="logo">
                <a href="index.php"><img src="img/logo.png"></a>
            </div>

        </div>
        
        <div class="span-3 offset-1 columns">
            
            <h5 class="page-footer-title">featured products</h5>
            <ul class="page-footer-nav">
            <?php foreach($config['footer']['featured_products'] as $val): ?>
                <li><a href="products.php"><?php echo $val['name']; ?></a></li>
            <?php endforeach; ?>
            </ul>

        </div>

        <div class="span-2 offset-2 columns">

            <h5 class="page-footer-title">Site Maps</h5>

            <ul class="page-footer-nav">
            <?php echo $navHTML; ?>
            </ul>

        </div>
    </div>

    <div class="row row-center">
        
        <div class="span-8 columns">
            <ul class="social">
            <?php  echo $socialHTML; ?>
            </ul>
            <p class="copyright">©2015-2016 Biz Coach Plus</p>
        </div>

    </div>

</footer>

        <!-- JavaScript -->    
        <script src="js/plugins.js"></script>
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