<?php 
    use WWM\DB;
    use WWM\Utility;
    include 'header.php';

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    $table = 'dt_news';
    $adminConfig = $config['admin']['admin_news'];
    $row = array();
    $submit = "insert";
    $id = "";

    // If data exists
    if (!empty($_GET['id'])) {
        $data = $db->select($table, '*', array(
            'id' => $_GET['id']
        ));
        $row = (!empty($data)) ? $data[0] : array();

        $submit = "update";
        $id = $_GET['id'];
    }

?>
    
<main class="page-main">

    <section class="sec section-first section-admin-gallery-edit sec-form">
        
        <form id="login-form" name="login-form" method="post" action="<?php echo $adminConfig['edit_process']; ?>" enctype="multipart/form-data">

            <input type="hidden" value="<?php echo $id; ?>" name="id">

            <div class="row">

                <div class="span-12 columns">
                    
                    <ul class="form-lists">

                        <li class="form-lists-inline span-6">
                            <div class="input-wrapper">

                                <span class="label-span">Top Image</span>
                                <input class="input" type="file" value="" name="img">

                            </div>

                            <div class="sec-edit-img-wrapper">
                            <?php if (!empty($row['img'])):?>
                                <img src="<?php echo $row['img']; ?>" alt="">
                            <?php endif; ?>
                            </div>
                        </li>

                        <li class="form-lists-inline span-6">
                            <div class="input-wrapper">

                                <span class="label-span">Thumbnail Image</span>
                                <input class="input" type="file" value="" name="thumb">

                            </div>

                            <div class="sec-edit-img-wrapper">
                            <?php if (!empty($row['thumb'])):?>
                                <img src="<?php echo $row['thumb']; ?>" alt="" class="thumb">
                            <?php endif; ?>
                            </div>
                        </li>

                        <li>
                            <div class="input-wrapper span-6">

                                <span class="label-span">Title</span>

                                <input class="input" type="text" value="<?php echo (!empty($row['title'])) ? $row['title'] : "" ?>" name="title">

                            </div>
                        </li>

                        <li>
                            <div class="input-wrapper span-12">

                                <span class="label-span">Content</span>
                                <textarea class="input textarea admin-ckeditor" name="content"><?php echo (!empty($row['content'])) ? $row['content'] : ''; ?></textarea>

                            </div>
                        </li>

                        <li>
                            <div class="input-wrapper">
                                <input type="submit" class="btn" name="<?php echo $submit; ?>" value="Submit">
                            </div>    
                        </li>

                    </ul>

                </div>

            </div>

        </form>

    </section><!-- end of section-admin-gallery -->

</main><!-- end of page-main -->

<?php include "footer.php"; ?>