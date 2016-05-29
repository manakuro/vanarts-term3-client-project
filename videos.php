<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    // pagination
    $perPageLimit = $config['videos']['pagination_per_page_limit'];
    $numberOfRows = $db->count('dt_videos');
    
    // grab videos data 
    $where = array('ORDER' => 'post_date DESC');
    $start = 0;
    $currentPage = 1;
    if (isset($_GET['page_num'])) {
        $start = ($_GET['page_num'] * $perPageLimit) - $perPageLimit;
        $currentPage = $_GET['page_num'];
    }
    $where['LIMIT'] =  array($start, $perPageLimit);
    $videosData = $db->select('dt_videos', '*', $where);

    // generate pagination
    $numberOfPage = ceil($numberOfRows/$perPageLimit);
    $pagination = Utility::getPagenation(array(
        'num_page' => $numberOfPage,
        'range' => $config['videos']['pagination_range'],
        'current_page' => $currentPage,
    ));

    // $top = $reviewsData[0];
    // array_splice($reviewsData, 0, 1);

?>

    <main class="page-main">

        <div class="row">
            
            <div class="span-9 columns">
                          
                <!-- sec-videos  -->          
                <section class="sec sec-videos js-video-container">
                    
                    <div class="row">
                        
                        <!-- top news section -->
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                <h3 class="sec-heading">Videos</h3>                  
                            </div>

                        </div>

                    <?php foreach($videosData as $index => $val): ?>
                        <?php if ($index === 0): ?>
                        <?php $class = ($index === 0) ? 'sec-videos-list-top' : ''; ?>
                        <div class="span-l-12 columns sec-videos-list <?php echo $class; ?>">

                            <div class="sec-top-img-wrapper social-media-outer">
                                
                                <a href="<?php echo $val['src']; ?>" class="js-popup-video">
            
                                    <div class="sec-videos-list-img-wrapper-top">

                                        <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['title']; ?>">

                                        <i class="fa fa-play sec-videos-list-play-top js-audio-icon" aria-hidden="true"></i>
                                        
                                    </div>

                                    <h5 class="sec-top-img-headline"><?php echo $val['title']; ?></h5>

                                </a>

                            </div>

                        </div>

                        <?php else: ?>

                        <div class="span-l-4 columns sec-videos-list social-media-outer">
                                
                            <a href="<?php echo $val['src']?>" class="sec-news-link js-popup-video">
                                
                                <div class="sec-videos-list-img-wrapper">
                                    
                                    <img src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['title']; ?>">

                                    <i class="fa fa-play sec-videos-list-play js-audio-icon" aria-hidden="true"></i>

                                </div>

                                <div class="sec-videos-list-headline-wrapper">
                                    
                                    <h5 class="sec-videos-list-headline"><?php echo $val['title']; ?></h5>

                                    <div class="sec-videos-list-bottom">

                                        <span class="sec-videos-list-date">
                                        <?php echo Utility::datetimeToPostDate($val['post_date']); ?>                                            
                                        </span>

                                    </div>

                                </div>

                            </a>

                        </div><!-- /sec-videos-list -->

                        <?php endif; ?>

                    <?php endforeach; ?>

                    </div><!-- /row -->

                    <div class="row">
                        
                        <div class="span-l-12 columns">
                            
                            <?php echo $pagination; ?>

                        </div>

                    </div>

                </section><!-- /sec-news  -->

            </div>

            <!-- siderbar -->
            <div class="span-3 columns">

                <?php include 'sidebar.php'; ?>

            </div>
            <!-- /sidebar -->

        </div>

    </main><!-- /page-main -->

<?php include 'footer.php'; ?>