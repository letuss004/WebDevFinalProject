<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="css/libs/bootstrap.min.css">
    <title>Health Clinic Management</title>
    <link rel="stylesheet" href="../list/styles/style.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon_16x16.png">
    <link rel="manifest" href="/site.webmanifest">
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
                        <a href="../main_page/main.php">
                    <span class="icon"><ion-icon name="logo-buffer"></ion-icon>
                    </span>
                            <span class="title">Home</span>
                        </a>
                    </li>
                    <li>
                        <a href="../table/table.php">
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
                        <a href="../main_page/login.php">
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
            <ion-icon name="menu-outline"></ion-icon>
        </div>

        <!-- <div class="search">
            <label>
                <input type="text" placeholder="Search here">
                <ion-icon name="search"></ion-icon>
            </label>

        </div> -->

        <div class="user">
            <span>Hi, Welcome back!</span>
        </div>
    </div>

    <div class="wrapper">
        <div class="links">
            <ul>
                <li data-view="list-view" class="li-list active">
                    <i class="fas fa-th-list"></i>Employee monthly paid
                </li>
            </ul>
        </div>
        <div class="view_main">
            <div class="view_wrap list-view" style="display: block;">
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img1.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Dr.John David</p>
                        <p class="content">Medical technologist</p>
                        <div class="btn">
                            <a href="#popup1">Status</a>
                            <div id="popup1" class="overlay">
                                <div class="popup">
                                    <h2>Dr.John David</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Medical technologist
                                        <br>
                                        Salary: 6000$
                                        <br>
                                        Employee already got paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img2.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Prof.William Howard</p>
                        <p class="content">Radiologic technician</p>
                        <div class="btn">
                            <a href="#popup2">Status</a>
                            <div id="popup2" class="overlay">
                                <div class="popup">
                                    <h2>Prof.William Howard</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Radiologic technician
                                        <br>
                                        Salary: 5000$
                                        <br>
                                        Employee got paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img3.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Dr.Boomman Elise</p>
                        <p class="content">Dietician</p>
                        <div class="btn">
                            <a href="#popup3">Status</a>
                            <div id="popup3" class="overlay">
                                <div class="popup">
                                    <h2>Dr.Israr Byrne</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Dietician
                                        <br>
                                        Salary: 1020$
                                        <br>
                                        Employee in waiting for paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img4.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Dr.Israr Byrne</p>
                        <p class="content">Registered nurse</p>
                        <div class="btn">
                            <a href="#popup4">Status</a>
                            <div id="popup4" class="overlay">
                                <div class="popup">
                                    <h2>Dr.Israr Byrne</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Registered nurse
                                        <br>
                                        Salary: 2050$
                                        <br>
                                        Employee got paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img5.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Phof.Ronaldo Chandler</p>
                        <p class="content">Respiratory therapist</p>
                        <div class="btn">
                            <a href="#popup5">Status</a>
                            <div id="popup5" class="overlay">
                                <div class="popup">
                                    <h2>Phof.Ronaldo Chandler</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Respiratory therapist
                                        <br>
                                        Salary: 3500$
                                        <br>
                                        Employee got paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img6.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Dr.Pino Hubbard</p>
                        <p class="content">Occupational therapist</p>
                        <div class="btn">
                            <a href="#popup3">Status</a>
                            <div id="popup3" class="overlay">
                                <div class="popup">
                                    <h2>Dr.Pino Hubbard</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Occupational therapist
                                        <br>
                                        Salary: 4000$
                                        <br>
                                        Employee in waiting for paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img7.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Phof.Susie Andrade</p>
                        <p class="content">Physician assistant</p>
                        <div class="btn">
                            <a href="#popup3">Status</a>
                            <div id="popup3" class="overlay">
                                <div class="popup">
                                    <h2>Susie Andrade</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Physician assistant
                                        <br>
                                        Salary: 1120$
                                        <br>
                                        Employee got paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="view_item">
                    <div class="vi_left">
                        <img src="../main_page/img/img8.jpg" alt="John David">
                    </div>
                    <div class="vi_right">
                        <p class="title">Mixia Johnny Wilks</p>
                        <p class="content">Guard</p>
                        <div class="btn">
                            <a href="#popup3">Status</a>
                            <div id="popup3" class="overlay">
                                <div class="popup">
                                    <h2>Mixia Johnny Wilks</h2>
                                    <a class="close" href="#">&times;</a>
                                    <div class="content">
                                        Guard
                                        <br>
                                        Salary: 920$
                                        <br>
                                        Employee in waiting for paid by the system
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script type="text/javascript"></script>
<script src="../list/sources/responsive.js"></script>
<script src="../list/sources/view.js"></script>
</body>
</html>