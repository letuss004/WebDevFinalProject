<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <script src="https://kit.fontawesome.com/64d58efce2.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../main_page/style/login_style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon_16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <title>Health Clinic Management</title>
</head>
<body>
<div class="container">
    <div class="forms-container">
        <div class="signin-signup">
            <form action="/back_end/login_process.php" class="sign-in-form" name="myForm" method="post">
                <h2 class="title">Sign in</h2>
                <div class="input-field">
                    <i class="fas fa-user"></i>
                    <input type="text" name="Uname" placeholder="Username">
                </div>
                <div class="input-field">
                    <i class="fas fa-lock"></i>
                    <input type="password" name="Pass" placeholder="Password" autocomplete="off"/>
                </div>
                <input type="submit" value="Login" class="btn solid" onclick="myFunction()">
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
            <button class="btn transparent" onclick="window.location.href='../front_page/front_page.php' +
             ''" id="sign-up-btn">
                Back
            </button>
        </div>
        <img src="../main_page/images/medicine_bro.svg" class="image" alt=""/>
    </div>
</div>
<script src="sources/firebase_data.js"></script>
<script src="../main_page/sources/function.js"></script>
<script src="sources/sign_in_function.js"></script>
<script src="https://www.gstatic.com/firebasejs/8.6.1/firebase-analytics.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="server.js"></script>
</body>
</html>
