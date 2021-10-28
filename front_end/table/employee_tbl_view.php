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
    <link rel="stylesheet" href="../table/styles/table.css">
    <link rel="stylesheet" href="../table/styles/addButton.css">
    <link rel="stylesheet" href="../table/styles/editButton.css">
    <link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon_16x16.png">
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
                        <a href="employee_tbl_view.php">
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
            <span>Hi, Welcome <?php echo $_SESSION['username'] . " !" ?></span>
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
        <?php $cnt = 1;
        foreach ($_SESSION['employees'] as $employee) {
            echo "<tr>";
            echo "<td>";
            echo $cnt++;
            echo "</td>";
            echo "<td>";
            echo $employee['employeeID'];
            echo "</td>";
            echo "<td>";
            echo $employee['fullName'];
            echo "</td>";
            echo "<td>";
            echo $employee['phoneNumber'];
            echo "</td>";
            echo "<td>";
            echo $employee['address'];
            echo "</td>";
            echo "<td>";
            echo $employee['jobName'];
            echo "</td>";
            echo "<td>";
            echo "<button class='btn btn1'>";
            echo "Edit";
            echo "</button>";
            echo "<button class='btn btn2'>";
            echo "Delete";
            echo "</button>";

            echo "</td>";

            echo "</tr>";
        } ?>
        <td>
            <div class="popup" id="popup">
                <div class="overlay"></div>
                <div class="content">
                    <div class="close-btn" onclick="togglePop()">
                        <ion-icon name="checkmark-done-outline"></ion-icon>&times;</div>
                    <h1>Edit Employee</h1>
                    <div class="form-edit">
                        <div class="modal-edit">
                            <input type="number" id="number_edit" name="number" placeholder="Full Name"><br>
                            <input type="text" name="id_edit" placeholder="Staff Id"><br>
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="number" id="number_edit" name="phoneN" placeholder="Phone Number"><br>
                            <input type="text"  name="address" placeholder="Adress"><br>
                            <input type="text"  name="job" placeholder="Job"><br>

                        </div>
                    </div>
                </div>
            </div>
            <div class="edit-btn" onclick="togglePop()"><ion-icon name="create-outline"></ion-icon></div>
            <div class="edit">
                <div class="edit2"><ion-icon name="trash-outline"></ion-icon></div>
            </div>
</div>
</td>
</tr>
</tbody>
</table>
</div>
<div class="popup-1" id="popup--1">
    <div class="overlay-1"></div>
    <div class="content-1">
        <div class="close-btn-1" onclick="togglePopup()">
            <ion-icon name="checkmark-done-outline"></ion-icon>&times;</div>
        <h1>Add Employee</h1>
        <div class="form-add">
            <div class="modal">
                <input type="number"  id="number" name="number" placeholder="Number"><br>
                <input type="text"  name="id" placeholder="Staff Id"><br>
                <input type="text"  name="name" placeholder="Full Name"><br>
                <input type="number" id="number" name="phoneN" placeholder="Phone Number"><br>
                <input type="text"  name="address" placeholder="Adress"><br>
                <input type="text"  name="job" placeholder="Job"><br>
            </div>
        </div>
    </div>
</div>
<div class="add" onclick="togglePopup()"><ion-icon name="add-circle-outline"></ion-icon></div>

</div>
</div>
<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script type="text/javascript"></script>
<script src="../table/sources/main.js"></script>
<script src="../table/sources/script.js"></script>
<script src="../table/sources/add.js"></script>
<script src="../table/sources/edit.js"></script>
</body>
</html>