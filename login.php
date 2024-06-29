<?php
    session_start();
    include './config.php';
    $current_page = $_SERVER['HTTP_REFERER'];
    $username = $_POST['username'];
    $pass = $_POST['pass'];
    // write the query ti authenticate the user
    $check = "SELECT * FROM users WHERE f_name = '{$username}' AND password = '{$pass}'";

    $result = mysqli_query($connection,$check);

    // checks if user exists or not
    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
            $_SESSION['username']  = $row['f_name'];
            $_SESSION['user_id'] = $row['id'];

        }
        header("Location: $base_url/home.php");
    }else{
        $_SESSION['invalid_user'] = 'User does not exists!';
        header("Location: $current_page");
    }
    


?>