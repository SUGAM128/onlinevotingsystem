<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <title>Login-Online Voting System</title>
    <link rel="stylesheet" href="assets/css/Login.css">
    <!-- <link rel="stylesheet" href="Assets/css/style.css"> -->
</head>

<body>
    <div class="container h-100">
        <div class="d-flex justify-content-center h-100">
            <div class="user_card">
                <div class="d-flex justify-content-center">
                    <div class="brand_logo_container">
                        <img src="images/oovs.jpg" class="brand_logo" alt="Logo">
                    </div>
                </div>
                <?php
                if (isset($_GET['sign-up'])) {
                    ?>
                <div class="d-flex justify-content-center form_container">
                    <form method="POST">
                        <h1 class="login1"><b>Register</b></h1>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="su_fullname" class="form-control input_user"
                                placeholder="Full Name" required />
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" name="su_ctzn" class="form-control input_pass"
                                placeholder="Citizenship no." required />
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-calendar"></i></span>
                            </div>
                            <input type="text" onfocus="this.type='date'" name="su_dob" class="form-control input_pass" placeholder="Date of Birth"
                                required />
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="text" name="su_email" class="form-control input_pass"
                                placeholder="Email Address" required />
                        </div>
                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="su_password" class="form-control input_pass"
                                placeholder="Password" required />
                        </div>

                        <div class="form-group">

                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="sign_up_btn" class="btn login_btn">Sign Up</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links text-white">
                        Already Created Account? <a href="index.php" class="ml-2 text-white">Sign In</a>
                    </div>

                </div>
                <?php
                } else {
                    ?>
                <div class="d-flex justify-content-center form_container">
                    <form method="POST">
                        <h1 class="login"><b>Log In</b></h1>
                        <div class="input-group mb-3">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-user"></i></span>
                            </div>
                            <input type="text" name="email" class="form-control input_user" placeholder="email"
                                required />
                        </div>

                        <div class="input-group mb-2">
                            <div class="input-group-append">
                                <span class="input-group-text"><i class="fas fa-key"></i></span>
                            </div>
                            <input type="password" name="password" class="form-control input_pass"
                                placeholder="password" required />
                        </div>
                        <div class="form-group">

                        </div>
                        <div class="d-flex justify-content-center mt-3 login_container">
                            <button type="submit" name="login_btn" class="btn login_btn"
                                class="text-grey">Login</button>
                        </div>
                    </form>
                </div>

                <div class="mt-4">
                    <div class="d-flex justify-content-center links text-white">
                        Don't have an account? <a href="?sign-up=1" class="ml-2 text-white">Sign Up</a>
                    </div>
                    <div class="d-flex justify-content-center links text-white">
                        <a href="#" class="text-white">Forgot your password?</a>
                    </div>
                </div>
                <?php
                }
                ?>
                <?php
                if(isset($_GET["registered"]))
                {
                    ?>
                <span class="bg-white text-center text-success ">Registered sucessfully !!</span>
                <?php
                }else if(isset($_GET['invalid'])){
                ?>
                <span class="bg-white text-danger ">Password mismatched, please try again !</span>

                <?php
                }else if(isset($_GET['not_registered'])){
                    ?>
                <span class="bg-white text-danger text-center my -3 "> Sorry, you are not registered !!</span>

                <?php
                    }else if(isset($_GET['invalid_access'])){
                        ?>
                <span class="bg-white text-danger text-center my-3 "> Invalid email or password !!</span>

                <?php
                        }
                ?>
                <?php
                if(isset($_GET["duplicate_data"]))
                {
                    ?>
                <span class="bg-white text-danger text-center my-3 ">Citizenship no. is already registered !!</span>
                <?php
                }
                ?>
                <?php
                if(isset($_GET["age_error"]))
                {
                    ?>
                <span class="bg-white text-danger text-center my-3 ">Not Eligible TO Vote !!</span>
                <?php
                }
                ?>
                <?php
                if(isset($_GET["email_exists"]))
                {
                    ?>
                <span class="bg-white text-danger text-center my-3 ">Email address is already registered !!</span>
                <?php
                }if(isset($_GET["login_success"]))
                {
                    ?>
                <span class="bg-white text-success text-center my-3 ">login successful !!</span>
                <?php
                }
                ?>
            </div>
        </div>
    </div>
    <script src="assets/js/abc.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
</body>

</html>



<?php
require_once("Admin/inc/config.php");

if (isset($_POST['sign_up_btn'])) {
    $su_fullname = mysqli_real_escape_string($db, $_POST['su_fullname']);
    $su_ctzn = mysqli_real_escape_string($db, $_POST['su_ctzn']);
    $su_dob = mysqli_real_escape_string($db, $_POST['su_dob']);
    $su_email = mysqli_real_escape_string($db, $_POST['su_email']);
    $su_password = mysqli_real_escape_string($db, sha1($_POST['su_password']));
    $user_role = "voter";
    
    $birthdate = new DateTime($su_dob);
    $today = new DateTime();
    $age = $birthdate->diff($today)->y;

    if ($age < 18) {
        ?>
        <script>
           
            location.assign("index.php?age_error=1");
        </script>
        <?php
    } else {
    $existingData = mysqli_query($db, "SELECT * FROM users WHERE citizenship_no = '".$su_ctzn."'");
    if (mysqli_num_rows($existingData) > 0) {
        ?>
        <script>location.assign("index.php?duplicate_data=1")</script>
        <?php
    } 
   else {
    if ($su_password != NULL) {
        $existingEmail = mysqli_query($db, "SELECT * FROM users WHERE email = '".$su_email."'");
        if (mysqli_num_rows($existingEmail) > 0) {
            ?>
            <script>
                location.assign("index.php?sign-up=1&email_exists=1");
            </script>
            <?php
        } else {
            mysqli_query($db, "INSERT INTO users (fullname, citizenship_no, date_of_birth, email, password, user_role) VALUES ('".$su_fullname."','".$su_ctzn."','".$su_dob."','".$su_email."','".$su_password."','".$user_role."')") or die(mysqli_error($db));
            ?>
            <script>
                location.assign("index.php?registered=1");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            location.assign("index.php?sign-up=1&invalid=1");
        </script>
        <?php
    }
}
    }
}

else if (isset($_POST['login_btn'])){
    $email = mysqli_real_escape_string($db, $_POST['email']);
    $password = mysqli_real_escape_string($db, sha1($_POST['password']));

    $fetchingData = mysqli_query($db, "Select *FROM users WHERE email='".$email."'") or die (mysqli_error($db));
    if (mysqli_num_rows($fetchingData) > 0) {
        $data = mysqli_fetch_assoc($fetchingData);
        if($email == $data['email'] AND $password == $data['password']) {
         /*   ?>
            <script>
                location.assign("index.php?login_success=1");
            </script>
            <?php */
            session_start();
            $_SESSION ['user_role']=$data['user_role'];
            $_SESSION ['username']=$data['username'];
            
            if ($data['user_role']== "Admin")
            {
                $_SESSION ['key']='Adminkey';
                ?>
                <script>location.assign("admin/index.php?homepage=1");</script>
                <?php

            }else{
                $_SESSION ['key']='voterkey';
                ?>
                <script> location.assign("voter/inder.php");</script>
                <?php

            }
            
            
        } else {
            
            
            ?>
            <script>
                location.assign("index.php?invalid_access=1");
            </script>
            <?php
        }
    } else {
        ?>
        <script>
            location.assign("index.php?not_registered=1");
        </script>
        <?php
    }
}
?>