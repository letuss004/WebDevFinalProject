<?php
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="css/libs/bootstrap.min.css">
    <title>Employee and Doctor Management</title>
    <link rel="stylesheet" href="../main_page/style/home.css">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-darkness/jquery-ui.css'
          rel='stylesheet'>
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon_16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
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
                        <a href="../main_page/main.php">
                    <span class="icon"><ion-icon name="logo-buffer"></ion-icon>
                    </span>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="../table/employee_tbl_view.php">
                    <span class="icon"><ion-icon name="people-circle"></ion-icon>
                    </span>
                            <span class="title">Employees</span>
                            <div class="dropdown-icon"></div>
                        </a>
                    </li>
                    <li>
                        <a href="../list/payment.php">
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
    </div>
</header>
<!--Main-->
<div class="main">
    <div class="topbar">
        <!--//onclick="toggleMenu();" for toggle v1-->
        <div class="toggle">
            <ion-icon name="menu-outline"></ion-icon>
        </div>
        <!--Search-->
        <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search"></ion-icon>
            </label>

        </div>
        <!--UserImg-->
        <div class="user">
            <span>Hi, Welcome <?php echo $_SESSION['username'] . " !" ?></span>
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
                <div class="numbers">80</div>
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
                <div class="numbers">200</div>
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
                    echo "<td>";
                    echo $employee['fullName'];
                    echo "</td>";
                    echo "<td>";
                    echo $employee['jobName'];
                    echo "</td>";
                    echo "<td>";
                    if ($employee['paymentStatus']) {
                        echo "Paid";
                    } else {
                        echo "Due";
                    }
                    echo "</td>";
                    echo "<td>";
                    echo "<span class='status available'>Available</span></td>";
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
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img1.jpg" alt=""></div>
                    </td>
                    <td><h4>John David<br><span>Doctor Surgeon</span></h4></td>
                </tr>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img2.jpg" alt=""></div>
                    </td>
                    <td><h4>Maheen Callahan<br><span>Medical Records Director</span></h4></td>
                </tr>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img3.jpg" alt=""></div>
                    </td>
                    <td><h4>Jasmine Hutton<br><span>Legal Nurse Consultant</span></h4></td>
                </tr>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img4.jpg" alt=""></div>
                    </td>
                    <td><h4>Kirstie Mccoy<br><span>Nurse Anesthetist</span></h4></td>
                </tr>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img5.jpg" alt=""></div>
                    </td>
                    <td><h4>Rehaan Donaldson<br><span>Physician</span></h4></td>
                </tr>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img6.jpg" alt=""></div>
                    </td>
                    <td><h4>Amber Cox<br><span>Therapist</span></h4></td>
                </tr>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img7.jpg" alt=""></div>
                    </td>
                    <td><h4>Sophia-Rose Cottrell<br><span>Physician Assistant</span></h4></td>
                </tr>
                <tr>
                    <td width="60px">
                        <div class="imgBx"><img src="../main_page/img/img8.jpg" alt=""></div>
                    </td>
                    <td><h4>Orla Valdez<br><span>Athletic Trainer</span></h4></td>
                </tr>
            </table>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript"></script>
<script src="../main_page/sources/main.js"></script>
<script src="../main_page/sources/function.js"></script>
<script src="../main_page/sources/sign_in_function.js"></script>
</body>
</html>