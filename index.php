<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="https://cdn-icons-png.flaticon.com/256/81/81341.png" type="image/x-icon">
    <?php include './boot_css.php' ?>
    <title>MovizBook - log in or sign up</title>
</head>
<body>


    

    <div class="reg d-flex justify-content-center align-items-center" style="width:100vw;height:100vh;background:rgba(0,0,0,0.6);position:fixed;top:0;">
        
        <form action="" class="bg-white shadow rounded-3 col-xl-4 col-lg-6 mx-auto p-5 " method="POST">
            <h4 class="text-center">Create a new account</h4>
            <p class="text-secondary text-center">
                It's quick and easy
            </p>
            <hr>
            <div class="d-flex">
                <input type="text" name="f_name" placeholder="First Name" class="form-control">
                <input type="text" name="l_name" placeholder="Surname" class="form-control">
            </div>
            <input type="text" name="m_mail" placeholder="Mobile number email address" class="form-control">
            <input type="password" name="password" placeholder="New Password" class="form-control">
            <label for="">Date of birth <span>?</span></label>
            <div class="d-flex">
                
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
                    <input type="password" class="form-control my-2" name="password" placeholder="Password">
                    <button class="btn btn-primary fw-bold w-100 my-1">
                        Log in
                    </button>
                    <a class="text-primary d-block text-center text-decoration-none" href="/">Forgotten password</a>
                    <hr>
                    <button style="background-color: #42B72A;width:max-content" class="btn text-white fw-bold d-block p-2 mx-auto">
                        Create new account 
                    </button>
                </form>
            </div>
        </div>
    </div>
    </div>
</body>
</html>