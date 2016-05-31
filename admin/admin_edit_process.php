<?php
    include("../bootstrap.php");

    if (!empty($_POST)) {

        /** Validate Image  **/
        // Create path of image
        // $imagePath = "galleries/gallery_lists/";
        $targetDirectory = '../img/press/';
        $targetFile = $targetDirectory. basename($_FILES['img']['name']);
        $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
        $uploadOk = true;

        $img = '';
        if (!empty($_FILES['img']['tmp_name'])) {

            $check = getimagesize($_FILES['img']['tmp_name']);
            if (!$check) {
                $uploadOk = false;
            }

            // Check to see if the file exists or not
            // if (file_exists($targetFile)) {
            //     $uploadOk = false;
            // }

            //  Check to see file extension
            if (!in_array($imageFileType, ["jpg", "jpeg", "png"])) {
                $uploadOk = false;
            }

            if ($uploadOk) {

                if (move_uploaded_file($_FILES['img']['tmp_name'], $targetFile)) {

                    // Convert relative path to absolute path
                    $img = convert_to_uri($targetFile, BASE_URL.$_SERVER["SCRIPT_NAME"]);

                }

            }

        }

        // setup database
        $conn = new DB();
        $db = $conn->forge();

        // define variables
        $table = 'dt_news';
        $adminConfig = $config['admin']['admin_news'];
        $now = date('Y/m/d H:i:s');

        // insert
        if (isset($_POST['insert'])) {

            $db->insert($table, array(
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'img' => $img,
                'thumb' => $thumb,
                'post_date' => $now,
                'created_at' => $now,
                'updated_at' => $now
            ));

        // update
        } else {

            $db->update($table, array(
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'img' => (!empty($img)) ? $img : '',
                'thumb' => (!empty($thumb)) ? $thumb : '',
                'updated_at' => $now
            ),array(
                'id' => $_POST['id']
            ));

        }

        header("location: ". $adminConfig['index_page']);

    }
