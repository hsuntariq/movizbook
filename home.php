<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include './boot_css.php' ?>
    <title>MovizPage</title>
    <style>
            @media only screen and (min-width:600px){
                body{
                overflow:hidden !important;
            }
            }

            ::-webkit-scrollbar{
                width: 0;

            }
            ::-webkit-scrollbar-thumb{
                width: 0;

            }


        </style>
</head>
<body>

    <?php
        session_start();
            include './config.php';
        if(!isset($_SESSION['username'])){
            header("Location: $base_url");
        }

        if(isset($_SESSION['post_uploaded'])){
    ?>

            <div style="max-width:500px;left:50%;transform:translateX(-50%); width:max-content;background:green;top:30px;" class="flash position-fixed p-3 text-white rounded-pill fw-bolder px-5 shadow">
                <h5 class="m-0 p-0 text-center">
                    <?php echo $_SESSION['post_uploaded'] ?>
                </h5>
            </div>


            <?php }
                unset($_SESSION['post_uploaded']);
            ?>


    <?php include './header.php' ?>
    

            <div class="row">
                <div class="col-lg-2 py-3 border " style="height: 95vh;">
                    <?php include './sidebar.php' ?>
                    </div>
                    <div class="col-xl-6 col-lg-10 mx-auto p-lg-5" style="height:99.9vh;overflow-y:scroll">
                        <div class="col-lg-8 mx-auto p-3 scroll" style="overflow:scroll">
                            <?php include './stories.php' ?>
                        </div>
                        <div class="col-lg-8 mx-auto rounded-4 p-4">
                            <?php include './posts.php' ?>
                        </div>
                    
                    </div>
                    <div class="col-lg-2">
                    <!-- <?php include './user-list.php' ?> -->
                </div>
            </div>



    
        
        

        <?php include './boot_js.php' ?>


        <script>
            let myImage =document.querySelector('.img')
            let previewImage =document.querySelector('.preview-image')
            let flash =document.querySelector('.flash')
            let commentBtn =document.querySelectorAll('.comment')
            let commentPanel =document.querySelectorAll('.comment-panel')
            let myComment =document.querySelectorAll('.my-comment')
            let makeCommentBtn =document.querySelectorAll('.make-comment')
            
            myImage.addEventListener('input',(e)=>{
                const file = e.target.files[0];
                const url = URL.createObjectURL(file)
                previewImage.src = url
            })


             setTimeout(()=>{
            flash.style.transition = 'all 0.8s'
            flash.style.transform = 'translate(-50%,-200%) scale(0)'
        },2000)


        commentBtn.forEach((item,index)=>{
            item.addEventListener('click',()=>{
                commentPanel[index].style.display = 'block'
            })
        })


        myComment.forEach((item,index)=>{
            item.addEventListener('keyup',()=>{
                if(item.value.length > 0){
                    makeCommentBtn[index].style.transform = 'translate(0,0)'
                    makeCommentBtn[index].style.opacity = '1'
                }else{
                    makeCommentBtn[index].style.transform = 'translate(100px,100px)'
                    makeCommentBtn[index].style.opacity = '0'
                }
            })
        })

       

        </script>


</body>
</html>