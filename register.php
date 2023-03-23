<?php
    include 'config.php';
    $msg = "";
    if(isset($_POST['submit'])) {
    
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = mysqli_real_escape_string($conn, md5($_POST['password']));
    $confirm_password = mysqli_real_escape_string($conn, md5($_POST['confirm-password']));

    echo $name;
    if($password === $confirm_password) {

    } else {
        $msg="<div class='alert alert-danger'>Password and confirm password doesn not match</div>";

    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="width-device-width, intial-scale=1"/>
    <meta name="keywords" content="Login Form" />
    <title>CHFX Mart | Login Page </title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Quicksand:wght@600&display=swap" rel="stylesheet">

    <! -- Style CSS -->
    <link rel="stylesheet" href="css/style.css" type="text/css" media="all"/>

    <! -- JavaScript # 1-->
    <script src="https://kit.fontawesome.com/af562a2a63.js" crossorigin="anonymous"></script>
</head>
<body>

    <!-- Form Section -->
    <section class="mockup-form">
        <div class="container">
            <!-- Form -->
            <div clas="workinghny-form-grid">
                <div class="main-mockup">
                    <div class="alert-close">
                        <span class="fa fa-close"></span>
                    </div>
                    <div class="form align-self">
                        <div class="left-grid_info">
                            <img src="images/login.svg" alt="">
                        </div>
                    </div>
                    <div class="content3">
                        <h2>Login</h2>
                        <p> Welcome to CHFX Mart's Login Page </p>
                        <?php echo $msg; ?>
                        <form action="" method="post">
                            <input type="email" clas="email" name="email" placeholder="Please enter your email" required>
                            <input type="password" class="password" name="password" placeholder="Please enter your password" style="margin-bottom: 2px;" required>
                            <p><a href="forgot-password.php" style="margin-bottom: 15px; display: block; text-align right;">Forgot your password?</a></p> 
                            <button name="submit" name="submit" class="btn" type="submit">Login</button>
                        </form>
                        <div class="social-cons">
                            <p>Create an Account! <a href="register.php">Register</a>.</p>
                        </div>
                    </div>
                </div> 
            </div>
            <! -- Form begin -->
        </div>
    </section>

    <!-- JavaScrip form -->
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function (c) {
            $('.alert-close').on('click', function (c) {
                $('.main-mockup').fadeOut('slow', function (c) {
                    $('.main-mockup').remove();
                });
            });
        });
    </script>
</body>
</html>