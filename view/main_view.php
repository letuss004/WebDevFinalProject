<?php
session_start();

if (!isset($_SESSION['login'])) {
    header('Location: login_view.php');
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
    <link rel="stylesheet" href="asset/css/home.css">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/image/favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/image/favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/image/favicon/favicon_16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
          rel="stylesheet">
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
                            <span class="title">HealthCare</span>
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
                        <a href="payment.php">
                    <span class="icon"><ion-icon name="cash"></ion-icon>
                    </span>
                            <span class="title">Payments</span>
                            <div class="dropdown-icon"></div>
                        </a>
                    </li>
                    <li>
                        <a href="../controller/logout.php">
                    <span class="icon"><ion-icon name="log-out"></ion-icon>
                    </span>
                            <span class="title">Sign Out</span>
                        </a>
                    </li>
                </ul>

            </div>
        </div>
    </div>
</header>
<!--Main-->
<div class="main">
    <div class="topbar">
        <!--//onclick="toggleMenu();" for toggle v1-->
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <!--UserImg-->
        <div class="user">
            <span>Hi, Welcome <?php
                if (isset($_SESSION['login'])) {
                    echo $_SESSION['login']['username'] . " !";
                }
                ?></span>
        </div>
    </div>

    <!--Card-->
    <div class="cardBox">
        <div class="card">
            <div>
                <div class="numbers">1,074</div>
                <div class="cardName">Patients</div>
            </div>
            <div class="iconBx">
                <ion-icon name="eye-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class='numbers'> <?php echo sizeof($_SESSION['employees']) ?> </div>
                <div class="cardName">Staffs</div>
            </div>
            <div class="iconBx">
                <ion-icon name="people-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers">2090</div>
                <div class="cardName">Supports Tickets</div>
            </div>
            <div class="iconBx">
                <ion-icon name="chatbubbles-outline"></ion-icon>
            </div>
        </div>
        <div class="card">
            <div>
                <div class="numbers"> <?php
                    require_once "../controller/main.php";
                    echo calTotalPaid($_SESSION['employees']);
                    ?></div>
                <div class="cardName">Paid</div>
            </div>
            <div class="iconBx">
                <ion-icon name="cash-outline"></ion-icon>
            </div>
        </div>
    </div>

    <!--Detail-->
    <div class="details">
        <!--Detail Ordered list-->
        <div class="recentOrders">
            <div class="cardHeader">
                <h2>Employees Status</h2>
                <a href="#" class="view">Status</a>
            </div>
            <table>
                <thead>
                <tr>
                    <td>Staffs Name</td>
                    <td>Jobs</td>
                    <td>Payment</td>
                    <td>Status</td>
                </tr>
                </thead>
                <tbody>
                <?php foreach ($_SESSION['employees'] as $employee) {
                    echo "<tr>";
                    echo "<td>" . $employee['fullName'] . "</td>";
                    echo "<td>" . $employee['jobName'] . "</td>";
                    echo "<td>";
                    if ($employee['paymentStatus']) {
                        echo "Paid";
                    } else {
                        echo "Due";
                    }
                    echo "</td>";
                    if (!@$employee['status']) {
                        echo "<td><span class='status available'>Available</span></td>";
                    } else if (@$employee['status'] == 1) {
                        echo "<td><span class='status pending'>In Progress</span></td>";
                    } else if (@$employee['status'] == 2) {
                        echo "<td><span class='status off-duty'>Off-Duty</span></td>";
                    } else {
                        echo "<td><span class='status inprogress'>In Progress</span></td>";
                    }
                    echo "</tr>";
                }
                ?>
                </tbody>
            </table>
        </div>

        <!--Clients list-->
        <div class="recentCustomers">
            <div class="cardHeader">
                <h2>Doctor & Nurses</h2>
                <span class="status available">Available</span>
            </div>
            <table>

                <?php
                foreach ($_SESSION['employees'] as $employee) {
                    if (!$employee['status']) {
                        echo "<tr>";
                        echo "<td width='60px'><div class='imgBx'><img src='' alt=''></div></td>";
                        echo "<td><h4>" . $employee['fullName'] . "<br><span>" . $employee['jobName'] . "</span></h4></td>";
                        echo "</tr>";
                    }
                }
                ?>
            </table>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="asset/js/script.js"></script>


</body>
</html>