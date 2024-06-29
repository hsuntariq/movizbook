<?php 
    session_start();
    include './config.php';
    $caption = $_POST['caption'];
    $user_id = $_SESSION['user_id'];
    $current_page = $_SERVER['HTTP_REFERER'];
    $filename = $_FILES['image']['name'];
    $tmp_name = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp_name,'./posts/' . $filename);

    $insert = "INSERT INTO posts (caption,image,user_id) VALUES ('{$caption}','{$filename}',$user_id)";
    mysqli_query($connection,$insert);
    $_SESSION['post_uploaded'] = 'Post Uploaded Successfully!';
    header("Location: $current_page");
    
    
?>