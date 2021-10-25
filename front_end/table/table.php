<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/x-icon" href="">
    <link rel="stylesheet" href="css/libs/bootstrap.min.css">
    <title>Employee and Doctor Management</title>
    <link rel="stylesheet" href="../table/styles/table.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon_16x16.png">
    <link rel="manifest" href="/site.webmanifest">
    <link href="https://fonts.googleapis.com/css?family=Poppins:100,300,400,700,900" rel="stylesheet">
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
                        <a href="table.php">
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
                        <a href="../main_page/login_view.php">
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
            <span>Hi, Welcome back</span>
        </div>
    </div>
    <table class="table">
        <thead>
        <tr id="uptop">
            <th>STT</th>
            <th>Staff ID</th>
            <th>Full Name</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Job</th>
            <th>Action</th>
        </tr>

        </thead>
        <tbody>
        <tr>
            <td>1</td>
            <td>123456</td>
            <td>Trung Pham</td>
            <td>0949038957</td>
            <td>Hà Nội</td>
            <td>Dev</td>
            <td>
                <button class="btn btn-default">
                    Edit
                </button>
                <button class="btn btn-danger">
                    Delete
                </button>

            </td>

        </tr>
        <tr>
            <td>2</td>
            <td>123456</td>
            <td>Trung Pham</td>
            <td>0949038957</td>
            <td>Hà Nội</td>
            <td>Dev</td>
            <td>
                <button class="btn btn-default">
                    Edit
                </button>
                <button class="btn btn-danger">
                    Delete
                </button>

            </td>

        </tr>

        </tbody>
    </table>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript"></script>
<script src="../table/sources/main.js"></script>
<script src="../table/sources/script.js"></script>
</body>
</html>