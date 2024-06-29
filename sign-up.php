<?php
    session_start();
    $f_name = $_POST['f_name'];
    $l_name = $_POST['l_name'];
    $pass = $_POST['reg_password'];
    $m_mail = $_POST['m_mail'];
    $day = $_POST['day'];
    $month = $_POST['month'];
    $year = $_POST['year'];
    $gender = $_POST['gender'];
    include './config.php';

    $insert = "INSERT INTO users (f_name,l_name,password,m_mail,day,month,year,gender) VALUES ('{$f_name}','{$l_name}','{$pass}','{$m_mail}',$day,'{$month}',$year,'{$gender}')";

    $result = mysqli_query($connection,$insert);
    
    if($result){
        $_SESSION['username'] = $f_name;
        $_SESSION['user_id'] = mysqli_insert_id($connection);
        header("Location: $base_url/home.php");
    }



?>