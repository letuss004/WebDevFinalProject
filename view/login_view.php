<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="asset/css/login_style.css">
    <title>Health Clinic Management</title>
    <link rel="apple-touch-icon" sizes="180x180" href="asset/image/favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/image/favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/image/favicon/favicon_16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
          rel="stylesheet">
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="../controller/login_process.php" id="loginForm" class="sign-in-form" name="myForm"
                  method="post">
                <h2 class="title">Sign in</h2>

                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" id="userNameLogin" name="Uname" placeholder="Username">
                </div>
                <span id="error-userName-login"></span>

                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" id="passLogin" name="Pass" placeholder="Password" autocomplete="off"/>
                </div>
                <span id="error-password-login"></span>

                <input type="button" value="Login" class="btn solid" onclick="validateLogIn()">
                <div class="social-text">
                    <input type="checkbox" name="remember-login" value="remember-login"
                           style="color: hsl(204, 70%, 53%);">
                    <span>Remember me next time</span>
                </div>
            </form>
        </div>
    </div>
</div>
<div class="panels-container">
    <div class="panel left-panel">
        <div class="content">
            <h3>Admin Control</h3>
            <p>
                Welcome to the Health Clinic Site.
            </p>
            <button class="btn transparent" onclick="window.location.href='front_page_view.php'"
                    id="sign-up-btn">
                Back
            </button>
        </div>
<!--                <img src="asset/images/medicine_bro.svg" class="image" alt=""/>-->
    </div>
</div>
<!--<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>-->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="asset/js/script.js"></script>

</body>
</html>
