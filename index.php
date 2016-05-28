<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    // grab news data from dt_news table
    $newsData = $db->select('dt_news', '*', array(
        'ORDER' => 'post_date DESC',
        'LIMIT' => 4
    ));

    $topNews = $newsData[0];
    array_splice($newsData, 0, 1);


    // grab video data from dt_videos table
    $videoData = $db->select('dt_videos', '*', array(
        'ORDER' => 'post_date DESC',
        'LIMIT' => 10
    ));

    // grab charts data from dt_charts table
    $chartsData = $db->select('dt_charts', '*', array(
        'ORDER' => 'post_date DESC',
        'LIMIT' => 5
    ));

    // grab features data from dt_features table
    $featuresData = $db->select('dt_features', '*', array(
        'ORDER' => 'post_date DESC',
        'LIMIT' => 6
    ));

?>
    
    <div class="sec-bk-news">
        
        <div class="row">
        
            <div class="span-l-12 columns">
                
                <div class="sec-bk-news-inner cf">

                    <span class="sec-heading sec-bk-news-heading span-2">breaking news</span>
                    
                    <div class="sec-bk-news-content-wrapper span-10">
                        
                        <p class="sec-bk-news-content">Jennifer Lopez Teases Her New Song ‘Aint Your Mama’</p>
                        <a href="#" class="bk-news-icon bk-news-next-icon">next</a>
                        <a href="#" class="bk-news-icon bk-news-prev-icon">prev</a>

                    </div>

                </div>

            </div>

            
        </div>

    </div>

    <main class="page-main">

        <div class="row">
            
            <div class="span-9 columns">
                          
                <!-- sec-top-news  -->          
                <section class="sec sec-top-news">
                    
                    <div class="row">
                        
                        <!-- top news section -->
                        <div class="span-l-12 columns">
                            
                            
                            <div class="sec-heading-wrapper">
                                
                                <h3 class="sec-heading">top news</h3>                              
                            </div>

                            <div class="sec-top-img-wrapper social-media-outer">
                                
                                <a href="single.php?news_id=<?php echo $topNews['id']; ?>">
            
                                    <img src="<?php echo $topNews['img']; ?>" alt="<?php echo $topNews['title']; ?>">

                                    <h5 class="sec-top-img-headline"><?php echo $topNews['title']; ?></h5>    

                                    <div class="social-wrapper">
                                        <ul class="social">
                                            <?php echo Utility::getSocialLink($config['social_media']); ?>
                                        </ul>
                                    </div>

                                </a>

                            </div>

                        </div><!-- /top news section -->

                        <!-- news section -->
                    <?php foreach($newsData as $val): ?>
                        <div class="span-l-4 columns sec-top-news-list social-media-outer">
                            
                            <a href="single.php?news_id=<?php echo $val['id']?>" class="sec-news-link">
                                
                                <img src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['title']; ?>">

                                <div class="sec-top-news-list-headline-wrapper">
                                    
                                    <h5 class="sec-top-news-list-headline"><?php echo $val['title']; ?></h5>

                                    <div class="sec-top-news-list-bottom">

                                        <span class="sec-top-news-list-date">
                                        <?php echo Utility::datetimeToPostDate($val['post_date']); ?>                                            
                                        </span>
                                        <button class="tag">POP</button>

                                    </div>

                                </div>

                            </a>

                        </div><!-- /news section -->

                    <?php endforeach; ?>

                    </div>

                </section><!-- /sec-top-news  -->

                <!-- sec-home-videos  -->
                <section class="sec sec-home-videos">
                    
                    <div class="row">
                        
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                
                                <h3 class="sec-heading sec-home-videos-heading">videos</h3>                              
                            </div>

                        </div>

                        <!-- top video -->
                        <div class="columns sec-home-videos-top js-home-video-top">
                            
                            <div class="sec-top-img-wrapper">

                                <video
                                    id="vid1"
                                    class="video-js vjs-default-skin"
                                    controls
                                    data-setup='{ 
                                        "techOrder": ["youtube", "vimeo"], 
                                        "sources": [{ "type": "video/vimeo", "src": "https://vimeo.com/75286772"}] }'
                                  >
                                </video>

                                <h5 class="sec-top-img-headline">The Weeknd pulls out of European leg of Rihanna’s ANTI Tour</h5>    

                            </div>

                        </div>

                        <div class="span-4 columns sec-home-videos-list-wrapper js-home-video-list">

                        <?php foreach($videoData as $val): ?>
                            <div class="sec-home-videos-list cf">
                            
                                <a href="#">
                                    
                                    <div class="sec-home-videos-list-img-wrapper">
                                        <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['title']; ?>">
                                    </div>

                                    <div class="sec-home-videos-list-headline-wrapper">
                                        
                                        <h5 class="sec-home-videos-list-headline"><?php echo $val['title']; ?></h5>

                                    </div>
                                    
                                </a>

                            </div>
                        <?php endforeach; ?>

                        </div>

                    </div>

                </section><!-- /sec-home-videos  -->

                <!-- sec-home-charts  -->          
                <section class="sec sec-home-charts">
                    
                    <div class="row">
                        
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                
                                <h3 class="sec-heading">charts</h3>                              
                            </div>

                        </div>

                    <?php foreach ($chartsData as $index => $val): ?>

                        <div class="span-l-12 columns sec-home-charts-list">
                            
                            <!-- <div class="row"> -->
                                
                                <div class="span-l-1 columns sec-home-charts-list-ranks-wrapper">
                                    
                                    <span class="sec-home-charts-list-ranks"><?php echo $index+1; ?></span>

                                </div>

                                <div class="span-l-2 columns sec-home-charts-list-img-wrapper js-play-audio">
                                    
                                    <a href="#">
                                        
                                        <img class="sec-home-charts-list-img" src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['title']; ?>">

                                        <i class="fa fa-play sec-home-charts-list-play js-audio-icon" aria-hidden="true"></i>

                                    </a>

                                </div>

                                <div class="span-l-6 columns sec-home-charts-list-headline-wrapper">
                                        
                                    <h5 class="sec-home-charts-list-singer"><?php echo $val['singer']; ?></h5>
                                    <h5 class="sec-home-charts-list-title"><?php echo $val['title']; ?></h5>

                                </div>

                                <div class="span-l-3 columns sec-home-charts-social">
                                    
                                    <ul class="social">
                                        <?php echo Utility::getSocialLink($config['social_media']); ?>
                                    </ul>

                                </div>

                            <!-- </div> -->

                        </div>
                    <?php endforeach; ?>

                    </div>


                </section><!-- /sec-home-charts  -->

                <!-- sec-home-features  -->          
                <section class="sec sec-home-features">
                    
                    <div class="row">
                        
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                
                                <h3 class="sec-heading">features</h3>                              
                            </div>

                        </div>

                    <?php foreach($featuresData as $val): ?>
                        <div class="span-l-4 columns sec-home-features-list">
                            
                            <a href="single_post.php?news=<?php echo $val['id']; ?>" class="sec-news-link">
                                
                                <img src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['title']; ?>">

                                <div class="sec-home-features-list-headline-wrapper">
                                    
                                    <h5 class="sec-home-features-list-headline"><?php echo $val['title']; ?></h5>

                                    <div class="sec-home-features-list-bottom">

                                        <span class="sec-home-features-list-date"><?php 
                                        echo Utility::datetimeToPostDate($val['post_date']);
                                        ?></span>

                                        <button href="#" class="tag">POP</button>                                       
                                    </div>

                                </div>

                            </a>

                        </div>
                    <?php endforeach; ?>

                    </div>

                </section><!-- /sec-home-features  -->

            </div>

            <!-- siderbar -->
            <div class="span-3 columns">

                <?php include 'sidebar.php'; ?>

            </div>
            <!-- /sidebar -->

        </div>

    </main><!-- /page-main -->

<?php include 'footer.php'; ?>