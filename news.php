<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    // pagination
    $perPageLimit = $config['news']['pagination_per_page_limit'];
    $numberOfRows = $db->count('dt_news');
    
    // grab news data 
    $where = array('ORDER' => 'post_date DESC');
    $start = 0;
    $currentPage = 1;
    if (isset($_GET['page_num'])) {
        $start = ($_GET['page_num'] * $perPageLimit) - $perPageLimit;
        $currentPage = $_GET['page_num'];
    }
    $where['LIMIT'] =  array($start, $perPageLimit);
    $newsData = $db->select('dt_news', '*', $where);

    // generate pagination
    $numberOfPage = ceil($numberOfRows/$perPageLimit);
    $pagination = Utility::getPagenation(array(
        'num_page' => $numberOfPage,
        'range' => $config['news']['pagination_range'],
        'current_page' => $currentPage,
    ));

    $topNews = $newsData[0];
    array_splice($newsData, 0, 1);

?>

    <main class="page-main">

        <div class="row">
            
            <div class="span-9 columns">
                          
                <!-- sec-news  -->          
                <section class="sec sec-news">
                    
                    <div class="row">
                        
                        <!-- top news section -->
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                <h3 class="sec-heading">news</h3>                              
                            </div>

                            <div class="sec-top-img-wrapper social-media-outer">
                                
                                <a href="#">
            
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

                    <?php foreach($newsData as $val): ?>
                        <div class="span-l-12 columns">

                            <div class="sec-news-list">
                                
                                <a href="news_single.php?news_id=<?php echo $val['id']; ?>" class="sec-news-link">
                                    
                                    <div class="row">
                                        
                                        <!-- heading -->
                                        <div class="span-l-2 columns">
                                            
                                            <h5 class="sec-news-list-heading">news</h5>

                                            <span class="sec-news-list-date"><?php echo Utility::datetimeToPostDate($val['post_date']); ?></span>

                                            <button class="tag tag-sec-news-list">POP</button>

                                        </div>

                                        <div class="span-l-3 columns">
                                            
                                            <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['title']; ?>">

                                        </div>

                                        <div class="span-l-7 columns">
                                            
                                            <h5 class="sec-news-list-headline"><?php echo $val['title']; ?></h5>

                                        </div>


                                    </div>

                                </a>

                            </div>
                            
                        </div><!-- /news section -->

                    <?php endforeach; ?>

                    </div>

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