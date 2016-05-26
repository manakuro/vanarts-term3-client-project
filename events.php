<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $_db = new DB();
    $db = $_db->forge();

    // pagination
    $perPageLimit = $config['events']['pagination_per_page_limit'];
    $numberOfRows = $db->count('dt_events');
    
    // grab events data 
    $where = array('ORDER' => 'post_date DESC');
    $start = 0;
    $currentPage = 1;
    if (isset($_GET['page_num'])) {
        $start = ($_GET['page_num'] * $perPageLimit) - $perPageLimit;
        $currentPage = $_GET['page_num'];
    }
    $where['LIMIT'] =  array($start, $perPageLimit);
    $eventsData = $db->select('dt_events', '*', $where);

    // generate pagination
    $numberOfPage = ceil($numberOfRows/$perPageLimit);
    $pagination = Utility::getPagenation(array(
        'num_page' => $numberOfPage,
        'range' => $config['events']['pagination_range'],
        'current_page' => $currentPage,
    ));

    $topEvents = $eventsData[0];
    array_splice($eventsData, 0, 1);

    // grab categories
    $categories = $db->select('dt_categories', '*', array(
        'music_genre' => 1
    ));
?>

    <main class="page-main">

        <div class="row">
            
            <div class="span-9 columns">
                          
                <!-- sec-news  -->          
                <section class="sec sec-evnets">
                    
                    <div class="row">
                        
                        <!-- top news section -->
                        <div class="span-l-12 columns">
                            
                            <div class="sec-heading-wrapper">
                                <h3 class="sec-heading">events</h3>                              
                            </div>

                            <div class="sec-top-img-wrapper social-media-outer">
                                
                                <a href="#">
            
                                    <img src="<?php echo $topEvents['img']; ?>" alt="<?php echo $topEvents['title']; ?>">

                                    <h5 class="sec-top-img-headline"><?php echo $topEvents['singer']. ' / ' .$topEvents['title']; ?></h5>

                                </a>

                            </div>

                        </div><!-- /top news section -->

                        <!-- filter -->
                        <div class="span-l-12 columns">
                            
                            <div class="sec-filter">
                                
                                <form action="events_filter.php" method="post" accept-charset="utf-8" class="form-inline">

                                    <div class="input-wrapper-inline">
                                        
                                        <label class="input-label">date</label>
                                        
                                        <div class="input-date-wrapper">

                                            <input type="date" class="input-date" name="event_date_from" value="<?php echo date("Y-m-d H:i:s");?>">

                                            <i class="fa fa-calendar-o input-date-icon" aria-hidden="true"></i>
                                            
                                        </div>


                                    </div>

                                    <div class="input-wrapper-inline">
                                        
                                         <div class="input-date-wrapper">

                                            <input type="date" class="input-date" name="event_date_to" value="<?php echo date("Y-m-d H:i:s");?>">

                                            <i class="fa fa-calendar-o input-date-icon" aria-hidden="true"></i>
                                            
                                        </div>

                                    </div>

                                    <div class="input-wrapper-inline">
                                        
                                        <label class="input-label">categories</label>
                                        <select name="event_categories" class="input-select">
                                        <?php foreach($categories as $val): ?>
                                            <option value="<?php echo $val['id']; ?>"><?php echo $val['name']; ?></option>
                                        <? endforeach; ?>
                                        </select>

                                    </div>

                                    <div class="input-wrapper-inline">
                                        
                                        <input type="text" name="event_keyword" value="" class="input-search"placeholder="Search for keywords">

                                    </div>

                                </form>


                            </div>

                        </div><!-- /filter -->

                    <?php 
                        foreach($eventsData as $val): 

                        // event date, time and place
                        $eventDesc = date('H:i', strtotime($val['event_time_start'])).'-'.
                                     date('H:i', strtotime($val['event_time_end'])).' '.
                                     $val['event_place'];
                    ?>
                        <div class="span-l-12 columns">

                            <div class="sec-events-list">
                                
                                <div class="row">
                                    
                                    <div class="span-l-4 columns">
                                        
                                        <img src="<?php echo $val['thumb']; ?>" alt="<?php echo $val['title']; ?>">

                                    </div>

                                    <div class="span-l-8 columns">
                                        
                                        <div class="sec-events-list-inner">

                                            <span class="sec-events-list-heading"><?php echo Utility::datetimeToPostDate($val['event_date']); ?></span>

                                            <span class="sec-events-list-heading"><?php echo $eventDesc; ?></span>
                                            
                                            <div class="sec-events-list-headlne-outer">

                                                <h5 class="sec-events-list-headline"><?php echo $val['singer']; ?></h5>        
                                                <h5 class="sec-events-list-headline"><?php echo $val['title']; ?></h5>
                                                
                                            </div>

                                            <a href="#" class="btn buy-ticket">Buy Ticket</a>

                                            <ul class="social sec-events-list-social"><?php echo Utility::getSocialLink($config['social_media']); ?> </ul>

                                        </div>

                                    </div>

                                </div>

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