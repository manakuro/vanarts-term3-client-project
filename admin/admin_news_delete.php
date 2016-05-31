<?php 
    
    include("../bootstrap.php");

    if (!empty($_POST['id'])) {

        $conn = connectDB();
        $table = 'dt_press';

        $query = "DELETE FROM $table WHERE id = $_POST[id]";
        $result = mysqli_query($conn, $query);
        if (!$result) {
            echo $conn->error;
            exit;
        }

    }

    return array("success" => true);

?>