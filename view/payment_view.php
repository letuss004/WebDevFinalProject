<?php
session_start();

require_once "../controller/core/db_connection.php";

require_once "../model/job_model.php";

require_once "../model/employee_model.php";
if (!isset($_SESSION['login'])) {
    header('Location: login_view.php');
} else {
    $_SESSION['employees'] = readEmployeeWithAllAttributes();
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="css/libs/bootstrap.min.css">
    <title>Health Clinic Management</title>
    <link rel="stylesheet" href="asset/css/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/image/favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/image/favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/image/favicon/favicon_16x16.png">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>

    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-darkness/jquery-ui.css'
          rel='stylesheet'>
</head>
<body>
<header>
    <div class="container">
        <div class="navigation">
            <div class="tabs">
                <ul>
                    <li>
                        <a href="#">
                    <span class="icon"><ion-icon name="heart-circle-sharp"></ion-icon>
                    </span>
                            <span class="title"><h2>HealthCare</h2></span>
                        </a>
                    </li>
                    <li>
                        <a href="main_view.php">
                    <span class="icon"><ion-icon name="logo-buffer"></ion-icon>
                    </span>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="employee_tbl_view.php">
                    <span class="icon"><ion-icon name="people-circle"></ion-icon>
                    </span>
                            <span class="title">Employees</span>
                            <div class="dropdown-icon"></div>
                        </a>
                    </li>
                    <li>
                        <a href="payment_view.php">
                    <span class="icon"><ion-icon name="cash"></ion-icon>
                    </span>
                            <span class="title">Payments</span>
                            <div class="dropdown-icon"></div>
                        </a>
                    </li>
                    <li>
                        <a href="login_view.php">
                    <span class="icon"><ion-icon name="log-out"></ion-icon>
                    </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
</header>
<!--Main-->
<div class="main">
    <div class="topbar">
        <div class="toggle">
            <ion-icon name="menu-outline" onclick="toggleMenu()"></ion-icon>
        </div>
        <div class="user">
            <span>Hi, Welcome <?php echo $_SESSION['login']['username'] . " !" ?></span>
        </div>
    </div>

    <div class="wrapper">
        <div class="links">
            <ul>
                <li data-view="list-view" class="li-list active">
                    <i class="fas fa-th-list"></i>Employee Payment Status
                </li>
            </ul>
        </div>
        <div class="view_main">
            <div class="view_wrap list-view" style="display: block;">
                <?php
                $cnt = 1;
                foreach ($_SESSION['employees'] as $employee) {
                    $src = 'img' . $cnt . '.jpg';

                    echo "<div class='view_item'>";
                    echo "<div class='vi_left'>";
                    echo "<img src='asset/image/" . $src . "' alt=' ???'>";
                    echo "</div>";
                    echo "<div class='vi_right'>";
                    echo "<p class='title'>" . $employee['fullName'] . "</p>";
                    echo "<p class='content'>" . $employee['jobName'] . "</p>";
                    echo "<div class='btn'>";
                    $pu = "popup" . $cnt++;
                    echo "<a href='#" . $pu . "'>Status</a>";
                    echo "<div id='" . $pu . "' class='overlay'>";
                    echo "<div class='popup'>";
                    echo "<h2>" . $employee['fullName'] . "</h2>";
                    echo "<a class='close' href='#'>&times;</a>";
                    echo "<div class='content'>";
                    echo $employee['jobName'];
                    echo "<br>";
                    echo "Salary: " . $employee['salary'] . "$";
                    echo "<br>";
                    if ($employee['paymentStatus']) {
                        echo "Employee already got paid by the system";
                    } else {
                        echo "Employee in waiting for paid by the system";
                    }
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                    echo "</div>";
                }
                ?>
            </div>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript"></script>
<script src="asset/js/script.js"></script>
</body>
</html>