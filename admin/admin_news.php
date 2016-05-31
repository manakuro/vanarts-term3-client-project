<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    $adminConfig = $config['admin']['admin_news'];
    $perPageLimit = $adminConfig['pagination_per_page_limit'];
    $numberOfRows = $db->count('dt_news');

    $table = 'dt_news';
    $editPage = $adminConfig['edit_page'];
    $deletePage = $adminConfig['delete_page'];

    // grab news data 
    $where = array('ORDER' => 'id DESC');
    $start = 0;
    $currentPage = 1;
    if (isset($_GET['page_num'])) {
        $start = ($_GET['page_num'] * $perPageLimit) - $perPageLimit;
        $currentPage = $_GET['page_num'];
    }
    $where['LIMIT'] =  array($start, $perPageLimit);
    $newsData = $db->select($table, '*', $where);

    // generate pagination
    $numberOfPage = ceil($numberOfRows/$perPageLimit);
    $pagination = Utility::getPagenation(array(
        'num_page' => $numberOfPage,
        'range' => $config['news']['pagination_range'],
        'current_page' => $currentPage,
    ));

    // create list of html
    $columnKeys = array_keys($adminConfig['columns']);
    $listHtml = '';
    foreach ($newsData as $row) {

        $listHtml .= '<tr class="t-row clickable" data-href="'. $adminConfig['edit_page'] .'?id='. $row['id'] .'" data-row-id="'. $row['id'] .'">';

        
        foreach($row as $key => $val) {
            if (!in_array($key, $columnKeys)) {
                continue;   
            }

            if ($key === "updated_at" || $key === "created_at" || $key === "post_date") {
                $val = date('H:i <\b\r> d F Y', strtotime($val));
            }

            $listHtml .= '<td>'. $val .'</td>';
        }

        // delete button
        $listHtml .= '<td class="prevent-click"><a class="del-btn btn" href="'. $deletePage .'">×</a></td>';

        $listHtml .= '</tr>';

    }

?>
    
<main class="page-main">

    <section class="section section-first section-admin-gallery">
        
        <form id="login-form" name="login-form" method="post" action="login_process.php">

            <div class="row">

                <div class="span-4 columns push-8">

                    <div class="new-wrapper">
                        <a href="<?php echo $editPage; ?>" class="btn" name="submit" >New</a>
                    </div>
                    
                </div>

            </div>

            <div class="row row-center">

                <div class="span-12 columns">
                    
                    <table class="admin-table">
                        
                        <thead class="thead">
                            <tr class="t-row">
                            <?php foreach($adminConfig['columns'] as $val): ?>
                                <td class="<?php echo $val['class'];?>"><?php echo $val['name'];?></td>
                            <?php endforeach; ?>
                                <td class="span-1">Delete</td>
                            </tr>
                        </thead>

                        <tbody class="tbody">
                            <?php echo $listHtml; ?>
                        </tbody>

                    </table>

                </div>

                <dif class="span-6 columns">

                    <div class="pagination-wrapper-bottom">
                        <?php echo $pagination; ?>
                    </div>
                    
                </dif>

            </div>

        </form>

    </section><!-- end of section-admin-gallery -->

</main><!-- end of page-main -->

<?php include "footer.php"; ?>