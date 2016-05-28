<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $conn = new DB();
    $db = $conn->forge();
    
    // grab charts data 
    $chartsData = $db->select('dt_charts', '*', array(
        'ORDER' => 'post_date DESC',
        'LIMIT' => $config['charts']['limit']
    ));

    $top = $chartsData[0];

    // grab categories
    $categories = $db->select('dt_categories', '*', array(
        'music_genre' => 1
    ));

?>

    <main class="page-main">

        <div class="row">
            
            <div class="span-9 columns">

                <!-- sec-charts  -->          
                <section class="sec sec-charts">
                    
                    <div class="row">
                        
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                <h3 class="sec-heading">charts</h3>                              
                            </div>

                            <div class="sec-top-img-wrapper social-media-outer">
                                
                                <a href="single.php?news_id=<?php echo $top['id']; ?>">
            
                                    <img src="<?php echo $top['img']; ?>" alt="<?php echo $top['title']; ?>">

                                    <h5 class="sec-top-img-headline"><?php echo $top['singer'].' / '.$top['title']; ?></h5>

                                </a>

                            </div>

                        </div>

                        <!-- filter -->
                        <div class="span-l-12 columns">
                            
                            <div class="sec-filter">
                                
                                <form action="events_filter.php" method="post" accept-charset="utf-8" class="form-inline">

                                    <div class="input-wrapper-inline span-l-4 no-grow">
                                        
                                        <label class="input-label">categories</label>
                                        <select name="event_categories" class="input-select">
                                        <option value="*">ALL</option>
                                        <?php foreach($categories as $val): ?>
                                            <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
                                        <?php endforeach; ?>
                                        </select>

                                    </div>

                                </form>

                            </div>

                        </div><!-- /filter -->

                    </div>

                    <div class="sec-charts-list-outer">
                        
                        <div class="row">
                        <?php foreach ($chartsData as $index => $val): ?>

                            <div class="span-l-12 columns sec-charts-list">
                                
                                <!-- <div class="row"> -->
                                    
                                    <div class="span-l-1 columns sec-charts-list-ranks-wrapper">
                                        
                                        <span class="sec-charts-list-ranks"><?php echo $index+1; ?></span>

                                    </div>

                                    <div class="span-l-2 columns sec-charts-list-img-wrapper js-play-audio">
                                        
                                        <a href="#">
                                            
                                            <img class="sec-charts-list-img" src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['title']; ?>">

                                            <i class="fa fa-play sec-charts-list-play js-audio-icon" aria-hidden="true"></i>

                                        </a>

                                    </div>

                                    <div class="span-l-6 columns sec-charts-list-headline-wrapper">
                                            
                                        <h5 class="sec-charts-list-singer"><?php echo $val['singer']; ?></h5>
                                        <h5 class="sec-charts-list-title"><?php echo $val['title']; ?></h5>

                                    </div>

                                    <div class="span-l-3 columns sec-charts-social">
                                        
                                        <ul class="social">
                                            <?php echo Utility::getSocialLink($config['social_media']); ?>
                                        </ul>

                                    </div>

                                <!-- </div> -->

                            </div>
                        <?php endforeach; ?>

                        </div>

                    </div>



                </section><!-- /sec-charts  -->

            </div>

            <!-- siderbar -->
            <div class="span-3 columns">

                <?php include 'sidebar.php'; ?>

            </div>
            <!-- /sidebar -->

        </div>

    </main><!-- /page-main -->

<?php include 'footer.php'; ?>