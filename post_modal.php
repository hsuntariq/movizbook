<!-- Button trigger modal -->
<span type="button" class="" data-bs-toggle="modal" data-bs-target="#exampleModal">
  Upload Post
</span>

<!-- Modal -->
<div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <h1 class="modal-title fs-5" id="exampleModalLabel"> <i class="bi bi-photo"></i> Uplaod A Post</h1>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="./upload-post.php" method="POST" enctype="multipart/form-data" autocomplete="off">
            <input type="text" name="caption" class="form-control my-2">
            <input type="file" name="image" class="form-control img my-2">
            <div class="preview w-100 my-1" style="height: 300px;">
                <img width="100%" height="100%" class="preview-image" src="" alt="">
            </div>
            <button class="btn btn-primary my-2 w-100">
                Uplaod Post
            </button>
        </form>
      </div>
      
    </div>
  </div>
</div>