<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    // pagination
    $perPageLimit = $config['hotsongs']['pagination_per_page_limit'];
    $numberOfRows = $db->count('dt_hotsongs');
    
    // grab hotsongs data 
    $where = array('ORDER' => 'post_date DESC');
    $start = 0;
    $currentPage = 1;
    if (isset($_GET['page_num'])) {
        $start = ($_GET['page_num'] * $perPageLimit) - $perPageLimit;
        $currentPage = $_GET['page_num'];
    }
    $where['LIMIT'] =  array($start, $perPageLimit);
    $hotsongsData = $db->select('dt_hotsongs', '*', $where);

    // generate pagination
    $numberOfPage = ceil($numberOfRows/$perPageLimit);
    $pagination = Utility::getPagenation(array(
        'num_page' => $numberOfPage,
        'range' => $config['hotsongs']['pagination_range'],
        'current_page' => $currentPage,
    ));

    // $top = $reviewsData[0];
    // array_splice($reviewsData, 0, 1);

?>

    <main class="page-main">

        <div class="row">
            
            <div class="span-9 columns">
                          
                <!-- sec-hotsongs  -->          
                <section class="sec sec-hotsongs">
                    
                    <div class="row">
                        
                        <!-- top news section -->
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                <h3 class="sec-heading">hot songs</h3>                  
                            </div>

                        </div>

                    <?php foreach($hotsongsData as $index => $val): ?>
                        <?php if ($index % 4 === 0): ?>
                        <?php $class = ($index === 0) ? 'sec-hotsongs-list-top' : ''; ?>
                        <div class="span-l-12 columns sec-hotsongs-list <?php echo $class; ?>">

                            <div class="sec-top-img-wrapper social-media-outer">
                                
                                <a href="single.php?features_id=<?php echo $val['id']; ?>">
            
                                    <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['title']; ?>">

                                    <h5 class="sec-top-img-headline"><?php echo $val['title']; ?></h5>

                                </a>

                                <div class="social-wrapper">
                                    <ul class="social">
                                        <?php echo Utility::getSocialLink($config['social_media']); ?>
                                    </ul>
                                </div>

                            </div>

                        </div>

                        <?php else: ?>

                        <div class="span-l-4 columns sec-hotsongs-list social-media-outer">
                                
                            <a href="single.php?features_id=<?php echo $val['id']?>" class="sec-news-link">
                                
                                <img src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['title']; ?>">

                                <div class="sec-hotsongs-list-headline-wrapper">
                                    
                                    <h5 class="sec-hotsongs-list-headline"><?php echo $val['title']; ?></h5>

                                    <div class="sec-hotsongs-list-bottom">

                                        <span class="sec-hotsongs-list-date">
                                        <?php echo Utility::datetimeToPostDate($val['post_date']); ?>                                            
                                        </span>

                                        <button class="tag">POP</button>

                                    </div>

                                </div>

                            </a>

                        </div><!-- /sec-top-news-list -->

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