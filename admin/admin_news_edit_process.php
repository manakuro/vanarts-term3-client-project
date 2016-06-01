<?php
    include("../bootstrap.php");

    use WWM\DB;
    use WWM\Utility;

    if (!empty($_POST)) {

        /** Validate Image  **/
        // create path of image
        $adminConfig = $config['admin']['admin_news'];
        $imgPath = array();

        foreach($adminConfig['imgs'] as $key => $imgConfig) {
            $targetDirectory = $imgConfig['img_path'];
            $inputName = $imgConfig['input_name'];
            $targetFile = $targetDirectory. basename($_FILES[$inputName]['name']);
            $imageFileType = pathinfo($targetFile, PATHINFO_EXTENSION);
            $uploadOk = true;
            $img = '';

            if (!empty($_FILES[$inputName]['tmp_name'])) {

                $check = getimagesize($_FILES[$inputName]['tmp_name']);
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
                    if (move_uploaded_file($_FILES[$inputName]['tmp_name'], $targetFile)) {
                        // Convert relative path to absolute path
                        $imgPath[$imgConfig['table_column_name']] = Utility::convert_to_uri($targetFile, BASE_URL.$_SERVER["SCRIPT_NAME"]);

                    }

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
            $data = array(
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'post_date' => $now,
                'created_at' => $now,
                'updated_at' => $now
            );
            foreach($imgPath as $column => $_img) {
                $data[$column] = $_img;
            }

            $db->insert($table, $data);

        // update
        } else {
            $data = array(
                'title' => $_POST['title'],
                'content' => $_POST['content'],
                'updated_at' => $now
            );
            foreach($imgPath as $column => $_img) {
                if (!empty($_img)) {
                    $data[$column] = $_img;    
                }
            }

            $db->update($table, $data, array(
                'id' => $_POST['id']
            ));

        }

        header("location: ". $adminConfig['index_page']);

    }
