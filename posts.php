<div class="d-flex shadow gap-4 rounded-4 p-3 align-items-center">
        <div class="user-image">
            <img width="40px" height="40px" class="rounded-circle" src="https://static-01.daraz.pk/p/9ab94b94403a30d320f0a2dbee78a888.jpg" alt="">
        </div>
        <div class="add-btn w-100 bg-info text-white btn">
                <?php include './post_modal.php' ?>
        </div>
        
            <div class="gallery fs-2">
                <div class="bi bi-play"></div>
            </div>
</div>


<?php 
    include './config.php';
    $select = "SELECT users.id AS user_id,users.f_name,users.l_name,posts.id AS post_id,posts.image,posts.caption FROM posts JOIN users ON users.id = posts.user_id ORDER BY(posts.id) DESC";
    $result = mysqli_query($connection,$select);

    if(mysqli_num_rows($result) > 0){
        while($row = mysqli_fetch_assoc($result)){
?>

<div class="post shadow p-4  rounded-4 my-4">
    <div class="d-flex align-items-center justify-content-between">
        <div class="d-flex gap-3 align-items-center">
            <div class="user-image">
            <img width="50px" height="50px" class="rounded-circle" src="https://static-01.daraz.pk/p/9ab94b94403a30d320f0a2dbee78a888.jpg" alt="">
        </div>
        <div class="d-flex flex-column">
            <h6 class="p-0 m-0">
                <?php echo $row['f_name']  ?>
            </h6>
            <p class="text-secondary p-0 m-0">
                5 min ago
            </p>
        </div>
        </div>
        <div class="bi bi-three-dots"></div>
    </div>
    <p class="text-secondary p-3 pb-0">
        <?php echo $row['caption'] ?>
    </p>
    <div class="post-image my-3">
       <?php
        $ext = explode('.',$row['image']);
        if(end($ext) == 'mp4' || end($ext) == 'mov' || end($ext) == 'avi'){
            echo "<video src='./posts/{$row['image']}' controls width='100%' height='100%'>
            </video>";
        }else{
            echo "<img src='./posts/{$row['image']}' width='100%' height='100%'>";
        }
       ?>
    </div>
    <div class="d-flex justify-content-between my-2">
        <div class="likes text-secondary">
            247 Likes
        </div>
        <div class="comments">
            <p class="text-secondary m-0 p-0">
                <?php 
                    $count = "SELECT COUNT(id) AS total FROM comments WHERE post_id = {$row['post_id']}";
                    $result2 = mysqli_query($connection,$count);
                    if(mysqli_num_rows($result2) > 0){
                        while($row2 = mysqli_fetch_assoc($result2)){
                            echo "
                                <a href='./singlePost.php?id={$row['post_id']}'>
                                    {$row2['total']} comments
                                </a>
                            ";       
                        }
                    }
                ?>
            </p>
        </div>
    </div>
        <hr  class="m-0 p-0">
    <div class="d-flex justify-content-between my-1">
        <div class="like">
            <i class="bi bi-hand-thumbs-up"></i> Like
        </div>
        <div class="comment" style="cursor:pointer">
            <i class="bi bi-chat"></i> Comment

        </div>
        <div class="share">
            <i class="bi bi-share"></i> Share

        </div>
    </div>
    
        <div class="comment-panel" style="display:none;">
            <form action="./post-comment.php" method="POST" class="d-flex align-items-center justify-content-between" autocomplete="off">
                <input  type="text" name="comment" style="box-shadow: 0 0 0 0;border:none;border-bottom:1px solid lightgray" class="form-control my-comment" placeholder="Add your comment...">
                <input  type="hidden" name="post_id" value="<?php echo $row['post_id'] ?>" style="box-shadow: 0 0 0 0;border:none;border-bottom:1px solid lightgray" class="form-control my-comment" placeholder="Add your comment...">
                <button class="bi bi-send make-comment text-info btn" style="cursor:pointer;transition:all 0.5s;transform:translate(100px,-100px);opacity:0;"></button>
            </form>
        </div>

</div>


<?php }} ?>