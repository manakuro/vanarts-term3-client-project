<?php 
    use WWM\DB;

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    // grab popular data from dt_popular table
    $popularData = $db->select('dt_popular', 

        // join statement 
        // [>] means left join, value means statement of join
        array('[>]dt_categories' => ['dt_popular.category_id' => 'id']),

        // columns
        array(
            'dt_popular.title',
            'dt_popular.img',
            'dt_popular.post_date',
            'dt_categories.name(category_name)',
        ), 

        // where statement
        array(
        'ORDER' => 'dt_popular.post_date DESC',
        'LIMIT' => 5
    ));

?>
<aside class="sec sidebar">
    
    <div class="row">

        <!-- google adsense -->
        <div class="span-l-12 columns">
            
            <img src="img/home/gd.jpg" alt="">

        </div>

    </div>

    <section class="sec-popular">

        <div class="row">
            
            <div class="span-l-12 columns">
                    
                <div class="sec-heading-wrapper">
                    
                    <h3 class="sec-heading-sidebar">popular</h3>

                </div>
            
            </div>

        <?php foreach($popularData as $val): ?>

            <div class="span-l-12 columns sec-popular-list">

                <div class="sec-popular-list-inner">
                    
                    <a href="#">
                        
                        <img src="<?php echo $val['img']; ?>" alt="<?php echo $val['title']; ?>">

                        <h5 class="sec-popular-list-heading"><?php echo $val['category_name']; ?></h5>

                        <p class="sec-popular-list-headline"><?php echo $val['title']; ?></p>

                    </a>

                </div>

            </div>

        <?php endforeach; ?>

        </div>

    </section>

</aside>