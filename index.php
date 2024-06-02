<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/81/81341.png" type="image/x-icon">
    <?php include './boot_css.php' ?>
    <link rel="stylesheet" href="./styles.css">
    <title>MovizBook - log in or sign up</title>
    
</head>
<body>


    

    <div class="reg d-flex justify-content-center align-items-center" style="width:100vw;height:100vh;background:rgba(255,255,255,0.6);position:fixed;top:0;">
        
        <form action="./sign-up.php" class="bg-white shadow reg-form position-relative rounded-3 col-xl-3 col-lg-4 mx-auto p-5 " method="POST">
            <i class="bi  bi-x-lg position-absolute fs-4" style="right:10px;top:5px;cursor:pointer;"></i>
            <h4 class="text-center">Create a new account</h4>
            <p class="text-secondary text-center">
                It's quick and easy
            </p>
            <hr>
            <div class="d-flex gap-2 p-0 m-0">
                <input type="text" name="f_name" placeholder="First Name" class="form-control ">
                <input type="text" name="l_name" placeholder="Surname" class="form-control ">
            </div>
            <input type="text" name="m_mail" placeholder="Mobile number email address" class="form-control my-2">
            <input type="password" name="reg_password" placeholder="New Password" class="form-control my-2">
            <label for="">Date of birth <span class="bg-secondary text-white p-1" style="clip-path:circle()">?</span></label>
            <div class="d-flex gap-2">
                
                <select name="day" class="form-control">
                    <?php 
                        for($i=1;$i<=31;$i++){
                            echo "<option value=$i>
                                $i
                            </option>";
                        }   
                    ?>
                </select>
                <select name="month" class="form-control">
                    <?php
                    $months = ['Jan','Feb','Mar','Apr','May','Jun','Jul','Aug','Sep','Oct','Nov','Dec'];
                    for($i=0;$i<=count($months);$i++){
                        echo "<option value='{$months[$i]}'>
                            $months[$i]
                        </option>";
                    }
                    ?>
                </select>
                <select name="year" class="form-control">
                    <?php
                    
                    for($i=2024;$i>=1905;$i--){
                        echo "<option value='$i'>
                            $i  
                        </option>";
                    }
                    ?>
                </select>
            </div>
            <label for="">
                Gender <span class="bg-secondary text-white p-1" style="clip-path:circle()">?</span>
            </label>
            <div class="d-flex justify-content-between gap-2">
                <div class="d-flex border rounded-2 justify-content-between p-2 w-50">
                    <label for="">Female</label>
                    <input type="radio" class="form-check" value="female" name="gender" id="">
                </div>
                <div class="d-flex border rounded-2 justify-content-between p-2 w-50">
                    <label for="">Male</label>
                    <input type="radio" class="form-check" value="male" name="gender" id="">
                </div>
            </div>
            <p class="text-secondary" style="font-size:0.7rem">
                People who use our service may have uploaded your contact information to Facebook. Learn more.
            </p>
            <p class="text-secondary" style="font-size:0.7rem">
            By clicking Sign Up, you agree to our Terms, Privacy Policy and Cookies Policy. You may receive SMS notifications from us and can opt out at any time.
                </p>
                <button class="btn d-block mx-auto col-6 text-white fw-bold" style="background:#00A400">
                    Sign Up
                </button>
        </form>
    </div>

    <div class="container-fluid d-flex justify-content-center align-items-center" style="height:80vh;background:#F0F2F5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <img width="300px" src="https://upload.wikimedia.org/wikipedia/commons/thumb/8/89/Facebook_Logo_%282019%29.svg/1024px-Facebook_Logo_%282019%29.svg.png" alt="">
                <p class="display-6 mt-4">
                    Facebook helps you connect and share with the people in your life
                </p>
            </div>
            <div class="col-lg-6">
                <form action="" method="POST" class="col-lg-8 shadow rounded-3 mx-auto bg-white p-5">
                    <input type="text" class="form-control my-2" name="username" placeholder="Email address or phone number">
                    <input type="password" class="form-control my-2" name="pass" placeholder="Password">
                    <button class="btn btn-primary fw-bold w-100 my-1">
                        Log in
                    </button>
                    <a class="text-primary d-block text-center text-decoration-none" href="/">Forgotten password</a>
                    <hr>
                    <button type="button" style="background-color: #42B72A;width:max-content" class="btn text-white account fw-bold d-block p-2 mx-auto">
                        Create new account 
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
    <script>
        let btn =document.querySelector('.account')
        let close =document.querySelector('.bi-x-lg')
        let reg =document.querySelector('.reg')
        let regForm =document.querySelector('.reg-form')
        btn.addEventListener('click',()=>{
            reg.style.scale = '1'
            setTimeout(() => {
                regForm.style.transform = `translateY(0)`
            }, 500);
        })
        close.addEventListener('click',()=>{
            regForm.style.transform = 'translateY(150%)'
            setTimeout(()=>{
                reg.style.scale = '0'
            },500)
        })
    </script>
</body>
</html>