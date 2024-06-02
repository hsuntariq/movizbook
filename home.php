<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>MovizPage</title>
</head>
<body>

    <?php
        session_start();
            include './config.php';
        if(!isset($_SESSION['username'])){
            header("Location: $base_url");
        }


    ?>


    <h1>This is the home page</h1>

    <a href="./logout.php" class="btn btn-danger">
        Logout
    </a>

</body>
</html>