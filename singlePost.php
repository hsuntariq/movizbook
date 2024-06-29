<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php 
        include './boot_css.php'
    ?>
    <title>Single Post</title>
</head>
<body>
    <?php include './header.php' ?>
    <div class="container-fluid d-flex justify-content-center align-items-center" style="height: 90vh;">
        <div class="container rounded-4 shadow" style="height:70vh;">

        <?php 
            $post_id = $_GET['id'] ;
            include './config.php';

            $select = "SELECT * FROM posts WHERE id = $post_id";
            $result = mysqli_query($connection,$select);
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_assoc($result)){
        ?>
                <div class="row" style="height:100%">
                    <div class="col-lg-6">
                       <?php
                        $ext = explode('.',$row['image']);
                        if(end($ext) == 'mp4' || end($ext) == 'mov' || end($ext) == 'avi'){
                            echo "<video src='./posts/{$row['image']}' controls width='100%' style='object-fit:contain' height='100%'>
                            </video>";
                        }else{
                            echo "<img src='./posts/{$row['image']}' style='object-fit:contain' width='90%' height='100%'>";
                        }
                        ?>
                    </div>
                    <div class="col-lg-6">
                        <?php 
                            $select2 = "SELECT comments.id AS comment_id,comments.comment,posts.id AS post_id,posts.image,posts.caption,users.id AS user_id,users.f_name,users.l_name FROM comments JOIN posts ON comments.post_id = posts.id JOIN users ON comments.user_id = users.id WHERE posts.id = $post_id";
                         $result3 = mysqli_query($connection,$select2);
                        if(mysqli_num_rows($result3) > 0){
                            while($row3 = mysqli_fetch_assoc($result3)){
                        ?>
                            <div class="d-flex">
                                <h5 class="username">
                                    <?php echo $row3['f_name'] ?>
                                    </h5>
                                    <div class="comment">
                                        <p class="text-secondary p-0 m-0">
                                        <?php echo $row3['comment'] ?>

                                    </p>
                                </div>
                            </div>
                        <?php 
                            }}
                        ?>
                    </div>
                </div>


        <?php }} ?>

        </div>
    
    </div>
</body>
</html>