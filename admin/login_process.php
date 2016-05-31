<?php
use WWM\DB;
use WWM\Utility;

include('../bootstrap.php');

if (!empty($_POST)) {

    session_start();

    // setup database
    $conn = new DB();
    $db = $conn->forge();

    // Default User
    // - username: root
    // - password: root
    $users = $db->select('dt_admin_users', '*', array(
        'AND' => array(
            'username' => $_POST['username'],
            'password' => $_POST['password']
        )
    ));

    if (count($users) === 1) {

        $_SESSION['auth'] = true;
        $_SESSION['is_login_error'] = false;
        header('Location: ./admin_news.php');

    } else {

        $_SESSION['auth'] = false;
        $_SESSION['is_login_error'] = true;
        header('Location: ./login.php');

    }


}