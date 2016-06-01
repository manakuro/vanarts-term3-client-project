<?php 
    
    include("../bootstrap.php");

    use WWM\DB;
    use WWM\Utility;

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    if (!empty($_POST['id'])) {
        $table = 'dt_news';
        $db->delete($table, [
            'id' => $_POST['id']
        ]);

    }

    return array("success" => true);

?>