<div class="d-flex fs-6 justify-content-between">
    <h6>Home</h6>
    <a href="#" class="text-info">
        Create
    </a>
</div>

<ul class="d-flex flex-column list-unstyled gap-5 px-4 my-5" style="height: 100%;" >

<?php
    if(isset($_SESSION['username'])){
?>
    
    <h5 class="m-0 p-0"> <i class="bi bi-person"></i> Salam <?php echo $_SESSION['username'] ?>  </h5>
</li>

<?php }?>

<li class='d-flex gap-3 fs-5'> <div class="bi bi-play"></div> posts</li> 
<li class='d-flex gap-3 fs-5'> <div class="bi bi-person"></div> Users</li> 
<li class='d-flex gap-3 fs-5'> <div class="bi bi-plus"></div> Upload Stories</li> 
<li class='d-flex gap-3 fs-5'> <div class="bi bi-play"></div> Upload Reel</li> 
<li class='d-flex gap-3 fs-5'> <div class="bi bi-plus"></div> 
        <?php include './post_modal.php' ?>
</li> 
<li class='d-flex gap-3 fs-5'> <div class="bi bi-power"></div>
<a href="./logout.php" class="text-dark text-decoration-none"> Logout</a></li> 
</ul>