<?php
include("bootstrap.php");

use WWM\DB;
use WWM\Utility;

if (!empty($_POST)) {

    // setup database
    $table = 'dt_comments';
    $conn = new DB();
    $db = $conn->forge();

    $now = date('Y/m/d H:i:s');

    $data = array(
        'name' => $_POST['comment_name'],
        'content' => $_POST['comment_content'],
        'post_id' => $_POST['post_id'],
        'created_at' => $now,
        'updated_at' => $now
    );
    $db->insert($table, $data);

    // grab new comments data 
    $commentsData = $db->select($table, '*', array(
        'post_id' => $_POST['post_id'],
        'ORDER' => 'created_at DESC'
    ));
    $commentsListHtml = Utility::getCommentLists($commentsData);

    echo json_encode(array('status' => '200', 'data' => array('comment_lists' => $commentsListHtml)));
}