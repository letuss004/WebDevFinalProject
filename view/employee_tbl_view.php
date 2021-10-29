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
    <link rel="stylesheet" href="asset/css/bootstrap.min.css">
    <title>Health Clinic Management</title>
    <link rel="stylesheet" href="asset/css/table.css">
    <link rel="stylesheet" href="asset/css/addButton.css">
    <link rel="stylesheet" href="asset/css/editButton.css">
    <link rel="apple-touch-icon" sizes="180x180" href="asset/image/favicon/apple_touch_icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="asset/image/favicon/favicon_32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="asset/image/favicon/favicon_16x16.png">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700&display=swap"
          rel="stylesheet">
    <script src="https://code.jquery.com/jquery-3.6.0.js"></script>
    <script src="https://code.jquery.com/ui/1.13.0/jquery-ui.js"></script>
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
                        <a href="payment.php">
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
            <span>Hi, Welcome <?php echo $_SESSION['login']['username'] . " !" ?></span>
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
            echo "<td>" . $cnt++ . "</td>";
            echo "<td>" . $employee['employeeID'] . "</td>";
            echo "<td>" . $employee['fullName'] . "</td>";
            echo "<td>" . $employee['phoneNumber'] . "</td>";
            echo "<td>" . $employee['address'] . "</td>";
            echo "<td>" . $employee['jobName'] . "</td>";
            echo "<td>" . "<button class='btn btn-default'>" . "Edit" . "</button>";
            echo "<button class='btn btn-danger'>" . "Delete" . "</button>";
            echo "</td>";
            echo "</tr>";
        } ?>

        <td>
            <div class="popup" id="popup">
                <div class="overlay"></div>
                <div class="content">
                    <div class="close-btn" onclick="togglePop()">&times;
                    </div>
                    <h1>Edit Employee</h1>
                    <div class="form-edit">
                        <div class="modal-edit">
                            <input type="text" name="number" placeholder="Full Name"><br>
                            <input type="text" name="id_edit" placeholder="Staff Id"><br>
                            <input type="text" name="name" placeholder="Full Name">
                            <input type="text" name="phoneN" placeholder="Phone Number"><br>
                            <input type="text" name="address" placeholder="Address"><br>
                            <input type="text" name="job" placeholder="Job"><br>
                            <div class="container_btn_edit">
                                <button id="submit_edit">Submit</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="edit-btn" onclick="togglePop()">
                <ion-icon name="create-outline"></ion-icon>
            </div>
            <div class="edit">
                <div class="edit2">
                    <ion-icon name="trash-outline"></ion-icon>
                </div>
            </div>
            <!--        </td>-->
            <!--        </tr>-->
        </tbody>
    </table>
</div>


<div class="popup-1" id="popup--1">
    <div class="overlay-1">
    </div>
    <div class="content-1">
        <div class="close-btn-1" onclick="togglePopup()">&times;
        </div>
        <h1>Add Employee</h1>
        <div class="form-add">
            <div class="modal">
                <input type="text"  name="number" placeholder="Number"><br>
                <input type="text" name="id" placeholder="Staff Id"><br>
                <input type="text" name="name" placeholder="Full Name"><br>
                <input type="text"  name="phoneN" placeholder="Phone Number"><br>
                <input type="text" name="address" placeholder="Address"><br>
                <input type="text" name="job" placeholder="Job"><br>
                <div class="container_btn">
                    <button id="submit">Submit</button>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="add" onclick="togglePopup()">
    <ion-icon name="add-circle-outline"></ion-icon>

</div>


<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
<script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js"></script>
<script src="asset/js/script.js">
</script>


</body>
</html>