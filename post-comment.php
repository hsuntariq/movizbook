<?php
    session_start();
    include './config.php';
    $comment = $_POST['comment'];
    $user_id = $_SESSION['user_id'];
    $post_id = $_POST['post_id'];

    $insert = "INSERT INTO comments (comment,user_id,post_id) VALUES ('{$comment}',$user_id,$post_id)";
    mysqli_query($connection,$insert);
    header("Location: $base_url/home.php");

?>