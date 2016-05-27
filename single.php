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
    $id = 1;
    if ($_GET['news_id']) {
        $id = $_GET['news_id'];
    }
    $where = array('id' => $id);
    $data = $db->select('dt_news', '*', $where);
    $data = (!empty($data)) ? $data[0] : array();

    // grab features data from dt_features table
    $featuresData = $db->select('dt_features', '*', array(
        'ORDER' => 'post_date DESC',
        'LIMIT' => 6
    ));

?>

    <main class="page-main">

        <div class="row">
            
            <div class="span-9 columns">
            
            <?php if (empty($data)) :?>

                <div class="not-found">
                    <p>Not Found</p>
                </div>

            <?php else: ?>

                <!-- sec-news  -->          
                <section class="sec sec-single">
                    
                    <div class="row">
                        
                        <div class="span-l-12 columns">

                             <!-- top image -->
                            <div class="sec-top-img-wrapper">
                                
                                <a href="#">
            
                                    <img src="<?php echo $data['img']; ?>" alt="<?php echo $data['title']; ?>">

                                </a>

                            </div><!-- /top image -->

                            <div class="sec-single-inner">
                                
                                <span class="sec-single-date"><?php echo Utility::datetimeToPostDate($data['post_date']); ?></span>

                                <h2 class="sec-single-headline"><?php echo $data['title']; ?></h2>

                                <div class="sec-single-logo-wrapper">
                                    
                                    <button class="tag sec-single-logo">POP</button>
                                    <button class="tag sec-single-logo">POP</button>

                                </div>

                                <!-- content -->
                                <div class="sec-single-content">
                                <?php echo $data['content']; ?>

                                </div><!-- /content -->

                                <!-- social media -->
                                <div class="sec-single-social">
                                    
                                    <label class="sec-single-label">Share</label>

                                    <div class="sec-single-social-wrapper">

                                        <ul class="social">
                                            <?php echo Utility::getSocialLink($config['social_media']); ?>
                                        </ul>
                                        
                                    </div>

                                </div><!-- /social media -->


                                <div class="holizontal-divider"></div>

                                <!-- comment -->
                                <form action="comment.php" method="post" accept-charset="utf-8" class="form span-l-6">

                                    <div class="input-wrapper">

                                        <label class="sec-single-label">name</label>
                                        <input type="text" name="comment_name" value="" class="input">

                                    </div>

                                    <div class="input-wrapper">

                                        <label class="sec-single-label">comment</label>
                                        <textarea name="comment_content" class="input textarea"></textarea>

                                    </div>

                                    <input type="submit" name="submit" value="submit" class="btn">

                                </form><!-- /comment -->
                                

                            </div>

                        </div>

                    </div>

                </section><!-- /sec-news  -->

                <!-- sec-related-news  -->          
                <section class="sec sec-related-news">
                    
                    <div class="row">
                        
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                
                                <h3 class="sec-heading">related news</h3>                              
                            </div>

                        </div>

                    <?php foreach($featuresData as $val): ?>
                        <div class="span-l-4 columns sec-related-news-list">
                            
                            <a href="single_post.php?news=<?php echo $val['id']; ?>" class="sec-news-link">
                                
                                <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['title']; ?>">

                                <div class="sec-related-news-list-headline-wrapper">
                                    
                                    <h5 class="sec-related-news-list-headline"><?php echo $val['title']; ?></h5>

                                    <div class="sec-related-news-list-bottom">

                                        <span class="sec-related-news-list-date"><?php 
                                        echo Utility::datetimeToPostDate($val['post_date']);
                                        ?></span>

                                        <button href="#" class="tag">POP</button>                                       
                                    </div>

                                </div>

                            </a>

                        </div>
                    <?php endforeach; ?>

                    </div>

                </section><!-- /sec-related-news  -->

            <?php endif; ?>

            </div>

            <!-- siderbar -->
            <div class="span-3 columns">

                <?php include 'sidebar.php'; ?>

            </div>
            <!-- /sidebar -->

        </div>

    </main><!-- /page-main -->

<?php include 'footer.php'; ?>